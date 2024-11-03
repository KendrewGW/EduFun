<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <title>Document</title>
</head>
<body>
    <nav class="container-fluid bg-white shadow d-flex justify-content-between align-items-center p-4 pt-3 pb-3">
        <h3 class="font-opensans">EduFun</h3>
        <div class="d-flex">
            <a href="" class="ms-5">Home</a>
            <a class="dropdown-toggle ms-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Category
            </a>
              <ul class="dropdown-menu">
                @foreach ($categories as $c)
                    <li><a class="dropdown-item" href="#">{{ $c->name }}</a></li>
                @endforeach
                {{-- <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li> --}}
              </ul>
            <a href="" class="ms-5">Writers</a>
            <a href="" class="ms-5">About Us</a>
            <a href="" class="ms-5">Popular</a>
        </div>
        
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>