@extends('layouts.app')

@section('statusGaleri', 'active')

@section('content')
    <div class="wrapper" style="background: #343A40">

        <div class="container">
            {{-- Peresmian BPSC --}}
            <header id="main-slide">
                <div class="carousel slide carousel-fade" id="mySlide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#mySlide" data-slide-to="0" class="active"></li>
                        <li data-target="#mySlide" data-slide-to="1"></li>
                        <li data-target="#mySlide" data-slide-to="2"></li>
                        <li data-target="#mySlide" data-slide-to="3"></li>
                        <li data-target="#mySlide" data-slide-to="4"></li>
                        {{-- <li data-target="#mySlide" data-slide-to="5"></li> --}}
                    </ol>
                    <div class="carousel-inner text-white">
                        <div class="carousel-item active" id="slide1" data-interval="4000">
                            <img src="{{ asset('img/peresmian/66641952_645585115947423_3509919610130399232_o.jpg') }}"
                                alt="" class="img-fluid" height="1000px">
                            <div class="carousel-caption d-none d-md-block" style="opacity: 0.9">
                                <h3 class="bg-dark px-2 pb-1 d-inline-block" style="border-radius: 10px">Peresmian
                                    Banjarmasin Plaza Smart City</h3>
                            </div>
                        </div>
                        <div class="carousel-item" id="slide2" data-interval="4000">
                            <img src="{{ asset('img/peresmian/66927939_568426443686677_4254342862499479552_o.jpg') }}"
                                alt="" class="img-fluid" height="1000px">
                            <div class="carousel-caption d-none d-md-block" style="opacity: 0.9">
                                <h3 class="bg-dark px-2 pb-1 d-inline-block" style="border-radius: 10px">Peresmian
                                    Banjarmasin Plaza Smart City</h3>
                            </div>
                        </div>
                        <div class="carousel-item" id="slide3" data-interval="4000">
                            <img src="{{ asset('img/peresmian/67086429_645584805947454_1396423124970373120_o.jpg') }}"
                                alt="" class="img-fluid" height="1000px">
                            <div class="carousel-caption d-none d-md-block" style="opacity: 0.9">
                                <h3 class="bg-dark px-2 pb-1 d-inline-block" style="border-radius: 10px">Peresmian
                                    Banjarmasin Plaza Smart City</h3>
                            </div>
                        </div>
                        <div class="carousel-item" id="slide3" data-interval="4000">
                            <img src="{{ asset('img/peresmian/IMG_6250.JPG') }}" alt="" class="img-fluid"
                                height="1000px">
                            <div class="carousel-caption d-none d-md-block" style="opacity: 0.9">
                                <h3 class="bg-dark px-2 pb-1 d-inline-block" style="border-radius: 10px">Peresmian
                                    Banjarmasin Plaza Smart City</h3>
                            </div>
                        </div>
                        <div class="carousel-item" id="slide3" data-interval="4000">
                            <img src="{{ asset('img/peresmian/IMG_7297.JPG') }}" alt="" class="img-fluid"
                                height="1000px">
                            <div class="carousel-caption d-none d-md-block" style="opacity: 0.9">
                                <h3 class="bg-dark px-2 pb-1 d-inline-block" style="border-radius: 10px">Peresmian
                                    Banjarmasin Plaza Smart City</h3>
                            </div>
                        </div>

                        <a href="#mySlide" class="carousel-control-prev" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a href="#mySlide" class="carousel-control-next" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                {{-- END Peresmian --}}
            </header>

            <hr class="featurette-divider">

            {{-- Fasilitas BPSC --}}
            <header id="main-slide2">
                <div class="carousel slide carousel-fade" id="mySlide2" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#mySlide2" data-slide-to="0" class="active"></li>
                        <li data-target="#mySlide2" data-slide-to="1"></li>
                        <li data-target="#mySlide2" data-slide-to="2"></li>
                        <li data-target="#mySlide2" data-slide-to="3"></li>
                        <li data-target="#mySlide2" data-slide-to="4"></li>
                        {{-- <li data-target="#mySlide" data-slide-to="5"></li> --}}
                    </ol>
                    <div class="carousel-inner text-white">
                        <div class="carousel-item active" id="slide1" data-interval="4000">
                            <img src="{{ asset('img/fasilitas/IMG_20210524_101342.jpg') }}" alt="" class="img-fluid"
                                height="1000px">
                            <div class="carousel-caption d-none d-md-block" style="opacity: 0.9">
                                <h3 class="bg-dark px-2 pb-1 d-inline-block" style="border-radius: 10px">Fasilitas
                                    Banjarmasin Smart City</h3>
                            </div>
                        </div>
                        <div class="carousel-item" id="slide2" data-interval="4000">
                            <img src="{{ asset('img/fasilitas/IMG_20210524_101711.jpg') }}" alt="" class="img-fluid"
                                height="1000px">
                            <div class="carousel-caption d-none d-md-block" style="opacity: 0.9">
                                <h3 class="bg-dark px-2 pb-1 d-inline-block" style="border-radius: 10px">Fasilitas
                                    Banjarmasin Smart City</h3>
                            </div>
                        </div>
                        <div class="carousel-item" id="slide3" data-interval="4000">
                            <img src="{{ asset('img/fasilitas/IMG_20210524_101750.jpg') }}" alt="" class="img-fluid"
                                height="1000px">
                            <div class="carousel-caption d-none d-md-block" style="opacity: 0.9">
                                <h3 class="bg-dark px-2 pb-1 d-inline-block" style="border-radius: 10px">Fasilitas
                                    Banjarmasin Smart City</h3>
                            </div>
                        </div>
                        <div class="carousel-item" id="slide4" data-interval="4000">
                            <img src="{{ asset('img/fasilitas/IMG_20210524_101814.jpg') }}" alt="" class="img-fluid"
                                height="1000px">
                            <div class="carousel-caption d-none d-md-block" style="opacity: 0.9">
                                <h3 class="bg-dark px-2 pb-1 d-inline-block" style="border-radius: 10px">Fasilitas
                                    Banjarmasin Smart City</h3>
                            </div>
                        </div>
                        <div class="carousel-item" id="slide5" data-interval="4000">
                            <img src="{{ asset('img/fasilitas/IMG_20210524_101835.jpg') }}" alt="" class="img-fluid"
                                height="1000px">
                            <div class="carousel-caption d-none d-md-block" style="opacity: 0.9">
                                <h3 class="bg-dark px-2 pb-1 d-inline-block" style="border-radius: 10px">Fasilitas
                                    Banjarmasin Smart City</h3>
                            </div>

                        </div>
                        <a href="#mySlide2" class="carousel-control-prev" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a href="#mySlide2" class="carousel-control-next" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                {{-- END Fasilitas --}}
            </header>

            <hr class="featurette-divider">

            {{-- Kegiatan BPSC --}}
            <header id="main-slide2">
                <div class="carousel slide carousel-fade" id="mySlide3" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#mySlide3" data-slide-to="0" class="active"></li>
                        <li data-target="#mySlide3" data-slide-to="1"></li>
                        <li data-target="#mySlide3" data-slide-to="2"></li>
                        <li data-target="#mySlide3" data-slide-to="3"></li>
                        <li data-target="#mySlide3" data-slide-to="4"></li>
                        <li data-target="#mySlide3" data-slide-to="5"></li>
                    </ol>
                    <div class="carousel-inner text-white">
                        <div class="carousel-item active" id="slide1" data-interval="4000">
                            <img src="{{ asset('img/kegiatan/1-2-21....jpeg') }}" alt="" class="img-fluid"
                                height="1000px">
                            <div class="carousel-caption d-none d-md-block" style="opacity: 0.9">
                                <h3 class="bg-dark px-2 pb-1 d-inline-block" style="border-radius: 10px">Kegiatan
                                    Sehari-hari Banjarmasin Plaza Smart City</h3>
                            </div>
                        </div>
                        <div class="carousel-item" id="slide2" data-interval="4000">
                            <img src="{{ asset('img/kegiatan/18-3-21.jpeg') }}" alt="" class="img-fluid"
                                height="1000px">
                            <div class="carousel-caption d-none d-md-block" style="opacity: 0.9">
                                <h3 class="bg-dark px-2 pb-1 d-inline-block" style="border-radius: 10px">Kegiatan
                                    Sehari-hari Banjarmasin Plaza Smart City</h3>
                            </div>
                        </div>
                        <div class="carousel-item" id="slide3" data-interval="4000">
                            <img src="{{ asset('img/kegiatan/19-3-21...jpeg') }}" alt="" class="img-fluid"
                                height="1000px">
                            <div class="carousel-caption d-none d-md-block" style="opacity: 0.9">
                                <h3 class="bg-dark px-2 pb-1 d-inline-block" style="border-radius: 10px">Kegiatan
                                    Sehari-hari Banjarmasin Plaza Smart City</h3>
                            </div>
                        </div>
                        <div class="carousel-item" id="slide3" data-interval="4000">
                            <img src="{{ asset('img/kegiatan/2-2-21...jpeg') }}" alt="" class="img-fluid"
                                height="1000px">
                            <div class="carousel-caption d-none d-md-block" style="opacity: 0.9">
                                <h3 class="bg-dark px-2 pb-1 d-inline-block" style="border-radius: 10px">Kegiatan
                                    Sehari-hari Banjarmasin Plaza Smart City</h3>
                            </div>
                        </div>
                        <div class="carousel-item" id="slide3" data-interval="4000">
                            <img src="{{ asset('img/kegiatan/20200116_111617.jpg') }}" alt="" class="img-fluid"
                                height="1000px">
                            <div class="carousel-caption d-none d-md-block" style="opacity: 0.9">
                                <h3 class="bg-dark px-2 pb-1 d-inline-block" style="border-radius: 10px">Kegiatan
                                    Sehari-hari Banjarmasin Plaza Smart City</h3>
                            </div>
                        </div>
                        <div class="carousel-item" id="slide3" data-interval="4000">
                            <img src="{{ asset('img/kegiatan/20200120_103841.jpg') }}" alt="" class="img-fluid"
                                height="1000px">
                            <div class="carousel-caption d-none d-md-block" style="opacity: 0.9">
                                <h3 class="bg-dark px-2 pb-1 d-inline-block" style="border-radius: 10px">Kegiatan
                                    Sehari-hari Banjarmasin Plaza Smart City</h3>
                            </div>
                        </div>

                        <a href="#mySlide3" class="carousel-control-prev" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a href="#mySlide3" class="carousel-control-next" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                {{-- END Kegiatan --}}
            </header>
        </div>
    </div>
@endsection
