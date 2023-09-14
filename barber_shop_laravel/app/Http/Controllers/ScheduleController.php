<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
//to show all data on the database already in

    public function index(){
        $schedule = Schedule::all();
        return $schedule;
    }
//creating and saving new data as a result of the use of POST 

    public function store(Request $request){
        $schedule = Schedule::create($request->all());
        return response()->json($schedule,201);
    }
//to get and show data base, 'id' will be the assign value to show USING GET

    public function show($id)
    {
        $schedule = Schedule::findOrFail($id);
        return response()->json(['data' => $schedule]);
    }
//To update information on the data base, with a PUT 
    public function update(Request $request, string $id){
        $schedule = Schedule::findOrFail($id);
        $schedule->update($request->all());
        return response()->json($schedule,200);
    }
}