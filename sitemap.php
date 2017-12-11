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
    <link rel="stylesheet" href="/vendor/snazzy/snazzy-info-window.min.css">
	<script src="https://maps.googleapis.com/maps/api/js?key={{AIzaSyAwlvXnSvFdiMFgMJOvjAs9C3Bk3JbmhHo}}"></script>
	<script src="/vendor/snazzy/snazzy-info-window.min.js"></script>
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
      <div class="preheader">
      </div>
      <div class="container">
       <a href="./index.php"><img src="./img/logo.svg" alt="Stefe" class="logo"></a>
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
              <a class="nav-link" href="#">Produkty</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Aktuality</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Referencie</a>
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
   <div class="container first">
   	<div class="row">
   		<div class="col-md-6 float-left hidden-md-down"><h2>STEFE - Mapa stránky.</h2></div>
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
		<div class="header-pic sk">
		</div>
   </div>

	<div class="container">
	<div class="divider"></div>
		<h1><span>Mapa stránky</span></h1>
		<span class="subheader">Kompletná mapa stránky</span>
			<ul class="sitemap">
				<li><a href="#">Stefe SK</a></li>
					<ul>
						<li><a href="#">Stefe Banská Bystrica</a></li>
						<li><a href="#">Stefe Brusno</a></li>
						<li><a href="#">Stefe Kováčová</a></li>
						<li><a href="#">Stefe Martin</a></li>
						<li><a href="#">Stefe Rimavská Sobota</a></li>
						<li><a href="#">Stefe Rožňava</a></li>
						<li><a href="#">Stefe Klenovec</a></li>
						<li><a href="#">Stefe Krupina</a></li>
						<li><a href="#">Stefe Levoča</a></li>
						<li><a href="#">Stefe Lučenec</a></li>
						<li><a href="#">Stefe Pliešovce</a></li>
						<li><a href="#">Stefe Revúca</a></li>
						<li><a href="#">Stefe Tornaľa</a></li>
						<li><a href="#">Stefe Veľký Krtíš</a></li>
						<li><a href="#">Stefe Kremnica</a></li>
						<li><a href="#">Stefe Zvolen</a></li>
						<li><a href="#">Stefe Zvolenská Slatina</a></li>
					</ul>
				<li><a href="#">Produkty</a></li>
				<li><a href="#">Aktuality</a></li>
				<li><a href="#">Referencie</a></li>
				<li><a href="#">Kariéra</a></li>
				<li><a href="#">Kontakty</a></li>
			</ul>

		<div class="divider"></div>
		<div class="divider"></div>
		<div class="divider"></div>
		<div class="divider"></div>
		<div class="divider"></div>
	</div>


			
	
	
    <footer>
    <div class="row">
    	<div class="col-md-6 map">
    		<iframe src="https://snazzymaps.com/embed/16372" width="100%" height="500px" style="border:none;"></iframe>
    	</div>
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
