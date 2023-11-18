<!DOCTYPE html>
<html lang="en">

<head>

    <!-- <link rel="canonical" href="https://thesoftking.com" /> -->
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebSite",
            "name": "THESOFTKING",
            "url": "https://thesoftking.com"
        }
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" href="https://thesoftking.com/assets/images/favicon.png" type="image/png">
    <link rel="stylesheet" href="https://thesoftking.com/assets/css/lib/bootstrap.min.css">
    <link rel="stylesheet" href="https://thesoftking.com/assets/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://thesoftking.com/assets/css/lib/slick.css">
    <link rel="stylesheet" href="https://thesoftking.com/assets/css/lib/odometer.css">
    <link rel="stylesheet" href="https://thesoftking.com/assets/css/lightcase.css">
    <link rel="stylesheet" href="https://thesoftking.com/assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @notifyCss
</head>

<body>
    <!-- <div class="preloader">
        <div class="preloader__content">
            <h3 class="preloader__text">ABS</h3>
            <div class="preloader__circle"></div>
        </div>
    </div> -->
    <div class="scroll-to-top">
        <span class="scroll-icon">
            <i class="fa-solid fa-arrow-up"></i>
        </span>
    </div>

    <!-- header section -->
    @include('admin.Frontend.Partials.webheader')


   
    <!-- head-body section -->
    @include('admin.Frontend.Partials.head-body')


    <!-- product body section -->
    @include('admin.Frontend.Partials.product-body')

    @yield('content')
     <!-- main body section -->
    @include('admin.Frontend.Partials.main-body')

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


    <!-- <script>
        function notify(status, message) {
            iziToast[status]({
                message: message,
                position: "topRight"
            });
        }
    </script> -->

    <!-- <script>
        adroll_adv_id = "YXRNNTO7ZBAMFBH67UUE5M";
        adroll_pix_id = "MMQQDWGN25EXPHGRPA3NLR";
        adroll_version = "2.0";
        (function(w, d, e, o, a) {
            w.__adroll_loaded = true;
            w.adroll = w.adroll || [];
            w.adroll.f = ['setProperties', 'identify', 'track'];
            var roundtripUrl = "https://s.adroll.com/j/" + adroll_adv_id +
                "/roundtrip.js";
            for (a = 0; a < w.adroll.f.length; a++) {
                w.adroll[w.adroll.f[a]] = w.adroll[w.adroll.f[a]] || (function(n) {
                    return function() {
                        w.adroll.push([n, arguments])
                    }
                })(w.adroll.f[a])
            }
            e = d.createElement('script');
            o = d.getElementsByTagName('script')[0];
            e.async = 1;
            e.src = roundtripUrl;
            o.parentNode.insertBefore(e, o);
        })(window, document);
        adroll.track("pageView");
    </script> -->

    @notifyJs
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>