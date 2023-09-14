<?php

namespace App\Http\Controllers;

use App\Models\Drink;
use Illuminate\Http\Request;

class DrinkController extends Controller
{
//to show all data on the database already in

    public function index(){
        $drink = Drink::all();
        return $drink;
    }
//creating and saving new data as a result of the use of POST 

    public function store(Request $request){
        $drink = Drink::create($request->all());
        return response()->json($drink,201);
    }
//to get and show data base, 'id' will be the assign value to show USING GET

    public function show($id)
    {
        $drink = Drink::findOrFail($id);
        return response()->json(['data' => $drink]);
    }
//To update information on the data base, with a PUT 

    public function update(Request $request, string $id){
        $drink = Drink::findOrFail($id);
        $drink->update($request->all());
        return response()->json($drink,200);
    }
}