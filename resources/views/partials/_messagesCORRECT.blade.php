@if (Session::has('success'))

	<div class="alert alert-success" role="alert">
		<h2>Great Success!</h2>
		{{ Session::get('success') }}
	</div>

@endif

@if (Session::has('failure'))

	<div class="alert alert-warning" role="alert"><h2>Warning. No Success!</h2></div>

@endif