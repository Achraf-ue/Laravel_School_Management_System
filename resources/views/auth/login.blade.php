<!DOCTYPE html>
<html lang="en">
<!--{{asset('backend/')}}-->
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Veltrix - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <link rel="shortcut icon" href="{{asset('backend/assets/images/favicon.ico')}}">

        <link href="{{asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('backend/assets/css/metismenu.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('backend/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('backend/assets/css/style.css')}}" rel="stylesheet" type="text/css">
    </head>

    <body>

        <div class="home-btn d-none d-sm-block">
            <a href="index.html" class="text-dark"><i class="fas fa-home h2"></i></a>
        </div>
        
        <div class="wrapper-page">

            <div class="card overflow-hidden account-card mx-3"> 
                <div class="bg-primary p-4 text-white text-center position-relative">
                    <h4 class="font-20 m-b-5">Bonjour</h4>
                    <p class="text-white-50 mb-4">Admin</p>
                <!--    <a href="index.html" class="logo logo-admin"><img src="assets/images/logo-sm.png" height="24" alt="logo"></a> -->
                </div>
                <div class="account-card-content"> 
                    @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input id="email" class="form-control" type="email" name="email" placeholder="Enter username">
                        </div>

                        <div class="form-group">
                            <label for="userpassword">Password</label>
                            <input id="password" class="form-control" type="password" name="password" placeholder="Enter password">
                        </div>

                        <div class="form-group row m-t-20">
                            <div class="col-sm-6">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customControlInline">
                                    <label class="custom-control-label" for="customControlInline">{{ __('Remember me') }}</label>
                                </div>
                            </div>
                            <div class="col-sm-6 text-right">
                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                            </div>
                        </div>

                        <div class="form-group m-t-10 mb-0 row">
                            <div class="col-12 m-t-20">
                                <a href="{{ route('password.request') }}"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

            <div class="m-t-40 text-center">
                <p>Don't have an account ? <a href="#s" class="font-500 text-primary"> Signup now </a> </p>
            </div> 

        </div>
        <!-- end wrapper-page -->

        
        <!-- jQuery  -->
        <script src="{{asset('backend/assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('backend/assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('backend/assets/js/metisMenu.min.js')}}"></script>
        <script src="{{asset('backend/assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('backend/assets/js/waves.min.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('backend/assets/js/app.j')}}s"></script>

    </body>

</html>