{{-- <x-app-layout>
</x-app-layout> --}}
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body  class="p-3 mb-2 bg-dark-subtle text-emphasis-dark">
    <br>
    <div class="text-light-emphasis">
   <h2 class="text-center" >BLOG ADMIN PANAL</h2>
    </div>
    
    @if (session()->has('message'))
   <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Deleted Blog!!</strong> You should check in on some of those fields below.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif 
   <!---   navbar -->

   @include('admin.navbar')
   <br>
   <table class="table table-striped">
    <thead class="table-light">
      <tr>
        <th scope="col">No</th>
        <th scope="col">img</th>
        <th scope="col">Subject</th>
        <th scope="col">Message</th>
        <th scope="col">Action</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody class="table-group-divider">

        @foreach ($blog as $key=> $blog)

     <tr>
        <th scope="row">{{++$key}}</th>
        <td><img class="img-fluid rounded w-25" src="/img/{{$blog->img}}"></td>
        <td>{{$blog->subject}}</td>
        <td>{{$blog->msg}}</td>
        <td><a href="{{route('blog.blogdelete',$blog->id)}}" class="btn btn-danger"><i class="las la-trash"></a>  </td>
        <td><a target="blank" href="{{route('blog.edite',$blog->id)}}" class="btn btn-success"><i class="las la-edit"></i></a></td>
      </tr>

      @endforeach

    </tbody> 
   
  </table>


 



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>






