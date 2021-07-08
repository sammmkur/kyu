<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/asset-login/fonts/icomoon/style.css">

    <link rel="stylesheet" href="/asset-login/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/asset-login/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="/asset-login/css/style.css">

    <title>Login KYU</title>
  </head>
  <body>



  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-md-2">
          <img src="/asset-login/images/kyu.png" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Log In <strong>KYU</strong></h3>
              {{-- <p class="mb-4">NIK: 12345678 Pass: abcd1234. Jangan lupa lagi</p> --}}
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group first">
                    <label for="nik">{{ __('Nomor Anggota ') }}</label>


                        <input id="nik" type="text" class="form-control{{ $errors->has('nik') ? ' is-invalid' : '' }}" name="nik" value="{{ old('nik') }}" required autofocus>

                        @if ($errors->has('nik'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('nik') }}</strong>
                            </span>
                        @endif

                </div>

                <div class="form-group last mb-4">
                    <label for="password">{{ __('Password') }}</label>


                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif

                </div>

                <div class="d-flex mb-5 align-items-center">
                    <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                      <input type="checkbox" checked="checked"/>
                      <div class="control__indicator"></div>
                    </label>
                    <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
                  </div>

                  <input type="submit" value="Log In" class="btn text-white btn-block btn-primary">

                  {{-- <span class="d-block text-left my-4 text-muted"> or sign in with</span> --}}

                  {{-- <div class="social-login">
                    <a href="#" class="facebook">
                      <span class="icon-facebook mr-3"></span>
                    </a>
                    <a href="#" class="twitter">
                      <span class="icon-twitter mr-3"></span>
                    </a>
                    <a href="#" class="google">
                      <span class="icon-google mr-3"></span>
                    </a>
                  </div> --}}
            </form>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>


    <script src="/asset-login/js/jquery-3.3.1.min.js"></script>
    <script src="/asset-login/js/popper.min.js"></script>
    <script src="/asset-login/js/bootstrap.min.js"></script>
    <script src="/asset-login/js/main.js"></script>
  </body>
</html>
