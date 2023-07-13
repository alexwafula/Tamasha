<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $users = User::when($search, function ($query) use ($search) {
            $query->where('name', 'LIKE', "%$search%")
                ->orWhere('email', 'LIKE', "%$search%");
        })->paginate(10);

        return view('Admin.users.index', compact('users', 'search'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('Admin.users.edit', compact('user'));
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('Admin.users.index')->with('success', 'User deleted successfully');
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        // Validate the input from the form
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Update the user properties
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = bcrypt($validatedData['password']); // Hash the password for security

        $user->save();

        return redirect()->route('Admin.users.index')->with('success', 'User details updated successfully.');
    }
}
