<nav class="navbar navbar-expand-lg navbar-dark fixed-top m-b-md mb-3" id="topBar">
    <a class="navbar-brand" href="{{url('/')}}">{{config('app.name', 'Laravel')}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarToggler">
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="{{url('/about')}}">About <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/portfolio')}}">Portfolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/services')}}">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/posts')}}">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/contact')}}">Contact</a>
        </li>
      </ul>
    </div>
  </nav>