<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript">
        //<![CDATA[
        try {
            if (!window.CloudFlare) {
                var CloudFlare = [{
                    verbose: 0,
                    p: 0,
                    byc: 0,
                    owlid: "cf",
                    bag2: 1,
                    mirage2: 0,
                    oracle: 0,
                    paths: {cloudflare: "/cdn-cgi/nexp/dok3v=1613a3a185/"},
                    atok: "a282a97bb51b9daaa489d9c016445601",
                    petok: "570933029e7258edc7728927305c8a5179b121f4-1482865070-86400",
                    zone: "template-help.com",
                    rocket: "0",
                    apps: {"abetterbrowser": {"ie": "7"}}
                }];
                !function (a, b) {
                    a = document.createElement("script"), b = document.getElementsByTagName("script")[0], a.async = !0, a.src = "js/cloudflare.min.js", b.parentNode.insertBefore(a, b)
                }()
            }
        } catch (e) {
        }
        //]]>
    </script>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <meta name = "format-detection" content = "telephone=no" />
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link rel="stylesheet" href="css/bootstrap.css" >
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/camera.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/touchTouch.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/style_signup.css">


    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/angular/dependency/angular.min.js"></script>
    <script src="js/angular/js/app.js"></script>
    <script src="js/jquery.mobilemenu.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.ui.totop.js"></script>
    <script src="js/jquery.touchSwipe.min.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/touchTouch.jquery.js"></script>
    <script src="js/respond.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/modernizr-2.6.2.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>


    <script src='js/camera.js'></script>
    <!--[if (gt IE 9)|!(IE)]><!-->
    <script src="js/jquery.mobile.customized.min.js"></script>
    <!--<![endif]-->

    <script>
        $(function() {
            var e = document.getElementById("test");
            //e.scroll(function() {
            /*e.each(function() {
             if ($(this).position().top > 0) {
             e.addClass("slideInUp animated");
             return false;  // break once the first displayable value has been returned.
             }
             })*/
            //})

            $('test').waypoint( function( direction ) {

                if( direction === 'down')
                {
                    $(this.element).addClass('slideInUp animated-slow');
                }
            })
        })
    </script>

    <script type="text/javascript">
        $(window).load( function(){

            jQuery('.camera_wrap').camera();

        });
    </script>


    <script type="text/javascript">
        /* window.onload() = function () {
         document.getElementById("log").onclick =
         function () {
         show_log();
         }
         }*/

        function show_log() {
            setTimeout(function () {

                if ($(login).hasClass('hide')) {
                    /*if (!($(login).hasClass(fadeInLeft))){
                     $(login).addClass(fadeInLeft);
                     }*/
                    $(login).removeClass("hide");
                    $(login).addClass("animated");
                }

                if ($(login).hasClass('animated')) {
                    if ($(login).hasClass('fadeOutLeft')) {
                        $(login).removeClass('fadeOutLeft');
                        $(login).addClass('fadeInLeft');
                    }
                    $(login).removeClass("animated");
                    $(login).addClass("animated");
                }
            }, 1);
        }


        $('html').click(function () {
            $(login).click(function (event) {
                event.stopPropagation();
            });

            if ($(login).hasClass('animated')) {
                console.log('test');
                $(login).removeClass("animated");
                if ($(login).hasClass('fadeInLeft')) {
                    $(login).removeClass('fadeInLeft');
                    $(login).addClass('fadeOutLeft');
                }
                $(login).addClass("animated");
            }
        })


    </script>

    <script>

        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }

    </script>



    <!--[if lt IE 9]>
    <div style='text-align:center'><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div>
    <link rel="stylesheet" href="assets/tm/css/tm_docs.css" type="text/css" media="screen">
    <script src="assets/assets/js/html5shiv.js"></script>
    <script src="assets/assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<?php
//dd(Session::get('token'));
    if(Session::get('token')){
//    dd($token);
//      dd(Session::get('token'));
        $token = Session::get('token');
    if (!DB::table('users')->where('remember_token', $token)->exists()){
//        dd("not found");
    }
    else {
        $user = DB::table('users')->where('remember_token', $token)->first();

       // dd($user->firstName);
    }
    }
?>

<body ng-app="luxarium" ng-controller="mainCtrl">

<div id="login" class="pro-info fadeInLeft hide" style="z-index: 1005; position: fixed; width: 24%">
    <div class="login" style="margin: 10% 9px auto 9px;  width: auto;">
        <form action="/loggingIn" method="post">
            <ul>
                <li>
                    <a href="#" class=" icon user"></a><input name="username" type="text" class="text Per-Font-Parag"
                                                              placeholder="نام کاربری" onfocus="this.placeholder = '';"
                                                              onblur="if (this.placeholder == '') {this.placeholder = 'نام کاربری';}">
                </li>

                <li>
                    <a href="#" class=" icon key"></a><input name="password" type="password" class="Per-Font-Parag"
                                                             placeholder="رمز عبور" onfocus="this.placeholder = '';"
                                                             onblur="if (this.placeholder == '') {this.placeholder = 'تکرار رمز';}">
                </li>
                <div class="clear"></div>

                <div class="submit">
                    <input type="submit" class="Per-Font-btn" value="ورود" >
                    <!--                                    <div class="strip">Or</div>-->
                </div>
                <!---->
                <!--                                <div class="dropbox"> <a class="drop" href="#">SIGN WITH DROPBOX</a></div>-->
            </ul>
        </form>

    </div>
</div>
<!--==============================header=================================-->
<header id="header">
    <div class="container">
        <h1 class="navbar-brand navbar-brand_ fadeIn animated"><img alt="Grill point"
                                                                                        src="img/Logo_Header.png">
        </h1>
    </div>
    <div class="menuheader">
        <div class="container">
            <nav class="navbar navbar-default navbar-static-top tm_navbar" role="navigation">
                <ul class="nav sf-menu" style="right: 0px; position: absolute">
                    <li><a href="About.php" class="Per-Font">
                            <?php
                                if (isset($user)){
                                echo ($user->firstName);
                                }
                                else{
                                    echo ("ثبت نام");
                                }
                            ?>
                        </a></li>
                </ul>
<!--                <div class="total-cart">-->
<!--                    <ul>-->
<!--                        <li>-->
<!--                            <a href="#">-->
<!--                                <span class="total-cart-number">2 Item</span>-->
<!--                                <span><i class="sp-shopping-bag"></i></span>-->
<!--                            </a>-->
<!--                            <!-- Mini-cart-content Start -->
<!--                            <div class="total-cart-brief">-->
<!--                                <div class="cart-photo-details">-->
<!--                                    <div class="cart-photo">-->
<!--                                        <a href="#"><img src="img/total-cart/1.jpg" alt=""></a>-->
<!--                                    </div>-->
<!--                                    <div class="cart-photo-brief">-->
<!--                                        <a href="#">Men's Shirt Shirt</a>-->
<!--                                        <span>$25.00</span>-->
<!--                                    </div>-->
<!--                                    <div class="pro-delete">-->
<!--                                        <a href="#"><i class="sp-circle-close"></i></a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="cart-photo-details">-->
<!--                                    <div class="cart-photo">-->
<!--                                        <a href="#"><img src="img/total-cart/1.jpg" alt=""></a>-->
<!--                                    </div>-->
<!--                                    <div class="cart-photo-brief">-->
<!--                                        <a href="#">Men's Shirt Shirt</a>-->
<!--                                        <span>$25.00</span>-->
<!--                                    </div>-->
<!--                                    <div class="pro-delete">-->
<!--                                        <a href="#"><i class="sp-circle-close"></i></a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="cart-subtotal">-->
<!--                                    <p>Total = $50.00</p>-->
<!--                                </div>-->
<!--                                <div class="cart-inner-btm">-->
<!--                                    <a href="#">Checkout</a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <!-- Mini-cart-content End -->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </div>-->
                <ul class="nav sf-menu" style="left: 0px; position: absolute ">
                    <li><a id="log" href="javascript:void(0);" onclick="show_log();" class="Per-Font" style="<?php
                        if (isset($user)){
                            echo ("display : none");
                        }?>">ورود</a></li>
                    <li><a id="log" href="\loggingOut" class="Per-Font" style="<?php
                        if (!isset($user)){
                            echo ("display : none");
                        }?>">خروج</a></li>
                </ul>

                <ul class=" nav sf-menu">
                    <!--<li><a href="index.html" class="Per-Font">تماس با ما</a></li>
                    <li><a href="index-1.html" class="Per-Font">درباره ما</a></li>-->
                    <li><a href="/About" class="Per-Font">درباره ما</a></li>
                    <li><a href="/Contact" class="Per-Font">تماس با ما</a></li>
<!--                    <li><a href="index-2.html" class="Per-Font">شهر ها</a></li>-->
                    <li><a href="/Sections" class="Per-Font">تخفیف ها</a>
<!--                        <ul>-->
<!--                            <li><img src="img/arrowup.png" alt=""><a href="#">رستوران</a></li>-->
<!--                            <li><a href="#">هتل</a></li>-->
<!--                            <li><a class="last" href="#">خدمات</a>-->
<!--                                <ul>-->
<!--                                    <li><a href="#">ماساژ</a></li>-->
<!--                                    <li><a class="last" href="#">آرایشگاه</a></li>-->
<!--                                </ul>-->
<!--                            </li>-->
<!--                        </ul>-->
                    </li>
                    <li class="active"><a href="/" class="Per-Font">خانه</a></li>
                    <li><a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<!--==============================content=================================-->
<div id="content">


    <!--==============================slider=================================-->
    <div class="slider " style="position : relative; direction : ltr">


        <div class="camera_wrap animate-box" data-animate-effect='fadeIn'>
            <div data-src="img/Resturant_1.jpg">
                <div class="pro-info fadeInLeft animated">
                <span>
                    <p> رستوران 1</p>
                </span>
                </div>
            </div>
            <div data-src="img/Resturant_2.jpg">
                <div class="pro-info fadeInLeft animated">
                    <span>
                        <p>رستوران 2</p>
                    </span>
                </div>
            </div>
            <div data-src="img/Hotel_Room_1.jpg">
                <div class="pro-info fadeInLeft animated ">
                    <span>
                        <p> هتل 1</p>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!--==============================row1=================================-->
    <div class="row_1">
        <div class="container ">
            <p class="title1 Per-Header">لوکساریوم</p>
            <p class="title2 Per-Font">تخفیف های بی نظیر لوکس، با بهترین کیفیت را با ضمانت ما تجربه کنید.</p>
            <a href="#" class="btn btn-default btn-lg btn1 Per-Font-btn">بیشتر</a>
        </div>
    </div>
    <!--==============================row2=================================-->
    <div class="row_2 " >
        <div class="container">
            <div class="row " >
                <ul id="test" class="list1" >
                    <li class="col-lg-4 col-md-4 col-sm-4 listbox1">
                        <div class="box1 animate-box" style="background-color: #dfb366">
                            <a href="/Item/1">
                                <figure><img src="img/Catg_1.jpg" alt=""></figure>
                                <p class="Per-Font2">رستوران ها</p>
                            </a>
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-4 col-sm-4 listbox2">
                        <div class="box2 animate-box">
                            <a href="/Item/1">
                                <p class="Per-Font2">هتل ها</p>
                                <figure><img src="img/Catg_2.jpg" alt=""></figure>
                            </a>
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-4 col-sm-4 listbox3">
                        <div class="box3 animate-box" style="background-color: #dfb366">
                            <a href="/Item/1 ">
                                <figure><img src="img/Catg_3.jpg" alt=""></figure>
                                <p class="Per-Font2">خدمات</p>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================row3=================================-->
    <div class="row_3">
        <div class="container">
            <div class="row">
                <ul class="list3" >
                    <li class="col-lg-6 col-md-6 col-sm-6" ng-repeat="item in items">
                        <div class="box4 animate-box" data-animate-effect='fadeIn'>
                            <figure><img ng-src="{{item.imagePath}}" /></figure>
                            <div class="info1 maxheight">
                                <p class="list3title1">{{item.title}}</p>
                                <p class="list3title2">{{item.subTitle}}</p>
                                <p class="list3title3">{{description}}</p>
                                <a href="/Item/1" class="btn-link btn-link1 Per-Font-btn">اطلاعات بیشتر<span></span></a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================row4=================================-->
<!--    <div class="row_4">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-lg-4 col-md-4 col-sm-4 chef row4_col">-->
<!--                    <h2 class="Per-Header2">درباره لوکساریوم</h2>-->
<!--<!--                    <figure><img src="img/page1_img8.jpg" alt=""></figure>-->
<!--                    <p class="title3 Per-Font-Parag">معرفی شرکت</p>-->
<!--                    <p class="Per-Font-Parag">متن معرفی و اینها! </p>-->
<!--                    <!--<p class="m_bot1 ">Nasgaesaert asetyertya asetrde maeciegast nieriti vrtye remiades.Molirnatur aut oditaut.</p>-->
<!--                    <a href="#" class="btn-link btn-link2 Per-Font-btn">بیشتر<span></span></a>-->
<!--                </div>-->
<!--                <div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-3 col-md-3 col-sm-3 row4_col">-->
<!--                    <h2 class="Per-Header2">دسته ها</h2>-->
<!--                    <ul class="list2">-->
<!--                        <li ><a href="#">هتل</a></li>-->
<!--                        <li ><a href="#">رستوران </a></li>-->
<!--                        <li ><a href="#">باشگاه</a></li>-->
<!--                        <li ><a href="#">ماساژ</a></li>-->
<!--                        <li ><a href="#">تور های تفریحی</a></li>-->
<!--                        <li ><a href="#">خدمات لوکس</a></li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--                <div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-3 col-md-3 col-sm-3 locations row4_col">-->
<!--                    <h2 class="Per-Header2">مکان</h2>-->
<!--                    <figure><img src="img/Logo_Footer.png" alt=""></figure>-->
<!--                    <!--<p class="title4">تهران - خیابان ستارخان<br>ایران</p>-->
<!--                    <hr class="line1">-->
<!--                    <a href="#" class="btn-link btn-link3"><span>info@luxarium.ir</span><!--<span class="__cf_email__" data-cfemail="a8c1c6cec7e8cccdc5c7c4c1c6c386c7dacf">[email&#160;protected]</span><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script>--></a>
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
</div>
<!--==============================footer=================================-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 footercol" style="padding-top: 18px; padding-right: 5%">

                <img id='hwlagwmdbrgwgwmdgwmd' style='cursor:pointer' onclick='window.open("https://trustseal.enamad.ir/Verify.aspx?id=49699&p=odshjzpghwmbjzpgjzpg", "Popup","toolbar=no, location=no, statusbar=no, menubar=no, scrollbars=1, resizable=0, width=580, height=600, top=30")' alt='' src='https://trustseal.enamad.ir/logo.aspx?id=49699&p=aodszpfvkzoezpfvzpfv'/>
                <!--<ul class="social_icons clearfix">
                     <li><a href="#"><img src="img/follow_icon1.png" alt=""></a></li>
                     <li><a href="#"><img src="img/follow_icon2.png" alt=""></a></li>
                     <li><a href="#"><img src="img/follow_icon3.png" alt=""></a></li>
                     <li><a href="#"><img src="img/follow_icon4.png" alt=""></a></li>
                </ul>-->

<!--                <a href="/sign-complaints" class="Per-Font-Parag" style="color: wheat; font-size: 20px">ثبت شکایات، انتقادات و پیشنهادات</a>-->
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 footerlogo footercol">
                <a class="smalllogo2 logo" href="/"><img src="img/Logo_Footer_Full.png" alt=""></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 footercol" >
                <p class="footerpriv" style="color: wheat">&copy; 2016 Omid Yazdizadeh &bull; <a class="privacylink" style="font-family: 'B Zar'; font-size: 20px; color: wheat" href="/Privacy-Policy">قوانین و مقررات</a><!-- {%FOOTER_LINK} --></p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 footercol" style="margin-top: 20px ">
                <a href="/sign-complaints" class="Per-Font-Parag footerpriv" style="color: wheat; font-size: 20px">ثبت شکایات، انتقادات و پیشنهادات</a>
            </div>

        </div>
    </div>
</footer>
<script src="js/bootstrap.min.js"></script>
<!--<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-7078796-5']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>-->
</body><!-- Google Tag Manager -->
<!--<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script>--><!-- End Google Tag Manager -->
</html>
