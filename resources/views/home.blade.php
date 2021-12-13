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
                <div class="carousel-caption d-none d-md-block" style="opacity: 0.9">
                    <h1 class="display-1 bg-info px-4 pb-2 d-inline-block">Smart <strong>Goverment</strong></h1>
                    <br>
                    <p class="bg-dark px-2 pb-1 d-inline-block" style="border-radius: 10px">Smart goverment ditujukan untuk memberikan kenyamanan dan kemudahan kepada para stakeholder, baik antara pemerintah dengan pemerintah (government to government), pemerintah dengan pelaku bisnis (government to business), dan pemerintah dengan masyarakat (government to citizen).</p>
                </div>
            </div>
            <div class="carousel-item " id="slide2" data-interval="4000">
                <img src="{{asset('img/full-image5.jpg')}}" alt="" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block" style="opacity: 0.9">
                    <h1 class="display-1 bg-info px-4 pb-2 d-inline-block">Smart <strong>Branding</strong></h1>
                    <br>
                    <p class="bg-dark px-2 pb-1 d-inline-block" style="border-radius: 10px">Smart Branding menjadi salah satu dimensi dalam Smart City karena di dalam era informasi seperti saat ini, sebuah kota tidak lagi harus mampu memenuhi kebutuhan-kebutuhannya dengan hanya memanfaatkan potensi lokal-nya, tetapi harus juga mampu menarik partisipasi masyarakat, baik dari dalam maupun luar daerah, serta pelaku bisnis dan investor untuk ikut mendorong percepatan pembangunan daerahnya.</p>
                </div>
            </div>
            <div class="carousel-item " id="slide3" data-interval="4000">
                <img src="{{asset('img/full-image4.jpg')}}" alt="" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block" style="opacity: 0.9">
                    <h1 class="display-1 bg-info px-4 pb-2 d-inline-block" >Smart <strong>Economy</strong></h1>
                    <br>
                    <p class="bg-dark px-2 pb-1 d-inline-block" style="border-radius: 10px">Smart Economy atau tata kelola perekonomian yang pintar dimaksudkan untuk mewujudkan ekosistem perekonomian di daerah yang mampu memenuhi tantangan di era informasi yang disruptif dan menuntut tingkat adaptasi yang cepat seperti saat ini dengan mewujudkan ekosistem yang mendukung aktifitas ekonomi masyakat yang selaras dengan sektor ekonomi unggulan daerah yang adaptif terhadap perubahan yang terjadi di era informasi saat ini, serta meningkatkan financial literacy masyarakat. Dimensi smart economy diharapkan mampu membawa Kota Banjarmasin menjadi kota yang nyaman untuk kegiatan berusaha.</p>
                </div>
            </div>
            <div class="carousel-item " id="slide4" data-interval="4000">
                <img src="{{asset('img/full-image1.jpg')}}" alt="" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block" style="opacity: 0.9">
                    <h1 class="display-1 bg-info px-4 pb-2 d-inline-block">Smart <strong>Living</strong></h1>
                    <br>
                    <p class="bg-dark px-2 pb-1 d-inline-block" style="border-radius: 10px">Smart living menjadi salah satu dimensi dalam Smart City untuk menjamin kelayakan taraf hidup masyarakat di dalamnya. Kelayakan taraf hidup ini dapat dinilai dari tiga elemen, yaitu kelayakan pola hidup, kelayakan kualitas kesehatan, dan kelayakan moda transportasi untuk mendukung mobilitas orang dan barang di dalam sebuah Smart City. Sasaran dari smart living di dalam Smart City adalah untuk mewujudkan lingkungan tempat tinggal yang layak tinggal, nyaman, dan efisien.</p>
                </div>
            </div>
            <div class="carousel-item " id="slide5" data-interval="4000">
                <img src="{{asset('img/full-image1.jpg')}}" alt="" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block" style="opacity: 0.9">
                    <h1 class="display-1 bg-info px-4 pb-2 d-inline-block">Smart <strong>Society</strong></h1>
                    <br>
                    <p class="bg-dark px-2 pb-1 d-inline-block" style="border-radius: 10px">Smart society sebagai bagian dari Smart City merupakan dimensi yang banyak membahas tentang manusia sebagai unsur utama sebuah kota. Di dalam sebuah Smart City, interaksi antar manusia telah bergerak menuju ekosistem sosioteknis di mana dimensi fisik dan virtual dari kehidupan warga kota semakin terjalin secara intensif. Interaksi antar-warga terjalin dengan semakin kuat dan tanpa sekat dengan mediasi teknologi.</p>
                </div>
            </div>
            <div class="carousel-item " id="slide6" data-interval="4000">
                <img src="{{asset('img/full-image1.jpg')}}" alt="" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block" style="opacity: 0.9">
                    <h1 class="display-1 bg-info px-4 pb-2 d-inline-block">Smart <strong>Environment</strong></h1>
                    <br>
                    <p class="bg-dark px-2 pb-1 d-inline-block" style="border-radius: 10px">Dimensi smart environment menekankan aspek pengelolaan lingkungan yang efektif dan efisien dengan memanfaatkan teknologi untuk memperkecil penggunaan sumber daya. Smart environment justru ditujukan untuk menciptakan energi alternatif yang lebih ramah lingkungan. Pengembangan energi tersebut dapat dilakukan dengan potensi yang dimiliki oleh setiap wilayah. Ide dasar dari smart environment di dalam Smart City adalah untuk mewujudkan pembangunan yang berkelanjutan, dimana hal tersebut tidak boleh hilang dengan lahirnya ide tentang Smart City yang menjadikan elemen teknologi sebagai elemen pendorongnya.</p>
                </div>
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
                    <img class="rounded-circle" src="{{asset('img/WalikotaBJM.jpg')}}" alt="Generic placeholder image" width="130" height="150">
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
                <img class="featurette-image img-responsive center-block" src="{{asset('img/mapsbjm.jpg')}}" alt="Generic placeholder image">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette" style="padding: 100px 0">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading"><strong><u>Pertumbuhan Penduduk</u></strong></h2>
                <p class="lead">Berdasarkan data tahun 2017 kepadatan penduduk Kota Banjarmasin mencapai 6.949 jiwa/km diprediksikan jika jumlah penduduk di Kota Banjarmasin akakn mencapai 748.174 jiwa pada tahun 2023 dan 797.693 di tahun 2008 dengan laju pertumbuhan 1,29%.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="featurette-image img-responsive center-block" src="{{asset('img/Wisata_Menara_Pandang_Mulai_Ramai_Meski_Belum_Dibuka_1.jpg')}}" style="width: 420px; height:370px" alt="Generic placeholder image">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette" style="padding: 100px 0">
            <div class="col-md-7">
                <h2 class="featurette-heading"><strong><u>Lokasi</u></strong></h2>
                <p class="lead">Jl. Kapten Pierre Tendean (Menara Pandang Lantai 3), Gadang, Kecamatan Banjarmasin Tengah, Kota Banjarmasin, Kalimantan Selatan 70123.</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
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
