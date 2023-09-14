<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    //to show all data on the database already in

    public function index(){
        $music = Music::all();
        return $music;
    }
//creating and saving new data as a result of the use of POST 

    public function store(Request $request){
        $music = Music::create($request->all());
        return response()->json($music,201);
    }
//to get and show data base, 'id' will be the assign value to show USING GET

    public function show($id)
    {
        $music = Music::findOrFail($id);
        return response()->json(['data' => $music]);
    }
//To update information on the data base, with a PUT 

    public function update(Request $request, string $id){
        $music = Music::findOrFail($id);
        $music->update($request->all());
        return response()->json($music,200);
    }
}