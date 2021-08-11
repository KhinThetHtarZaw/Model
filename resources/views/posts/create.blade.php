@extends ('layout.admin')
@section('content')

<div class="content-wrapper">

<form method="post" action="/posts/save">
	{{csrf_field()}}
  <label for="id">ID</label><br>
  <input type="text" name="id"><br>
  <label for="title">Title</label><br>
  <input type="text" name="title"><br>
  <label for="descri">Description</label><br>
  <textarea name="descri" rows="5" cols="20">
  	
  </textarea><br>

  <button type="Submit">Submit</button>
</form>
</div>
@endsection