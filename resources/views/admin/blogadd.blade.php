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

   @include('admin.navbar')
   

   <div class="container-fluid py-5" id="contact">
    <div class="container">
        <div class="position-relative d-flex align-items-center justify-content-center">
         
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="contact-form text-center">
                    <div id="success"></div>
                    <form name="sentMessage" action="{{route('blog.save')}}" novalidate="novalidate" method="POST"enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="control-group col-sm-6">
                                <input type="file" class="form-control p-4" name="img"  id="img" placeholder="Add img "
                                    required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                           
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control p-4" name="subject" id="subject" placeholder="Subject"
                                required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control py-3 px-4" rows="15" name="msg"  id="msg" placeholder="Message"
                                required="required"
                                data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-outline-primary" type="submit" > publish </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


 



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>




