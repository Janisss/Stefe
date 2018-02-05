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
    <link href="vendor/brickstone/brickstone_css.css?v=<?= rand(000000,9999999) ?>" rel="stylesheet" type="text/css">
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
        <button class="navbar-toggler opensMenu" type="button">
          <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true" style="color: white;line-height: 1.5;"></i></span>
        </button>
        <div id="menucko" class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav m-auto">
            <li class="nav-item active">
              <a class="nav-link" href="./index.php">Stefe SK
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
   		<div class="col-md-6 float-left hidden-md-down"><h2>STEFE - Hrejivé teplo domova</h2></div>
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
   <div class="container-fluid" style="padding: 0;">
		<div class="header-pic sk">
		</div>
   </div>

	<div class="container informacie">
	<div class="divider"></div>
		<h1><span>Informácie</span></h1>
		<span class="subheader">Dennostupne, Priemerné denné teploty</span>
		<div class="text">
		<p><b>Pri porovnávaní spotreby tepla na vykurovanie za jednotlivé mesiace v rámci roka sa naši odberatelia často stretávajú s pojmom "dennostupeň".</b></p>
		<p>Počet dennostupňov za určité časové obdobie charakterizuje klimatické podmienky. Čím sú klimatické podmienky náročnejšie, t.z. čím je vonku chladnejšie, tým je počet dennostupňov vyšší.</p>
		<p><b>Dennostupeň (°D) predstavuje rozdiel vnútornej teploty v byte (v priemere 20°C) a priemernej vonkajšej teploty.</b></p>
		<p>Napríklad: <br>	
		Priemerná vonkajšia denná teplota je - 2°C. Potom °D = 20 - (-2) = 22 <br>
		Alebo priemerná vonkajšia denná teplota je + 5°C. Potom °D = 20 - 5 = 15</p>
		<p><b>Dennostupne sa používajú pri výpočte tzv. merných spotrieb tepla na vykurovanie.</b> Táto merná spotreba cez dennostupne by mala byť na rovnakej úrovni. Samozrejme, ak sa v bytovom dome zrealizuje nejaké racionalizačné opatrenie, merná spotreba tepla na vykurovanie sa musí znížiť.</p>
		<p>Pre potreby operatívnych vyhodnocovaní, napr. ročných spotrieb tepla na vykurovanie v bytových domoch, uvádzame ako pomôcku vývoj dennostupňov v Banskej Bystrici v jednotlivých mesiacoch za posledných 10 rokov. </p>

		</div>
			<div class="row" style="margin-bottom: 40px;">
				<div class="col-md-4">
					<a href="./PDF/BB/priemerne-denne-teploty-2015.pdf">
						<i class="fa fa-file-pdf-o fa-5x i-center" aria-hidden="true"></i>
						<h4>Priemerné denné teploty 2015</h4>
					</a>
				</div>
				<div class="col-md-4">
					<a href="./PDF/BB/priemerne-denne-teploty-2016.pdf">
						<i class="fa fa-file-pdf-o fa-5x i-center" aria-hidden="true"></i>
						<h4>Priemerné denné teploty 2016</h4>
					</a>
				</div>
				<div class="col-md-4">
					<a href="./PDF/BB/priemerne-denne-teploty-2017.pdf">
						<i class="fa fa-file-pdf-o fa-5x i-center" aria-hidden="true"></i>
						<h4>Priemerné denné teploty 2017</h4>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<i class="fa fa-file-pdf-o fa-5x i-center" aria-hidden="true"></i>
					<h4>PDF názov súboru</h4>
				</div>
				<div class="col-md-4">
					<i class="fa fa-file-pdf-o fa-5x i-center" aria-hidden="true"></i>
					<h4>PDF názov súboru</h4>
				</div>
				<div class="col-md-4">
					<i class="fa fa-file-pdf-o fa-5x i-center" aria-hidden="true"></i>
					<h4>PDF názov súboru</h4>
				</div>
			</div>

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
						<button class="stefe-btn btn float-right">Odoslať</button>
			  	  </div>
    			</div>
    		</form>

		<!-- SOCIAL -->
		<div class="social">
			<a href="https://www.facebook.com/energia.stefe/" target="_blank" style="display: block;"><i class="fa fa-facebook fa-2x" style="color: white;" aria-hidden="true"></i></a>
	    <a href="https://www.youtube.com/channel/UCphx4zd6hjALHTs81CQDNwA/featured" target="_blank" style="display: block;"><i class="fa fa-youtube fa-2x" style="color: white;" aria-hidden="true"></i></a>
		</div>

    	</div>
    	</div>
    	<div class="container-fluid" style="background: #69BE28; min-height: 40px; margin: 0; padding:0; color: white;text-align: center;">
    		<div class="container subfooter">
    			<span><a href="./informacie.php">Informácie</a> | <a href="./sitemap.php">Mapa stránky</a> | <a href="www.brickstone.design" target="_blank">Web od Brickstone.design</a></span>
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
