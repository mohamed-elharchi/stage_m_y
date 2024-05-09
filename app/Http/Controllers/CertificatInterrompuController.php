<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CertificatInterrompu;

class CertificatInterrompuController extends Controller
{
    public function indexx()
    {
        $certificats = CertificatInterrompu::all();
        return view('certificats2.indexx', compact('certificats'));
    }

    public function create()
    {
        return view('certificats2.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom_complet' => 'required|string',
            'derniere_annee_scolaire' => 'required|string',
            'date_de_naissance' => 'required|date',
            'numero_telephone' => 'required|string',
        ]);

        CertificatInterrompu::create($request->all());
        return redirect('/')->with('success', 'Certificat créé avec succès.');    }

    public function show(CertificatInterrompu $certificatInterrompu)
    {
        return view('certificats2.show', compact('certificatInterrompu'));
    }



    public function destroy(CertificatInterrompu $certificatInterrompu)
    {
        $certificatInterrompu->delete();
        return redirect()->route('certificats2.index');
    }

}


