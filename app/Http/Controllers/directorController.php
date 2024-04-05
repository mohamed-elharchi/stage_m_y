<?php

namespace App\Http\Controllers;

use App\Http\Requests\d_u_request;
use App\Http\Requests\departementRequest;
use App\Http\Requests\directorRequest;
use App\Http\Requests\matiereRequest;
use App\Models\Admin;
use App\Models\departement;
use App\Models\matiere;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class directorController extends Controller
{
    /**
     * Show the form for creating the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function directorDashboard()
    {
        return view('layouts.directorLayout');
    }
    public function displayMatieres()
    {
        $matieres = matiere::all();
        return view('dashboard.director_dashboard.indexMatieres', compact('matieres'));
    }
    public function showCreateMatiere()
    {

        return view('dashboard.director_dashboard.addMatiere');
    }
    public function saveMatiere(matiereRequest $request)
    {

        $existingMatiere = Matiere::where('name', $request->input('name'))->first();

        if ($existingMatiere) {
            return redirect()->route('displayMatieres')->with('success', 'La matière existe déjà');
        }

        $matiere = new Matiere();
        $matiere->name = $request->input('name');
        $matiere->save();
        return redirect()->route('displayMatieres')->with('success', 'Registration successful');
    }

    public function showDepartements()
    {
        $departements = departement::all();
        return view('dashboard.director_dashboard.indexDepartement', compact('departements'));
    }
    public function addDepartement()
    {
        return view('dashboard.director_dashboard.addDepartement');
    }
    public function saveDepartement(departementRequest $request)
    {
        $existingDepartement = departement::where('name', $request->input('name'))->first();

        if ($existingDepartement) {
            return redirect()->route('showDepartements')->with('success', 'La departement existe déjà');
        }

        $matiere = new departement();
        $matiere->name = $request->input('name');
        $matiere->save();
        return redirect()->route('showDepartements')->with('success', 'Registration successful');
    }



    public function filter(Request $request)
    {
        $role = $request->input('role');

        if ($role) {
            $generalGuards = Admin::where('role', $role)->get();
        } else {
            $generalGuards = Admin::all();
        }

        return view('dashboard.director_dashboard.index', compact('generalGuards'));
    }


    public function index()
    {
        $generalGuards = Admin::all();
        return view('dashboard.director_dashboard.index', compact('generalGuards'));
    }


    public function create()
    {
        return view('dashboard.director_dashboard.addGeneralGuard');
    }

    /**
     * Store the newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(directorRequest $request)
    {

        $generalGuard = new Admin();
        $generalGuard->name = $request->input('name');
        $generalGuard->email = $request->input('email');
        $generalGuard->password = Hash::make($request->input('password'));
        $generalGuard->role = $request->input('role');

        $generalGuard->save();

        // Redirect back with success message
        return redirect()->route('general_guard')->with('success', 'Registration successful');
    }
    /**
     * Display the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function show()
    // {
    //     return view('dashboard.director_dashboard.addGeneralGuard');
    // }

    /**
     * Show the form for editing the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $generalGuard = Admin::findOrFail($id);

        return view('dashboard.director_dashboard.updateGeneralGuard',)->with('generalGuard', $generalGuard);
    }

    /**
     * Update the resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(d_u_request $request, $id)
    {
        $generalGuard = Admin::findOrFail($id);

        $generalGuard->name = $request->input('name');
        $generalGuard->email = $request->input('email');
        $generalGuard->role = $request->input('role');
        $generalGuard->save();

        return redirect()->route('general_guard')->with('success', 'Informations utilisateur mises à jour avec succès');
    }

    /**
     * Remove the resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $generalGuard = Admin::findOrFail($id);
        $generalGuard->delete();
        return redirect()->route('general_guard')->with('success', 'La garde générale a été supprimée avec succès');
    }
    public function destroyMatiere($id)
    {
        $matiere = matiere::findOrFail($id);
        $matiere->delete();
        return redirect()->route('displayMatieres')->with('success', 'matiere a été supprimée avec succès');
    }
    public function destroyDepartement($id)
    {
        $departement = departement::findOrFail($id);
        $departement->delete();
        return redirect()->route('showDepartements')->with('success', 'Departements a été supprimée avec succès');
    }
}
