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
     .dropdown-content {
         display: none;
         position: absolute;
         border: 4px solid #000000;
         box-shadow: 7px 7px #000000;
         min-width: 160px;
         background-color: #FF5C5C;
         z-index: 1;
         right: 10px;
         top: 27px;
     }

     .navDD {
         text-align: center;
         background-color: #000000;
         color: #FFFF;
         margin: 0px !important;
         font-family: 'Spline Sans Mono', monospace !important;
         padding: 5px;
     }

     .dropdown-content a {
         font-family: 'Spline Sans Mono', monospace !important;
         color: #000000 !important;
         font-size: 15px;
         font-weight: 600;
         padding: 10px 15px;
         text-decoration: none;
         display: block;
         line-height: 20px;
     }

     .dropdown-content a:hover .imgPanKan {

         font-weight: 900;
         color: #000000 !important;
         font-size: 17px;
         height: 17px;
         text-decoration: none !important;


     }

     /* .dropdown-content a .imgPanKan:hover {
        height: 16px;
     } */



     .dropdown:hover .dropdown-content {
         display: block;
     }

     .dropbtn2 {
         color: #FFFF;
         font-size: 25px;
         margin-right: 20px !important;
     }

     .dropdown:hover .dropbtn2 {
         color: #FF5C5C !important;
     }

     .dropbtn {
         background-color: transparent;
         border: none;
     }

     .imgPanKan {
         height: 14px;
         line-height: 20px;
         margin-bottom: 3px;
     }
 </style>

 <nav class="navbar navbar-expand-lg fixed-top bg-blck">
     <div class="container-fluid">
         <a class="navbar-brand logTitle" href="{{ url('/') }}">
             <!-- <img class="logNav1" src="log1.png" alt=""> -->
             DKOSSC.CO
         </a>
         <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> -->
         <div class="collapse navbar-collapse" id="navbarText">
             <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                 <li class="nav-item">
                     <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> -->
                 </li>
                 <li class="nav-item">
                     <!-- <a class="nav-link" href="#">Features</a> -->
                 </li>
                 <li class="nav-item">
                     <!-- <a class="nav-link" href="#">Pricing</a> -->
                 </li>
             </ul>


             @if (Route::has('login'))
             <span class="navbar-text">
                 @auth
                 <div class="dropdown">
                     <button class="dropbtn"><i class="bi bi-person-circle dropbtn2"></i></button>
                     <div class="dropdown-content">
                         <p class="navDD">menu</p>
                         <a href="{{ url('/profile') }}"><img class="imgPanKan" src="{{url('/img/panKan.svg')}}" alt=""> Profil</a>
                         <a href="#"><img class="imgPanKan" src="{{url('/img/panKan.svg')}}" alt=""> Result</a>
                         <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><img class="imgPanKan" src="{{url('/img/panKan.svg')}}" alt=""> Logout</a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                             @csrf
                         </form>
                     </div>
                 </div>
                 <!-- <a class="refLogReg" href="{{ url('/dashboard') }}">dashboard</a> -->
                 @else
                 <a class="refLogReg" href="{{ route('login') }}">Login / Register</a>
                 <!-- @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                    @endif -->
                 @endauth
             </span>
             @endif

         </div>
     </div>
 </nav>


 <script src="vendor/jquery/jquery.min.js"></script>
 <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
 <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>