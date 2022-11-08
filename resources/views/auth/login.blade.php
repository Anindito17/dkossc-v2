<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dkossc.co</title>

    <!-- Favicons -->
    <link href="{{url('/img/favIcon.svg')}}" rel="icon">
    <link href="{{url('/img/favIcon.svg')}}" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/node_modules/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@200;300;400;500;600;700;800;900&family=Spline+Sans+Mono:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{url('/css/main.css')}}">

    <style>
        .conLog {
            background-image: url(/img/giphy.gif);
            height: 100vh;
        }

        .logTitle2 {
            font-family: 'Spline Sans Mono', monospace !important;
            color: #fff;
            padding: 0px !important;
            font-size: 25px;
            font-weight: 600;
            line-height: 70px;
            margin-left: 40px;
            text-decoration: none !important;
        }

        .logTitle2:hover {
            color: #FF5C5C !important;
        }

        .subNavCardLog {
            background-color: #494FD7;
            z-index: 1000;
        }

        .imgNavCard2 {
            width: 20%;
            margin: 10px 10px 10px 0px;
        }

        .imgNavCard3 {
            width: 20%;
            margin: 10px 0px 10px 10px;
        }

        h1 {
            font-weight: bold;
            margin: 0;
            font-family: 'Spline Sans Mono', monospace !important;
        }

        h2 {
            text-align: center;
            font-family: 'Spline Sans Mono', monospace !important;
        }

        p {
            font-size: 14px;
            font-weight: 600;
            line-height: 20px;
            letter-spacing: 0.5px;
            margin: 20px 0 30px;
            font-family: 'Spline Sans Mono', monospace !important;
        }

        span {
            font-size: 12px;
        }

        a {
            color: #c4c4c4;
            font-size: 14px;
            text-decoration: none;
            margin: 15px 0;
            font-family: 'Spline Sans Mono', monospace !important;
        }

        a:hover {
            color: #494FD7;
        }

        button {
            border-radius: 20px;
            border: 2px solid #ffff;
            background-color: #000000;
            color: #ffffff;
            font-size: 12px;
            font-weight: 600;
            padding: 12px 45px;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: transform 80ms ease-in;
            font-family: 'Spline Sans Mono', monospace !important;
        }

        button:active {
            transform: scale(0.95);
        }

        button:focus {
            outline: none;
        }

        button.ghost {
            background-color: #fff;
            border-color: #000000;
            color: #000000;
        }


        .btnLog {
            border-radius: 20px;
            border: 2px solid #ffff;
            background-color: #000000;
            color: #ffffff;
            font-size: 12px;
            font-weight: 600;
            padding: 12px 45px;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: transform 80ms ease-in;
            font-family: 'Spline Sans Mono', monospace !important;
        }

        form {
            background-color: #000000;
            background-image: url(/img/bigGlobe.svg);

            color: #ffff;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 50px;
            height: 100%;
            text-align: center;
        }

        input {
            background-color: #ffff;
            border: none;
            padding: 10px 15px;
            margin: 8px 0;
            width: 100%;
            font-family: 'Spline Sans Mono', monospace !important;
            border-radius: 10px;
        }

        .container {
            background-color: #000000;
            border: 10px solid #494FD7;
            border-top: none;
            box-shadow: 10px 10px #262A8C;
            position: relative;
            overflow: hidden;
            width: 768px;
            max-width: 100%;
            min-height: 480px;
            margin-top: 40px;
        }

        .bgBl {
            background-color: #494FD7 !important;
        }

        .form-container {
            position: absolute;
            top: 8%;
            height: 92%;
            transition: all 0.6s ease-in-out;
        }

        .sign-in-container {
            left: 0;
            width: 50%;
            z-index: 2;
        }

        .container.right-panel-active .sign-in-container {
            transform: translateX(100%);
        }

        .sign-up-container {
            left: 0;
            width: 50%;
            opacity: 0;
            z-index: 1;
        }

        .container.right-panel-active .sign-up-container {
            transform: translateX(100%);
            opacity: 1;
            z-index: 5;
            animation: show 0.6s;
        }

        @keyframes show {

            0%,
            49.99% {
                opacity: 0;
                z-index: 1;
            }

            50%,
            100% {
                opacity: 1;
                z-index: 5;
            }
        }

        .overlay-container {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            top: 8%;
            height: 92%;
            overflow: hidden;
            transition: transform 0.6s ease-in-out;
            z-index: 100;
        }

        .container.right-panel-active .overlay-container {
            transform: translateX(-100%);
        }

        .overlay {
            background-color: #fff;
            background-position: 0% 0%;
            background-image: url(/img/bigGlobe2.svg);
            color: #000000;
            position: relative;
            left: -100%;
            height: 100%;
            width: 200%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .container.right-panel-active .overlay {
            transform: translateX(50%);
        }

        .overlay-panel {
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 40px;
            text-align: center;
            top: 0;
            height: 100%;
            width: 50%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .overlay-left {
            transform: translateX(-20%);
        }

        .container.right-panel-active .overlay-left {
            transform: translateX(0);
        }

        .overlay-right {
            right: 0;
            transform: translateX(0);
        }

        .container.right-panel-active .overlay-right {
            transform: translateX(20%);
        }

        .social-container {
            margin: 20px 0;
        }

        .social-container a {
            border: 1px solid #dddddd;
            border-radius: 50%;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            margin: 0 5px;
            height: 40px;
            width: 40px;
        }
    </style>


</head>

<body>
    
    <div class="conLog">
        <a class="logTitle2" href="{{ url('/') }}">
            DKOSSC.CO
        </a>
        <div class="container" id="container">
            <div class="subNavCardLog">
                <div class="row align-items-center bgBl">
                    <div class="col-4"><img class="imgNavCard2" src="{{url('/img/o3.svg')}}" alt=""></div>
                    <div class="col-4">
                        <h6 class="textNavCard">login/regristation</h6>
                    </div>
                    <div class="col-4 d-flex justify-content-end"><img class="imgNavCard3" src="{{url('/img/pw.svg')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="form-container sign-up-container">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <h1 class="mb-2">Create Account</h1>
                    <input placeholder="Name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror


                    <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror


                    <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <input placeholder="Confirm password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    <button class="mt-3"> {{ __('Register') }}</button>
                </form>
            </div>



            <div class="form-container sign-in-container">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <h1 class="mb-2">Login</h1>
                    <span></span>
                    <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror


                    <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" />
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror



                    <!-- <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div> -->



                    @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                    <button class="btnLog" type="submit">
                        {{ __('Login') }}
                    </button>


                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Welcome Back!</h1>
                        <p>To keep connected with us please login with your personal info</p>
                        <button class="ghost" id="signIn">Login</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Hello, Friend!</h1>
                        <p>Enter your personal details and start journey with us</p>
                        <button class="ghost" id="signUp">Regristation</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        signUpButton.addEventListener('click', () => {
            container.classList.add("right-panel-active");
        });

        signInButton.addEventListener('click', () => {
            container.classList.remove("right-panel-active");
        });
    </script>



</body>

</html>