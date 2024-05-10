<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }
    public function show(Student $student)
{
    return view('students.show', compact('student'));
}

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string',
            'scolaire' => 'required|string',
            'date' => 'required|date',
            'téléphone' => 'required|string',
        ]);

        Student::create($request->all());

        return redirect('/')->with('success', 'Certificat créé avec succès.');

    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'nom' => 'required|string',
            'scolaire' => 'required|string',
            'date' => 'required|date',
            'téléphone' => 'required|string',
        ]);

        $student->update($request->all());

        return redirect('/')->with('success', 'Certificat créé avec succès.');

    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')
            ->with('success', 'Étudiant supprimé avec succès.');
    }
}
