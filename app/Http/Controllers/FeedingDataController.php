<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFeedingDataRequest;
use App\Http\Requests\UpdateFeedingDataRequest;
use App\Models\ActivityRecord;
use App\Models\DeviceData;
use App\Models\FeedingData;
use PhpParser\Node\Stmt\Foreach_;

class FeedingDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Get Weekly average temperature
     */
    public function getWeeklyTemp($device_no) {
        $startDay = now()->startOfWeek();
        $endDay = now()->endOfWeek();

        $getDailytemperature = function ($tank_no) use ($startDay, $endDay, $device_no) {
            $weeklyData = FeedingData::whereBetween('created_at', [$startDay, $endDay])
                ->where('tank_no', $tank_no)
                ->where('device_no', $device_no)
                ->get();

            $temperatureData = [];

            foreach ($weeklyData as $record) {
                $day = $record->created_at->format('Y-m-d');
                $temperature = $record->temperature;

                if (!isset($temperatureData[$day])) {
                    $temperatureData[$day] = [];
                }
                $temperatureData[$day][] = $temperature;
            }

            ksort($temperatureData);
    
            return $temperatureData;
        };

        $getWeeklyAverage = function ($temperatureData) {
            $weeklyAverage = [];
            foreach ($temperatureData as $day => $temperatures) {
                $temp = array_sum($temperatures) / count($temperatures);
                $weeklyAverage[$day] = number_format($temp, 1);
            }
            return $weeklyAverage;
        };

        $WeeklyData_t1 = $getDailytemperature(1);
        $WeeklyData_t2 = $getDailytemperature(2);
        $weeklyAverage_t1 = $getWeeklyAverage($WeeklyData_t1);
        $weeklyAverage_t2 = $getWeeklyAverage($WeeklyData_t2);
        $average_t1 = array_sum($weeklyAverage_t1) / count($weeklyAverage_t1);
        $average_t1 = number_format($average_t1, 1);
        $average_t2 = array_sum($weeklyAverage_t2) / count($weeklyAverage_t2);
        $average_t2 = number_format($average_t2, 1);
        

        return response()->json([
                [
                    'tank_no' => 1,
                    'weekly_data' => array_values($weeklyAverage_t1),
                    'weekly_average' => $average_t1
                ],
                [
                    'tank_no' => 2,
                    'weekly_data' => array_values($weeklyAverage_t1),
                    'weekly_average' => $average_t2
                ]
        ]);
    }

    /**
     * Get Feeding frequency per day for a week 
     */
    public function getFeedingFrequency($device_no)
    {
        $startDay = now()->startOfWeek();
        $endDay = now()->endOfWeek();
    
        $getDailyFrequencies = function ($tank_no) use ($startDay, $endDay, $device_no) {
            $weeklyData = FeedingData::whereBetween('created_at', [$startDay, $endDay])
                ->where('tank_no', $tank_no)
                ->where('device_no', $device_no)
                ->get();
    
            $dailyFrequencies = [];
    
            foreach ($weeklyData as $record) {
                $day = $record->created_at->format('Y-m-d');
    
                if (isset($dailyFrequencies[$day])) {
                    $dailyFrequencies[$day]++;
                } else {
                    $dailyFrequencies[$day] = 1;
                }
            }
    
            ksort($dailyFrequencies);
    
            return $dailyFrequencies;
        };
    
        $dailyFrequencies_t1 = $getDailyFrequencies(1);
    
        $dailyFrequencies_t2 = $getDailyFrequencies(2);
    
        $response = [
            [
                'name' => 'tank 1',
                'data' => array_values($dailyFrequencies_t1)
            ],
            [
                'name' => 'tank 2',
                'data' => array_values($dailyFrequencies_t2)
            ]
        ];
    
        return response()->json($response, 200);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFeedingDataRequest $request)
    {
       $request->validate([
            'tank_no' => 'required',
            'temperature' => 'required',
            'device_code' => 'required'
        ]);

        $device = DeviceData::where('device_code', $request->device_code)->first();
    
        if (!$device) {
            return response()->json([], 400);
        }
    
        FeedingData::create([
            'tank_no' => $request->tank_no,
            'temperature' => $request->temperature,
            'device_no' => $device->id,
            'feeding_mode' => $request->feeding_mode
        ]);
    
        ActivityRecord::create([
            'ativity' => $request->feeding_mode,
            'device_no' => $device->id,
            'tank_no' => $request->tank_no
        ]);
    
        return response()->json([], 200);
    }    

    /**
     * Display the specified resource.
     */
    public function show(FeedingData $feedingData, $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FeedingData $feedingData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFeedingDataRequest $request, FeedingData $feedingData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FeedingData $feedingData)
    {
        //
    }
}
