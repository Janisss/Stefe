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
  <script src="/js/smooth-scroll.js"></script>
  </head>

  <body>
<!-- FACEBOOK -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/sk_SK/sdk.js#xfbml=1&version=v2.10&appId=441539876025445";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


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

		$clanokID = $_GET['ID'];
		
		$header = $database->get("content", "nazov", [
				"ID" => $clanokID
			]);
	  	
		$text = $database->get("content", "text", [
				"ID" => $clanokID
			]);
	  	$outputtextstyle = preg_replace('/(<[^>]+) style=".*?"/i', '$1', $text); //remove style attr
		$outputtext = str_replace("<strong>" , "", $outputtextstyle);// remove strong style
	  
		$subheader = $database->get("content", "datum", [
				"ID" => $clanokID
			]);
		$image = $database->get("content", "image", [
				"ID" => $clanokID
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
              <a class="nav-link" href="./index.php">Stefe SK
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


   <div class="container first">
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
		<div class="header-pic sk">
		</div>
   </div>
   <div class="container" style="padding: 0;">
   		<div class="well">
   		</div>
   </div>
   <div class="container" style="padding-top:30px">
   	<h1><span><?php echo $header; ?></span></h1>
   	<span class="subheader"><a href="./index.php">Späť </a><?php echo "Vytvorené: ".$subheader; ?></span>
   	<div class="row">
   		<div class="col-lg-4"><?php echo"<div class='wrapperimg'><div class='img-round' style='background-image: url(./img/up/".$image.")'></div>" ?></div></div>
   		<div class="col-lg-8 align-self-center"><p class="content"><?php echo $outputtext; ?></p></div>
   	</div>
   	<div class="divider"></div>
   <!--fcb butt-->
   	<div class="fb-share-button float-right" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Zdieľať</a></div>

   	<!-- Aktuality -->
   	<div class="divider"></div>
		   		<div class="divider"></div>
			   <h1><span>Ďalšie aktuality</span></h1>
			   <span class="subheader">Zaujal Vás tento článok?</span>
				<div class="row" style="padding-left: 10px;padding-right:10px;">

					<?php
						$news = $database->select("content", [
              "ID",
              "nazov",
              "text",
              "image"
            ],[
              "status" => "<span style='color:var(--stefeGreen)'>publikované!</span>",
              "alarm" => "nie"
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
							  						</div><div class='newsintro'>".$data["text"]."
							  					</div><a href='./article.php?ID=".$data["ID"]."' class='btn btn-block stefe-btn'><i class='fa fa-eye'></i> Čítať viac</a>
							  				</div>
							  			</article>
							  		</div>";
						  }
					?>
					
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

  </body>

</html>
