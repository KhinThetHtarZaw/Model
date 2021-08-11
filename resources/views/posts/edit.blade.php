@extends ('layout.admin')
@section('content')

<div class="content-wrapper">
@foreach ($post as $p)
<form method="post" action="/posts/update">
	{{csrf_field()}}
  <label for="id">ID</label><br>
  <input type="text" name="id" value="{{$p->ID}}"><br>
  <label for="title">Title</label><br>
  <input type="text" name="title"  value="{{$p->Title}}"><br>
  <label for="descri">Description</label><br>
  <textarea name="descri" rows="5" cols="20" >
  {{$p->Description}}
  </textarea><br>

  <button type="Submit">Update</button>
</form>
@endforeach
</div>
@endsection