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

            <p>
                @foreach ($article->tags as $tag)
                    <a href="/articles?tag={{ $tag->name }}">{{ $tag->name }}</a>
                @endforeach
            </p>
        </div>
    </div>
</section>
@endsection