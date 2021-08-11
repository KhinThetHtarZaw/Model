@extends ('layout.admin')
@section('content')

<div class="content-wrapper">
@foreach($catt as $cat)
	<form method="post" action="/category/update1">
			{{csrf_field()}}
		<label>ID</label><br>
		<input type="text" name="id" value="{{$cat->ID}}"><br>
		<label>Title</label><br>
		<input type="text" name="title" value="{{$cat->Title}}"><br>
		<label>Description</label><br>
		<textarea rows="4" col="20" name="descri">
		{{$cat->Description}}
		</textarea><br>
		<button type="submit">Update</button>
	</form>
	@endforeach
</div>
@endsection