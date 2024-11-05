@extends('layout.master')
@section('head')
<link rel="stylesheet" href="{{ asset('css/category.css') }}">
@endsection

@section('content')
<div class="container-fluid p-5 flex-grow-1">
    <h1>Data Science</h1>
    <section class="container-fluid p-4" id="content">
        @foreach ($contents as $content)
            <div class="container">
                <div class="d-flex mt-5">
                    <div class="row-7">
                        <img src="{{ asset('image/' . $content->image) }}" alt="" class="img-fluid">
                    </div>
                    <div class="row-5 ms-5">
                        <div class="col">
                            <div class="title">
                                <h5 class="fw-bold">{{ $content->title }}</h5>
                                <div class="date-creator">
                                    <h6>{{ $content->release_date }} | by : {{ $content->writer->name }}</h6>
                                </div>
                                <p>{{ $content->body }}</p>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="{{ route('detail', $content->id) }}"><button class="btn p-2 ps-4 pe-4 text-decoration-none text-white bg-dark">Read more ...</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
    
</div>
@endsection