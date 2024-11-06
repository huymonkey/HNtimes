
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from polygons.space/neptune/source/templates/admin1/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Sep 2024 14:27:16 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Sign Up</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="/admin/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/admin/assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="/admin/assets/plugins/pace/pace.css" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="/admin/assets/css/main.min.css" rel="stylesheet">
    <link href="/admin/assets/css/custom.css" rel="stylesheet">
    <style>
        .app-auth-container .auth-alts a {
            filter: unset;
            opacity: unset;
            text-decoration: none;
            color: #0b0b0b;
        }

        .app-auth-container .auth-alts a:hover {
            background-color: #e1e5eb;
            opacity: 0.9;
        }
    </style>

    <link rel="icon" type="image/png" sizes="32x32" href="/admin/assets/images/neptune.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/admin/assets/images/neptune.png" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="app app-auth-sign-up align-content-stretch d-flex flex-wrap justify-content-end">
    <div class="app-auth-background">

    </div>
    <div class="app-auth-container">
        <div class="logo">
            <a href="{{ route('index') }}">Neptune</a>
        </div>
        <p class="auth-description">Please enter your credentials to create an account.<br>Already have an account? <a href="{{ route('auth.showFormLogin') }}">Sign In</a></p>
        @if(session()->has('message') && session('message'))
            <div class="auth-credentials m-b-xxl mt-4">
                <div class="alert alert-{{ session('message')['type'] }}">{{ session('message')['content'] }}</div>
            </div>
        @endif
        <form action="{{ route('auth.handleSignUp') }}" method="POST">
            @csrf
            <div class="auth-credentials m-b-xxl">
                <div class="m-b-md">
                    <label for="signUpName" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="signUpName" aria-describedby="signUpName" placeholder="Enter name" name="name" value="{{ old('name') }}">
                    <div class="invalid-feedback">@error('name') {{ $message }} @enderror</div>
                </div>

                <div class="m-b-md">
                    <label for="signUpEmail" class="form-label">Email address</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="signUpEmail" aria-describedby="signUpEmail" placeholder="example@gmail.com" name="email" value="{{ old('email') }}">
                    <div class="invalid-feedback">@error('email') {{ $message }} @enderror</div>
                </div>

                <div class="m-b-md">
                    <label for="signUpPassword" class="form-label">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="signUpPassword" aria-describedby="signUpPassword" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" name="password">
                    @if(!$errors->any())
                        <div id="emailHelp" class="form-text">Password must be minimum 8 characters length*</div>
                    @endif
                    <div class="invalid-feedback">@error('password') {{ $message }} @enderror</div>
                </div>

                <div class="m-b-md">
                    <label for="signUpConfirmPassword" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="signUpConfirmPassword" aria-describedby="signUpConfirmPassword" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" name="password_confirmation">
                    <div class="invalid-feedback">@error('password_confirmation') {{ $message }} @enderror</div>
                </div>

            </div>

            <div class="auth-submit">
                <button type="submit" class="btn btn-primary">Sign Up</button>
            </div>
        </form>
        <div class="divider"></div>
        <div class="auth-alts">
            <a href="{{ route('auth.google') }}" class="w-100 d-block h-100 border border-1 p-3 rounded-pill btn-login-with-google">
                <div class="row">
                    <div class="col-2 d-flex justify-content-center">
                        <img src="/admin/assets/images/other/facebook_logo.png" class="w-100" alt=""
                             style="object-fit: contain">
                    </div>
                    <div class="col-10 d-flex flex-column justify-content-center">
                        <div class="row">
                            <div>
                                <p class="fw-bold mb-1">Google</p>
                                <p class="mb-0 fs-6">Continue with Google</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<!-- Javascripts -->
<script src="/admin/assets/plugins/jquery/jquery-3.5.1.min.js"></script>
<script src="/admin/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="/admin/assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
<script src="/admin/assets/plugins/pace/pace.min.js"></script>
<script src="/admin/assets/js/main.min.js"></script>
<script src="/admin/assets/js/custom.js"></script>
</body>

<!-- Mirrored from polygons.space/neptune/source/templates/admin1/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Sep 2024 14:27:16 GMT -->
</html>
