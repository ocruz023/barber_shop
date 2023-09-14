<?php

namespace App\Http\Controllers;

use App\Models\Stylist;
use Illuminate\Http\Request;

class StylistController extends Controller
{
    //to show all data on the database already in

    public function index(){
        $stylist = Stylist::all();
        return $stylist;
    }
//creating and saving new data as a result of the use of POST 

    public function store(Request $request){
        $stylist = Stylist::create($request->all());
        return response()->json($stylist,201);
    }
//to get and show data base, 'id' will be the assign value to show USING GET

    public function show($id)
    {
        $stylist = Stylist::findOrFail($id);
        return response()->json(['data' => $stylist]);
    }
//To update information on the data base, with a PUT 

    public function update(Request $request, string $id){
        $stylist = Stylist::findOrFail($id);
        $stylist->update($request->all());
        return response()->json($stylist,200);
    }
}