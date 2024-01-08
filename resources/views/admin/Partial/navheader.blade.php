<nav class="main-header navbar navbar-expand navbar-dark navbar-light">

  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <!-- <li class="nav-item d-none d-sm-inline-block">
      <a href="" class="nav-link">Home</a>
    </li> -->
    <!-- <li class="nav-item d-none d-sm-inline-block">
      <a href="{{url('/communication/form')}}" class="nav-link">Contact</a>
    </li> -->
   
  </ul>

  <ul class="navbar-nav ml-auto">

    <li class="nav-item">
      <a class="nav-link" data-widget="navbar-search" href="#" role="button">
        <i class="fas fa-search"></i>
      </a>
      <div class="navbar-search-block">
        <form class="form-inline">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
              <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </li>

    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-comments"></i>
        <span class="badge badge-danger navbar-badge"></span>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <a href="#" class="dropdown-item">

        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">

          <div class="media">
            <img src="https://i.ibb.co/3Bp4tM8/users.png" alt="" class="img-size-50 img-circle mr-3">
            <div class="media-body">
              <h3 class="dropdown-item-title">
                John Pierce
                <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
              </h3>
              <p class="text-sm">I got your message bro</p>
              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
            </div>
          </div>

        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">

          <div class="media">
            <img src="" alt="User Avatar" class="img-size-50 img-circle mr-3">
            <div class="media-body">
              <h3 class="dropdown-item-title">
                Nora Silvester 
                <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
              </h3>
              <p class="text-sm">The subject goes here</p>
              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
            </div>
          </div>
        </a>

        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
      </div>
    </li>

    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-bell"></i>
        <span class="badge badge-warning navbar-badge"></span>
      </a>
    </li>    
  </ul>
  
  <div class=" btn  "></div><a class="btn btn-secondary mr-3 text-white " href="{{route('admin.logout')}}"><i class="fa fa-sign-out text-white mr-1" aria-hidden="true"></i>Sign out</a>
</nav>