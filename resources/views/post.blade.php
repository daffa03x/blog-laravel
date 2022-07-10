@extends('layouts.main')

@section('container')
<section class="py-5 d-flex align-items-center bg-dark text-light">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8">
                <div class="h2 mb-3 mt-5 text-center">{{ $post->title }}</div>

                <p class="mb-3">By : <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a class="text-decoration-none" href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>
                @if ($post->image)
                <div style="max-height: 400px; overflow:hidden;">
                  <img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
                @endif

                    <article class="my-3 fs-5">
                        {!! $post->body !!}
                    </article>

                <a href="/posts" class="btn btn-dark d-block mt-3">Back to posts</a>
            </div>
        </div>
    </div>
</section>
@endsection