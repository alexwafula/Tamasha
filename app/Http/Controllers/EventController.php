<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();

        return view('admin.events.index', compact('events'));
    }

    public function create()
    {
        return view('admin.events.create');
    }

    public function show()
    {
        $events = Event::all();

        return view('admin.events.events', compact('events'));
    }

    public function dashboard()
    {
        $events = Event::all();
    
        return view('dashboard', compact('events'));
    }
    

    public function store(Request $request)
    {
        // Validate the input from the form
        $data=$request->validate([
            'title' => 'required',
            // 'image' => 'required',
            'description' => 'required',
            'start_time' => 'required',
            'venue' => 'required',
            'price' => 'nullable|numeric',
            'status' => 'required',
        ]);

        if($request->hasFile('image')) {
            $data['image']=$request->file('image')->store ('Event','public');
        }

        // Create a new event with the validated data
        Event::create($data);

        return redirect()->route('Admin.events.events')->with('success', 'Event added successfully.');
    }

    public function edit($id)
    {
        $event = Event::findOrFail($id);

        return view('admin.events.edit', compact('events'));
    }



    public function update(Request $request, $id)
    {
        // Validate the input from the form
        $validatedData = $request->validate([
            'title' => 'required',
           // 'image' => 'required',
            'description' => 'required',
            'start_time' => 'required',
            'price' => 'nullable|numeric',
            'venue' => 'required',
            'status' => 'required',
        ]);

        
        if($request->hasFile('image')) {
            $data['image']=$request->file('image')->store ('Event','public');
        }

        // Find the event by ID and update its data
        $event = Event::findOrFail($id);
        $event->update($validatedData);

        return redirect()->route('Admin.events.index')->with('success', 'Event updated successfully.');
    }

    //public function check(Request $request, Event $event)
    //{
       // $quantity = $request->input('quantity');
       // $totalPrice = $event->price * $quantity;

        // Process payment logic goes here...

        // Generate PDF receipt
       // $pdf = PDF::loadView('events.receipt', compact('event', 'quantity', 'totalPrice'));

        // Optional: Save the receipt to a storage location
        //$pdf->save(storage_path('app/public/receipts/receipt.pdf'));

        // Return the PDF as a response for download
       // return $pdf->download('receipt.pdf');
 //   }

    public function showTicketCart(Event $event)
    {
    return view('ticket-cart', compact('events'));
    }

    public function destroy($id)
    {
        // Find the event by ID and delete it
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect()->route('Admin.events.events')->with('success', 'Event deleted successfully.');
    }
}
