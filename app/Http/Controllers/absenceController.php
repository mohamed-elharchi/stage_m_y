<?php

namespace App\Http\Controllers;

use App\Models\absence;
use App\Models\departement;
use Carbon\Carbon;
use Illuminate\Http\Request;

class absenceController extends Controller
{
    /**
     * Show the form for creating the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function selectDepartement()
    {
        $departements = departement::all();

        return view('dashboard.director_dashboard.selectDepartement', compact('departements'));
    }

    public function displayAbsence(Request $request)
    {
        $departmentName = $request->input('department_name');
        $fromDate = $request->input('from_date_display');
        $toDate = $request->input('to_date_display');

        $fromDateMinusThreeDays = Carbon::parse($fromDate)->subDays(3)->format('Y-m-d');

        $department = departement::where('name', $departmentName)->first();
        $departmentId = $department->id;

        $absences = absence::where('departement_id', $departmentId)
            ->whereBetween('date', [$fromDateMinusThreeDays, $toDate])
            ->get();

        return view('dashboard.director_dashboard.displayDepartementAbsence', compact('departmentName', 'fromDate', 'toDate', 'absences'));
    }




    public function create()
    {
        abort(404);
    }

    /**
     * Store the newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        abort(404);
    }

    /**
     * Display the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        abort(404);
    }
}
