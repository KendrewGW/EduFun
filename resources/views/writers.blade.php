@extends('layout.master')
@section('head')
    <link rel="stylesheet" href="{{ asset('css/writer.css') }}">
@endsection

@section('content')
    <div class="container-fluid justify-content-center align-items center p-5 flex-grow-1">
        <h1 class="mb-5">Our Writers</h1>
        <div class="d-flex text-center container">
            @foreach ($writers as $w)
            <div class="col mr-3">
                <img src="{{ asset('image/' . $w->profile_image) }}" alt="profile image" class="mt-5 rounded-circle profile_image">
                <h6 class="mt-3 fw-bold">{{ $w->name }}</h6>
                <h6 class="mt-3">Specialist {{ $w->category->name}}</h6> 
            </div>                    
            @endforeach
        </div>
        <div class="mt-5">
           {{ $writers->links() }} 
        </div>
    </div>
@endsection