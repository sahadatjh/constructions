<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Log In | PD&D Admin </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/admin/images/logo1.ico') }}">

		<!-- App css -->
		<link href="{{ asset('assets/admin/css/bootstrap-material.min.css') }}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
		<link href="{{ asset('assets/admin/css/app-material.min.css') }}" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

		<link href="{{ asset('assets/admin/css/bootstrap-material-dark.min.css') }}" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
		<link href="{{ asset('assets/admin/css/app-material-dark.min.css') }}" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

		<!-- icons -->
		<link href="{{ asset('assets/admin/css/custom.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

    </head>

    <body class="loading" style="background: url({{ asset('assets/admin/images/observation-urban-building-business-steel.jpg')}}) no-repeat; background-size: cover">

        <div class="account-pages login-box" >
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="card">

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <div class="auth-logo">
                                        <a href="index.html" class="logo logo-dark text-center">
                                            <span class="logo-lg">
                                                <img src="{{ asset('assets/admin/images/logo-long1.png') }}" alt="LOGO" style="width:100% ;">
                                            </span>
                                        </a>
                    
                                        <a href="index.html" class="logo logo-light text-center">
                                            <span class="logo-lg">
                                                {{-- <img src="{{ asset('assets/admin/images/logo-light.png') }}" alt="LOGO" height="22"> --}}
                                            </span>
                                        </a>
                                    </div>
                                    {{-- <p class="text-muted mb-4 mt-3">Enter your email address and password to access admin panel.</p> --}}
                                </div>
                                
                                <form action="{{ route('admin.login.store') }}" method="POST">
                                    @csrf
                                    <div class="mb-2">
                                        <label for="emailaddress" class="form-label">Email address</label>
                                        <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" id="emailaddress" value="{{ old('email') }}" required="" placeholder="Enter your email"  autofocus>
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-2">
                                        <label for="password" class="form-label">Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter your password">
                                            
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                        @error('password')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        
                                    </div>
                                    
                                    <div class="d-grid mb-0 text-center">
                                        <button class="btn btn-info text-white" type="submit"> Log In </button>
                                    </div>
                                    {{-- <a href="auth-recoverpw.html" class="float-end mt-2 ms-1">Forgot your password?</a> --}}

                                </form>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <footer class="footer footer-alt">
            {{-- <script>document.write(new Date().getFullYear())</script> &copy; Property Design & Development by <a href="https://sahadat.xyz" target="_blank" class="text-dark">Mr Sahadat</a>  --}}
        </footer>

        <!-- Vendor js -->
        <script src="{{ asset('assets/admin/js/vendor.min.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('assets/admin/js/app.min.js') }}"></script>
        
    </body>
</html>