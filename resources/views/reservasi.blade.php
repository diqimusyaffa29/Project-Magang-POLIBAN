@extends('layouts.app')

@section('statusReservasi', 'active')

@section('content')
    <div class="container">
        <div class="row featurette" style="padding: 20px 0">
            <div class="col-md-7">
                <h3><small>Buka Laman BPSC <a href="https://bpsc.banjarmasinkota.go.id/"><small>(https://bpsc.banjarmasinkota.go.id/)</small></a> lalu klik Login</small></h3>
                {{-- <p class="lead"><strong>Kota Banjarmasin </strong>merupakan Ibukota Provinsi Kalimantan Selatan
                    yang
                    terletak di muara Sungai Barito. Sebagian besar wilayah Kota Banjarmasin yang memiliki luas sekitar
                    98,46 km
                    kubik mengalami perkembangan yang sangat cepat hingga menjadi Kota terdapat di Provinsi Kalimantan
                    Selatan.
                </p> --}}
            </div>
            <div class="col-md-5 reservasi1">
                <figure>
                    <img class="featurette-image img-responsive center-block img-fluid"
                        src="{{ asset('img/reservasi1.jpg') }}" alt="Generic placeholder image">
                </figure>
            </div>
        </div>

        <hr style="border-top:1px solid #999">

        <div class="row featurette" style="padding: 20px 0">
            <div class="col-md-7 order-md-2">
                <h3><small>Login Menggunakan Akun Google Anda</small></h3>
                {{-- <p class="lead">Berdasarkan data tahun 2017 kepadatan penduduk Kota Banjarmasin mencapai 6.949
                    jiwa/km
                    diprediksikan jika jumlah penduduk di Kota Banjarmasin akakn mencapai 748.174 jiwa pada tahun 2023 dan
                    797.693 di tahun 2008 dengan laju pertumbuhan 1,29%.</p> --}}
            </div>
            <div class="col-md-5 order-md-1">
                <figure>
                    <img class="featurette-image img-responsive center-block img-fluid"
                        src="{{ asset('img/reservasi2.jpg') }}" alt="Generic placeholder image"
                        style="border: 1px solid black">
                </figure>
            </div>
        </div>

        <hr style="border-top:1px solid #999">

        <div class="row featurette" style="padding: 20px 0">
            <div class="col-md-7">
                <h3><small>Setelah login, tekan pada bagian Rervasi, lalu silahkan pilih hari yang tersedia untuk reservasi</small></h3>
                {{-- <p class="lead">Jl. Kapten Pierre Tendean (Menara Pandang Lantai 3), Gadang, Kecamatan Banjarmasin
                    Tengah, Kota Banjarmasin, Kalimantan Selatan 70123.</p> --}}
            </div>
            <div class="col-md-5">
                <figure>
                    <img class="featurette-image img-responsive center-block img-fluid"
                        src="{{ asset('img/reservasi3.jpg') }}" alt="Generic placeholder image"
                        style="border: 1px solid black">
                </figure>
            </div>
        </div>

        <hr style="border-top:1px solid #999">

        <div class="row featurette" style="padding: 20px 0">
            <div class="col-md-7 order-md-2">
                <h3><small>Silahkan isi tujuan reservasi anda kemudian jika sudah, klik simpan</small></h3>
                {{-- <p class="lead">Berdasarkan data tahun 2017 kepadatan penduduk Kota Banjarmasin mencapai 6.949
                    jiwa/km
                    diprediksikan jika jumlah penduduk di Kota Banjarmasin akakn mencapai 748.174 jiwa pada tahun 2023 dan
                    797.693 di tahun 2008 dengan laju pertumbuhan 1,29%.</p> --}}
            </div>
            <div class="col-md-5 order-md-1">
                <figure>
                    <img class="featurette-image img-responsive center-block img-fluid"
                        src="{{ asset('img/reservasi4.jpg') }}" alt="Generic placeholder image"
                        style="border: 1px solid black">
                </figure>
            </div>
        </div>

        <hr style="border-top:1px solid #999">

        <div class="row featurette" style="padding: 20px 0">
            <div class="col-md-7">
                <h3><small>Jika sukses melakukan reservasi, maka akan muncul tombol untuk menampilkan kode QR untuk melakukan Check in ketika di Plaza Smart City, Reservasi ini dapat dibatalkan dengan klik tanda silang merah</small></h3>
                {{-- <p class="lead">Jl. Kapten Pierre Tendean (Menara Pandang Lantai 3), Gadang, Kecamatan Banjarmasin
                    Tengah, Kota Banjarmasin, Kalimantan Selatan 70123.</p> --}}
            </div>
            <div class="col-md-5">
                <figure>
                    <img class="featurette-image img-responsive center-block img-fluid"
                        src="{{ asset('img/reservasi5.jpg') }}" alt="Generic placeholder image"
                        style="border: 1px solid black">
                </figure>
            </div>
        </div>

        <hr style="border-top:1px solid #999">

        <div class="row featurette" style="padding: 20px 0">
            <div class="col-md-7 order-md-2">
                <h3><small>Tampilkan Kode QR ketika masuk ke ruangan BPSC kemudian arahkan Kode QR pada kamera untuk dilakukan Scanning Checkin</small></h3>
                {{-- <p class="lead">Berdasarkan data tahun 2017 kepadatan penduduk Kota Banjarmasin mencapai 6.949
                    jiwa/km
                    diprediksikan jika jumlah penduduk di Kota Banjarmasin akakn mencapai 748.174 jiwa pada tahun 2023 dan
                    797.693 di tahun 2008 dengan laju pertumbuhan 1,29%.</p> --}}
            </div>
            <div class="col-md-5 order-md-1">
                <figure>
                    <img class="featurette-image img-responsive center-block img-fluid"
                        src="{{ asset('img/reservasi6.jpg') }}" alt="Generic placeholder image"
                        style="border: 1px solid black">
                </figure>
            </div>
        </div>
        <footer>
            <p class="float-right"><a href="#">Back to top</a></p>
            <p>&copy; Tim Magang POLIBAN | 2021 &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>
    </div>
@endsection
