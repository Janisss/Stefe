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
			<a href="#">SK</a>	
			<a href="./index_de.php">DE</a>	
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
        <button class="navbar-toggler opensMenu" type="button">
          <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true" style="color: white;line-height: 1.5;"></i></span>
        </button>
        <div id="menucko" class="collapse navbar-collapse">
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
    <!-- NAVI END -->

	<!-- First line white-->
   <div class="container first">
   	<div class="row">
   		<div class="col-md-6 float-left iphone-hide"><h2>STEFE - Hrejivé teplo domova</h2></div>
   		<div class="col-md-6 float-right">
   			<div class="container">
			<div class="dropdown show float-right stefe-dropdown">
			  <a class="btn dropdown-toggle hit-me" href="" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Vyberte vaše mesto</a>
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
  		<h1 id="produkty"><span>Produkty</span></h1>
  		<span class="subheader">Výroba a dodávka</span>
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
						<img src="./img/vyroba.png" alt="teplo" class="w-100">
						<div class="divider"></div>
						<h3>Teplo</h3>
						<p>Bývate niekde medzi Trnavou, Martinom a Rožňavou?<br>
						Potom je veľmi pravdepodobné, že o Vaše teplo v domácnosti sa staráme my zo STEFE. Robíme Váš domov príjemne teplým a Vašu vodu príjemne horúcou. Ako jeden z najväčších dodávateľov tepla na Slovensku sa neustále zlepšujeme - kvôli Vám.</p>
						<p>Ak sa pýtate, ako funguje diaľkové vykurovanie, pozrite si naše video: <a href="https://www.youtube.com/watch?v=EPZIAY9mdH8&t=5s">Kliknúť tu</a></p>
						<p>Záleží nám na tom, aby sme Vám spoľahlivo dodali teplo. Naši dispečeri dohliadajú na naše kotly a kontrolujú sieť. Preto si môžete byť istí, že Vám chladno nebude: sme k dispozícii 24 hodín denne, 7 dní v týždni.</p>
						<p>Máte otázky? Naši dispečeri sú Vám kedykoľvek k dispozícii. V hornom menu si zvoľte Vaše mesto a zavolajte nám na nižšie uvedené telefónne číslo.</p>
						<h3>Chlad</h3>
						<p>Máte radšej chladnejšie prostredie?</p>
						<p>Máme pre Vás riešenie. STEFE vyrába a dodáva chlad podľa Vašich individuálnych požiadaviek. Technické parametre, montáž a prevádzka sú ušité na mieru a zohľadňujú jeho využitie, prírodné podmienky a danosti danej lokality.</p>
					<div class="divider"></div>
	   			
				<a href="#produkty" class="close-produkty"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i> Produkty</a>
	   		</div>
	   <!-- TECHNICKE SLUZBY -->
	   		<div class="technickesluzby">
				<div class="divider"></div>
				<img src="./img/sluzby.png" alt="Služby" class="w-100">
				<div class="divider"></div>
	   			<h3>Technicke Služby</h3>
				<p>STEFE ponúka rozličné služby pre súkromné osoby a podnikateľov. Zabezpečíme Vám komplexnú starostlivosť o tepelné energetické zariadenia vrátane obsluhy, prevádzky, údržby, opravy a odborného servisu.
			  </p>
				<h3>Technické služby</h3>
			  <p>Potrebujete niekoho, kto ...<br>
				... vymení pokazené čerpadlá?<br>
				... demontuje tepelné rúry?<br>
				... vymení vyhrievacie teleso?<br>
				... vyčistí výmenník tepla?</p>
				<p>Potom ste u nás správne. Radi Vás osobne poinformujeme o našej širokej ponuke.</p>
			  <h3>Správa určených meradiel</h3>
			  <p>Demontujeme, ciachujeme, kalibrujeme a vymieňame merače tepla. Naši vysokokvalifikovaní pracovníci majú pre tieto účely dosiahnuté potrebné vzdelanie a certifikáty.</p>
				<h3>Iné služby</h3>
				<p>Ponúkame aj mnohé iné služby a sme otvorení novým nápadom.
				<br>
				Máte záujem o ďalšie informácie? Tešíme sa na Vaše otázky!</p>
				<div class="divider"></div>
				<a href="#produkty" class="close-produkty"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i> Produkty</a>
	   		</div>
	   <!-- PORADENSTVO -->
	   		<div class="poradenstvo">
				<div class="divider"></div>
				<img src="./img/poradenstvo.png" alt="Poradenstvo" style="width: 100%;">
				<div class="divider"></div>
	   			<h3>Poradenstvo</h3>
				<p>Zaujíma Vás, ako zvýšiť efektivitu Vášho zariadenia alebo ako znížiť jeho spotrebu energie?  <br>
				Naši technickí a energetickí špecialisti Vám radi poradia, ako čo najefektívnejšie a najekologickejšie využiť energiu.</p>
				<h3>Projekty</h3>
				<p>Spoločne vytvárame projekty, v ktorých sa zameriavame nielen na zvýšenie energetickej efektívnosti, zníženie vstupných nákladov na energie, ale aj na vplyv týchto opatrení na životné prostredie. V rámci týchto projektov pre zákazníka zabezpečujeme: <br>energeticko-technickú štúdiu, návrh opatrení, výber dodávateľov na realizáciu, projektový inžiniering, stavebný inžiniering, realizáciu navrhnutých opatrení a následnú prevádzku v prípade potreby. </p>
				<h3>Individualita</h3>
				<p>V spolupráci s našimi partnermi poskytujeme projekty šité na mieru pre zákazníka s cieľom zníženia energetickej náročnosti budovy a tepelno-energetických zariadení, ako aj zníženia spotreby tepla, resp. výroby tepla/chladu. </p>
				<p>Pre zákazníka sme partnerom pri hľadaní efektívneho riešenia prevádzky tepelného energetického hospodárstva ako aj pre outsourcing v tepelnej energetike.</p>
				<div class="divider"></div>
				<a href="#produkty" class="close-produkty"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i> Produkty</a>
	   		</div>
	   <!-- VYSTAVBA -->
	   		<div class="vystavba">
				<div class="divider"></div>
				<img src="./img/vystavba.png" alt="Výstavba" class="w-100">
				<div class="divider"></div>
	   			<h3>Výstavba</h3>
				<p>Aké veľké musí byť zariadenie?<br>
				Sedia technické parametre?<br>
				Kde sa dá ušetriť a kde radšej nešetriť?<br>
				Na čo si dávať pozor z právneho hľadiska?<br>
				<br>
				Poznáme odpovede na tieto otázky.<br>
				<br>
				Povedieme projekt. Sprevádzkujeme zariadenie.</p>
				<h3>Investičný partner</h3>
				<p>Máte v pláne postaviť novú budovu alebo zmodernizovať tú súčasnú? Potrebujete nové zariadenie na výrobu tepla alebo chladu a vnútorné vedenie alebo tiež lepšiu izoláciu? Uvažujete nad inovatívnym energetickým návrhom (tepelné čerpadlo, kogenerácia, fotovoltaické & solárne panely)?</p>
				<p>V tom prípade sme Vaším investičným partnerom. Sme otvorení rôznym formám zmluvných vzťahov.</p>
				<div class="divider"></div>
				<a href="#produkty" class="close-produkty"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i> Produkty</a>
	   		</div>
	   <!-- PREVADZKA -->
	   		<div class="prevadzka">
				<div class="divider"></div>
				<img src="./img/prevadzka.png" alt="Prevádzka" class="w-100">
				<div class="divider"></div>
	   			<h3>Prevádzka</h3>
				<p>V tom prípade sme Vaším investičným partnerom. Sme otvorení rôznym formám zmluvných vzťahov.</p>
				<p>Pravidelné kontroly<br>
				Administratíva a vyúčtovanie<br>
				Rozvrhnutie nákladov<br>
				Servis<br>
				Údržba</p>
				<p>V súčasnosti prevádzkujeme viac než 40 zariadení pre tretie osoby. Náš kompetentný personál je Vám vždy k dispozícii.</p>
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
			<h1 id="referencie"><span>Referencie</span></h1>
			<span class="subheader">Naši klienti, naša práca a partneri.</span>
				<div class="divider"></div>
			<div class="row" style="text-align: center;">
				<div class="col-md-3 col-sm-6 col-xs-6">
					<a href="#scrollreferencie"><div class="ref-icon one material-button"><img src="./img/SVG icons/shopping.svg" alt="Nákupné centrá"></div></a>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6">
					<a href="#scrollreferencie"><div class="ref-icon two material-button"><img src="./img/SVG icons/theatre_sport.svg" alt="Umenie šport a kultúra"></div></a>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6">
					<a href="#scrollreferencie"><div class="ref-icon three material-button"><img src="./img/SVG icons/flats.svg" alt="Obytné zóny"></div></a>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6">
					<a href="#scrollreferencie"><div class="ref-icon four material-button"><img src="./img/SVG icons/industry.svg" alt="Industriálne zóny"></div></a>
				</div>
			</div>
			
			<div id="scrollreferencie">
				<div class="ref-one">
					<img src="./img/Referencia_1.png" alt="Ref" style="width: 100%;padding-bottom: 10px;"> 
					<h3>Výroba a dodávka tepla a chladu pre OC Galéria Lučenec </h3>
					<p><b>Realizuje: STEFE ECB, s.r.o.</b></p>
					<p><b>riešenie pre zákazníka: </b></p>
					<p>Na výrobu tepla je použitá moderná technológia s využitím kondenzačných kotlov  s celkovým inštalovaným tepelným výkonom 1,7 MW a výrobu chladu zabezpečujú dve chladiace  jednotky  so skrutkovým kompresorom s celkovým inštalovaným výkonom 1,5 MW vrátane možnosti free-coolingu.</p>
					<p><b>Služby pre zákazníka:</b></p>
					<ol>
						<li>zabezpečenie výroby, dodávky tepla a chladu</li>
						<li>garantovanie spoľahlivej, hospodárnej a ekologickej výroby a dodávky tepla a chladu</li>
						<li>zaručenie optimalizácie prevádzky, dodaného množstva tepla a chladu po dobu 15 rokov</li>
					</ol>
					<a href="#referencie" class="close-ref"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i> Referencie</a>
				</div>
				<div class="ref-two">
					<img src="./img/Referencia_2.png" alt="Ref" style="width: 100%;padding-bottom: 10px;"> 
					<h3>Rekonštrukcia zásobovania teplom a dodávka chladu pre Slovenské komorné divadlo v Martine</h3>
					<p><b>Realizuje: STEFE Martin, a.s.</b></p>
					<p><b>Služby pre zákazníka:</b></p>
					<ol>
						<li>realizácia kompletnej rekonštrukcie z dôvodu havarijného stavu</li>
						<li>dodanie projektu technického riešenia</li>
						<li>dodávka novej horúcovodnej KOST</li>
						<li><b>hydraulické vyregulovanie systému po rekonštrukcii</b></li>
						<li>vybudovanie chladiacej jednotky a rozvodov chladu</li>
						<li>modernizácia vzduchotechniky s rekuperáciou v budove</li>
						<li>prevádzka a údržba rekonštruovaných technologických zariadení</li>
					</ol>
					<p><b>Výhody pre zákazníka:</b></p>
					<ol>
						<li>dodanie diela na kľúč, financovanie diela spoločnosťou STEFE Martin</li>
						<li>ročná úspora spotreby tepla 15%</li>
					</ol>
					<a href="#referencie" class="close-ref"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i> Referencie</a>
				</div>
				<div class="ref-three">
					<img src="./img/Referencia_3.png" alt="Ref" style="width: 100%;padding-bottom: 10px;"> 
					<h3>Projekt zásobovania teplom priemyselného areálu a vykurovanie výrobných hál pre SL Slovakia</h3>
					<p><b>Realizuje: STEFE Banská Bystrica, a.s.</b></p>
					<p><b>Riešenie pre zákazníka:</b></p>
					<p>Vo vybraných výrobných halách sa pôvodný spôsob vykurovania prostredníctvom mobilných dieselagregátov nahradil plynovými infražiaričmi a destratifikátormi. Boli vybudované nové vnútroareálové plynové rozvody.</p>
					<p><b>Služby pre zákazníka:</b></p>
					<ol>
						<li>projektový inžiniering (vypracovanie štúdie realizovateľnosti)</li>
						<li>dodanie diela na kľúč (realizácia, vybavenie povolení, zabezpečenie zákonných povinností) </li>
						<li>spôsob dlhodobého financovania – splácanie z úspor</li>
						<li>zabezpečenie dotácie z prostriedkov programu Slovseff financovaného Slovenskou sporiteľňou a Európskou bankou pre obnovu a rozvoj</li>
						<li>napojenie plynovej kotolne na 24 hodinových dispečing</li>
					</ol>
					<p><b>Výhody pre zákazníka:</b></p>
					<p>okrem energetických a finančných úspor zásadnú zmenu kvality a komfortu vykurovania výrobných priestorov. </p>
					<a href="#referencie" class="close-ref"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i> Referencie</a>
				</div>
				<div class="ref-four">
					<img src="./img/Referencia_4.png" alt="Ref" style="width: 100%;padding-bottom: 10px;"> 
					<h3>Projekt výmena ležatých rozvodov TÚV a  ÚK</h3>
					<p><b>Realizuje: STEFE Zvolen s.r.o.</b></p>
					<p><b>Riešenie pre zákazníka:</b></p>
					<p>Výmena rozvodov sa realizovala z dôvodu veku potrubia a jeho havarijného stavu. Pôvodné ležaté rozvody boli situované v technickom suteréne bytového domu, kde opakovane vznikali poruchy na potrubí. Tieto poruchy nebolo možné vždy úplne odstrániť pre zlý prístup k potrubiam. 
					Nová trasa ležatých potrubných rozvodov je teraz vedená pod stropom v pivničných priestoroch a na chodbách, odkiaľ následne pokračuje do jednotlivých bytov. Na realizáciu diela boli použité oceľové, plast hliníkové a polyetylénové potrubia vo svetlostiach od DN15 do DN50 ukončené armatúrami. Najskôr bola vybudovaná nová trasa potrubia realizáciou zváraním , od KOST bola vedená pod stropom až po poslednú stupačku v bytovom dome. Následne na to bol postupne  realizovaný prepoj na jednotlivé bytové stupačky a vykurovacie telesá. 
					</p>
					<p><b>Služby pre zákazníka:</b></p>
					<ol>
						<li>manažovanie celej výmeny počas doby 4 týždňov s prestávkami podľa požiadaviek zákazníka</li>
						<li>dodávka diela - realizácia výmeny ležatých rozvodov TÚV, ÚK, podľa projektu predloženého zákazníkom </li>
						<li>demontáž ležatých rozvodov </li>
						<li>realizácia nových rozvodov, vrátane dodávky a montáže armatúr</li>
						<li>po zrealizovaní diela sa všetky vykurovacie telesá odvzdušnili, plne sprevádzkovali, odskúšala sa funkčnosť rozvodu ÚK a TÚV.</li>
					</ol>
					<a href="#referencie" class="close-ref"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i> Referencie</a>
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
    		<iframe src="https://snazzymaps.com/embed/16372" width="100%" height="450px" style="border:none;"></iframe>
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
						<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Telefónne číslo">
				  	</div>
				  	<div class="form-group">
						<textarea rows="5" class="form-control" placeholder="Správa"></textarea>
			  	  </div>
			  	  <div class="form-group">
						<button class="stefe-btn btn float-right sendme">Odoslať</button>
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
    			<span><a href="./sitemap.php">Mapa stránky</a> | <a href="http://brickstone.design/" target="_blank">Web od Brickstone.design</a></span>
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
