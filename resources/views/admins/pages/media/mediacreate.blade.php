@extends('admins.master')
@section('title')
create media
    
@endsection
@section('body')
<form action="coursestore" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <div class="mb-3">
          <label for="114422">title</label>
          <input type="text" name="title" class="form-control">
        </div>
        <label for="formFile" class="form-label">image ubload</label>
        <input class="form-control" type="file" name="image" id="formFile">
      </div>
      <div class="mb-3">
        <button class="btn btn-primary" type="submit">add</button>

      </div>

</form>


  
  
  
    
@endsection