<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from sb-admin-pro.startbootstrap.com/dashboard-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Jun 2023 14:49:52 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Users List - SB Admin Pro</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
    <script data-search-pseudo-elements="" defer=""
        src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js" crossorigin="anonymous">
    </script>
</head>

<body class="nav-fixed">

    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <main>
                <!-- Main page content-->
                @yield('contenu')
            </main>
        </div>
    </div>
    <script data-cfasync="false" src="{{ asset('cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="{{ asset('js/datatables/datatables-simple-demo.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets/demo/chart-bar-demo.js') }}"></script>
    <script src="{{ asset('assets/demo/chart-pie-demo.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/litepicker/dist/bundle.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/datatables/datatables-simple-demo.js') }}"></script>
    <script src="{{ asset('js/litepicker.js') }}"></script>

    <script src="https://assets.startbootstrap.com/js/sb-customizer.js"></script>
    <sb-customizer project="sb-admin-pro"></sb-customizer>
    <script>
        (function() {
            var js =
                "window['__CF$cv$params']={r:'7d08416dbe00d605',m:'UUH6zipi0D6UAoeOF_53P2M0p6XvjfDHMnbqcSsJqHQ-1685630886-0-AeKBjmD97FavJRC/n6EBVrdt8ju7CJhSfStrJSv1+v3K',u:'/cdn-cgi/challenge-platform/h/b'};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='cdn-cgi/challenge-platform/h/b/scripts/jsd/938e2b5c/invisible.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";
            var _0xh = document.createElement('iframe');
            _0xh.height = 1;
            _0xh.width = 1;
            _0xh.style.position = 'absolute';
            _0xh.style.top = 0;
            _0xh.style.left = 0;
            _0xh.style.border = 'none';
            _0xh.style.visibility = 'hidden';
            document.body.appendChild(_0xh);

            function handler() {
                var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;
                if (_0xi) {
                    var _0xj = _0xi.createElement('script');
                    _0xj.nonce = '';
                    _0xj.innerHTML = js;
                    _0xi.getElementsByTagName('head')[0].appendChild(_0xj);
                }
            }
            if (document.readyState !== 'loading') {
                handler();
            } else if (window.addEventListener) {
                document.addEventListener('DOMContentLoaded', handler);
            } else {
                var prev = document.onreadystatechange || function() {};
                document.onreadystatechange = function(e) {
                    prev(e);
                    if (document.readyState !== 'loading') {
                        document.onreadystatechange = prev;
                        handler();
                    }
                };
            }
        })();
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816"
        integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw=="
        data-cf-beacon='{"rayId":"7d08416dbe00d605","version":"2023.4.0","b":1,"token":"6e2c2575ac8f44ed824cef7899ba8463","si":100}'
        crossorigin="anonymous"></script>
</body>

<!-- Mirrored from sb-admin-pro.startbootstrap.com/dashboard-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Jun 2023 14:49:53 GMT -->

</html>
