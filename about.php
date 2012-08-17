<?php
// this compresses the page :)
ob_start ("ob_gzhandler");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Namaz.me - Salah/Prayer/Ramadan times for your current city and location</title>

<meta name="description" content="Get Islamic Muslic Namaz Prayer times for your current city or location on iphone android nokia phones"/>
<meta name="keywords" content="namaz,salat,islam,times,city,iphone,android,nokia"/>

<meta http-equiv="cache-control" content="private" />
<meta http-equiv="expires" content="2592000" /> <!-- one month -->

<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="index,follow" name="robots" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link href="iwebkit/pics/homescreen.png" rel="apple-touch-icon" />
<meta content="minimum-scale=1.0, width=device-width, maximum-scale=0.6667, user-scalable=no" name="viewport" />
<link href="iwebkit/css/style.css" rel="stylesheet" type="text/css" />
<script src="iwebkit/javascript/functions.js" type="text/javascript"></script>
</head>
<body>

	<div id="topbar">
		<div id="leftnav">
			<a href="."><img alt="home" src="iwebkit/images/home.png" /></a>
		</div>
		<div id="title"><span id="l.about">About</span></div>
	</div>

	
	<div id="content">		
		<ul class="pageitem">
			<li class="textbox">

				<span id="l.aboutText1">Namaz.me is a free service provided by <a href="http://www.greensoftware.net">Green Software</a></span>
				<br/><br/>
				<span id="l.aboutText2">A number of scripts are used from various sources in Namaz.me these are:</span>
				<br/><br/>

				1. Microsoft Bing Maps API<br/>
				2. <a href="http://praytimes.org">PrayTime.js by Hamid Zarrabi-Zadeh</a><br/>
				3. IPGeo location data provided by <a href="http://ipinfodb.com">ipinfodb.com</a><br/>

				<br/>
				<span id="l.aboutText3">
				Namaz.me tries to use the w3c geolocation api whenever possible.
				But will use IP geolocation if w3c geolocation api is not supported by your web browser.
				</span>
				<br/><br/>
				<span id="l.aboutText4">
				Please report bugs or suggestions to <a href="mailto:ahmad.mushtaq@gmail.com?subject=About Namaz.me">ahmad.mushtaq@gmail.com</a>.
				</span>

			</li>
		</ul>
	</div>
	
	<div id="footer">
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="https://www.paypal.com/en_GB/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online.">
<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

		<a href="http://www.greensoftware.net">Powered by GreenSoftware</a>
	</div>
	
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript"></script>
<script src="js/cookie.js" type="text/javascript"></script>
<script src="js/settings.js" type="text/javascript"></script>
<script src="js/localize.js" type="text/javascript"></script>	
<script type="text/javascript">
var settings=new Settings()
var locale=new Locale(settings)

</script>
</body>
</html>
