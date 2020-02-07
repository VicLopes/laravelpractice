<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function show($id)
    {
        // Shows a single resource

        $article = Article::find($id);

        return view('articles.show', ['article' => $article]);
    }

    public function index() 
    {
        // Renders list

        $articles = Article::paginate(3);

        return view('articles.index', ['articles' => $articles]);
    }

    public function create ()
    {
        // Shows a view to create a new resource

        return view('articles.create');
    }

    public function store()
    {
        // Persist a created resource
    }

    public function edit()
    {
        // Show a view to edit an existing item
    }

    public function update()
    {
        // Persists the edited resource
    }

    public function destroy()
    {
        // Deletes an existing resource
    }
}
