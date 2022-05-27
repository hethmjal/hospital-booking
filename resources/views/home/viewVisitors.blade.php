<!DOCTYPE html>
<html lang="en">
<head>

     <title>Visitors' guide</title>

     <meta charset="UTF-8">

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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

     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>



                    <img style="margin-left: 2em;" src="images/logo.png" alt="" width="60" height="54">
                    <img style="margin-left: 1em;  " src="images/20301.png" alt="" width="60" height="54">
               </div>



               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="{{route('home')}}" lass="smoothScroll">{{Auth::user()->name}}</a></li>
                         <li class="appointment-btn "><a href="{{route('logout')}}">Log Out</a></li>
                    </ul>
               </div>

          </div>
     </section>

     <p style="background-image: url('images/slider2.jpg');">
     <div class="container">
       <h2 class="text-info">Data table of patients' visitors and escorts</h2>
       <p style= "color: #808080;">Type something in the input field to search the table for first names, ld Number or Department:</p>
       <input style="border-color: #17a2b8; " class="form-control" id="myInput" type="text" placeholder="Search..">
       <br>
     <br>
     <br>
     <br>
     <table style="width:50%;" align="center" class="table table-bordered table-striped">
       <thead>
         <tr style="white-space: nowrap; padding: 0 5px 0 0; color:#3A5572; font-weight: bold;">
           <th scope="col">#</th>
           <th scope="col">Id Number</th>
           <th scope="col">Name</th>
           <th scope="col">Type of visit</th>
           <th scope="col">Patient name</th>
           <th scope="col">Department</th>
           <th scope="col">date</th>
           <th scope="col">end date</th>

           <th scope="col">Duration</th>
         </tr>
       </thead>
       <tbody id="myTable" style="white-space: nowrap; padding: 0 5px 0 0; color:#3A5572; font-weight: bold;">
        @foreach ($visitors as $v)
        <tr display="" class="text @if ($v->status == "finished")
            text-danger
        @endif">
           <th scope="row">{{ $loop->index+1 }}</th>
           <td type="patient_id">{{ $v->patient_id }}</td>
           <td type="name">{{ $v->name }}</td>
           <td list="typee" type="type">{{ $v->type }}</td>
           <td type="patient_name">{{ $v->patient_name }}</td>
           <td list="dep" type="department">{{ $v->department }}</td>
           <td list="date" type="date">{{ $v->date }}</td>
           <td list="date" type="date">{{ $v->seconed_date }}</td>

           <td>From {{$v->start_date}} to {{$v->end_date}} </td>
         </tr>
         @endforeach

       </tbody>
     </table>
     {{ $visitors->links() }}

     <button  style="float: right; margin:20px;" class="btn btn-info" onclick="printFunction()">Print</button>​
     <br>

     <script>
       function printFunction() {
         window.print();
       }
     </script>
     <script>
     $(document).ready(function(){
       $("#myInput").on("keyup", function() {
         var value = $(this).val().toLowerCase();
         $("#myTable tr").filter(function() {
           $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
         });
       });
     });
     </script>
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
