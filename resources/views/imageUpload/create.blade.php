<!doctype html>
<html lang="en">

<head>
  <title>Image Upload</title>
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


<div class="widget-container col-md-6 m-auto ">
    <div class="bg-primary mt-5"><h1 class="text-center text-white ">Image Upload In This Form</h1></div>
    @if(Session::has('success'))
    <p class="alert alert-primary">{{Session::get('success')}}</p>
    @endif
 <form action="{{route('image.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group ">
        <label for="image"><h1>Image</h1></label>
        <input type="file" name="image" class="form-control">
        <div>
            @error('image')
            <strong class="text-danger">{{$message}}</strong>
            @enderror
        </div>
    </div>
    <div class="form-group text-center mt-3">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
 </form>
 </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>