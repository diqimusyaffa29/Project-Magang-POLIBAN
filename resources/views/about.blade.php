@extends('layouts.app')
@section('statusAbout', 'active')

@section('content')
    <div class="container">

        {{-- <hr class="featurette-divider"> --}}

            <div class="row featurette" style="padding: 100px 0">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Latar Belakang</h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette" style="padding: 100px 0">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Visi & Misi</h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette" style="padding: 100px 0">
                <div class="col-md-7">
                    <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
                </div>
            </div>

            <hr class="featurette-divider">
    </div>
@endsection
