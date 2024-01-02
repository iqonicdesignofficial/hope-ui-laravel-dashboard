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
