<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

	<!-- Your Basic Site Informations -->
	<title>ENTREGA - Kravu piegāde „No durvīm līdz durvīm”, Kravu Pārvadājumi, Loģistika, Transporta Pakalpojumi, Espedīcija</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="description" content="доставка, доставка грузов, грузоперевозки, грузовые перевозки, pārvadājumi, kravu pārvadājumi, kravas, shipping, freight shipping, cargo, freight" />
    <meta name="keywords" content="доставка, доставка грузов, грузоперевозки, грузовые перевозки, pārvadājumi, kravu pārvadājumi, kravas, shipping, freight shipping, cargo, freight" />
    <meta name="author" content="ralfie" />
    
    <!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/layout.css">
    
    <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    
    <noscript><link rel="stylesheet" href="xcss/no-js.css"></noscript>
    
    <!-- Favicons -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    
</head>

<body>
<div style="width:100%;height:50px;text-align:right;background:#fef900;"><img src="../images/logo-s.png" style="height:50px;margin:0 100px 0 0;"alt="" /></div>


<script type="text/javascript" src="../jsslider/jssor.js"></script>
<script type="text/javascript" src="../jsslider/jssor.slider.js"></script>
<script>
jssor_slider1_starter = function (containerId) {
	var _CaptionTransitions = [];
	var options = {
	$FillMode: 2,                                       //[Optional] The way to fill image in slide, 0 stretch, 1 contain (keep aspect ratio and put all inside slide), 2 cover (keep aspect ratio and cover whole slide), 4 actual size, 5 contain for large image, actual size for small image, default value is 0
	$AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
	$AutoPlayInterval: 40000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
	$PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1
	$ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
	$SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
	$SlideDuration: 800,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
	$MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
	$SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
	$DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
	$ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
	$UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
	$PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
	$DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
	$CaptionSliderOptions: {                            //[Optional] Options which specifies how to animate caption
	$Class: $JssorCaptionSlider$,                   //[Required] Class to create instance to animate caption
	$CaptionTransitions: _CaptionTransitions,       //[Required] An array of caption transitions to play caption, see caption transition section at jssor slideshow transition builder
	$PlayInMode: 1,                                 //[Optional] 0 None (no play), 1 Chain (goes after main slide), 3 Chain Flatten (goes after main slide and flatten all caption animations), default value is 1
	$PlayOutMode: 3                                 //[Optional] 0 None (no play), 1 Chain (goes before main slide), 3 Chain Flatten (goes before main slide and flatten all caption animations), default value is 1
	},

	$BulletNavigatorOptions: {                          //[Optional] Options to specify and enable navigator or not
	$Class: $JssorBulletNavigator$,                 //[Required] Class to create navigator instance
	$ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
	$AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
	$Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
	$Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
	$SpacingX: 8,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
	$SpacingY: 8,                                   //[Optional] Vertical space between each item in pixel, default value is 0
	$Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
	},

	$ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
	$Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
	$ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
	$AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
	$Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
	}
};

var jssor_slider1 = new $JssorSlider$(containerId, options);
function ScaleSlider() {
var bodyWidth = document.body.clientWidth;
if (bodyWidth)
	jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 1920));
else
	$Jssor$.$Delay(ScaleSlider, 30);
}
ScaleSlider();
$Jssor$.$AddEvent(window, "load", ScaleSlider);
$Jssor$.$AddEvent(window, "resize", $Jssor$.$WindowResizeFilter(window, ScaleSlider));
$Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
};
</script>

<div id="slider1_container" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
	<div u="loading" style="position: absolute; top: 0px; left: 0px;">
		<div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
		<div style="position: absolute; display: block; background: url(../images/loading.gif) no-repeat center center; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
	</div>
	<div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1300px; height: 500px; overflow: hidden;">
		<div><img u="image" src="../images/base-top.jpg" /></div>
		<div><img u="image" src="../images/base-top.jpg" /></div>
		<div><img u="image" src="../images/base-top.jpg" /></div>
	</div>

<style>
.jssorb21 {position: absolute;}
.jssorb21 div, .jssorb21 div:hover, .jssorb21 .av {
	position: absolute;
	/* size of bullet elment */
	width: 19px;
	height: 19px;
	text-align: center;
	line-height: 19px;
	color: white;
	font-size: 12px;
	background: url(../img/b21.png) no-repeat;
	overflow: hidden;
	cursor: pointer;
}
.jssorb21 div { background-position: -5px -5px; }
.jssorb21 div:hover, .jssorb21 .av:hover { background-position: -35px -5px; }
.jssorb21 .av { background-position: -65px -5px; }
.jssorb21 .dn, .jssorb21 .dn:hover { background-position: -95px -5px; }
</style>
		
<div u="navigator" class="jssorb21" style="bottom: 26px; right: 6px;"><div u="prototype"></div></div>
		
<style>
.jssora21l, .jssora21r {
	display: block;
	position: absolute;
	/* size of arrow element */
	width: 55px;
	height: 55px;
	cursor: pointer;
	background: url(../img/a21.png) center center no-repeat;
	overflow: hidden;
}
.jssora21l { background-position: -3px -33px; }
.jssora21r { background-position: -63px -33px; }
.jssora21l:hover { background-position: -123px -33px; }
.jssora21r:hover { background-position: -183px -33px; }
.jssora21l.jssora21ldn { background-position: -243px -33px; }
.jssora21r.jssora21rdn { background-position: -303px -33px; }
</style>

<span u="arrowleft" class="jssora21l" style="top: 123px; left: 8px;"></span>
<span u="arrowright" class="jssora21r" style="top: 123px; right: 8px;"></span>

</div>

<script> jssor_slider1_starter('slider1_container');</script>


<div id="main">
  <div class="container">
  
   <div class="features">
    <div class="header">
     <h2>ENTREGA YOUR PARTNER IN LOGISTIC</h2>
     <p>DELIVERY OF GOODS FROM DOOR TO DOOR</p>
    </div>
    
    <div class="row">
	
     <div class="span6 item"> <!-- two -->
      <img src="images/features/Box.png" alt="Icon" />
      <div class="content">
       <h4>Cargo carriage</h4>
       <p>We deal with any types of cargo transportation: fractional load, assemble load, full load, non-standard load, non-sized load, liquid load and hazardous load.</p>
      </div>
     </div>
	 
     <div class="span6 item"> <!-- two -->
      <img src="images/features/Calender.png" alt="Icon" />
      <div class="content">
       <h4>Logistic</h4>
       <p>We provide transport services from Baltic countries, Europe, Russia, Belorussia, Ukrain. Our colleagues, will find the best solution, to deliver your cargo. ENTREGA - trusted and professional partner, ready for any difficulty and task. We provide particular approach to every customer.</p>
      </div>
     </div>  
	 
    </div> <!-- End row -->
    
    <div class="row">
	
     <div class="span6 item"> <!-- one -->
      <img src="images/features/Database.png" alt="Icon" />
      <div class="content">
       <h4>ENTREGA services</h4>
<ul>
<li><font face="arial, helvetica, sans-serif">Transport selection for your need </font>
</li><li><font face="arial, helvetica, sans-serif">Cargo tracking </font>
</li><li><font face="arial, helvetica, sans-serif">Forwarding cargos </font>
</li><li><font face="arial, helvetica, sans-serif">Transport planning and payment managing</font>
</li><li><font face="arial, helvetica, sans-serif">We organise multi-modules cargo transportation</font>
</li><li><font face="arial, helvetica, sans-serif">Processing documents in according with the clients needs and requirments</font></li>
</ul>
      </div>
     </div>

     <div class="span6 item"> <!-- one -->
      <img src="images/features/Web.png" alt="Icon" />
      <div class="content">
       <h4>Transporting services</h4>
       <p>We can draw partners from every European country. With wide experience of our colleagues, cargo transporting will carry out with quality and on time.</p>
<p align="left"><strong>Our company has wide range of transport:<br></strong></p>
<ul><li><font face="arial, helvetica, sans-serif">Trailers </font>
</li><li><font face="arial, helvetica, sans-serif">Half-trailers </font>
</li><li><font face="arial, helvetica, sans-serif">Refrigerator </font>
</li><li><font face="arial, helvetica, sans-serif">Platforms </font>
</li><li><font face="arial, helvetica, sans-serif">Cisterns</font></li></ul><br>
      </div>
     </div>
	 
	 

    </div> <!-- End row -->
	
	<div class="sep-border"></div> <!-- separator -->
	<div class="row">
     <div class="span6 item"> <!-- one -->
      <img src="images/features/Address_Book.png" alt="Icon" />
      <div class="content">
       <h4>Contacts</h4>
       <p>ENTREGA SIA<br>
PVN LV50103685371<br>
SWEDBANKA HABALV22 LV80HABA0551036734417<br>
Kalēju iela 54-2, Jūrmala, LV-2008, Latvija<br>
Mail: Jūrmala, LV-2008, a.k. 2<br>
Phone.: +371 25802208<br>
Phone: +371 26032246<br>
Fax: +371 67396076<br>
email: info@entrega.lv</p>
      </div>
     </div>

    </div> <!-- End row -->
   </div> <!-- End features -->
   
 
   
  </div> <!-- End container -->
 </div> <!-- End main -->
 
 <div id="footer" class="buynow">
  <div class="container">
  
   <div class="half-column about">
    <ul class="social" style="visibility: visible;">
     <li><a href="https://www.facebook.com/EntregaSIA" title="FaceBook" target="_blank"><img src="images/social/wpzoom/fb.png" alt="Facebook" /></a></li>
     <li><a href="mailto:info@entrega.lv" title="Google" target="_blank"><img src="images/social/wpzoom/gmail.png" alt="Google" /></a></li>
     <?//<li><a href="#" title="Twitter"><img src="images/social/wpzoom/twitter.png" alt="Twitter" /></a></li> ?>
     <li><a href="skype:entrega.aleksey?chat" title="Skype"><img src="images/social/wpzoom/skype.png" alt="Skype" /></a></li>
     <li><a href="http://www.linkedin.com/in/alekseymamrukov" title="LinkedIn" target="_blank"><img src="images/social/wpzoom/in.png" alt="LinkedIn" /></a></li>
    </ul>    
   </div> <!-- End half-column -->
   
   <div class="sep-border"></div> <!-- separator -->
   <div class="copyright">&copy; Copyright 2013 Entrega. All rights reserved.</div> <!-- Copyright text -->
   
  </div> <!-- End container -->
 </div> <!-- End footer -->
</body>
</html>