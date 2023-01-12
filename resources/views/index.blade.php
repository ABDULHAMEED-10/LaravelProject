<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="icon" type="image/x-icon" href="/image/home.png" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    
    <link rel="stylesheet" href="/css/style.css">
    <title>Home</title>

</head>

<body>

    <!-- navigation bar   -->

    <header class="header">

        <div id="menu-btn" class="fas fa-bars"></div>

        <a href="#" class="logo"> <span>AH</span>WHEELS </a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#vehicles">vehicles</a>
            <a href="#services">services</a>
            <a href="#featured">featured</a>
            <a href="#reviews">reviews</a>
            <a href="#contact">contact</a>
        </nav>
        <div id="login-btn" hidden>
            <button class="btn" >login</button>
            <i class="far fa-user"></i>
        </div>
        <div id="signup-btn" hidden>
            <button class="btn">Register</button>
            <!-- <i class="far fa-user"></i> -->
        </div>
        @php
        $name=$data->name;
        @endphp
        
        @if($name=="")
        <div id="login-btn">
            <button class="btn" >login</button>
            <i class="far fa-user"></i>
        </div>
        <div id="signup-btn">
            <button class="btn">Register</button>
            <!-- <i class="far fa-user"></i> -->
        </div>
        
        @else
        
        <div>
            <h4 class="UserProfile">{{$name}}</h4>
        </div>
        @endif
        

        
        

    </header>


    <!-- main body  -->

    <section class="home" id="home">

        <h3>find your car</h3>

        <img src="/image/home-img.png" alt="">

        <a href="#vehicles" target="_blank" class="btn">explore cars</a>

    </section>

    <section class="icons-container">

        <div class="icons">
            <i class="fas fa-home"></i>
            <div class="content">
                <h3>150+</h3>
                <p>branches</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-car"></i>
            <div class="content">
                <h3>4770+</h3>
                <p>cars sold</p>
            </div>
        </div>



        <div class="icons">
            <i class="fas fa-car"></i>
            <div class="content">
                <h3>1500+</h3>
                <p>news cars</p>
            </div>
        </div>

    </section>

    <section class="vehicles" id="vehicles">

        <h1 class="heading"> popular <span>vehicles</span> </h1>

        <form action="{{url('cart')}}"method="post">
        @csrf
        <div class="swiper vehicles-slider">
            <div class="swiper-wrapper">
            @foreach ($car as $car)


                    <div class="swiper-slide box">
                    <img name="image" src="/image/{{$car->src}}" alt="">
                    <div class="content">
                        <h3 >{{$car->condition}} model</h3>
                        
                        <div name="price" class="price"> <span>price : </span> {{$car->Price}} </div>
                        <p>
                            new
                            <span name="model" class="fas fa-circle"></span> {{$car->model}}
                            <span name="gear" class="fas fa-circle"></span> {{$car->gear}}
                            <span name="fuel" class="fas fa-circle"></span> {{$car->fuel}}
                            <span name="speed" class="fas fa-circle"></span> {{$car->speed}}
                        </p>

                        
                        
                        <input type="submit" value="Check Out" class="btn ">                        
                    </div>
                </div>
            @endforeach
 
                </div>

            </div>

            <div class="swiper-pagination"></div>

            </div>

        </form>
        
    </section>

    <section class="services" id="services">

        <h1 class="heading"> our <span>services</span> </h1>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-car"></i>
                <h3>car selling</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis, nisi.</p>
                <a href="#" class="btn"> read more</a>
            </div>

            <div class="box">
                <i class="fas fa-tools"></i>
                <h3>parts repair</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis, nisi.</p>
                <a href="#" class="btn"> read more</a>
            </div>

            <div class="box">
                <i class="fas fa-car-crash"></i>
                <h3>car insurance</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis, nisi.</p>
                <a href="#" class="btn"> read more</a>
            </div>

            <div class="box">
                <i class="fas fa-car-battery"></i>
                <h3>battery replacement</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis, nisi.</p>
                <a href="#" class="btn"> read more</a>
            </div>

            <div class="box">
                <i class="fas fa-gas-pump"></i>
                <h3>oil change</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis, nisi.</p>
                <a href="#" class="btn"> read more</a>
            </div>

            <div class="box">
                <i class="fas fa-headset"></i>
                <h3>24/7 support</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis, nisi.</p>
                <a href="#" class="btn"> read more</a>
            </div>

        </div>

    </section>

    <section class="featured" id="featured">

        <h1 class="heading"> <span>featured</span> cars </h1>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="/image/car-1.png" alt="">
                    <div class="content">
                        <h3 >new model</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div  class="price">$55,000/-</div>
                        <a href="#" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="/image/car-2.png" alt="">
                    <div class="content">
                        <h3>new model</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">$55,000/-</div>
                        <a href="#" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="/image/car-3.png" alt="">
                    <div class="content">
                        <h3>new model</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">$55,000/-</div>
                        <a href="#" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="/image/car-4.png" alt="">
                    <div class="content">
                        <h3>new model</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">$55,000/-</div>
                        <a href="#" class="btn">check out</a>
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <img src="/image/car-5.png" alt="">
                    <div class="content">
                        <h3>new model</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">$55,000/-</div>
                        <a href="#" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="/image/car-6.png" alt="">
                    <div class="content">
                        <h3>new model</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">$55,000/-</div>
                        <a href="#" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="/image/car-7.png" alt="">
                    <div class="content">
                        <h3>new model</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">$55,000/-</div>
                        <a href="#" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="/image/car-8.png" alt="">
                    <div class="content">
                        <h3>new model</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">$55,000/-</div>
                        <a href="#" class="btn">check out</a>
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section>

    <section class="newsletter">

        <h3>subscribe for latest updates</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, suscipit.</p>

        <form action="">
            <input type="email" placeholder="enter your email">
            <input type="submit" value="subscribe">
        </form>

    </section>

    <section class="reviews" id="reviews">

        <h1 class="heading"> client's <span>review</span> </h1>

        <div class="swiper review-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="/image/pic-1.png" alt="">
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam incidunt quod praesentium
                            iusto id autem possimus assumenda at ut saepe.</p>
                        <h3>john deo</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="/image/pic-2.png" alt="">
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam incidunt quod praesentium
                            iusto id autem possimus assumenda at ut saepe.</p>
                        <h3>john deo</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="/image/pic-3.png" alt="">
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam incidunt quod praesentium
                            iusto id autem possimus assumenda at ut saepe.</p>
                        <h3>john deo</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="/image/pic-4.png" alt="">
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam incidunt quod praesentium
                            iusto id autem possimus assumenda at ut saepe.</p>
                        <h3>john deo</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="/image/pic-5.png" alt="">
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam incidunt quod praesentium
                            iusto id autem possimus assumenda at ut saepe.</p>
                        <h3>john deo</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="/image/pic-6.png" alt="">
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam incidunt quod praesentium
                            iusto id autem possimus assumenda at ut saepe.</p>
                        <h3>john deo</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section>

    <section class="contact" id="contact">

        <h1 class="heading"><span>contact</span> us</h1>

        <div class="row">


            <form action="mailto: abdulhameed000650@gmail.com">
                <h3>get in touch</h3>
                <input type="text" placeholder="your name" class="box" >
                <input type="email" placeholder="your email" class="box">
                <input type="tel" placeholder="subject" class="box">
                <textarea placeholder="your message" class="box" cols="30" rows="10"></textarea>
                <input type="submit" value="send message"  class="btn">
            </form>

        </div>

    </section>

    <section class="footer" id="footer">

        <div class="box-container">

            <div class="box">
                <h3>our branches</h3>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> india </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> japan </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> france </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> russia </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> USA </a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
                <a href="#vehicles"> <i class="fas fa-arrow-right"></i> vehicles </a>
                <a href="#sevices"> <i class="fas fa-arrow-right"></i> services </a>
                <a href="#featured"> <i class="fas fa-arrow-right"></i> featured </a>
                <a href="#reviews"> <i class="fas fa-arrow-right"></i> reviews </a>
                <a href="#contact"> <i class="fas fa-arrow-right"></i> contact </a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +92-51-4528660 </a>
                <a href="#"> <i class="fas fa-phone"></i> +92-331-5420987s </a>
                <a href="#"> <i class="fas fa-envelope"></i> adilmasood833@gmail.com </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> Islamabad, Pakistan</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
                <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
            </div>

        </div>

        <div class="credit"> created by Group members | all rights reserved </div>

    </section>


    @if($errors->any())
      <div class="alert alert-danger">
            <ul class="list-unstyled">
                  @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                  @endforeach
            </ul>
        </div>
    @endif








    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>

    <script src="js/script.js"></script>

</body>

</html>