<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title></title>
		<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
		<link href="http://fonts.googleapis.com/css?family=Kreon" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="/css/style.css" />
		<script src="/js/jquery-1.6.2.js" type="text/javascript"></script>
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<div id="logo">
					<a href="/"></span> <span class="cms">cms</span></a>
				</div>
				<div id="menu">
					<ul>
						<li class="first active"><a href="/?url=main">Главная</a></li>
						<li><a href="/?url=portfolio">Портфолио</a></li>
					</ul>
					<br class="clearfix" />
				</div>
			</div>
			<div id="page">
				<div id="sidebar">
					<div class="side-box">
						<h3></h3>
						<p align="justify" class="quote">
						Test
						</p>
					</div>
					<div class="side-box">
						<h3>Основное меню</h3>
						<ul class="list">
							<li class="first "><a href="/?url=main">Главная</a></li>
							<li><a href="/?url=portfolio">Портфолио</a></li>
						</ul>
					</div>
				</div>
				<div id="content">
					<div class="box">
						<?php include 'application/views/'.$content_view; ?>
					</div>
					<br class="clearfix" />
				</div>
				<br class="clearfix" />
			</div>
			<div id="page-bottom">
				<div id="page-bottom-sidebar">
					<h3>Наши контакты</h3>
					<ul class="list">
						<li class="first"></li>
						<li></li>
						<li class="last"></li>
					</ul>
				</div>
				
				<br class="clearfix" />
			</div>
		</div>
		<div id="footer">
			<a href="/"> </a> &copy; 2024</a>
		</div>
	</body>
</html>