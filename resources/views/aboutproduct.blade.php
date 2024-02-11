@extends('parent')
@section('css')
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('cms/assets/css/aboutproduct.css') }}">
    <link href="{{ asset('js/star-rating.css') }}" rel="stylesheet">
@endsection
@section('name')
    <!-- Detailes For Course -->


    <div class="adboutcourse">
        <div class="container">
            <!-- <div class="card"> -->

            <div class="text">
                <h2>{{ $courses->title }}</h2>
                <p>{{ $courses->description }}</p>
                <span class="price">{{ $courses->price }}</span>
                <a href="https://www.youtube.com/playlist?list=PLDoPjvoNmBAw_t_XWUFbBX-c9MafPk9ji">
                    <span class="go-course">Take Course <i class="fa fa-play-circle-o"></i></span>
                </a>
                <div class="stars">
                    @if ($courses->comments_avg_review <= 1)
                        <ul>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                        </ul>
                    @elseif ($courses->comments_avg_review <= 2)
                        <ul>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                            <li><i class="fa fa-star-o"></i></li>

                        </ul>
                    @elseif ($courses->comments_avg_review <= 3)
                        <ul>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                            <li><i class="fa fa-star-o"></i></li>

                        </ul>
                    @elseif ($courses->comments_avg_review <= 4)
                        <ul>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-o"></i></li>

                        </ul>
                    @else
                        <ul>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                    @endif
                    <span>Reviews ({{ $courses->comments_count }})</span>
                </div>
                <h3>What You Will Learn?</h3>
                <ul class="learn-detaile">
                    <li>Write Code Html</li>
                    <li>Write Code Html On Editore Code</li>
                </ul>
            </div>
            <div class="image">
                <img class="img-circle img-bordered-sm" src="{{ asset('image/' . $courses->image) }}" alt="courses Image">
            </div>

            <!-- </div> -->
        </div>
    </div>


    <!-- End Detailes For Course -->



    <!-- Commint -->

    <!-- Main Body -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-5 col-md-6 col-12 pb-4">
                    <h1>Comments</h1>
                    @foreach ($comments as $comment)
                        <div class="comment mt-4 text-justify float-left">
                            <h4>{{ $comment->name }}</h4><br>
                            <p>{{ $comment->Message }}</p>
                        </div>
                    @endforeach
                </div>
                <div class="col-lg-4 col-md-5 col-sm-4 offset-md-1 offset-sm-1 col-12 mt-4">
                    <form id="create_form">
                        @csrf
                        <h4>Leave a comment</h4>
                        <div class="form-group">
                             <label for="name">Name</label>
                             <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                             <input type="text" name="Message" id="Message" class="form-control">
                        </div>
                        {{-- <div class="form-group">
                             <input type="text" name="review" id="review" class="form-control">
                        </div> --}}
                        <div class="stars">
                            <input style="display: none" id="review">
                            <input class="star star-5" value="5" id="star-5" type="radio" name="star"/>
                            <label class="star star-5" for="star-5"></label>
                            <input class="star star-4" value="4" id="star-4" type="radio" name="star"/>
                            <label class="star star-4" for="star-4"></label>
                            <input class="star star-3" value="3" id="star-3" type="radio" name="star"/>
                            <label class="star star-3" for="star-3"></label>
                            <input class="star star-2" value="2" id="star-2" type="radio" name="star"/>
                            <label class="star star-2" for="star-2"></label>
                            <input class="star star-1" value="1" id="star-1" type="radio" name="star"/>
                            <label class="star star-1" for="star-1"></label>
                        </DIv>










{{-- <select class="star-rating">
    <option value="">Select a rating</option>
    <option value="5">Excellent</option>
    <option value="4">Very Good</option>
    <option value="3">Average</option>
    <option value="2">Poor</option>
    <option value="1">Terrible</option>
</select> --}}


                        {{-- <div class="form-group">
                            <label for="Message">Message</label> <textarea name="Message" id="Message" msg cols="30"
                                rows="5" class="form-control" style="background-color: rgb(255, 255, 255);"></textarea>
                        </div> --}}
                        {{-- <div class="form-group"> <label for="email">Email</label> <input type="text" name="email"
                                id="email" class="form-control"> </div>
                        <div class="form-group">
                            <p class="text-secondary">If you have a <a href="#" class="alert-link">gravatar account</a>
                                your address will be used to display your profile picture.</p>
                        </div> --}}
                        <div class="form-inline"> <input type="checkbox" name="check" id="checkbx"
                                class="mr-1"> <label for="subscribe">Subscribe me to the newlettter</label> </div>
                        <div class="form-group"> <button type="button" id="post" onclick="performStore({{ $courses->id }})"
                                class="btn-danger">Post Comment</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- End Commint -->
@endsection
@section('script')
    <script>
        var stars = new StarRating('.star-rating');
        stars.rebuild();

        function performStore(course_id) {
            let data = {
                name: document.getElementById('name').value,
                Message: document.getElementById('Message').value,
                review: document.getElementById('review').value,
                course_id: course_id,
            }
            store('/comments', data);
        }
    </script>
@endsection
