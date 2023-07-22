<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from sb-admin-pro.startbootstrap.com/auth-login-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Jun 2023 14:49:53 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Se connecter</title>
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}} "> -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
    <script data-search-pseudo-elements="" defer=""
        src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js" crossorigin="anonymous">
    </script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container-xl px-4">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <!-- Basic login form-->
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header justify-content-center">
                                    <h3 class="fw-light my-4">Se connecter</h3>
                                </div>
                                <div class="card-body">
                                    <!-- Login form-->
                                    <form method="POST" action="{{route('login')}}">
                                        @csrf
                                        <!-- Form Group (email address)-->
                                        <div class="mb-3">
                                            <label class="small mb-1" for="email">Adresse Email</label>
                                            <input class="form-control @error('email') is-invalid @enderror" id="email"
                                                type="email" placeholder="Enter votre adresse Email" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus />
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <!-- Form Group (password)-->
                                        <div class="mb-3">
                                            <label class="small mb-1" for="password">Mot de passe</label>
                                            <input class="form-control  @error('password') is-invalid @enderror"
                                                id="password" type="password" name="password" required
                                                autocomplete="current-password" placeholder="Entrez votre mot de passe" />
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <!-- Form Group (remember password checkbox)-->
                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" id="remember" type="checkbox"
                                                    name="remember" value="" {{ old('remember') ? 'checked' : '' }} />
                                                <label class="form-check-label" for="remember">Se souvenir</label>
                                            </div>
                                        </div>

                                        <!-- Form Group (login box)-->
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            @if (Route::has('password.request'))
                                            <a class="small" href="{{ route('password.request') }}">Mot de passe oublié?</a>
                                            @endif
                                            <button type="submit" class="btn btn-primary">
                                                Se connecter
                                            </button>
                                        </div>
                                    </form>


                                </div>
                                <div class="card-footer text-center">
                                    <div class="small"><a href="{{route('register')}}">Besoin d'un compte? S'inscrire</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="footer-admin mt-auto footer-dark">
                <div class="container-xl px-4">
                    <div class="row">
                        <div class="col-md-6 small">Copyright © Your Website 2021</div>
                        <div class="col-md-6 text-md-end small">
                            <a href="#!">Privacy Policy</a>
                            ·
                            <a href="#!">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{asset('js/scripts.js')}}"></script>

    <script src="https://assets.startbootstrap.com/js/sb-customizer.js"></script>
    <sb-customizer project="sb-admin-pro"></sb-customizer>
    <script>
        (function () {
            var js =
                "window['__CF$cv$params']={r:'7d08418d7df8d522',m:'52SiUBVMkPJOgpGtvvSNVhVe3APukleCbCV_BXmWYgI-1685630891-0-AUjLvxPzRIjAq8GB98tZ7Q0Z3b+qUefX5YAW5xK6vY/v',u:'/cdn-cgi/challenge-platform/h/b'};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='cdn-cgi/challenge-platform/h/b/scripts/jsd/938e2b5c/invisible.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";
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
                var prev = document.onreadystatechange || function () {};
                document.onreadystatechange = function (e) {
                    prev(e);
                    if (document.readyState !== 'loading') {
                        document.onreadystatechange = prev;
                        handler();
                    }
                };
            }
        })();

    </script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816"
        integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw=="
        data-cf-beacon='{"rayId":"7d08418d7df8d522","version":"2023.4.0","b":1,"token":"6e2c2575ac8f44ed824cef7899ba8463","si":100}'
        crossorigin="anonymous"></script>
</body>

<!-- Mirrored from sb-admin-pro.startbootstrap.com/auth-login-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Jun 2023 14:49:53 GMT -->

</html>
