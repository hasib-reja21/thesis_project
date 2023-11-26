<!DOCTYPE html>
<html lang="en">

<head>



    <link rel="canonical" href="https://thesoftking.com/login" />


    <link rel="shortcut icon" href="https://thesoftking.com/assets/images/favicon.png" type="image/png">
    <link rel="stylesheet" href="https://thesoftking.com/assets/css/lib/bootstrap.min.css">
    <link rel="stylesheet" href="https://thesoftking.com/assets/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://thesoftking.com/assets/css/lib/slick.css">
    <link rel="stylesheet" href="https://thesoftking.com/assets/css/lightcase.css">
    <link rel="stylesheet" href="https://thesoftking.com/assets/css/main.css">


</head>

<body>
    v>
    </div>
    <section class="account-section">
        <div class="left bg_img" style="background-image: url('https://i.ibb.co/HdtJfxM/bid6.jpg');">
            <div class="left-inner text-center">
                <h6 class="text--base">Welcome Back!</h6>
                <h2 class="title text-white">Sign In to your account</h2>
                <p class="mt-3">Don't have an account with us? Then you can create a account and get access to all of our premium features.
                    <br> <a href="{{route('customer.registration')}}" class="text--base">Register Now!</a>
                </p>
                <h4 class="text-white mt-5 mb-3">We are involved with</h4>


            </div>
        </div>

        <div class="right">

            <div class="el"><img src="https://thesoftking.com/assets/images/bg/account-el.png" alt="image"></div>
            <div class="text-center">
                <a href="#"><img style="border-radius: 10px; height:90px; width:100px;" src="https://i.ibb.co/WfR3xNJ/abs-3.jpg" alt="logo"></a>
            </div>
            <div class="middle w-100">

                <div>
                    @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>

                    @endif
                </div>
                <!-- <div>
                    @if (Session::has('error'))
                    <div class="alert alert-danger">
                        {{Session::get('error')}}
                    </div>

                    @endif
                </div>  -->
                <!-- @include('notify::components.notify') -->
                <form class="account-form" action="" method="post">

                    @csrf
                    <div class="form-group">

                        <label> Email</label>
                        <input type="email" name="email" class="form--control" placeholder="Username or Email" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" autocomplete="off" class="form--control" placeholder="Password..." required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn--base w-100">Login Now</button>
                    </div>
                </form>

                <div class="text-center mt-5">
                    <!-- <p>
                        Having trouble logging in? Forgot your password? You can reset your password anytime. <br>
                        <a class="text--base" href="https://thesoftking.com/user/password/reset"> Reset Now!</a>
                    </p> -->
                </div>
            </div>
            <div class="bottom w-100 text-center">
                <p>© 2011 - 2023 <a href="" class="text--base">Auction & Bidding system</a>. All Rights Reserved.</p>
            </div>
        </div>
    </section>



    <!-- <script src="https://thesoftking.com/assets/js/lib/jquery-3.6.0.min.js"></script>
    <script src="https://thesoftking.com/assets/js/lib/bootstrap.bundle.min.js"></script>
    <script src="https://thesoftking.com/assets/js/lib/slick.min.js"></script>
    <script src="https://thesoftking.com/assets/js/lib/wow.min.js"></script>
    <script src="https://thesoftking.com/assets/js/lib/lightcase.js"></script>
    <script src="https://thesoftking.com/assets/js/app.js"></script>

    <link rel="stylesheet" href="https://thesoftking.com/assets/admin/css/iziToast.min.css">
    <script src="https://thesoftking.com/assets/admin/js/iziToast.min.js"></script> -->

</body>

</html>