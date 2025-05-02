<?php

namespace App\Http\Controllers;

use App\Models\Election;
use Illuminate\Http\Request;
use App\Models\Department;

class ElectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $elections = Election::with(['department'])->get();
        $departments = Department::all();
    
        return view('department-admin.elections', compact('elections', 'departments'));
        // Fixed the typo in the variable name
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(Election $elections)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Election $elections)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Election $elections)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Election $elections)
    {
        //
    }
}
