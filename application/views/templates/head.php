<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<title><?php echo isset($title) ? $title : "Command Center";?></title>

	<!-- Bootstrap and styles -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- For PostCSS setup, git clone https://github.com/DrewDouglass/Default-Gulp-Configuration.git && npm install -->
	<?php echo link_tag("public/dist/style.css"); ?>

	<!-- jQuery, Bootstrap js, etc -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="<?php echo base_url();?>public/bower_components/chart.js/dist/Chart.min.js"></script>
	<script src="<?php echo base_url();?>public/bower_components/matchHeight/dist/jquery.matchHeight-min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="<?php echo base_url();?>public/bower_components/main.js"></script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div id="wrapper">