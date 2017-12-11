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
          <ul class="navbar-nav m-auto main-menu">
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
				<a class="dropdown-item" href="#">Brusno</a>
				<a class="dropdown-item" href="#">Kováčová</a>
				<a class="dropdown-item" href="#">Martin</a>
				<a class="dropdown-item" href="#">Rimavská Sobota</a>
				<a class="dropdown-item" href="#">Rožňava</a>
				<a class="dropdown-item" href="#">Klenovec</a>
				<a class="dropdown-item" href="#">Krupina</a>
				<a class="dropdown-item" href="#">Levoča</a>
				<a class="dropdown-item" href="#">Lučenec</a>
				<a class="dropdown-item" href="#">Pliešovce</a>
				<a class="dropdown-item" href="#">Revúca</a>
				<a class="dropdown-item" href="#">Tornaľa</a>
				<a class="dropdown-item" href="#">Veľký Krtíš</a>
				<a class="dropdown-item" href="#">Kremnica</a>
				<a class="dropdown-item" href="#">Zvolen</a>
				<a class="dropdown-item" href="#">Zvolenská Slatina</a>
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
				<div class="col-lg-6 col-md-6 col-sm-12">
					<a href="#scrollprodukty" class="link-clear">
					<div class="material-button teplo-btn">
						<div class="menu-icon"><i class="fa fa-thermometer fa-custom" aria-hidden="true"></i><span style="user-select: none;">Výroba a dodávka</span>
						</div>
					</div>
					</a>
				</div>
				
				<div class="col-lg-6 col-md-6 col-sm-12">
					<a href="#scrollprodukty" class="link-clear">
					<div class="material-button technicke-btn">
						<div class="menu-icon"><i class="fa fa-cogs fa-custom" aria-hidden="true"></i><span style="user-select: none;">Služby</span>
						</div>
					</div>
					</a>
				</div>
	   		</div>
	   
	   		<div class="divider"></div>
	   
	   		<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12" style="overflow: hidden !important;">
					<a href="#scrollprodukty" class="link-clear">
					<div class="material-button poradenstvo-btn">
						<div class="menu-icon"><i class="fa fa-question-circle-o fa-custom" aria-hidden="true"></i><span style="user-select: none;">Poradenstvo</span>
						</div>
					</div>
					</a>
				</div>
				
				<div class="col-lg-4 col-md-4 col-sm-12">
					<a href="#scrollprodukty" class="link-clear">
					<div class="material-button vystavba-btn">
						<div class="menu-icon"><i class="fa fa-wrench fa-custom" aria-hidden="true"></i><span style="user-select: none;">Výstavba</span>
						</div>
					</div>
					</a>
				</div>
				
				<div class="col-lg-4 col-md-4 col-sm-12">
					<a href="#scrollprodukty" class="link-clear">
					<div class="material-button prevadzka-btn">
						<div class="menu-icon"><i class="fa fa-building-o fa-custom" aria-hidden="true"></i><span style="user-select: none;">Prevádzka</span>
						</div>
					</div>
					</a>
				</div>
	   		</div>
	   		
	   		<div class="divider"></div>

	   <!-- TEPLO -->
	   <div id="scrollprodukty"></div>
	   		<div class="teplo">
				<div class="divider"></div>
				
					<div class="divider"></div>
						<img src="./img/landscape.jpeg" alt="teplo" class="w-100">
						<div class="divider"></div>
						<h3>Teplo</h3>
						<p>Sie leben zwischen Trnava, Martin und Rožňava?<br>
						Dann ist die Wahrscheinlichkeit groß, dass wir von STEFE bei Ihnen zuhause für Wärme sorgen. Wir machen Ihr Heim gemütlich warm und ihr Wasser angenehm heiß. 
						Als einer der größten Wärmeversorger der Slowakei verbessern wir uns stetig  - für Sie.</p>
						<p>Sie fragen sich wie Fernwärme funktioniert, dann sehen Sie sich doch dieses video an: <a href="https://www.youtube.com/watch?v=EPZIAY9mdH8&t=5s">Hier klicken</a></p>
						<p>Versorgungssicherheit ist sehr wichtig für uns. Unsere Dispatcher überwachen unsere Kessel und kontrollieren das Netz. So stellen sie sicher, dass es bei Ihnen nicht kalt wird: 24 Stunden pro Tag - 7 Tage die Woche</p>
						<p>Sie haben Fragen? Unser Dispatching steht Ihnen jederzeit zur Verfügung. Wählen Sie in der oberen Menüleiste Ihre Stadt aus und rufen Sie uns unter der angeführten Telefonnummer an.</p>
						<h3>Chlad</h3>
						<p>Sie mögeńs lieber kühl?</p>
						<p>Wir haben die passende Lösung für Sie. 
						STEFE produziert und liefert Kälte gemäß Ihren individuellen Anforderungen.
						Die technische Lösung, der Bau und der Betrieb der Anlage sind für Ihr Objekt maßgeschneidert und berücksichtigen Ihr Nutzungsverhalten, Umweltschutzanliegen und die lokalen Gegebenheiten.</p>
					<div class="divider"></div>
	   			
				<a href="#produkty" class="close-produkty"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i> Produkty</a>
	   		</div>
	   <!-- TECHNICKE SLUZBY -->
	   		<div class="technickesluzby">
				<div class="divider"></div>
				<img src="./img/sluzby.png" alt="Služby" class="w-100">
				<div class="divider"></div>
	   			<h3>Technicke Služby</h3>
				<span class="subheader green">Služby</span>
				<p>STEFE bietet unterschiedliche Dienstleistungen für Privat- und Geschäftspersonen.
				Wir stellen Ihnen eine komplette Pflege der Heizungsanlage inklusive der Bedienung, des Betriebs, der Reparatur, Instandhaltung und des Fachservices sicher.
			  </p>
				<h3>Technische Dienstleistungen</h3>
			  <p>Benötigen Sie jemanden, der... <br>
				... defekte Pumpen tauscht?<br>
				... Heizungsleitungen demontiert?<br>
				... Heizkörper tauscht?<br>
				... Wärmetauscher reinigt?</p>
				<p>Dann sind Sie bei uns richtig.
				Gerne informieren wir Sie in einem persönlichen Gespräch über unser umfangreiches Angebot.</p>
			  <h3>Verwaltung der festgelegten Messgeräte</h3>
			  <p>Wir demontieren, eichen und tauschen Ihren Wärmemengenzähler.
			  Unsere bestens qualifizierten Mitarbeiter haben alle notwendigen Ausbildungen und Zertifikate dafür</p>
				<h3>Andere Leistungen</h3>
				<p>Wir bieten noch zahlreiche weitere Leistungen und sind offen für neue Ideen.
				<br>
				Sie sind an weitergehenden Informationen interessiert?
				Wir freuen uns auf Ihre Anfrage!</p>
				<div class="divider"></div>
				<a href="#produkty" class="close-produkty"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i> Produkty</a>
	   		</div>
	   <!-- PORADENSTVO -->
	   		<div class="poradenstvo">
				<div class="divider"></div>
				<img src="./img/poradenstvo.png" alt="Poradenstvo" style="width: 100%;">
				<div class="divider"></div>
	   			<h3>Beratung</h3>
				<p>Interessieren Sie sich dafür, wie Sie den Wirkungsgrad ihrer Anlage steigern oder ihren Energieverbrauch reduzieren?<br>
				Unsere Techniker und Energiebilanzierer beraten Sie gerne dabei, Ihre Energie effizienter und ökologischer zu nutzen.</p>
				<h3>Projekte</h3>
				<p>Gemeinsam entwickeln wir Projekte, die die Energieeffizienz verbessern, Eingangskosten ermäßgen und die Umweltverträglichkeit erhöhen. 
				Im Rahmen dieser Projekte für den Kunden stellen wir Folgendes sicher: die energietechnische Studie, den Maßsnahmenvorschlag, die Wahl der Lieferanten für die Realisierung, das Projekt-Engineering, das Bau-Engineering, die Umsetzung der vorgeschlagenen Maßnahmen und den darauf folgenden Betrieb im Bedarfsfall.</p>
				<h3>Individualität</h3>
				<p>In der Zusammenarbeit mit unseren Partnern liefern wir Projekte, die maßgeschneidert den Bedürfnissen des Kunden werden, mit dem Ziel den Energieaufwand der Gebäude und der Wärme-Energieanlagen, sowie den Wärmeverbrauch bzw. Produktion von Wärme/Kälte zu ermäßigen.</p>
				<p>Wir werden Partner des Kunden bei der Suche nach einer effektiven Lösung für den Betrieb der Wirtschaft mit Wärme und Energie, sowie auch für das Outsourcing in der Wärmeenergetik.</p>
				<div class="divider"></div>
				<a href="#produkty" class="close-produkty"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i> Produkty</a>
	   		</div>
	   <!-- VYSTAVBA -->
	   		<div class="vystavba">
				<div class="divider"></div>
				<img src="./img/vystavba.png" alt="Výstavba" class="w-100">
				<div class="divider"></div>
	   			<h3>Výstavba</h3>
				<p>Wie groß muss die Anlage sein? <br>
				Stimmen die technischen Parameter? <br>
				Wo kann gespart werden, wo besser nicht?<br>
				Was ist juristisch zu beachten? <br>
				<br>
				Wir kennen die Antworten auf diese Fragen.<br>
				<br>
				Wir errichten Ihre Heizung, ihre Belüftung oder ihr Kühlsystem. Wir kümmern uns um Konzeption und Planung.<br>
				Wir begleiten das Projekt. Wir betreiben die Anlage.</p>
				<h3>Investitionspartner</h3>
				<p>Sie überlegen ein neues Gebäude zu errichten oder ein bestehendes Gebäude zu modernisieren?
				Sie benötigen neue Wärme- oder Kälteerzeugungsanlagen und Innenleitungen oder auch eine bessere Isolierung?
				Sie denken über innovative Energiekonzepte (Wärmepumpe, Kogeneration, Photovoltaik & Solarzellen) nach?</p>
				<p>Dann sind wir Ihr Investitionspartner.
				Wir sind offen für unterschiedliche Contracting-Modelle.</p>
				<div class="divider"></div>
				<a href="#produkty" class="close-produkty"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i> Produkty</a>
	   		</div>
	   <!-- PREVADZKA -->
	   		<div class="prevadzka">
				<div class="divider"></div>
				<img src="./img/prevadzka.png" alt="Prevádzka" class="w-100">
				<div class="divider"></div>
	   			<h3>Prevádzka</h3>
				<p>Was wir hier für Sie machen:</p>
				<p>Regelmäßige Kontrollen<br>
				Administration und Verrechnung<br>
				Kostenaufteilung<br>
				Service<br>
				Instandhaltung</p>
				<p>Schon heute betreiben wir mehr als 40 Anlagen für Dritte. Unser kompetentes Personal unterstützt Sie gerne.</p>
				<div class="divider"></div>
				<a href="#produkty" class="close-produkty"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i> Produkty</a>
	   		</div>
	   <!-- NEWS -->
		   		
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
					<div class="ref-icon one material-button"><img src="./img/SVG icons/shopping.svg" alt="Nákupné centrá"></div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="ref-icon two material-button"><img src="./img/SVG icons/theatre_sport.svg" alt="Umenie šport a kultúra"></div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="ref-icon three material-button"><img src="./img/SVG icons/flats.svg" alt="Obytné zóny"></div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="ref-icon four material-button"><img src="./img/SVG icons/industry.svg" alt="Industriálne zóny"></div>
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
	   
	   					if(count($inzeraty) == 0){
							echo "<div class='row inzeraty'>
											<div class='col-md-3 img-stolicka'></div>
												<div class='col-md-9'>
												<h2>Vysnená práca</h2>
												<hr>
												<p><strong>V momente konkrétnu pozíciu nehľadáme.
												Ale tešíme sa že Vás budeme môcť spoznať.</strong></p>
												<p><strong>Pozícia:</strong> <span>Vysnená práca.</span></p>
												<p><strong>Miesto výkonu:</strong> <span>Tam, kde sa kúri.</span></p>
												<p><strong>Nástup:</strong> <span>Čo najskôr.</span></p>
												<div class='inzeraty-content'><p>
												<div class='row'>
													<div class='col-md-6'>
													<p><b>Požadujeme:</b></p>
													<ul>
													<li>samostatnosť,</li>
													<li>zodpovednosť,</li>
													<li>spoľahlivosť.</li>
													</ul>
													</div>
													<div class='col-md-6'>
													<p><b>Ponúkame:</b></p>
													<ul>
													<li>prácu v úspešnej, kontinuálne sa rozvíjajúcej spoločnosti,</li>
													<li>príležitosť spoluvytvárať úspechy spoločnosti,</li>
													<li>know-how medzinárodného holdingu,</li>
													<li>rôzne programy starostlivosti o zamestnancov.</li>
													</ul>
													</div>
												</div>
												</p>
												<hr>
												<p>Vaše žiadosti spolu s profesijným životopisom a súhlasom k spracovaniu osobných údajov v zmysle z.č. 24/2013 Z.z. zašlite na adresu: STEFE SK, a.s., Na Troskách 26, 974 01 Banská Bystrica alebo na <a href='mailto:kariera@stefe.sk'>kariera@stefe.sk</a></p>
												</div>
											</div>
												<div class='inzeraty-after stefe-btn'><i class='fa fa-arrow-circle-down' aria-hidden='true'></i> Viac</div>
										</div>
										";
						}else{
							
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
			$(".technickesluzby").removeClass("active").removeClass("letter");
			$(".poradenstvo").removeClass("active").removeClass("letter");
			$(".vystavba").removeClass("active").removeClass("letter");
			$(".prevadzka").removeClass("active").removeClass("letter");
		});
		$(".technicke-btn").click(function(){
			$(".technickesluzby").addClass("active").addClass("letter");	
			$(".teplo").removeClass("active").removeClass("letter");
			$(".poradenstvo").removeClass("active").removeClass("letter");
			$(".vystavba").removeClass("active").removeClass("letter");
			$(".prevadzka").removeClass("active").removeClass("letter");
		});
		$(".poradenstvo-btn").click(function(){
			$(".poradenstvo").addClass("active").addClass("letter");	
			$(".teplo").removeClass("active").removeClass("letter");
			$(".technickesluzby").removeClass("active").removeClass("letter");
			$(".vystavba").removeClass("active").removeClass("letter");
			$(".prevadzka").removeClass("active").removeClass("letter");
		});
		$(".vystavba-btn").click(function(){
			$(".vystavba").addClass("active").addClass("letter");	
			$(".teplo").removeClass("active").removeClass("letter");
			$(".technickesluzby").removeClass("active").removeClass("letter");
			$(".poradenstvo").removeClass("active").removeClass("letter");
			$(".prevadzka").removeClass("active").removeClass("letter");
		});
		$(".prevadzka-btn").click(function(){
			$(".prevadzka").addClass("active").addClass("letter");	
			$(".teplo").removeClass("active").removeClass("letter");
			$(".technickesluzby").removeClass("active").removeClass("letter");
			$(".poradenstvo").removeClass("active").removeClass("letter");
			$(".vystavba").removeClass("active").removeClass("letter");
		});
		$(".close-produkty").click(function(){
			setTimeout(function(){
			  $(".teplo").removeClass("active").removeClass("letter");
			  $(".technickesluzby").removeClass("active").removeClass("letter");
			  $(".poradenstvo").removeClass("active").removeClass("letter");
			  $(".vystavba").removeClass("active").removeClass("letter");
			  $(".prevadzka").removeClass("active").removeClass("letter");
			}, 500);	
		});
		  
		  $(function() {
			var taint, d, x, y;
			$(".material-button").mouseenter(function(e){
				if ($(this).find(".taint").length == 0) {
					$(this).prepend("<span class='taint'></span>")
				}
				taint = $(this).find(".taint");
				taint.removeClass("drop");
				if(!taint.height() && !taint.width()) {
					d = Math.max($(this).outerWidth(), $(this).outerHeight());
				taint.css({height: d, width: d});
				}
				x = e.pageX - $(this).offset().left - taint.width()/2;
				y = e.pageY - $(this).offset().top - taint.height()/2;
				taint.css({top: y+'px', left: x+'px'}).addClass("drop");
			});
		});
		  
	  </script>

  </body>

</html>
