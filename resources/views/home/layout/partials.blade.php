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

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>

          </div>
     </section>


     <!-- HEADER -->



     <!-- MENU -->
     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->

                    <img style="margin-left: 2em;" src="{{asset('images/logo.png')}}" alt="" width="60" height="54">
                    <img style="margin-left: 1em;  " src="{{asset('images/20301.png')}}" alt="" width="60" height="54">
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="{{route('home')}}" class="smoothScroll">Home</a></li>
                         <li><a href="#google-map" class="smoothScroll">Contact</a></li>
                         @guest
                         <li class="appointment-btn"><a href="#appointment">Sign Up</a></li>
                         <li><a href="{{route('login')}}" class="smoothScroll">Log In</a></li>
                         @endguest

                    </ul>
               </div>

          </div>
     </section>

     @yield('content')

      <!-- FOOTER -->
      <footer id="google-map" data-stellar-background-ratio="5">
        <div class="container">
             <div class="row">

                  <div class="col-md-4 col-sm-4">
                       <div class="footer-thumb">
                            <h4 class="wow fadeInUp" data-wow-delay="0.4s">Contact Info</h4>
                            <br>
                            <p>To inquire about the dates of the visit, or the conditions of escorts and visitors! Call us on this number or contact us via the official hospital email.</p>

                            <div class="contact-info">
                                 <p><i class="fa fa-phone"></i> 016-236-2222</p>
                                 <p><i class="fa fa-envelope-o"></i> <a href="#">info@KingSalman.com</a></p>
                            </div>
                       </div>
                  </div>

                  <div class="col-md-4 col-sm-4">
                       <div class="footer-thumb">
                            <div class="opening-hours">
                                 <h4 class="wow fadeInUp" data-wow-delay="0.4s">Visiting Times</h4>
                                 <br>
                                 <p>Saturday - Thursday <span>03:00 PM - 08:00 PM</span></p>
                                 <p>Friday <span>10:00 AM - 08:00 PM</span></p>

                            </div>

                            <ul class="social-icon">
                                 <li><a href="https://twitter.com/kssh_hail1?lang=ar" class="fa fa-twitter"></a></li>
                            </ul>
                       </div>
                  </div>

                  <div class="col-md-12 col-sm-12 border-top">
                       <div class="col-md-4 col-sm-6">
                            <div class="copyright-text">
                                 <p>Copyright &copy; 2022 King Salman Specialist Hospital

                                 </p>
                            </div>
                       </div>

                       <div class="col-md-2 col-sm-2 text-align-center">
                            <div class="angle-up-btn">
                                <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
                            </div>
                       </div>
                  </div>

             </div>
        </div>
   </footer>

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
