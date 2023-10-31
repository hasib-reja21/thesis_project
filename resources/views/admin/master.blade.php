<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Auction</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/fontawesome-free/css/all.min.css">

  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

  <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

  <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/jqvmap/jqvmap.min.css">

  <link rel="stylesheet" href="https://adminlte.io/themes/v3/dist/css/adminlte.min.css?v=3.2.0">

  <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

  <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/daterangepicker/daterangepicker.css">

  <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/summernote/summernote-bs4.min.css">
  <script nonce="b2e7ae89-3c3e-4728-84ba-42372ce3cac1">
    (function(w, d) {
      ! function(a, b, c, d) {
        a[c] = a[c] || {};
        a[c].executed = [];
        a.zaraz = {
          deferred: [],
          listeners: []
        };
        a.zaraz.q = [];
        a.zaraz._f = function(e) {
          return async function() {
            var f = Array.prototype.slice.call(arguments);
            a.zaraz.q.push({
              m: e,
              a: f
            })
          }
        };
        for (const g of ["track", "set", "debug"]) a.zaraz[g] = a.zaraz._f(g);
        a.zaraz.init = () => {
          var h = b.getElementsByTagName(d)[0],
            i = b.createElement(d),
            j = b.getElementsByTagName("title")[0];
          j && (a[c].t = b.getElementsByTagName("title")[0].text);
          a[c].x = Math.random();
          a[c].w = a.screen.width;
          a[c].h = a.screen.height;
          a[c].j = a.innerHeight;
          a[c].e = a.innerWidth;
          a[c].l = a.location.href;
          a[c].r = b.referrer;
          a[c].k = a.screen.colorDepth;
          a[c].n = b.characterSet;
          a[c].o = (new Date).getTimezoneOffset();
          if (a.dataLayer)
            for (const n of Object.entries(Object.entries(dataLayer).reduce(((o, p) => ({
                ...o[1],
                ...p[1]
              })), {}))) zaraz.set(n[0], n[1], {
              scope: "page"
            });
          a[c].q = [];
          for (; a.zaraz.q.length;) {
            const q = a.zaraz.q.shift();
            a[c].q.push(q)
          }
          i.defer = !0;
          for (const r of [localStorage, sessionStorage]) Object.keys(r || {}).filter((t => t.startsWith("_zaraz_"))).forEach((s => {
            try {
              a[c]["z_" + s.slice(7)] = JSON.parse(r.getItem(s))
            } catch {
              a[c]["z_" + s.slice(7)] = r.getItem(s)
            }
          }));
          i.referrerPolicy = "origin";
          i.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(a[c])));
          h.parentNode.insertBefore(i, h)
        };
        ["complete", "interactive"].includes(b.readyState) ? zaraz.init() : a.addEventListener("DOMContentLoaded", zaraz.init)
      }(w, d, "zarazData", "script");
    })(window, document);
  </script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <div class="preloader flex-column justify-content-center align-items-center">

    </div>


    <!-- for navheader -->
    @include('admin.partial.navheader')



    <!-- for side nav -->
    @include('admin.partial.sidenav')

    <div class="content-wrapper">

      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
            </div>
          </div>


          <!-- allocate for pages -->
         @yield('content')


          <div class="card-body pt-0">

            <div id="calendar" style="width: 100%"></div>
          </div>

        </div>

        </section>

      </div>

    </div>
    </section>

  </div>

  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="{{url('/')}}">AuctionBiddingSystem</a>.</strong>
    All rights reserved.
    <!-- <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div> -->
  </footer>

  <aside class="control-sidebar control-sidebar-dark">

  </aside>

  </div>


  <script src="https://adminlte.io/themes/v3/plugins/jquery/jquery.min.js"></script>

  <script src="https://adminlte.io/themes/v3/plugins/jquery-ui/jquery-ui.min.js"></script>

  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>

  <script src="https://adminlte.io/themes/v3/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="https://adminlte.io/themes/v3/plugins/chart.js/Chart.min.js"></script>

  <script src="https://adminlte.io/themes/v3/plugins/sparklines/sparkline.js"></script>

  <script src="https://adminlte.io/themes/v3/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="https://adminlte.io/themes/v3/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>

  <script src="https://adminlte.io/themes/v3/plugins/jquery-knob/jquery.knob.min.js"></script>

  <script src="https://adminlte.io/themes/v3/plugins/moment/moment.min.js"></script>
  <script src="https://adminlte.io/themes/v3/plugins/daterangepicker/daterangepicker.js"></script>

  <script src="https://adminlte.io/themes/v3/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

  <script src="https://adminlte.io/themes/v3/plugins/summernote/summernote-bs4.min.js"></script>

  <script src="https://adminlte.io/themes/v3/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

  <script src="https://adminlte.io/themes/v3/dist/js/adminlte.js?v=3.2.0"></script>

  <script src="https://adminlte.io/themes/v3/dist/js/demo.js"></script>

  <script src="https://adminlte.io/themes/v3/dist/js/pages/dashboard.js"></script>



</body>

</html>