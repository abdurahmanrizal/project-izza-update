@extends('layouts.header')
@section('content')
  <style>
      @media(min-width: 1200px) {
        #feed-gallery {
          margin-right: 6rem;
          margin-left: 6rem;
        }
      }

  </style>
  <div class="container mb-4">
      <div class="row p-3 mt-4">
            <h1 class="font-weight-bold mx-auto">Galeri</h1>
      </div>
      <div class="row" id="feed-gallery">
        @foreach ($galleries as $gallery)
        <div class="col-lg-4 col-md-4 col-sm-12">
            <img src="{{asset('img/gallery'.'/'.$gallery)}}.jpg" alt="{{$gallery}}" class="img-fluid img-responsive mb-2 d-block mx-auto" style="height: 293px !important; width: 293px !important">
        </div>
        <br>
    @endforeach
      </div>
  </div>
@endsection
@section('script')
@endsection
