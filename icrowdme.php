<?php
	$host = 'localhost'; // адрес сервера 
	$database = 'icrowdme'; // имя базы данных
	$user = 'root'; // имя пользователя
	$password = ''; // пароль
	 
	// подключаемся к серверу
	$link = mysqli_connect($host, $user, $password, $database) 
		or die("Ошибка " . mysqli_error($link));
	 
	// выполняем операции с базой данных
	$query = "SELECT content_text FROM page_content WHERE content_block = 'sec_1_text' ORDER BY id";

	$results = mysqli_fetch_all(mysqli_query($link, $query), MYSQLI_NUM) or die("Ошибка " . mysqli_error($link));
	 
	// закрываем подключение
	mysqli_close($link);
?>
<html lang="en">

<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<head lang="en">
</head>
<body>
	<div class="navbar-wrapper">
		<div class="container">
			<nav class="navbar navbar-default navbar-static-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
						 aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          	<span class="icon-bar"></span>
	          </button>
					<a class="navbar-brand center-block" href="#"><img class="img-responsive" src="images/logo.jpg" alt=""></a>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li><a href="#">HOME</a></li>
							<li><a href="#about">HOW IT WORKS</a></li>
							<li><a href="#contact">DISCOVER A PROJECT</a></li>
							<li><a href="#contact">BLOG</a></li>
							<li><a href="#contact">FIND OUT MORE</a></li>
							<li><a href="admin">ADMIN</a></li>
						</ul>
						<button type="button" class="btn navbar-btn btn-login" data-toggle="modal" data-target="#myModal">LOGIN</button>
					</div>
					
				</div>
				
			</nav>
		</div>
	</div>
							
	<div class="banner">
		<div class="container">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<!--<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>-->
				<div class="carousel-inner" role="listbox">
					<div class="item active slide-overlay">
						<img src="images/slide-01.jpg" alt="First slide">
						<div class="container">
							<div class="carousel-caption">
								<h1>Intellectual Property has the Shelf Life</h1>
								<p>of a Banana.</p>
								<p><a class="btn btn-lg btn-default" href="#" role="button">Become a Member</a></p>
							</div>
						</div>
					</div>
					<div class="item slide-overlay">
						<img src="images/slide-02.jpg" alt="Second slide">
						<div class="container">
							<div class="carousel-caption">
								<h1>Intellectual Property has the Shelf Life</h1>
								<p>of a Banana.</p>
								<p><a class="btn btn-lg btn-default" href="#" role="button">Become a Member</a></p>
							</div>
						</div>
					</div>
					<div class="item slide-overlay">
						<img src="images/slide-03.jpg" alt="Third slide">
						<div class="container">
							<div class="carousel-caption">
								<h1>Intellectual Property has the Shelf Life</h1>
								<p>of a Banana.</p>
								<p><a class="btn btn-lg btn-default" href="#" role="button">Become a Member</a></p>
							</div>
						</div>
					</div>
				</div>
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			   	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			  	<span class="sr-only">Previous</span>
			  </a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
			<!-- /.carousel -->
		</div>
	</div>
	<div class="sec-1">
		<div class="container text-center">
			<div class="row">
				<img src="images/sec-1-icon.jpg" class="img-responsive center-block sec-1-icon hidden-xs">
				<div class="col-lg-6 col-lg-offset-3">
					<h2>Our work is the presentation of our capabilities.</h2>
				</div>
				<div class="col-lg-10 col-lg-offset-1">
					<? foreach($results as $res): ?>
						<? foreach($res as $data): ?>
							<p><?=$data?></p>
						<? endforeach ?>
					<? endforeach ?>
				</div>
			</div>
		</div>
	</div>
	<div class="sec-2">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1">
				  <!-- Nav tabs -->
				  <ul class="nav nav-justified" role="tablist">
				    <li role="presentation" class="active"><a href="#simple" aria-controls="simple" role="tab" data-toggle="tab"><span class="label tab-lab">1</span>Simple</a></li>
				    <li role="presentation"><a href="#transparent" aria-controls="transparent" role="tab" data-toggle="tab"><span class="label tab-lab">2</span>Transparent</a></li>
				    <li role="presentation"><a href="#collab" aria-controls="collab" role="tab" data-toggle="tab"><span class="label tab-lab">3</span>Collaborative</a></li>
				  </ul>
				  <!-- Tab panes -->
				  <div class="tab-content">
				    <div role="tabpanel" class="tab-pane fade in active" id="simple">
				    	<div class="row">
					    	<div class="col-lg-2 col-lg-offset-1">
					    		<img class="img-responsive" src="images/glasses.jpg" alt="">
					    	</div>
					    	<div class="col-lg-7 col-lg-offset-1">
					    		<h3>Browse projects, like booking a hotel online !</h3>
					    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et do lore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>	
					    	</div>
				    	</div>
				    </div>
				    <div role="tabpanel" class="tab-pane fade" id="transparent">
				    	<div class="row">
					    	<div class="col-lg-2 col-lg-offset-1">
					    		<img class="img-responsive" src="images/ok.png" alt="">
					    	</div>
					    	<div class="col-lg-7 col-lg-offset-1">
					    		<h3>Browse projects, like booking a hotel online !</h3>
					    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et do lore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>	
					    	</div>
				    	</div>
				    </div>
				    <div role="tabpanel" class="tab-pane fade" id="collab">
				    	<div class="row">
					    	<div class="col-lg-2 col-lg-offset-1">
					    		<img class="img-responsive" src="images/globe.png" alt="">
					    	</div>
					    	<div class="col-lg-7 col-lg-offset-1">
					    		<h3>Browse projects, like booking a hotel online !</h3>
					    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et do lore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>	
					    	</div>
				    	</div>
				    </div>
				  </div>
				</div>
			</div>
		</div>
	</div>
	<div class="sec-3">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="row sec-3-bg">
						<div class="col-lg-3 col-lg-offset-3">
							<img src="images/sec-3-couch.png">
						</div>
						<div class="col-lg-5">
							<h4>Find Properties</h4>
							<p>Sign up to browse the portfolio. Your journey to becoming a real estate baron starts here.</p>
							<a href="#" class="btn btn-lg btn-default">Become A Member</a>
						</div>							
					</div>				
				</div>
				<div class="col-lg-6">
					<div class="row sec-3-bg">
						<div class="col-lg-3 col-lg-offset-1">
							<img src="images/sec-3-wallet.png" class="img-responsive">
						</div>
						<div class="col-lg-5">
							<h4>Find Buyers</h4>
							<p>Sign up to browse the portfolio. Your journey to becoming a real estate baron starts here.</p>
							<a href="#" class="btn btn-lg">Submit Your Project</a>
						</div>
						</div>
				</div>	
			</div>
		</div>
	</div>
	<div class="sec-4">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-1">
					<h3>Featured Projects</h3>
					<p>Brief details of new and popular projects. To view full listings, you will be required to sign up and become a member.</p>
				</div>
				<div class="col-lg-2"><a href="#" class="btn btn-lg btn-default">Become a Member</a></div>
			</div>
			<div class="row projects text-center">
			  <div class="col-xs-12 col-md-3 col-md-offset-1 col-lg-3 col-lg-offset-1">
			    <div class="thumbnail">
			    	<div class="thumbnail-frame thumbnail-pic-overlay">
			    		<img src="images/sec-4-pic-1.png" alt="" class="img-responsive">	
			    		<a href="#" class="btn btn-md btn-default">From GBP 3600</a>
			    		<img src="images/sec-4-thumb-new.png" alt="" class="thumbnail-frame-new">
			    	</div>
			      <div class="caption">
			        <h4>Ontario Tower , LONDON</h4>
			        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<div class="progress">
							  <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
							  </div>
							</div>
							<div class="progress-text">
								<span>10% Funded</span><span>8 Days Left</span>
							</div>
							<hr>
							<p><a href="#" class="project-details">See Project Details<span class="glyphicon glyphicon-play glyphicon-green"></span></a></p>
			      </div>
			    </div>
			  </div>
			  <div class="col-xs-12 col-md-4 col-lg-4 col-lg-offset-0">
			    <div class="thumbnail">
			      <div class="thumbnail-frame thumbnail-pic-overlay">
			    		<img src="images/sec-4-pic-2.png" alt="" class="img-responsive">
			    		<a href="#" class="btn btn-md btn-default">From GBP 3600</a>	
			    		<img src="images/sec-4-thumb-new.png" alt="" class="thumbnail-frame-new">
			    	</div>
			      <div class="caption">
			        <h4>Ontario Tower , LONDON</h4>
			        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			        <div class="progress">
							  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
							  </div>
							</div>
							<div class="progress-text">
								<span>60% Funded</span><span>8 Days Left</span>
							</div>
							<hr>
							<p><a href="#" class="project-details">See Project Details<span class="glyphicon glyphicon-play glyphicon-green"></span></a></p>
			      </div>
			    </div>
			  </div>
			  <div class="col-xs-12 col-md-3 col-lg-3 col-lg-offset-0">
			    <div class="thumbnail">
			      <div class="thumbnail-frame thumbnail-pic-overlay">
			    		<img src="images/sec-4-pic-1.png" alt="" class="img-responsive">
			    		<a href="#" class="btn btn-md btn-default">From GBP 3600</a>	
			    		<img src="images/sec-4-thumb-new.png" alt="" class="thumbnail-frame-new">
			    	</div>
			      <div class="caption">
			        <h4>Ontario Tower , LONDON</h4>
			        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<div class="progress">
							  <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
							  </div>
							</div>	
							<div class="progress-text">
								<span>10% Funded</span><span>8 Days Left</span>
							</div>
							<hr>
							<p><a href="#" class="project-details">See Project Details<span class="glyphicon glyphicon-play glyphicon-green"></span></a></p>
			      </div>
			    </div>
			  </div>

			</div>
		</div>		
	</div>
	<div class="sec-5">
		<div class="container">
			<div class="row text-center">
				<div class="col-lg-10 col-lg-offset-1">
					<h2>Be Part of a Growing International Community</h2>
					<p>One of the challenges in networking is everybody thinks it's making cold calls to strangers. Actually, it's the people who already have strong trust relationships with you</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-lg-offset-1">
					<div class="quote-bubble text-center">
						<h4>One of the Best</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod taempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div class="quote-author">
						<img src="images/sec-5-beckham-1.png" alt="David Beckham">
						<span>David Beckham</span>
					</div>
				</div>
				<div class="col-lg-4 col-lg-offset-2">
					<div class="quote-bubble text-center">
						<h4>Exellent Service</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod taempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div class="quote-author">
						<img src="images/sec-5-beckham-2.png" alt="David Beckham">
						<span>David Beckham</span>
					</div>					
				</div>	
			</div>
			
			<!-- <img class="img-responsive" src="sec-5-bg.jpg" alt=""> -->
		</div>
	</div>
	<footer class="footer">
		<div class="container">
			<div>
				<img src="images/footer-sponsors.jpg" alt="" class="img-responsive">
				<hr/>
				<p class="text-center" style="margin-bottom: 20px;">Copyright &copy; 2001 - 2014  Cssauthor.com</p>
			</div>
		</div>
	</footer>

	<!-- Scripts -->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<!-- Modals -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Modal title</h4>
				</div>
				<div class="modal-body">
					...
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
</body>

</html>