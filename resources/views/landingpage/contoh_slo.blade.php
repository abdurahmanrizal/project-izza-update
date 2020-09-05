@extends('layouts.header')
@section('content')
    <style>
        .pdfobject-container { height: 30rem; border: 1rem solid rgba(0,0,0,.1); }
    </style>
    <div class="about_us_area mt-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12">
                    <div class="section_title mb-70">
                        <h3 class="mt-3 font-weight-bold wow fadeInUp mt-2 text-center" data-wow-duration="1.2s" data-wow-delay=".2s">Contoh SLO</h3>
                        <br>
                        <div class="wow fadeInUp p-3" data-wow-duration="1.2s" data-wow-delay=".2s">
                            <div id="pdf-slo"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.1.1/pdfobject.min.js"></script>
    <script>
        PDFObject.embed("{{asset('pdf/contoh-slo.pdf')}}", "#pdf-slo")
    </script>
@endsection
