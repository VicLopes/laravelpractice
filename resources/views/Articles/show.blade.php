@extends('layout')

@section('content')
<section id='three' class='wrapper'>
    <div class='inner'>
        <div class='row 200%'>
            <div class="12u$">
                <header>
                    <h2>{{ $article -> title}}</h2>
                    <p>{{ $article -> excerpt}}</p>
                </header>
            </div>
            <div class="12u$">
                <p>
                    {!! nl2br(e($article -> body)) !!}
                </p>
            </div>

            <div class="12u$">
                <a href="{{action('ArticlesController@downloadPDF', $article->id)}}">Download PDF</a>
                <p>
                    @foreach ($article->tags as $tag)
                        <a href="/articles?tag={{ $tag->name }}">{{ $tag->name }}</a>
                    @endforeach
                </p>
            </div>
        </div>
    </div>
</section>
@endsection