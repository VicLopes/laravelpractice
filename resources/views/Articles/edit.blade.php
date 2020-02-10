@extends('layout')

@section('content')
<div class='inner'>
    <h1>Editing article <b>"{{$article->title}}"</b></h1>

    <form method='POST' action="/articles/{{$article->id}}">
        @csrf
        @method('PUT')

        <div class="row uniform">
            <div class="12u$">
                <label class="label" for="title">Title</label>

                <div class="control">
                    <input class="input" type="text" name="title" id="title" value="{{$article->title}}" required>
                    <p class='text-danger'>{{ $errors -> first('title') }}</p>
                </div>
            </div>
            
            <div class="12u$">
                <label class="label" for="excerpt">Excerpt</label>

                <textarea name="excerpt" id="excerpt" placeholder="Place the Excerpt" required>{{$article->excerpt}}</textarea>
            </div>

            <div class="12u$">
                <label class="label" for="body">Body</label>
                <textarea name="body" id="body" placeholder="Enter your message" rows='6' required>{{$article->body}}</textarea>
            </div>

            <div class="12u$">
                <ul class="actions">
                    <li><input type="submit" value="Submit"/></li>
                    <li><input type="reset" value="Reset" class="alt"/></li>
                </ul>
            </div>
        </div>
    </form>
</div>
@endsection