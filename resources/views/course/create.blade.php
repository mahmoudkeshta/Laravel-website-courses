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
          <label for="image">image</label>
          <input type="file" class="form-control" name="image" id="image" placeholder="Enter image">
        </div>
        <div class="form-group col-md-4">
          <label for="title">title</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="title">
      </div>
        <div class="form-group col-md-4">
          <label for="price">price</label>
        <input type="text" class="form-control" name="price" id="price" placeholder="price">
      </div>
        <div class="form-group col-md-4">
          <label for="description">description</label>
        <input type="text" class="form-control" name="description" id="description" placeholder="description">
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
    let formData = new FormData();
      formData.append('image',document.getElementById('image').files[0]);
      formData.append('title',document.getElementById('title').value);
      formData.append('price',document.getElementById('price').value);
      formData.append('description',document.getElementById('description').value);
    store('/courses',formData);
  }

</script>
@endsection
