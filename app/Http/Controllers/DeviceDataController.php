<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDeviceDataRequest;
use App\Http\Requests\UpdateDeviceDataRequest;
use App\Models\ActivityRecord;
use App\Models\DeviceData;
use App\Models\FeedingData;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DeviceDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return DeviceData::all();
    }

    /**
     * Return Device lists
     */
    public function deviceList()
    {
        $devices = DeviceData::all();
        $deviceList = [];

        foreach ($devices as $device) {
            $deviceList[] = [
                'name' => ('Device ' . $device->id),
                'route' => route('dashboard.device', ['id' => $device->id]),
                'destroy' => route('device.destroy', ['id'=> $device->id]),
                'icon' => 'H',
                'status' => $device->device_status
            ];
        }

        return response()->json($deviceList);
    }

    /**
     * Update Device status to online
     */
    public function makeOnline(Request $request) 
    {   
        request()->validate([
            'device_code' => 'required',
            'tank_size' => 'required'
        ]);

        $device = DeviceData::where('device_code', $request->device_code)->first();
        
        if ($device) {
            $device->update(['device_status' => 'online']);
            $device->update(['tank_size' => $request->tank_size]);

            return response()->json(['message' => 'Device Connected'], 200);
        } else {

            return response()->json(['message' => 'No device in record'], 200);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDeviceDataRequest $request): View
    {   
        request()->validate([
            'device_code' => 'required'
        ]);
        $device = DeviceData::where('device_code', $request->device_code)->first();

        if ($device) {
            $error = 'device already exists';
            $devices = DeviceData::all();
            return view('dashboards.dashboard', compact('error', 'devices'));

        } else {
            DeviceData::create([
                'device_code' => $request->device_code,
                'device_ip' => '192.168.4.1',
                'camera1_ip' => '192.168.1.69',
                'camera2_ip' => '192.168.1.69',
                'device_status' => 'offline'
            ]);
            $success = 'device added';
            $devices = DeviceData::all();
            return view('dashboards.dashboard', compact('success', 'devices'));
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $assets = ['chart', 'animation'];
        $device = DeviceData::where('id', $id)->first();
        $activities = ActivityRecord::where('device_no', $id)->simplePaginate(5);
        return view('dashboards.device', compact('assets', 'device', 'activities'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DeviceData $deviceData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDeviceDataRequest $request, DeviceData $deviceData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DeviceData $deviceData, $id)
    {
        //
    }
}
