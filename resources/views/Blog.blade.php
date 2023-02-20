<div class="container-fluid pt-5" id="blog">
    <div class="container">
        <div class="position-relative d-flex align-items-center justify-content-center">
            <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Blog</h1>
            <h1 class="position-absolute text-uppercase text-primary">Latest Blog</h1>
        </div>
       
        <div class="row">
            @foreach ($blog as $key=> $blog )
            <div class="col-lg-4 mb-5">
             
                <div class="position-relative mb-4">
                    
                    <img class="img-fluid rounded w-100" src="/img/{{$blog->img}}">

                   
                    {{-- <div class="blog-date">

                        <h4 class="font-weight-bold mb-n1">{{$blog->subject}}</h4>
                     
                    </div> --}}
                </div>
                <h5 class="font-weight-medium mb-4">{{$blog->subject}}</h5>
                <a class="btn btn-sm btn-outline-primary py-2" href="{{route('blog.blog')}}" target="blank">Read More</a>
                 
            </div>
            @endforeach
        </div>

         
       
    </div>
</div>