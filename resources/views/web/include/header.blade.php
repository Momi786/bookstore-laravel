<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Book Store</title>
      <!-- style file -->
      <link href="{{URL::to('public/assests/css/style.css')}}" rel="stylesheet">
      <!-- bootstrap cdn -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
      <!-- fontawesome -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
      <!-- owl carousel -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
   </head>
   <body>
      <div class="wrapper">
      <div class="container">
         <header class="bg-white">
            <div class="row bd-bottom">
               <div class="col-md-12 col-sm-12 col-lg-12">
                  <nav class="navbar navbar-expand-lg bg-white">
                     <div class="row">
                        <div class="w10">
                           <a class="navbar-brand" href="#"><img src="{{URL::to('public/assests/img/logo.png')}}" class="img-fluid" alt="logo" class="img-fluid" style="width: 100px;"></a>
                        </div>
                        <div class="w20">
                           <div class="input-group ml5">
                              <div class="input-group-prepend" id="inputGroupSelect03">
                              <i class="fas fa-bars p-11"></i>
                              <div class="dropdown">
                              <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 Menus
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                 <a class="dropdown-item" href="#">Action</a>
                                 <a class="dropdown-item" href="#">Another action</a>
                                 <a class="dropdown-item" href="#">Something else here</a>
                              </div>
                              </div>
                              </div>
                              <div class="width-input">
                                 <input type="search" class="form-control form-control-height" id="inputGroupFile03">
                              </div>
                              <div>
                                 <div class="input-group-append bordr">
                                    <i class="fas fa-search form-control-height"></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="w30">
                            <div class="d-flex">
                                @if(Session::has('onlineClient'))
                                    <a href="{{URL::to('/logout')}}" class="btn btn-ligh mr-3">Logout</a>
                                @else
                                    <a href="{{URL::to('/login')}}" class="btn btn-ligh mr-3">Login</a>
                                @endif

                            </div>
                        </div>
                     </div>
                  </nav>
               </div>
            </div>
         </header>
      </div>


