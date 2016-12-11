@extends('main')

@section('title', '| View Post')

@section('content')

	<div class="row">
		<div class="col-md-8">

			<h1>{{ $post->title }}</h1>

			<p class="lead">{{ $post->body }}</p>

		</div>
		<div class="col-md-4">
			<div class="well">
				<div class="row">
					<dl class="dl-horizontal">
						<dt>Created At:</dt>
						<dd>{{ date( 'M j, Y h:iA', strtotime($post->created_at)) }}</dt>
					</dl>
					<dl class="dl-horizontal">
						<dt>Last Updated:</dt>
						<dd>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</dt>
					</dl>
				</div>
				<div class="row">
					<hr>
					<div class="col-sm-6">
						{!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}
						<!--<a href="#" class="btn btn-primary btn-block">Edit</a>-->
						
					</div>
					<div class="col-sm-6">
					{!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}

						{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>

@endsection