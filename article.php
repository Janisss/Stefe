<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Stefe.sk</title>

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
	  <script src="https://apis.google.com/js/platform.js" async defer></script>
  </head>

  <body>

    <!-- LOADER -->
      <div class="se-pre-con">
      <div id="loader_hype_container" style="margin: -60px auto;position:relative;width:120px;height:120px;overflow:hidden;top:50%;">
        <script type="text/javascript" charset="utf-8" src="loader.hyperesources/loader_hype_generated_script.js?58297"></script>
      </div>
      </div>
    <!-- LOADER END -->
    
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
      <div class="container customW">
       <img src="./img/logo.svg" alt="Stefe" class="logo">
        <button class="navbar-toggler opensMenu" type="button">
          <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true" style="color: white;line-height: 1.5;"></i></span>
        </button>
        <div id="menucko" class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav m-auto main-menu">
            <li class="nav-item active">
              <a data-scroll class="nav-link" href="./index.php">Stefe SK</a>
            </li>
            <li class="nav-item">
              <a data-scroll class="nav-link" href="./index.php#produkty">Produkty</a>
            </li>
            <li class="nav-item">
              <a data-scroll class="nav-link" href="./index.php#aktuality">Aktuality</a>
            </li>
      <li class="nav-item">
              <a data-scroll class="nav-link" href="./index.php#referencie">Referencie</a>
            </li>
            <li class="nav-item">
              <a data-scroll class="nav-link" href="./index.php#kariera">Kariéra</a>
            </li>
            <li class="nav-item">
              <a data-scroll class="nav-link" href="./index.php#kontakty">Kontakty</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- NAVI END -->

    <!-- First line white -->
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
   <!-- First line white END -->

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
   	<span class="subheader"><?php echo "Vytvorené: ".$subheader; ?><br><a href="./index.php">Späť </a></span>
	<article class="main-content">
   	<div class="row">
   		<div class="col-lg-4"><?php echo"<div class='wrapperimg'><div class='img-round' style='background-image: url(./img/up/".$image.")'></div>" ?></div></div>
   		<div class="col-lg-8 align-self-center"><p class="content"><?php echo $outputtext; ?></p></div>
   	</div>
	   <!-- SHARE -->
	   <div class="float-right">
	   		<!--fcb butt-->
				<div class="fb-share-button float-right" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-size="small" data-mobile-iframe="true" style="margin-bottom: 5px;"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Zdieľať</a></div>
			<!-- google share -->
				<div class="g-plus" data-action="share"></div>

	   </div>
	   <div class="divider"></div>
	   <div class="divider"></div>
	</article>
   	<div class="divider"></div>
   

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
					
						$numbernewsread = 1;
						$limitnews = 9; // koľko noviniek zobrazí
						  foreach (array_reverse($news) as $data){
							  $cleantext = strip_tags($data["text"]);
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
