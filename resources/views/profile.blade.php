<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>

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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="{{url('/css/main.css')}}">

    <style>
        .profil {
            /* background-image: url("assets/img/bgPro.svg"); */
            /* background-position: 100% 0%;
            background-repeat: no-repeat; */
            background-color: #000000 !important;

            position: relative;
            /* height: 91.9vh; */
            margin-top: 54px;
            padding: 50px;


            background-image: url(img/bigGlobe.svg);
        }

        .imgUtam2 {
            width: 132px !important;
            height: 132px !important;
            object-fit: cover;
            border-radius: 50%;
        }


        .frameImgPro2 {
            background-color: #FF90FF;
            padding: 7px;
            width: 160px;
            height: 160px;
            border: 7px solid #FFFF50;
            border-radius: 50%;
        }

        .mt-101 {
            padding: 50px;
        }

        .cardPro {
            border: 4px solid #000000;
            box-shadow: 7px 7px #000000;
            /* margin-right: 250px; */
            background-color: #FF5C5C;
        }

        .cardCand {
            border: 4px solid #000000;
            box-shadow: 7px 7px #000000;
            /* margin-right: 250px; */
            background-color: #FF90FF;
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

        .mar30 {
            margin: 20px 0px !important;
        }

        .namePro {
            font-family: 'Spline Sans Mono', monospace !important;
            color: #000000;
            padding: 0px !important;
            font-size: 22px;
            font-weight: 800;
            margin-left: 20px;
            margin-bottom: 10px;
        }

        .emailPro {
            font-family: 'Spline Sans Mono', monospace !important;
            color: #000000;
            padding: 0px !important;
            font-size: 18px;
            font-weight: 400;
            margin-left: 20px;
            margin-bottom: 10px;
        }

        .resultRec {
            background-image: url(img/bgCons.gif);
            height: 100vh;
            padding-top: 70px;
        }

        .resultRec2 {
            background-image: url(img/bgCons.gif);

            padding-top: 70px;
        }

        .cardRec {
            border: 4px solid #000000;
            box-shadow: 7px 7px #000000;
            background-color: #7FFF5B;
        }

        .resultListRec {
            padding: 40px !important;
        }

        .imgRec {
            width: 100px !important;
            height: 100px !important;
            object-fit: cover;
        }

        .frameImgRec {
            background-color: #FF90FF;
            padding: 15px;
            width: 160px;
            height: 160px;
            border: 15px solid #4D7BFF;
        }

        .frameImgRec2 {
            background-color: #FF5C5C;
            padding: 15px;
            width: 160px;
            height: 160px;
            border: 15px solid #FFFF50;
        }

        .linkRec {
            text-decoration: none !important;
        }

        .nomRec {
            font-family: 'Spline Sans Mono', monospace !important;
            color: #000000;
            padding: 0px !important;
            font-size: 30px;
            font-weight: 800;
            margin-bottom: 0px;
        }

        .textContennt4 {
            font-family: 'Spline Sans Mono', monospace;
            font-size: 15px;
            font-weight: 800;
            color: #000000;
            font-weight: 20px;
            margin-bottom: 0px;
        }

        .textContennt5 {
            font-family: 'Spline Sans Mono', monospace;
            font-size: 13px;
            font-weight: 400;
            color: #000000;
            font-weight: 20px;
            margin-bottom: 0px
        }

        .textContennt6 {
            font-family: 'Spline Sans Mono', monospace;
            font-size: 11px;
            font-weight: 700;
            color: #000000;
            font-weight: 15px;
            margin-bottom: 0px
        }

        .imgGlobe2 {
            width: 8%;
        }

        .butDelCan {
            border: none !important;
            background-color: transparent;
            margin: 0px;
            padding: 0px;
        }

        .FavButton2 {
            font-size: 30px;
        }

        .FavButton2:hover {
            color: #FF5C5C;
        }

        .formDelCan {

            margin: 130px 0px 0px 30px !important;
        }

        .imgKanBus {
            width: 120%;
        }

        .noticeCan {
            padding: 40px;
        }

        .linkDash {
            text-decoration: none !important;
            border: 2px solid #000000;
            padding: 5px 10px;

            border-radius: 50px;
            color: #000000;

            font-family: 'Spline Sans Mono', monospace !important;
            font-size: 14px;
            font-weight: 600;

        }

        .linkDash:hover {
            background-color: #000000;
            color: #FF90FF;

        }

        .linkDash2 {
            text-decoration: none !important;
            border: 2px solid #000000;
            padding: 5px 10px;

            border-radius: 50px;
            color: #000000;

            font-family: 'Spline Sans Mono', monospace !important;
            font-size: 14px;
            font-weight: 600;

        }

        .linkDash2:hover {
            background-color: #000000;
            color: #7FFF5B;

        }

        .judulNote {
            font-family: 'Spline Sans Mono', monospace !important;
            color: #000000;
            padding: 0px !important;
            font-size: 32px;
            font-weight: 800;
            text-align: center;
            margin-bottom: 20px;
        }
    </style>

</head>

<body>
    @extends('layouts.navbar')



    <div class="profil">
        <div class="">
            <div class="row">
                <div class="col-5">
                    <div class="cardPro">
                        <div class="subNavCardPro">
                            <div class="row align-items-center">
                                <div class="col-4"><img class="imgNavCard4" src="{{url('/img/o3.svg')}}" alt=""></div>
                                <div class="col-4">
                                    <h6 class="textNavCard">Profil</h6>
                                </div>
                                <div class="col-4 d-flex justify-content-end"><img class="imgNavCard5" src="{{url('/img/navPro.svg')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center mar30">
                            <div class="col-4" style="text-align: -webkit-center;">
                                <div class="frameImgPro2"><img class="imgUtam2" src="{{url('/img/tikus.jpg')}}" alt=""></div>
                            </div>
                            <div class="col-7">
                                <h3 class="namePro">{{ $user->name }}</h3>
                                <h4 class="emailPro">{{ $user->email }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-7">
                    @if (Auth::user()->candidate->count() )
                    @foreach ($candidates as $candidate)
                    <div class="cardCand">
                        <div class="subNavCardPro">
                            <div class="row align-items-center">
                                <div class="col-4"><img class="imgNavCard4" src="{{url('/img/o3.svg')}}" alt=""></div>
                                <div class="col-4">
                                    <h6 class="textNavCard">Saved candidate</h6>
                                </div>
                                <div class="col-4 d-flex justify-content-end"><img class="imgNavCard5" src="{{url('/img/candi.svg')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center mar30">
                            <div class="col-4" style="text-align: -webkit-center;">
                                <div class="frameImgRec2"><img class="imgRec" src="{{$candidate->kost->foto}}" alt=""></div>
                            </div>
                            <div class="col-6">
                                <h2 class="textContennt4">{{$candidate->kost->nama}}</h2>
                                <h4 class="textContennt5 mt-1">{{($candidate->kost->jenis == 1)?'PUTRA':(($candidate->kost->jenis == 2)?'PUTRI':'CAMPUR')}}</h4>
                                <h4 class="textContennt4 mt-1">@currency ($candidate->kost->real_harga).000 / Bulan</h4>

                                <p class="textContennt5 mt-3"># {{($candidate->kost->mandi == 0) ? 'Kamar mandi dalam' : 'Kamar mandi luar'}}</p>
                                <p class="textContennt5"># {{($candidate->kost->listrik == 0) ? 'Termasuk listrik' : 'Tidak termasuk listrik'}}</p>
                                <p class="textContennt5"># {{($candidate->kost->wifi == 0) ? 'Termasuk wifi' : 'Tidak termasuk wifi'}}</p>
                                <!-- <p class="textContennt5"># {{ $candidate->kost->id }}</p> -->


                                <div class="d-flex justify-content-start mt-3">
                                    <h6 class="textContennt6"><img class="imgGlobe2" src="{{url('/img/globe.svg')}}" alt="">
                                        <!-- {{$candidate->kost->kecamatan}} -->
                                        {{($candidate->kost->kecamatan == 1)?'Lowokwaru':(($candidate->kost->kecamatan == 2)?'Blimbing':(($candidate->kost->kecamatan == 3)?'Klojen':(($candidate->kost->kecamatan == 4)?'Sukun':'Kedungkandang')))}}, Kota Malang

                                    </h6>
                                </div>
                            </div>
                            <div class="col-2">
                                <form class="formDelCan" method="POST" id="delete-form" action="{{route('candidate.destroy', [$candidate->id])}}">
                                    {{csrf_field()}}
                                    <input type="hidden" name="_method" value="DELETE">
                                   
                                    <button type="submit" class="butDelCan"><i class="bi bi-trash3-fill FavButton2"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                    @if (empty($candidate->id))


                    <div class="col-12">
                        <div class="cardCand">
                            <div class="subNavCardPro">
                                <div class="row align-items-center">
                                    <div class="col-4"><img class="imgNavCard4" src="{{url('/img/o3.svg')}}" alt=""></div>
                                    <div class="col-4">
                                        <h6 class="textNavCard">Saved candidate</h6>
                                    </div>
                                    <div class="col-4 d-flex justify-content-end"><img class="imgNavCard5" src="{{url('/img/candi.svg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="noticeCan">
                                <h1 class="judulNote">Kandidat belum terpilih</h1>
                                <div class="d-flex justify-content-center">
                                    <a class="linkDash " href="{{ url('/dashboard') }}">pilih kandidat kos</a>
                                </div>

                            </div>
                        </div>
                        <!-- <img src="{{url('/img/quote3.svg')}}" alt=""> -->
                    </div>




                    @endif
                    <!-- <img src="{{url('/img/quote3.svg')}}" alt=""> -->
                </div>
            </div>


        </div>
    </div>

    @if(!empty($recommendation))

    <div class="resultRec">
        <div class="container">
            <div class="cardRec">
                <div class="subNavCardPro">
                    <div class="row align-items-center">
                        <div class="col-4"><img class="imgNavCard4" src="{{url('/img/o3.svg')}}" alt=""></div>
                        <div class="col-4">
                            <h6 class="textNavCard">Recommendation result</h6>
                        </div>
                        <div class="col-4 d-flex justify-content-end"><img class="imgNavCard5" src="{{url('/img/navRec.svg')}}" alt="">
                        </div>
                    </div>
                </div>

                <div class="resultListRec">
                    <div class="row">
                        @foreach($recommendation as $recommendation)
                        <div class="col-6 mb-5">
                            <div class="linkRec" href="">
                                <div class="row align-items-center">
                                    <div class="col-1" style="text-align: -webkit-center;">
                                        <img class="imgKanBus" src="{{url('/img/kanBus.svg')}}" alt="">
                                    </div>
                                    <div class="col-4" style="text-align: -webkit-center;">
                                        <div class="frameImgRec"><img class="imgRec" src="{{$recommendation->foto}}" alt=""></div>
                                    </div>
                                    <div class="col-7">
                                        <h2 class="textContennt4">{{$recommendation->nama}}</h2>
                                        <h4 class="textContennt5 mt-1">{{($recommendation->jenis == 1)?'PUTRA':(($recommendation->jenis == 2)?'PUTRI':'CAMPUR')}}</h4>
                                        <h4 class="textContennt4 mt-1">@currency ($recommendation->real_harga).000 / Bulan</h4>

                                        <p class="textContennt5 mt-3"># {{($recommendation->mandi == 0) ? 'Kamar mandi dalam' : 'Kamar mandi luar'}}</p>
                                        <p class="textContennt5"># {{($recommendation->listrik == 0) ? 'Termasuk listrik' : 'Tidak termasuk listrik'}}</p>
                                        <p class="textContennt5"># {{($recommendation->wifi == 0) ? 'Termasuk wifi' : 'Tidak termasuk wifi'}}</p>
                                        <!-- <p class="textContennt5"># {{ $recommendation->id }}</p> -->

                                        <div class="d-flex justify-content-end mt-3">
                                            <h6 class="textContennt6"><img class="imgGlobe2" src="{{url('/img/globe.svg')}}" alt="">
                                                {{($recommendation->kecamatan == 1)?'Lowokwaru':(($recommendation->kecamatan == 2)?'Blimbing':(($recommendation->kecamatan == 3)?'Klojen':(($recommendation->kecamatan == 4)?'Sukun':'Kedungkandang')))}}, Kota Malang
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="resultRec2">
        <div class="container">
            <div class="cardRec">
                <div class="subNavCardPro">
                    <div class="row align-items-center">
                        <div class="col-4"><img class="imgNavCard4" src="{{url('/img/o3.svg')}}" alt=""></div>
                        <div class="col-4">
                            <h6 class="textNavCard">Recommendation result</h6>
                        </div>
                        <div class="col-4 d-flex justify-content-end"><img class="imgNavCard5" src="{{url('/img/navRec.svg')}}" alt="">
                        </div>

                    </div>
                </div>

                <div class="resultListRec">
                    <div class="noticeCan">
                        <h1 class="judulNote">Kandidat belum terpilih</h1>
                        <div class="d-flex justify-content-center">
                            <a class="linkDash2" href="{{ url('/dashboard') }}">pilih kandidat kos</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @endif


    @extends('layouts.footer')

    @if(Session::has('hapus'))
    <script>
        Swal.fire({
            title: 'Kandidat berhasil dihapus',
            icon: 'success',
            timerProgressBar: true,
            timer: 2000,
            showConfirmButton: false,
            text: 'menutup jendela ...',
        })
    </script>
    @endif


</body>

</html>