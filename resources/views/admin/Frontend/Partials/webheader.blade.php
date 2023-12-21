<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .header__info-list {
            display: flex;
            flex-wrap: nowrap;
            align-items: center;
            justify-content: flex-end;
            gap: 20px;
            margin-top: -5px;
                margin-right: -101px;
                margin-bottom: -5px;
                margin-left: -101px;
        }

        .header__info-list li {
            list-style: none;
        }

        .header__info-list a {
            text-decoration: none;
            color: #000;
        }
        .header__top {
            padding-top: -0.813rem;
            padding-right: 0px;
            padding-bottom: 0.813rem;
            padding-left: 0px;
        }
    </style>
</head>

<body>
    <header class="header sticky">
        <div class="header__top ">
            <div class="container-xl ">
                <div class="header__bottom ">
            <div class="container">
                <div class="row align-items-center flex-column-reverse flex-lg-row">
                   
                       
                       
                   
                    <div class="container-xl col-md-6">
                        <nav class="navbar navbar-expand-lg p-0 align-items-center">
                            <a class="site-logo site-title  ml-5" href="#">
                                <!-- <img class="" style="border-radius: 20px; height:70px; width:70px;" src="https://i.ibb.co/WfR3xNJ/abs-3.jpg" alt=""> -->

                            </a>
                            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="menu-toggle"></span>
                            </button>
                            <div class="collapse navbar-collapse mt-lg-0 mt-3" id="navbarSupportedContent">
                                <button type="button" class="menu-sidebar-close"><i class="las la-times"></i></button>
                                <ul class="navbar-nav main-menu m-auto">
                                    <li><a href="{{route('frontend.home')}}">Home</a></li>
                                    <li class="">
                                        <a href="#0">About</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">Company Intro</a></li>
                                            <li><a href="#">Giving Back</a></li>
                                            <li><a href="#">Our Timeline</a></li>
                                            <li><a href="#">Articles</a></li>
                                        </ul>
                                    </li>
                                    <li class="">
                                        <a href="#0">Manage products</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{route('product.create')}}">Add product</a></li>
                                            <li><a href="{{route('product.list')}}">View product</a></li>
                                        </ul>
                                    </li>

                                    <li class="">
                                        <a href="#0">Category</a>
                                        <ul class="sub-menu">
                                            @foreach ($headerCategories as $data )
                                            <li><a href="{{route('product.under.category.view',$data->id)}}">{{$data->name}}</a></li>
                                            @endforeach


                                        </ul>
                                    </li>


                                    <li class="has-mega-menu">
                                        <a href="#0">Products</a>

                                        <div class="mega-menu">
                                            @foreach ($products as $product )
                                            <div class=" mega-menu__inner ">

                                                <ul class=" mega-menu-list">
                                                    <li class="mega-menu-list__item mega-item-bg1">
                                                        <a href="#" class="mega-menu-list__link">
                                                            <span class="mega-menu-list__icon">
                                                                <img src="{{url('/uploads//'.$product->Product_Image)}}" alt="">
                                                            </span>
                                                            <div class="mega-menu-list__content">
                                                                <span class="mega-menu-list__title">{{$product->Product_Name}}</span>
                                                                <p class="mega-menu-list__desc">{{ $product->Product_Description }}</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            @endforeach
                                        </div>
                                    </li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="col-sm-5 col-md-6 mt-sm-3 mt-2">
                            <ul class="header__info-list">
                                @guest
                                <li><a href="{{route('customer.login')}}"><i class="fa fa-sign-out text-white" aria-hidden=" true"></i>Login </a></li>
                                <li><a href="{{route('customer.registration')}}"><i class="fa-solid fa-user text-white"></i>Register</a></li>
                                @endguest

                                @auth
                                <li><a href="{{route('customer.logout')}}"><i class="fa fa-sign-out text-white" aria-hidden="true"></i>Sign out | </a></li>
                                <li><a href="{{route('profile.view')}}">{{auth()->user()->name}}</a></li>
                                @endauth
                            </ul>
                        </div>
                    </div>
                   
                </div>
                    </div>
                

            </div>
        </div>

    </header>
</body>

</html>