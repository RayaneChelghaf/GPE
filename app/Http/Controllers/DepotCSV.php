<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DemandeController extends Controller
{
    public function index()
    {
        $demandes = Demande::all();
        return view('demandes.index', compact('demandes'));
    }

    public function create()
    {
        $demandes = Demande::all();
        return view('demandes.create', compact('demandes'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'biais' => 'required|string|max:255',
            'visibility' => ['required', 'in:yes,no,true,false'],
        ]);
        $validatedData['user_id'] = Auth::id();
        $visibility = $request->input('visibility');
        $validatedData['visibility'] = ($visibility === 'yes') ? true : false;
        $validatedData['premium'] = true;

        Demande::create($validatedData);
        return redirect()->route('demandes.index');
    }

    public function edit(Demande $demande)
    {
        return view('demandes.edit', compact('demande'));
    }

    public function update(Request $request, Demande $demande)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'biais' => 'required|string|max:255',
            'visibility' => ['required', 'in:yes,no,true,false'],

        ]);
        $validatedData['user_id'] = Auth::id();
        $visibility = $request->input('visibility');
        $validatedData['visibility'] = ($visibility === 'yes') ? true : false;
        $validatedData['premium'] = true;
        $demande->update($validatedData);
        return redirect()->route('demandes.index');
    }

    public function destroy(Demande $demande)
    {
        $demande->delete();
        return redirect()->route('demandes.index')->with('success', 'Demande supprimée avec succès');
    }
}