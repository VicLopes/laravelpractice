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

        $articles = Article::orderBy('id','desc')->paginate(3);

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
        request()->validate([
            'title'     => ['required', 'min:3', 'max:255'],
            'excerpt'   => 'required',
            'body'      => 'required'
        ]);

        $article = new Article();

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();

        return redirect('/articles');
    }

    public function edit($id)
    {
        // Show a view to edit an existing item
        request()->validate([
            'title'     => ['required', 'min:3', 'max:255'],
            'excerpt'   => 'required',
            'body'      => 'required'
        ]);
        $article = Article::find($id);

        return view('articles.edit', compact('article'));
    }

    public function update($id)
    {
        // Persists the edited resource

        $article = Article::find($id);

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();

        return redirect('/articles/' . $article->id);
    }

    public function destroy()
    {
        // Deletes an existing resource
    }
}
