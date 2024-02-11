@extends('../dashboard')
@section('title', 'index')
@section('pagename', 'index')
@section('style')

@endsection
@section('content')
<div class="col-12">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Fixed Header Table</h3>

      <div class="card-tools">
        <div class="input-group input-group-sm" style="width: 150px;">
          <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

          <div class="input-group-append">
            <button type="submit" class="btn btn-default">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0" style="height: 300px;">
      <table class="table table-hover text-nowrap">
        <thead>
          <tr>
            <th>ID</th>
            <th>image</th>
            <th>title</th>
            <th>price</th>
            <th>description</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($courses as $course)
          <tr>
            <td>{{$course->id}}</td>
            <td>
              <img class="img-circle img-bordered-sm" src="{{asset('image/'.$course->image)}}" width="50" height="50" alt="courses Image">
           </td>
            <td>{{$course->title}}</td>
            <td>{{$course->price}}</td>
            <td>{{$course->description}}</td>
            <td>
              <div class="btn-group">
                <a href="{{ route('courses.edit',$course->id) }}" type="button" class="btn btn-info btn-flat">
                  <i class="fas fa-edit"></i>
                </a>
                <a href="#" onclick="performDestroy({{$course->id}},this)" class="btn btn-danger btn-flat">
                  <i class="fas fa-trash-alt"></i>
                </a>
                </form>
              </div>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
  {{ $courses->links() }}
</div>
<!-- /.card -->
</div>
@endsection
@section('script')
<script>
  function performDestroy(id,ref){
    confirmDestroy('/courses/'+id,ref)
  }
</script>
@endsection
