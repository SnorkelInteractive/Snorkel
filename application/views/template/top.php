<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Snorkel-Interactive.com<? if ($page_title!=''){ ?> - <?=$page_title;?><? } ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700|Carter+One' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="/css/bootstrap.min.css">
		<link rel="stylesheet" href="/css/bootstrap-responsive.min.css">
		<link rel="stylesheet" href="/css/styles.css">
		<link rel="shortcut icon" href="/img/favicon.ico">
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
		<script type="text/javascript" src="/js/bootstrap.min.js"></script>
		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-26374847-1']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
	</head>
	<body>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		<div class="container">
			<header class="row">
				<div class="span4">
					<h1 id="logo"><a href="/">Snorkel Interactive</a></h1>
				</div>
				<nav class="span8">
					<ul class="nav nav-pills pull-right">
						<li<? if ($page_title==''){ ?> class="active"<? } ?>><a href="/">Home</a></li>
						<li<? if ($page_title=='Portfolio'){ ?> class="active"<? } ?>><a href="/portfolio/">Portfolio</a></li>
						<li<? if ($page_title=='Services & Pricing'){ ?> class="active"<? } ?>><a href="/services/">Services & Pricing</a></li>
						<li<? if ($page_title=='Contact Us'){ ?> class="active"<? } ?>><a href="/contact/">Contact Us</a></li>
					</ul>
				</nav>
			</header>
			<section class="row">
				<div class="span12">