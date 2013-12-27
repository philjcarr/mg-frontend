<!doctype html>
<!--[if lt IE 7]><html class="no-js ie6 oldie" lang="en"><![endif]-->
<!--[if IE 7]><html class="no-js ie7 oldie" lang="en"><![endif]-->
<!--[if IE 8]><html class="no-js ie8 oldie" lang="en"><![endif]-->
<!--[if IE 9]><html class="no-js ie9 oldie" lang="en"><![endif]-->
<!--[if IE 10]><html class="no-js ie10 oldie" lang="en"><![endif]-->
<!--[if gt IE 10]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Music Gateway</title>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
	<link rel="icon" href="/favicon.ico" />
	
	<!-- The Grid - REMEMBER TO UPDATE WITH THE IE9 GRID FIXES - PUT THESE INTO THE GRID LESS FILE -->
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="/css/bootstrap-responsive.css" />
	
	<!-- Styles -->
	<link rel="stylesheet" type="text/css" href="/css/style.css" />

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body>

<header>
	<!-- Nav Start -->
	<nav>
		<!-- Nav Container Start -->
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<?php
						$path = $_SERVER['DOCUMENT_ROOT'];
						$path .= "/includes/nav.php";
						include_once($path);
					?>                       
				</div>
			</div>
		</div>
		<!-- Nav Contaciner End -->
	</nav>
	<!-- Nav End -->
</header>
