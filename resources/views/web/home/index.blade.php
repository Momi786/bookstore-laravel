@include ('web/include/header')
<!-- content body -->
<!-- slider section -->
<div class="container mt-4">
<section class="">
   <div class="row">
      <div class="col-sm-12 col-md-9">
         <div class="owl-carousel owl-theme owl4 ">
            <?php
               for ($i = 0; $i < 3; $i++):
               ?>
            <div class="bg-back">
               <div class="urlImage">
                  <div class="row">
                     <div class="col-md-6">
                     <div style="padding: 61px 0 0 26px;">
                     <h5>Back To School</h5>
                     <h1 class="text-black">Specail 50% OFF</h1>
                     <h4 class="text-black">For Our Student Community</h4>
                     <p class="text-black pt-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet corrupti, maiores fugit facilis placeat saepe illum non voluptas mollitia.</p>
                     <div class="d-flex">
                         <button class="btn btn-ligh1 mr-3">Get The Deal <i class="fas fa-long-arrow-alt-right ml-3"></i></button>
                         <button class="btn btn-ligh1">See Other Promos</button>

                     </div>
                  </div>

                     </div>
                  </div>

                  </div>
            </div>
            <?php endfor;?>
         </div>
      </div>
      <div class="col-sm-12 col-md-3">
         <div class="mini-slide">
            <div class="best-seller">
               <h3>Best Seller</h3>
               <p>Based Sales this Week</p>
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <img class="d-block " src="{{URL::to('public/assests/img/book.jpg')}}" alt="First slide">
                  </div>
                  <div class="carousel-item">
                     <img class="d-block" src="{{URL::to('public/assests/img/book.jpg')}}" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                     <img class="d-block" src="{{URL::to('public/assests/img/book.jpg')}}" alt="Third slide">
                  </div>
               </div>
               <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
               </a>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- delievery Section -->
<section class="mt-5">
   <div class="row">
      <div class="col-md-3 col-sm-12">
         <div class="media">
            <i class="fas fa-bolt i-color"></i>
            <div class="media-body">
               <p class="mb-0 text-color">
                  <strong>Display Name</strong>
               </p>
               <p class="p-color">Lorem ipsum dolor sit amet, consectetur sit amet.</p>
            </div>
         </div>
      </div>
      <div class="col-md-3 col-sm-12">
         <div class="media">
            <i class="fas fa-shield-alt i-color"></i>
            <div class="media-body">
               <p class="mb-0 text-color">
                  <strong>Display Name</strong>
               </p>
               <p class="p-color">Lorem ipsum dolor sit amet, consectetur sit amet.</p>
            </div>
         </div>
      </div>
      <div class="col-md-3 col-sm-12">
         <div class="media">
            <i class="fas fa-thumbs-up i-color"></i>
            <div class="media-body">
               <p class="mb-0 text-color">
                  <strong>Display Name</strong>
               </p>
               <p class="p-color">Lorem ipsum dolor sit amet, consectetur sit amet.</p>
            </div>
         </div>
      </div>
      <div class="col-md-3 col-sm-12">
         <div class="media">
            <i class="fas fa-star i-color"></i>
            <div class="media-body">
               <p class="mb-0 text-color">
                  <strong>Display Name</strong>
               </p>
               <p class="p-color">Lorem ipsum dolor sit amet, consectetur sit amet.</p>
            </div>
         </div>
      </div>
   </div>
</section>



<!-- recomended Section -->
      <section class="mt-5">
         <div class="row">
            <div class="col-md-6">
               <div class="bg-pink p-4">
                  <h4>Recommded For You</h4>
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero ab architecto omnis. Esse laborum libero magnam corrupti </p>
                  <div class="owl-carousel owl-theme owl5">
            <?php
               for ($i = 0; $i < 10; $i++):
               ?>
            <div class="item m-3">
               <div class="card5">
                  <img class="card-img-top" src="{{URL::to('public/assests/img/book.jpg')}}" alt="Card image cap">

               </div>
            </div>
            <?php endfor;?>
         </div>

               </div>
            </div>
            <div class="col-md-6">
               <div class="bg-blue p-4">
                  <h4>Recommded For You</h4>
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero ab architecto omnis. Esse laborum libero magnam corrupti </p>
                  <div class="owl-carousel owl-theme owl5">
            <?php
               for ($i = 0; $i < 10; $i++):
               ?>
            <div class="item m-3">
               <div class="card5">
                  <img class="card-img-top" src="{{URL::to('public/assests/img/book.jpg')}}" alt="Card image cap">

               </div>
            </div>
            <?php endfor;?>
         </div>

               </div>
            </div>
         </div>
      </section>
<!-- offer section -->
<section class=" mt-5">
   <div class="row">
      <div class="col-md-12 col-md-12 text-center">
         <h2 class="text-color">Special Offers</h2>
         <p>Lorem ipsum dolor sit amet, consectetur sit ametLorem ipsum dolor<br> sit amet, Lorem ipsum dolor sit amet, consectetur </p>
         <div class="owl-carousel owl-theme owl1">
            <?php
               for ($i = 0; $i < 10; $i++):
               ?>
            <div class="item m-3">
               <div class="card">
                  <img class="card-img-top" src="{{URL::to('public/assests/img/book.jpg')}}" alt="Card image cap">
                  <div class="card-body">
                     <h5 class="card-title text-color" style="text-align: initial;">SECONDS</h5>
                     <div class="text-left mb-3">
                        <span class="badge badge-purple">Biography</span>
                        <span class="badge badge-purple">THTILLER</span>
                        <span class="badge badge-purple">HORROR</span>
                     </div>
                     <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                     <h6 style="text-align: initial;">David Here</h6>
                     <div class="d-flex justify-content-between">
                        <button class="btn btn-purple "><i class="fas fa-cart-plus mr-3 "></i>Add to Cart</button>
                        <div class="d-flex">
                           <span class="mr-2 font-weight-bolder">
                              <h5>$20</h5>
                           </span>
                           <span class="text-dull"><s>$20</s></span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <?php endfor;?>
         </div>
      </div>
   </div>
</section>
<!-- timer section -->
<section class=" mt-5">
   <div class="row">
   <div class="col-md-12 text-center">
      <h2 class="text-color">
         Flash Sale
      </h2>
      <p>Lorem ipsum dolor sit amet, consectetur sit ametLorem ipsum dolor<br> sit amet, Lorem ipsum dolor sit amet, consectetur </p>
      <div id="countdown">
         <ul class="mb-0">
            <li>
               <span id="days"></span>
               <p>days</p>
            </li>
            <li>
               <span id="hours"></span>
               <p>Hours</p>
            </li>
            <li>
               <span id="minutes"></span>
               <p>Minutes</p>
            </li>
            <li>
               <span id="seconds"></span>
               <p>Seconds</p>
            </li>
         </ul>
      </div>
      <div class="owl-carousel owl-theme owl2 mt-3">
         <?php
            for ($i = 0; $i < 10; $i++):
            ?>
         <div class="item m-3">
            <div class="">
               <img class="card-img-top" src="{{URL::to('public/assests/img/book.jpg')}}" alt="Card image cap">
               <div class="card-body border-0">
                  <h5 class="card-title text-color mb-0" >SECONDS</h5>
                  <p class="text-blue">David Here</p>
                  <div class="d-flex justify-content-center">
                     <span class="mr-2 text-blue">
                        <h5>$20</h5>
                     </span>
                     <span class="text-dull"><s>$20</s></span>
                  </div>
               </div>
            </div>
         </div>
         <?php endfor;?>
      </div>
   </div>
</section>
<!-- book on sale offer -->
<section class="mt-5">
   <div class="row">
      <div class="col-md-12">
         <h2 class="text-title">Book On Sale</h2>
         <div class="owl-carousel owl-theme owl3 mt-3">
            <?php
               for ($i = 0; $i < 10; $i++):
               ?>
            <div class="m-2">
               <div class="">
                  <figure class="figure tag tag-featured mb-0">
                     <img src="{{URL::to('public/assests/img/book.jpg')}}" alt="featured image" class="figure-img">
                  </figure>
                  <div class="card-body border-0 p-0">
                     <h6 class="card-title text-color mb-0" style="text-align: initial;">The Misadventure of.</h6>
                     <p class="text-blue" style="text-align: initial; font-size:13px;">Adventural,Survival</p>
                     <div class="d-flex justify-content-between">
                        <span class="star-color"><i class="fas fa-star mr-1"></i>4.7</span>
                        <div class="d-flex">
                           <span class="mr-2 text-dark">$20</span>
                           <span class="text-dull"><s>$20</s></span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <?php endfor;?>
         </div>
      </div>
   </div>
</section>
<!-- featured Background -->
<section class="mt-5 featured-back">
   <div class="row">
      <div class="col-md-12">
         <div class="row pt-3 pb-3">
            <div class="col-md-6">
               <div class="p-100">
                  <h5>Featured Books</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur sit ametLorem ipsum dolor<br> sit amet, Lorem ipsum dolor sit amet, consectetur </p>
               </div>
               <div class="box-white">
                  <div class="row">
                     <div class="col-md-5">
                  <img src="{{URL::to('public/assests/img/book.jpg')}}" class="imh-fluid m-3" alt="" style="width: 204px; height: 291px;border-radius:13px;">

                  </div>
                     <div class="col-md-7">
                     <div class="media p-2">
                        <i class="far fa-bookmark i-color1 mr-2 bg-none"></i>
                        <div class="media-body">
                           <p class="mb-0 text-color">
                              <strong>Battle Drive</strong>
                           </p>
                           <p class="p-color">Lorem ipsum.</p>
                        </div>
                     </div>
                     <div class="card4">

                  <div class="card-body border-0">
                     <h5 class="card-title text-color" style="text-align: initial;">SECONDS</h5>

                     <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                     <h6 style="text-align: initial;">David Here</h6>
                     <div class="d-flex justify-content-between">
                        <button class="btn btn-purple "><i class="fas fa-cart-plus mr-3 "></i>Add to Cart</button>
                        <div class="d-flex">
                           <span class="mr-2 font-weight-bolder">
                              <h5>$20</h5>
                           </span>
                           <span class="text-dull"><s>$20</s></span>
                        </div>
                     </div>
                  </div>
               </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-6">
               <div class="row p-3">
                  <?php
                     for ($i = 0; $i < 6; $i++):
                     ?>
                  <div class="col-md-4 col-sm-6 col-6">
                     <img src="{{URL::to('public/assests/img/book.jpg')}}" class="imh-fluid p-2" alt="" style="width: 130px; height: 225px;border-radius:13px">
                  </div>
                  <?php endfor;?>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- testimonial Section -->
<section>
   <div class="testimonials-clean">
      <div class="">
         <div class="intro">
            <h2 class="text-center">Testimonials </h2>
            <p class="text-center">Our customers love us! Read what they have to say below. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae.</p>
         </div>
         <div class="row people">
            <div class="owl-carousel owl-theme owl6">
         <?php
                     for ($i = 0; $i < 6; $i++):
                     ?>
            <div class="item">

               <div class="box">
                  <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
               </div>
               <div class="author">
                  <img class="rounded-circle" src="https://i.imgur.com/nUNhspp.jpg">
                  <h5 class="name">Ben Johnson</h5>
                  <p class="title">CEO of Company Inc.</p>
               </div>
               <div style="position:absolute;bottom: 74px;right: 20px; color:khaki">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
               </div>

            </div>
            <?php endfor;?>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- news section -->
<section class="mt-5">
   <div class="row">
      <div class="col-md-12">
         <h2>Latest News</h2>
         <div class="d-flex justify-content-between mt-3 latest-news">
            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur sit ametLorem ipsum dolor<br> sit amet, Lorem ipsum dolor sit amet, consectetur </p>
            <p align="right">
               <button class="btn btn-purple1">View More<i class="fas fa-long-arrow-alt-right ml-4"></i></button>
            </p>
         </div>
      </div>
      <?php
         for ($i = 0; $i < 4; $i++):
         ?>
      <div class="col-md-3 mt-5">
         <div class="card1">
            <img class="card-img-top" src="{{URL::to('public/assests/img/book.jpg')}}" alt="Card image cap">
            <div class="card-body1 mt-4">
               <h5 class="card-title text-color" style="text-align: initial;font-size: 13px;
                  font-weight: 700;">Why Reading IS Important For Our Children?</h5>
               <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
               <div class="media">
                  <img class="rounded-circle" src="https://i.imgur.com/At1IG6H.png">
                  <div class="media-body">
                     <p class="mb-0 text-color">
                        <strong>Author</strong>
                     </p>
                     <p class="p-color">@ Days Ago</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php endfor;?>
   </div>
</section>
<!-- happy customeer section -->
<section class="mt-5">
   <div id="projectFacts" class="sectionClass">
      <div class="fullWidth eight columns">
         <div class="projectFactsWrap ">
            <div class="item wow fadeInUpBig animated animated" data-number="12" style="visibility: visible;">
               <i class="fas fa-users mb-5"></i>
               <p id="number1" class="number">12</p>
               <h3>Happy Customers</h3>
            </div>
            <div class="item wow fadeInUpBig animated animated" data-number="55" style="visibility: visible;">
               <i class="fas fa-book mb-5"></i>
               <p id="number2" class="number">55</p>
               <h3>Books Collection</h3>
            </div>
            <div class="item wow fadeInUpBig animated animated" data-number="359" style="visibility: visible;">
               <i class="fas fa-store mb-5"></i>
               <p id="number3" class="number">359</p>
               <h3>Our Store</h3>
            </div>
            <div class="item wow fadeInUpBig animated animated" data-number="246" style="visibility: visible;">
               <i class="fas fa-feather-alt mb-5"></i>
               <p id="number4" class="number">246</p>
               <h3>Famous Writers</h3>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- newsletter section -->
<section class="mt-5 bg-purple">
   <div class="">

   <div class="text-center">
      <div class="pt-70">
         <h5 class="f-27 mb-4">
            Subscribe To Our Newsletter For Newest Books Updates
         </h5>
         <div class="input-group input-control justify-content-center subcribeLater">
            <input type="search" class="" placeholder="Type Your Mail Here">
            <div class="input-group-append">
               <button class="btn btn-white" type="button">Subscribe</button>
            </div>
         </div>
      </div>
   </div>

</section>
@include ('web/include/footer')
<script>
   $('.owl1').owlCarousel({
    loop:true,
   margin:10,
   nav:false,
   dots:false,
   navText : ["<i class='fas fa-long-arrow-alt-left font-offer mr-3'></i>","<i class='fas fa-long-arrow-alt-right font-offer'></i>"],
   responsive:{
    0:{
        items:1
    },
    600:{
        items:1
    },
    1000:{
        items:3
    }
   }
   });


   $('.owl2').owlCarousel({
    loop:true,
   margin:10,
   nav:true,
   nav:false,
   dots:false,
   responsive:{
    0:{
        items:1
    },
    600:{
        items:1
    },
    1000:{
        items:5
    }
   }
   });


   $('.owl3').owlCarousel({
    loop:true,
   margin:10,
   nav:false,
   dots:false,
   navText : ["<i class='fas fa-long-arrow-alt-left font-offer mr-3'></i>","<i class='fas fa-long-arrow-alt-right font-offer'></i>"],
   responsive:{
    0:{
        items:1
    },
    600:{
        items:1
    },
    1000:{
        items:6
    }
   }

   });
   $('.owl4').owlCarousel({
    loop:true,
   margin:10,
   dots:false,
   nav:false,
   navText : ["<i class='fas fa-long-arrow-alt-left font-offer mr-3'></i>","<i class='fas fa-long-arrow-alt-right font-offer'></i>"],
   responsive:{
    0:{
        items:1
    },
    600:{
        items:1
    },
    1000:{
        items:1
    }
   }

   });
   $('.owl5').owlCarousel({
    loop:true,
   margin:10,
   dots:false,
   nav:false,

   navText : ["<i class='fas fa-long-arrow-alt-left'></i>","<i class='fas fa-long-arrow-alt-right'></i>"],
   responsive:{
    0:{
        items:1
    },
    600:{
        items:1
    },
    1000:{
        items:4
    }
   }

   });
   $('.owl6').owlCarousel({
    center: true,
    loop:true,
   dots:false,
    margin:10,
      responsive:{
         0:{
            items:1
         },
         600:{
            items:1
         },
         1000:{
            items:2
         }
      }
   });
</script>
<script>
   (function () {
   const second = 1000,
     minute = second * 60,
     hour = minute * 60,
     day = hour * 24;

   let birthday = "Sep 30, 2021 00:00:00",
   countDown = new Date(birthday).getTime(),
   x = setInterval(function() {

     let now = new Date().getTime(),
         distance = countDown - now;

     document.getElementById("days").innerText = Math.floor(distance / (day)),
       document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
       document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
       document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

     //do something later when date is reached
     if (distance < 0) {
       let headline = document.getElementById("headline"),
           countdown = document.getElementById("countdown"),
           content = document.getElementById("content");

       headline.innerText = "It's my birthday!";
       countdown.style.display = "none";
       content.style.display = "block";

       clearInterval(x);
     }
     //seconds
   }, 0)
   }());
</script>
