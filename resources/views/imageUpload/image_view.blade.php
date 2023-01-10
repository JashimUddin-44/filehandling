<!doctype html>
<html lang="en">

<head>
  <title>Imgage View</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <div class="container">
    <div class="mt-5 bg-info">
        <h1 class="text-center text-dark">All Image Showing table</h1>
    </div>
    <a href="{{route('image.form')}}" class="btn btn-outline-success">Form</a>
    <br></br>
    <table class="table table-bordered border-primary table-hover table-striped text-center">
        <thead>
            <tr>
                <th><h1>SL NO</h1></th>
                <th><h1>Image</h1></th>
                <th><h1>Action</h1></th>
            </tr>
        </thead>
        <tbody>
            @foreach($images as $image)
            <tr>
                <td>{{$image->id}}</td>
                <td><img src="{{asset('/upload/image/'.$image->image)}}" alt="personal pic" height="80px" width="80px"></td>
                <td>
                    <a href="{{route('image.edit',$image->id)}}" class="btn btn-primary">Edit</a>
                    <a href="{{route('image.delete',$image->id)}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>