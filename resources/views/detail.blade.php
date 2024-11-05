@extends('layout.master')

@section('head')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('content')
    <section class="container-fluid p-4" id="content">
        <a href="{{ route('home') }}"><button class="btn p-2 ps-4 pe-4 text-decoration-none text-white bg-dark mb-4">Back</button></a>
        <h3 class="mb-4">{{ $content->category->name }}</h3>
        <div class="d-flex flex-column container">
            <img src="{{ asset('image/' . $content->image) }}" alt="Content Image" class="img-fluid mb-4 align-items-center">
            <h2>{{ $content->title }}</h2>
            <p class="mb-4">{{ $content->release_date }} | by : {{ $content->writer->name }}</p>
            <p>{{ $content->body }}</p>
        </div>
    </section>
@endsection