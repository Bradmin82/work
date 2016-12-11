@extends('layout')

@section('content')
    <h1>The About Page Goes Here</h1>
    <br />
    <h3>
    	<div class="title">About {{ $data['fullname'] }}</div>
    	<p>Email me at <a href="mailto: {{ $data['email'] }}">{{ $data['email'] }}</a></p>
    </h3>

@stop