@include ('web/include/header')


    <section>
        <div class="blog-single">
            <img src="{{URL:: to('public/assests/img/blog-single.jpg')}}" class="" alt="img">

        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="single-log-content">
                        <h3>{{$news->newsTitle}}</h3>
                        <div class="mt-4 bg-gray">
                            <span>Posted By:<a href="#" class="ml-2">{{$author->name}}</a> At {{$news->created_at->format('M d, Y')}} | <a href="#" class="mr-2"> 3 Comments </a> </span>
                        </div>
                        <div class="bg-gray mt-4">
                            @php
                                $desc = html_entity_decode($news->detailDes);
                                echo $desc;
                            @endphp
                        </div>
                    </div>
                    <div class="single-log-content mt-5">
                        <div class="share-article">
                            <h6 class="text-center">Share This Article</h6>
                            <div class="d-flex justify-content-center mt-3">
                                <button class="btn btn-facebook mr-2"><i class="fab fa-facebook-f mr-3"></i>Facebook</button>
                                <button class="btn btn-twitter mr-2"><i class="fab fa-twitter mr-3"></i>Twitter</button>
                                <button class="btn btn-google"><i class="fab fa-google-plus-g"></i>Google+</button>


                            </div>
                            <div class="text-center mt-3">
                            <span class="mt-5">Tages: <i>fashion</i></span>
                            </div>
                        </div>
                        <div class="media media-back mt-5">
                            <div class="artile-by">
                                <img src="{{URL:: to('storage/app')}}/{{$author->image}}" class="img-fluid" alt="">
                            </div>
                            <div class="media-body">
                            <p class="mb-0 text-color">
                                <strong>{{$author->name}}</strong>
                            </p>
                            <p class="p-color">{{$author->description}}</p>
                            </div>
                        </div>
                        <div class="mt-5">
                            <h6>WRITE COMMENT</h6>
                            <form action="">
                                <div class="row mt-4">
                                <div class="col-md-6 col-sm-12 col-12">
                                    <div class="form-group input-color">
                                        <input type="text" class="form-control" placeholder="Full Name">
                                    </div>

                                </div>
                                <div class="col-md-6 col-sm-12 col-12">
                                    <div class="form-group input-color">
                                        <input type="text" class="form-control" placeholder="Email">
                                    </div>

                                </div>
                                <div class="col-md-12 col-sm-12 col-12">
                                    <div class="form-group input-color">
                                    <textarea name="" placeholder="Comment Message" id="" cols="100" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 text-right">
                                    <button class="btn btn-cmt">Save</button>
                                </div>
                            </form>
                        </div>

                        <div class="mt-5">
                            <div class="media mt-5">
                                <div class="artile-by">
                                    <img src="{{URL:: to('public/assests/img/author.jpeg')}}" class="img-fluid" alt="">
                                </div>
                                <div class="media-body">
                                <div class="d-flex">
                                <p class="mb-0 text-color mr-4">
                                    <strong>Display Name</strong>
                                </p>
                                <span class="p-color">Last week</span>
                                </div>
                                <p class="p-color">Lorem ipsum dolor sit amet, consectetur sit amet.</p>
                                <span class="p-color">Reply</span>
                                </div>
                            </div>
                            <div class="media mt-5 ml-5">
                                <div class="artile-by">
                                    <img src="{{URL:: to('public/assests/img/author.jpeg')}}" class="img-fluid" alt="">
                                </div>
                                <div class="media-body">
                                <div class="d-flex">
                                <p class="mb-0 text-color mr-4">
                                    <strong>Display Name</strong>
                                </p>
                                <span class="p-color">Last week</span>
                                </div>
                                <p class="p-color">Lorem ipsum dolor sit amet, consectetur sit amet.</p>
                                <span class="p-color">Reply</span>
                                </div>
                            </div>
                            <div class="media mt-5 ml-5">
                                <div class="artile-by">
                                    <img src="{{URL:: to('public/assests/img/author.jpeg')}}" class="img-fluid" alt="">
                                </div>
                                <div class="media-body">
                                <div class="d-flex">
                                <p class="mb-0 text-color mr-4">
                                    <strong>Display Name</strong>
                                </p>
                                <span class="p-color">Last week</span>
                                </div>
                                <p class="p-color">Lorem ipsum dolor sit amet, consectetur sit amet.</p>
                                <span class="p-color">Reply</span>
                                </div>
                            </div>
                            <div class="media mt-5">
                                <div class="artile-by">
                                    <img src="{{URL:: to('public/assests/img/author.jpeg')}}" class="img-fluid" alt="">
                                </div>
                                <div class="media-body">
                                <div class="d-flex">
                                <p class="mb-0 text-color mr-4">
                                    <strong>Display Name</strong>
                                </p>
                                <span class="p-color">Last week</span>
                                </div>
                                <p class="p-color">Lorem ipsum dolor sit amet, consectetur sit amet.</p>
                                <span class="p-color">Reply</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <section class=" mt-5">
                <div class="row">
                    <div class="col-md-12 col-md-12 text-center">
                        <h2 class="text-color mb-5">Related Articles</h2>
                        <div class="row">
                              @foreach ($OtherNews as $news1)

                              <div class="col-md-4 col-sm-12 col-12">
                                <div class="item m-3">
                           <div class="card7">
                              <img class="card-img-top" src="{{URL::to('storage/app')}}/{{$news1->newsImg}}" alt="Card image cap">
                              <div class="card-body border-0 text-left">
                              <span>{{$news1->created_at->format("M d, Y")}}</span>
                                 <h5 class="card-title text-color">{{$news1->title}}</h5>

                                 <p class="card-text">{{$news1->shotDes}}</p>
                                 <a href="{{URL::to('/single-blog')}}/{{$news1->id}}"><h6>Continue Reading</h6></a>

                              </div>
                           </div>
                        </div>
                            </div>
                           @endforeach
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>







@include ('web/include/footer2')
