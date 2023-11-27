<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title',env('APP_NAME'))</title>

    <!--  ---------------  Favicons----------------->
    
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('public/assets/img/favicons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('public/assets/img/favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('public/assets/img/favicons/favicon-16x16.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/assets/img/favicons/favicon.ico')}}">
    <link rel="manifest" href="{{asset('public/assets/img/favicons/manifest.json')}}">
    <meta name="msapplication-TileImage" content="{{asset('public/assets/img/favicons/mstile-150x150.png')}}">
    <meta name="theme-color" content="#ffffff">

    <!--    Stylesheets-->
    
    <link href="{{asset('public/assets/css/theme.css')}}" rel="stylesheet" />
    <!-- Styles -->
    @stack('styles')
  </head>


  <body>

    <!--    Main Content-->

    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href=""><img src="{{asset('public/assets/img/gallery/logo.png')}}" height="45" alt="logo" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
              <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="#home">Home</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="#services">Our Services</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="{{route('shipment.create')}}">Couriar Order</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="#findUs">Find Us</a></li>
            </ul>
            <div class="dropdown d-none d-lg-block">
              <button class="btn bg-soft-warning ms-2" id="dropdownMenuButton1" type="submit" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-search text-warning"></i></button>
              <div class="dropdown-menu dropdown-menu-lg-end p-0 rounded" aria-labelledby="dropdownMenuButton1" style="top:55px">
                <form>
                  <input class="form-control border-200" type="search" placeholder="Search" aria-label="Search" style="background:#FDF1DF;" />
                </form>
              </div>
            </div><a class="btn btn-primary order-1 order-lg-0 ms-lg-3" href="">Contact Us
            </a>
              <a class="btn btn-primary mx-2" href="{{route('user.LogOut')}}">
                Log Out
              </a>
              <!-- <a class="btn btn-danger mx-2" href="{{route('register')}}">
              Register
              </a> -->
          
            <form class="d-flex my-3 d-block d-lg-none">
              <input class="form-control me-2 border-200 bg-light" type="search" placeholder="Search" aria-label="Search" />
              <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      <section class="pt-4" >
        @yield('content')
      </section>
    </main>
    
    <!--    End of Main Content-->

    <!--    JavaScripts-->
    @stack('scripts')
    <script src="{{asset('public/vendors/@popperjs/popper.min.js')}}"></script>
    <script src="{{asset('public/vendors/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/vendors/is/is.min.js')}}"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{asset('public/vendors/fontawesome/all.min.js')}}"></script>
    <script src="{{asset('public/assets/js/theme.js')}}"></script>

    <link href="#" rel="stylesheet">


  </body>
</html>