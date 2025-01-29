<?php

namespace App\Http\Controllers;

use App\Models\Fire;
use Illuminate\Http\Request;

class FireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all fires from the database
        $fires = Fire::all();
        
        // Return JSON response
        return response()->json($fires);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Create a new Fire record in the database
        $fire = Fire::create($request->all());

        // Return JSON response with the created fire record
        return response()->json($fire, 201); // 201 = Created
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Find the fire record by ID
        $fire = Fire::findOrFail($id);
        
        // Return JSON response
        return response()->json($fire);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Find the fire record by ID and update it
        $fire = Fire::findOrFail($id);
        $fire->update($request->all());

        // Return JSON response with the updated fire record
        return response()->json($fire);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the fire record by ID and delete it
        $fire = Fire::findOrFail($id);
        $fire->delete();

        // Return a success response with no content
        return response()->json(null, 204); // 204 = No Content
    }
}