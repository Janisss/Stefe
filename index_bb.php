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
    <link rel="stylesheet" href="./vendor/snazzy/snazzy-info-window.min.css">
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
       <a href="./index.php"><img src="./img/logo.svg" alt="Stefe" class="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav m-auto">
            <li class="nav-item active">
              <a data-scroll class="nav-link" href="#">Stefe BB</a>
            </li>
            <li class="nav-item">
              <a data-scroll class="nav-link" href="#sluzby">Služby</a>
            </li>
            <li class="nav-item">
              <a data-scroll class="nav-link" href="#aktuality">Aktuality</a>
            </li>
            <li class="nav-item">
              <a data-scroll class="nav-link" href="#vypadky">Výpadky</a>
            </li>
            <li class="nav-item">
              <a data-scroll class="nav-link" href="#oznamy">Oznamy</a>
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
   		<div class="col-md-6 float-left hidden-md-down"><h2>STEFE - Banská Bystrica</h2></div>
   		<div class="col-md-6 float-right">
			<div class="dropdown show float-right stefe-dropdown">
			  <a class="btn dropdown-toggle" href="" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Vyberte vaše mesto</a>
			  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
				<a class="dropdown-item" href="#">Banská Bystrica</a>
				<a class="dropdown-item" href="#">Rimavská Sobota</a>
			  </div>
			</div>
			<a href="./index.php"><div class="btn stefe-btn float-right"><i class="fa fa-caret-square-o-left" aria-hidden="true"></i> Návrat na STEFE SK</div></a>
		</div>
   	</div>
   </div>
   <div class="container-fluid" style="padding: 0;">
		<div class="header-pic bb">
		</div>
   </div>
   <div class="container" style="padding: 0;">
   		<div class="well">
   			<blockquote class="blockquote">
			  <div class="myslienka"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
			  Integer posuere erat a ante.Integer posuere erat a ante.</p></div>
			  <footer class="blockquote-footer">Generálny riaditeľ STEFE SK <cite title="Source Title">Dalibor Líška</cite></footer>
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
							"text",
							"loc",
							"image"
						],[
							"status" => "<span style='color:var(--stefeGreen)'>publikované!</span>",
							"alarm" => "nie",
							"loc" => "bb"
						]);
							$limitForeach = 0; //3
						  foreach ($news as $data){
							 if(++$limitForeach >= 1){
								 echo "<div class='col-lg-4 col-md-6 col-sm-6'>
							  			<article class='card'>
							  				<header class='title-header'>
							  					<h3>".$data["nazov"]."</h3>
							  				</header>
							  				<div class='card-block'>
							  						<div class='img-card'>
							  							<img src='./img/up/".$data["image"]."' alt='mini' class='w-100' />
							  						</div><div class='newsintro'>".$data["text"]."
							  					</div><a href='./article.php?ID=".$data["ID"]."' class='btn btn-block stefe-btn'>Čítať viac</a>
							  				</div>
							  			</article>
							  		</div>";
						  		}
							 }
					?>
					
			</div>
			
			<!-- VYPADKY -->
			<div class="divider"></div>
		   		<div class="divider"></div>
			   <h1 id="vypadky"><span>Výpadky</span></h1>
			   <span class="subheader">Aktuálne výpadky v: Banská Bystrica</span>
					<button data-toggle="modal" data-target="#vypadokModal" class="btn alert-danger" style="margin-left: 15px;">Nahlásiť výpadok!</button><br><br>
				<div class="row" style="padding-left: 10px;padding-right:10px;">
				
				<?php
						$vypadky = $database->select("content", [
							"ID",
							"nazov",
							"text",
						],[
							"status" => "<span style='color:var(--stefeGreen)'>publikované!</span>",
							"loc" => "bb",
							"alarm" => "ano"
						]);
							$limitForeachb = 0; //3
						  if(count($vypadky) == 0){
							  echo("<div class='col-md-12'><h3 style='color: var(--stefeGreen)'><i class='fa fa-thumbs-up' aria-hidden='true'></i> Momentálne nemáme hlásené žiadne výpadky</h3><div class='divider'></div></div>");
							  echo("<div class='col-md-12'><button class='btn stefe-btn'>Nahlásiť výpadok</button></div>");
						  } else{
							  foreach ($vypadky as $data){
							 if(++$limitForeachb >= 1){
								 echo "<div class='col-lg-4 col-md-6 col-sm-6'>
							  			<article class='card alert-danger'>
							  				<header class='title-header' style='background-color:white;'>
							  					<h3><i class='fa fa-exclamation-circle' aria-hidden='true'></i> ".$data["nazov"]."</h3>
							  				</header>
							  				<div class='card-block'>
							  						<p class='tagline card-text text-xs-center vypadok'>".$data["text"]."
							  					</p>
							  				</div>
							  				<div class='disp'>Dispečing: +421 XXX YYY ZZZ</div>
							  			</article>
							  		</div>";
						  		}
							 }
						  }
					?>
					
			</div>
			<!-- VYPADKY END -->
			<div class="divider"></div>
			<!-- OZNAMY -->
			<h1 id="oznamy"><span>Oznamy</span></h1>
			<span class="subheader">Oznamy a dokumenty vo forme PDF.</span>
				<p class="maintext">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex mollitia impedit minus ullam quaerat animi ad sed, labore incidunt quos cumque architecto quia, eaque voluptatibus, dignissimos. Rem magnam inventore quas.</p>
					<ul>
						<li>Ozanm 1 <a href="#">Stiahnúť PDF <i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
						<li>Oznam 2 <a href="#">Stiahnúť PDF <i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
						<li>Oznam 3 <a href="#">Stiahnúť PDF <i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
						<li>Oznam 4 <a href="#">Stiahnúť PDF <i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
						<li>Oznam 5 <a href="#">Stiahnúť PDF <i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
						<li>Oznam 6 <a href="#">Stiahnúť PDF <i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
					</ul>
			<!-- OZNAMY END-->
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
    <!-- Modal -->
<div id="vypadokModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal VYPADOK content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Nahlásiť výpadok</h4>
		      </div>
		      <div class="modal-body">
		        
	<div class="pac-card" id="pac-card">
      <div>
        <div id="title">
          Vyplňte prosím lokalitu výpadku
        </div>
        <div id="type-selector" class="pac-controls">
          <input type="radio" name="type" id="changetype-all" checked="checked">
          <label for="changetype-all">All</label>

          <input type="radio" name="type" id="changetype-establishment">
          <label for="changetype-establishment">Establishments</label>

          <input type="radio" name="type" id="changetype-address">
          <label for="changetype-address">Addresses</label>

          <input type="radio" name="type" id="changetype-geocode">
          <label for="changetype-geocode">Geocodes</label>
        </div>
        <div id="strict-bounds-selector" class="pac-controls">
          <input type="checkbox" id="use-strict-bounds" value="">
          <label for="use-strict-bounds">Strict Bounds</label>
        </div>
      </div>
      <div id="pac-container">
        <input id="pac-input" type="text"
            placeholder="Začnite písať sem">
      </div>
    </div>
    <div id="map" style="height: 250px;"></div>
    <div id="infowindow-content">
      <img src="" width="16" height="16" id="place-icon">
      <span id="place-name"  class="title"></span><br>
      <span id="place-address"></span>
    </div>
	<form action="">
		<div class="form-group">
		 	<label for="exampleInputEmail1">Vaše meno</label>
		 	<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Vaše meno">
			<small id="emailHelp" class="form-text text-muted">Vaše údaje sú u nás v bezpečí.</small>

		 	<label for="exampleInputEmail1">Váš email</label>
		 	<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Váš email">

		 	<label for="exampleInputEmail1">Telefónne číslo</label>
		 	<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Telefónne číslo">
			<small id="emailHelp" class="form-text text-muted">Aby sme Vás mohli kontaktovať o riešení.</small>

			<textarea name="" id="" class="form-control"></textarea>
		</div>
	</form>
    <script>
      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -33.8688, lng: 151.2195},
          zoom: 13
        });
        var card = document.getElementById('pac-card');
        var input = document.getElementById('pac-input');
        var types = document.getElementById('type-selector');
        var strictBounds = document.getElementById('strict-bounds-selector');

        map.controls[google.maps.ControlPosition.TOP_RIGHT].push(card);

        var autocomplete = new google.maps.places.Autocomplete(input);

        // Bind the map's bounds (viewport) property to the autocomplete object,
        // so that the autocomplete requests use the current map bounds for the
        // bounds option in the request.
        autocomplete.bindTo('bounds', map);

        var infowindow = new google.maps.InfoWindow();
        var infowindowContent = document.getElementById('infowindow-content');
        infowindow.setContent(infowindowContent);
        var marker = new google.maps.Marker({
          map: map,
          anchorPoint: new google.maps.Point(0, -29)
        });

        autocomplete.addListener('place_changed', function() {
          infowindow.close();
          marker.setVisible(false);
          var place = autocomplete.getPlace();
          if (!place.geometry) {
            // User entered the name of a Place that was not suggested and
            // pressed the Enter key, or the Place Details request failed.
            window.alert("No details available for input: '" + place.name + "'");
            return;
          }

          // If the place has a geometry, then present it on a map.
          if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
          } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);  // Why 17? Because it looks good.
          }
          marker.setPosition(place.geometry.location);
          marker.setVisible(true);

          var address = '';
          if (place.address_components) {
            address = [
              (place.address_components[0] && place.address_components[0].short_name || ''),
              (place.address_components[1] && place.address_components[1].short_name || ''),
              (place.address_components[2] && place.address_components[2].short_name || '')
            ].join(' ');
          }

          infowindowContent.children['place-icon'].src = place.icon;
          infowindowContent.children['place-name'].textContent = place.name;
          infowindowContent.children['place-address'].textContent = address;
          infowindow.open(map, marker);
        });

        // Sets a listener on a radio button to change the filter type on Places
        // Autocomplete.
        function setupClickListener(id, types) {
          var radioButton = document.getElementById(id);
          radioButton.addEventListener('click', function() {
            autocomplete.setTypes(types);
          });
        }

        setupClickListener('changetype-all', []);
        setupClickListener('changetype-address', ['address']);
        setupClickListener('changetype-establishment', ['establishment']);
        setupClickListener('changetype-geocode', ['geocode']);

        document.getElementById('use-strict-bounds')
            .addEventListener('click', function() {
              console.log('Checkbox clicked! New state=' + this.checked);
              autocomplete.setOptions({strictBounds: this.checked});
            });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-uCVQo6SJpLqxzsnflcnXvxGyvr5uRpU&libraries=places&callback=initMap"
        async defer></script>

		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>

		  </div>
		</div>
	<!--MODAL END -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>
