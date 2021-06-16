@extends('layouts.front')

@section('content')

<section class="banner">
    <div class="ban-bck">
        <div class="ban-logo">
            <h1>Blog</h1>
        </div>
    </div>
</section>

<!--=================================
        10. BLOG
===================================-->

<section class="blog">
    <div class="blog-wrapper">
        <div class="blog-wrapper-left">
            <div class="img-cover">
                <img src="assets/images/fortnitecover.png" alt="">
            </div>
            <div class="blog-details-wrapper">
                <h1>BLOG 1</h1>
                <div class="box-clock">
                    <h6><i class="fas fa-user-friends"></i> od Admin</h6>
                    <h6><i class="far fa-clock"></i>12:30 AM</h6>
                </div>
                <hr color="white">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur sit quo fuga repellat alias culpa nesciunt amet, vitae tempore sequi vero rerum nemo magni nostrum animi quos illum possimus repellendus?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur sit quo fuga repellat alias culpa nesciunt amet, vitae tempore sequi vero rerum nemo magni nostrum animi quos illum possimus repellendus?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur sit quo fuga repellat alias culpa nesciunt amet, vitae tempore sequi vero rerum nemo magni nostrum animi quos illum possimus repellendus?</p>
            </div>
        </div>
        <div class="blog-wrapper-right">
            <div class="recent-blog">
                <h3>Poslednji Blogovi</h3>
                <div class="recent-blog-wrapper">
                    <div class="recent-cover">
                        <a href=""><img src="assets/images/fortnitecover.png" alt="" width="80" height="80"></a>
                    </div>
                    <div class="recent-details">
                        <a href=""><h5>Blog 1</h5></a>
                        <a href=""><p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p></a>
                    </div>
                </div>
                <div class="recent-blog-wrapper">
                        <div class="recent-cover">
                            <a href=""><img src="assets/images/fortnitecover.png" alt="" width="80" height="80"></a>
                        </div>
                        <div class="recent-details">
                            <a href=""><h5>Blog 2</h5></a>
                            <a href=""><p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p></a>
                        </div>
                </div>
            </div>
            <button class="btn-resv">Više Blogova</button>
        </div>
    </div>
</section>


@stop
