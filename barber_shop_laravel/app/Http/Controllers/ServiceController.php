<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
//to show all data on the database already in

    public function index(){
    $service = Service::all();
    return $service;
    
    }
//creating and saving new data as a result of the use of POST 
  
    public function store(Request $request){
        $service = Service::create($request->all());
        return response()->json($service, 201);
    }
//to get and show data base, 'id' will be the assign value to show USING GET

    public function show($id){
    $service = Service::findOrFail($id);
    return response()->json(['data' => $service]);

    }
//To update information on the data base, with a PUT 

    public function update(Request $request, string $id){
        $service = Service::findOrFail($id);
        $service->update($request->all());
        return response()->json($service,200);
    }
}
