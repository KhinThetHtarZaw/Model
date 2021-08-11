@extends ('layout.admin')
@section ('content')

<div class="content-wrapper">
	<form method="post" action="/memo/store">
		{{csrf_field()}}
		<label>Title</label>
		<input type="text" name="title">
		<label>Description</label>
		<textarea name="descri" rows="4" cols="20"> </textarea>

		<button type="submit">Submit</button>
	</form>
</div>
@endsection