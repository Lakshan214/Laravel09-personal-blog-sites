{{-- <x-app-layout>
</x-app-layout> --}}
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body  class="p-3 mb-2 bg-dark-subtle text-emphasis-dark">
    <br>
    <div class="text-light-emphasis">
   <h2 class="text-center" >BLOG ADMIN PANAL</h2>
    </div>
    
   
   <!---   navbar -->
   @if (session()->has('message'))
   <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Deleted Custromer!</strong> You should check in on some of those fields below.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif 
   @include('admin.navbar')
   <br>
   @include('admin.table')


 



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>




