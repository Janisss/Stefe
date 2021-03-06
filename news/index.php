<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Stefe.sk - Banská Bystrica</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<script src="https://use.typekit.net/udj8vhg.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>
    <!-- Custom styles for this template -->
    <link href="vendor/brickstone/brickstone_css.css" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  </head>

  <body>

  	<?php
	  use Medoo\Medoo;
	  require  'Medoo.php';
	  $database = new Medoo([
		// required
		'database_type' => 'mariadb',
		'database_name' => 'stefe',
		'server' => 'mariadb101.websupport.sk',
		'username' => 'stefe',
		'password' => 'stefe_pass',
		'port' => 3312,
		'charset' => 'utf8',
		]);
	?>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-stefe">
      <div class="container">
       <img src="./img/logo.svg" alt="Stefe" class="logo">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav m-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Stefe SK
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Služby</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Aktuality</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Kariéra</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Kontakty</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
   <div class="container">
   	<div class="row">
   		<div class="col-md-6 float-left hidden-md-down"><h2>STEFE - My Vás rozpálime!</h2></div>
   		<div class="col-md-6 float-right">
			<div class="dropdown show float-right stefe-dropdown">
			  <a class="btn dropdown-toggle" href="" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Vyberte vaše mesto</a>
			  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
				<a class="dropdown-item" href="#">Banská Bystrica</a>
				<a class="dropdown-item" href="#">Rimavská Sobota</a>
			  </div>
			</div>
		</div>
   	</div>
   </div>
   <div class="container-fluid" style="padding: 0;">
		<div class="header-pic">
		</div>
   </div>
   <div class="container" style="padding: 0;">
   		<div class="well">
   			<blockquote class="blockquote">
			  <div class="myslienka"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
			  Integer posuere erat a ante.Integer posuere erat a ante.</p></div>
			  <footer class="blockquote-footer">Generálny riaditeľ STEFE SK <cite title="Source Title">Celé Meno</cite></footer>
			</blockquote>
   		</div>
   </div>
   <div class="container" style="padding-top:30px">
  		<h1><span>Služby</span></h1>
  		<span class="subheader">Vyberte si z ponuky naších služieb</span>
			<div class="row" style="padding-left: 10px;padding-right:10px;">
				<div class="col-lg-3 col-md-6"><div class="stefe-icon"><i class="fa fa-thermometer fa-custom" aria-hidden="true"></i><span>Teplo</span></div></div>
				
				<div class="col-lg-3 col-md-6"><div class="stefe-icon"><i class="fa fa-snowflake-o fa-custom" aria-hidden="true"></i><span>Chlad</span></div></div>
				
				<div class="col-lg-3 col-md-6"><div class="stefe-icon"><i class="fa fa-gears fa-custom" aria-hidden="true"></i><span>Revízie</span></div></div>
				
				<div class="col-lg-3 col-md-6"><div class="stefe-icon"><i class="fa fa-volume-control-phone fa-custom" aria-hidden="true"></i><span>Dispečing</span></div></div>
			</div>
			<div class="divider"></div>
			<div class="row" style="padding-left: 10px;padding-right:10px;">
				<div class="col-lg-3 col-md-6"><div class="stefe-icon"><i class="fa fa-pencil-square-o fa-custom" aria-hidden="true"></i><span>Projekty</span></div></div>
				
				<div class="col-lg-3 col-md-6"><div class="stefe-icon"><i class="fa fa-wrench fa-custom" aria-hidden="true"></i><span>Servis</span></div></div>
				
				<div class="col-lg-3 col-md-6"><div class="stefe-icon"><i class="fa fa-refresh fa-custom" aria-hidden="true"></i><span>Obnova</span></div></div>
				
				<div class="col-lg-3 col-md-6"><div class="stefe-icon"><i class="fa fa-file-text-o fa-custom" aria-hidden="true"></i><span>Certifikáty</span></div></div>
			</div>
		   		
		   		<div class="divider"></div>
		   		<div class="divider"></div>
			   <h1><span>Aktuality</span></h1>
			   <span class="subheader">Hlavné aktuality</span>
				<div class="row" style="padding-left: 10px;padding-right:10px;">

					<?php
						$news = $database->select("content", [
							"ID",
							"nazov",
							"text",
							"image"
						],[
							"status" => "<span style='color:var(--stefeGreen)'>publikované!</span>"
						]);
						  foreach ($news as $data){
							  echo "<div class='col-lg-4 col-md-6 col-sm-6'>
							  			<article class='card'>
							  				<header class='title-header'>
							  					<h3>".$data["nazov"]."</h3>
							  				</header>
							  				<div class='card-block'>
							  						<div class='img-card'>
							  							<img src='./img/up/".$data["image"]."' alt='mini' class='w-100' />
							  						</div>".$data["text"]."
							  					<a href='./article.php?ID=".$data["ID"]."' class='btn btn-block stefe-btn'><i class='fa fa-eye'></i> Čítať viac</a>
							  				</div>
							  			</article>
							  		</div>";
						  }
					?>
					
			</div>
			
			<!-- KARIERA -->
			<div class="divider"></div>
		   		<div class="divider"></div>
			   <h1><span>Kariéra</span></h1>
			   <span class="subheader">Hľadať prácu v: Banská Bystrica</span>
				<div class="row" style="padding-left: 10px;padding-right:10px;">
					<div class="col-lg-4 col-md-6 col-sm-6">
						<article class="card">
							<header class="title-header">
								<h3>Ponuka</h3>
							</header>
							<div class="card-block">
								<div class="img-card">
									<img src="./news/img1.jpg" alt="Movie" class="w-100" />
								</div>
								<p class="tagline card-text text-xs-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								<a href="#" class="btn btn-block stefe-btn"><i class="fa fa-eye"></i> Čítať viac</a>
							</div>
						</article>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 card-bb">
						<article class="card">
							<header class="title-header">
								<h3>Ponuka</h3>
							</header>
							<div class="card-block">
								<div class="img-card">
									<img src="./news/img2.jpg" alt="Movie" class="w-100" />
								</div>
								<p class="tagline card-text text-xs-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								<a href="#" class="btn btn-block stefe-btn"><i class="fa fa-eye"></i> Čítať viac</a>
							</div>
						</article>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 card-lc">
						<article class="card">
							<header class="title-header">
								<h3>Ponuka</h3>
							</header>
							<div class="card-block">
								<div class="img-card">
									<img src="./news/img3.jpg" alt="Movie" class="w-100" />
								</div>
								<p class="tagline card-text text-xs-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								<a href="#" class="btn btn-block stefe-btn"><i class="fa fa-eye"></i> Čítať viac</a>
							</div>
						</article>
					</div>
					
			</div>
	<div class="divider"></div>
	<div class="divider"></div>
	<div class="divider"></div>
	<div class="divider"></div>
	<div class="divider"></div>
   </div>
	
    <footer>
    <div class="row">
    	<div class="col-md-6 map"></div>
    	<div class="col-md-6 kontakt">
    		<form action="">
    			<div class="formwrapper">
    				<div class="form-group">
						<label for="meno">Kontaktuje nás:</label>
						<input type="name" class="form-control" aria-describedby="emailHelp" placeholder="Vaše meno a priezvisko">
				  	</div>
				  	<div class="form-group">
						<input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Email">
				  	</div>
				  	<div class="form-group">
						<textarea rows="5" class="form-control"></textarea>
			  	  </div>
			  	  <div class="form-group">
						<button class="stefe-btn btn">Odoslať</button>
			  	  </div>
    			</div>
    		</form>    		
    	</div>
    	</div>
    </footer>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>
