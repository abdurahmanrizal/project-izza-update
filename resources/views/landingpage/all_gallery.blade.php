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
            <img data-src="{{asset('img/gallery'.'/'.$gallery)}}.jpg" alt="{{$gallery}}" class="img-fluid img-responsive mb-2 d-block mx-auto lozad" style="height: 293px !important; width: 293px !important" @click='showImage("{{$gallery}}")'>
        </div>
        <br>
    @endforeach
      </div>
  </div>
  <div class="modal fade" id="modal-image" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Preview Gambar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
           <div id="img-resource">

           </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('script')
<script>
    var vueGallery = new Vue({
      el: '#feed-gallery',
      methods: {
          showImage: function(resourceImg) {
            let resource = "{{asset('img/gallery'.'/'.':img')}}.jpg"
            resource = resource.replace(':img', resourceImg)
            $('#img-resource').html(`
                <img src="${resource}" class="img-responsive w-100" style="height:500px">
            `)
            $('#modal-image').modal('show')
          }
      }
    })
</script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
<script>
    const el = document.querySelectorAll('#feed-gallery img');
    const observer = lozad(el); // passing a `NodeList` (e.g. `document.querySelectorAll()`) is also valid
    observer.observe();
</script>

@endsection
