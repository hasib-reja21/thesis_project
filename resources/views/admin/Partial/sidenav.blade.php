<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
</head>
<body>
<aside class="main-sidebar sidebar-dark-primary elevation-4">

<a href="index3.html" class="brand-link">
  <img src="https://i.ibb.co/z6b3jcw/Admin-LTELogo.webp" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
  <span class="brand-text font-weight-light">Admin Panel</span>
</a>
<div class="sidebar">

  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <img src=" https://i.ibb.co/wYLjFNk/Hasib.jpg" class="rounded-circle border " style="width:40px; height:40px" alt="User Image">
    </div>
    <div class="info">
      <a href="#" class="d-block">Hasib Reja</a>
      <h5 class="text-light text-sm mt-1">Jr.Web Developer</h5>
    </div>
  </div>

  <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

      <li class="nav-item menu-open">
        <a href="{{url('/')}}" class="nav-link ">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard
           
          </p>
        </a>

      </li>

      <li class="nav-item">
        <a href="#" class="nav-link">
        <i class="fa-regular fa-user"></i>
          <p>
             Sales
            <i class="fas fa-angle-left right"></i>
            <span class="badge badge-info right"></span>
          </p>
        </a>
        </li>
      <li class="nav-item">
        <a href="" class="nav-link">
          
          <p>
            Categories
            <i class="fas fa-angle-left right"></i>
            <span class="badge badge-info right"></span>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{route('category.list')}}" class="nav-link">
              <i class="far fa-circle nav-icon ml-3"></i>
              <p class="text-sm ml-3">View Categories</p>
            </a>
          </li>
        </ul>

        <li class="nav-item">
        <a href="#" class="nav-link">
        <i class="fa-regular fa-user"></i>
          <p>
             Customers
            <i class="fas fa-angle-left right"></i>
            <span class="badge badge-info right"></span>
          </p>
        </a>
        </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
        
          <p>
            Manage product
            <i class="fas fa-angle-left right ml-3"></i>
            <span class="badge badge-info right"></span>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{route('product.create')}}" class="nav-link">
              <i class="far fa-circle nav-icon ml-3"></i>
              <p class="text-sm ml-3 ">Add Product</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('product.list')}}" class="nav-link">
              <i class="far fa-circle nav-icon ml-3"></i>
              <p class="text-sm ml-3">View Product</p>
            </a>

      </li>
          
        </ul>
      <li class="nav-item">
        <a href="#" class="nav-link">
        <i class="fa-regular fa-user"></i>
          <p>
             User
            <i class="fas fa-angle-left right"></i>
            <span class="badge badge-info right"></span>
          </p>
        </a>
        <!-- <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-circle nav-icon ml-3"></i>
              <p class="text-sm ml-3">Access User Data</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-circle nav-icon ml-3"></i>
              <p class="text-sm ml-3">Delete User</p>
            </a>
          </li>
        </ul> -->
      <li class="nav-item">
        <a href="#" class="nav-link">
          
          <p>
            Manage Bidder
            <span class="badge badge-info right"></span>
          </p>
        </a>
      </li>
      <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Mailbox
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">ail.html" class="nav-link">
                  <i class="far fa
                <a href="pages/mailbox/read-m-circle nav-icon"></i>
                  <p>Read</p>
                </a>
            </ul>
          </li> -->

          <li class="nav-item">
        <a href="#" class="nav-link">
        <i class="fa-regular fa-user"></i>
          <p>
             Sms
            <i class="fas fa-angle-left right"></i>
            <span class="badge badge-info right"></span>
          </p>
        </a>
        </li>
        <li class="nav-item">
        <a href="#" class="nav-link">
        <i class="fa-regular fa-user"></i>
          <p>
             Settings
            <i class="fas fa-angle-left right"></i>
            <span class="badge badge-info right"></span>
          </p>
        </a>
        </li>
      <li class="nav-item">
        <a href="" class="nav-link">
          
          <p>
            Create Report
            <span class="badge badge-info right"></span>
          </p>
        </a>
      </li>
  </nav>

</div>

</aside>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>