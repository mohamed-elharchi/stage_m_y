<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commnt3;

class Commnt3Controller extends Controller
{

    public function index()
    {
        $comments = Commnt3::all();

        return view('commentss.index', compact('comments'));
    }


    public function create()
    {
        return view('commentss.create');
    }
    public function showTestimonials()
    {
        $comments = Commnt3::all();

        return view('Acccueil.Home', compact('comments'));
    }



public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'date' => 'required|date',
            'comment' => 'required',
        ]);

        $comment =  Commnt3::create($request->all());

        return redirect()->route('commentss.index')
                        ->with('success','Comment created successfully.');
    }
    public function destroy(Commnt3 $comment)
    {
        $comment->delete();

        return redirect()->route('comments.index')
                        ->with('success','Comment deleted successfully');
    }


}
