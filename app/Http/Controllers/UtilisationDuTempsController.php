<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UtilisationDuTemps;

class UtilisationDuTempsController extends Controller
{
    public function index()
    {
        $utilisations = UtilisationDuTemps::all();
        return view('utilisations.index', compact('utilisations'));
    }

    public function create()
    {
        return view('utilisations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'classe' => 'required|string',
            'filiere' => 'required|string',

        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $TempsImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $TempsImage);
            $input['image'] = $TempsImage;
        }

        UtilisationDuTemps::create($input);

        return redirect()->route('utilisations.index')->with('success', 'Utilisation du temps créée avec succès.');
    }


    public function show(UtilisationDuTemps $utilisation)
    {
        return view('utilisations.show', compact('utilisation'));
    }

    public function edit(UtilisationDuTemps $utilisation)
    {
        return view('utilisations.edit', compact('utilisation'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'classe' => 'required|string',
            'filiere' => 'required|string',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = $profileImage;
        }

        $utilisation = UtilisationDuTemps::find($id);
        $utilisation->update($input);

        return redirect()->route('utilisations.index')->with('success', 'Utilisation du temps mise à jour avec succès.');
    }


    public function destroy(UtilisationDuTemps $utilisation)
    {
        $utilisation->delete();

        return redirect()->route('utilisations.index')->with('success', 'Utilisation du temps supprimée avec succès.');
    }
}
