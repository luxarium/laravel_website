<?php
if ($_GET) {
//          insert();
//    $output = "<script> console.log('got here')</script>";
//    echo $output;
//      }

    /*function insert(){*/
    $link_2 = new  mysqli('localhost', 'root', '', 'luxarium');

    $username = $_GET['username'];
//          $name = $name;

//    if ($username == 'hopeza') {
//        $output = "<script> console.log('hopeza')</script>";
//        echo $output;
//    }
    $name = $_GET['firstName'];
//          $name = $name;
    $Lname = $_GET['lastName'];
//          $Lname = $Lname;
    $state = $_GET['state'];
//          $state = $state;
    $city = $_GET['city'];
//          $city = $city;
    $address = $_GET['address'];
//          $address = $address;
    $tel = $_GET['tel'];
//          $tel = $tel ;
    $email = $_GET['email'];
//          $email = $email;
    $password = $_GET['password'];
//          $password = $password ;

    /*$username = mysqli_real_escape_string($username);
    $name = mysqli_real_escape_string($name);
    $Lname = mysqli_real_escape_string($Lname);
    $state = mysqli_real_escape_string($state);
    $city = mysqli_real_escape_string($city);
    $address = mysqli_real_escape_string($address);
    $tel = mysqli_real_escape_string($tel);
    $email = mysqli_real_escape_string($email);
    $password = mysqli_real_escape_string($password);*/


    $sql_2 = "INSERT INTO users (user_id, firstName, lastName, state, city, address, telephone, emailAddress, password, balance)
VALUES (\"$username\", \"$name\", \"$Lname\", \"$state\", \"$city\", \"$address\", \"$tel\", \"$email\", \"$password\", 0)";

//      $link->query($query);
    if ($link_2->query($sql_2) === TRUE) {
        $output = "<script> console.log('New record created successfully')</script>";
    } else {
        $output = "<script> console.log( 'Error:')</script>'";
    }

//    $output = "<script> console.log('error;')</script>'";
//    echo $output;
    $link_2->close();

    header("Location: http://localhost:38254/Luxarium"); /* Redirect browser */
    exit();
}


?>


<!DOCTYPE html>
<html lang="en">


<?php
//
//if (!empty($_POST)) {
////          insert();
//    $output = "<script> console.log('got here')</script>";
//    echo $output;
////      }
//
//    /*function insert(){*/
//    $link_2 = new  mysqli('localhost','root','','luxarium');
//
//    $username =  $_GET['username'];
////          $name = $name;
//
//    if ($username == 'hopeza') {
//        $output = "<script> console.log('hopeza')</script>";
//        echo $output;
//    }
//    $name =  $_GET['firstName'];
////          $name = $name;
//    $Lname =  $_GET['lastName'];
////          $Lname = $Lname;
//    $state =  $_GET['state'];
////          $state = $state;
//    $city =  $_GET['city'];
////          $city = $city;
//    $address =  $_GET['address'];
////          $address = $address;
//    $tel = $_GET['tel'];
////          $tel = $tel ;
//    $email =  $_GET['email'];
////          $email = $email;
//    $password =  $_GET['password'];
////          $password = $password ;
//
//    /*$username = mysqli_real_escape_string($username);
//    $name = mysqli_real_escape_string($name);
//    $Lname = mysqli_real_escape_string($Lname);
//    $state = mysqli_real_escape_string($state);
//    $city = mysqli_real_escape_string($city);
//    $address = mysqli_real_escape_string($address);
//    $tel = mysqli_real_escape_string($tel);
//    $email = mysqli_real_escape_string($email);
//    $password = mysqli_real_escape_string($password);*/
//
//
//    $sql_2 = "INSERT INTO users (user_id, firstName, lastName, state, city, address, telephone, emailAddress, password, balance)
//                        VALUES (\"$username\", \"$name\", \"$Lname\", \"$state\", \"$city\", \"$address\", \"$tel\", \"$email\", \"$password\", 0)";
//
////      $link->query($query);
//    if ($link_2->query($sql_2) === TRUE) {
//        $output = "<script> console.log('New record created successfully')</script>";
//    } else {
//        $output = "<script> console.log( 'Error:')</script>'";
//    }
//
//    $output = "<script> console.log('error;')</script>'";
//    echo $output;
//    $link_2->close();
//}
//
//
//?>

<head>
    <title>About me</title>
    <meta charset="utf-16">
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
            petok: "68e2e3e2646331a685848dc3321e3bba6c29cc4d-1482866919-86400",
            zone: "template-help.com",
            rocket: "0",
            apps: {"abetterbrowser": {"ie": "7"}}
        }];
        !function (a, b) {
            a = document.createElement("script"), b = document.getElementsByTagName("script")[0], a.async = !0, a.src = "//ajax.cloudflare.com/cdn-cgi/nexp/dok3v=f2befc48d1/cloudflare.min.js", b.parentNode.insertBefore(a, b)
        }()
    }
} catch (e) {
}
//]]>
</script>
    <!--<link rel="icon" href="img/favicon.ico" type="image/x-icon">-->
    <!--    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />-->
    <meta name = "format-detection" content = "telephone=no" />
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link rel="stylesheet" href="css/bootstrap.css" >
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_signup.css">

	<script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.mobilemenu.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.ui.totop.js"></script>
    <script src="js/jquery.touchSwipe.min.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <script src="js/forms.js"></script>

    <script src='js/camera.js'></script>
    <!--[if (gt IE 9)|!(IE)]><!-->
        <script src="js/jquery.mobile.customized.min.js"></script>
    <!--<![endif]-->


    <script type='text/javascript'>//<![CDATA[
        $(function () {

            $('.web').click(function (e) {
                e.preventDefault();
                //$("#bg").attr('src',"template_preview/images/2x2.gif");
                $("#device").attr('style', "margin: 0px auto;text-align: center;");
                $("#hw").attr('class', "web");
                $("#hw").attr('height', "100%");
                $("#hw").attr('width', "100%");
            });
            $('.Ipad-vertical').click(function (e) {
                e.preventDefault();
                ///$("#bg").attr('src',"template_preview/images/ipad-landscape-big.png");
                $("#device").attr('style', "margin: 1em auto;text-align: center;");
                $("#hw").attr('class', "ipad-frame-land");
                // $("#hw").attr('style',"position: absolute;	left: 7.3%;	top: 55px;");
                $("#hw").attr('height', "680");
                $("#hw").attr('width', "1024");

            });
            $('.Ipad-hori').click(function (e) {
                e.preventDefault();
                //$("#bg").attr('src',"template_preview/images/ipad-vertical-big.png");
                $("#device").attr('style', "margin: 1em auto;text-align: center;");
                //$("#hw").attr('style',"left:50px;top:135px");
                $("#hw").attr('class', "ipad-frame-ver");
                // $("#hw").attr('style',"	position: absolute;	left: 7.3%;	top: 75px;");
                $("#hw").attr('height', "1024");
                $("#hw").attr('width', "768");

            });


            $('.Iphone-vertical').click(function (e) {
                e.preventDefault();
                ///$("#bg").attr('src',"template_preview/images/ipad-landscape-big.png");
                $("#device").attr('style', "margin: 1em auto;text-align: center;");
                $("#hw").attr('class', "smart-frame-var");
                // $("#hw").attr('style',"position: absolute;	left: 7.3%;	top: 55px;");
                $("#hw").attr('height', "320");
                $("#hw").attr('width', "480");

            });
            $('.Iphone-hori').click(function (e) {
                e.preventDefault();
                //$("#bg").attr('src',"template_preview/images/ipad-vertical-big.png");
                $("#device").attr('style', "margin: 1em auto;text-align: center;");
                //$("#hw").attr('style',"left:50px;top:135px");
                $("#hw").attr('class', "smart-frame-land");
                // $("#hw").attr('style',"	position: absolute;	left: 7.3%;	top: 75px;");
                $("#hw").attr('height', "480");
                $("#hw").attr('width', "320");
            });

            $('.mobile').click(function (e) {
                e.preventDefault();
                //$("#bg").attr('src',"template_preview/images/ipad-vertical-big.png");
                $("#device").attr('style', "margin: 1em auto;text-align: center;");
                //$("#hw").attr('style',"left:50px;top:135px");
                $("#hw").attr('class', "mobile-frame");
                // $("#hw").attr('style',"	position: absolute;	left: 7.3%;	top: 75px;");
                $("#hw").attr('height', "500");
                $("#hw").attr('width', "240");

            });


        });

    </script>

    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-30027142-1', 'w3layouts.com');
        ga('send', 'pageview');
    </script>


    <!--    [if lt IE 9]-->
    <!--    <div style='text-align:center'><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div>-->
    <!--    <link rel="stylesheet" href="assets/tm/css/tm_docs.css" type="text/css" media="screen">-->
    <!--<script src="assets/assets/js/html5shiv.js"></script>-->
    <!--    <script src="assets/assets/js/respond.min.js"></script>-->
    <!--  <![endif]-->
</head>

<body>

<!--   <!--   --><?php
//        //mysqli_connect('localhost', 'root', '');
//$link = new mysqli('localhost','root','','luxarium');
//if ($link->connect_error) {
//    die('Could not connect: ' . $link->connect_error);
//    $output = "<script> console.log('test')</script>";
//
//}
//        $output = "<script>console.log('Connected successfully')</script>";
//
//        echo $output;
////mysqli_close($link);
//
//
//
//      $link->close();
//
//
//?><!---->-->


<!--==============================header=================================-->
<header id="header">
    <div class="container">
        <h1 class="navbar-brand navbar-brand_ fadeIn animated"><a href="index.php"><img alt="Grill point"
                                                                                        src="img/Logo_Header.png"></a>
        </h1>
    </div>
    <div class="menuheader">
        <div class="container">
            <nav class="navbar navbar-default navbar-static-top tm_navbar" role="navigation">
                <ul class="nav sf-menu">
                    <!--<li><a href="index.html" class="Per-Font">تماس با ما</a></li>
                    <li><a href="index-1.html" class="Per-Font">درباره ما</a></li>-->
                    <li><a href="index-2.html" class="Per-Font">شهر ها</a></li>
                    <li><a href="Sections.php" class="Per-Font">تخفیف ها</a>
                        <ul>
                            <li><img src="img/arrowup.png" alt=""><a href="#">رستوران</a></li>
                            <li><a href="#">هتل</a></li>
                            <li><a class="last" href="#">خدمات</a>
                                <ul>
                                    <li><a href="#">ماساژ</a></li>
                                    <li><a class="last" href="#">آرایشگاه</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="active"><a href="index.php" class="Per-Font">خانه</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<!--==============================content=================================-->
<div id="content">
    <!--==============================row5=================================-->
    <div class="row_5">
        <div class="container">
            <div class="row">
                <!--                <div class="col-lg-7 col-md-7 col-sm-7 reserve_table">-->

                <div style="height: 50px"></div>

                <div class="login">
                    <form action="/registers" method="post">
                        <ul>
                            <li>
                                <a href="#" class=" icon user"></a><input name="username" type="text" class="text Per-Font-btn"
                                                                          placeholder="نام کاربری"
                                                                          onfocus="this.placeholder = '';"
                                                                          onblur="if (this.placeholder == '') {this.placeholder = 'نام کاربری';}">
                            </li>
                            <li>
                                <a href="#" class=" icon user"></a><input name="firstName" type="text" class="text Per-Font-btn"
                                                                          placeholder="نام"
                                                                          onfocus="this.placeholder = '';"
                                                                          onblur="if (this.placeholder == '') {this.placeholder = 'نام';}">
                            </li>
                            <li>
                                <a href="#" class=" icon user"></a><input name="lastName" type="text" class="text Per-Font-btn"
                                                                          placeholder="نام خانوادگی"
                                                                          onfocus="this.placeholder = '';"
                                                                          onblur="if (this.placeholder == '') {this.placeholder = 'نام خانوادگی';}">
                            </li>
<!--                            <div class="dumy">-->
                                <li>
                                    <a href="#" class=" icon user"></a><input name="city" type="text" placeholder="شهر"
                                                                              onfocus="this.placeholder = '';" class="Per-Font-btn"
                                                                              onblur="if (this.placeholder == '') {this.placeholder = 'شهر';}">
                                </li>
<!--                                <li class="psw two">-->
<!--                                    <a href="#" class=" icon user"></a><input name="state" type="text"-->
<!--                                                                              placeholder="استان"-->
<!--                                                                              onfocus="this.placeholder = '';"-->
<!--                                                                              onblur="if (this.placeholder == '') {this.placeholder = 'استان';}">-->
<!--                                </li>-->
                                <div class="clear"></div>
<!--                            </div>-->
<!--                            <li>-->
<!--                                <a href="#" class=" icon user"></a><input name="address" type="text" class="text"-->
<!--                                                                          placeholder="آدرس پستی"-->
<!--                                                                          onfocus="this.placeholder = '';"-->
<!--                                                                          onblur="if (this.placeholder == '') {this.placeholder = 'آدرس پستی';}">-->
<!--                            </li>-->
                            <li>
                                <a href="#" class=" icon user"></a><input name="tel" type="text" class="text Per-Font-btn"
                                                                          placeholder="تلفن"
                                                                          onfocus="this.placeholder = '';"
                                                                          onblur="if (this.placeholder == '') {this.placeholder = 'تلفن';}">
                            </li>
                            <li>
                                <a href="#" class=" icon mail"></a><input name="email" type="text" class="text Per-Font-btn"
                                                                          placeholder="آدرس ایمیل"
                                                                          onfocus="this.placeholder = '';"
                                                                          onblur="if (this.placeholder == '') {this.placeholder = 'آدرس ایمیل';}">
                            </li>

                            <div class="dumy">
                                <li class="psw">
                                    <a href="#" class=" icon key"></a><input type="password" placeholder="تکرار رمز"
                                                                             onfocus="this.placeholder = '';" class="Per-Font-btn"
                                                                             onblur="if (this.placeholder == '') {this.placeholder = 'تکرار رمز';}">
                                </li>
                                <li class="psw two">
                                    <a href="#" class=" icon key"></a><input name="password" type="password"
                                                                             placeholder="رمز عبور"
                                                                             onfocus="this.placeholder = '';" class="Per-Font-btn"
                                                                             onblur="if (this.placeholder == '') {this.placeholder = 'رمز عبور';}">
                                </li>
                                <div class="clear"></div>
                            </div>

                            <div class="submit Per-Font-btn">
                                <input type="submit" value="ایجاد حساب کاربری" >
                                <!--                                    <div class="strip">Or</div>-->
                            </div>

                            <!--                                <div class="dropbox"> <a class="drop" href="#">SIGN WITH DROPBOX</a></div>-->
                        </ul>
                        </form>

                </div>

            </div>

            <!--            </div>-->
        </div>
    </div>
</div>
<!--==============================footer=================================-->
<footer>
    <div style="height: 50px">

    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 footercol">
                <!--<ul class="social_icons clearfix">
                     <li><a href="#"><img src="img/follow_icon1.png" alt=""></a></li>
                     <li><a href="#"><img src="img/follow_icon2.png" alt=""></a></li>
                     <li><a href="#"><img src="img/follow_icon3.png" alt=""></a></li>
                     <li><a href="#"><img src="img/follow_icon4.png" alt=""></a></li>
                </ul>-->
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 footerlogo footercol">
                <a class="smalllogo2 logo" href="index.php"><img src="img/Logo_Footer_Full.png" alt=""></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 footercol">
                <p class="footerpriv">&copy; 2016 Omid Yazdizadeh &bull; <a class="privacylink" href="index-5.html">Privacy
                        policy</a><!-- {%FOOTER_LINK} --></p>
            </div>
        </div>
    </div>
</footer>
<script src="js/bootstrap.min.js"></script>
<!--<script src="js/tm-scripts.js"></script>-->
</body><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
</html>
