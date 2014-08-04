@if(!$errors->isEmpty())
	@foreach($errors->all() as $error)
		<div class="alert alert-warning">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			{{ $error }}
		</div>
	@endforeach
@endif
