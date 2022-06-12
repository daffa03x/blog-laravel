@extends('layouts.main')
@section('container')

<section class="home py-5 d-block align-items-center bg-dark" id="header">
    <div class="h2 text-center text-light mt-5 mb-4">Post Categories</div>

    <div class="container">
        <div class="row">
            
    @foreach ($categories as $category)
            <div class="col-md-4">
                <a href="/posts?category={{ $category->slug }}">
                    <div class="card bg-dark text-white">
                    <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                      <h5 class="card-title text-center flex-fill p-4 fs-4" style="background-color: rgba(0, 0, 0, 0.3)">{{ $category->name }}</h5>
                    </div>
                  </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>

</section>


@endsection