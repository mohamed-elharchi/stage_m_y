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

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required|string|max:255',
            'paragraph' => 'required|string',
        ]);

        // Store the image using Laravel's store method
        $imagePath = $request->file('image')->store('news_images');

        // Create a new news item with the provided data
        News::create([
            'image' => $imagePath,
            'title' => $request->input('title'),
            'paragraph' => $request->input('paragraph'),
        ]);

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
        $news->title = $request->input('title');
        $news->paragraph = $request->input('paragraph');
        $news->save();

        return redirect()->route('news.index')->with('success', 'Nouvelle mise à jour avec succès!');
    }

    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();

        return redirect()->route('news.index')->with('success', 'Nouvelle supprimée avec succès!');
    }
}
