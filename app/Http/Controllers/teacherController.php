<?php

namespace App\Http\Controllers;

use App\Models\absence;
use Illuminate\Http\Request;
use App\Models\teacher;
use App\Models\departement;
use Illuminate\Support\Facades\DB;

class teacherController extends Controller
{
    /**
     * Show the form for creating the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function teacherDashboard()
    {
        $teacherId = auth()->id();
        $departements = DB::table('teacher_departments')
            ->join('departements', 'teacher_departments.departement_id', '=', 'departements.id')
            ->join('teachers', 'teacher_departments.teacher_id', '=', 'teachers.id')
            ->where('teachers.admin_id', $teacherId)
            ->select('departements.*')
            ->get();

        $teacher = auth()->user();

        return view('dashboard.teacher_dashboard.index', compact('teacher', 'departements'));
    }
    public function displayAbsence(Request $request)
    {
        $request->validate([
            'department' => 'required|exists:departements,id',
        ]);

        $departmentId = $request->input('department');

        // Fetch the last inserted absence record for the specified department
        $absence = Absence::where('departement_id', $departmentId)->latest()->first();

        // Check if an absence record exists for the department
        if ($absence) {
            return view('dashboard.teacher_dashboard.displayAbsence', compact('absence'));
        } else {
            // Handle case when no absence record is found
            return view('dashboard.teacher_dashboard.displayAbsence')->with('error', 'No absence record found for the selected department.');
        }
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
