<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    //to show all data on the database already in
    public function index(){
        $appointment = Appointment::all();
        return $appointment;
    }
//creating and saving new data as a result of the use of POST 

    public function store(Request $request){
        $appointment = Appointment::create($request->all());
        return response()->json($appointment,201);
    }
//to get and show data base, 'id' will be the assign value to show USING GET

    public function show($id)
    {
        $appointment = Appointment::findOrFail($id);
        return response()->json(['data' => $appointment]);
    }
//To update information on the data base, with a PUT 

    public function update(Request $request, string $id){
        $appointment = Appointment::findOrFail($id);
        $appointment->update($request->all());
        return response()->json($appointment,200);
    }
}