<html lang="en">
<head>
    <title>Sections</title>
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
                    petok: "1bc141a575d0a4f70c28876955f2dad2a1ad9fbc-1482866655-86400",
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

    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/font-awesome.css">

    <link rel="stylesheet" href="css/style_3.css">

    <link rel="stylesheet" href="css/bootstrap.css" >
    <link rel="stylesheet" href="css/touchTouch.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style_signup.css">
    <link rel="stylesheet" href="css/style.css">


    <script src="js/jquery.stellar.min.js"></script>

    <script src="js/respond.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/modernizr-2.6.2.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>

    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.mobilemenu.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.ui.totop.js"></script>
    <script src="js/jquery.touchSwipe.min.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <script src="js/touchTouch.jquery.js"></script>

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


    {{--<script src="js/jquery.js"></script>--}}
    {{--<script src="js/jquery-migrate-1.2.1.js"></script>--}}
    {{--<script src="js/superfish.js"></script>--}}
    {{--<script src="js/jquery.mobilemenu.js"></script>--}}
    {{--<script src="js/jquery.cookie.js"></script>--}}
    {{--<script src="js/jquery.easing.1.3.js"></script>--}}
    {{--<script src="js/jquery.ui.totop.js"></script>--}}
    {{--<script src="js/jquery.touchSwipe.min.js"></script>--}}
    {{--<script src="js/jquery.equalheights.js"></script>--}}
    {{--<script src="js/touchTouch.jquery.js"></script>--}}

    {{--<script src="js/owl.carousel.min.js"></script>--}}
    {{--<script src="js/jquery.waypoints.min.js"></script>--}}
    {{--<script src="js/jquery.stellar.min.js"></script>--}}
    {{--<script src="js/modernizr-2.6.2.min.js"></script>--}}
    {{--<script src="js/respond.min.js"></script>--}}




    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
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

$p_token = session('p_token');
?>
<body>

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

<header id="header">
    <div class="container">
        <h1 class="navbar-brand navbar-brand_ fadeIn animated"><a href="/"><img alt="Grill point"
                                                                                src="img/Logo_Header.png"></a>
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

                <ul class="nav sf-menu" style="left: 0px; position: absolute ">
                    <li><a id="log" href="javascript:void(0);" onclick="show_log();" class="Per-Font" style="<?php
                        if (isset($user)){
                            echo ("display : none");
                        }?>">ورود</a></li>
                    <li><a id="log" href="/loggingOut" class="Per-Font" style="<?php
                        if (!isset($user)){
                            echo ("display : none");
                        }?>">خروج</a></li>
                </ul>

                <ul class="nav sf-menu">
                    <!--<li><a href="index.php" class="Per-Font">تماس با ما</a></li>
                    <li><a href="index-1.html" class="Per-Font">درباره ما</a></li>-->
                    {{--<li><a href="index-2.html" class="Per-Font">شهر ها</a></li>--}}
                    <li><a href="/About" class="Per-Font">درباره ما</a></li>
                    <li class="active"><a href="/Contact" class="Per-Font">تماس با ما</a></li>
                    <li ><a href="/Sections" class="Per-Font">تخفیف ها</a>
                        {{--<ul>--}}
                        {{--<li><img src="img/arrowup.png" alt=""><a href="#">مرکزخرید</a></li>--}}
                        {{--<li><a href="#">هتل</a></li>--}}
                        {{--<li><a class="last" href="#">خدمات</a>--}}
                        {{--<ul>--}}
                        {{--<li><a href="#">ماساژ</a></li>--}}
                        {{--<li><a class="last" href="#">آرایشگاه</a></li>--}}
                        {{--</ul>--}}
                        {{--</li>--}}
                        {{--</ul>--}}
                    </li>
                    <li><a href="/" class="Per-Font">خانه</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<div id="content">
    <!--==============================row6=================================-->
    {{--<div class="row_6" style="background-image: url(/public/img/pattern2.jpg)">--}}
    {{--<div class="container">--}}
    {{--<h2 class="pad_bot3 Per-Header2">تخفیف های لوکس</h2>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div id="fh5co-contact">--}}
    {{--<div class="container">--}}

    <div id="map" class="fh5co-map"></div>
    <div class="row">
        <div class="col-md-5 col-md-pull-1 " style="float: right">

            <div class="fh5co-contact-info">
                <h3 class="Per-Header2" style="color: white; font-size: 30px; padding: 14px; margin-top: 20px">تماس با ما</h3>
                <ul>
                    <li class="Per-Font-Parag address" style="color: wheat; font-size: 21px">تهران، تهران، میدان تجریش، خ دربند، خ اسداللهی، ک فاخری، پ29، واحد 1</li>
                    <li class="Per-Font-Parag phone" style="color: wheat; font-size: 22px">021-22735308</li>
                    <li class="email" style="font-size: 22px"><a href="mailto:info@luxiarium.ir" style="color: wheat !important">info@luxarium.ir</a></li>
                    <li class="url" style="color: wheat;font-size: 22px"><a href="http://luxarium.ir" style="color: wheat !important">luxarium.ir</a></li>
                </ul>
            </div>

        </div>
        {{--<div class="col-md-6 ">--}}
            {{--<h3>Get In Touch</h3>--}}
            {{--<form action="#">--}}
                {{--<div class="row form-group">--}}
                    {{--<div class="col-md-6">--}}
                        {{--<!-- <label for="fname">First Name</label> -->--}}
                        {{--<input type="text" id="fname" class="form-control" placeholder="Your firstname">--}}
                    {{--</div>--}}
                    {{--<div class="col-md-6">--}}
                        {{--<!-- <label for="lname">Last Name</label> -->--}}
                        {{--<input type="text" id="lname" class="form-control" placeholder="Your lastname">--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="row form-group">--}}
                    {{--<div class="col-md-12">--}}
                        {{--<!-- <label for="email">Email</label> -->--}}
                        {{--<input type="text" id="email" class="form-control" placeholder="Your email address">--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="row form-group">--}}
                    {{--<div class="col-md-12">--}}
                        {{--<!-- <label for="subject">Subject</label> -->--}}
                        {{--<input type="text" id="subject" class="form-control" placeholder="Your subject of this message">--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="row form-group">--}}
                    {{--<div class="col-md-12">--}}
                        {{--<!-- <label for="message">Message</label> -->--}}
                        {{--<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                    {{--<input type="submit" value="Send Message" class="btn btn-primary">--}}
                {{--</div>--}}

            {{--</form>--}}
        {{--</div>--}}
    </div>

    {{--</div>--}}
    {{--</div>--}}

    {{--<div id="fh5co-started" class="fh5co-bg" style="background-image: url(images/img_bg_3.jpg);">--}}
    {{--<div class="overlay"></div>--}}
    {{--<div class="container">--}}
    {{--<div class="row animate-box">--}}
    {{--<div class="col-md-8 col-md-offset-2 text-center">--}}
    {{--<h2>Fitness Classes this Summer <br> <span> Pay Now and <br> Get <span class="percent">35%</span> Discount</span></h2>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="row animate-box">--}}
    {{--<div class="col-md-8 col-md-offset-2 text-center">--}}
    {{--<p><a href="#" class="btn btn-default btn-lg">Become a Member</a></p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
</div>


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

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
<script src="js/google_map.js"></script>

</body>
</html>