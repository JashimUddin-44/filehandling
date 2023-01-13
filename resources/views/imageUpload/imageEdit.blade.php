<!doctype html>
<html lang="en">

<head>
  <title>Image Update</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
 <style>
    body{
        background-color: pink;
    }
 </style>
</head>

<body>


<div class="widget-container col-md-6 m-auto mt-5">
  <h1><a href="{{route('image.list')}}" class="btn btn-primary">Go View</a></h1>
    <div class="card bg-white">
      <div class="card-header text-center"><h1 class="text-primary">Image Upload In This Form</h1></div>
      <div class="card-body pt0 rounded-bottom ps" id="open-projects-container" style="height: 330px; position: relative;">

 <form action="{{route('image.update',$imageEdit->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    
    <div class="form-group ">
        <label for="image"><h1>Image</h1></label>
        <input type="file" name="image"  class="form-control form-control-lg">
        <img src="{{asset ('upload/image/'.$imageEdit->image)}}" alt="Image" class="rounded-circle" height="80px" width="80px">
        @if(Session::has('success'))
          <p class="alert alert-primary">{{Session::get('success')}}</p>
        @endif
    </div>
    <div class="form-group text-center mt-3">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
 </form>
 </div>
  </div>
 </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>