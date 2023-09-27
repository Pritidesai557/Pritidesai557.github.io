<?php
// echo get_template_directory_uri();
// bloginfo('template_directory');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        #b1,
        #b2,
        #b3 {
            background-repeat: no-repeat;
            background-size: cover;
            transition: transform 1s ease;
        }

        #b1:hover,
        #b2:hover,
        #b3:hover {
            transform: scale(1.15);
        }

        #b1 {
            background-image: url(<?php bloginfo('template_directory') ?>/images/bed5.jpeg);
            margin-right: 2rem;
        }

        #b2 {
            background-image: url(<?php bloginfo('template_directory') ?>/images/li5.jpg);
            margin-right: 2rem;
        }

        #b3 {
            background-image: url(<?php bloginfo('template_directory') ?>/images/th2.jpeg);
            margin-right: 2rem;
        }

        span {
            position: absolute;
            color: white;
            font-weight: bold;
            bottom: 100%;
            left: 2%;
        }

        #c2 {
            background-image: url(<?php bloginfo('template_directory') ?>/images/th3.jpg);
            margin-right: 2rem;
            height: 25rem;
            margin-top: 18rem;
            width: 45rem;
        }

        #c1,
        #c2 {
            background-repeat: no-repeat;
            background-size: cover;
            transition: transform 1s ease;
        }


        #b,
        #c,
        #d,
        #e{
            background-repeat: no-repeat;
            background-size: cover;
        }

        #b{
            background-image: url(<?php bloginfo('template_directory') ?>/images/build1.jpeg);
        }

        #c{
            background-image: url(<?php bloginfo('template_directory') ?>/images/build4.jpeg);
        }

        #d{
            background-image: url(<?php bloginfo('template_directory') ?>/images/build1.jpeg);
        }

        #e{
            background-image: url(<?php bloginfo('template_directory') ?>/images/build4.jpeg);
        }

        #container-fluid {
            /* background-color: red; */
            padding-left: 15%;
            margin: 0px 0px 0px 0px;
            margin-right: 0px;
        }

        .container-fluid {
            padding-left: 3.5%;

        }

        .btn-light {
            margin-top: 0.2rem;
        }

        .card_thumbnail {
            position: relative;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            /* width: 100%; */
            width: 15rem;
            /* height: 100%; */
            height: 24rem;
        }

        .card_3 {
            position: relative;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            /* width: 100%; */
            width: 15rem;
            /* height: 100%; */
            height: 24rem;
        }

        span {
            position: absolute;
            color: white;
            font-weight: bold;
            top: 85%;
            left: 2%;
        }

        .card_thumb {
            position: relative;
            overflow: hidden;
            justify-content: center;
            align-items: center;
            width: 100%;
            margin: auto;
            padding-left: 1rem;
        }

        .card_thumbnail>img {
            height: 24rem;
        }

        .col {
            padding: 10px 0px 10px 0px;
        }

        @media screen and (max-width:767px) {
            .img-cont img {
                width: 700px;
            }

            .overlay-h {
                top: 0px;
            }

            .card_thumbnail>img {
                transform: rotate(180deg);
            }

            div#b.col,
            div#c.col,
            div#d.col,
            div#e.col {
                height: 12rem;
            }

            span {
                position: absolute;
                color: white;
                font-weight: bold;
                top: 28%;
                left: 2%;
            }
            .card_thumb{
                margin-bottom: 2rem;
            }
        }

        @media screen and (max-width:1000px) {
            #a {
                display: contents;
                align-items: center;
            }

            .card_thumb {
                height: fit-content;
                text-align: center;
            }

            .card_thumbnail>img {
                height: 24rem;
            }

            .card_thumbnail>div {
                height: 30rem;
                width: 780px;
            }

            h1 {
                text-align: center;
                
            }

            #b,
            #c,
            #d,
            #e {
                display: flex;
                height: 25rem;
            }
        }
    </style>
</head>

<body>
 <?php get_header(); ?>
    <!-- <div class="cart">cart</div> -->
    <section>
        <div class="img-cont">
            <img src="<?php bloginfo('template_directory') ?>/images/build5.jpg" alt="" srcset="">
            <h1 class="overlay-h">Apartments</h1>
            <h1 class="overlay-h2">For Life</h1>
            <p class="overlay-p">In the heart of Brooklyn, in a vibrant neighborhood just east of Prospect Park,
                stands an eight-story, full-service, strikingly beautiful apartment building</p>
            <div class="overlay">
                <form class="d-flex my-2 my-lg-0 "style="height:9rem">
                    <input class="form-control " type="text" placeholder="Search..." >
                    <button class="btn btn-outline-success search my-2 my-sm-0"
                        type="submit" style="background: #3c6e71;;
                        color: #fff;
                        width: 20%;">-Search</button>
                </form>
            </div>
            <div class="overlay-b">
                Popular Tags <br>
                <button type="button" class="btn btn-light">Brooklyn</button>
                <button type="button" class="btn btn-light">Broom Street</button>
                <button type="button" class="btn btn-light">Lake Street</button>
                <button type="button" class="btn btn-light"><a href="http://" style="color: black;">More</a></button>
            </div>
        </div>
    </section>
    <div class="container-fluid" id="container-fluid">
        <div class="row">
            <div class="row row-cols-lg-5 row-cols-1">
                <div class="col" id="a">
                    <figure class="card_thumb">
                        <div>
                            <h1 class="sunny" style="color: #133b5c;"><strong>Sunny Loft Apartments</strong></h1>
                            <p class="sunny" style="padding: 1rem">From the rooftop terrace, down to the first floor gym, every detail
                                of eight floors provides amenities filled with convenience, class
                            </p>
                            <p><button type="button" class="btn btn-success dexico"
                                    style="padding:0.3rem 2.5rem; font-size: 1.2rem;margin-top: 0px;color:#fff">-View</button><br>
                            </p>
                        </div>
                    </figure>
                </div>
                <div class="col" id="b">
                    <figure class="card_thumbnail">

                        <span>
                            Queens <br>
                            249 propertys
                        </span>
                    </figure>
                </div>
                <div class="col" id="c">
                    <figure class="card_thumbnail">

                        <span>
                            Queens <br>
                            249 propertys
                        </span>
                    </figure>
                </div>
                <div class="col" id="d">
                    <figure class="card_thumbnail">

                        <span>
                            Queens <br>
                            249 propertys
                        </span>
                    </figure>
                </div>
                <div class="col" id="e">
                    <figure class="card_thumbnail">

                        <span>
                            Queens <br>
                            249 propertys
                        </span>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mx-4">
        <div class="row">
            <h1 align="center">Property Highlights</h1>
            <div class="row row-cols-lg-3 row-cols-1">
                <div class="col">
                    <div class="col" id="b1">
                        <figure class="card_3">

                            <span2>
                            </span2>
                        </figure>
                    </div>
                    <button type="button" class="btn btn-success">$765</button><br><br>
                    <p class="gr" style="text-align: left;"><i class='bx bxs-map icon'
                            style="font-size:x-large;color:rgb(7, 115, 115)"></i>LA,
                        Vehicula Street , 58</p>
                    <h3 style="text-align: left; color: rgb(5, 5, 97);font-weight: 600;">Palace Square</h3>
                    <div class="elmf"><p class="gr gr2 ">4 Rooms</p></div>
                    <div class="elmf"><p class="gr gr2">2 Beds</p></div>
                    <div class="elmf"><p class="gr gr2">Area 80 Ft<sup>2</sup></p></div>
                </div>
                <div class="col">
                    <div class="col" id="b2">
                        <figure class="card_3">

                            <span2>
                            </span2>
                        </figure>
                    </div>
                    <button type="button" class="btn btn-success">$765</button><br><br>
                    <p class="gr" style="text-align: left;"><i class='bx bxs-map icon'
                            style="font-size:x-large;color:rgb(7, 115, 115)"></i>LA,
                        Vehicula Street , 58</p>
                    <h3 style="text-align: left; color: rgb(5, 5, 97);font-weight: 600;">Palace Square</h3>
                    <div class="elmf"><p class="gr gr2 ">4 Rooms</p></div>
                    <div class="elmf"><p class="gr gr2">2 Beds</p></div>
                    <div class="elmf"><p class="gr gr2">Area 80 Ft<sup>2</sup></p></div>
                </div>
                <div class="col">
                    <div class="col" id="b1">
                        <figure class="card_3">

                            <span2>
                            </span2>
                        </figure>
                    </div>
                    <button type="button" class="btn btn-success">$765</button><br><br>
                    <p class="gr" style="text-align: left;"><i class='bx bxs-map icon'
                            style="font-size:x-large;color:rgb(7, 115, 115)"></i>LA,
                        Vehicula Street , 58</p>
                    <h3 style="text-align: left; color: rgb(5, 5, 97);font-weight: 600;">Palace Square</h3>
                    <div class="elmf" style="float: left; text-align: center;"><p class="gr gr2 ">4 Rooms</p></div>
                    <div class="elmf"><p class="gr gr2">2 Beds</p></div>
                    <div class="elmf"><p class="gr gr2">Area 80 Ft<sup>2</sup></p></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="z-index: -1;">
        <div class="row">
            <h1 style="margin-bottom: 3rem; font-size: 3rem;color: #133b5c;">Traditional Apartments</h1>
            <div class="col">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" style="width: 9px;height: 9px; border-radius: 50%;"
                            data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" style="width: 9px;height: 9px; border-radius: 50%;"
                            data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" style="width: 9px;height: 9px; border-radius: 50%;"
                            data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                        <button type="button" style="width: 9px;height: 9px; border-radius: 50%;"
                            data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                            aria-label="Slide 2"></button>
                        <button type="button" style="width: 9px;height: 9px; border-radius: 50%;"
                            data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?php bloginfo('template_directory') ?>/images/bed2.jpeg"  class="d-block trad" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php bloginfo('template_directory') ?>/images/bed.jpg"  class="d-block trad" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php bloginfo('template_directory') ?>/images/bed2.jpeg"  class="d-block trad" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php bloginfo('template_directory') ?>/images/bed2.jpeg"  class="d-block trad" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php bloginfo('template_directory') ?>/images/bed2.jpeg"  class="d-block trad" alt="...">
                        </div>
                    </div>

                </div>
            </div>
            <div class="col" style="padding-top: 5rem;padding-left: 1rem;">
                <p>New York is more than the small Island Manhattan. There are more districts that are representing New
                    York City, who we will presented below</p>
                <p class="gr"><i class='bx bxs-map icon' style="font-size:x-large;color:rgb(7, 115, 115)"></i> LA,
                    Vehicula Street , 58</p>
                <p>4 Rooms | 2 beds | Area 70 Ft2</p>
                <p class="gr">PRICE</p>
                <h3>$125/month</h3>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="row row-cols-lg-2 row-cols-1">
                <div class="col"
                    style="background-image: url(<?php bloginfo('template_directory') ?>/images/th1.jpeg); background-repeat: no-repeat;background-size: cover;height: 50rem;width:25rem;">
                    <div class="col" id="c1">
                        <figure class="card_3">

                            <span2>
                            </span2>
                        </figure>
                    </div>
                </div>
                <div class="col" style="padding-left: 20px;" data-mdb-animation-start="onScroll">
                    <h1 align="center" class="topdown">Something About Our
                        Company</h1>
                    <p class="topdown_p">Browse the highest quality listings, apply online, sign your lease, and even pay your rent from
                        any
                        device</p>
                        <div class="row g-3">
                            <div class="col"><h2 class="topdown_h">15+</h2></div>
                            <div class="col"><h2 class="topdown_h">23</h2></div>
                            <div class="col"><h2 class="topdown_h">849</h2></div>
                        </div>
                        <div class="row g-3">
                            <div class="col"><h5 class="topdown_h5">Years of Expirience</h5></div>
                            <div class="col"><h5 class="topdown_h5">Qualificated Realtors</h5></div>
                            <div class="col"><h5 class="topdown_h5">Best Propertys</h5></div>
                        </div>
                    <div class="col" id="c2">
                        <figure class="card_3">

                            <span2>
                            </span2>
                        </figure>
                    </div>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </div> 
    <div class="container-fluid">
        <div class="row">
            <h1 align="center">Clients We Help</h1>
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" style="width: 6px;height: 6px; border-radius: 50%;"
                        data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true"
                        aria-label="Slide 1"></button>
                    <button type="button" style="width: 6px;height: 6px; border-radius: 50%;"
                        data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" style="width: 6px;height: 6px; border-radius: 50%;"
                        data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner" align="center">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <p style="width: 35rem;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil,
                            reiciendis? Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita omnis sed nam
                            ab temporibus vero amet incidunt aut eum recusandae.</p>
                        <img src="<?php bloginfo('template_directory') ?>/images/pic.jpeg" class="d-block" style="width:2rem; border-radius: 50%;" alt="...">
                        <h6>ANNA KEY</h6>
                        <p>happy client </p>
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <p style="width: 35rem;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil,
                            reiciendis? Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita omnis sed nam
                            ab temporibus vero amet incidunt aut eum recusandae.</p>
                        <img src="<?php bloginfo('template_directory') ?>/images/pic.jpeg" class="d-block" style="width:2rem; border-radius: 50%;" alt="...">
                        <h6>ANNA KEY</h6>
                        <p>happy client </p>
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <p style="width: 35rem;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil,
                            reiciendis? Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita omnis sed nam
                            ab temporibus vero amet incidunt aut eum recusandae.</p>
                        <img src="<?php bloginfo('template_directory') ?>/images/pic.jpeg" class="d-block" style="width:2rem; border-radius: 50%;" alt="...">
                        <h6>ANNA KEY</h6>
                        <p>happy client </p>
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>
</body>


</html>