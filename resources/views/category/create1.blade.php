@extends('layout.admin')
@section('content')

<div class="content-wrapper">

	<form method="post" action="/category/save1">
			{{csrf_field()}}
		<label>ID</label><br>
		<input type="text" name="id"><br>
		<label>Title</label><br>
		<input type="text" name="title"><br>
		<label>Description</label><br>
		<textarea name="descri" rows="4" cols="20"></textarea><br>
		<button type="submit">Submit</button>
	</form>
</div>
@endsection