<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Symfony\Contracts\Service\Attribute\Required;

class UserController extends Controller
{
    
    public function user(){

        $user = User::find(1);
        // dd($user); // Check if the user object is retrieved
        return view('layouts.admin.user', compact('user'));
    }


    public function details()
    {
        $user = User::find(1); // Replace 1 with the actual user ID
        return view('layouts.admin.user', compact('user'));
        
       
    }


    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'nullable|string|min:8',
        ]);

        if (!empty($validatedData['password'])) {
            $validatedData['password'] = bcrypt($validatedData['password']);
        } else {
            unset($validatedData['password']);
        }

        $user->update($validatedData);

        return redirect()->back()->with('success', 'User updated successfully!');
    }



    public function user_role(){

       $roles = Role::all();

       // Check if the roles are retrieved
        return view('layouts.admin.user-role', compact('roles'));
    }


    public function user_role_store(Request $request)
{
    // Validate the form inputs
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'position' => 'required|string', // Ensure position is required
    ]);

    // Create a new role
    Role::create([
        'name' => $validatedData['name'],   // Explicitly map validated data
        'positions' => $validatedData['position'],  // Ensure the position is saved
    ]);

    // Redirect back with success message
    return redirect()->back()->with('success', 'Role created successfully!');
}
}    