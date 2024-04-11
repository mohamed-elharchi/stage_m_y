<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Commnt3;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::all();

        return view('comments.index', compact('comments'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'date' => 'required|date',
            'comment' => 'required',
        ]);

        $comment = Comment::create($request->all());

        return redirect()->route('accueil')
                        ->with('success','Comment created successfully.');
    }

    public function show(Comment $comment)
    {
        return view('comments.show',compact('comment'));
    }


    public function show2(Comment $comment)
{
    return view('comments.show2', compact('comment'));
}



    public function destroy(Comment $comment)
    {
        $comment->delete();

        // Maintenant, supprimons également de la table commnt3
        $commnt3 = Commnt3::where('name', $comment->name)
                           ->where('date', $comment->date)
                           ->where('comment', $comment->comment)
                           ->first();

        if ($commnt3) {
            $commnt3->delete();
        }

        return redirect()->route('comments.index')
                        ->with('success','Comment deleted successfully');
    }
}


