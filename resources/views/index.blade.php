@extends('parent')
@section('name')
    <!-- Slider -->

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('cms/images/slide_01.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('cms/images/slide_02.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('cms/images/slide_03.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- End Slider -->

    {{--  --}}
    <!-- Latest Courses -->
    <div class="container">
        <div class="section-heading">
            <h2>Latest Courses</h2>
            <a href="{{ route('products') }}" target="_blank">view all courses <i class="fa fa-angle-right"></i></a>
        </div>
        <hr>
        <div class="cards">
            @foreach ($courses as $course)
                <div class="card">
                    <a href="{{ route('courses.show',$course->id) }}"><img class="img-circle img-bordered-sm" src="{{ asset('image/' . $course->image) }}"
                            width="400" height="200" alt="courses Image">
                    </a>
                    <div class="card-body">
                        <h4>{{ $course->title }}</h4>
                        <span>{{ $course->price }}</span>
                        <p>{{ $course->description }}</p>
                        <div class="stars">
                            @if ($course->comments_avg_review <= 1)
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                </ul>
                                @elseif ($course->comments_avg_review <= 2)
                                    <ul class="stars">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>

                                    </ul>
                                @elseif ($course->comments_avg_review <= 3)
                                    <ul class="stars">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>

                                    </ul>
                                @elseif ($course->comments_avg_review <= 4)
                                    <ul class="stars">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>

                                    </ul>
                                @else
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>

                                </ul>
                            @endif
                            <span>Reviews ({{ $course->comments_count }})</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


        <div class="col text-center">
            {{-- <ul class="pages slide-course">
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                </ul> --}}
            {{ $courses->links() }}
        </div>

        <hr>

    </div>
    <!-- End Latest Courses -->
    {{--  --}}
    <!--  -->
    <div id="plant" class="section_Clients layout_padding padding_bottom_0 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="titlepage">
                        <h2> coaches</h2>
                        <span style="text-align: center; ">available, but the majority have suffered alteration in some
                            form, by
                            injected randomised words which don't look even slightly believable</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section Clients_2 layout_padding padding-top_0 text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <!-- <div id="testimonial" class="carousel slide" data-ride="carousel"> -->


                    <!-- The slideshow -->
                    <div class="carousel-inner text-center">
                        <div class="carousel-item active">
                            <div class="titlepage">
                                <div class="john">
                                    <div class="john_image"><img src="{{ asset('cms/images/john-image.png') }}"
                                            style="max-width: 100%;"></div>
                                    <div class="john_text text-center">JOHN DUE</div>
                                    <p class="lorem_ipsum_text">It is a long established fact that a reader will be
                                        distracted by the
                                        readable content of a page when looking at its layout. The point of using Lorem
                                        Ipsum is that it
                                        has a more-or-less normal distribution of letters, asIt is a long established fact
                                        that a reader
                                        will be distracted by the readable content of a page when looking at its layout. The
                                        point of
                                        using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="titlepage">
                                <div class="john">
                                    <div class="john_image"><img src="{{ asset('cms/images/john-image.png') }}"
                                            style="max-width: 100%;"></div>
                                    <div class="john_text text-center">JOHN DUE</div>
                                    <p class="lorem_ipsum_text">It is a long established fact that a reader will be
                                        distracted by the
                                        readable content of a page when looking at its layout. The point of using Lorem
                                        Ipsum is that it
                                        has a more-or-less normal distribution of letters, asIt is a long established fact
                                        that a reader
                                        will be distracted by the readable content of a page when looking at its layout. The
                                        point of
                                        using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <!-- <a class="carousel-control-prev" href="#testimonial" data-slide="prev">
                      <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#testimonial" data-slide="next">
                      <span class="carousel-control-next-icon"></span>
                    </a> -->
                </div>

            </div>
        </div>
    </div>
    </div>

    <!--  -->
@endsection
