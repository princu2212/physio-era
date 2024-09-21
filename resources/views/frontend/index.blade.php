@extends('frontend.main')
@section('title')
    Physio Era
@endsection

@section('content')
    <!-- ======= Hero Section ======= -->
    @include('frontend.home.hero')
    <!-- End Hero -->

    <main id="main">

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4 d-flex align-items-stretch">
                        <div class="content">
                            <h3>Why Choose Physio Era?</h3>
                            <p>
                                With Physioera you can easily find a physiotherapist who can help you get rid of pain at the
                                comfort of your home, whether it is a chronic back pain or a sports injury caused by a fall.
                            </p>
                            <div class="text-center">
                                <a href="#" class="more-btn">About More <i class="bx bx-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 d-flex align-items-stretch">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-receipt"></i>
                                        <h4>Corporis voluptates sit</h4>
                                        <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut
                                            aliquip</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-cube-alt"></i>
                                        <h4>Ullamco laboris ladore pan</h4>
                                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                            deserunt</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-images"></i>
                                        <h4>Labore consequatur</h4>
                                        <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>

            </div>
        </section><!-- End Why Us Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container-fluid">
                <div class="section-title">
                    <h2>About</h2>
                </div>
                <div class="row">
                    <div
                        class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-3 px-lg-5">
                        <h3>{{ $about->title }}</h3>
                        <p>{!! $about->description !!}</p>
                        <a href="{{ $about->link }}" class="btn-get-started scrollto w-25"><i class="bi bi-telephone"></i>
                            Call
                            Now</a>
                        </p>
                    </div>
                    <div class="col-xl-5 col-lg-6 align-items-stretch position-relative">
                        <img class="img-fluid physiotherapy-image"
                            src="{{ !empty($about->image) ? url('upload/about/' . $about->image) : url('upload/no_image.jpg') }}"alt="physiotherapy">
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-5 col-lg-6 align-items-stretch position-relative">
                        <img class="img-fluid"
                            src="{{ !empty($aboutlast->image) ? url('upload/about/' . $aboutlast->image) : url('upload/no_image.jpg') }}"alt="physiotherapy">
                    </div>

                    <div
                        class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-3 px-lg-5">
                        <h3>{{ $aboutlast->title }}</h3>
                        <p>{!! $aboutlast->description !!}</p>

                        <div class="d-none d-lg-flex social-links align-items-center">
                            <a href="{{ $contact->whatsapp }}" class="twitter"><i class="bi bi-whatsapp"></i></a>
                            <a href="{{ $contact->facebook }}" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="{{ $contact->instagram }}" class="instagram"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>

                    {{-- <div class="icon-box">
                            <div class="icon"><i class="bx bx-fingerprint"></i></div>
                            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                                excepturi sint occaecati cupiditate non provident</p>
                        </div> --}}
                </div>
            </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container">

                <div class="row">
                    @foreach ($counter as $item)
                        <div class="col-lg-3 col-md-6">
                            <div class="count-box">
                                <i class="{{ $item->icon }}"></i>
                                <span data-purecounter-start="0" data-purecounter-end="{{ $item->number }}"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p>{{ $item->title }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section><!-- End Counts Section -->



        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title">
                    <h2>Area of specialization</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                        consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                        fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">
                    @foreach ($service as $item)
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4">
                            <div class="icon-box">

                                <div class="icon"><img
                                        src="{{ !empty($item->image) ? url('upload/service/' . $item->image) : url('upload/no_image.jpg') }}"
                                        alt=""></div>
                                <h4> <a href="{{ $item->link }}">
                                        {{ $item->title }}
                                    </a></h4>
                                <p>{!! $item->description !!}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Appointment Section ======= -->
        <section id="appointment" class="appointment section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Make an Appointment</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                        consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                        fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <form method="post" action="{{ route('appointment.store') }}" role="form" class="php-email-form">
                    @csrf
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        </div>
                        <div class="col-md-4 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                        </div>
                        <div class="col-md-4 form-group mt-3 mt-md-0">
                            <input type="tel" class="form-control" name="phone" id="phone"
                                placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 form-group mt-3">
                            <input type="date" name="date" class="form-control datepicker" id="date"
                                placeholder="Appointment Date" data-rule="minlen:4"
                                data-msg="Please enter at least 4 chars">
                        </div>
                        <div class="col-md-4 form-group mt-3">
                            <select name="type" id="type" class="form-select">
                                <option value="">Select Type</option>
                                <option value="general_checkup">General Checkup</option>
                                <option value="chronic_back_pain">Chronic Back Pain</option>
                                <option value="neck_cervical_pain">Neck/CervicalPain</option>
                                <option value="sports_injury">Sports Injury</option>
                                <option value="post_accident_physiotherapy">Post Accident Physiotherapy</option>
                                <option value="paralysis_physiotherapy">Paralysis Physiotherapy</option>
                                <option value="slipped_disc">Slipped Disc</option>
                                <option value="frozen_shoulder">Frozen Shoulder</option>
                                <option value="para_quadri_plegia">Para/Quadri Plegia</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <textarea class="form-control" name="comment" rows="5" placeholder="Type Message here..."></textarea>
                    </div>
                    <div class="text-center"><button type="submit">Submit</button></div>
                </form>

            </div>
        </section><!-- End Appointment Section -->


        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container">
                <div class="section-title">
                    <h2>Listen from our patients</h2>
                </div>
                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        @foreach ($review as $item)
                            <div class="swiper-slide">
                                <div class="testimonial-wrap">
                                    <div class="testimonial-item">
                                        <h3>{{ $item->name }}</h3>
                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            {!! $item->message !!}
                                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div>
                            </div><!-- End testimonial item -->
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

    </main>
    <!-- End #main -->
@endsection
