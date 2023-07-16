<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\CartItem;
use Illuminate\Http\Request;


class CartController extends Controller
{
    public function show()
    {
        $cartItems = auth()->user()->cartItems()->with('event')->get();
        return view('cart', compact('cartItems'));
    }

    public function updateQuantity(Request $request, CartItem $cartItem)
    {
        $this->validate($request, [
            'quantity' => 'required|integer|min:1',
        ]);

        $cartItem->quantity = $request->quantity;
        $cartItem->total_price = $cartItem->event->price * $request->quantity;
        $cartItem->save();

        return redirect()->back()->with('success', 'Quantity updated.');
    }

    public function removeItem(CartItem $cartItem)
    {
        $cartItem->delete();

        return redirect()->back()->with('success', 'Item removed from cart.');
    }

    public function clearCart()
    {
        auth()->user()->cartItems()->delete();

        return redirect()->back()->with('success', 'Cart cleared.');
    }
}
