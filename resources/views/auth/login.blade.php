<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('backend/node_modules/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/node_modules/simple-line-icons/css/simple-line-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/node_modules/flag-icon-css/css/flag-icon.min.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css') }}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('backend/images/favicon.png') }}">
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <div class="row">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-full-bg">
          <div class="row w-100">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-dark text-left p-5">
                <h2>Login</h2>
                <h4 class="font-weight-light">Hello! let's get started</h4>
                <form class="pt-5" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">
                        <label for="email">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                        <i class="mdi mdi-account"></i>
                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="password" >{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                        <i class="mdi mdi-eye"></i>

                        @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="mt-5">
                        <button type="submit" class="btn btn-block btn-warning btn-lg font-weight-medium">
                            {{ __('Login') }}
                        </button>
                    </div>
                    <div class="mt-3 text-center">
                        <a href="#" class="auth-link text-white">Forgot password?</a>
                    </div>                 
                </form>
            </div>
        </div>
    </div>
</div>
<!-- content-wrapper ends -->
</div>
<!-- row ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{ asset('backend/node_modules/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('backend/node_modules/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('backend/node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('backend/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js') }}"></script>
<!-- endinject -->
<!-- inject:js -->
<script src="{{ asset('backend/js/off-canvas.js') }}"></script>
<script src="{{ asset('backend/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('backend/js/misc.js') }}"></script>
<script src="{{ asset('backend/js/settings.js') }}"></script>
<script src="{{ asset('backend/js/todolist.js') }}"></script>
<!-- endinject -->
</body>
</html>






