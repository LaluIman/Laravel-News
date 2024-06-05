{{-- <!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <title>News</title>
</head>


<body>
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                        width="45pt" height="45pt" viewBox="0 0 1280.000000 1066.000000"
                        preserveAspectRatio="xMidYMid meet">
                        <metadata>
                        Created by potrace 1.15, written by Peter Selinger 2001-2017
                        </metadata>
                        <g transform="translate(0.000000,1066.000000) scale(0.100000,-0.100000)"
                        fill="#000000" stroke="none">
                        <path d="M8423 10646 c-23 -8 -62 -25 -85 -39 -24 -14 -623 -606 -1333 -1316
                        l-1290 -1291 -855 853 c-911 910 -875 877 -969 877 -69 0 -145 -51 -182 -122
                        -23 -45 -25 -125 -4 -176 11 -26 254 -275 808 -830 l792 -792 -2215 0 c-1431
                        0 -2244 -4 -2296 -10 -115 -15 -187 -35 -282 -80 -101 -48 -155 -85 -236 -161
                        -114 -106 -200 -251 -248 -415 l-23 -79 -3 -3120 c-2 -3432 -6 -3207 58 -3373
                        48 -124 98 -200 200 -303 103 -104 188 -161 314 -210 165 -64 -304 -59 5826
                        -59 6130 0 5661 -5 5826 59 122 48 212 107 310 205 98 98 157 188 205 310 63
                        162 59 -54 59 3335 -1 2535 -3 3099 -14 3161 -62 345 -310 613 -655 709 l-96
                        26 -2960 3 -2960 2 1247 1248 c1025 1025 1251 1257 1274 1302 37 72 41 182 8
                        226 -50 67 -131 89 -221 60z m577 -3740 c258 -42 485 -178 646 -388 95 -123
                        172 -306 194 -463 8 -57 10 -678 8 -2200 l-3 -2120 -23 -85 c-13 -47 -44 -130
                        -71 -185 -132 -276 -360 -464 -662 -547 l-84 -23 -3640 0 -3640 0 -82 22
                        c-189 50 -325 127 -458 258 -189 185 -281 383 -305 650 -13 149 -13 4012 0
                        4161 42 470 374 836 833 919 110 20 7165 21 7287 1z m2349 -1711 c205 -49 384
                        -229 431 -434 17 -71 17 -192 1 -261 -49 -209 -218 -382 -426 -435 -76 -19
                        -214 -19 -289 0 -152 40 -302 159 -369 295 -138 275 -52 594 204 760 56 36
                        149 73 209 83 59 10 180 6 239 -8z m-17 -1446 c162 -33 329 -162 400 -309 47
                        -97 62 -164 60 -275 -1 -160 -62 -295 -184 -411 -113 -107 -246 -157 -409
                        -156 -371 4 -642 362 -549 726 40 157 139 284 288 369 102 57 271 81 394 56z"/>
                        </g>
                        </svg>
                <span class="self-center text-xl font-black  dark:text-white"> LOCALBU <br> NEWS </span>
            </a>
            <a href="{{ route('post.create') }}" type="button"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Add News
        </a>
        </div>
    </nav>
    <div class="container mx-auto p-auto text-center mt-4">
        


        <div class="flex flex-wrap justify-center mt-4">
            <!-- Card 1 -->
            @forelse($post as $p)
                   
           <div class="p-5">
             <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                 <a href="#">
                     <img class="rounded-t-lg" src="{{ Storage::url($p->image) }}" alt="" />
                 </a>
                 <div class="p-5 text-left">
                     <a href="#">
                         <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $p->title }}</h5>
                     </a>
                     <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $p->description }}</p>
                     <a href="{{ route('post.show',$p->id) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                         Read more
                         <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                         </svg>
                     </a>
                 </div>
             </div>
           </div>

            @empty
            <p class="text-5xl"> Data Tidak tersedia</p>
            @endforelse ($post as $p)
     
        </div>
    </div>


</body>


</html> --}}

<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>Localbu News</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
    </style>

  </head>
  <body>
    
<header >
    
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center justify-center">
        
        <h5 class="p-2 text-white fw-bold">LOCALBU NEWS</h5>
      </a>
      <a href="{{ route('post.create') }}" type="button"
      class="btn btn-primary">
      <div class="align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>
        </svg> 
        Add News
      </div>
  </a>
    </div>
  </div>
</header>

<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light fs-3">Welcome to <br> <span class="fw-bold fs-1">LOCALBU NEWS!</span></h1>
        <p class="lead text-body-secondary">where are the news are very intresting</p>
        <p>
          <a href="#album" class="btn btn-primary my-2">Check it out!</a>
        </p>
      </div>
    </div>
  </section>

  <section id="album">
  <div class="album py-5 bg-body-tertiary">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @forelse($post as $p)
        <div class="col">
          <div class="card shadow-sm">
            <img src="{{ Storage::url($p->image) }}" alt="">
            <div class="card-body">
                <h3>{{ $p->title }}</h3>
              <p class="card-text">{{ $p->description }}</p>
              <div class="d-flex justify-content-between align-items-center">
                <a href="{{ route('post.show',$p->id) }}" type="button" class="btn btn-primary">Read more <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                  </svg></a>
              </div>
            </div>
          </div>
        </div>
        @empty
        <p class="text-5xl"> Data Tidak tersedia</p>
        @endforelse ($post as $p)
      </div>
    </div>
  </div>
</section>
</main>

<footer class="text-body-secondary py-5">
  <div class="container">
    <p class="text-center mb-1">
      Copyrights ©️ Localbu news
    </p>
  </div>
</footer>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
