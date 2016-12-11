@if (Session::has('success'))

	<div class="alert alert-success" role="alert">
		<h2>Great Success!</h2>
		{{ Session::get('success') }}
	</div>

@endif

@if (count($errors) > 0)

	<div class="alert alert-danger" role="alert">
	<h2>Warning. No Success!</h2>
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>	
	</div>

@endif