<section id="hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7">
                <div class="hero-content">
                    <h1>{{ $header->title }}</h1>
                    <h2>{{ $header->short_title }}</h2>
                    <h6>{!! $header->description !!}</h6>
                    <a href="#services" class="btn-get-started scrollto">Know More...</a>
                </div>
            </div>
            <div class="col-md-5">
                <img class="img-fluid"
                    src="{{ !empty($header->image) ? url('upload/header/' . $header->image) : url('upload/no_image.jpg') }}"alt="physio thumbnail">
            </div>
        </div>
    </div>
</section>
