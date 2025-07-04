<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Sign Up Co-Learn</title>

    <link href="{{ asset('login_register/images/logo.png') }}" rel="icon" />
    <link href="{{ asset('login_register/images/logo.png') }}" rel="apple-touch-icon" />

    <!-- Font Icon -->
    <link rel="stylesheet"
        href="{{ asset('login_register/fonts/material-icon/css/material-design-iconic-font.min.css') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('login_register/css/style.css') }}" />
</head>

<body>
    <div class="main">
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name" />
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email material-icons-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" />
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock material-icons-password"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password" />
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i
                                        class="zmdi zmdi-lock-outline material-icons-password"></i></label>
                                <input type="password" name="re_pass" id="re_pass"
                                    placeholder="Repeat your password" />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all
                                    statements in
                                    <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <button type="submit" id="signup" class="form-submit">
                                    Register
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure>
                            <img src="{{ asset('login_register/images/signup-image.jpg') }}" alt="sing up image" />
                        </figure>
                        <a href="/login" class="signup-image-link">I'm already have account</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- JS -->
    <script src="{{ asset('login_register/js/main.js') }}"></script>
</body>

</html>
