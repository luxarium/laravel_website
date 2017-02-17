
{{--<!DOCTYPE html>--}}
<html lang="zxx"> 
<!-- Head -->

<?php
		$token = session('token');
		$item_id = session('item_id');
//		echo ($token);
//		echo ($item_id);
?>

<head> 
<title>Groovy Apparel a E-Commerce & Fashion Category Bootstrap Responsive Website Template | Men's Single :: W3layouts</title>

<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="Groovy Apparel a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Meta-Tags -->

<!-- Custom-Stylesheet-Links -->
	<link rel="stylesheet" href="{{asset('css/tm_docs.css')}}" type="text/css" media="screen">


<!-- Bootstrap-CSS -->	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}"	 type="text/css" media="all">
<!-- Index-Page-CSS -->	<link rel="stylesheet" href="{{asset('css/style_2.css')}}" 	 type="text/css" media="all">
<!-- FlexSlider-CSS -->	<link rel="stylesheet" href="{{asset('css/flexslider.css')}}" type="text/css" media="all">
<!-- //Custom-Stylesheet-Links -->

	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" >
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" href="{{asset('css/style_signup.css')}}">
	<link rel="stylesheet" href="{{asset('css/touchTouch.css')}}">
	<link rel="stylesheet" href="{{asset('css/animate.css')}}">
	<link rel="stylesheet" href="{{asset('css/style_signup.css')}}">





	{{--{{HTML::style('css/bootstrap.css')}}--}}


	<script src="{{asset('js/jquery.js')}}"></script>
	<script src="{{asset('js/jquery-migrate-1.2.1.js')}}"></script>
	<script src="{{asset('js/superfish.js')}}"></script>
	<script src="{{asset('js/jquery.mobilemenu.js')}}"></script>
	<script src="{{asset('js/jquery.cookie.js')}}"></script>
	<script src="{{asset('js/jquery.easing.js')}}"></script>
	<script src="{{asset('js/jquery.ui.totop.js')}}"></script>
	<script src="{{asset('js/jquery.touchSwipe.min.js')}}"></script>
	<script src="{{asset('js/jquery.equalheights.js')}}"></script>




<!-- Font-Awesome-File-Links -->
<!-- CSS --> <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}" 		 type="text/css" media="all">
<!-- TTF --> <link rel="stylesheet" href="{{asset('fonts/fontawesome-webfont.ttf')}}" type="text/css" media="all">
<!-- //Font-Awesome-File-Links -->

<!-- Default-JavaScript -->
	<!--<script src="js/jquery-2.2.3.js"></script>-->

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
//				$(login).addClass("hide");

			}
		})


	</script>

</head>
<!-- //Head -->

<?php
//dd(Session::get('token'));
if(Session::get('token')){
//    dd($token);
//      dd(Session::get('token'));
	$token = Session::get('token');
	if (!DB::table('Users')->where('remember_token', $token)->exists()){
//        dd("not found");
	}
	else {
		$user = DB::table('Users')->where('remember_token', $token)->first();

		// dd($user->firstName);
	}
}
?>


<!-- Body -->
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
		<h1 class="navbar-brand navbar-brand_ fadeIn animated"><a href="{{url('')}}"><img alt="Grill point"
																						src="{{asset('img/Logo_Header.png')}}"></a>
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
					<li><a id="log" href="\loggingOut" class="Per-Font" style="<?php
						if (!isset($user)){
							echo ("display : none");
						}?>">خروج</a></li>
				</ul>

				<ul class="nav sf-menu">
					<!--<li><a href="index.html" class="Per-Font">تماس با ما</a></li>
                    <li><a href="index-1.html" class="Per-Font">درباره ما</a></li>-->
					<li><a href="{{url('index-2.html')}}index-2.html" class="Per-Font">شهر ها</a></li>
					<li><a href="/Sections" class="Per-Font">تخفیف ها</a>
						<ul>
							<li><img src="{{asset('img/arrowup.png')}}" alt=""><a href="#">رستوران</a></li>
							<li><a href="#">هتل</a></li>
							<li><a class="last" href="#">خدمات</a>
								<ul>
									<li><a href="#">ماساژ</a></li>
									<li><a class="last" href="#">آرایشگاه</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="active"><a href="{{url('')}}" class="Per-Font">خانه</a></li>
				</ul>
			</nav>
		</div>
	</div>
</header>

	<!-- Header -->
<!--	<div class="agileheader">-->
<!---->
<!--		<!-- Navigation -->
<!--		<nav class="navbar navbar-default w3ls navbar-fixed-top">-->
<!--			<div class="container">-->
<!--				<div class="navbar-header wthree nav_2">-->
<!--					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">-->
<!--						<span class="sr-only">Toggle navigation</span>-->
<!--						<span class="icon-bar"></span>-->
<!--						<span class="icon-bar"></span>-->
<!--						<span class="icon-bar"></span>-->
<!--					</button>-->
<!--					<a class="navbar-brand agileinfo" href="index.html"><span>GROOVY</span> APPAREL</a>-->
<!--					<ul class="w3header-cart">-->
<!--						<li class="wthreecartaits"><span class="my-cart-icon"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i><span class="badge badge-notify my-cart-badge"></span></span></li>-->
<!--					</ul>-->
<!--				</div>-->
<!--				<div id="bs-megadropdown-tabs" class="navbar-collapse collapse">-->
<!--					<ul class="nav navbar-nav">-->
<!--						<li class="dropdown">-->
<!--							<a href="#" class="dropdown-toggle w3-agile hyper" data-toggle="dropdown"><span> MEN </span></a>-->
<!--							<ul class="dropdown-menu aits-w3 multi multi1">-->
<!--								<div class="row">-->
<!---->
<!--									<div class="col-sm-3 w3layouts-nav-agile w3layouts-mens-nav-agileits w3layouts-mens-nav-agileits-1">-->
<!--										<ul class="multi-column-dropdown">-->
<!--											<li class="heading">FEATURED</li>-->
<!--											<li><a href="mens.html"><i class="fa fa-angle-right" aria-hidden="true"></i>New Arrivals</a></li>-->
<!--											<li><a href="mens.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Online Only</a></li>-->
<!--											<li><a href="mens.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Brands</a></li>-->
<!--											<li><a href="mens.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Clearance Sale</a></li>-->
<!--											<li><a href="mens.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Discount Store</a></li>-->
<!--											<li><a href="mens.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Editor's Pick</a></li>-->
<!--										</ul>-->
<!--									</div>-->
<!---->
<!--									<div class="col-sm-3 w3layouts-nav-agile w3layouts-mens-nav-agileits w3layouts-mens-nav-agileits-2">-->
<!--										<p>TORSO</p>-->
<!--										<a href="mens.html"><img src="images/men-nav-1.jpg" alt="Groovy Apparel"></a>-->
<!--									</div>-->
<!---->
<!--									<div class="col-sm-3 w3layouts-nav-agile w3layouts-mens-nav-agileits w3layouts-mens-nav-agileits-3">-->
<!--										<p>LEGS</p>-->
<!--										<a href="mens.html"><img src="images/men-nav-2.jpg" alt="Groovy Apparel"></a>-->
<!--									</div>-->
<!---->
<!--									<div class="col-sm-3 w3layouts-nav-agile w3layouts-mens-nav-agileits w3layouts-mens-nav-agileits-4">-->
<!--										<p>ACCESSORIES</p>-->
<!--										<a href="mens_accessories.html"><img src="images/men-nav-3.jpg" alt="Groovy Apparel"></a>-->
<!--									</div>-->
<!---->
<!--									<div class="clearfix"></div>-->
<!--									<p class="promo">Use Promo Code <span>#CFFGTY56</span> and take 30% off the products. <a href="#">Details</a></p>-->
<!--								</div>-->
<!---->
<!--							</ul>-->
<!--						</li>-->
<!---->
<!--						<li class="dropdown">-->
<!--							<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown"><span> WOMEN </span></a>-->
<!--							<ul class="dropdown-menu multi multi2">-->
<!--								<div class="row">-->
<!---->
<!--									<div class="col-sm-3 w3layouts-nav-agile w3layouts-womens-nav-agileits w3layouts-womens-nav-agileits-1">-->
<!--										<ul class="multi-column-dropdown">-->
<!--											<li class="heading">FEATURED</li>-->
<!--											<li><a href="womens.html"><i class="fa fa-angle-right" aria-hidden="true"></i>New Arrivals</a></li>-->
<!--											<li><a href="womens.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Online Only</a></li>-->
<!--											<li><a href="womens.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Brands</a></li>-->
<!--											<li><a href="womens.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Clearance Sale</a></li>-->
<!--											<li><a href="womens.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Discount Store</a></li>-->
<!--											<li><a href="womens.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Editor's Pick</a></li>-->
<!--										</ul>-->
<!--									</div>-->
<!---->
<!--									<div class="col-sm-3 w3layouts-nav-agile w3layouts-womens-nav-agileits w3layouts-womens-nav-agileits-2">-->
<!--										<p>TOP</p>-->
<!--										<a href="womens.html"><img src="images/women-nav-1.jpg" alt="Groovy Apparel"></a>-->
<!--									</div>-->
<!---->
<!--									<div class="col-sm-3 w3layouts-nav-agile w3layouts-womens-nav-agileits w3layouts-womens-nav-agileits-3">-->
<!--										<p>LEGS</p>-->
<!--										<a href="womens.html"><img src="images/women-nav-2.jpg" alt="Groovy Apparel"></a>-->
<!--									</div>-->
<!---->
<!--									<div class="col-sm-3 w3layouts-nav-agile w3layouts-womens-nav-agileits w3layouts-womens-nav-agileits-4">-->
<!--										<p>ACCESSORIES</p>-->
<!--										<a href="womens_accessories.html"><img src="images/women-nav-3.jpg" alt="Groovy Apparel"></a>-->
<!--									</div>-->
<!---->
<!--									<div class="clearfix"></div>-->
<!--									<p class="promo">Use Promo Code <span>#CFFGTY56</span> and take 30% off the products. <a href="#">Details</a></p>-->
<!--								</div>-->
<!---->
<!--							</ul>-->
<!--						</li>-->
<!---->
<!--						<li class="dropdown">-->
<!--							<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown"><span> ACCESSORIES </span></a>-->
<!--							<ul class="dropdown-menu multi multi3">-->
<!--								<div class="row">-->
<!---->
<!--									<div class="col-sm-3 w3layouts-nav-agile w3layouts-acc-nav-agileits w3layouts-acc-nav-agileits-1">-->
<!--										<ul class="multi-column-dropdown">-->
<!--											<li class="heading">FEATURED</li>-->
<!--											<li><a href="mens_accessories.html"><i class="fa fa-angle-right" aria-hidden="true"></i>New Arrivals</a></li>-->
<!--											<li><a href="mens_accessories.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Online Only</a></li>-->
<!--											<li><a href="mens_accessories.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Brands</a></li>-->
<!--											<li><a href="mens_accessories.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Clearance Sale</a></li>-->
<!--											<li><a href="mens_accessories.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Discount Store</a></li>-->
<!--											<li><a href="mens_accessories.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Editor's Pick</a></li>-->
<!--										</ul>-->
<!--									</div>-->
<!---->
<!--									<div class="col-sm-3 w3layouts-nav-agile w3layouts-acc-nav-agileits w3layouts-acc-nav-agileits-2">-->
<!--										<p>MEN</p>-->
<!--										<a href="mens_accessories.html"><img src="images/other-nav-1.jpg" alt="Groovy Apparel"></a>-->
<!--									</div>-->
<!---->
<!--									<div class="col-sm-3 w3layouts-nav-agile w3layouts-acc-nav-agileits w3layouts-acc-nav-agileits-3">-->
<!--										<p>WOMEN</p>-->
<!--										<a href="womens_accessories.html"><img src="images/other-nav-2.jpg" alt="Groovy Apparel"></a>-->
<!--									</div>-->
<!---->
<!--									<div class="col-sm-3 w3layouts-nav-agile w3layouts-acc-nav-agileits w3layouts-acc-nav-agileits-4">-->
<!--										<p>ACCESSORIES</p>-->
<!--										<a href="mens_accessories.html"><img src="images/other-nav-3.jpg" alt="Groovy Apparel"></a>-->
<!--									</div>-->
<!---->
<!--									<div class="clearfix"></div>-->
<!--									<p class="promo">Use Promo Code <span>#CFFGTY56</span> and take 30% off the products. <a href="#">Details</a></p>-->
<!--								</div>-->
<!---->
<!--							</ul>-->
<!--						</li>-->
<!---->
<!--						<li class="dropdown">-->
<!--							<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown"><span> HOTLIST </span></a>-->
<!--							<ul class="dropdown-menu multi multi4">-->
<!--								<div class="row">-->
<!---->
<!--									<div class="col-sm-3 w3layouts-nav-agile w3layouts-hot-nav-agileits w3layouts-hot-nav-agileits-1">-->
<!--										<ul class="multi-column-dropdown">-->
<!--											<li class="heading">FEATURED</li>-->
<!--											<li><a href="womens_accessories.html"><i class="fa fa-angle-right" aria-hidden="true"></i>New Arrivals</a></li>-->
<!--											<li><a href="womens_accessories.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Online Only</a></li>-->
<!--											<li><a href="womens_accessories.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Brands</a></li>-->
<!--											<li><a href="womens_accessories.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Clearance Sale</a></li>-->
<!--											<li><a href="womens_accessories.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Discount Store</a></li>-->
<!--											<li><a href="womens_accessories.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Editor's Pick</a></li>-->
<!--										</ul>-->
<!--									</div>-->
<!---->
<!--									<div class="col-sm-3 w3layouts-nav-agile w3layouts-hot-nav-agileits w3layouts-hot-nav-agileits-2">-->
<!--										<p>MEN</p>-->
<!--										<a href="mens.html"><img src="images/other-nav-1.jpg" alt="Groovy Apparel"></a>-->
<!--									</div>-->
<!---->
<!--									<div class="col-sm-3 w3layouts-nav-agile w3layouts-hot-nav-agileits w3layouts-hot-nav-agileits-3">-->
<!--										<p>WOMEN</p>-->
<!--										<a href="womens.html"><img src="images/other-nav-2.jpg" alt="Groovy Apparel"></a>-->
<!--									</div>-->
<!---->
<!--									<div class="col-sm-3 w3layouts-nav-agile w3layouts-hot-nav-agileits w3layouts-hot-nav-agileits-4">-->
<!--										<p>ACCESSORIES</p>-->
<!--										<a href="mens_accessories.html"><img src="images/other-nav-3.jpg" alt="Groovy Apparel"></a>-->
<!--									</div>-->
<!---->
<!--									<div class="clearfix"></div>-->
<!--									<p class="promo">Use Promo Code <span>#CFFGTY56</span> and take 30% off the products. <a href="#">Details</a></p>-->
<!--								</div>-->
<!---->
<!--							</ul>-->
<!--						</li>-->
<!--						<li><a href="about.html">ABOUT</a></li>-->
<!--						<li class="wthreesearch">-->
<!--							<form action="#" method="post">-->
<!--								<input type="search" name="Search" placeholder="Search for a Product" required="">-->
<!--								<button type="submit" class="btn btn-default search" aria-label="Left Align">-->
<!--									<i class="fa fa-search" aria-hidden="true"></i>-->
<!--								</button>-->
<!--							</form>-->
<!--						</li>-->
<!--						<li class="wthreecartaits wthreecartaits2 cart cart box_1"> -->
<!--						 <form action="#" method="post" class="last"> -->
<!--								<input type="hidden" name="cmd" value="_cart" />-->
<!--								<input type="hidden" name="display" value="1" />-->
<!--								<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>-->
<!--							</form>   -->
<!--						</li>-->
<!--					</ul>-->
<!--				</div>-->
<!---->
<!--			</div>-->
<!--		</nav>-->
<!--		<!-- //Navigation -->
<!---->
<!---->
<!---->
<!--		<!-- Header-Top-Bar-(Hidden) -->
<!--		<div class="agileheader-topbar">-->
<!--			<div class="container">-->
<!--				<div class="col-md-6 agileheader-topbar-grid agileheader-topbar-grid1">-->
<!--					<p>Free shipping on orders over $150. <a href="payment.html">Details</a></p>-->
<!--				</div>-->
<!--				<div class="col-md-6 agileheader-topbar-grid agileheader-topbar-grid2">-->
<!--					<ul>-->
<!--						<li><a href="stores.html">Store Locator</a></li>-->
<!--						<li><a href="faq.html">FAQ</a></li>-->
<!--						<li><a class="popup-with-zoom-anim" href="#small-dialog1">Login</a></li>-->
<!--						<li><a class="popup-with-zoom-anim" href="#small-dialog2">Sign Up</a></li>-->
<!--						<li><a href="codes.html">Codes</a></li>-->
<!--						<li><a href="icons.html">Icons</a></li>-->
<!--						<li><a href="contact.html">Contact</a></li>-->
<!--					</ul>-->
<!--				</div>-->
<!--				<div class="clearfix"></div>-->
<!--			</div>-->
<!---->
<!--				<!-- Popup-Box -->
<!--				<div id="popup">-->
<!--					<div id="small-dialog1" class="mfp-hide agileinfo">-->
<!--						<div class="pop_up">-->
<!--							<form action="#" method="post">-->
<!--								<h3>LOGIN</h3>-->
<!--								<input type="text" Name="Userame" placeholder="Username" required="">-->
<!--								<input type="password" Name="Password" placeholder="Password" required="">-->
<!--								<ul class="tick w3layouts agileinfo">-->
<!--									<li>-->
<!--										<input type="checkbox" id="brand1" value="">-->
<!--										<label for="brand1"><span></span>Remember me</label>-->
<!--									</li>-->
<!--									<li>-->
<!--										<a href="#">Forgot Password?</a>-->
<!--									</li>-->
<!--								</ul>-->
<!--								<div class="send-button wthree agileits">-->
<!--									<input type="submit" value="LOGIN">-->
<!--								</div>-->
<!--							</form>-->
<!--						</div>-->
<!--					</div>-->
<!--					<div id="small-dialog2" class="mfp-hide agileinfo">-->
<!--						<div class="pop_up">-->
<!--							<form action="#" method="post">-->
<!--								<h3>SIGN UP</h3>-->
<!--								<input type="text" Name="Name" placeholder="Name" required="">-->
<!--								<input type="text" Name="Email" placeholder="Email" required="">-->
<!--								<input type="password" Name="Password" placeholder="Password" required="">-->
<!--								<input type="text" Name="Phone Number" placeholder="Phone Number" required="">-->
<!--								<div class="send-button wthree agileits">-->
<!--									<input type="submit" value="SIGN UP">-->
<!--								</div>-->
<!--							</form>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--				<!-- //Popup-Box -->
<!---->
<!--		</div>-->
<!--		<!-- //Header-Top-Bar-(Hidden) -->
<!---->
<!--	</div>-->
	<!-- //Header -->


	<!-- Single-Product-View -->
	<div class="w3aitssinglewthree">
		<div class="container">

			<div class="products">
			<div class="single-page">
				<div class="single-page-row" id="detail-21">
					<div class="col-md-6 single-top-left">
						<div class="flexslider">
							<ul class="slides">
								<li data-thumb="{{asset('img/Event_1.jpg')}}">
									<div class="thumb-image detail_images"> <img src="{{asset('img/Event_1.jpg')}}" data-imagezoom="true" class="img-responsive" alt="Groovy Apparel"></div>
								</li>
								<li data-thumb="{{asset('img/Event_2.jpg')}}">
									 <div class="thumb-image"> <img src="{{asset('img/Event_2.jpg')}}" data-imagezoom="true" class="img-responsive" alt="Groovy Apparel"></div>
								</li>
								<li data-thumb="{{asset('img/Event_3.jpg')}}">
									<div class="thumb-image"> <img src="{{asset('img/Event_3.jpg')}}" data-imagezoom="true" class="img-responsive" alt="Groovy Apparel"></div>
								</li> 
							</ul>
						</div>
					</div>
					<div class="col-md-6 single-top-right">
						<h1 class="item_name Per-Header2" style="color: #0b0b0b">نمونه تفریحی 1</h1>
<!--						<p>This item will be delivered within 5-10 working days.</p>-->
						<div class="rating">
							<span class="starRating">
								<input id="rating5" type="radio" name="rating" value="5">
								<label for="rating5">5</label>
								<input id="rating4" type="radio" name="rating" value="4" checked>
								<label for="rating4">4</label>
								<input id="rating3" type="radio" name="rating" value="3">
								<label for="rating3">3</label>
								<input id="rating2" type="radio" name="rating" value="2">
								<label for="rating2">2</label>
								<input id="rating1" type="radio" name="rating" value="1">
								<label for="rating1">1</label>
							</span>
						</div>
						<div class="single-price">
							<ul class="Per-Font">
								<li >225،000،000 <small class="Per-Font">10% تخفیف</small></li>
								<li class="Per-Font"><del>250،000،000</del></li>
								<li> </li>
<!--								<li><a href="#"><i class="fa fa-gift" aria-hidden="true"></i>خرید</a></li>-->
							</ul>
						</div>
						<p class="single-price-text Per-Font2">سفر لوکس به یادماندی را با قیمت باورنکردنی تجربه کنید</p>
						<div class="cbp-pgcontent aitssinglew3" id="mens_single">
							{{--<button class="btn btn-danger agileits my-cart-btn Per-Font-btn" data-id="mens_single" data-name="Black Leather Jacket" data-summary="Black Leather Jacket" data-price="67.5" data-quantity="1" data-image="images/s1.jpg"><i class="fa fa-cart-plus" aria-hidden="true"></i>خرید</button>--}}
							<form action="/purchases" method="post">
								<input type='hidden' name="token" value={{$token}} />
								<input type='hidden' name="offer_id" value={{$item_id}} />
								<input type='hidden' name="count" value=1 />
								<input class="btn btn-danger agileits my-cart-btn Per-Font-btn" type="submit" value="خرید">
							</form>
							<div class="clearfix"></div>
						</div>

						<div class="agilesocialwthree">
							<h4 class="Per-Header">این خدمت را به اشتراک بگذارید</h4>
							<ul class="social-icons">
								<li><a href="#" class="facebook w3ls" title="Go to Our Facebook Page"><i class="fa w3ls fa-facebook-square" aria-hidden="true"></i></a></li>
								<li><a href="#" class="twitter w3l" title="Go to Our Twitter Account"><i class="fa w3l fa-twitter-square" aria-hidden="true"></i></a></li>
								<li><a href="#" class="googleplus w3" title="Go to Our Google Plus Account"><i class="fa w3 fa-google-plus-square" aria-hidden="true"></i></a></li>
								<li><a href="#" class="instagram wthree" title="Go to Our Instagram Account"><i class="fa wthree fa-instagram" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>

			<div class="aitsaccordionw3layouts">
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title asd">
								<a class="pa_italic Per-Font" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">توضیحات <span class="glyphicon glyphicon glyphicon-chevron-down" aria-hidden="true"></span><i class="glyphicon glyphicon-menu-up" aria-hidden="true"></i>
								</a>
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body panel_text">
								<div class="scrollbar Per-Font-Parag" id="style-2">
									توضیحات خدمت 1
								</div>
							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingTwo">
							<h4 class="panel-title asd">
								<a class="pa_italic Per-Font" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">شرایط استفاده <span class="glyphicon glyphicon glyphicon-chevron-down" aria-hidden="true"></span><i class="glyphicon glyphicon-menu-up" aria-hidden="true"></i>
								</a>
							</h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="panel-body panel_text">
								<div class="scrollbar Per-Font-Parag" id="style-2">
									شرایط خدمت 1
								</div>
							</div>
						</div>
					</div>

					<!--<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingTwo">
							<h4 class="panel-title asd">
								<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">شرایط استفاده<span class="glyphicon glyphicon glyphicon-chevron-down" aria-hidden="true"></span><i class="glyphicon glyphicon-menu-up" aria-hidden="true"></i>
								</a>
							</h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="accordion-image">
								<div class="ac-img">
									<a href="#"><img src="images/product-1.jpg" alt="Groovy Apparel"></a>
								</div>
								<div class="ac-img">
									<a href="#"><img src="images/product-2.jpg" alt="Groovy Apparel"></a>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>-->

					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingThree">
							<h4 class="panel-title asd">
								<a class="pa_italic Per-Font" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">نظرات کاربران (40+) <span class="glyphicon glyphicon glyphicon-chevron-down" aria-hidden="true"></span><i class="glyphicon glyphicon-menu-up" aria-hidden="true"></i>
								</a>
							</h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							<h3 class="Per-Font">"سفری بسیار جذاب"</h3>
							<h4 class="Per-Font-btn">کاربر 1. کاربر تایید شده</h4>
							<p class="Per-Font-Parag">نظرات کاربر 1 درباره سفر</p>
<!--							<span>5 Stars</span>-->
							<a href="#" class="next Per-Font-btn">نظر بعدی &rarr;</a>
						</div>
					</div>

					<!--<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingFour">
							<h4 class="panel-title asd">
								<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Shipping Info <span class="glyphicon glyphicon glyphicon-chevron-down" aria-hidden="true"></span><i class="glyphicon glyphicon-menu-up" aria-hidden="true"></i>
								</a>
							</h4>
						</div>
						<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
							<h3>Shipping</h3>
							<ul class="ship">
								<li class="day"><i class="fa fa-calendar" aria-hidden="true"></i> 5-10 Business Days</li>
								<li class="home"><i class="fa fa-truck" aria-hidden="true"></i> Free Home Delivery</li>
								<li class="cod"><i class="fa fa-male" aria-hidden="true"></i> Cash On Delivery Available*</li>
							</ul>
						</div>
					</div>-->
				</div>
			</div>

		</div>

		</div>
	</div>
	<!-- //Single-Product-View -->



	<!-- Newsletter -->
	<!--<div class="w3lsnewsletter" id="w3lsnewsletter">
		<div class="container">
			<div class="w3lsnewsletter-grids">
				<div class="col-md-5 w3lsnewsletter-grid w3lsnewsletter-grid-1 subscribe">
					<h2>Subscribe to our Newsletter</h2>
				</div>
				<div class="col-md-7 w3lsnewsletter-grid w3lsnewsletter-grid-2 email-form">
					<form action="#" method="post">
						<input class="email" type="email" name="Email" placeholder="Email Address" required="">
						<input type="submit" class="submit" value="SUBSCRIBE">
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>-->
	<!-- //Newsletter -->



	<!-- Footer -->
<footer>
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
<!--				<a class="smalllogo2 logo" href="index.php"><img src="img/Logo_Footer_Full.png" alt=""></a>-->
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 footercol">
				<p class="footerpriv">&copy; 2016 Omid Yazdizadeh &bull; <a class="privacylink" href="index-5.html">Privacy policy</a><!-- {%FOOTER_LINK} --></p>
			</div>
		</div>
	</div>
</footer>
	<!--<div class="agileinfofooter">
		<div class="agileinfofooter-grids">

			<div class="col-md-4 agileinfofooter-grid agileinfofooter-grid1">
				<ul>
					<li><a href="about.html">ABOUT</a></li>
					<li><a href="mens.html">MEN'S</a></li>
					<li><a href="mens_accessories.html">MEN'S ACCESSORIES</a></li>
					<li><a href="womens.html">WOMEN'S</a></li>
					<li><a href="womens_accessories.html">WOMEN'S ACCESSORIES</a></li>
				</ul>
			</div>

			<div class="col-md-4 agileinfofooter-grid agileinfofooter-grid2">
				<ul>
					<li><a href="stores.html">STORE LOCATOR</a></li>
					<li><a href="faq.html">FAQs</a></li>
					<li><a href="codes.html">CODES</a></li>
					<li><a href="icons.html">ICONS</a></li>
					<li><a href="contact.html">CONTACT</a></li>
				</ul>
			</div>

			<div class="col-md-4 agileinfofooter-grid agileinfofooter-grid3">
				<address>
					<ul>
						<li>40019 Parma Via Modena</li>
						<li>Sant'Agata Bolognese</li>
						<li>BO, Italy</li>
						<li>+1 (734) 123-4567</li>
						<li><a class="mail" href="mailto:mail@example.com">info@example.com</a></li>
					</ul>
				</address>
			</div>
			<div class="clearfix"></div>

		</div>
	</div>
	<!-- //Footer -->



	<!-- Copyright -->
	<!--<div class="w3lscopyrightaits">
		<div class="col-md-8 w3lscopyrightaitsgrid w3lscopyrightaitsgrid1">
			<p>© 2017 Groovy Apparel. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="=_blank"> W3layouts </a></p>
		</div>
		<div class="col-md-4 w3lscopyrightaitsgrid w3lscopyrightaitsgrid2">
			<div class="agilesocialwthree">
				<ul class="social-icons">
					<li><a href="#" class="facebook w3ls" title="Go to Our Facebook Page"><i class="fa w3ls fa-facebook-square" aria-hidden="true"></i></a></li>
					<li><a href="#" class="twitter w3l" title="Go to Our Twitter Account"><i class="fa w3l fa-twitter-square" aria-hidden="true"></i></a></li>
					<li><a href="#" class="googleplus w3" title="Go to Our Google Plus Account"><i class="fa w3 fa-google-plus-square" aria-hidden="true"></i></a></li>
					<li><a href="#" class="instagram wthree" title="Go to Our Instagram Account"><i class="fa wthree fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="#" class="youtube w3layouts" title="Go to Our Youtube Channel"><i class="fa w3layouts fa-youtube-square" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>-->
	<!-- //Copyright -->



	<!-- Custom-JavaScript-File-Links -->

<!-- Default-JavaScript --><script src="{{asset('js/jquery-2.2.3.js')}}"></script>
<script src="{{asset('js/modernizr.custom.js')}}"></script>
	<!-- Custom-JavaScript-File-Links -->

	<!-- cart-js -->
	<script src="{{asset('js/minicart.js')}}"></script>
	<script>
        w3l.render();

        w3l.cart.on('w3agile_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) { 
        		}
        	}
        });
    </script>  
	<!-- //cart-js --> 


		<!-- Dropdown-Menu-JavaScript -->
			<script>
				$(document).ready(function(){
					$(".dropdown").hover(
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
							$(this).toggleClass('open');
						},
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
							$(this).toggleClass('open');
						}
					);
				});
			</script>
		<!-- //Dropdown-Menu-JavaScript -->

		<!-- Popup-Box-JavaScript -->
			<script src="{{asset('js/jquery.magnific-popup.js')}}" type="text/javascript"></script>
			<script>
				$(document).ready(function() {
					$('.popup-with-zoom-anim').magnificPopup({
						type: 'inline',
						fixedContentPos: false,
						fixedBgPos: true,
						overflowY: 'auto',
						closeBtnInside: true,
						preloader: false,
						midClick: true,
						removalDelay: 300,
						mainClass: 'my-mfp-zoom-in'
					});
				});
			</script>
		<!-- //Popup-Box-JavaScript -->

		<!-- FlexSlider-JavaScript -->
			<script defer src="{{asset('js/jquery.flexslider.js')}}"></script>
			<script>
				$(window).load(function() {
					$('.flexslider').flexslider({
						animation: "slide",
						controlNav: "thumbnails"
					});
				});
			</script>
		<!-- //FlexSlider-JavaScript -->

<!--		<script src="js/imagezoom.js"></script>-->

	<!-- //Custom-JavaScript-File-Links -->

		<!-- Bootstrap-JavaScript --> <script src="{{asset('js/bootstrap.js')}}"></script>

</body>
<!-- //Body -->



</html>