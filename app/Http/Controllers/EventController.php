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

    public function store(Request $request)
    {
        // Validate the input from the form
        $validatedData = $request->validate([
            'title' => 'required',
            'image' => 'required',
            'description' => 'required',
            'start_time' => 'required',
            'venue' => 'required',
            'status' => 'required',
        ]);

        // Create a new event with the validated data
        Event::create($validatedData);

        return redirect()->route('Admin.events.index')->with('success', 'Event added successfully.');
    }

    public function edit($id)
    {
        $event = Event::findOrFail($id);

        return view('admin.events.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
        // Validate the input from the form
        $validatedData = $request->validate([
            'title' => 'required',
            'image' => 'required',
            'description' => 'required',
            'start_time' => 'required',
            'venue' => 'required',
            'status' => 'required',
        ]);

        // Find the event by ID and update its data
        $event = Event::findOrFail($id);
        $event->update($validatedData);

        return redirect()->route('Admin.events.index')->with('success', 'Event updated successfully.');
    }

    public function destroy($id)
    {
        // Find the event by ID and delete it
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect()->route('Admin.events.index')->with('success', 'Event deleted successfully.');
    }
}
