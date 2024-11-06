<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from polygons.space/neptune/source/templates/admin1/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Sep 2024 14:27:16 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Forgot Password</title>

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
<div class="app app-auth-lock-screen align-content-stretch d-flex flex-wrap justify-content-end">
    <div class="app-auth-background">

    </div>
    <div class="app-auth-container">
        <div class="logo">
            <a href="{{ route('index') }}">Neptune</a>
        </div>
        <p class="auth-description">Please enter your email to recover password</p>
        @if(session()->has('message') && session('message'))
            <div class="auth-credentials m-b-xxl mt-4">
                <div class="alert alert-{{ session('message')['type'] }}">{{ session('message')['content'] }}</div>
            </div>
        @endif
        <form action="{{ route('auth.handleForgotPassword') }}" method="POST">
            @csrf
            <div class="auth-credentials m-b-xxl">
                <label for="forgotEmail" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror m-b-md" id="forgotEmail" aria-describedby="forgotEmail" name="email" value="{{ old('email') }}">
                <div class="invalid-feedback">@error('email') {{ $message }} @enderror</div>
            </div>

            <div class="auth-submit">
                <button type="submit" class="btn btn-primary">Send Mail</button>
                <a href="{{ route('auth.showFormLogin') }}" class="auth-forgot-password float-end">Login?</a>
            </div>
        </form>

        <div class="divider"></div>
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

<!-- Mirrored from polygons.space/neptune/source/templates/admin1/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Sep 2024 14:27:16 GMT -->
</html>
