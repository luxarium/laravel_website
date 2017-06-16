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

    <link rel="stylesheet" href="css/bootstrap.css" >
    <link rel="stylesheet" href="css/touchTouch.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style_signup.css">
    <link rel="stylesheet" href="css/style.css">





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
<body style="padding-bottom: 0px">
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
                    <li><a href="index-2.html" class="Per-Font">شهر ها</a></li>
                    <li class="active"><a href="/Sections" class="Per-Font">تخفیف ها</a>
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
    <div class="row_6" style="background-image: url(/public/img/pattern2.jpg)">
        <div class="container">
            {{--<h2 class="pad_bot3 Per-Header2">تخفیف های لوکس</h2>--}}

            <p class="Per-Header2" style="font-size: 26px">سیستم ثبت انتقادات پیشنهادات و شکایات کاربران گرامی</p>

            <p class="Per-Font-Parag" style="font-size: 16px">کاربران عزیز می توانند از طریق ایمیل info@luxarium.ir، پیشنهادات شکایات و انتقادات خود را با ما درمیان بگذارند. تمام تلاش لوکساریوم ارائه بهترین و کارآمد ترین خدمات به هموطنان گرامی می باشد. پیام شما پس از بررسی در اولین فرصت پاسخ داده می شود. پیشاپیش از همکاری شما در جهت بهبود مسیر لوکساریوم قدردانی می کنیم.</p>

        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 footercol">
                    <img id='hwlagwmdbrgwgwmdgwmd' style='cursor:pointer' onclick='window.open("https://trustseal.enamad.ir/Verify.aspx?id=49699&p=odshjzpghwmbjzpgjzpg", "Popup","toolbar=no, location=no, statusbar=no, menubar=no, scrollbars=1, resizable=0, width=580, height=600, top=30")' alt='' src='https://trustseal.enamad.ir/logo.aspx?id=49699&p=aodszpfvkzoezpfvzpfv'/>

                    <!--<ul class="social_icons clearfix">
                         <li><a href="#"><img src="img/follow_icon1.png" alt=""></a></li>
                         <li><a href="#"><img src="img/follow_icon2.png" alt=""></a></li>
                         <li><a href="#"><img src="img/follow_icon3.png" alt=""></a></li>
                         <li><a href="#"><img src="img/follow_icon4.png" alt=""></a></li>
                    </ul>-->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 footerlogo footercol">
                    <a class="smalllogo2 logo" href="/"><img src="img/Logo_Footer_Full.png" alt=""></a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 footercol">
                    <p class="footerpriv">&copy; 2016 Omid Yazdizadeh &bull; <a class="privacylink" href="/Privacy-Policy">قوانین و مقررات</a><!-- {%FOOTER_LINK} --></p>
                </div>
            </div>
        </div>
    </footer>
</div>

</body>