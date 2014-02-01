<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/transitional.dtd">
<?php // Some setup
date_default_timezone_set('America/New_York');
$curstyle = "default";
$dmonth = date('m');
$dday = date('d');
$ddayi = intval($dday);
if ($dmonth == "06" || $dmonth == "07" || $dmonth == "08") {
	$curstyle = "summer";
}
if ($dmonth == "09" || $dmonth == "10" || $dmonth == "11") {
	$curstyle = "fall";
}
if ($dmonth == "12" || $dmonth == "01" || $dmonth == "02") {
	$curstyle = "winter";
}
if ($dmonth == "03" || $dmonth == "04" || $dmonth == "05") {
	$curstyle = "spring";
}
if ($dmonth == "07" && $dday == "04") { 
	$curstyle = "july4";
} elseif (($dmonth == "10" && $ddayi <= 31 && $ddayi >= 26) || ($dmonth == "11" && $dday == "01")) { 
	$curstyle = "halloween";/*
} elseif ($dmonth == "11" && $ddayi <= 25 && $ddayi >= 21) {
	$curstyle = "thanksgiving";*/
} elseif ($dmonth == "12" && $ddayi <= 26 && $ddayi >= 11) {
	$curstyle = "christmas";
} elseif ($dmonth == "01" && $ddayi == 18) {
	$curstyle = "stopsopa";
}
if ($_GET) {
	$hkey = $_GET['hkey'];
	if ($hkey == "july4") {
		$curstyle = "july4";
	}
	if ($hkey == "spring") {
		$curstyle = "spring";
	}
	if ($hkey == "summer") {
		$curstyle = "summer";
	} 
	if ($hkey == "halloween") {
		$curstyle = "halloween";
	}
	if ($hkey == "winter") {
		$curstyle = "winter";
	}
	if ($hkey == "thanksgiving") {
		$curstyle = "thanksgiving";
	}
	if ($hkey == "christmas") {
		$curstyle = "christmas";
	}
	if ($hkey == "stopsopa") {
		$curstyle = "stopsopa";
	}
}
?>
<html>
<head>
	<title>
		<?php bloginfo('name'); ?> <?php wp_title(); ?>
	</title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="description" content="The Delightworks! Making magic in business and life - by Noëlle Anthony" />
	<meta name="keywords" content="Delight, Delightworks, Delight Specialist, Joy, Marketing, Online Business, Happiness" />

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/ico" href="/favicon.ico" />

	<!-- RSS Feed for The Delightworks -->
	<link rel="alternate" type="application/rss+xml" title="RSS" href="http://feeds.feedburner.com/DelightSpecialist" />

	<!-- CSS Styling -->
	<!-- Link to YUI Reset CSS -->
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.8.0r4/build/reset/reset-min.css" />

	<!-- Local Custom CSS -->	
	<?php // if ($curstyle != "default") {
	?>
	<!-- link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style-<?php echo $curstyle; ?>.css" / -->
	<?php // } else { ?>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css" />
	<?php // } ?>
	<!-- Archives -->

	<?php wp_get_archives('type=monthly&format=link'); ?>

	<!-- Plugin Header -->

	<?php wp_head(); ?>

	<script src="/jquery-1.7.1.min.js" type="text/javascript"></script>

	<!-- Javascript -->
	<script type="text/javascript">
		// Function to allow one JavaScript file to be included by another.
		// Copyright (C) 2006-08 www.cryer.co.uk
		function IncludeJavaScript(jsFile)
		{
		  document.write('<script type="text/javascript" src="' + jsFile + '"></scr' + 'ipt>'); 
		}

		// IE fix for div widths - size header to width of content
		if (!$.support.cssFloat) {
		 	$("div:has(.boxheader) > table").each(function () {
				$(this).parent().width($(this).width());
			});
		}

		// Function to hide/show a Hidden Mickey
		function mickeySwitch(mickey) {
			elMickey = "#" + mickey;
			mickeyShow = $(elMickey).css('display');
			if (mickeyShow == "block") {
				$(elMickey).css('display','none');
			} else {
				$(elMickey).css('display','block');
			}
		}
		$(document).ready(function() {
			$(".nonlink").click(function() {
				return false;
			});
		});

		function audioToggle(theEl) {
			if (theEl == "text") {
				$('#at_audio').hide();
				$('#at_text').show();
			} else if (theEl == "audio") {
				$('#at_text').hide();
				$('#at_audio').show();
			}
			return false;
		}
	</script>
	<!-- <script src="cufon-yui.js" type="text/javascript"></script> -->
	<?php //include($stylefont); ?>

	<!-- Google Analytics Code -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-31313933-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>

<body>

<?php if ($curstyle == "stopsopa") { ?>
<div id="stopsopa">
<h2>The Delightworks is closed today.</h2>
The <strong>Stop Online Piracy Act</strong> and the <strong>Protect IP Act</strong> are dangerous, ill-advised bills that endanger a free and open web and create significant - in some cases insurmountable - obstacles to businesses attempting to operate online. <br />
<br />
You can learn more about this protest <a href="http://wikimediafoundation.org/wiki/English_Wikipedia_anti-SOPA_blackout">here</a>.<br />
<br />
The Delightworks will resume operation on Thursday, January 19.
</div>
<?php } ?>

<div id="container">
	<div id="header">
		<div id="topnav">
			<ul>
				<li><a href="/delightineering">Work with me!</a></li>
				<li><a href="/delighbrary">Browse the Delighbrary!</a></li>
			</ul>
				<br />
			<ul>
				<li><a href="/magic-manuals">Shop in the Delightworks Store!</a></li>
				<li><a href="/about">Learn more about Delight!</a></li>
			</ul>		
		</div>
		<?php //if ($curstyle != "default") { ?>
		<!-- a href="/"><img id="logoImage" src="<?php bloginfo('template_url'); ?>/img/delightworks-logo-<?php echo $curstyle; ?>.png" border="0" /></a -->
		<?php //} else { ?>
		<a href="/"><img id="logoImage" src="<?php bloginfo('template_url'); ?>/img/delightworksheader-12-04-18.png" border="0" /></a>
		<?php //} ?>
		<br clear="all">
	</div>
	<br clear="all" />
	<div id="about" class="sticky">
		<a href="/about">Find out more about the Delightworks!</a>
	</div>
	<div id="consulting" class="sticky">
		<a href="/delightineering">Book a Delightineering consultation today!</a>
	</div>
	<div id="main">
<?php if (is_front_page() && $curstyle == "halloween") : ?><p id="disneyquote">"When hinges creak in doorless chambers, and strange and frightening sounds echo through the halls --<br />
Whenever candlelights flicker where the air is deathly still --<br />
That is the time when ghosts are present, practicing their terror with ghoulish delight!"<br />
-<a href=#" class="nonlink" title="From the Haunted Mansion at Walt Disney World's Magic Kingdom">The Ghost Host</a><br />
</blockquote>
<br /><?php elseif (is_front_page()) : ?><p id="disneyquote">"All I want you to think about is that when people walk through or ride through or have access to anything that you design, I want them, when they leave, to have smiles on their faces. Just remember that; it's all I ask of you."<br />
<br />
-<a href="#" class="nonlink" title="Speaking to one of his architects during the development of Disneyland.">Walt Disney</a><br />
</p>
<br /><?php endif; ?>