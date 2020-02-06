@extends('layout')

@section('content')
		<!-- One -->
			<section id="one" class="wrapper special">
				<div class="inner">
					<header class="major">
						<h2>Lorem ipsum feugiat tempus</h2>
					</header>
					<div class="features">
						<div class="feature">
							<i class="fa fa-diamond"></i>
							<h3>Etiam consequat</h3>
							<p>Sed tempus feugiat adipiscing nisl cursus aliquam dolore.</p>
						</div>
						<div class="feature">
							<i class="fa fa-copy"></i>
							<h3>Sed adipiscing</h3>
							<p>Sed tempus faeugiat adipiscing nisl cursus aliquam dolore.</p>
						</div>
						<div class="feature">
							<i class="fa fa-paper-plane-o"></i>
							<h3>Feugiat nullam</h3>
							<p>Sed tempus feugiat adipiscing nisl cursus aliquam dolore.</p>
						</div>
						<div class="feature">
							<i class="fa fa-save"></i>
							<h3>Amet imperdiet</h3>
							<p>Sed tempus feugiat adipiscing nisl cursus aliquam dolore.</p>
						</div>
						<div class="feature">
							<i class="fa fa-envelope-o"></i>
							<h3>Tempus lorem</h3>
							<p>Sed tempus feugiat adipiscing nisl cursus aliquam dolore.</p>
						</div>
					</div>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2 special">
				<div class="inner narrow">
					<header>
						<h2>Get in touch</h2>
					</header>
					<form class="grid-form" method="post" action="#">
						<div class="form-control narrow">
							<label for="name">Name</label>
							<input name="name" id="name" type="text">
						</div>
						<div class="form-control narrow">
							<label for="email">Email</label>
							<input name="email" id="email" type="email">
						</div>
						<div class="form-control">
							<label for="message">Message</label>
							<textarea name="message" id="message" rows="4"></textarea>
						</div>
						<ul class="actions">
							<li><input value="Send Message" type="submit"></li>
						</ul>
					</form>
				</div>
			</section>

		<!-- Three -->
			 <section id="three" class="wrapper">
				<div class="inner">

					<h2 id="content">Sample Content</h2>
					<p>Praesent ac adipiscing ullamcorper semper ut amet ac risus. Lorem sapien ut odio odio nunc. Ac adipiscing nibh porttitor erat risus justo adipiscing adipiscing amet placerat accumsan. Vis. Faucibus odio magna tempus adipiscing a non. In mi primis arcu ut non accumsan vivamus ac blandit adipiscing adipiscing arcu metus praesent turpis eu ac lacinia nunc ac commodo gravida adipiscing eget accumsan ac nunc adipiscing adipiscing.</p>
					<div class="row">
						@foreach ($articles as $article)
						<div class="6u 12u$(small)">
							<a href='articles/{{$article -> id}}'><h3>{{$article -> title}}</h3></a>
							<p>{{$article -> excerpt}}</p>
						</div>
						@endforeach

					{{-- <h2 id="elements">Elements</h2>
					<div class="row 200%">
						 <div class="6u 12u$(medium)"> --}}

					{{--	<h3>Text</h3>
							<p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
							This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
							This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>.
							Finally, this is a <a href="#">link</a>.</p>
							<header>
								<h2>Heading with a Subtitle</h2>
								<p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
							</header>
							<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
							<header>
								<h3>Heading with a Subtitle</h3>
								<p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
							</header>
							<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
							<header>
								<h4>Heading with a Subtitle</h4>
								<p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
							</header>
							<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
						</div> --}}
					</div>
				</div>
			</section>
@endsection