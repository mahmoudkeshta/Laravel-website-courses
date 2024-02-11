@extends('../parent')
@section('name')
<section class="h-100 h-custom" style="background-color: #8fc4b7;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-8 col-xl-6">
          <div class="card rounded-3">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img3.webp" class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;" alt="Sample photo">
            <div class="card-body p-4 p-md-5">
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Registration Info</h3>

              <form class="px-md-2" action="{{ route('register.custom') }}" method="POST">
                @csrf
                <div class="form-outline mb-4">
                  <input type="text" id="name" name="name" class="form-control" required autofocus />
                  <label class="form-label" for="name">Name</label>
                  @if ($errors->has('name'))
                  <span class="text-danger">{{ $errors->first('name') }}</span>
                  @endif
                </div>
                <div class="form-group mb-3">
                    <input type="email" placeholder="Email" id="email_address" class="form-control"
                        name="email" required autofocus>
                    @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <input type="password" placeholder="Password" id="password" class="form-control"
                        name="password" required>
                    @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <div class="checkbox">
                        <label><input type="checkbox" name="remember"> Remember Me</label>
                    </div>
                </div>
                <div class="d-grid mx-auto">
                    <button type="submit" class="btn btn-success btn-lg mb-1">Sign up</button>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
