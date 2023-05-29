<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Naskh+Arabic&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Reem+Kufi&display=swap" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js' , 'resources/css/app.css'])
    <style>
        body{
            font-family:'Noto Naskh Arabic', serif;
            
    </style>
</head>
<body>
<header>
        
        
<nav class="navbar  navbar-expand-lg" style="background-color: #e3f3ee; height:150px ;box-shadow: 0 2px 4px 0 rgba(0,0,0,.2);">
    <div class="container-fluid d-flex">
        <div class="collapse navbar-collapse white-text " id="navbarSupportedContent">
            <a class="navbar-brand " style="font-family: 'Reem Kufi', sans-serif; font-size:30px;color:#0f2721" href="#">
                مكتبة إقرأ  
            </a>  
        </div>
        <div class="">
        
            @if (Route::has('login')) 
                <div class="">
                @auth
                <a href="{{ url('/home') }}" class=" btn ">Home</a>
            @else
                <a href="{{ route('login') }}" class="btn">تسجيل الدخول  </a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn">التسجيل</a>
                @endif
                @endauth
                </div>
            @endif

        </div> 
    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light mb-4 " style="background-color:#f2f9f7;box-shadow: 0 2px 4px 0 rgba(0,0,0,.2);">
    <div class="collapse navbar-collapse " id="navbarNav">
        <ul class="navbar-nav sticky-top">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">كتب عربية</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">كتب دراسية</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">كتب أطفال</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">كتب أجنبية</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">منتجات أخرى</a>
            </li>
            <li class="nav-item">
                <input class="form-control ms-4 search" type="search" placeholder="بحث" aria-label="Search">
            </li>
       
        </ul>
    </div>
</nav>

   
    </header>
    <main>
        @yield('content')
    </main>
   
    <footer class="" style="background-color: #0f2721;">
      <!-- Grid container -->
      <div class="container pt-4 text-center">
        <section>
           تواصل معنا عبر 
        </section>
        <!-- Section: Social media -->
        <section class="mb-4 ">
          <!-- Facebook -->
          <a
            class=" btn-link btn-floating btn-lg text-white m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fab fa-facebook-f"></i
          ></a>
    
          <!-- Twitter -->
          <a
            class=" btn-link btn-floating btn-lg text-white m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fab fa-twitter"></i
          ></a>
    
          <!-- Google -->
          <a
            class=" btn-link btn-floating btn-lg text-white m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"

            
            ><i class="fab fa-google"></i
          ></a>
    
          <!-- Instagram -->
          <a
            class=" btn-link btn-floating btn-lg text-white m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fab fa-instagram"></i
          ></a>
  
        </section>
        <!-- Section: Social media -->
      </div>
      <!-- Grid container -->
    
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color:#0f2721;color:white">
       2023 © جميع الحقوق محفوظة
      </div>
      <!-- Copyright -->
    </footer>
</body>
</html>
