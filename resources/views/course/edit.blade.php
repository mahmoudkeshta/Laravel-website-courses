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
          <input type="file" class="form-control" name="image" id="image" value="{{$courses->image}}" placeholder="Enter image">
        </div>
        <div class="form-group col-md-4">
          <label for="title">title</label>
        <input type="text" class="form-control" name="title" id="title" value="{{$courses->title}}" placeholder="title">
      </div>
        <div class="form-group col-md-4">
          <label for="price">price</label>
        <input type="text" class="form-control" name="price" id="price" value="{{$courses->price}}" placeholder="price">
      </div>
        <div class="form-group col-md-4">
          <label for="description">description</label>
        <input type="text" class="form-control" name="description" id="description" value="{{$courses->description}}" placeholder="description">
      </div>


    <div class="card-footer">
      <button type="button" onclick="performUpdate({{$courses->id}})" class="btn btn-primary">store</button>
    </div>
  </form>
</div>
@endsection
@section('script')
{{-- <script>
      function performUpdate(id){
        let redirectUrl = '/courses';
    let formData = new FormData();
      formData.append('image',document.getElementById('image').files[0]);
      formData.append('title',document.getElementById('title').value);
      formData.append('price',document.getElementById('price').value);
      formData.append('description',document.getElementById('description').value);
      update('/courses/'+id,formData,redirectUrl);
  } --}}

  

{{-- //   function performUpdate(id ){
//     let data = new FormData();
//     //   image: document.getElementById('image').value,
//     //   title: document.getElementById('title').value,
//     //   price: document.getElementById('price').value,
//     //   description: document.getElementById('description').value,

//       formData.append('title',document.getElementById('title').value);
//       formData.append('price',document.getElementById('price').value);
//       formData.append('description',document.getElementById('description').value);
//       formData.append('image',document.getElementById('image').files[0]);


    // let redirectUrl = '/courses';
    // update('/courses/'+id,data ,redirectUrl ); --}}
  

{{-- </script> --}}

<script>
  function performUpdate(id){
    let data = {
      image: document.getElementById('image').files[0],
      title: document.getElementById('title').value,
      price: document.getElementById('price').value,
      description: document.getElementById('description').value,
    }
    let redirectUrl = '/courses';
    update('/courses/'+id,data ,redirectUrl );
  }
  </script>

@endsection
