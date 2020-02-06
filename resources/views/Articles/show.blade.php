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
            {{ $article -> body}}
        </p>
    </div>
    </div>
</section>
@endsection