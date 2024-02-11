@extends('parent')
@section('name')
  <!-- Latest Courses -->
  <div class="container">
      <div class="section-heading">
          {{-- <h2>Latest Courses</h2> --}}
          <a href="#">view all courses <i class="fa fa-angle-right"></i></a>
      </div>
      {{-- <hr> --}}
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
@endsection
