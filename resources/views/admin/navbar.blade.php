<nav class="navbar navbar-expand-lg bg-body-t">
    <div class="container-fluid">
      <a class="navbar-brand" >My Blog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('blog.Custerome_view')}}">customer</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="{{route('blog.blogAdd')}}">blogAdd</a>
          </li> --}}
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Blog
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('blog.blogAdd')}}">Add</a></li>
              <li><a class="dropdown-item" href="{{route('blog.blogView')}}">View</a></li>
     
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{route('blog.cv')}}">Change cv</a>
          </li>
        </ul>
       
            <a class="nav-link active" href="{{url('/')}}">Logout</a>
            {{-- <form method="POST" action="{{ route('logout') }}" x-data>
              @csrf

              <x-jet-responsive-nav-link href="{{ route('logout') }}"
                             @click.prevent="$root.submit();">
                  {{ __('Log Out') }}
              </x-jet-responsive-nav-link>
          </form> --}}
          

       
      </div>
    </div>
  </nav>