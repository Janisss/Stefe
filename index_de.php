<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Stefe.sk - Homepage</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<script src="https://use.typekit.net/udj8vhg.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>
    <!-- Custom styles for this template -->
    <link href="vendor/brickstone/brickstone_css.css?v=<?= rand(000000,9999999) ?>" rel="stylesheet" type="text/css">
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
	  <div class="lang offset-right">
			<a href="./index.php">SK</a>	
			<a href="#">DE</a>	
		</div>

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
    	</div>
      <div class="container customW">
       <img src="./img/logo.svg" alt="Stefe" class="logo">
        <button class="navbar-toggler opensMenu">
          <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true" style="color: white;line-height: 1.5;"></i></span>
        </button>
        <div id="menucko" class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav m-auto main-menu">
            <li class="nav-item active">
              <a data-scroll class="nav-link" href="#">Stefe SK</a>
            </li>
            <li class="nav-item">
              <a data-scroll class="nav-link" href="#produkty">Produkte</a>
            </li>
            <li class="nav-item">
              <a data-scroll class="nav-link" href="#aktuality">News</a>
            </li>
			<li class="nav-item">
              <a data-scroll class="nav-link" href="#referencie">Referenzen</a>
            </li>
            <li class="nav-item">
              <a data-scroll class="nav-link" href="#kariera">Karriere</a>
            </li>
            <li class="nav-item">
              <a data-scroll class="nav-link" href="#kontakty">Kontakt</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- NAVI END -->

	<!-- First line white-->
   <div class="container first">
   	<div class="row">
   		<div class="col-md-6 float-left hidden-md-down"><h2>STEFE - Hrejivé teplo domova</h2></div>
   		<div class="col-md-6 float-right">
   			<div class="container">
			<div class="dropdown show float-right stefe-dropdown">
			  <a class="btn dropdown-toggle hit-me" href="" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Wählen Sie Ihre Stadt</a>
			  <div class="dropdown-menu toggleattr" aria-labelledby="dropdownMenuLink">
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
   </div>
   <!-- First line white END -->

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
  		<h1 id="produkty"><span>Produkte</span></h1>
  		<span class="subheader">Produktion und Lieferung</span>
	   		<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<a href="#scrollprodukty" class="link-clear">
					<div class="material-button teplo-btn">
						<div class="menu-icon"><i class="fa fa-thermometer fa-custom" aria-hidden="true"></i><span style="user-select: none;">Produktion und Lieferung</span>
						</div>
					</div>
					</a>
				</div>
				
				<div class="col-lg-6 col-md-6 col-sm-12">
					<a href="#scrollprodukty" class="link-clear">
					<div class="material-button technicke-btn">
						<div class="menu-icon"><i class="fa fa-cogs fa-custom" aria-hidden="true"></i><span style="user-select: none;">Dienstleistungen</span>
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
						<div class="menu-icon"><i class="fa fa-question-circle-o fa-custom" aria-hidden="true"></i><span style="user-select: none;">Beratung</span>
						</div>
					</div>
					</a>
				</div>
				
				<div class="col-lg-4 col-md-4 col-sm-12">
					<a href="#scrollprodukty" class="link-clear">
					<div class="material-button vystavba-btn">
						<div class="menu-icon"><i class="fa fa-wrench fa-custom" aria-hidden="true"></i><span style="user-select: none;">Ausbau</span>
						</div>
					</div>
					</a>
				</div>
				
				<div class="col-lg-4 col-md-4 col-sm-12">
					<a href="#scrollprodukty" class="link-clear">
					<div class="material-button prevadzka-btn">
						<div class="menu-icon"><i class="fa fa-building-o fa-custom" aria-hidden="true"></i><span style="user-select: none;">Anlagebetrieb</span>
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
						<img src="./img/vyroba.png" alt="teplo" class="w-100">
						<div class="divider"></div>
						<h3>Wärme</h3>
						<p>Sie leben zwischen Trnava, Martin und Rožňava?<br>
						Dann ist die Wahrscheinlichkeit groß, dass wir von STEFE bei Ihnen zuhause für Wärme sorgen. Wir machen Ihr Heim gemütlich warm und ihr Wasser angenehm heiß. Als einer der größten Wärmeversorger der Slowakei verbessern wir uns stetig - für Sie. <br>
						Sie fragen sich wie Fernwärme funktioniert, dann sehen Sie sich doch dieses video an:<a href="https://www.youtube.com/watch?v=EPZIAY9mdH8&t=5s">Hier klicken</a></p>
						<p>Versorgungssicherheit ist sehr wichtig für uns. Unsere Dispatcher überwachen unsere Kessel und kontrollieren das Netz. So stellen sie sicher, dass es bei Ihnen nicht kalt wird: 24 Stunden pro Tag - 7 Tage die Woche</p>
						<p>Sie haben Fragen? Unser Dispatching steht Ihnen jederzeit zur Verfügung. Wählen Sie in der oberen Menüleiste Ihre Stadt aus und rufen Sie uns unter der angeführten Telefonnummer an.</p>
						<h3>Kälte</h3>
						<p>Sie mögens lieber kühl?</p>
						<p>Wir haben die passende Lösung für Sie. STEFE produziert und liefert Kälte gemäß Ihren individuellen Anforderungen. Die technische Lösung, der Bau und der Betrieb der Anlage sind für Ihr Objekt maßgeschneidert und berücksichtigen Ihr Nutzungsverhalten, Umweltschutzanliegen und die lokalen Gegebenheiten.</p>
					<div class="divider"></div>
	   			
				<a href="#produkty" class="close-produkty"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i> Produkte</a>
	   		</div>
	   <!-- TECHNICKE SLUZBY -->
	   		<div class="technickesluzby">
				<div class="divider"></div>
				<img src="./img/sluzby.png" alt="Služby" class="w-100">
				<div class="divider"></div>
	   			<h3>Technische Dienstleistungen</h3>
				<p>STEFE bietet unterschiedliche Dienstleistungen für Privat- und Geschäftspersonen. Wir stellen Ihnen eine komplette Pflege der Heizungsanlage inklusive der Bedienung, des Betriebs, der Reparatur, Instandhaltung und des Fachservices sicher.
			  </p>
				<h3>Technische Dienstleistungen</h3>
			  <p>Benötigen Sie jemanden, der... <br>
				... defekte Pumpen tauscht?<br>
				... Heizungsleitungen demontiert?<br>
				... Heizkörper tauscht?<br>
				... Wärmetauscher reinigt?</p>
				<p>Dann sind Sie bei uns richtig. Gerne informieren wir Sie in einem persönlichen Gespräch über unser umfangreiches Angebot.</p>
			  <h3>Verwaltung der festgelegten Messgeräte</h3>
			  <p>Wir demontieren, eichen und tauschen Ihren Wärmemengenzähler. Unsere bestens qualifizierten Mitarbeiter haben alle notwendigen Ausbildungen und Zertifikate dafür.</p>
				<h3>Andere Leistungen</h3>
				<p>Wir bieten noch zahlreiche weitere Leistungen und sind offen für neue Ideen. 
				<br>
				Sie sind an weitergehenden Informationen interessiert? Wir freuen uns auf Ihre Anfrage!</p>
				<div class="divider"></div>
				<a href="#produkty" class="close-produkty"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i> Produkte</a>
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
				<p>Gemeinsam entwickeln wir Projekte, die die Energieeffizienz verbessern, Eingangskosten ermäßgen und die Umweltverträglichkeit erhöhen. Im Rahmen dieser Projekte für den Kunden stellen wir Folgendes sicher:<br>die energietechnische Studie, den Maßsnahmenvorschlag, die Wahl der Lieferanten für die Realisierung, das Projekt-Engineering, das Bau-Engineering, die Umsetzung der vorgeschlagenen Maßnahmen und den darauf folgenden Betrieb im Bedarfsfall.</p>
				<h3>Individualität</h3>
				<p>In der Zusammenarbeit mit unseren Partnern liefern wir Projekte, die maßgeschneidert den Bedürfnissen des Kunden werden, mit dem Ziel den Energieaufwand der Gebäude und der Wärme-Energieanlagen, sowie den Wärmeverbrauch bzw. Produktion von Wärme/Kälte zu ermäßigen.</p>
				<p>Wir werden Partner des Kunden bei der Suche nach einer effektiven Lösung für den Betrieb der Wirtschaft mit Wärme und Energie, sowie auch für das Outsourcing in der Wärmeenergetik.</p>
				<div class="divider"></div>
				<a href="#produkty" class="close-produkty"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i> Produkte</a>
	   		</div>
	   <!-- VYSTAVBA -->
	   		<div class="vystavba">
				<div class="divider"></div>
				<img src="./img/vystavba.png" alt="Výstavba" class="w-100">
				<div class="divider"></div>
	   			<h3>Ausbau</h3>
				<p>Wie groß muss die Anlage sein? <br>
				Stimmen die technischen Parameter? <br>
				Wo kann gespart werden, wo besser nicht?<br>
				Was ist juristisch zu beachten? <br>
				<br>
				Wir kennen die Antworten auf diese Fragen.<br>
				<br>
				Wir errichten Ihre Heizung, ihre Belüftung oder ihr Kühlsystem. Wir kümmern uns um Konzeption und Planung.</p>
				<p>Wir begleiten das Projekt. Wir betreiben die Anlage.</p>
				<h3>Investitionspartner</h3>
				<p>Sie überlegen ein neues Gebäude zu errichten oder ein bestehendes Gebäude zu modernisieren? Sie benötigen neue Wärme- oder Kälteerzeugungsanlagen und Innenleitungen oder auch eine bessere Isolierung? Sie denken über innovative Energiekonzepte (Wärmepumpe, Kogeneration, Photovoltaik & Solarzellen) nach?</p>
				<p>Dann sind wir Ihr Investitionspartner. Wir sind offen für unterschiedliche Contracting-Modelle.</p>
				<div class="divider"></div>
				<a href="#produkty" class="close-produkty"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i> Produkte</a>
	   		</div>
	   <!-- PREVADZKA -->
	   		<div class="prevadzka">
				<div class="divider"></div>
				<img src="./img/prevadzka.png" alt="Prevádzka" class="w-100">
				<div class="divider"></div>
	   			<h3>Anlagebetrieb</h3>
				<p>Was wir hier für Sie machen:</p>
				<p>Regelmäßige Kontrollen<br>
				Administration und Verrechnung<br>
				Kostenaufteilung<br>
				Service<br>
				Instandhaltung</p>
				<p>Schon heute betreiben wir mehr als 40 Anlagen für Dritte. Unser kompetentes Personal unterstützt Sie gerne.</p>
				<div class="divider"></div>
				<a href="#produkty" class="close-produkty"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i> Produkte</a>
	   		</div>
	   <!-- NEWS -->
		   		
		   		<div class="divider"></div>
		   		<div class="divider"></div>
			   <h1 id="aktuality"><span>News</span></h1>
			   <span class="subheader">Haupt News</span>
				<div class="row" style="padding-left: 10px;padding-right:10px;">

					<?php
						$news = $database->select("content", [
							"ID",
							"nazov",
							"intro",
							"image"
						],[
							"edit" => "visible",
							"alarm" => "nie"
						]);
					
						$numbernewsread = 1;
						$limitnews = 3; // koľko noviniek zobrazí
						  foreach (array_reverse($news) as $data){
							  $cleantext = strip_tags($data["intro"]);
						  		if ($numbernewsread <= $limitnews) {
						  			echo "<div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-6\">
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
			<h1 id="referencie"><span>Referenzen</span></h1>
			<span class="subheader">Unsere Klienten, Arbeit und Partner.</span>
				<div class="divider"></div>
			<div class="row" style="text-align: center;">
				<div class="col-md-3 col-sm-6 col-xs-6">
					<a href="#scrollreferencie"><div class="ref-icon one material-button"><img src="./img/SVG icons/shopping_de.svg" alt="Nákupné centrá"></div></a>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6">
					<a href="#scrollreferencie"><div class="ref-icon two material-button"><img src="./img/SVG icons/theatre_sport_de.svg" alt="Umenie šport a kultúra"></div></a>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6">
					<a href="#scrollreferencie"><div class="ref-icon three material-button"><img src="./img/SVG icons/flats_de.svg" alt="Obytné zóny"></div></a>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6">
					<a href="#scrollreferencie"><div class="ref-icon four material-button"><img src="./img/SVG icons/industry_de.svg" alt="Industriálne zóny"></div></a>
				</div>
			</div>
			
			<div id="scrollreferencie">
				<div class="ref-one">
					<img src="./img/Referencia_1.png" alt="Ref" style="width: 100%;padding-bottom: 10px;"> 
					<h3>Produktion und Lieferung von Wärme und Kälte für das Einkaufszentrum Galéria Lučenec</h3>
					<p><b>Durchgeführt von: STEFE ECB, s.r.o.</b></p>
					<p><b>Lösung für den Kunden:</b></p>
					<p>Für die Produktion von Wärme wird eine moderne Technologie anhand von Kondensationskessel mit der gesamt installierten Wärmeleistung von 1,7 MW verwendet. Die Produktion von Kälte wird anhand von zwei Kühleinheiten mit einem Schraubenkompressor, dessen gesamt installierte Leistung  1,5 MW einschließlich der Free Cooling Option darstellt, sichergestellt.</p>
					<p><b>Dienstleistungen für den Kunden:</b></p>
					<ol>
						<li>Sicherstellung der Produktion und Lieferung von Wärme und Kälte</li>
						<li>Garantie einer zuverlässigen, wirtschaftlichen und ökologischen Produktion und Lieferung von Wärme und Kälte</li>
						<li>Sicherstellung der Optimierung vom Betrieb, der gelieferten Wärme- und Kältemenge innerhalb von 15 Jahren</li>
					</ol>
					<a href="#referencie" class="close-ref"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i> Referenzen</a>
				</div>
				<div class="ref-two">
					<img src="./img/Referencia_2.png" alt="Ref" style="width: 100%;padding-bottom: 10px;"> 
					<h3>Rekonstruktion der Wärmeversorgung und Kältelieferung für das Theater Slovenské komorné divadlo in Martin</h3>
					<p><b>Durchgeführt von: STEFE Martin, a.s.</b></p>
					<p><b>Dienstleistungen für den Kunden:</b></p>
					<ol>
						<li>Realisierung einer kompletten Rekonstruktion aufgrund Grund des schlechten Zustandes</li>
						<li>Lieferung des Projektes einer technischen Lösung</li>
						<li>Lieferung einer neuen Kompaktübergabestation</li>
						<li><b>Hydraulischer Abgleich des Systems nach der Rekonstruktion</b></li>
						<li>Ausbau von Kühleinheit und Kälteverteilungen</li>
						<li>Modernisierung der Luftanlage mit der Rekuperation im Gebäude</li>
						<li>Betrieb und Instandhaltung der rekonstruierten technologischen Anlagen</li>
					</ol>
					<p><b>Vorteile für den Kunden:</b></p>
					<ol>
						<li>Realisierung und Finanzierung des Projekts durch STEFE Martin</li>
						<li>Wärmeeinsparung von 15% pro Jahr</li>
					</ol>
					<a href="#referencie" class="close-ref"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i> Referenzen</a>
				</div>
				<div class="ref-three">
					<img src="./img/Referencia_3.png" alt="Ref" style="width: 100%;padding-bottom: 10px;"> 
					<h3>Wärmelieferung für ein Industrieareal und der Heizung von Produktionshallen der Gesellschaft SL Slovakia </h3>
					<p><b>Durchgeführt von: STEFE Banská Bystrica, a.s.</b></p>
					<p><b>Lösung für den Kunden:</b></p>
					<p>In den gewünschten Produktionshallen wurde die ursprüngliche mobile Dieselaggregat-Heizung durch neue  Gasinfrastrahler und Destratifikatoren ersetzt. Dazu wurden neue Innenareal-Gasverteilungen eingebaut.</p>
					<p><b>Dienstleistungen für den Kunden:</b></p>
					<ol>
						<li>Projekt Engineering (Ausarbeiten einer Machbarkeitsstudie)</li>
						<li>Projektrealisierung (Einholen von Bewilligungen, Sicherstellung von gesetzlichen Pflichten)</li>
						<li>Form einer langfristigen Finanzierung - Rückzahlung von  Ersparnissen</li>
						<li>Sicherstellung von Subventionen von Slovseff Fonds (ein Programm, welches von der Slovenská sporiteľňa und der Europäischen Bank für Wiederaufbau und Entwicklung finanziert wird).</li>
						<li>Anschluss des Gaskessels an das 24h-Dispatching</li>
					</ol>
					<p><b>Vorteile für den Kunden:</b></p>
					<p>Außer Energie- und Finanzersparnissen hat sich die Qualität der Heizung von Produktionsräumen geändert.</p>
					<a href="#referencie" class="close-ref"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i> Referencie</a>
				</div>
				<div class="ref-four">
					<img src="./img/Referencia_4.png" alt="Ref" style="width: 100%;padding-bottom: 10px;"> 
					<h3>Projekt Austausch von liegenden Leitungen für Warmwasser und Zentralheizung</h3>
					<p><b>Durchgeführt von: STEFE Zvolen s.r.o.</b></p>
					<p><b>Riešenie pre zákazníka:</b></p>
					<p>Der Austausch von Leitungen wurde aufgrund des Alters und des schlechten Zustandes der Rohrleitungen durchgeführt. Die ursprünglich liegenden Leitungen haben sich im technischen Souterrain des Wohnungshauses befunden, wo wiederholt Störungen entstanden sind. Diese Störungen konnten wegen dem schlechten Zugang zu den Rohrleitungen nicht beseitigt werden. Zur Behebung dieses Problems wurde eine neue Trasse von liegenden Rohrleitungen unter der Decke in den Kellerräumen gelegt, von wo sie zu den einzelnen Wohnungen gezogen wird. Für die Realisierung wurden Stahl-, Kunststoff-Aluminium- und Polyäthylenrohrleitungen in den Helligkeiten von DN15 bis DN50 benutzt, die mit Armaturen abgeschlossen wurden. Zuerst wurde ausgehend von der Kompaktübergabestation eine neue Trasse von Rohrleitungen verlegt. Danach wurde allmählich die Verbindung zu den einzelnen Wohnungssteigleitungen und den Heizkörper durchgeführt.
					</p>
					<p><b>Dienstleistungen für den Kunden:</b></p>
					<ol>
						<li>Management des kompletten Austausch während 4 Wochen mit Pausen auf Wunsch des Kunden</li>
						<li>Projektrealisierung - Austausch der Warmwasserleitungen und der Zentralheizung nach dem vom Kunden vorgelegten Projekt</li>
						<li>Lieferung und der Montage von Armaturen</li>
						<li>Entlüftung der Armaturen, Heizkörper und Leitungen , Druckprüfung und Test der Funktionsfähigkeit von Leitungen für Zentralheizung und Warmwasser </li>
					</ol>
					<a href="#referencie" class="close-ref"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i> Referencie</a>
				</div>
			</div>

			<!-- Referencie end -->
			
			<!-- KARIERA -->
			<div class="divider"></div>
		   	<div class="divider"></div>
			<h1 id="kariera"><span>Karriere</span></h1>
			<span class="subheader">Arbeit suchen</span>
	   
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
												<p>V momente konkrétnu pozíciu nehľadáme.
												Ale tešíme sa že Vás budeme môcť spoznať.</p>
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
												<div class='inzeraty-after stefe-btn'><i class='fa fa-arrow-circle-down' aria-hidden='true'></i> Mehr</div>
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
    		<iframe src="https://snazzymaps.com/embed/16372" width="100%" height="450px" style="border:none;"></iframe>
    	</div>
    	<div class="col-md-6 kontakt nopadding">
    		<div class="divider"></div>
    		<form action="">
    			<div class="formwrapper">
    				<div class="form-group">
						<label for="meno">Kontaktieren Sie uns:</label>
						<input type="name" class="form-control" aria-describedby="emailHelp" placeholder="Name und Vorname">
				  	</div>
				  	<div class="form-group">
						<input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Email">
				  	</div>
				  	<div class="form-group">
						<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Telefonnummer">
				  	</div>
				  	<div class="form-group">
						<textarea rows="5" class="form-control" placeholder="Nachricht"></textarea>
			  	  </div>
			  	  <div class="form-group">
						<button class="stefe-btn btn float-right sendme">Sende</button>
			  	  </div>
    			</div>
    		</form>

		<!-- SOCIAL -->
		<div class="social">
			<a href="https://www.facebook.com/energia.stefe/" target="_blank" style="display: block;"><i class="fa fa-facebook fa-2x" style="color: white;" aria-hidden="true"></i></a>
	    <a href="https://www.youtube.com/channel/UCphx4zd6hjALHTs81CQDNwA/featured" target="_blank" style="display: block;"><i class="fa fa-youtube fa-2x" style="display: block; color: white;" aria-hidden="true"></i></a>
		</div>
		<!-- SOCIAL END -->

    	</div>
    	</div>
    	<div class="container-fluid" style="background: #69BE28; min-height: 40px; margin: 0; padding:0; color: white;text-align: center;">
    		<div class="container subfooter">
    			<span><a href="./sitemap.php">Sitemap</a> | <a href="http://brickstone.design/" target="_blank">Web by Brickstone.design</a></span>
    		</div>
    	</div>
    </footer>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	  
	  <script>
	  	//custom width
		 	function widthSize(){
			  	window["customWidth"] = (($( window ).width() - $(".customW").width()) / 2);
			  	$(".offset-left").filter(function(){
			  		$(this).css({"left":window["customWidth"] + "px"});
			  	});
			$(".offset-right").filter(function(){
				$(this).css({"right":window["customWidth"] + "px"});
			});
		  };
		  
		  var stred_okna;
		  $( window ).resize(function() {
		  	stred_okna = ($(window).height())/3;
		    $(".social").css({top: (stred_okna)+"px"});
			  widthSize()
			  scrollTopp()
			});
		
		  $(window).resize();


		 $(window).on('load', function () {
	     	$(".se-pre-con").fadeOut("fast");
		 });



		



		 $(window).scroll(function () {
		 	scrollTopp()
		 	widthSize()
		 });
		 function scrollTopp() {
			    if ($(document).scrollTop() > 120)
		        {
		        	$(".hit-me").addClass("flip offset-right");
		        	$(".hit-me").css({"right":window["customWidth"] + "px"});
		        	$(".toggleattr").attr({"id":"custom-m"});
		        	$(".toggleattr").css({"right":(window["customWidth"]) + 80 + "px"});

		        }else{
		        	$(".hit-me").removeClass("flip offset-right");
		        	$(".toggleattr").attr({"id":""});
		        }
		   };

		 // MENU MINU TOGGLER
		 $(".opensMenu").click(function(e){
		 	e.stopPropagation();
			$("#menucko").toggleClass("openMenu");
        });
		 $(document).click(function(){
        	$("#menucko").removeClass("openMenu");
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
			$(".teplo").addClass("active letter");
			$(".technickesluzby").removeClass("active letter");
			$(".poradenstvo").removeClass("active letter");
			$(".vystavba").removeClass("active letter");
			$(".prevadzka").removeClass("active letter");
		});
		$(".technicke-btn").click(function(){
			$(".technickesluzby").addClass("active letter");	
			$(".teplo").removeClass("active letter");
			$(".poradenstvo").removeClass("active letter");
			$(".vystavba").removeClass("active letter");
			$(".prevadzka").removeClass("active letter");
		});
		$(".poradenstvo-btn").click(function(){
			$(".poradenstvo").addClass("active letter");	
			$(".teplo").removeClass("active letter");
			$(".technickesluzby").removeClass("active letter");
			$(".vystavba").removeClass("active letter");
			$(".prevadzka").removeClass("active letter");
		});
		$(".vystavba-btn").click(function(){
			$(".vystavba").addClass("active letter");	
			$(".teplo").removeClass("active letter");
			$(".technickesluzby").removeClass("active letter");
			$(".poradenstvo").removeClass("active letter");
			$(".prevadzka").removeClass("active letter");
		});
		$(".prevadzka-btn").click(function(){
			$(".prevadzka").addClass("active letter");	
			$(".teplo").removeClass("active letter");
			$(".technickesluzby").removeClass("active letter");
			$(".poradenstvo").removeClass("active letter");
			$(".vystavba").removeClass("active letter");
		});
		$(".close-produkty").click(function(){
			setTimeout(function(){
			  $(".teplo").removeClass("active letter");
			  $(".technickesluzby").removeClass("active letter");
			  $(".poradenstvo").removeClass("active letter");
			  $(".vystavba").removeClass("active letter");
			  $(".prevadzka").removeClass("active letter");
			}, 500);	
		});

		$(".ref-icon.one").click(function(){
			$(".ref-one").addClass("active letter");
			$(".ref-two").removeClass("active letter");
			$(".ref-three").removeClass("active letter");
			$(".ref-four").removeClass("active letter");
		});
		$(".ref-icon.two").click(function(){
			$(".ref-two").addClass("active letter");	
			$(".ref-one").removeClass("active letter");
			$(".ref-three").removeClass("active letter");
			$(".ref-four").removeClass("active letter");
		});
		$(".ref-icon.three").click(function(){
			$(".ref-three").addClass("active letter");
			$(".ref-one").removeClass("active letter");
			$(".ref-two").removeClass("active letter");
			$(".ref-four").removeClass("active letter");
		});
		$(".ref-icon.four").click(function(){
			$(".ref-four").addClass("active letter");
			$(".ref-one").removeClass("active letter");
			$(".ref-two").removeClass("active letter");
			$(".ref-three").removeClass("active letter");
		});
		$(".close-ref").click(function(){
			setTimeout(function(){
			  $(".ref-one").removeClass("active letter");
			  $(".ref-two").removeClass("active letter");
			  $(".ref-three").removeClass("active letter");
			  $(".ref-four").removeClass("active letter");
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

		  

		  /*

		  */
		  
	  </script>

  </body>

</html>
