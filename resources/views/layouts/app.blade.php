<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Banjarmasin Plaza Smart City</title>
    <link rel="icon" href="{{asset('img/favicon-32x32bpsc.png')}}" type="image/png">
    <link rel="icon" href="{{asset('img/favicon-16x16bpsc.png')}}" type="image/png">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    {{-- <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark py-0 sticky-top" id="main-navbar">
        <a href="{{route('home')}}" class="navbar-brand">
            <span class="d-none">BPSC</span>
            <img src="{{asset('img/logobpsc.png')}}" alt="bpsc logo" class="small-logo d-none d-md-inline" style="padding: 10px 0 10px 10px">
            <img src="{{asset('img/logobpsc.png')}}" alt="bpsc logo" class="small-logo d-none d-md-none" style="padding: 10px 0 10px 10px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            {{-- left Side of Navbar --}}
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{route('home')}}" class="nav-link p-4 @yield('statusHome')">Beranda</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('member')}}" class="nav-link p-4 @yield('statusMember')">Anggota</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('about')}}" class="nav-link p-4 @yield('statusAbout')">Profil</a>
                </li>
                {{-- <li class="nav-item">
                    <a href="#" class="nav-link p-4">Article</a>
                </li> --}}
                <li class="nav-item">
                    <a href="#" class="nav-link p-4">Galeri</a>
                </li>
                <li class="nav-item">
                    <a href="#hubungi" class="nav-link p-4">Kontak Kami</a>
                </li>
            </ul>

            {{-- Right Side of Navbar --}}
            <ul class="navbar-nav ml-auto">
                {{-- Authentication Links --}}
                @guest
                    <li class="nav-item">
                        <a href="{{route('login')}}" class="nav-link p-4">Login</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a href="{{route('register')}}" class="nav-link p-4">Register</a>
                        </li>
                    @endif
                    @else
                        <li class="nav-item dropdown">
                            <a href="#" id="navbarDropdown" class="nav-link dropdown-toggle p-4" role="button" data-toggle="dropdown" v-pre>
                                {{Auth::user()->nama}} <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right p-0 border-0">
                                <a href="{{route('logout')}}" class="dropdown-item bg-dark text-white p-2 text-center" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                @endguest
            </ul>
        </div>
    </nav>

    @yield('content') {{-- Yang akan di tempel dari blade lain--}}

    {{-- Footer --}}
    <footer class="text-white bg-dark py-4" id="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-center text-md-left">
                    <a href="index.html">
                        <img src="{{ asset('img/logobpsc.png') }}" style="height: 60px">
                    </a>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident molestiae facilis recusandae odit mollitia. Asperiores delectus laborum perferendis pariatur corporis.
                    </p>
                </div>

                <div class="col-md-3 text-center">
                    <h5>Community</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Activity</a></li>
                        <li><a href="#" class="text-white">Members</a></li>
                        <li><a href="#" class="text-white">Groups</a></li>
                        <li><a href="#" class="text-white">Forums</a></li>
                    </ul>
                </div>

                <div class="col-md-3 text-center">
                    <h5>Our Services</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Our Mission</a></li>
                        <li><a href="#" class="text-white">Help/Contact Us</a></li>
                        <li><a href="#" class="text-white">Privacy Policy</a></li>
                        <li><a href="#" class="text-white">Cookie Policy</a></li>
                        <li><a href="#" class="text-white">Terms & Condition</a></li>
                    </ul>
                </div>

                <div class="col-md-3 text-center text-md-left" id="hubungi">
                    <h5>Hubungi Kami</h5>
                    <div class="text-nowrap">
                        <i class="fas fa-envelope fa-fw mr-3">diqimusyaffa4@gmail.com</i>
                    </div>
                    <div class="text-nowrap">
                        <i class="fas fa-phone fa-fw mr-3">081250456484</i>
                    </div>
                    <div class="text-nowrap">
                        <i class="fas fa-globe fa-fw mr-3">mantapjiwa.com</i>
                    </div>
                </div>
            </div>

            <div class="row mt-3 mt-md-0">
                <div class="col-md-3 mr-md-auto text-center text-md-left">
                    <small>&copy; Muhammad Shiddiqi Musyaffa' | 2021</small>
                </div>
                <div class="col-md-3 text-center text-md-left">
                    <div>
                        <a href="#" class="text-white mr-2">
                            <i class="fab fa-facebook fa-lg"></i>
                        </a>
                        <a href="#" class="text-white mr-2">
                            <i class="fab fa-twitter fa-lg"></i>
                        </a>
                        <a href="#" class="text-white mr-2">
                            <i class="fab fa-instagram fa-lg"></i>
                        </a>
                        <a href="#" class="text-white mr-2">
                            <i class="fab fa-google-plues fa-lg"></i>
                        </a>
                        <a href="#" class="text-white mr-2">
                            <i class="fab fa-github fa-lg"></i>
                        </a>
                    </div>
                </div>
            </div>

            </div>
        </div>
    </footer>
    {{-- <script src="{{asset('js/app.js')}}"></script> KADA MAU KOCAK GAMING --}}
    <script src="{{asset('js/app.js')}}">
</body>
</html>
