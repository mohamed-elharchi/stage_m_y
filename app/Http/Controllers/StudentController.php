<?php


namespace App\Http\Controllers;

use App\Models\Certificat;
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
            'statut' => 'nullable|string',
        ]);

        Student::create($request->all());

        return back()->with('message', 'Votre demande a été reçue et va maintenant être traitée');

    }





    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('certificats.index')
            ->with('success', 'Étudiant supprimé avec succès.');
    }
    public function updateStatut(Request $request, $id)
    {
        $request->validate([
            'statut' => 'required|in:en cours,complété',
        ], [
            'statut.required' => 'Le statut est requis.',
            'statut.in' => 'Le statut doit être soit « En cours », soit « Complété ».',
        ]);
        $student = Student::findOrFail($id);

        $student->statut = $request->statut;
        $student->save();

        return redirect()->route('certificats.index')->with('success', 'Statut mis à jour avec succès');
    }

    public function searchByPhoneNumber(Request $request)
    {
        $phoneNumber = $request->input('phone_number');

        $certificat = Certificat::where('numero_telephone', $phoneNumber)->first();
        $student = null;

        if (!$certificat) {
            $student = Student::where('téléphone', $phoneNumber)->first();
        }

        if ($certificat) {
            $message = 'Statut de votre demande :' . $certificat->statut;
        } elseif ($student) {
            $message = 'Statut de votre demande : ' . $student->statut;
        } else {
            $message = "Votre demande de certificat scolaire n a pas été trouvée dans nos données. Vous pouvez soumettre à nouveau une demande.";
        }

        return redirect()->back()->with(['message' => $message]);
    }
}

