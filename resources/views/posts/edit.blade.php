@extends('main')

@section('title', '| Edit Post')

@section('content')

	<div class="row">
		{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
		<div class="col-md-8">
		{{ Form::label('title', 'Title:') }}
		{{ Form::text('title', null, ["class" => 'form-control input-lg']) }}

		{{ Form::label('body', "Body:", ['class' => 'form-spacing-top']) }}
		{{ Form::textarea('body', null, ['class' => 'form-control']) }}

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
						{!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
						<!--<a href="#" class="btn btn-primary btn-block">Edit</a>-->
						
					</div>
					<div class="col-sm-6">
						{{ Form::submit('Save', ['class' => 'btn btn-success btn-block']) }}

					</div>
				</div>
			</div>
		</div>

@endsection