<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserType;
use Illuminate\Http\Request;
use App\Models\Department;

use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with(['userType', 'department'])->get();
        $userTypes = UserType::all();
        $departments = Department::all();
        

      
        return view('admin.users', compact('users', 'userTypes', 'departments'));
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
        $request->validate([
            'FirstName' => 'required|string|max:255',
            'MiddleName' => 'required|string|max:255',
            'LastName' => 'required|string|max:255',
            'Age' => 'required|integer|min:1|max:120',
            'Sex' => 'required|in:Male,Female',
            'ContactNumber' => 'required|digits_between:10,11',
            'userType_id' => 'required|exists:usertype,userType_id',
            'department_id' => 'required|exists:departments,department_id',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed'
        ]);
    
        User::create([
            'FirstName' => $request->FirstName,
            'MiddleName' => $request->MiddleName,
            'LastName' => $request->LastName,
            'Age' => $request->Age,
            'Sex' => $request->Sex,
            'ContactNumber' => $request->ContactNumber,
            'userType_id' => $request->userType_id,
            'department_id' => $request->department_id,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    
        return redirect()->back()->with('success', 'User created successfully');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
