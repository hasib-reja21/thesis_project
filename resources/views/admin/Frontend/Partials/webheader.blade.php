<header class="header sticky">
        <div class="header__top">
            <div class="container-xl">
                <div class="row">
                    <div class="col-sm-7">
                        <ul class="header__info-list d-flex flex-wrap align-items-center justify-content-sm-start justify-content-center">
                            <li><a href="https://mail.google.com/mail/u/0/#inbox?compose=new"><i class="fa-solid fa-envelope text-white"></i> <span class="__cf_email__" data-cfemail="95e6faf3e1e2f4e7f0d5e1fdf0e6faf3e1fefcfbf2bbf6faf8">[email&#160;protected]</span></a></li>
                            <li><a href="#"><i class="fa-brands fa-whatsapp text-white"></i> +8801825132226</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-5 mt-sm-0 mt-2">
                        <ul class="header__info-list d-flex flex-wrap align-items-center justify-content-sm-end justify-content-center">

                            <!-- <li class="cart-view  d-none " data-bs-toggle="tooltip" title="Product Cart">
                                <a href="#" class="header-cart-btn">
                                    <i class="las la-shopping-cart"></i>
                                    <span class="cart-count">0</span>
                                </a>
                            </li> -->
                            @guest
                                
                           
                            <li ><a  href="{{route('customer.login')}}"><i class="fa fa-sign-out text-white aria-hidden="true"></i>Login </a></li>
                            <li><a href="{{route('customer.registration')}}"><i class="fa-solid fa-user text-white "></i>Register</a></li>
                            @endguest

                            @auth
                            <li><a href="{{route('customer.logout')}}"><i class="fa fa-sign-out text-white" aria-hidden="true"></i>Logout</a></li>
                            @endauth
                            
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__bottom">
            <div class="container-xl">
                <nav class="navbar navbar-expand-lg p-0 align-items-center">
                    <a class="site-logo site-title" href="#">

                    </a>
                    <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu-toggle"></span>
                    </button>
                    <div class="collapse navbar-collapse mt-lg-0 mt-3" id="navbarSupportedContent">
                        <button type="button" class="menu-sidebar-close"><i class="las la-times"></i></button>
                        <ul class="navbar-nav main-menu m-auto">
                            <li><a href="#">Home</a></li>
                            <li class="menu_has_children">
                                <a href="#0">About</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Company Intro</a></li>
                                    <li><a href="#">Giving Back</a></li>
                                    <li><a href="#">Our Timeline</a></li>
                                    <li><a href="#">Articles</a></li>
                                </ul>
                            </li>

                            <li class="menu_has_children has-mega-menu">
                                <a href="#0">Products</a>
                               
                                <div class="mega-menu">
                                    <div class="mega-menu__inner">
                                        <ul class="mega-menu-list">
                                            <li class="mega-menu-list__item mega-item-bg1">
                                                <a href="#" class="mega-menu-list__link">
                                                    <span class="mega-menu-list__icon">
                                                        <img src="#" alt="">
                                                    </span>
                                                    <div class="mega-menu-list__content">
                                                        <span class="mega-menu-list__title">TrueWallet</span>
                                                        <p class="mega-menu-list__desc">eWallet & Payment Gateway</p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="mega-menu-list__item mega-item-bg2">
                                                <a href="#" class="mega-menu-list__link">
                                                    <span class="mega-menu-list__icon">
                                                        <img src="#" alt="">
                                                    </span>
                                                    <div class="mega-menu-list__content">
                                                        <span class="mega-menu-list__title">Remiten</span>
                                                        <p class="mega-menu-list__desc">Ultimate Remittance Solution</p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="mega-menu-list__item mega-item-bg3">
                                                <a href="#" class="mega-menu-list__link">
                                                    <span class="mega-menu-list__icon">
                                                        <img src="#" alt="">
                                                    </span>
                                                    <div class="mega-menu-list__content">
                                                        <span class="mega-menu-list__title">JetEscrow</span>
                                                        <p class="mega-menu-list__desc">Escrow Payment Platform</p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="mega-menu-list__item mega-item-bg4">
                                                <a href="#" class="mega-menu-list__link">
                                                    <span class="mega-menu-list__icon">
                                                        <img src="#" alt="">
                                                    </span>
                                                    <div class="mega-menu-list__content">
                                                        <span class="mega-menu-list__title">AdsKing</span>
                                                        <p class="mega-menu-list__desc">Advertisement Network</p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="mega-menu-list__item mega-item-bg5">
                                                <a href="#" class="mega-menu-list__link">
                                                    <span class="mega-menu-list__icon">
                                                        <img src="#" alt="">
                                                    </span>
                                                    <div class="mega-menu-list__content">
                                                        <span class="mega-menu-list__title">iBanking</span>
                                                        <p class="mega-menu-list__desc">Micro Banking System</p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="mega-menu-list__item mega-item-bg6">
                                                <a href="#" class="mega-menu-list__link">
                                                    <span class="mega-menu-list__icon">
                                                        <img src="#" alt="">
                                                    </span>
                                                    <div class="mega-menu-list__content">
                                                        <span class="mega-menu-list__title">ICO</span>
                                                        <p class="mega-menu-list__desc">Initial Coin Offering System.</p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="mega-menu-list__item mega-item-bg7">
                                                <a href="#" class="mega-menu-list__link">
                                                    <span class="mega-menu-list__icon">
                                                        <img src="#" alt="">
                                                    </span>
                                                    <div class="mega-menu-list__content">
                                                        <span class="mega-menu-list__title">NFT</span>
                                                        <p class="mega-menu-list__desc">Complete NFT Marketplace</p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="mega-menu-list__item mega-item-bg8">
                                                <a href="#" class="mega-menu-list__link">
                                                    <span class="mega-menu-list__icon">
                                                        <img src="#" alt="">
                                                    </span>
                                                    <div class="mega-menu-list__content">
                                                        <span class="mega-menu-list__title">VoxLiv</span>
                                                        <p class="mega-menu-list__desc">Movie Streaming OTT Platform</p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="mega-menu-list__item mega-item-bg9">
                                                <a href="#" class="mega-menu-list__link">
                                                    <span class="mega-menu-list__icon">
                                                        <img src="#" alt="">
                                                    </span>
                                                    <div class="mega-menu-list__content">
                                                        <span class="mega-menu-list__title">Investro</span>
                                                        <p class="mega-menu-list__desc">Micro Investment Platform</p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="mega-menu-list__item mega-item-bg10">
                                                <a href="#" class="mega-menu-list__link">
                                                    <span class="mega-menu-list__icon">
                                                        <img src="#" alt="">
                                                    </span>
                                                    <div class="mega-menu-list__content">
                                                        <span class="mega-menu-list__title">eTrade</span>
                                                        <p class="mega-menu-list__desc">Online forex trading assistant</p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="mega-menu-list__item mega-item-bg11">
                                                <a href="#" class="mega-menu-list__link">
                                                    <span class="mega-menu-list__icon">
                                                        <img src="#" alt="">
                                                    </span>
                                                    <div class="mega-menu-list__content">
                                                        <span class="mega-menu-list__title">Hoteleon</span>
                                                        <p class="mega-menu-list__desc">Hotel Management System</p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="mega-menu-list__item mega-item-bg12">
                                                <a href="#" class="mega-menu-list__link">
                                                    <span class="mega-menu-list__icon">
                                                        <img src="#" alt="">
                                                    </span>
                                                    <div class="mega-menu-list__content">
                                                        <span class="mega-menu-list__title">Quicky</span>
                                                        <p class="mega-menu-list__desc">Classified Ads Listing</p>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
