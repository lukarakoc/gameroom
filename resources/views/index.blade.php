@extends('layouts.new-front')

@section('content')

    <!--========================================
        2. BANNER
============================================-->
    <section class="slider-area">
        <div class="overlay"></div>
        <div class="silder owl-carousel">
            <div class="slide-item">
                <div class="slide-caption">
                    <div class="slider-inner">
                        <h2 class="caption-desc">NVIDIA</h2>
                        <h2 class="caption-title"> GEFORCE GTX 1660Ti</h2>
                        <p>GeForce GTX 1660 Ti je dostupan već danas od vodećindeih svetskih proizvođača kartica, a od
                            sada se nalazi i u našoj igraonici. U pitanju je kartica zasnovana na Turing
                            arhitekturi, baš kao RTX serija, ali bez podrške za raytracing i DLSS.</p>
                    </div>
                </div>
            </div>
            <div class="slide-item">
                <div class="slide-caption">
                    <div class="slider-inner">
                        <h2 class="caption-desc">Razer</h2>
                        <h2 class="caption-title">DeathAdder Essential</h2>
                        <p>Više od deceniju, Razer DeathAdder linije je dominirala globalnom esport arenom. Stekao
                            je reputaciju zbog pouzdanosti koju gejemri potvrđuju na osnovu izdržljivosti i
                            ergonimije. Sada i naši grači ima da vladaju esport scenom.</p>
                    </div>
                </div>
            </div>
            <div class="slide-item">
                <div class="slide-caption">
                    <div class="slider-inner">
                        <h2 class="caption-desc">Redragon</h2>
                        <h2 class="caption-title">Kala K557</h2>
                        <p>Redragon K557 je odvojiva mehanička gejmerska tastatura sa RGB pozadinskim osvjetljenjem.
                            Gejmer može istovremeno da klikne više funkcijskih tastera bez ikakve greške u programu.
                            Uz ovu tastaturu očekujemo da vladate u svakoj igrici i da imate nezaboravno iskustvo.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Slider Area-->
    <!--========================================
        3. ABOUT US
============================================-->
    <!--Start About Area-->
    <div class="about-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!--Start Heading Title-->
                    <div class="heading-title text-center" id="onama">
                        <span class="subtitle">O Nama</span>
                        <h2 class="f-weight-700 margin-0">Igraonica 1.6</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-6 order-last order-md-first">
                    <div class="about-text">
                        <p class="first-text">Otvorena u martu 2019 godine, nalazi se kod Vezirovog mosta,
                            mjesto okupljanja gejmera svih vrsta igara. Mjesto gdje se okupljaju profesionalni igraci,
                            a i amaterski, kome nikad nije dosta razonode i dru&zcaron;enja uz prijatnu atmosferu.
                            <br><br>
                            Igraonica je opremljena sa 15 kompjutera, medjuu najboljim gejming setupovima, što
                            ukljucuje NVIDIA GEFORCE GTX 1660Ti
                            graficku kartu, Redragon Kala K557 tastaturu, kao i Hyper X Stinger slusalice, i Razer
                            DeathAdder Essential kompjuterski mis.
                            Opremljena je i sa 4 SonyPlaystationa 4, na kojima možete igrati najbolje igrice kao što su
                            FIFA 2019, NBA 2k19, UFC3 i mnoge druge.</p>
                    </div>
                </div>
                <div class="col-md-6 order-first order-md-last d-flex align-self-center">
                    <div class="aboutusvideo">
                        <div class="img">
                            <img class="img-fluid"
                                 src="http://images.neo-search.com/storage/MATOVA IGRAONICA/1565543706_GX2LjVFmRKdKsUS9.jpg"
                                 alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End About Area-->
    <!--========================================
        4. FREE DEVICE NUMBER
============================================-->
    <section class="conferences">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <!--Start Heading Title-->
                    <div class="heading-title text-center">
                        <!-- <span class="subtitle">Budi dio</span> -->
                        <h2 style="color: #00ffd0;">Broj slobodnih uredjaja</h2>
                        <!-- <p>BROJ SLOBODNIH KOMPJUTERA</p> -->
                    </div>
                    <!--End Heading Title-->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <p class="date">Last update 2 minutes ago</p>
                        <div class="row">
                            <div class="pc-cont-sec col-sm-12 col-md-6">
                                <h2 class="dev-numb-counter" style="color: #00ffd0;">{{sizeof($freePC)/1}}</h2>
                                <img class="w-50" src="assets/img/pc1.png" alt="">
                            </div>
                            <div class="pc-cont-sec col-sm-12 col-md-6">
                                <h2 class="dev-numb-counter" style="color: #00ffd0;">{{sizeof($freeSony)/1}}</h2>
                                <img class="w-50" src="assets/img/sony.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--========================================
        5. RESERVATION
============================================-->

    <section class="sponsor_area becomesponsor" id="rez">
        <div class="container">
            <div class="row">
                <div class="col-12" >
                    <h3 class="form_title">Rezervacija</h3>
                    <form id="myForm" action="/check" method="post">
                        <meta name="csrf-token" content="{{csrf_token()}}">
                        <div class="form-row">
                            <div class="col-md-6 mf-mr-bottom">
                                <label>Ime i Prezime:</label>
                                <input type="text" name="name" id="name" class="my-form" placeholder="Unesite Vase ime i prezime*" required>
                            </div>
                            <div class="col-md-6 mf-mr-bottom">
                                <label>PC / PS4:</label>
                                <select class="my-form" type="type" id="type" name="type">
                                    <option>PC</option>
                                    <option>PS4</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mf-mr-bottom">
                                <label>Broj Uredjaja:</label>
                                <select class="my-form"  id="num" name="num">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                </select>
                            </div>
                            <div class="col-md-6 mf-mr-bottom">
                                <label>Vrijeme:</label>
                                <input type="text" class="my-form" name="time"  id="time" placeholder="Unesite vrijeme rezervacije" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mf-mr-bottom">
                                <label>Broj Telefona:</label>
                                <input type="text" class="my-form" id="phone" name="phone" placeholder="Unesite broj telefona" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12">
                                <button class="mr_btn_fill" onclick="reserve()" type="button">Posalji</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!--========================================
        6. GAME SLIDER
============================================-->
    <section class="testimonial-area">
        <div class="overlay"></div>
        <!--Start Container-->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="imgBx">
                        <img src="http://images.neo-search.com/storage/MATOVA IGRAONICA/1568725915_IQzxdCX70A5TgwxN.jpg"
                             alt="">
                    </div>
                    <div class="details">
                        <h3>FIFA 20<br><span>Sport, Football</span></h3>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="imgBx">
                        <img src="http://images.neo-search.com/storage/MATOVA IGRAONICA/1565784866_It0rAn0jQrW2VzbC.jpg"
                             alt="">
                    </div>
                    <div class="details">
                        <h3>PUBG<br><span>Battle Royale</span></h3>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="imgBx">
                        <img src="http://images.neo-search.com/storage/MATOVA IGRAONICA/1565787907_puDeg7qQFhFNZGkT.jpg"
                             alt="">
                    </div>
                    <div class="details">
                        <h3>CS:GO<br><span>Multiplayer</span></h3>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="imgBx">
                        <img src="assets/img/dotacover.png" alt="">
                    </div>
                    <div class="details">
                        <h3>DOTA<br><span>Multiplayer online battle arena</span></h3>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="imgBx">
                        <img src="assets/img/fortnitecover.png" alt="">
                    </div>
                    <div class="details">
                        <h3>FORTNITE<br><span>Battle Royale</span></h3>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="imgBx">
                        <img src="http://images.neo-search.com/storage/MATOVA IGRAONICA/1565784866_hRUewFYkD3pbsUgQ.jpg"
                             alt="">
                    </div>
                    <div class="details">
                        <h3>CALL OF DUTY MW4<br><span>FPS</span></h3>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="imgBx">
                        <img src="http://images.neo-search.com/storage/MATOVA IGRAONICA/1565786997_Z2tWzyYWlgh77cVq.jpg"
                             alt="">
                    </div>
                    <div class="details">
                        <h3>Apex Legends<br><span>Battle Royale</span></h3>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="imgBx">
                        <img src="http://images.neo-search.com/storage/MATOVA IGRAONICA/1565787337_0PV42FQV8qB1AN2T.jpg"
                             alt="">
                    </div>
                    <div class="details">
                        <h3>League of Legends<br><span>Multiplayer online battle arena</span></h3>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="imgBx">
                        <img src="http://images.neo-search.com/storage/MATOVA IGRAONICA/1565787337_CuyINtyLHvM0Pt15.jpg"
                             alt="">
                    </div>
                    <div class="details">
                        <h3>World of Worcraft<br><span>MMORPG</span></h3>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="imgBx">
                        <img src="http://images.neo-search.com/storage/MATOVA IGRAONICA/1565784866_rox8y6OTorcsJAB2.jpg"
                             alt="">
                    </div>
                    <div class="details">
                        <h3>Overwatch<br><span>FPS</span></h3>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="imgBx">
                        <img src="http://images.neo-search.com/storage/MATOVA IGRAONICA/1565784866_h3O2W44QNQWlYRSw.jpg"
                             alt="">
                    </div>
                    <div class="details">
                        <h3>1.6 CS<br><span>Multiplayer</span></h3>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="imgBx">
                        <img src="http://images.neo-search.com/storage/MATOVA IGRAONICA/1565784866_BWgKNx7VmujdjmfE.jpg"
                             alt="">
                    </div>
                    <div class="details">
                        <h3>GTA V<br><span>Action-adventure</span></h3>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="imgBx">
                        <img src="http://images.neo-search.com/storage/MATOVA IGRAONICA/1565787337_lcOX03sjBKDjdRFT.jpg"
                             alt="">
                    </div>
                    <div class="details">
                        <h3>Rocket League<br><span>Sports, Racing, Football</span></h3>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="imgBx">
                        <img src="http://images.neo-search.com/storage/MATOVA IGRAONICA/1565787653_g82o9x4DjQhDc7kl.jpg"
                             alt="">
                    </div>
                    <div class="details">
                        <h3>FIFA 2019<br><span>Sports, Football</span></h3>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="imgBx">
                        <img src="http://images.neo-search.com/storage/MATOVA IGRAONICA/1565786997_NWtRmH1yzXJ8V3jH.jpg"
                             alt="">
                    </div>
                    <div class="details">
                        <h3>PES 2019<br><span>Sports, Football</span></h3>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="imgBx">
                        <img src="http://images.neo-search.com/storage/MATOVA IGRAONICA/1565786997_FY7n7UBjIKFrUhqA.jpg"
                             alt="">
                    </div>
                    <div class="details">
                        <h3>NBA 2k19<br><span>Sports, Simulation</span></h3>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="imgBx">
                        <img src="http://images.neo-search.com/storage/MATOVA IGRAONICA/1565786997_F4sJg7FXByoCVujX.jpg"
                             alt="">
                    </div>
                    <div class="details">
                        <h3>UFC 3<br><span>Martial art fighting game</span></h3>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="imgBx">
                        <img src="http://images.neo-search.com/storage/MATOVA IGRAONICA/1565787556_NBh77BzLBmu1a02N.jpg"
                             alt="">
                    </div>
                    <div class="details">
                        <h3>Naruto Shippuden: UNS 4<br><span>Action, Fighting</span></h3>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="imgBx">
                        <img src="http://images.neo-search.com/storage/MATOVA IGRAONICA/1565787556_1PjZWI2e3uot3Cb1.jpg"
                             alt="">
                    </div>
                    <div class="details">
                        <h3>Dragon Ball Fighterz<br><span>Fighting</span></h3>
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
        <!--End Container-->
    </section>
    <!--End Testimonial Area-->

    <!--========================================
        7. LATEST NEWS
============================================-->
    <section class="latest-news-area" id="blog">
        <!--Start Container-->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <!--Start Heading Title-->
                    <div class="heading-title text-center">
                        <span class="subtitle">Zadnje</span>
                        <h2 class="f-weight-700 margin-0">Novosti</h2>
                    </div>
                    <!--End Heading Title-->
                </div>
            </div>

            <!--Start Row-->
            <div class="row">
            @if($blogs && sizeof($blogs) > 0)
                @foreach($blogs as $blog)
                <!--Start Blog Post-->
                <div class="col-lg-4 col-sm-6">
                    <!--Start Article-->
                    <article class="blog-post latest">
                        <div class="post-media">
                            <a href="#blog">
                                <img class="img-responsive" src="{{asset($blog->photo)}}" alt="image">
                            </a>
                        </div>
                        <div class="content">
                            <div class="post-meta">
                                <div class="post-title">
                                    <a href="blogdetails.html">{{$blog->name}}</a>
                                </div>
                                <a href="#"><span>by admin</span></a>
                                <small>&#124;</small>
                                <a class="post-meta-a-tag" href="#blog"><span></span></a>
                            </div>
                            <div class="post-content">
                                <p>{{$blog->body}}</p>
                                <a class="readmore" href="#blog">Detaljnije</a>
                            </div>
                        </div>
                    </article>
                    <!--End Article-->
                </div>
                @endforeach
            @endif
            </div>
            <!--End Row-->
        </div>
        <!--End Container-->
    </section>
    <!--End Latest News Area-->
    <!--========================================
        8. TOURNAMENTS
============================================-->
    @if($tournament)
    <section class="eventSingle speaker_profile" id="turniri">
        <div class="overlay"></div>
        <div class="container">
            <div class="row speaker">
                <div class="col-md-12">
                    <div class="media">
                        <div class="col-md-12 col-lg-6 col-sm-12">
                        <img class="align-self-center mr-3 img-fluid"
                             src="{{asset($tournament->photo)}}"
                             alt="" width="500" height="250">
                        </div>
                        <div class="media-body d-flex align-self-center col-lg-6 col-sm-12 col-md-12">
                            <div class="content">
                                <h2>{{$tournament->name}}</h2>
                                <p>
                                   {{$tournament->description}}
                                </p>
                                <ul>
                                    <li>
                                        <h4>Ulog: {{$tournament->cost}}</h4>
                                    </li> <br>
                                    <li>
                                        <h4>Nagrada: {{$tournament->price}}</h4>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </section>

    <!--========================================
        9. LOCATION
============================================-->
    <div class="location_wrapper" style="background: #000;">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d607.5511376729803!2d19.262537278045023!3d42.45233523164321!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x134d94b43135ad63%3A0x7333f0cc8741fdb4!2sTagor%20ra%C4%8Dunari!5e1!3m2!1sen!2s!4v1568544661211!5m2!1sen!2s"
            width="100%" height="500px" frameBorder="0" allowFullscreen>
        </iframe>
    </div>
    <!--========================================
        10. FOOTER
============================================-->
    <!--Start Footer-->
    <footer class="footer">
        <!--Start Footer Top-->
        <div class="footer-top">
            <!--Start Container-->
            <div class="container" id="kontakt">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="footer-about">
                            <img class="f-logo img-fluid" src="assets/img/logo.png" alt="Image">
                            <p>Vrhunska gejmerska oprema, ambijent i kolektiv. Prava atmosfera za ljubitelje gejminga.
                                &Ccaron;ekamo Vas!</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mt-5">
                        <div class="footer-contact-info">
                            <h3>Kontakt</h3>
                            <ul>
                                <li><a href="#">
                                        <i class="flaticon-location-pointer"></i>
                                        II Crnogorski Bataljon 2/10,
                                    </a>
                                </li>
                                <li><a href="#">
                                        <i class="flaticon-phone-receiver"></i>
                                        (+382) 68 466 555
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="footer-about">
                            <h3 class="title">Zapratite Nas</h3>
                            <ul>
                                <li><a href="https://www.facebook.com/igraonica1.6/" target="_blank"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li><a href="https://www.instagram.com/1.6igraonica/" target="_blank"><i
                                            class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Container-->
        </div>
        <!--End Footer Top-->
@stop
