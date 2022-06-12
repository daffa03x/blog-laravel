@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid">
  <h1 class="h3 mb-0 text-gray-800">Welcome Back {{ auth()->user()->name }}</h1>
</div>
@endsection