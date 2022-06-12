@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">My Posts</h1>
</div>

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
</div>
@endif

<div class="d-flex justify-content-center">
<div class="table-responsive col-lg-10">
  <a class="btn btn-primary" href="/dashboard/posts/create">Create New Post</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Title</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($posts as $p)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $p->title }}</td>
          <td>{{ $p->category->name }}</td>
          <td>
            <a class="badge bg-primary me-2" href="/dashboard/posts/{{ $p->slug }}"><span data-feather="info" class="align-text-bottom"></span></a>
            <a class="badge bg-info me-2" href="/dashboard/posts/{{ $p->slug }}/edit"><span data-feather="edit" class="align-text-bottom"></span></a>
            <form action="/dashboard/posts/{{ $p->slug }}" class="d-inline" method="POST">
              @method('delete')
              @csrf
              <button class="badge bg-danger me-2 border-0" onclick="return confirm('Hapus Data ?')"><span data-feather="trash" class="align-text-bottom"></span></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</div>
@endsection