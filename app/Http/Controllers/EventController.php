<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRequest;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();

        return view('events.index', compact('events'));
    }

    public function store(StoreEventRequest $request)
    {
        $validatedData = $request->validated();

        $imagePath = $request->file('image')->store('public/images');

        $event = new Event();
        $event->title = $validatedData['title'];
        $event->image = Storage::url($imagePath);
        $event->description = $validatedData['description'];
        $event->start_time = $validatedData['start_time'];
        $event->venue = $validatedData['venue'];
        $event->status = $request->has('status') ? 1 : 0;
        $event->save();

        // Optionally, you can redirect the user to a success page
        return redirect()->route('events.store')->with('success', 'Event created successfully');
    }
}
