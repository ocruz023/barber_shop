<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    //to show all data on the database already in

    public function index(){
        $clients = Client::all();
        return $clients;
    }
//creating and saving new data as a result of the use of POST 

    public function store(Request $request){
        $clients = Client::create($request->all());
        return response()->json($clients,201);
    }
//to get and show data base, 'id' will be the assign value to show USING GET

    public function show($id)
    {
        $client = Client::findOrFail($id);
        return response()->json(['data' => $client]);
    }
//To update information on the data base, with a PUT 

    public function update(Request $request, string $id){
        $clients = Client::findOrFail($id);
        $clients->update($request->all());
        return response()->json($clients,200);
    }
}