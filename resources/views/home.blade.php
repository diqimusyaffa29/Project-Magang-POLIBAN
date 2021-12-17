@extends('layouts.app')
@section('statusHome','active')


@section('content')
{{-- SLIDER --}}
<header id="main-slide">
    <div class="carousel slide carousel-fade" id="mySlide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#mySlide" data-slide-to="0" class="active"></li>
            <li data-target="#mySlide" data-slide-to="1"></li>
            <li data-target="#mySlide" data-slide-to="2"></li>
            <li data-target="#mySlide" data-slide-to="3"></li>
            <li data-target="#mySlide" data-slide-to="4"></li>
            <li data-target="#mySlide" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner text-white" >
            <div class="carousel-item active" id="slide1" data-interval="4000" >
                <img src="{{asset('img/menara pandang by Yulian Rahman.jpg')}}" alt="" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block img-fluid" style="opacity: 0.9">
                    <h1 class="display-1 bg-info px-4 pb-2 d-inline-block container-fluid">Smart <strong>Goverment</strong></h1>
                    <br>
                    <h3 class="bg-dark px-2 pb-1 d-inline-block fluid" style="border-radius: 10px">Tata Kelola Pemerintahan yang Pintar.</h3>
                </div>
            </div>
            <div class="carousel-item " id="slide2" data-interval="4000">
                <img src="{{asset('img/full-image5.jpg')}}" alt="" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block img-fluid" style="opacity: 0.9">
                    <h1 class="display-1 bg-info px-4 pb-2 d-inline-block fluid">Smart <strong>Branding</strong></h1>
                    <br>
                    <h3 class="bg-dark px-2 pb-1 d-inline-block fluid" style="border-radius: 10px">Branding Daerah yang Pintar.</h3>
                </div>
            </div>
            <div class="carousel-item " id="slide3" data-interval="4000">
                <img src="{{asset('img/full-image4.jpg')}}" alt="" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block img-fluid" style="opacity: 0.9">
                    <h1 class="display-1 bg-info px-4 pb-2 d-inline-block fluid" >Smart <strong>Economy</strong></h1>
                    <br>
                    <h3 class="bg-dark px-2 pb-1 d-inline-block fluid" style="border-radius: 10px">Tata Kelola Perekonomian yang Pintar.</h3>
                </div>
            </div>
            <div class="carousel-item " id="slide4" data-interval="4000">
                <img src="{{asset('img/full-image1.jpg')}}" alt="" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block img-fluid" style="opacity: 0.9">
                    <h1 class="display-1 bg-info px-4 pb-2 d-inline-block fluid">Smart <strong>Living</strong></h1>
                    <br>
                    <h3 class="bg-dark px-2 pb-1 d-inline-block fluid" style="border-radius: 10px">Untuk menjamin kelayakan taraf hidup Masyarakat.</h3>
                </div>
            </div>
            <div class="carousel-item " id="slide5" data-interval="4000">
                <img src="{{asset('img/full-image1.jpg')}}" alt="" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block img-fluid" style="opacity: 0.9">
                    <h1 class="display-1 bg-info px-4 pb-2 d-inline-block fluid">Smart <strong>Society</strong></h1>
                    <br>
                    <h3 class="bg-dark px-2 pb-1 d-inline-block fluid" style="border-radius: 10px">Dimensi yang banyak membahas tentang Manusia sebagai unsur utama sebuah Kota.</h3>
                </div>
            </div>
            <div class="carousel-item " id="slide6" data-interval="4000">
                <img src="{{asset('img/full-image1.jpg')}}" alt="" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block img-fluid" style="opacity: 0.9">
                    <h1 class="display-1 bg-info px-4 pb-2 d-inline-block fluid">Smart <strong>Environment</strong></h1>
                    <br>
                    <h3 class="bg-dark px-2 pb-1 d-inline-block fluid" style="border-radius: 10px">Pengelolaan lingkungan yang Pintar.</h3>
                </div>
            </div>
        </div>
        <a href="#mySlide" class="carousel-control-prev container-fluid" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a href="#mySlide" class="carousel-control-next container-fluid" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header>
{{-- END SLIDER --}}
{{-- Main Content --}}
<div class="container">
    {{-- Awal Jumbtron --}}
    <br>
    {{-- <div class="jumbotron">
        <h1 class="display-4">Hello, world!</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </div> --}}
    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4 px-lg-5" style="padding: 50px 0 20px 0">
                <center>
                    <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="130 " height="150">
                    <h2>Kepala Dinas Kominfo</h2>
                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </center>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 px-lg-5" style="padding: 50px 0 20px 0 ">
                <center>
                    <img class="rounded-circle" src="{{asset('img/WalikotaBJM.jpg')}}" alt="Generic placeholder image" width="200" height="220">
                    <h2>Walikota Banjarmasin</h2>
                    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </center>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 px-lg-5" style="padding: 50px 0 20px 0">
                <center>
                    <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="130" height="165">
                    <h2>Kepala Bidang Smart City </h2>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </center>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette" style="padding: 100px 0">
            <div class="col-md-7">
                <h2 class="featurette-heading"><u>Kota Banjarmasin.</u></h2>
                <p class="lead"><strong>Kota Banjarmasin </strong>merupakan Ibukota Provinsi Kalimantan Selatan yang terletak di muara Sungai Barito. Sebagian besar wilayah Kota Banjarmasin yang memiliki luas sekitar 98,46 km kubik mengalami perkembangan yang sangat cepat hingga menjadi Kota terdapat di Provinsi Kalimantan Selatan.</p>
            </div>
            <div class="col-md-5">
                <figure>
                    <a href="https://www.google.co.id/maps/place/Banjarmasin,+Kota+Banjarmasin,+Kalimantan+Selatan/@-3.3171351,114.5591928,12101m/data=!3m2!1e3!4b1!4m5!3m4!1s0x2de4209aa1eec961:0x26030bfcc09204d2!8m2!3d-3.3186067!4d114.5943784?hl=id">
                        <img class="featurette-image img-responsive center-block img-fluid" src="{{asset('img/mapsbjm.jpg')}}" style="border-radius:30px" alt="Generic placeholder image">
                    </a>
                    <figcaption>Sumber: Google Maps</figcaption>
                </figure>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette" style="padding: 100px 0">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading"><strong><u>Pertumbuhan Penduduk</u></strong></h2>
                <p class="lead">Berdasarkan data tahun 2017 kepadatan penduduk Kota Banjarmasin mencapai 6.949 jiwa/km diprediksikan jika jumlah penduduk di Kota Banjarmasin akakn mencapai 748.174 jiwa pada tahun 2023 dan 797.693 di tahun 2008 dengan laju pertumbuhan 1,29%.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <figure>
                    <img class="featurette-image img-responsive center-block img-fluid" src="{{asset('img/Wisata_Menara_Pandang_Mulai_Ramai_Meski_Belum_Dibuka_1.jpg')}}" style="width: 420px; height:370px; border-radius:30px" alt="Generic placeholder image">
                    <figcaption>Sumber: Google Image</figcaption>
                </figure>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette" style="padding: 100px 0">
            <div class="col-md-7">
                <h2 class="featurette-heading"><strong><u>Lokasi</u></strong></h2>
                <p class="lead">Jl. Kapten Pierre Tendean (Menara Pandang Lantai 3), Gadang, Kecamatan Banjarmasin Tengah, Kota Banjarmasin, Kalimantan Selatan 70123.</p>
            </div>
            <div class="col-md-5">
                <figure>
                    <a href="https://www.google.co.id/maps/place/Banjarmasin+Plaza+Smart+City/@-3.3170573,114.5930378,19z/data=!4m5!3m4!1s0x2de4232bca16fb15:0x2b70d9b238e01d19!8m2!3d-3.3170072!4d114.5931429?hl=id">
                        <img class="featurette-image img-responsive center-block img-fluid" src="{{asset('img/Slider-2-Menara_Pandang-BanjarmasinTourism.jpg')}}" style="width: 420px; height:370px; border-radius:30px" alt="Generic placeholder image">
                    </a>
                    <figcaption>Sumber: Dinas Kebudayaan dan Pariwisata Kota Banjarmasin</figcaption>
                </figure>
            </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->


        <!-- FOOTER -->
            <footer>
                <p class="float-right"><a href="#">Back to top</a></p>
                <p>&copy; Tim Magang POLIBAN | 2021 &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
            </footer>

        </div><!-- /.container -->
</div>

{{-- END Main Content --}}
@endsection
