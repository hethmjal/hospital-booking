<!DOCTYPE html>
<html lang="en">
<head>

     <title>Visitors' guide</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
     <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
     <link rel="stylesheet" href="{{asset('css/animate.css')}}">
     <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
     <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="{{asset('css/tooplate-style.css')}}">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>

          </div>
     </section>

     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>


                    <img style="margin-left: 2em;" src="{{asset('images/logo.png')}}" alt="" width="60" height="54">
                    <img style="margin-left: 1em;  " src="{{asset('images/20301.png')}}" alt="" width="60" height="54">
               </div>


               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="{{route('home')}}" class="smoothScroll">Home</a></li>
                         @guest
                         <li><a href="{{route('login')}}" class="smoothScroll">Security Man</a></li>
                         <li class="appointment-btn"><a href="{{route('login')}}">Alternate Director</a></li>
                         @endguest
                        @auth
                        <li><a href="{{route('viewvisitors')}}" class="smoothScroll">Security Man</a></li>
                        <li class="appointment-btn"><a href="{{route('createvisitors')}}">Alternate Director</a></li>
                        @endauth

                    </ul>
               </div>

          </div>
     </section>

     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                         <div class="owl-carousel owl-theme">
                              <div class="item item-first">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>A site for visitors and companions of patients</h3>
                                             <h1>Patient Visitors Guide</h1>
                                             <a href="index.html" class="section-btn btn btn-default smoothScroll">Browse</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="item item-second">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>The official website of King Salman Specialist Hospital</h3>
                                             <h1>Official Hospital Website</h1>
                                             <a href="#" class="section-btn btn btn-default btn-gray smoothScroll">Go</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="item item-third">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>E-Health official website</h3>
                                             <h1>E-Health</h1>
                                             <a href="#news" class="section-btn btn btn-default btn-blue smoothScroll">Go</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

               </div>
          </div>
     </section>


 <!-- SCRIPTS -->
 <script src="{{asset('js/jquery.js')}}"></script>
 <script src="{{asset('js/bootstrap.min.js')}}"></script>
 <script src="{{asset('js/jquery.sticky.js')}}"></script>
 <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
 <script src="{{asset('js/wow.min.js')}}"></script>
 <script src="{{asset('js/smoothscroll.js')}}"></script>
 <script src="{{asset('js/owl.carousel.min.js')}}"></script>
 <script src="{{asset('js/custom.js')}}"></script>

</body>
</html>
