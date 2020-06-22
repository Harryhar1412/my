
    <style type="text/css">
        h2 {
            color: #333;
            text-align: center;
            text-transform: uppercase;
            font-family: "Roboto", sans-serif;
            font-weight: bold;
            position: relative;
            margin: 30px 0 60px;
        }
        h2::after {
            content: "";
            width: 100px;
            position: absolute;
            margin: 0 auto;
            height: 3px;
            background: #8fbc54;
            left: 0;
            right: 0;
            bottom: -10px;
        }
        .col-center {
            margin: 0 auto;
            float: none !important;
        }
        .carousel {
            margin: 50px auto;
            padding: 0 70px;
        }
        .carousel .item {
            color: #999;
            font-size: 14px;
            text-align: center;
            overflow: hidden;
            min-height: 290px;
        }
        .carousel .item .img-box {
            width: 135px;
            height: 135px;
            margin: 0 auto;
            padding: 5px;
            border: 1px solid #ddd;
            border-radius: 50%;
        }
        .carousel .img-box img {
            width: 100%;
            height: 100%;
            display: block;
            border-radius: 50%;
        }
        .carousel .testimonial {
            padding: 30px 0 10px;
        }
        .carousel .overview {
            font-style: italic;
        }
        .carousel .overview b {
            text-transform: uppercase;
            color: #7AA641;
        }
        .carousel .carousel-control {
            width: 40px;
            height: 40px;
            margin-top: -20px;
            top: 50%;
            background: none;
        }
        .carousel-control i {
            font-size: 68px;
            line-height: 42px;
            position: absolute;
            display: inline-block;
            color: rgba(0, 0, 0, 0.8);
            text-shadow: 0 3px 3px #e6e6e6, 0 0 0 #000;
        }
        .carousel .carousel-indicators {
            bottom: -40px;
        }
        .carousel-indicators li, .carousel-indicators li.active {
            width: 10px;
            height: 10px;
            margin: 1px 3px;
            border-radius: 50%;
        }
        .carousel-indicators li {
            background: #999;
            border-color: transparent;
            box-shadow: inset 0 2px 1px rgba(0,0,0,0.2);
        }
        .carousel-indicators li.active {
            background: #555;
            box-shadow: inset 0 2px 1px rgba(0,0,0,0.2);
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-center m-auto">
                <h2>Testimonials</h2>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                        <li data-target="#myCarousel" data-slide-to="4"></li>
                        <li data-target="#myCarousel" data-slide-to="5"></li>
                        <li data-target="#myCarousel" data-slide-to="6"></li>
                    </ol>
                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">
                        <div class="item carousel-item active">
                            <div class="img-box"><img src="img/dad.png" alt=""></div>
                            <p class="testimonial">
                                "Everyone knows his,” said Deneen B., Bailey’s mother.
                                Before he became a Student at TU, socializing was a challenge
                                for Harryhar and he had limited friendships. “He became used to
                                being excluded from those around him and now he has a supportive
                                community of friends,"
                            </p>
                            <p class="overview"><b>Nawaraj Bidari</b>, Father</p>
                        </div>
                        <div class="item carousel-item">
                            <div class="img-box"><img src="img/kiran.jpg" alt=""></div>
                            <p class="testimonial">
                                "Having Harryhar as a friend is an excellent example of friendship in itself.  Open-
                                minded, genuine, compassionate, and level-headed, he can always be counted on
                                to listen and provide support when needed.  His wonderful sense of humor,
                                adventure, and life experiences have given his the ability to see any situation in a
                                positive sense.  Personally believing that ‘people come into our lives for a reason, a
                                season, or a lifetime’, I’ve known for a long time that Harryhar is a lifetime friend.
                            </p>
                            <p class="overview"><b>Kiran Sapkota</b>,System Analyst</p>
                        </div>
                        <div class="item carousel-item">
                            <div class="img-box"><img src="img/bikram.jpg" alt=""></div>
                            <p class="testimonial">
                                "Having Harryhar as a friend is an excellent example of friendship in itself.  Open-
                                minded, genuine, compassionate, and level-headed, he can always be counted on
                                to listen and provide support when needed.  His wonderful sense of humor,
                                adventure, and life experiences have given his the ability to see any situation in a
                                positive sense.  Personally believing that ‘people come into our lives for a reason, a
                                season, or a lifetime’, I’ve known for a long time that Harryhar is a lifetime friend.
                            </p>
                            <p class="overview"><b>Bikram Saud</b>, System Developer</p>
                        </div>
                        <div class="item carousel-item">
                            <div class="img-box"><img src="img/shakti.jpg" alt=""></div>
                            <p class="testimonial">
                                "Having Harryhar as a friend is an excellent example of friendship in itself.  Open-
                                minded, genuine, compassionate, and level-headed, he can always be counted on
                                to listen and provide support when needed.  His wonderful sense of humor,
                                adventure, and life experiences have given his the ability to see any situation in a
                                positive sense.  Personally believing that ‘people come into our lives for a reason, a
                                season, or a lifetime’, I’ve known for a long time that Harryhar is a lifetime friend.
                            </p>
                            <p class="overview"><b>Shakti G.C</b>, Web Developer</p>
                        </div>
                        <div class="item carousel-item">
                            <div class="img-box"><img src="img/anupa.jpg" alt=""></div>
                            <p class="testimonial">
                                "Having Harryhar as a friend is an excellent example of friendship in itself.  Open-
                                minded, genuine, compassionate, and level-headed, he can always be counted on
                                to listen and provide support when needed.  His wonderful sense of humor,
                                adventure, and life experiences have given his the ability to see any situation in a
                                positive sense.  Personally believing that ‘people come into our lives for a reason, a
                                season, or a lifetime’, I’ve known for a long time that Harryhar is a lifetime friend.
                            </p>
                            <p class="overview"><b>Anupa Lamichhane</b>, Web Developer</p>
                        </div>
                        <div class="item carousel-item">
                            <div class="img-box"><img src="img/saroz.jpg" alt=""></div>
                            <p class="testimonial">
                                "I have known Harryhar as a friend for the past twenty years.  He has so many
                                excellent friend qualities.  He truly is a great listener and is willing to offer
                                honest advice if needed.  He is a lot of fun to be around and is easy-going. He is
                                a very caring person and is genuinely interested in what is happening in your life.
                                I feel a strong connection even though we live far apart.  It is always easy to
                                reconnect when we see or talk to each other.  I value his friendship and know that. <br>

                            </p>
                            <p class="overview"><b>Saroj Rijal</b>,Analyst</p>
                        </div>
                        <div class="item carousel-item">
                            <div class="img-box"><img src="img/sarina.png" alt=""></div>
                            <p class="testimonial">
                                "Having Harryhar as a friend is an excellent example of friendship in itself.  Open-
                                minded, genuine, compassionate, and level-headed, he can always be counted on
                                to listen and provide support when needed.  His wonderful sense of humor,
                                adventure, and life experiences have given his the ability to see any situation in a
                                positive sense.  Personally believing that ‘people come into our lives for a reason, a
                                season, or a lifetime’, I’ve known for a long time that Harryhar is a lifetime friend.
                            </p>
                            <p class="overview"><b>Sarina Khatiwada</b>,Developer</p>
                        </div>

                    </div>
                    <!-- Carousel controls -->
                    <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

