<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Sign In Co-Learn</title>

    <link href="{{ asset('login_register/images/logo.png') }}" rel="icon" />
    <link href="{{ asset('login_register/images/logo.png') }}" rel="apple-touch-icon" />

    <!-- Font Icon -->
    <link rel="stylesheet"
        href="{{ asset('login_register/fonts/material-icon/css/material-design-iconic-font.min.css') }}" />

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('login_register/css/style.css') }}" />
</head>

<body>
    <div class="main">
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure>
                            <img src="{{ asset('login_register/images/signin-image.jpg') }}" alt="sing up image" />
                        </figure>
                        <a href="/register" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign In</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="your_name" id="your_name" placeholder="Your Name" />
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock material-icons-password"></i></label>
                                <input type="password" name="your_pass" id="your_pass" placeholder="Password" />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember
                                    me</label>
                            </div>
                            <div class="form-group form-button">
                                <button type="submit" id="signin" class="form-submit">
                                    Log In
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- JS -->
    <script src="{{ asset('login_register/js/main.js') }}"></script>
</body>

</html>
