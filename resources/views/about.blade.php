@extends('parent')
@section('css')
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
<!-- Additional CSS Files -->
<link rel="stylesheet" href="{{ asset('cms/assets/css/fontawesome.css') }}">
<link rel="stylesheet" href="{{ asset('cms/assets/css/templatemo-sixteen.css') }}">
<link rel="stylesheet" href="{{ asset('cms/assets/css/owl.css') }}">
@endsection
@section('name')
    <!-- Page Content -->
    <div class="page-heading about-heading header-text">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="text-content">
                <h4>about us</h4>
                <h2>our company</h2>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="best-features about-features">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
                <h2>Our Background</h2>
              </div>
            </div>
            <!-- <hr> -->
            <div class="col-md-6">
              <div class="right-image">
                <img src="{{ asset('cms/images/feature-image.jpg') }}" alt="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="left-content">
                <h4>Who we are &amp; What we do?</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat. Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti eum ratione ex ea praesentium quibusdam? Aut, in eum facere corrupti necessitatibus perspiciatis quis.</p>
                <ul class="social-icons">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="#"><i class="fa fa-behance"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="team-members">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
                <h2>Our Team Members</h2>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-member">
                <div class="thumb-container">
                  <img src="{{ asset('cms/images/team_01.jpg') }}" alt="">
                  <div class="hover-effect">
                    <div class="hover-content">
                      <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="down-content">
                  <h4>Johnny William</h4>
                  <span>CO-Founder</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-member">
                <div class="thumb-container">
                  <img src="{{ asset('cms/images/team_02.jpg') }}" alt="">
                  <div class="hover-effect">
                    <div class="hover-content">
                      <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="down-content">
                  <h4>Karry Pitcher</h4>
                  <span>Product Expert</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-member">
                <div class="thumb-container">
                  <img src="{{ asset('cms/images/team_03.jpg') }}" alt="">
                  <div class="hover-effect">
                    <div class="hover-content">
                      <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="down-content">
                  <h4>Michael Soft</h4>
                  <span>Chief Marketing</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-member">
                <div class="thumb-container">
                  <img src="{{ asset('cms/images/team_04.jpg') }}" alt="">
                  <div class="hover-effect">
                    <div class="hover-content">
                      <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="down-content">
                  <h4>Mary Cool</h4>
                  <span>Product Specialist</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-member">
                <div class="thumb-container">
                  <img src="{{ asset('cms/images/team_05.jpg') }}" alt="">
                  <div class="hover-effect">
                    <div class="hover-content">
                      <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="down-content">
                  <h4>George Walker</h4>
                  <span>Product Photographer</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-member">
                <div class="thumb-container">
                  <img src="{{ asset('cms/images/team_06.jpg') }}" alt="">
                  <div class="hover-effect">
                    <div class="hover-content">
                      <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="down-content">
                  <h4>Kate Town</h4>
                  <span>General Manager</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
