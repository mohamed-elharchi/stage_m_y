<?php

namespace App\Http\Controllers;

use App\Models\absence;
use Illuminate\Http\Request;
use App\Models\teacher;
use App\Models\departement;
use Illuminate\Support\Facades\Auth;
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

        $absence = Absence::where('departement_id', $departmentId)->latest()->first();

        if ($absence) {
            return view('dashboard.teacher_dashboard.displayAbsence', compact('absence', 'departmentId'));
        } else {
            return view('dashboard.teacher_dashboard.displayAbsence', compact('departmentId'))
                ->with('error', 'No absence record found for the selected department.');
        }
    }

    // public function create(Request $request)
    // {
    //     $request->validate([
    //         'date' => 'required|date',
    //         'period' => 'required',
    //         'absence' => 'required|array',
    //         'absence.*' => 'required|integer|between:1,40',
    //         'signature' => 'required|string|max:50',
    //         'department' => 'required|exists:departements,id',
    //     ]);


    //     $teacherId = auth()->id();
    //     $departmentId = $request->input('department');
    //     $absenceString = implode('-', $request->absence);

    //     $absence = new Absence();
    //     $absence->departement_id = $departmentId;
    //     $absence->date = $request->date;
    //     $absence->period = $request->period;
    //     $absence->absence = $absenceString;
    //     $absence->signature = $request->signature;
    //     $absence->teacher_id = $teacherId;

    //     $absence->save();
    //     return redirect()->route('teacherDashboard')->with(['success' => 'Absence record inserted successfully.', 'absence' => $absence]);
    // }
    public function create(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'period' => 'required',
            'absence' => 'array',
            'absence.*' => 'integer|between:1,40',
            'signature' => 'required|string|max:50',
            'department' => 'required|exists:departements,id',
        ]);

        $teacherId = auth()->id();
        $departmentId = $request->input('department');

        // Check if absences were recorded
        if ($request->has('absence') && count($request->absence) > 0) {
            $absenceString = implode('-', $request->absence);
        } else {
            // If no absences recorded, insert the string
            $absenceString = 'Tous les étudiants sont présents';
        }

        $absence = new Absence();
        $absence->departement_id = $departmentId;
        $absence->date = $request->date;
        $absence->period = $request->period;
        $absence->absence = $absenceString;
        $absence->signature = $request->signature;
        $absence->teacher_id = $teacherId;

        $absence->save();

        return redirect()->route('teacherDashboard')->with(['success' => 'Absence record inserted successfully.', 'absence' => $absence]);
    }


    public function editAbsence($id)
    {
        $absence = Absence::findOrFail($id);
        return view('dashboard.teacher_dashboard.editAbsence', compact('absence'));
    }

    public function updateAbsence(Request $request, $id)
    {
        $request->validate([
            'period' => 'required',
            'absence' => 'required|array',
            'signature' => 'required|string|max:50',
        ]);

        $absence = Absence::findOrFail($id);

        $absence->period = $request->period;
        $absence->absence = implode('-', $request->absence);
        $absence->signature = $request->signature;

        $absence->save();

        return redirect()->route('teacherDashboard')->with('success', 'Absence record updated successfully.');
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
