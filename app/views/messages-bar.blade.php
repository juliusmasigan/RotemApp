@if(!empty($errors->all()))
	@foreach($errors->all() as $error)
		<div class="alert">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			{{ $error }}
		</div>
	@endforeach
@endif
