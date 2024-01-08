<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="canonical" href="https://thesoftking.com" />
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" href="https://i.ibb.co/PtgJv80/icon.jpg" type="image/png">
    <link rel="stylesheet" href="https://thesoftking.com/assets/css/lib/bootstrap.min.css">
    <link rel="stylesheet" href="https://thesoftking.com/assets/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://thesoftking.com/assets/css/lib/slick.css">
    <link rel="stylesheet" href="https://thesoftking.com/assets/css/lib/odometer.css">
    <link rel="stylesheet" href="https://thesoftking.com/assets/css/lightcase.css">
    <link rel="stylesheet" href="https://thesoftking.com/assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @notifyCss
    <style>
        .form-control:focus {
            box-shadow: none;
            border-color: #BA68C8
        }

        .profile-button {
            background: rgb(99, 39, 120);
            box-shadow: none;
            border: none
        }

        .profile-button:hover {
            background: #682773
        }

        .profile-button:focus {
            background: #682773;
            box-shadow: none
        }

        .profile-button:active {
            background: #682773;
            box-shadow: none
        }

        .back:hover {
            color: #682773;
            cursor: pointer
        }

        .labels {
            font-size: 11px
        }

        .add-experience:hover {
            background: #BA68C8;
            color: #fff;
            cursor: pointer;
            border: solid 1px #BA68C8
        }

        .profile-img .file {
            position: relative;
            overflow: hidden;
            margin-top: -20%;
            width: 70%;
            border: none;
            border-radius: 0;
            font-size: 15px;
            background: #212529b8;
        }

        .profile-img .file input {
            position: absolute;
            opacity: 0;
            right: 0;
            top: 0;
        }

        .notify {
            z-index: 9999;
            justify-content: center;
        }
    </style>
</head>

<body>
    
    <div class="preloader">
        <div class="preloader__content">
            <h3 class="preloader__text">ABS</h3>
            <div class="preloader__circle"></div>
        </div>
    </div>
    <div class="scroll-to-top">
        <span class="scroll-icon">
            <i class="fa-solid fa-arrow-up"></i>
        </span>
    </div>
    @include('notify::components.notify')
    <!-- header section -->
    @include('admin.Frontend.Partials.webheader')
    


    @yield('content')

    <!-- footer section -->
    @include('admin.Frontend.Partials.footer')



    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://thesoftking.com/assets/js/lib/jquery-3.6.0.min.js"></script>
    <script src="https://thesoftking.com/assets/js/lib/bootstrap.bundle.min.js"></script>
    <script src="https://thesoftking.com/assets/js/lib/slick.min.js"></script>
    <script src="https://thesoftking.com/assets/js/lib/odometer.min.js"></script>
    <script src="https://thesoftking.com/assets/js/lib/viewport.jquery.js"></script>
    <script src="https://thesoftking.com/assets/js/lib/wow.min.js"></script>
    <script src="https://thesoftking.com/assets/js/lib/lightcase.js"></script>
    <script src="https://thesoftking.com/assets/js/app.js"></script>

    <link rel="stylesheet" href="https://thesoftking.com/assets/admin/css/iziToast.min.css">
    <script src="https://thesoftking.com/assets/admin/js/iziToast.min.js"></script>

    <x-notify::notify />
    @notifyJs

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>

</html>