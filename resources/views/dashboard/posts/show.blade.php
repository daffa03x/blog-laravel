@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center my-3">
        <div class="col-lg-12">
            <div class="h2 my-2">{{ $post->title }}</div>
            <a class="btn btn-dark me-2" href="/dashboard/posts"><i class="fas fa-arrow-alt-circle-left"></i></a>
            <a class="btn btn-info me-2" href="/dashboard/posts/{{ $post->slug }}/edit"><i class="fas fa-edit"></i></a>
            <form action="/dashboard/posts/{{ $post->slug }}" class="d-inline" method="POST">
                @method('delete')
                @csrf
                <button class="btn btn-danger me-2 border-0" onclick="return confirm('Hapus Data ?')"><i class="fas fa-trash-alt"></i></button>
              </form>

              @if ($post->image)
              <div style="max-height: 400px; overflow:hidden;">
                <img class="img-fluid mt-3" src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
              </div>
                  @else
                  <img class="mt-3" src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
              @endif
            
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
        </div>
    </div>
</div>
@endsection