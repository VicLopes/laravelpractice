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
                    <input class="input" type="text" name="title" id="title" placeholder="Title">
                </div>
            </div>
            
            <div class="12u$">
                <label class="label" for="excerpt">Excerpt</label>

                <textarea name="excerpt" id="excerpt" placeholder="Place the Excerpt"></textarea>
            </div>

            <div class="12u$">
                <label class="label" for="body">Body</label>
                <textarea name="body" id="body" placeholder="Enter your message" rows='6'></textarea>
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