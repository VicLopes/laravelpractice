<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use PDF;

class ArticlesController extends Controller
{
    public function show(Article $article)
    {
        // Shows a single resource

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

        Article::create(request()->validate([
            'title'     => ['required', 'min:3', 'max:255'],
            'excerpt'   => 'required',
            'body'      => 'required'
        ]));

        return redirect('/articles');
    }

    public function edit(Article $article)
    {
        // Show a view to edit an existing item


        return view('articles.edit', compact('article'));
    }

    public function update(Article $article)
    {
        // Persists the edited resource
        
        $article->update(request()->validate([
            'title'     => ['required', 'min:3', 'max:255'],
            'excerpt'   => 'required',
            'body'      => 'required'
        ]));

        return redirect('/articles/' . $article->id);
    }

    public function destroy()
    {
        // Deletes an existing resource
    }

    public function downloadPDF(Article $article)
    {
        $pdf = PDF::loadView('articles.download', compact('article'));

        return $pdf->download('disney.pdf');
    }
}
