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
	  <!-- LOADER -->
	  	<div class="se-pre-con">
			<div id="loader_hype_container" style="margin: -60px auto;position:relative;width:120px;height:120px;overflow:hidden;top:50%;">
				<script type="text/javascript" charset="utf-8" src="loader.hyperesources/loader_hype_generated_script.js?58297"></script>
			</div>
	  	</div>
	  <!-- LOADER END -->

<script>
	var scroll = new SmoothScroll('a[href*="#"]', {
		ignore: '[data-scroll-ignore]', // Selector for links to ignore (must be a valid CSS selector)
		offset: 145, // Integer or Function returning an integer. How far to offset the scrolling anchor location in pixels
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
              <a data-scroll class="nav-link" href="#produkty">Produkty</a>
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
				<p class="myslienka">„Spoľahlivý a férový partner prispôsobujúci sa individuálnym potrebám každého zákazníka.“</p>
				<p class="autor">Ing. Ondrej Borguľa/STEFE SK, a.s.</p>
   		</div>
   </div>
   <div class="container" style="padding-top:30px">
  		<h1 id="produkty"><span>Produkty</span></h1>
  		<span class="subheader">Vyberte si z ponuky naších služieb</span>
			<div class="row">
				<a href="#scrollprodukty" class="col-lg-6 col-md-6 col-sm-12 menu-one teplo-btn">
					<div class="stefe-icon"><i class="fa fa-thermometer fa-custom" aria-hidden="true"></i><span>Výroba a dodávka</span></div>
				</a>
					
				<div class="col-lg-6 col-md-6 col-sm-12 menu-one">
					<div class="hover-menu">
							<ul class="hover">
								<a href="#scrollprodukty"><div class="technicke-btn"><li><i class="fa fa-wrench" aria-hidden="true"></i> Technické služby</li></div></a>
								<a href="#scrollprodukty"><div class="chlad-btn"><li><i class="fa fa-server" aria-hidden="true"></i> Správa určených meradiel</li></div></a>
							</ul>
					</div>
					<div class="stefe-icon"><i class="fa fa-cogs fa-custom" aria-hidden="true"></i><span>Služby</span></div>
				</div>
			</div>
	   		
			<div class="divider"></div>
	   
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12">
					<div class="stefe-icon"><i class="fa fa-pencil-square-o fa-custom" aria-hidden="true"></i><span>Eko efektivita</span></div></div>
				
				<div class="col-lg-4 col-md-4 col-sm-12">
					<div class="stefe-icon"><i class="fa fa-wrench fa-custom" aria-hidden="true"></i><span>Správa meradiel</span></div></div>
				
				<div class="col-lg-4 col-md-4 col-sm-12">
					<div class="stefe-icon"><i class="fa fa-file-text-o fa-custom" aria-hidden="true"></i><span>Správa objektov</span></div></div>
			</div>
	   <!-- TEPLO -->
	   <div id="scrollprodukty"></div>
	   		<div class="teplo">
				<div class="divider"></div>
				
				<nav class="nav nav-tabs nav-fill" id="myTab" role="tablist">
				  <button class="nav-item nav-link sub active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fa fa-fire fa-5x" aria-hidden="true"></i><h3>Fernwärme</h3></button>
					
				  <button class="nav-item nav-link sub" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="fa fa-snowflake-o fa-5x" aria-hidden="true"></i><h3>Kälte</h3></button>
				</nav>
				<div class="tab-content" id="nav-tabContent">
				<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
					<div class="divider"></div>
					<p>Wenn Sie in der Slowakei leben, ist die Warscheinlichkeit gross dass wir von STEFE ihr Heim gemütlich warm und Ihr Wasser angenehm Heiss machen. Als einer der Grössten Fernwärmeanbieter vergrössern und Verbessern wir unser Netz stetig um den bestmöglichsten Service für Sie zu garantieren, doch sehen Sie selbst ob auch sie schon Teil der grossen STEFE Familie sind:</p>
					<img src="./img/hrejive_teplo.png" alt="Teplo" style="width: 100%;margin-bottom: 20px;">
					<p>Lokalitäten:</p>
					<p><b>Banska Bystrica, Zvolen, Martin, Trnava, Rimavska Sobota, Roznava, Velky Krtis, Revuca, Klenovec, Krupina, Levoča, Pliešovce, Tornaľa, Brusno, Kovacova, Kremnica.</b></p>
					<!-- <p>Als Fernwärmekunde steht bei Ihnen zu Hause im Keller vermutlich ein „Ding“, das aussieht, wie ein Heizkessel, an dem Sie Ihren Wärmebedarf regulieren können. Dieses Ding nennt sich Kompaktübergabestation und wird von uns zur Verfügung gestellt. Es ist der Endpunkt unserer gut isolierten Leitungen, die lange Kilometer bis zu einem Kesselhaus oder einem Kraftwerk gezogen werden, in dem wir die Wärme, die Sie benötigen, produzieren.</p> -->
					<div class="divider"></div>
					<h3><i class="fa fa-life-ring" aria-hidden="true"></i> 24/7 Nonstop-Support-Service</h3>
					<p>Versorgungssicherheit ist sehr wichtig für uns. Unsere Dispatcher überwachen unsere Kessel und kontrollieren das Netz. So stellen sie sicher, dass es bei Ihnen nicht kalt wird: 24 Stunden pro Tag – 7 Tage die Woche.</p>
					<p>Bei jeglichen Fragen oder Störungen steht Ihnen unser Dispatching jederzeit zur Verfügung. Wählen Sie in der oberen Menüleiste Ihre Stadt aus und rufen Sie uns unter der angeführten Telefonnummer an.</p>
					<div class="divider"></div>
				</div>
				<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
					<div class="divider"></div>
					<p>Wir garantieren eine zuverlässige, wirtschaftliche und umweltfreundliche Produktion der Kälte. Wir stellen die Optimierung des Betriebs und der Verteilung der Kälte während der Dauer des Vertrags sicher.</p>
					<img src="./img/bears.png" alt="Mapa" style="width: 100%;margin-bottom: 20px;">
					<div class="row">
						<div class="col-md-4"><i class="fa fa-eur fa-5x" aria-hidden="true"></i></div>
						<div class="col-md-4"><i class="fa fa-leaf fa-5x" aria-hidden="true"></i></div>
						<div class="col-md-4"><i class="fa fa-shield fa-5x" aria-hidden="true"></i></div>
					</div>
					<p><b>Maßgeschneiderte Lösung</b></p>
					<p>Die technische Lösung, der Bau und der Betrieb der Anlage sind für das Objekt maßgeschneidert und berücksichtigen das Nutzungsverhalten, Umweltschutzanliegen und lokale Gegebenheiten.
					Gemeinsam mit Ihnen definieren wir die optimale Betriebsweise.</p>
				</div>
				</div>
	   			
				<a href="#produkty" class="close-produkty"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i> Produkty</a>
	   		</div>
	   <!-- CHLAD -->
	   		<div class="chlad">
				<div class="divider"></div>
	   			<h3>Chlad</h3>
				<span class="subheader green">Výroba a dodávka</span>
				<p>Výrobu a dodávku chladu prevádzkuje STEFE na základe Vašich individuálnych požiadaviek.</p>
				<p>Technologické riešenie, montáž a samotná prevádzka zariadenia sú nastavené na mieru pre objekt a zohľadňujú jeho využitie, prírodné podmienky a danosti danej lokality.</p>
				<p>V spolupráci s Vami nastavujeme optimálny spôsob prevádzky. </p>
				<div class="divider"></div>
				<a href="#produkty" class="close-produkty"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i> Produkty</a>
	   		</div>
	   <!-- TECHNICKE SLUZBY -->
	   		<div class="technickesluzby">
				<div class="divider"></div>
	   			<h3>Technicke Služby</h3>
				<span class="subheader green">Služby</span>
				<p>Bývate v Banskej Bystrici, Zvolene, Martine, Trnave, Rimavskej Sobote, Rožňave, Veľkom Krtíši, Revúcej, Klenovciach, Krupine, Levoči, Pliešovciach, Tornali, Brusne, Kováčovej alebo Kremnici?
				V tom prípade ste s najväčšou pravdepodobnosťou klientom STEFE zakaždým, keď zapnete kúrenie alebo sa sprchujete. Sme Vaším dodávateľom tepla - mimochodom jedným z najväčších na Slovensku.
				</p>
				<p>Pravdepodobne máte v pivnici istú „vec“, ktorá vyzerá ako nejaký vykurovací kotol, na ktorom môžete regulovať prísun tepla. Tento predmet sa nazýva kompaktná odovzdávacia stanica tepla. Patrí nám. Je to konečný bod našich dobre izolovaných vedení, ktoré sú potiahnuté celým mestom až po kotolňu alebo elektráreň, v ktorej vyrábame potrebné teplo - efektívne, ekologicky a za férové ceny.</p>
				<p>Máte otázku alebo nám chcete nahlásiť závadu?
					<a href="#">Kontaktujte náš dispečing</a>. </p>
				<p>Záleží nám na tom, aby sme Vám bezpečne dodali teplo. Naši dispečeri dohliadajú na naše kotly a kontrolujú sieť. Preto si môžete byť istí, že Vám chladno nebude: 24 hodín denne, 7 dní v týždni.</p>
				<div class="divider"></div>
				<a href="#produkty" class="close-produkty"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i> Produkty</a>
	   		</div>
	   <!-- asdf-->
		   		
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
				<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/LF5-ZE1rp-Y" frameborder="0" allowfullscreen style="padding:5px"></iframe>
		   </div>
		   <div class="divider"></div>
	   
	   		<!-- Referencie -->
			<h1 id="referencie"><span>Referencie</span></h1>
			<span class="subheader">Naši klienti a partneri.</span>
			<p class="maintext">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, eaque nisi porro delectus ipsa, facere consectetur unde, eum est voluptatem quos odio, quidem repellendus minima optio debitis in labore earum.</p>
				<div class="divider"></div>
			<div class="row" style="text-align: center;">
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="ref-icon one"><img src="./img/SVG icons/shopping.svg" alt="Nákupné centrá"></div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="ref-icon two"><img src="./img/SVG icons/theatre_sport.svg" alt="Umenie šport a kultúra"></div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="ref-icon three"><img src="./img/SVG icons/flats.svg" alt="Obytné zóny"></div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="ref-icon four"><img src="./img/SVG icons/industry.svg" alt="Industriálne zóny"></div>
				</div>
			</div>
			<!-- Referencie end -->
			
			<!-- KARIERA -->
			<div class="divider"></div>
		   	<div class="divider"></div>
			<h1 id="kariera"><span>Kariéra</span></h1>
			<span class="subheader">Hľadať prácu</span>
	   
	   		<?php
						$inzeraty = $database->select("inzeraty", [
							"nadpis",
							"popis",
							"pozicia",
							"miesto",
							"nastup",
							"obsah",
							"kontakt"
						],[
							"show" => true,
						]);
					
						  foreach (array_reverse($inzeraty) as $data){
							  $cleaninzerat = $data["obsah"];
						  			echo "<div class='row inzeraty'>
											<div class='col-md-3 img-stolicka'></div>
												<div class='col-md-9'>
												<h2>".$data["nadpis"]."</h2>
												<hr>
												<p><strong>".$data["popis"]."</strong></p>
												<p><strong>Pozícia:</strong> <span>".$data["pozicia"]."</span></p>
												<p><strong>Miesto výkonu:</strong> <span>".$data["miesto"]."</span></p>
												<p><strong>Nástup:</strong> <span>".$data["nastup"]."</span></p>
												<div class='inzeraty-content'><p>".$cleaninzerat."</p>
												<hr>
												<p>Vaše žiadosti spolu s profesijným životopisom a súhlasom k spracovaniu osobných údajov
												v zmysle z.č. 24/2013 Z.z. zašlite na adresu: <b>STEFE SK, a.s.,
												Na Troskách 26, 974 01 Banská Bystrica</b> alebo na <b>".$data['kontakt']."</b></p>
												</div>
											</div>
												<div class='inzeraty-after stefe-btn'><i class='fa fa-arrow-circle-down' aria-hidden='true'></i> Viac</div>
										</div>
										";
						  
						  	}
					?>

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
		 $(window).on('load', function () {
	     	$(".se-pre-con").fadeOut("fast");
		 });
		  
		$('#myTab').on('click', function (e) {
		  $(this).tab('show')
		})
		  
	  	$(".inzeraty-after.stefe-btn").click(function(){
			if($(this).closest(".row.inzeraty").find(".inzeraty-content").hasClass("active")){
				$(this).closest(".row.inzeraty").find(".inzeraty-content").removeClass("active");
				$(this).empty().append("<i class='fa fa-arrow-circle-down' aria-hidden='true'></i> Viac");
			}else{
				$(this).closest(".row.inzeraty").find(".inzeraty-content").addClass("active");
				$(this).empty().append("<i class='fa fa-arrow-circle-up' aria-hidden='true'></i> Menej");
			}
			
		});
		  
		$(".teplo-btn").click(function(){
			$(".teplo").addClass("active").addClass("letter");
			$(".chlad").removeClass("active").removeClass("letter");
			$(".technickesluzby").removeClass("active").removeClass("letter");
		});
		$(".chlad-btn").click(function(){
			$(".chlad").addClass("active").addClass("letter");	
			$(".teplo").removeClass("active").removeClass("letter");
			$(".technickesluzby").removeClass("active").removeClass("letter");
		});
		$(".technicke-btn").click(function(){
			$(".technickesluzby").addClass("active").addClass("letter");	
			$(".teplo").removeClass("active").removeClass("letter");
			$(".chlad").removeClass("active").removeClass("letter");
		});
		$(".close-produkty").click(function(){
			setTimeout(function(){
			  $(".teplo").removeClass("active").removeClass("letter");
			  $(".chlad").removeClass("active").removeClass("letter");
			  $(".technickesluzby").removeClass("active").removeClass("letter");
			}, 500);	
		});
		  
	  </script>

  </body>

</html>
