<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <!-- CSS -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   
    <link rel="stylesheet" href="{{url('/css/main.css')}}">
    <style>
        /* ::-webkit-scrollbar {
            width: 1.1vw;
        }
        ::-webkit-scrollbar-track {
            background-color: #c4c4c4;
        }

        ::-webkit-scrollbar-thumb {
            background-color: black;
            border: 0.3vw solid #c4c4c4;
            border-radius: 5vw;
        } */
        /* .favButton:hover {
            background: radial-gradient(ellipse farthest-corner at right bottom, #FEDB37 0%, #FDB931 8%, #9f7928 30%, #8A6E2F 40%, transparent 80%),
                radial-gradient(ellipse farthest-corner at left top, #FFFFFF 0%, #FFFFAC 8%, #D1B464 25%, #5d4a1f 62.5%, #5d4a1f 100%);
            -webkit-background-clip: text;
            -moz-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        } */

        .cenOther {
            text-align: end;
        }

        .otherButt {
            text-decoration: none !important;
            font-family: 'Spline Sans Mono', monospace;
            font-size: 17px;
            font-weight: 800;
            color: #000000;
            line-height: 20px;

            border: 2px solid #000000;
            padding: 7px 25px;
            box-shadow: 5px 5px #000000;
            background-color: #FFFF50;
        }

        .otherButt:hover {
            background-color: #7FFF5B;
            color: #000000 !important;
        }

        .imgOther {
            height: 17px !important;
        }

        .marginInnerCard {
            padding: 15px 20px;
        }

        .butLike22 {
            border: 2px solid #494FD7;
            margin: 10px 20px;

            text-decoration: none !important;
            padding: 3px 7px;
            border-radius: 50px;
            color: #494FD7;

            font-family: 'Spline Sans Mono', monospace !important;
            font-size: 12px;
            font-weight: 800;
            background-color: #fff;
        }

        .butLike22:hover {
            background-color: #494FD7;
            color: #fff;
        }

        .footCard {
            text-align: right !important;
            /* background-image: url("/img/tentang.svg");
            background-repeat: no-repeat;
            background-size: cover; */
        }

        .bgGIF {
            background-image: url("/img/bgCons.gif");
        }

        .bgRedd {
            background-color: #E7E3E3;
        }

        /* 
---------------------------------------------
preloader
--------------------------------------------- 
*/

        .js-preloader {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #fff;
            display: -webkit-box;
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            opacity: 1;
            visibility: visible;
            z-index: 9999;
            -webkit-transition: opacity 0.25s ease;
            transition: opacity 0.25s ease;
        }

        .js-preloader.loaded {
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
        }

        @-webkit-keyframes dot {
            50% {
                -webkit-transform: translateX(96px);
                transform: translateX(96px);
            }
        }

        @keyframes dot {
            50% {
                -webkit-transform: translateX(96px);
                transform: translateX(96px);
            }
        }

        @-webkit-keyframes dots {
            50% {
                -webkit-transform: translateX(-31px);
                transform: translateX(-31px);
            }
        }

        @keyframes dots {
            50% {
                -webkit-transform: translateX(-31px);
                transform: translateX(-31px);
            }
        }

        .preloader-inner {
            position: relative;
            width: 142px;
            height: 40px;
            background: #fff;
        }

        .preloader-inner .dot {
            position: absolute;
            width: 16px;
            height: 16px;
            top: 12px;
            left: 15px;
            background: #55a630;
            border-radius: 50%;
            -webkit-transform: translateX(0);
            transform: translateX(0);
            -webkit-animation: dot 2.8s infinite;
            animation: dot 2.8s infinite;
        }

        .preloader-inner .dots {
            -webkit-transform: translateX(0);
            transform: translateX(0);
            margin-top: 12px;
            margin-left: 31px;
            -webkit-animation: dots 2.8s infinite;
            animation: dots 2.8s infinite;
        }

        .preloader-inner .dots span {
            display: block;
            float: left;
            width: 16px;
            height: 16px;
            margin-left: 16px;
            background: #55a630;
            border-radius: 50%;
        }


        .cardRec {
            border: 4px solid #000000;
            box-shadow: 7px 7px #000000;
            background-color: transparent;
        }

        .resultListRec {
            padding: 40px !important;
            background-color: transparent;
        }

        .subNavCardPro {
            background-color: #000000;
            z-index: 1000;
        }

        .imgNavCard4 {
            height: 15px;
            margin: 10px 0px 10px 15px;
        }

        .imgNavCard5 {
            height: 19px;
            margin: 10px 15px 10px 0px;
        }

        .imgFootPer {
            background-image: url("/img/tentang.svg");
            background-repeat: no-repeat;
            background-size: cover;
            height: 100px;
        }

        .animate__fadeInDown {
            animation: fadeInDown;
            /* referring directly to the animation's @keyframe declaration */
            animation-duration: 2s;
            /* don't forget to set a duration! */
        }
    </style>
</head>

<div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>

<body class="bgGIF">
    @extends('layouts.navbar')
    <!-- <nav class="navbar navbar-expand-lg fixed-top bg-blck">
        <div class="container-fluid">
            <a class="navbar-brand logTitle" href="#">
                DKOSSC.CO
            </a>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    </li>
                    <li class="nav-item">
                    </li>
                    <li class="nav-item">
                    </li>
                </ul>
                @if (Route::has('login'))
                <span class="navbar-text">
                    @auth
                    <a class="refLogReg" href="{{ url('/dashboard') }}">dashboard</a>
                    @else
                    <a class="refLogReg" href="{{ route('login') }}">Login / Register</a>
                    @endauth
                </span>
                @endif
               
            </div>
        </div>
    </nav> -->



    <!-- hero -->
    <div class="bgHero animate__fadeInDown">

    </div>
    <!-- end hero -->





    <!-- Content. -->
    <div class="container mt-5 mb-5">
        <div class="cardRec mb-5" data-aos="fade-up" >
            <div class="subNavCardPro">
                <div class="row align-items-center">
                    <div class="col-4"><img class="imgNavCard4" src="{{url('/img/o3.svg')}}" alt=""></div>
                    <div class="col-4">
                        <h6 class="textNavCard">Introduction</h6>
                    </div>
                    <div class="col-4 d-flex justify-content-end"><img class="imgNavCard5" src="{{url('/img/per2.svg')}}" alt="">
                    </div>
                </div>
            </div>

            <div class="resultListRec">
                <h2 class="textContennt1">Dkossc adalah sistem rekomendasi tempat kos di Kota Malang menggunakan metode contend-based filtering yang berbasis website. </h2>
                <br>
                <h2 class="textContennt1">Cara menggunakan sistem :
                    <div class="ms-4">
                        <h2 class="textContennt1 mt-2">1. Login menggunakan akun yg sudah terdaftar.</h2>
                        <h2 class="textContennt1 mt-2">2. Jika Belum, lakukan registrasi akun terlebih dahulu.</h2>
                        <h2 class="textContennt1 mt-2">3. Cari dan pilih kos jika kos sesuai dengan kriteria anda. (Klik tombol +kandidat).</h2>
                        <h2 class="textContennt1 mt-2">4. Buka halaman profil untuk melihat hasil rekomendasi.</h2>
                        <h2 class="textContennt1 mt-2">5. Jika ingin merubah kandidat kos, hapus terlebih dahulu kandidat kos yang sudah tersimpan</h2>
                        <h2 class="textContennt1 mt-1" style="margin-left: 30px;">sebelumnya.</h2>
                    </div>

                </h2>
            </div>
            <div class="imgFootPer"></div>
        </div>


        <div class="row mb-4" data-aos="fade-up" >
            <div class="col-6">
                <div class="cardContent bgRedd">
                    <div class="subNavCard">
                        <div class="row align-items-center">
                            <div class="col-4"><img class="imgNavCard ms-2" src="{{url('/img/o3.svg')}}" alt=""></div>
                            <div class="col-4">
                                <h6 class="textNavCard">Example Data</h6>
                            </div>
                            <div class="col-4 d-flex justify-content-end"><img class="imgNavCard" src="{{url('/img/pw.svg')}}" alt="">
                            </div>
                        </div>

                    </div>

                    <div class="row align-items-center marginInnerCard">
                        <div class="col-4">
                            <div class="frameImg2"><img class="imgUtam" src="{{url('/img/conKos.svg')}}" alt=""></div>
                        </div>

                        <div class="col-8">
                            <h2 class="textContennt1">Kost Singgahsini Kozroom</h2>
                            <h4 class="textContennt2 mt-1">PUTRA</h4>
                            <h4 class="textContennt1 mt-1">Rp1.773.000 / Bulan</h4>

                            <p class="textContennt2 mt-3"># Kamar mandi dalam</p>
                            <p class="textContennt2"># Termasuk listrik</p>
                            <p class="textContennt2"># Wifi</p>

                            <div class="d-flex justify-content-end">
                                <h6 class="textContennt3"><img class="imgGlobe" src="{{url('/img/globe.svg')}}" alt="">
                                    Lowokwaru,Kota
                                    Malang</h6>
                            </div>
                        </div>
                    </div>


                    <div class="footCard">
                        <form style="margin-bottom: 0px !important;">
                            <button class="butLike22">+ kandidat</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="cardContent bgRedd">
                    <div class="subNavCard">
                        <div class="row align-items-center">
                            <div class="col-4"><img class="imgNavCard ms-2" src="{{url('/img/o3.svg')}}" alt=""></div>
                            <div class="col-4">
                                <h6 class="textNavCard">Example Data</h6>
                            </div>
                            <div class="col-4 d-flex justify-content-end"><img class="imgNavCard" src="{{url('/img/pw.svg')}}" alt="">
                            </div>
                        </div>

                    </div>

                    <div class="row align-items-center marginInnerCard">
                        <div class="col-4">
                            <div class="frameImg2"><img class="imgUtam" src="{{url('/img/conKos.svg')}}" alt=""></div>
                        </div>

                        <div class="col-8">
                            <h2 class="textContennt1">Kost Singgahsini Kozroom</h2>
                            <h4 class="textContennt2 mt-1">PUTRA</h4>
                            <h4 class="textContennt1 mt-1">Rp1.773.000 / Bulan</h4>

                            <p class="textContennt2 mt-3"># Kamar mandi dalam</p>
                            <p class="textContennt2"># Termasuk listrik</p>
                            <p class="textContennt2"># Wifi</p>

                            <div class="d-flex justify-content-end">
                                <h6 class="textContennt3"><img class="imgGlobe" src="{{url('/img/globe.svg')}}" alt="">
                                    Lowokwaru,Kota
                                    Malang</h6>
                            </div>
                        </div>
                    </div>


                    <div class="footCard">
                        <form style="margin-bottom: 0px !important;">
                            <button class="butLike22">+ kandidat</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        <div class="cenOther">
            <a class="otherButt" href="{{ url('/dashboard') }}">Lainnya <img class="imgOther" src="{{url('/img/otherPan.svg')}}" alt=""></a>
        </div>
    </div>
    <!-- End Content. -->



    <!-- FOOTER. -->
    <div class="footerDiv">
        <div class="row">
            <div class="col-5">
                <h3 class="ti1Foot"><b>Dkossc.</b></h3>
                <h4 class="ti2Foot">Merupakan platform berbasis website yang memiliki fitur untuk merekomendasikan rumah kost sesuai kriteria Anda.</h4>
            </div>
            <!-- <div class="col-1"></div> -->
            <div class="col-3">
                <ul>
                    <li class="linkFoot1"><img src="{{url('/img/iconFoot1.svg')}}" alt=""> +62 895337857751</li>
                    <li class="linkFoot1"><img src="{{url('/img/iconFoot2.svg')}}" alt=""> hotmail@dkossc.com</li>
                    <li class="linkFoot1"><img src="{{url('/img/iconFoot3.svg')}}" alt=""> dkossc.hq</li>
                    <li class="linkFoot1"><img src="{{url('/img/iconFoot4.svg')}}" alt=""> dkossc.co</li>
                </ul>
            </div>
            <div class="col-2"></div>
            <div class="col-1 padRIGHT0"><img class="logAsia" src="{{url('/img/asiaLog.png')}}" alt=""></div>
            <div class="col-1 padLEFT0"><img class="logAsia2" src="{{url('/img/dkosscLog.png')}}" alt=""></div>
        </div>
        <hr class="lineFoot">
        <div style="text-align: center;">
            <h6 class="ti3Foot">Copyright © 2022 MdyDev. All Rights Reserved</h6>
        </div>

    </div>
    <!-- END FOOTER. -->

    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#js-preloader').addClass('loaded');
        });
    </script>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

</body>

</html>