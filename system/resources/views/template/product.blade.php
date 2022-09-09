<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
    <title>Cill Store | product </title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta property="og:title" content="Vide" />
    <meta name="keywords"
        content="Big store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="{{ url('public') }}/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <link href="{{ url('public') }}/css/style.css" rel='stylesheet' type='text/css' />
    <!-- js -->
    <script src="{{ url('public') }}/js/jquery-1.11.1.min.js"></script>
    <!-- //js -->
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="{{ url('public') }}/js/move-top.js"></script>
    <script type="text/javascript" src="{{ url('public') }}/js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
    <link href="{{ url('public') }}/css/font-awesome.css" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
    <!--- start-rate---->
    <script src="{{ url('public') }}/js/jstarbox.js"></script>
    <link rel="stylesheet" href="{{ url('public') }}/css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
    <script type="text/javascript">
        jQuery(function() {
            jQuery('.starbox').each(function() {
                var starbox = jQuery(this);
                starbox.starbox({
                    average: starbox.attr('data-start-value'),
                    changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass(
                        'clickonce') ? 'once' : true,
                    ghosting: starbox.hasClass('ghosting'),
                    autoUpdateAverage: starbox.hasClass('autoupdate'),
                    buttons: starbox.hasClass('smooth') ? false : starbox.attr(
                        'data-button-count') || 5,
                    stars: starbox.attr('data-star-count') || 5
                }).bind('starbox-value-changed', function(event, value) {
                    if (starbox.hasClass('random')) {
                        var val = Math.random();
                        starbox.next().text(' ' + val);
                        return val;
                    }
                })
            });
        });
    </script>
    <!---//End-rate---->

</head>

<body>
    <a href="offer.html"><img src="{{ url('public') }}/images/download.png" class="img-head" alt=""></a>
    <div class="header">

        <div class="container">

            <div class="logo">
                <h1><a href="index.html"><b>T<br>H<br>E</b>Cill Store<span>The Best Supermarket</span></a></h1>
            </div>
            <div class="head-t">
                <ul class="card">
                    <li><a href="{{ url('/register') }}"><i class=></i>register</a></li>
                    <li><a href="{{ url('/login') }}"><i class=></i>Login</a>
                    </li>
                </ul>
            </div>



            <div class="nav-top">
                <nav class="navbar navbar-default">

                    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                        <ul class="nav navbar-nav ">
                            <li><a href="{{ url('/index') }}/" class="hyper "><span>Home</span></a></li>
                            <li><a href="{{ url('/product') }}" class="hyper"> <span>product</span></a></li>
                        </ul>
                    </div>
                </nav>

                <div class="clearfix"></div>
            </div>

        </div>
    </div>



    <!--content-->
    <div class="product">
        <div class="container">
            <div class="spec ">
                <h3>Products</h3>
                <div class="ser-t">
                    <b></b>
                    <span><i></i></span>
                    <b class="line"></b>
                </div>
            </div>
            <div class=" con-w3l agileinf">
                <div class="col-md-3 pro-1">
                    <div class="col-m">
                        <a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
                            <img src="{{ url('public') }}/images/of24.png" class="img-responsive" alt="">
                        </a>
                        <div class="mid-1">
                            <div class="women">
                                <h6><a href="single.html">Wheat</a>(500 g)</h6>
                            </div>
                            <div class="mid-2">
                                <p><label>$7.00</label><em class="item_price">$6.00</em></p>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="add">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="24" data-name="Wheat"
                                    data-summary="summary 24" data-price="6.00" data-quantity="1"
                                    data-image="{{ url('public') }}/images/of24.png">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pro-1">
                    <div class="col-m">
                        <a href="#" data-toggle="modal" data-target="#myModal2" class="offer-img">
                            <img src="{{ url('public') }}/images/of25.png" class="img-responsive" alt="">
                        </a>
                        <div class="mid-1">
                            <div class="women">
                                <h6><a href="single.html"> Peach Halves</a>(250 g)</h6>
                            </div>
                            <div class="mid-2">
                                <p><label>$5.00</label><em class="item_price">$4.50</em></p>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="add">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="25"
                                    data-name="Peach Halves" data-summary="summary 25" data-price="4.50"
                                    data-quantity="1" data-image="{{ url('public') }}/images/of25.png">Add to
                                    Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pro-1">
                    <div class="col-m">
                        <a href="#" data-toggle="modal" data-target="#myModal3" class="offer-img">
                            <img src="{{ url('public') }}/images/of26.png" class="img-responsive" alt="">
                        </a>
                        <div class="mid-1">
                            <div class="women">
                                <h6><a href="single.html">Banana</a>(1 kg)</h6>
                            </div>
                            <div class="mid-2">
                                <p><label>$4.00</label><em class="item_price">$3.50</em></p>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="add">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="26"
                                    data-name="Banana" data-summary="summary 26" data-price="3.50" data-quantity="1"
                                    data-image="{{ url('public') }}/images/of26.png">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pro-1">
                    <div class="col-m">
                        <a href="#" data-toggle="modal" data-target="#myModal4" class="offer-img">
                            <img src="{{ url('public') }}/images/of27.png" class="img-responsive" alt="">
                        </a>
                        <div class="mid-1">
                            <div class="women">
                                <h6><a href="single.html">Rice</a>(500 g)</h6>
                            </div>
                            <div class="mid-2">
                                <p><label>$1.00</label><em class="item_price">$0.80</em></p>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="add">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="27" data-name="Rice"
                                    data-summary="summary 27" data-price="0.80" data-quantity="1"
                                    data-image="{{ url('public') }}/images/of27.png">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 pro-1">
                    <div class="col-m">
                        <a href="#" data-toggle="modal" data-target="#myModal5" class="offer-img">
                            <img src="{{ url('public') }}/images/of28.png" class="img-responsive" alt="">
                        </a>
                        <div class="mid-1">
                            <div class="women">
                                <h6><a href="single.html">Oil</a>(500 g)</h6>
                            </div>
                            <div class="mid-2">
                                <p><label>$7.00</label><em class="item_price">$6.00</em></p>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="add">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="28" data-name="Oil"
                                    data-summary="summary 28" data-price="6.00" data-quantity="1"
                                    data-image="{{ url('public') }}/images/of28.png">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pro-1">
                    <div class="col-m">
                        <a href="#" data-toggle="modal" data-target="#myModal6" class="offer-img">
                            <img src="{{ url('public') }}/images/of29.png" class="img-responsive" alt="">
                        </a>
                        <div class="mid-1">
                            <div class="women">
                                <h6><a href="single.html">Biscuits</a>(250 g)</h6>
                            </div>
                            <div class="mid-2">
                                <p><label>$5.00</label><em class="item_price">$4.50</em></p>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="add">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="29"
                                    data-name="Biscuits" data-summary="summary 29" data-price="4.50"
                                    data-quantity="1" data-image="{{ url('public') }}/images/of29.png">Add to
                                    Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pro-1">
                    <div class="col-m">
                        <a href="#" data-toggle="modal" data-target="#myModal7" class="offer-img">
                            <img src="{{ url('public') }}/images/of30.png" class="img-responsive" alt="">
                        </a>
                        <div class="mid-1">
                            <div class="women">
                                <h6><a href="single.html">Nuts</a>(1 kg)</h6>
                            </div>
                            <div class="mid-2">
                                <p><label>$4.00</label><em class="item_price">$3.50</em></p>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="add">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="30" data-name="Nuts"
                                    data-summary="summary 30" data-price="3.50" data-quantity="1"
                                    data-image="{{ url('public') }}/images/of30.png">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pro-1">
                    <div class="col-m">
                        <a href="#" data-toggle="modal" data-target="#myModal8" class="offer-img">
                            <img src="{{ url('public') }}/images/of31.png" class="img-responsive" alt="">
                        </a>
                        <div class="mid-1">
                            <div class="women">
                                <h6><a href="single.html">Rice</a>(500 g)</h6>
                            </div>
                            <div class="mid-2">
                                <p><label>$1.00</label><em class="item_price">$0.80</em></p>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="add">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="31" data-name="Rice"
                                    data-summary="summary 31" data-price="0.80" data-quantity="1"
                                    data-image="{{ url('public') }}/images/of31.png">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pro-1">
                    <div class="col-m">
                        <a href="#" data-toggle="modal" data-target="#myModal9" class="offer-img">
                            <img src="{{ url('public') }}/images/of32.png" class="img-responsive" alt="">
                        </a>
                        <div class="mid-1">
                            <div class="women">
                                <h6><a href="single.html">Noodles</a>(500 g)</h6>
                            </div>
                            <div class="mid-2">
                                <p><label>$7.00</label><em class="item_price">$6.00</em></p>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="add">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="32"
                                    data-name="Noodles" data-summary="summary 32" data-price="6.00"
                                    data-quantity="1" data-image="{{ url('public') }}/images/of32.png">Add to
                                    Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pro-1">
                    <div class="col-m">
                        <a href="#" data-toggle="modal" data-target="#myModal10" class="offer-img">
                            <img src="{{ url('public') }}/images/of33.png" class="img-responsive" alt="">
                        </a>
                        <div class="mid-1">
                            <div class="women">
                                <h6><a href="single.html">Tea</a>(250 g)</h6>
                            </div>
                            <div class="mid-2">
                                <p><label>$5.00</label><em class="item_price">$4.50</em></p>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="add">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="33" data-name="Tea"
                                    data-summary="summary 33" data-price="4.50" data-quantity="1"
                                    data-image="{{ url('public') }}/images/of33.png">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pro-1">
                    <div class="col-m">
                        <a href="#" data-toggle="modal" data-target="#myModal11" class="offer-img">
                            <img src="{{ url('public') }}/images/of34.png" class="img-responsive" alt="">
                        </a>
                        <div class="mid-1">
                            <div class="women">
                                <h6><a href="single.html">Seafood</a>(1 kg)</h6>
                            </div>
                            <div class="mid-2">
                                <p><label>$4.00</label><em class="item_price">$3.50</em></p>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="add">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="34"
                                    data-name="Seafood" data-summary="summary 34" data-price="3.50"
                                    data-quantity="1" data-image="{{ url('public') }}/images/of34.png">Add to
                                    Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pro-1">
                    <div class="col-m">
                        <a href="#" data-toggle="modal" data-target="#myModal12" class="offer-img">
                            <img src="{{ url('public') }}/images/of35.png" class="img-responsive" alt="">
                        </a>
                        <div class="mid-1">
                            <div class="women">
                                <h6><a href="single.html">Oats Idli</a>(500 g)</h6>
                            </div>
                            <div class="mid-2">
                                <p><label>$1.00</label><em class="item_price">$0.80</em></p>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="add">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="35"
                                    data-name="Oats Idli" data-summary="summary 35" data-price="0.80"
                                    data-quantity="1" data-image="{{ url('public') }}/mages/of35.png">Add to
                                    Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    </div>
    <div class="footer">
        <div class="container">
            <div class="col-md-3 footer-grid ">
                <h3>Menu</h3>
                <ul>
                    <li><a href="{{ url('/index') }}">Home</a></li>
                    <li><a href="{{ url('/product') }}">product</a></li>
                </ul>
            </div>
            <div class="col-md-3 footer-grid">
                <h3>My Account</h3>
                <ul>
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
            <div class="footer-bottom">
                <div class="clearfix">

                </div>
            </div>
        </div>
        <div class="copy-right">
            <div class="col-md-12 fo-grid1">
                <p>+1234 758 839 , +1273 748 730</p>
            </div>
            <p> &copy; 2016 Big store. All Rights Reserved | Design by <a href="http://w3layouts.com/">
                    W3layouts</a></p>
        </div>
    </div>
    </div>
</body>
