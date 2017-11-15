<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Stefe.sk - Hlavná stránka</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<script src="https://use.typekit.net/udj8vhg.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>
    <!-- Custom styles for this template -->
    <link href="vendor/brickstone/brickstone_css.css" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/vendor/snazzy/snazzy-info-window.min.css">
	<script src="https://maps.googleapis.com/maps/api/js?key={{AIzaSyAwlvXnSvFdiMFgMJOvjAs9C3Bk3JbmhHo}}"></script>
	<script src="./vendor/snazzy/snazzy-info-window.min.js"></script>
	<script src="./js/smooth-scroll.js"></script>
  </head>

  <body>

<script>
	var scroll = new SmoothScroll('a[href*="#"]', {
		ignore: '[data-scroll-ignore]', // Selector for links to ignore (must be a valid CSS selector)
		offset: 120, // Integer or Function returning an integer. How far to offset the scrolling anchor location in pixels
	});
</script>

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
    		<div class="lang float-right">
					<a href="">SK</a>	
					<a href="">DE</a>	
			</div>
    	</div>
      <div class="container">
       <img src="./img/logo.svg" alt="Stefe" class="logo">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav m-auto">
            <li class="nav-item active">
              <a data-scroll class="nav-link" href="#">Stefe SK</a>
            </li>
            <li class="nav-item">
              <a data-scroll class="nav-link" href="#sluzby">Služby</a>
            </li>
            <li class="nav-item">
              <a data-scroll class="nav-link" href="#aktuality">Aktuality</a>
            </li>
			<li class="nav-item">
              <a data-scroll class="nav-link" href="#referencie">Referencie</a>
            </li>
            <li class="nav-item">
              <a data-scroll class="nav-link" href="#kariera">Kariéra</a>
            </li>
            <li class="nav-item">
              <a data-scroll class="nav-link" href="#kontakty">Kontakty</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

   <div class="container first">
   	<div class="row">
   		<div class="col-md-6 float-left hidden-md-down"><h2>STEFE - My Vás rozpálime!</h2></div>
   		<div class="col-md-6 float-right">
			<div class="dropdown show float-right stefe-dropdown">
			  <a class="btn dropdown-toggle" href="" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Vyberte vaše mesto</a>
			  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
				<a class="dropdown-item" href="./index_bb.php">Banská Bystrica</a>
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
   <div class="container" style="padding: 0;">
   		<div class="well">
   			<blockquote class="blockquote">
			  <div class="myslienka"><p>Spoľahlivý a férový partner prispôsobujúci sa individuálnym potrebám každého zákazníka.</p></div>
			  <footer class="blockquote-footer"><cite title="Source Title">Ing. Ondrej Borguľa/STEFE SK, a.s.: </cite></footer>
			</blockquote>
   		</div>
   </div>
   <div class="container" style="padding-top:30px">
  		<h1 id="sluzby"><span>Služby</span></h1>
  		<span class="subheader">Vyberte si z ponuky naších služieb</span>
			<div class="row" style="padding-left: 10px;padding-right:10px;">
				<div class="col-lg-6 col-md-6 col-sm-12 menu-one">
						<div class="hover-menu">
							<ul class="hover">
								<a href="" onclick="return false;"><li><i class="fa fa-fire" aria-hidden="true"></i> Teplo</li></a>
								<a href="" onclick="return false;"><li><i class="fa fa-bolt" aria-hidden="true"></i> Elektrická energia</li></a>
								<a href="" onclick="return false;"><li><i class="fa fa-snowflake-o" aria-hidden="true"></i> Chlad</li></a>
								<a href="" onclick="return false;"><li><i class="fa fa-envira" aria-hidden="true"></i> Biomasa</li></a>
							</ul>
						</div>
					<div class="stefe-icon"><i class="fa fa-thermometer fa-custom" aria-hidden="true"></i><span>Výroba a dodávka energií</span></div>
				</div>
				
				<div class="col-lg-6 col-md-6 col-sm-12"><div class="stefe-icon"><i class="fa fa-snowflake-o fa-custom" aria-hidden="true"></i><span>Výstavba a montáž</span></div></div>
				
			</div>
			<div class="divider"></div>
			<div class="row" style="padding-left: 10px;padding-right:10px;">
				<div class="col-lg-4 col-md-4 col-sm-12"><div class="stefe-icon"><i class="fa fa-pencil-square-o fa-custom" aria-hidden="true"></i><span>Eko efektivita</span></div></div>
				
				<div class="col-lg-4 col-md-4 col-sm-12"><div class="stefe-icon"><i class="fa fa-wrench fa-custom" aria-hidden="true"></i><span>Správa meradiel</span></div></div>
				
				<div class="col-lg-4 col-md-4 col-sm-12"><div class="stefe-icon"><i class="fa fa-file-text-o fa-custom" aria-hidden="true"></i><span>Správa objektov</span></div></div>
			</div>
		   		
		   		<div class="divider"></div>
		   		<div class="divider"></div>
			   <h1 id="aktuality"><span>Aktuality</span></h1>
			   <span class="subheader">Hlavné aktuality</span>
				<div class="row" style="padding-left: 10px;padding-right:10px;">

					<?php
						$news = $database->select("content", [
							"ID",
							"nazov",
							"intro",
							"image"
						],[
							"status" => "<span style='color:var(--stefeGreen)'>publikované!</span>",
							"alarm" => "nie"
						]);
					
						$numbernewsread = 1;
						$limitnews = 3; // koľko noviniek zobrazí
						  foreach (array_reverse($news) as $data){
							  $cleantext = strip_tags($data["intro"]);
						  		if ($numbernewsread <= $limitnews) {
						  			echo "<div class='col-lg-4 col-md-4 col-sm-4 col-xs-6'>
							  			<article class='card'>
							  				<header class='title-header'>
							  					<h3>".$data["nazov"]."</h3>
							  				</header>
							  				<div class='card-block'>
							  						<div class='img-card'>
														<div class='miniimage' style='background-image: url(./img/up/".$data["image"].")'></div>
							  						</div><div class='newsintro'><p>".$cleantext."</p>
							  					</div><a href='./article.php?ID=".$data["ID"]."' class='btn btn-block stefe-btn'>Čítať viac</a>
							  				</div>
							  			</article>
							  		</div>";
							  		$numbernewsread += 1;
						  		}else{
						  			 }
						  	}
					?>
					
			</div>
	   
	   		<!-- video -->
		   <div class="divider"></div>
		    <div class="embed-responsive embed-responsive-16by9">
				<iframe class="embed-responsive-item" src="http://www.youtube.com/embed?max-results=1&controls=0&showinfo=0&rel=0&listType=user_uploads&list=STEFE" frameborder="0" allowfullscreen style="padding:5px"></iframe>
		   </div>
	   
	   		<!-- Referencie -->
			<h1 id="referencie"><span>Referencie</span></h1>
			<span class="subheader">Naši klienti a partneri.</span>
			<p class="maintext">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, eaque nisi porro delectus ipsa, facere consectetur unde, eum est voluptatem quos odio, quidem repellendus minima optio debitis in labore earum.</p>
				<div class="divider"></div>
			<div class="row" style="text-align: center;margin:0 5px;">
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="ref-icon"><img src="./img/SVG icons/shopping.svg" alt="Nákupné centrá"></div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="ref-icon"><img src="./img/SVG icons/theatre_sport.svg" alt="Umenie šport a kultúra"></div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="ref-icon"><img src="./img/SVG icons/flats.svg" alt="Obytné zóny"></div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="ref-icon"><img src="./img/SVG icons/industry.svg" alt="Industriálne zóny"></div>
				</div>
			</div>
			<!-- Referencie end -->
			
			<!-- KARIERA -->
			<div class="divider"></div>
		   	<div class="divider"></div>
			<h1 id="kariera"><span>Kariéra</span></h1>
			<span class="subheader">Hľadať prácu</span>
			<div class="row inzeraty" style="margin:10px;padding: 20px;">
					<div class="col-md-3 img-stolicka"></div>
					<div class="col-md-9">
						<h2>Príďte do tepla!</h2>
						<hr>
						<p><strong>HĽADÁME TECHNIKA TEPELNÉHO HOSPODÁRSTVA PRE STEFE MARTIN, a.s.</strong></p>
						<p><strong>Pozícia:</strong> <span>technik tepelného hospodárstva</span></p>
						<p><strong>Miesto výkonu:</strong> <span>Banská Bystrica</span></p>
						<p><strong>Nástup:</strong> <span>ihneď</span></p>
							<div class="inzeraty-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis consectetur saepe est, fugit ad exercitationem cumque iure earum expedita. Tempora provident voluptates voluptatibus quam ea, nihil libero temporibus corporis eum.</p>
								<p>Tel. kontakt: 090932093</p>
								<p>Email kontakt: info@info.sk</p>
							</div>
					</div>
	   				<div class="inzeraty-after stefe-btn"><i class="fa fa-arrows-v" aria-hidden="true"></i> Viac</div>
			</div>
	   
	   		<div class="row inzeraty" style="margin:10px;padding: 20px;">
					<div class="col-md-3 img-stolicka"></div>
					<div class="col-md-9">
						<h2>Príďte do tepla!</h2>
						<hr>
						<p><strong>HĽADÁME TECHNIKA TEPELNÉHO HOSPODÁRSTVA PRE STEFE MARTIN, a.s.</strong></p>
						<p><strong>Pozícia:</strong> <span>technik tepelného hospodárstva</span></p>
						<p><strong>Miesto výkonu:</strong> <span>Banská Bystrica</span></p>
						<p><strong>Nástup:</strong> <span>ihneď</span></p>
							<div class="inzeraty-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis consectetur saepe est, fugit ad exercitationem cumque iure earum expedita. Tempora provident voluptates voluptatibus quam ea, nihil libero temporibus corporis eum.</p>
								<p>Tel. kontakt: 090932093</p>
								<p>Email kontakt: info@info.sk</p>
							</div>
					</div>
					<div class="inzeraty-after stefe-btn"><i class="fa fa-arrows-v" aria-hidden="true"></i> Viac</div>
			</div>

			<!--Kariera koniec -->
				<div class="divider"></div>
			

	<div class="divider"></div>
	<div class="divider"></div>
	<div class="divider"></div>
	<div class="divider"></div>
   </div>
	
    <footer id="kontakty">
    <div class="row nopadding">
    	<div class="col-md-6 map nopadding">
    		<iframe src="https://snazzymaps.com/embed/16372" width="100%" height="400px" style="border:none;"></iframe>
    	</div>
    	<div class="col-md-6 kontakt nopadding">
    		<div class="divider"></div>
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
    	<i class="fa fa-facebook fa-3x" style="padding: 0 0 20px 20px; color: white;" aria-hidden="true"></i>
	    <i class="fa fa-google-plus-square fa-3x" style="padding: 0 0 20px 20px; color: white;" aria-hidden="true"></i>
    	<a class="float-right" style="padding-right: 15px; color: white;" href="./sitemap.php"><h4>Mapa stránky</h4></a> 		
    	</div>
    	</div>
    </footer>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	  
	  <script>
	  	$(".inzeraty-after.stefe-btn").click(function(){
			$(this).closest(".row.inzeraty").find(".inzeraty-content").toggleClass("active");
		});
		
	  </script>

  </body>

</html>
