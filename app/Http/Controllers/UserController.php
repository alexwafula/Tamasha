<?php

namespace App\Http\Controllers;

use PDF;
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


    public function addItem(Request $request)
{
    $event = Event::find($request->event_id);
    $quantity = $request->quantity;
    $totalPrice = $event->price * $quantity;

    // Create a new cart item with the event details and quantity
    $cartItem = new CartItem([
        'event_id' => $event->id,
        'quantity' => $quantity,
        'total_price' => $totalPrice,
    ]);

    // Add the cart item to the user's cart
    auth()->user()->cartItems()->save($cartItem);

    // Redirect the user to the cart page
    return redirect()->route('cart.show')->with('success', 'Event added to cart.');
}

}
