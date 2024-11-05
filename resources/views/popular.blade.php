@extends('layout.master')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/popular.css') }}">
@endsection

@section('content')
<div class="container-fluid p-5">
    <h3>Recent Popular</h3>
    @foreach ($contents as $content)
        <div class="container">
            <div class="d-flex mt-5">
                <div class="row-7">
                    <img src="{{ asset('image/' . $content->image) }}" alt="" class=" img-content">
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
    <div class="mt-5 d-flex justify-content-center">
        {{ $contents->links() }}
    </div>
</div>
@endsection