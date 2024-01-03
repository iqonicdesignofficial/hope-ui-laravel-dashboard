<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFeedingDataRequest;
use App\Http\Requests\UpdateFeedingDataRequest;
use App\Models\ActivityRecord;
use App\Models\FeedingData;

class FeedingDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

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
        request()->validate([
            'tank_no' => 'required',
            'temperature' => 'required',
            'device_no' => 'required'
        ]);

        FeedingData::create($request->all());
        ActivityRecord::create([
            'activity' => $request->feeding_mode,
            'device_no' => $request->device_no,
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
