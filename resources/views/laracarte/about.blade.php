@extends('laracarte.layouts.master', ['title'=> "About"])

@section('content')
<div class="container">
	<section>
		<h2 class="title">What is Laracarte ?</h2>
		<p>Laracarte is a clone app of <a href="//laramap.com">Laramap.com</a>.</p>

		<div class="row">
			<div class="col-md-10">
				<p class="alert alert-warning">
					<strong>⚠ This app has been built by <a href="//twitter.com/etsmo">@etsmo</a> for learning purposes.</strong>
				</p>
			</div>
		</div>
		<p>Feel free to help to improve the <a href="//github.com/meschac38700/laracarte">source code</a>.</p>
	</section>
	<hr/>
	<section>
		<h2 class="title"> What is Laramap ?</h2>
		<p>Laramap is the website by which Laracarte was inspired :).</p>
		<p>More info <a href="//laramap.com/">here</a>.</p>
	</section>
	<hr/>
	<section>
		<h2 class="title">Which tools and services are used in Laracarte?</h2>
	
		<p>Basically it's built on Laravel &amp; Bootstrap. But there's a bunch of services used for email and other sections.</p>
		<ul>
			<li>Laravel</li>
			<li>Bootstrap</li>
			<li>Amazon S3</li>
			<li>Mandrill</li>
			<li>Google Maps</li>
			<li>Gravatar</li>
			<li>Antony Martin's Geolocation Package</li>
			<li>Michel Fortin's Markdown Parser Package</li>
			<li>Heroku</li>
		</ul>
	</section>
</div>
@stop