@extends('layout')

@section('content')
<section id='three' class='wrapper'>
    <div class='inner'>
    <div class='row 200%'>
        <header>
            <h2>{{ $article -> title}}</h2>
            <p>{{ $article -> excerpt}}</p>
        </header>
        <p>
            {!! nl2br(e($article -> body)) !!}
        </p>
        <a href="{{action('ArticlesController@downloadPDF', $article->id)}}">Download PDF</a>
    </div>
    </div>
</section>
@endsection