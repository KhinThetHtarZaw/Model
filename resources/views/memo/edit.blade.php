@extends('layout.admin')
@section('content')

<div class="content_wrapper">
	<form method="post" action='/memo/update'>
		{{csrf_field()}}
		<input type="text" name="id" value="{{$memo->id}}" hidden>
		<label>Title</label><br>
		<input type="text" name="title" value="{{$memo->title}}"><br>
		<label>Description</label><br>
		<textarea name="descri" rows="4" cols="20">
		{{$memo->description}} 
		</textarea><br>

		<button type="submit">Update</button>
	</form>
</div>
@endsection