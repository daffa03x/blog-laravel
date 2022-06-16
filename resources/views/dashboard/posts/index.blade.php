@extends('dashboard.layouts.main')

@section('container')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                  <!-- Page Heading -->
                  <h1 class="h3 mb-2 text-gray-800">Posts</h1>                  
                  @if (session()->has('success'))
                  <div class="alert alert-success" role="alert">
                      {{ session('success') }}
                  </div>
                  @endif
                  <!-- DataTales Example -->
                  <div class="card shadow mb-4">
                      <div class="card-header py-3">
                        <a class="btn btn-primary" href="/dashboard/posts/create">Create New Post</a>
                      </div>
                      <div class="card-body">
                          <div class="table-responsive">
                              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                  <thead>
                                      <tr>
                                        <tr>
                                          <th>No</th>
                                          <th>Title</th>
                                          <th>Category</th>
                                          <th>Action</th>
                                        </tr>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($posts as $p)
                                    <tr>
                                      <td>{{ $loop->iteration }}</td>
                                      <td>{{ $p->title }}</td>
                                      <td>{{ $p->category->name }}</td>
                                      <td>
                                        <a class="btn btn-primary mx-2" href="/dashboard/posts/{{ $p->slug }}"><i class="fas fa-info"></i></a>
                                        <a class="btn btn-info mr-2" href="/dashboard/posts/{{ $p->slug }}/edit"><i class="fas fa-edit"></i></a>
                                        <form action="/dashboard/posts/{{ $p->slug }}" class="d-inline" method="POST">
                                          @method('delete')
                                          @csrf
                                          <button class="btn btn-danger border-0" onclick="return confirm('Hapus Data ?')"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                      </td>
                                    </tr>
                                    @endforeach
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>

              </div>
@endsection