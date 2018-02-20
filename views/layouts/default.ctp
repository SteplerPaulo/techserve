<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Home | TechServe</title>
		
		<?php 
			echo $this->Html->css('bootstrap.min');
			echo $this->Html->css('template\font-awesome-4.4.0\css\font-awesome');
			echo $this->Html->css('animate.min');
			echo $this->Html->css('prettyPhoto');
			echo $this->Html->css('main');
			echo $this->Html->css('responsive');
			echo $this->Html->css('techserve');
		?>
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<script src="js/respond.min.js"></script>
			<![endif]-->
		<link rel="shortcut icon" href="img/ico/favicon.ico">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="img/ico/apple-touch-icon-57-precomposed.png">
	</head> 
	<body class="homepage" ng-app="App">
		<header id="header">
			<nav class="navbar navbar-inverse" role="banner">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="javascript:void()"><img src="img/hysonic.png"  alt="logo"></a>
					</div>
				</div> 
			</nav> 
		</header> 
		<?php echo $content_for_layout; ?>
		
		<footer id="footer" class="midnight-blue">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						&copy; 2016 <a target="_blank" href="#" title="Free Twitter Bootstrap WordPress Themes and HTML templates">TECHSERVE</a>. All Rights Reserved.
					</div>
					<div class="col-sm-6">
						<ul class="pull-right">
							<li><a href="#">About Us</a></li>
							<li><a href="#">Faq</a></li>
							<li><a href="#">Contact Us</a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer> 
		
		<?php
			echo $this->Html->script(array('jquery')); 
			echo $this->Html->script(array('bootstrap.min')); //Bootstrap Core JavaScript
			echo $this->Html->script('constant');
			echo $this->Html->script(array('template/angular.min'));// Angular v1.5.9 (Dependencies for bootstrap modal)
			echo $this->Html->script(array('template/angular-sanitize'));
			echo $this->Html->script(array('angularUtils/directives/dirPagination'));
			echo $this->Html->script(array('angularUtils/directives/ui-bootstrap-tpls-2.3.0.min'));
			echo $this->Html->script('jquery.prettyPhoto');
			echo $this->Html->script('jquery.isotope.min');
			echo $this->Html->script('main');
			echo $this->Html->script('wow.min');
			//echo $this->Html->script('plugins/summernote');
		?>
		<script type="text/javascript">(function(){window.App = angular.module('App',['angularUtils.directives.dirPagination','ngSanitize'])})();</script>
		<script>
			$(function () {
			  $('[data-toggle="tooltip"]').tooltip()
			});
		</script>
		<?php  echo $scripts_for_layout; ?>
	</body>
</html>