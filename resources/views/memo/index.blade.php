@extends ('layout.admin')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Index</h1><br>
            <button><a href="/memo/create">Create Memo</button>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Memo</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
    	<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Fixed Header Table</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>CreatedAt</th>
                      <th>UpdatedAt</th>
                    </tr>

                  </thead>
                  <tbody>
                    @foreach($memos as $memo)
            				<tr>
            				<td>{{$memo->id}}</td>
            				<td>{{$memo->title}}</td>
            				<td>{{$memo->description}}</td>
            				<td>{{$memo->created_at}}</td>
                    <td>{{$memo->updated_at}}</td>
                    <td><a href="/memo/edit/{{$memo->id}}">Edit</td>
                    <td><a href="/memo/destroy/{{$memo->id}}">Delete</td>
            				</tr>
    				        @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

    </section>
   </div>
@endsection
    	