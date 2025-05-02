<?php

namespace App\Http\Controllers;

use App\Models\UserType;
use Illuminate\Http\Request;

class UserTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $userTypes = UserType::all();
        
        // Return the view with the user types
        return view('admin.manage-userType', ['userTypes' => $userTypes]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.manage-userType'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'userType_name' => 'required|string|max:255|unique:userType',
        ]);

        // Create a new user type
        UserType::create([
            'userType_name' => $request->userType_name,
        ]);

        // Redirect with success message
        return redirect()->route('userTypes.index')->with('success', 'User type created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($userType_id)
    {
        // Find the user type by ID
        $userType = UserType::where('userType_id', $userType_id)->firstOrFail();

        return view('admin.manage-userType', compact('userType')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($userType_id)
    {
        $userType = UserType::where('userType_id', $userType_id)->firstOrFail();

        return view('admin.manage-userType', compact('userType')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $userType_id)
    {
        $request->validate([
            'userType_name' => 'required|string|max:255',
        ]);

        $userType = UserType::where('userType_id', $userType_id)->firstOrFail();

        $userType->update([
            'userType_name' => $request->userType_name,
        ]);

        return redirect()->route('userTypes.index')->with('success', 'User type updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($userType_id)
    {
        $userType = UserType::where('userType_id', $userType_id)->firstOrFail();
        $userType->delete();

        return redirect()->back()->with('success', 'User type deleted successfully');
    }
}
