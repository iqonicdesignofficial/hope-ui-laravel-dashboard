<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreActivityRecordRequest;
use App\Http\Requests\UpdateActivityRecordRequest;
use App\Models\ActivityRecord;
use App\Models\DeviceData;

class ActivityRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ActivityRecord::all();
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
    public function store(StoreActivityRecordRequest $request)
    {
        $request()->validate([
            'ativity' => 'required',
            'tank_no' => 'required',
            'device_code' => 'required'
        ]);
        
        $device = DeviceData::where('device_code', $request->device_code)->first();

        if (!$device)
            return response()->json([], 400);

        ActivityRecord::create($request->all());

        return response()->json([], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(ActivityRecord $activityRecord)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ActivityRecord $activityRecord)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateActivityRecordRequest $request, ActivityRecord $activityRecord)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ActivityRecord $activityRecord)
    {
        //
    }
}
