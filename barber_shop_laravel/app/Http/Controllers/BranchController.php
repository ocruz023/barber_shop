<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
//to show all data on the database already in
{
    public function index(){
        $branch = Branch::all();
        return $branch;
    }
//creating and saving new data as a result of the use of POST 
    public function store(Request $request){
        $branch = Branch::create($request->all());
        return response()->json($branch,201);
    }
//to get and show data base, 'id' will be the assign value to show USING GET
    public function show($id)
    {
        $branch = Branch::findOrFail($id);
        return response()->json(['data' => $branch]);
    }
//To update information on the data base, with a PUT 
    public function update(Request $request, string $id){
        $branch = Branch::findOrFail($id);
        $branch->update($request->all());
        return response()->json($branch,200);
    }
}