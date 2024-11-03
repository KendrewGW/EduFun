<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
        <link rel="stylesheet" href="{{ asset('css/aboutus.css') }}">
        <title>EduFun</title>
    </head>
    <body>
        <nav class="container-fluid bg-white shadow d-flex justify-content-between align-items-center p-4 pt-3 pb-3">
            <h3 class="font-opensans">EduFun</h3>
            <div class="d-flex">
                <a href="home" class="ms-5">Home</a>
                <a class="dropdown-toggle ms-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Category
                </a>
                  <ul class="dropdown-menu">
                    @foreach ($categories as $c)
                        <li><a class="dropdown-item" href="{{ route(strtolower(str_replace(' ', '', $c->name))) }}">{{ $c->name }}</a></li>
                    @endforeach
                  </ul>
                <a href="writers" class="ms-5">Writers</a>
                <a href="aboutus" class="ms-5 text-primary">About Us</a>
                <a href="popular" class="ms-5">Popular</a>
            </div>
        </nav>
    
        <div class="container p-5 padding">
               <div class="col text-center justify-content-center align-items-center">
                <h1 class="m-5">About EduFun</h1>
                <p class="m-5">EduFun adalah perusahaan pendidikan berbasis teknologi asal Indonesia. EduFun menyediakan layanan akses pendidikan dalam format tulisan berbahasa Indonesia yang disajikan secara online melalui website.</p>
                <p class="m-5">Hingga Juni 2024, EduFun memiliki lebih dari 10 ribu pengguna. EduFun hadir sebagai bentuk revolusi dari pendidikan di Indonesia dengan mengedepankan cara berpikir kritis, logis, rasional, dan sumber pengetahuan sains yang terintegrasi terhadap semua mahasiswa IT di Indonesia. EduFun bercita-cita mencetak generasi Indonesia yang memahami ilmu pengetahuan dan cinta belajar.</p>
                </div> 
        </div>
    
        <footer class="container-fluid bg-dark text-center text-white p-4">
            ©EduFun 2024 | Web Programming | Kendrew Giantori Widjaja | 2602064273
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>