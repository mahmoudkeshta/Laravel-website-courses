@extends('../dashboard')
@section('title', 'index')
@section('pagename', 'index')
@section('style')

@endsection
@section('content')
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Quick Example</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form id="create_form">
    @csrf
    <div class="card-body">
        <div class="form-group col-md-4">
            <label for="name">name</label>
          <input type="text" class="form-control" name="name" id="name" placeholder="name">
        </div>
        <div class="form-group col-md-4">
          <label for="email">Email address</label>
          <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
        </div>
        <div class="form-group col-md-4">
          <label for="password">Password</label>
          <input type="password" class="form-control" name="password" id="password" placeholder="Password">
        </div>



    <div class="card-footer">
      <button type="button" onclick="performStore()" class="btn btn-primary">store</button>
    </div>
  </form>
</div>
@endsection
@section('script')
<script>
  function performStore(){
    let data = {
      email: document.getElementById('email').value,
      password: document.getElementById('password').value,
      name: document.getElementById('name').value,
    }
    store('/admins',data);
  }
</script>
@endsection
