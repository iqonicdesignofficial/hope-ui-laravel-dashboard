<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDeviceDataRequest;
use App\Http\Requests\UpdateDeviceDataRequest;
use App\Models\ActivityRecord;
use App\Models\DeviceData;
use App\Models\FeedingData;
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
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDeviceDataRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $assets = ['chart', 'animation'];
        $device = DeviceData::where('id', $id)->first();
        $activities = ActivityRecord::where('device_no', $id)->simplePaginate(5);
        $feedingData = FeedingData::all();
        return view('dashboards.device', compact('assets', 'device', 'activities', 'feedingData'));
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
    public function destroy(DeviceData $deviceData)
    {
        //
    }
}
