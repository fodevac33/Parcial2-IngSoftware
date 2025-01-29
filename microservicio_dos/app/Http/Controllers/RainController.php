<?php

namespace App\Http\Controllers;

use App\Models\Rain;
use Illuminate\Http\Request;

class RainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all fires from the database
        $rains = Rain::all();
        
        // Return JSON response
        return response()->json($rains);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Create a new Fire record in the database
        $rains = Rain::create($request->all());

        // Return JSON response with the created fire record
        return response()->json($rains, 201); // 201 = Created
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Find the fire record by ID
        $rain = Rain::findOrFail($id);
        
        // Return JSON response
        return response()->json($rain);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Find the fire record by ID and update it
        $rain = Rain::findOrFail($id);
        $rain->update($request->all());

        // Return JSON response with the updated fire record
        return response()->json($rain);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the fire record by ID and delete it
        $rain = Rain::findOrFail($id);
        $rain->delete();

        // Return a success response with no content
        return response()->json(null, 204); // 204 = No Content
    }
}