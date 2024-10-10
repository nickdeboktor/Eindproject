<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Carbon\Carbon;
class EventController extends Controller
{
    // Toon alle evenementen
    public function index()
    {
        $events = Event::all();

        return view('events.index', compact('events'));
    }

    // Toon formulier om een nieuw evenement toe te voegen
    public function create()
    {
        return view('events.create');
    }

    // Opslaan van een nieuw evenement
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'date' => 'required|date|after_or_equal:' . Carbon::now()->addDays(7)->toDateString(),
            'type' => 'required',
        ]);

        Event::create($validatedData);
        return redirect()->route('events.index')->with('success', 'Evenement succesvol toegevoegd.');
    }

    // Toon een specifiek evenement
    public function show(Event $event)
    {
        return view('events.show', compact('evenement'));
    }

    // Toon formulier om een evenement te bewerken
    public function edit(Event $event)
    {
        return view('events.edit', compact('event'));
    }

    // Update het specifieke evenement
    public function update(Request $request, Event $event)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'date' => 'required|date|after_or_equal:' . Carbon::now()->addDays(7)->toDateString(),
            'type' => 'required',
        ]);

        $event->update($validatedData);
        return redirect()->route('events.index')->with('success', 'Evenement succesvol bijgewerkt.');
    }

    // Verwijder een evenement
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('events.index')->with('success', 'Evenement succesvol verwijderd.');
    }
}