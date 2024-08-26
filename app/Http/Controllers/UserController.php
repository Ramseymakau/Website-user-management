<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
      // $user = Auth::user(); // Get the current user
        //$user = User::whereRoleId(3)->get(); // Retrieve all students (role_id 3)
        $user = User::all();
        return view('admin.userslist', compact('user'));
    }
    
       



    

    // app/Http/Controllers/UserController.php
public function students()
{
   // $user = User::whererole_id(3)->get(); // Retrieve all students (role_id 3)
    
    //return view('admin.students', compact('user'));
}

public function teachers()
{
    //$user = User::whererole_id(2)->get(); // Retrieve all teachers (role_id 2)
   // return view('admin.teachers', compact('user'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $user = new User();
        return view('register', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required|min:8',
            'role' => 'required|string|in:admin,student,teacher',
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->role = \App\Models\Role::where('name', $request->input('role'));
        $user->save();

        return view('login', compact('user'));
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
    public function edit(User $user)
    {
        //
        return view('admin.edituser', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
        ]);
    
        $user->update($request->only(['name', 'email', 'role' ]));
    
        return redirect()->route('admin.userslist')->with('success', 'User updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( User $user)
    {
        //
        $user->delete();
        //return view('admin.deleteuser', compact('user'));
    }
}
