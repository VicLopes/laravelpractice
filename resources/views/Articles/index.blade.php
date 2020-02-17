@extends('layout')

@section('content')
		<!-- One -->
			 <section id="three" class="wrapper">
				<div class="inner">
                    @foreach ($articles as $article)
                        <a href="/articles/{{$article->id}}"><h2 id="content">{{$article->title}}</h2></a>
                        <div class="box">
                            <p>{{$article->excerpt}}</p>
                        </div>
                    @endforeach

                    {{-- <ul class="actions" style="text-align:center">
                        <li><a href="{{$articles->prev_page_url}}" class="button fit small icon fa-arrow-left">Previous Page</a></li>
                        <li><a href="{{$articles->next_page_url}}" class="button fit small icon fa-arrow-right">Next Page</a></li>
                    </ul> --}}
                    {{-- {{$articles->links()}} --}}
			</section>
@endsection