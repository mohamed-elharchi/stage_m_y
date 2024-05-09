<?php

namespace App\Http\Controllers;

use App\Models\Certificat;
use Illuminate\Http\Request;

class CertificatController extends Controller
{
    public function index()
    {
        $certificats = Certificat::all();
        return view('certificats.index', compact('certificats'));
    }

    public function create()
    {
        return view('certificats.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom_complet' => 'required|string',
            'date_naissance' => 'required|date',
            'code_mssar' => 'required|string',
            'numero_telephone' => 'required|string',
        ]);

        Certificat::create($request->all());


          return redirect('/')->with('success', 'Certificat créé avec succès.');
    }

    public function show(Certificat $certificat)
    {
        return view('certificats.show', compact('certificat'));
    }



    public function destroy(Certificat $certificat)
    {
        $certificat->delete();

        return redirect()->route('certificats.index')->with('success', 'Certificat supprimé avec succès.');
    }
}

