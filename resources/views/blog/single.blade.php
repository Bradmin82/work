@extends('main')

@section('title', "| $post->title")

@section('content')

	<div class="col-md-8 col-md-offset-2">
		<h1>{{ $post->title }}</h1>
		<h3>{{ $post->body }}</h3>
	</div>

@stop