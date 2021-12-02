@extends('layouts.app')
@section('statusMember','active')

@section('content')
{{-- SLIDER --}}
<header id="main-slide">
    <div class="carousel slide carousel-fade" id="mySlide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#mySlide" data-slide-to="0" class="active"></li>
            <li data-target="#mySlide" data-slide-to="1"></li>
            <li data-target="#mySlide" data-slide-to="2"></li>
            <li data-target="#mySlide" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner text-white">
            <div class="carousel-item active" id="slide1" data-interval="4000">
                <img src="{{asset('img/full-image10.jpg')}}" alt="" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-1 bg-info px-4 pb-2 d-inline-block">Get <strong>Inpired</strong></h1>
                    <br>
                    <p class="bg-dark px-2 pb-1 d-inline-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, et!</p>
                </div>
            </div>
            <div class="carousel-item " id="slide2" data-interval="4000">
                <img src="{{asset('img/full-image5.jpg')}}" alt="" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-1 bg-info px-4 pb-2 d-inline-block">Take <strong>Action</strong></h1>
                    <br>
                    <p class="bg-dark px-2 pb-1 d-inline-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, et!</p>
                </div>
            </div>
            <div class="carousel-item " id="slide3" data-interval="4000">
                <img src="{{asset('img/full-image4.jpg')}}" alt="" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-1 bg-info px-4 pb-2 d-inline-block">Be <strong>Social</strong></h1>
                    <br>
                    <p class="bg-dark px-2 pb-1 d-inline-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, et!</p>
                </div>
            </div>
            <div class="carousel-item " id="slide4" data-interval="4000">
                <img src="{{asset('img/full-image1.jpg')}}" alt="" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-1 bg-info px-4 pb-2 d-inline-block">Find<strong>Stories</strong></h1>
                    <br>
                    <p class="bg-dark px-2 pb-1 d-inline-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, et!</p>
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
{{-- MEMBER LIST --}}
<section class="py-5 bg-light text-center" id="member-list">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1>Member List</h1>
                <hr class="w-25">
                <p class="lead">Ini adalah list dari member-member kami </p>

                @if (session()->has('pesan'))
                    @if (session()->get('pesan') == 'update')
                        <div class="alert alert-success alert-dismissible w-50 mx-0 fade show">
                            Data <b>{{session()->get('nama')}}</b> berhasil di update
                            <button class="close" type="button" data-dismiss="alert"><span>&times;</span></button>
                        </div>
                    @endif

                    @if (session()->get('pesan') == 'delete')
                        <div class="alert alert-danger alert-dismissible w-50 mx-auto fade show">
                            Data <b>{{session()->get('nama')}}</b>Sudah dihapus
                            <button class="close" type="button" data-dismiss="alert"><span>&times;</span></button>
                        </div>
                    @endif
                @endif

            </div>
        </div>

        {{-- Proses looping untuk menampilkan semua user --}}
        <div class="card-columns">
            @forelse ($users as $user )
                <div class="card">
                    <img src="{{asset('img/gambar'.$user->background_profil.'.jpg')}}" class="card-img-top">
                    <div class="card-body">
                        <img src="{{asset('storage/uploads/'.$user->gambar_profil)}}" alt="" class="rounded-circle img-thumbnail">

                        <h5 class="card-title">{{$user->nama}}</h5>
                        <p class="card-text">"{{$user->bio_profil ?? '. . .'}}"</p>
                        <ul class="fa-ul text-left">
                            <li class="mb-2">
                                <span class="fa-li"><i class="far fa-clock"></i></span>
                                Join in {{ date('F Y', strtotime('$user->created_at')) }}
                            </li>
                            <li class="mb-2">
                                <span class="fa-li"><i class="fas fa-briefcase"></i></span>
                                {{$user->pekerjaan ?? '. . .'}}
                            </li>
                            <li class="mb-2">
                                <span class="fa-li"><i class="fas fa-home"></i></span>
                                {{$user->kota ?? '. . .'}}
                            </li>
                            <li class="mb-2">
                                <span class="fa-li"><i class="fas fa-birthday-cake"></i></span>
                                {{date_diff(date_create($user->tanggal_lahir), date_create('now'))->y}} Tahun
                            </li>
                            <li class="mb-2">
                                <span class="fa-li"><i class="fas fa-envelope"></i></span>
                                {{$user->email}}
                            </li>
                        </ul>

                        {{-- Tombol edit & hapus hanya untuk user sendiri atau admin --}}
                        {{-- Ini meggunakan Laravel Policy --}}

                        @can('update', $user)
                            <div class="btn-action">
                                <a href="{{ url('/users/'.$user->id.'/edit')}}" class="btn btn-primary d-inline-block">Edit</a>
                                <button class="btn btn-danger btn-hapus" data-id="{{$user->id}}" data-toggle="modal" data-target="#DeleteModal">Hapus</button>
                            </div>
                        @endcan
                    </div>
                </div>
            @empty
                <p>Tidak ada Data...</p>
            @endforelse
        </div>
    </div>
</section>

{{-- Modal untuk konfirmasi Proses delete --}}

<div id="DeleteModal" class="modal fade"  role="dialog">
    <div class="modal-dialog">
        {{-- Modal Content --}}
        <form action="" id="deleteForm" method="POST">
            @csrf
            @method('DELETE')
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center">Konfirmasi</h4>
                    <button class="close" type="button" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p class="text-center">Anda Yakin akan menghapus User ini</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger" data-dismiss="modal">Hapus</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
