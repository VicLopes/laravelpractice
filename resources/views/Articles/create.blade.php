@extends('layout')

@section('content')
<div class='inner'>
{{-- <form method="post" action="#">
    <div class="row uniform">
        <div class="6u 12u$(xsmall)">
            <input type="text" name="name" id="name" value="" placeholder="Name" />
        </div>
        <div class="6u$ 12u$(xsmall)">
            <input type="email" name="email" id="email" value="" placeholder="Email" />
        </div>
        <div class="12u$">
            <div class="select-wrapper">
                <select name="category" id="category">
                    <option value="NULL">- Category -</option>
                    <option value="Medic">Medic</option>
                    <option value="Intern">Intern</option>
                    <option value="Technician">Technician</option>
                </select>
            </div>
        </div>
        <div class="6u 12u$(small)">
            <input type="checkbox" id="copy" name="copy">
            <label for="copy">Email me a copy of this message</label>
        </div>
        <div class="6u$ 12u$(small)">
            <input type="checkbox" id="human" name="human" checked>
            <label for="human">I am a human and not a robot</label>
        </div>
        <div class="12u$">
            <textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
        </div>
        <div class="12u$">
            <ul class="actions">
                <li><input type="submit" value="Send Message" /></li>
                <li><input type="reset" value="Reset" class="alt" /></li>
            </ul>
        </div>
    </div>
</form> --}}
    <h1>New Article</h1>

    <form method='POST' action="/articles">
        @csrf
        <div class="row uniform">
            <div class="12u$">
                <label class="label" for="title">Title</label>

                <div class="control">
                    <input 
                        class="input @error('title') border-danger @enderror" 
                        type="text" 
                        name="title" 
                        id="title" 
                        placeholder="Title"
                        value="{{ old('title') }}">

                    @error('title')
                        <p class='text-danger'>{{ $errors -> first('title') }}</p>
                    @enderror
                </div>
            </div>
            
            <div class="12u$">
                <label class="label" for="excerpt">Excerpt</label>

                <textarea 
                    class="@error('excerpt') border-danger @enderror" 
                    name="excerpt" 
                    id="excerpt" 
                    placeholder="Place the Excerpt"
                    >{{ old('excerpt') }}</textarea>

                @error('excerpt')
                    <p class='text-danger'>{{ $errors -> first('excerpt') }}</p>
                @enderror
            </div>

            <div class="12u$">
                <label class="label" for="body">Body</label>
                <textarea 
                    class="@error('body') border-danger @enderror" 
                    name="body" 
                    id="body" 
                    placeholder="Enter your message" 
                    rows='6'
                    >{{ old('body') }}</textarea>

                @error('body')
                    <p class='text-danger'>{{ $errors -> first('body') }}</p>
                @enderror
            </div>

            <div class="6u$">
                <label class="label" for="body">Tags</label>
                <select
                    class="selectpicker"
                    name="tags[]"
                    multiple
                >
                    @foreach ($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                    @endforeach
                </select>

                @error('tags')
                    <p class='text-danger'>{{ $message }}</p>
                @enderror
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