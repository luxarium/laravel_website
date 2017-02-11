<!DOCTYPE html>
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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/touchTouch.css">

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
<script>

    $(window).load(function() {
    var $container = $('#container');
    //Run to initialise column sizes
    updateSize();

    //Load masonry when images all loaded
    $container.imagesLoaded( function(){

        $container.isotope({
            // options
            itemSelector : '.element',
            layoutMode : 'masonry',
            transformsEnabled: true,
            columnWidth: function( containerWidth ) {
                containerWidth = $browserWidth;
                return Math.floor(containerWidth / $cols);
              }
        });
    });

	    // update columnWidth on window resize
    $(window).smartresize(function(){
        updateSize();
        $container.isotope( 'reLayout' );
    });

    //Set item size
    function updateSize() {
        $browserWidth = $container.width();
        $cols = 4;

        if ($browserWidth >= 1170) {
            $cols = 4;
        }
        else if ($browserWidth >= 800 && $browserWidth < 1170) {
            $cols = 3;
        }
        else if ($browserWidth >= 480 && $browserWidth < 800) {
            $cols = 2;
        }
        else if ($browserWidth >= 320 && $browserWidth < 480) {
            $cols = 1;
        }
        else if ($browserWidth < 401) {
            $cols = 1;
        }
        //console.log("Browser width is:" + $browserWidth);
        //console.log("Cols is:" + $cols);

        // $gutterTotal = $cols * 20;
		$browserWidth = $browserWidth; // - $gutterTotal;
        $itemWidth = $browserWidth / $cols;
        $itemWidth = Math.floor($itemWidth);

        $(".element").each(function(index){
            $(this).css({"width":$itemWidth+"px"});
        });



	  var $optionSets = $('#options .option-set'),
	      $optionLinks = $optionSets.find('a');

	  $optionLinks.click(function(){
	    var $this = $(this);
	    // don't proceed if already selected
	    if ( $this.hasClass('selected') ) {
	      return false;
	    }
	    var $optionSet = $this.parents('.option-set');
	    $optionSet.find('.selected').removeClass('selected');
	    $this.addClass('selected');

	    // make option object dynamically, i.e. { filter: '.my-filter-class' }
	    var options = {},
	        key = $optionSet.attr('data-option-key'),
	        value = $this.attr('data-option-value');
	    // parse 'false' as false boolean
	    value = value === 'false' ? false : value;
	    options[ key ] = value;
	    if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
	      // changes in layout modes need extra logic
	      changeLayoutMode( $this, options )
	    } else {
	      // otherwise, apply new options
	      $container.isotope( options );
	    }

	    return false;
	  });

    }
        // Initialize the gallery
        //$('.thumb').touchTouch();

    });

  </script>



    <!--[if lt IE 9]>
    <div style='text-align:center'><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div>
    <link rel="stylesheet" href="assets/tm/css/tm_docs.css" type="text/css" media="screen">
    <script src="assets/assets/js/html5shiv.js"></script>
    <script src="assets/assets/js/respond.min.js"></script>
  <![endif]-->
</head>

<body>
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
                    <!--<li><a href="index.php" class="Per-Font">تماس با ما</a></li>
                    <li><a href="index-1.html" class="Per-Font">درباره ما</a></li>-->
                  <li><a href="index-2.html" class="Per-Font">شهر ها</a></li>
                  <li><a href="Sections.php" class="Per-Font">تخفیف ها</a>
                        <ul>
                      <li><img src="img/arrowup.png" alt=""><a href="#">مرکزخرید</a></li>
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
    <!--==============================row6=================================-->
    <div class="row_6" style="background-image: url(/img/pattern2.jpg)">
        <div class="container">
            <h2 class="pad_bot3 Per-Header2">تخفیف های لوکس</h2>
            <div class="row" >
        		<div class="col-lg-12 col-md-12 col-sm-12">
                  <div id="options" class="clearfix">
                      <ul id="filters" class="Per-Div pagination option-set clearfix" data-option-key="filter">
                        <li><a href="#filter" data-option-value=".مرکزخرید">مرکزخرید</a></li>
                        <li><a href="#filter" data-option-value=".هتل">هتل</a></li>
                        <li><a href="#filter" data-option-value=".ماساژ ">ماساژ</a></li>
                        <li><a href="#filter" data-option-value=".آرایشگاه">آرایشگاه</a></li>
                        <li><a href="#filter" data-option-value=".تفریحی">تفریحی</a></li>
                        <li><a href="#filter" data-option-value=".رستوران">رستوران</a></li>
                        <li><a href="#filter" data-option-value="*"  class="selected">همه دسته ها</a></li>
                      </ul>
                  </div><!-- #options -->
                  <div class="containerExtra">
                  <div id="container" class="clearfix Per-Div">

                    <div class="element transition هتل" data-category="transition">
                    	<a href="Item_single.php" class="thumb"><figure class="img-polaroid"><img src="img/Catg_2.jpg" alt=""></figure></a><span class="description">هتل شماره 1</span>
                    </div>
                    <div class="element transition هتل" data-category="transition">
                    	<a href="Item_single.php" class="thumb"><figure class="img-polaroid"><img src="img/Event_1%20-%20Copy.jpg" alt=""></figure></a><span class="description">هتل شماره 2</span>
                    </div>
                    <div class="element transition رستوران" data-category="transition">
                    	<a href="Item_single.php" class="thumb"><figure class="img-polaroid"><img src="img/Event_3%20-%20Copy.jpg" alt=""></figure></a><span class="description">رستوران شماره 1</span>
                    </div>
                    <div class="element transition آرایشگاه" data-category="transition">
                    	<a href="Item_single.php" class="thumb"><figure class="img-polaroid"><img src="img/page3_img9.jpg" alt=""></figure></a><span class="description">آرایشگاه شماره 1</span>
                    </div>
                    <div class="element transition تفریحی" data-category="transition">
                    	<a href="Item_single.php" class="thumb"><figure class="img-polaroid"><img src="img/Entertainment_1.jpg" alt=""></figure></a><span class="description">تفریحی شماره 1</span>
                    </div>
                    <div class="element transition تفریحی" data-category="transition">
                    	<a href="Item_single.php" class="thumb"><figure class="img-polaroid"><img src="img/Event_2%20-%20Copy.jpg" alt=""></figure></a><span class="description">تفریحی شماره 2</span>
                    </div>
                    <div class="element transition رستوران" data-category="transition">
                    	<a href="Item_single.php" class="thumb"><figure class="img-polaroid"><img src="img/Catg_1.jpg" alt=""></figure></a><span class="description">رستوران شماره 2</span>
                    </div>
                    <div class="element transition رستوران" data-category="transition">
                    	<a href="Item_single.php" class="thumb"><figure class="img-polaroid"><img src="img/Resturant_1%20-%20Copy.jpg" alt=""></figure></a><span class="description">رستوران شماره 3</span>
                    </div>
                    <div class="element transition رستوران" data-category="transition">
                    	<a href="Item_single.php" class="thumb"><figure class="img-polaroid"><img src="img/Resturant_2%20-%20Copy.jpg" alt=""></figure></a><span class="description">رستوران شماره 4</span>
                    </div>
                    <div class="element transition مرکزخرید" data-category="transition">
                    	<a href="Item_single.php" class="thumb"><figure class="img-polaroid"><img src="img/Event_4.jpg" alt=""></figure></a><span class="description">مرکز خرید شماره 1</span>
                    </div>
                    <div class="element transition ماساژ" >
                    	<a href="Item_single.php" class="thumb"><figure ><img src="img/Catg_3%20-%20Copy.jpg" alt=""></figure></a><span class="description">ماساژ شماره 1</span>
                    </div>
		       </div>
               </div>
	        </div>
            </div>
        </div>
    </div>
</div>
<!--==============================footer=================================-->
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
<!--                <a class="smalllogo2 logo" href="index.php"><img src="img/Logo_Footer_Full.png" alt=""></a>-->
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 footercol">
                <p class="footerpriv">&copy; 2016 Omid Yazdizadeh &bull; <a class="privacylink" href="index-5.html">Privacy policy</a><!-- {%FOOTER_LINK} --></p>
            </div>
        </div>
    </div>
</footer>
<script src="js/bootstrap.min.js"></script>
</body><!-- Google Tag Manager --><!--<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->-->
</html>
