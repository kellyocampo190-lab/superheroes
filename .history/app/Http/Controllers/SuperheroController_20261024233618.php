<?php

namespace App\Http\Controllers;

use App\Superhero;
use Illuminate\Http\Request;

class SuperheroController extends Controller
{
    public function index()
    {
        $superheroes = Superhero::latest()->get();

        return view('superheroes.index', compact('superheroes'));
    }

    public function create()
    {
        return view('superheroes.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'real_name' => 'required|string|max:255',
            'hero_name' => 'required|string|max:255',
            'photo_url' => 'nullable|url|max:2048',
            'additional_information' => 'nullable|string',
        ]);

        Superhero::create($validatedData);

        return redirect()
            ->route('superheroes.index')
            ->with('success', 'Superhero registered successfully.');
    }

    public function show(Superhero $superhero)
    {
        return view('superheroes.show', compact('superhero'));
    }

    public function edit(Superhero $superhero)
    {
        return view('superheroes.edit', compact('superhero'));
    }

    public function update(Request $request, Superhero $superhero)
    {
        $validatedData = $request->validate([
            'real_name' => 'required|string|max:255',
            'hero_name' => 'required|string|max:255',
            'photo_url' => 'nullable|url|max:2048',
            'additional_information' => 'nullable|string',
        ]);

        $superhero->update($validatedData);

        return redirect()
            ->route('superheroes.index')
            ->with('success', 'Superhero updated successfully.');
    }

    public function destroy(Superhero $superhero)
    {
        $superhero->delete();

        return redirect()
            ->route('superheroes.index')
            ->with('success', 'Superhero deleted successfully.');
    }
}
