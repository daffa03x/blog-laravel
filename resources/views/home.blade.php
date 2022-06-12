@extends('layouts.main')

@section('container')
           <!-- Home -->
    <section class="home py-5 d-flex align-items-center bg-dark" id="header">
        <div class="container text-light py-5"  data-aos="fade-right"> 
            <div class="row">
            <div class="col-lg-8">
            <h1 class="headline">Our <span class="home_text">Blog</span><br>Upload Your Blog</h1>
            <p class="para para-light py-3">Welcom To Our Website</p>
            <div class="d-flex align-items-center">
                <p class="p-2"><i class="fas fa-laptop-house fa-lg"></i></p>
            </div>
            <div class="d-flex align-items-center">
            </div>
            <div class="my-3">
                <a class="btn" href="#plans">Posts</a>
            </div>
        </div>
        <div class="col-lg-4">
            <img class="img-fluid rounded-circle mt-5" src="{{ url('img/home.jpg') }}" alt="">
        </div>
            </div>
        </div> <!-- end of container -->
    </section> <!-- end of home -->
@endsection