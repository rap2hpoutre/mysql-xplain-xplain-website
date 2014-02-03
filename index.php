<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="shortcut icon" href="favicon.ico">

		<title>Mysql Explain Explain</title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
		<style>
		body {
			padding-top: 20px;
			padding-bottom: 20px;
		}
		.container {
			padding-top: 50px !important;
			max-width: 850px;
		}
		</style>
	</head>

	<body>
		<a href="https://github.com/rap2hpoutre/mysql-xplain-xplain">
			<img style="position: absolute; top: 0; left: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_left_green_007200.png" alt="Fork me on GitHub">
		</a>

		<div class="container">

			<div class="jumbotron">
				<h1>Mysql Explain Explain</h1>
				<p class="lead">Something like an upgraded `EXPLAIN` command for browser. Highlights and explains MySQL queries. It gives also hints and links. Hope it will help</p>
				<p><a class="btn btn-lg btn-success" href="https://github.com/rap2hpoutre/mysql-xplain-xplain/releases/download/v0.1.0/rap2h-mysql-explain-explain-1.0.0.zip" role="button"><span class="glyphicon glyphicon-download"></span> Download latest version</a></p>
			</div>
			<div class="row marketing">

				<div class="col-lg-6">
					<h3>Getting started</h3>
					<ul>
						<li>
							<a href="https://github.com/rap2hpoutre/mysql-xplain-xplain/releases/download/v0.2.0/rap2h-mysql-explain-explain-0.2.0.zip">Download</a> and unzip it into your webroot folder.
						</li>
						<li>
							Or install it with <a href="https://getcomposer.org/" target="_blank">composer</a> : <pre>composer create-project rap2h/mysql-explain-explain --prefer-dist</pre>
						</li>
						<li>
							Launch your web server, goto http://localhost/xplain or something like that
						</li>
						<li>
							Start typing your queries
						</li>
					</ul>


					<h3>Contributing</h3>
					<p>Yes, you <s>can</s> must <a target="_blank" href="https://github.com/rap2hpoutre/mysql-xplain-xplain/">improve this software on GitHub</a> and correct our poor english</p>
					<h3>License</h3>
					<p>This software is under <i>The MIT License (MIT)</i></p>
				</div>



				<div class="col-lg-6">
					<h3>Why?</h3>
					<p>The MySQL <code>EXPLAIN</code> command is sometimes hard to understand. We try to make it more readable with some improvements. In a web browser.</p>
					<h3>What?</h3>
					<a href="./screen.jpg" ><img src="./screen.jpg" class="img-responsive img-rounded" alt="screenshot"></a>
					<h3>Dependencies</h3>
					<p>MySQL Explain Explain has some <a target="_blank" href="http://depending.in/rap2hpoutre/mysql-xplain-xplain">dependencies</a>. Many thanks to their authors!</p>


				</div>

			</div>

			<div class="footer">
			<p>&copy; Rap2h 2014</p>
			</div>

		</div>
	</body>
</html>
