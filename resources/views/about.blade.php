@extends('layouts.app')
@section('statusAbout', 'active')

@section('content')
    <div class="container">

        {{-- <hr class="featurette-divider"> --}}

            <div class="row featurette" style="padding: 100px 0">
                <div class="col-md-7">
                    <div class="row">
                        <div class="col">
                            <h2 class="featurette-heading">Latar Belakang</h2>
                            <p class="lead">Pembangunan Banjarmasin Plaza Smart City (BPSC) yang telah direalisir adalah sebagai bagian awal dari upaya perwujudan Smart City Banjarmasin. Hal yang telah dinyatakan dalam program kerja "Quick Win", yang meliputi Pengambangan e-Health, Pengembangan Sistem Bank Sampah Digital dan Pengembangan Plaza Smart City.</p>
                            <p class="lead">
                                Sesuai dengan arti penting Banjarmasin Plaza Smart City yang akan dipenuhi melalui implementasi program dan kegiatan dalam mendukung Smart City Banjarmasin.
                            </p>
                            <p class="lead">Program Pembangunan melalui peran penglolaan Smart City Plaza dilakukan melalu: </p>
                            <ul>
                                <li class="lead">Fasilitasi <i>Working Space</i></li>
                                <li class="lead">Kegiatan diskusi tematik.</li>
                                <li class="lead">Kegiatan Pelatihan</li>
                                <li class="lead">Kegiatan Lomba </li>
                            </ul>
                        </div>
                        <div class="col">
                            <h2 class="featurette-heading text-white">.</h2>
                            <p class="lead">Program dan kegiatan ditekankan pada pembangunan berkelanjutan dengan melibatkan: </p>
                            <ul>
                                <li class="lead">Jajaran UMKM</li>
                                <li class="lead">Pertumbuhan Sekolah yang berbasis IT</li>
                                <li class="lead">Komunitas</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 justify-content-center">
                    <img class="featurette-image img-responsive center-block" src="{{asset('img/BPSC Front.jpg')}}" alt="Generic placeholder image" width="120%" style="border-radius: 10px">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette" style="padding: 100px 0">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Visi & Misi</h2>
                    <p class="lead">Mewujudkan Kota Banjarmasin bertaqwa dalam setiap sendi kehidupan masyarakat, dengan mengedepankan pendidikan akhlak dan budi pekerti sehingga terwujud masyarakat Banjarmasin yang religius, berbudi luhur, berbudaya, sehat dan sejahtera.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img class="featurette-image img-responsive center-block" src="{{asset('img/bjm.png')}}" alt="Generic placeholder image">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette" style="padding: 100px 0">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Landasan Hukum</h2>
                    <p class="lead">⚖ Memorandum of Understandig (MoU) Kementrian Komunikasi dengan Kepala Daerah Tahun 2017 tentang pelaksanaan Program Menuju 100 Smart City Indonesia</p>
                    <p class="lead">⚖ Peraturan Walikota Banjarmasin Nomor 41 Tahun 2018 tentang Penyelenggaraan <i>e-Goverment</i></p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-responsive center-block" src="{{asset('img/judge-hammer.jpg')}}" alt="Generic placeholder image" width="120%" style="border-radius: 10px">
                </div>
            </div>

            <hr class="featurette-divider">
    </div>
@endsection
