<?php

namespace App\Http\Controllers;

use App\Events\PusherBroadcast;
use Illuminate\Http\Request;

class PusherController extends Controller
{
    public function index() 
    {
        event(new PusherBroadcast('Testing'));
    }

    public function broadcast(Request $request) 
    {
        event(new PusherBroadcast($request->message));
        // broadcast(new PusherBroadcast($request->get('message')))->toOthers();
        return response()->json(['success' => 'Feeding...']);
    }

    public function receive(Request $request)
    {
        return response()->json(['message' => $request->get('message')]);
    }
}
