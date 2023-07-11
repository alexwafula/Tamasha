<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $users = User::when($search, function ($query) use ($search) 
        {
            $query->where('name', 'LIKE', "%$search%")
                ->orWhere('email', 'LIKE', "%$search%");
        })->paginate(10);

        return view('users.index', compact('users', 'search'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }

    public function destroy(User $user)
    {
        $user->delete();
    
        
        return redirect()->route('users.index')->with('success', 'User deleted successfully');
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->save();

        return redirect()->route('users.index')->with('success', 'User details updated successfully.');
    }
}

