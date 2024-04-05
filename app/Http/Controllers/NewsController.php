<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $newsList = News::all();
        return view('news.index', compact('newsList'));
    }

    public function create()
    {
        return view('news.create');
    }
    public function app()
    {
        return view('app');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|string|max:255',
            'paragraph' => 'required|string',
        ]);

        // Store the image using Laravel's store method
        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $NewsImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $NewsImage);
            $input['image'] = "$NewsImage";
        }

        News::create($input);

        // Redirect back to the news index page with a success message
        return redirect()->route('news.index')->with('success', 'Nouvelle créée avec succès!');
    }

    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('news.edit', compact('news'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'paragraph' => 'required|string',
        ]);

        $news = News::findOrFail($id); 

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $newsImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $newsImage);
            $input['image'] = $newsImage;
        } else {
            unset($input['image']);
        }

        $news->update($input); // Update the news record
        return redirect()->route('news.index')->with('success', 'Nouvelle mise à jour avec succès!');
    }


    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();

        return redirect()->route('news.index')->with('success', 'Nouvelle supprimée avec succès!');
    }
}
