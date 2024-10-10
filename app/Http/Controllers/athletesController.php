<?php

namespace App\Http\Controllers;
use App\Models\Athlete;
use Illuminate\Http\Request;
use Carbon\Carbon;

use function Laravel\Prompts\alert;

class athletesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $athletes = Athlete::all();
       return view('athletes.index', compact('athletes'));
    }

    // Toon formulier om een nieuwe atleet toe te voegen
    public function create()
    {
        return view('athletes.create');
    }

    // Opslaan van een nieuwe atleet
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'date_of_birth' => 'required|date|before:' . Carbon::now()->toDateString(),
            'gender' => 'required',
        ]);

        Athlete::create($validatedData);
        return redirect()->route('athletes.index')->with('success', 'Atleet succesvol toegevoegd.');
    }

    // Toon een specifieke atleet
    public function show(Athlete $athlete)
    {
        return view('athletes.show', compact('Athlete'));
    }

    // Toon formulier om een atleet te bewerken
    public function edit(Athlete $athlete)
{
    return view('athletes.edit', compact('athlete'));
}

    // Update de specifieke atleet
    public function update(Request $request, Athlete $athlete)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'date_of_birth' => 'required|date|before:' . Carbon::now()->toDateString(),
            'gender' => 'required',
        ]);
        

        $athlete->update($validatedData);
        return redirect()->route('athletes.index')->with('success', 'Atleet succesvol bijgewerkt.');
    }

    // Verwijder een atleet
    public function destroy(Athlete $athlete)
    {
        $athlete->delete();
        return redirect()->route('athletes.index')->with('success', 'Atleet succesvol verwijderd.');
    }
}
