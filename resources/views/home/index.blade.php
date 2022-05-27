
     @extends('home.layout.partials')
     @section('content')

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




     <!-- MAKE AN ACCOUNT -->
     <section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <img src="images/1.png" class="img-responsive" alt="">
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <form id="appointment-form" role="form" method="post" action="{{route('register')}}">
                              @csrf
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2>Make an account</h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" value="{{old('name')}}">
                                        @error('name')
                                        <p class="invalid-feedback d-block text-danger"> {{$message}}</p>
                                        @enderror
                                    </div>
                                   <div class="col-md-6 col-sm-6">
                                        <label for="id">Identification Number</label>
                                        <input type="id" class="form-control" id="id" name="identification_number" value="{{old('identification_number')}}" placeholder="Your Identification Number">
                                        @error('identification_number')
                                        <p class="invalid-feedback d-block text-danger"> {{$message}}</p>
                                        @enderror
                                    </div>
                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" value="{{old('email')}}">
                                        @error('email')
                                        <p class="invalid-feedback d-block text-danger"> {{$message}}</p>
                                        @enderror
                                    </div>
                                   <div class="col-md-6 col-sm-6">
                                        <label for="Password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Your Password" value="{{old('password')}}">
                                        @error('password')
                                        <p class="invalid-feedback d-block text-danger"> {{$message}}</p>
                                        @enderror
                                    </div>
                                          <div class="col-md-6 col-sm-6">
                                        <label for="select">Select</label>
                                        <select class="form-control" name="type" >
                                             <option value="director">Alternate Director</option>
                                             <option value="security">Security Man</option>
                                        </select>
                                        @error('type')
                                        <p class="invalid-feedback d-block text-danger"> {{$message}}</p>
                                        @enderror
                                   </div>

                                   <div class="col-md-12 col-sm-12">
                                        <label for="telephone">Phone Number</label>
                                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone" value="{{old('phone')}}">
                                        @error('phone')
                                        <p class="invalid-feedback d-block text-danger"> {{$message}}</p>
                                        @enderror
                                        <button type="submit" class="form-control" id="cf-submit" name="submit">Sign Up</button>
                                   </div>
                              </div>
                        </form>
                    </div>

               </div>
          </div>
     </section>


<br>
<br>

@endsection
