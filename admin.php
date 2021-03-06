<?php
	session_start();
	$sessionname = $_SESSION["myname"];
if (isset($_POST["logout"])) {
	session_destroy();
	header("Location: ./admin.php");
	exit;
};
if ($sessionname == ""){
	header("Location: ./login.php");
	exit;
};
?>
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
    <script src="js/smooth-scroll.js"></script>
	<link rel="stylesheet" type="text/css" href="css/simditor.css" />
  </head>
  <body>
		
	  
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
              <a class="nav-link" href="#clanky">Články
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#vypadky">Výpadky</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- navi end -->
    
      <div class="container first" style="padding: 0;">
				  
      	<div class="header-admin">
			<h3 style="color: white;">Admin - STEFE SK</h3>
      	</div>
      </div>
      <div class="container">
      	<div class="divider"></div>
        	<h1 id="clanky"><span>Články</span></h1>
        	
		<button type="button" class="btn stefe-btn btn-sm float-right" data-toggle="modal" data-target="#archiv" style="margin:0 0 0 5px;font-size: 1.1rem;">zobraziť archív</button>
		<button type="button" class="btn stefe-btn btn-sm float-right" data-toggle="modal" data-target="#novyclanok" style="margin:0;font-size: 1.1rem;">+ pridať článok</button>
		  
	  <table class="table">
  <thead class="thead-inverse">
    <tr>
      <th>ID</th>
      <th>Autor</th>
      <th>Publikované</th>
      <th>Názov</th>
      <th>Úvod</th>
      <th>Status</th>
      <th>Upraviť</th>
    </tr>
  </thead>
  <tbody>
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
	  
		$myname = $database->get("tabulka", "celemeno", [
				"meno" => $sessionname
			]);
	  	$myloc = $database->get("tabulka", "loc", [
				"meno" => $sessionname
			]);
	  
		if (isset($_POST["zobraz"])) {

			$editID = $_POST["idedit"];
			$database->update("content", [
					"status" => "<span style='color:var(--stefeGreen)'>publikované!</span>",
					"edit" => "visible"
				], [
					"ID" => $editID
				]);
			header('Location: '.$_SERVER['PHP_SELF']);
			exit();
		}

		if (isset($_POST["skryt"])) {

			$editID = $_POST["idedit"];

			$database->update("content", [
					"status" => "skryté!",
					"edit" => "waiting"
				], [
					"ID" => $editID
				]);
			header('Location: '.$_SERVER['PHP_SELF']);
			exit();
		}

		if (isset($_POST["del"])) {

			$editID = $_POST["idedit"];

			$database->update("content", [
					"edit" => "hidden"
				], [
					"ID" => $editID
			]);
			
			header('Location: '.$_SERVER['PHP_SELF']);
			exit();
		}

	  
	  $datas_main = $database->select("content", [
		"ID",
		"autor",
		"datum",
		"nazov",
		"intro",
		"status",
		"edit"
		], [
		"alarm" => "nie",
		"edit" => ["visible","waiting"]
		]);

			foreach(array_reverse($datas_main) as $data)
		{
				$cleantext = $data["intro"];
			echo "<tr><th scope='row'>".$data["ID"]."</th><td>".$data["autor"]."</td><td>".$data["datum"]."</td><td>".$data["nazov"]."</td><td>".$cleantext."</td><td>".$data["status"]."</td><td>
			<form method='post' action='admin.php'>
			<input type='text' name='idedit' hidden value='".$data["ID"]."'>";
				if($data["edit"] == "waiting"){
					echo "<a href='./nahlad.php?ID=".$data["ID"]."' class='btn btn-block btn-warning btn w-100' target='_blank'> <i class='fa fa-eye' aria-hidden='true'></i>Náhlad</a>
						  <input type='submit' name='editMe' class='btn btn-success btn-sm w-100' value='Upraviť'>
						  <button type='submit' class='btn btn-warning btn w-100'><i class='fa fa-pencil-square-o' aria-hidden='true'></i> Upraviť</button>
						  <button type='submit' class='btn btn-danger btn w-100'><i class='fa fa-trash' aria-hidden='true'></i> Zmazať</button>
						  <button type='submit' class='btn btn-success btn w-100'><i class='fa fa-check-circle-o' aria-hidden='true'></i> Uverejniť</button>
						  <button type='submit' class='btn btn-secondary btn w-100'><i class='fa fa-archive' aria-hidden='true'></i> Archivovať</button>
						  <input type='submit' name='zobraz' class='btn btn-success btn-sm w-100' value='Uverejniť'>
						<input type='submit' name='delete' class='btn btn-danger btn-sm w-100' value='X'>";
				}elseif($data["edit"] == "visible"){
				};
			echo "
			<input type='submit' name='del' class='btn btn-danger btn-sm w-100' value='Archivovať'>
			</form></td></tr>";
			
		}
?>
  </tbody>
</table>

<!-- edit modal -->
<div id="modalEdit" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Upraviť článok</h4>
      </div>
      <div class="modal-body">
        
			<?php
				if (isset($_POST["editMe"])) {
					$myEditId = ($_POST['idedit']);
					$myEditNadpis = $database->get("content", "nazov", [
						"ID" => $myEditId
					]);
					$myEditIntro = $database->get("content", "intro", [
						"ID" => $myEditId
					]);
					$myEditText = $database->get("content", "text", [
						"ID" => $myEditId
					]);
					
					echo "
					<div class='form-group'>
		        		<p>Nadpis článku:</p>
					    <input name='nadpisEdit' type='text' class='form-control' id='nadpis' maxlength='25' aria-describedby='nadpisHelp' value='".$myEditNadpis."'>
					    <small class='form-text text-muted'>Tento nadpis sa zobrazí v hlavičke článku. </small>
					</div>
					<div class='form-group'>
	        		  <p>Krátky popis článku:</p>
					    <input name='introtext' type='text' class='form-control' id='introtextEdit' maxlength='110' aria-describedby='nadpisHelp' value='".$myEditIntro."'>
					    <small class='form-text text-muted'>Tento popis sa zobrazí v miniatúrnom náhlade článku. </small>
					</div>
							<textarea name='editarea' id='edit' cols='30' rows='10'>".$myEditText."</textarea>";
				};
			?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- edit modal END -->

<!-- ALARMY -->
<div class="divider"></div>
<h1 id="vypadky"><span>Výpadky</span></h1>
<table class="table">
  <thead class="thead-inverse">
    <tr>
      <th>ID</th>
      <th>Autor</th>
      <th>Publikované</th>
      <th>Názov</th>
      <th>Obsah</th>
      <th>Status</th>
      <th>Upraviť</th>
    </tr>
  </thead>
  <tbody>
<?php	  
	  
	  $datas_errors = $database->select("content", [
		"ID",
		"autor",
		"datum",
		"nazov",
		"text",
		"status",
		"edit"
		], [
		"alarm" => "ano"
		]);

			foreach(array_reverse($datas_errors) as $data)
		{
			echo "<tr><th scope='row'>".$data["ID"]."</th><td>".$data["autor"]."</td><td>".$data["datum"]."</td><td>".$data["nazov"]."</td><td>".$data["text"]."</td><td>".$data["status"]."</td><td><form method='post' action='admin.php'><input type='text' name='idedit' hidden value='".$data["ID"]."'><input type='submit' name='del' class='btn btn-danger btn-sm' value='Archivovať'></form></td></tr>";
		}
?>
  </tbody>
</table>

<!-- INZERATY -->
<div class="divider"></div>
<h1 id="vypadky"><span>Inzeráty</span></h1>
<table class="table">
  <thead class="thead-inverse">
    <tr>
      <th>ID</th>
      <th>Popis</th>
      <th>Pozícia</th>
      <th>Miesto</th>
      <th>Obsah</th>
      <th>Upraviť</th>
    </tr>
  </thead>
  <tbody>
<?php	  
	  
	  $datas_inzeraty = $database->select("inzeraty", ["id","popis","pozicia","miesto","obsah"]);

			foreach(array_reverse($datas_inzeraty) as $data)
		{
			echo "<tr><th scope='row'>".$data["id"]."</th><td>".$data["popis"]."</td><td>".$data["pozicia"]."</td><td>".$data["miesto"]."</td><td>".$data["obsah"]."</td><td><form method='post' action='admin.php'><input type='text' name='idedit' hidden value='".$data["ID"]."'><input type='submit' name='del' class='btn btn-danger btn-sm' value='X'></form></td></tr>";
		}
?>
  </tbody>
</table>
</div><!-- /container -->
	  

<!-- POPUP HEADER TEXT -->
<div id="novyclanok" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Pridať článok</h4>
	      </div>
    		<div class="modal-body">
		        <form action="admin.php" method="post" enctype="multipart/form-data">
		        	<div class="form-group">
		        		<p>Nadpis článku:</p>
					    <input name="nadpis" type="text" class="form-control" id="nadpis" maxlength="25" aria-describedby="nadpisHelp">
					    <small id="nadpisHelp" class="form-text text-muted">Tento nadpis sa zobrazí v hlavičke článku.</small>
					</div>
					<div class="form-group">
	        		  <p>Krátky popis článku:</p>
					    <input name="introtext" type="text" class="form-control" id="introtext" maxlength="110" aria-describedby="nadpisHelp">
					    <small id="nadpisHelp" class="form-text text-muted">Tento popis sa zobrazí v miniatúrnom náhlade článku.</small>
					</div>
					<div class="form-group">
					    <?php echo "<input type='text' class='form-control' id='datum' name='datum' value='".date("d-m-Y")."' readonly hidden>"; ?>
					</div>
					<div class="form-group">
					    <?php echo "<input type='text' class='form-control' id='user' name='user' value='".$myname."' readonly hidden>"; ?>
					</div>
					<div class="form-group">
					    <?php echo "<input type='text' class='form-control' id='loc' name='loc' value='".$myloc."' readonly hidden>"; ?>
					</div>
					<p>Prosím vyberte fotku článku*:</p>
					<input type="file" name="fileToUpload" id="fileToUpload" class="btn stefe-btn"><br><br>
					<p>Obsah článku:</p>
					<textarea id="clanoktext" name="clanoktext" placeholder="Obsah..."></textarea>
		    </div>
		      <div class="modal-footer">
		        <input type="submit" name="pridatclanok" class="btn stefe-btn" value="Odoslať">
		        <?php
					$target_dir = "img/up/";
					$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
					$uploadOk = 1;
					$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
					// Check if image file is a actual image or fake image
					if(isset($_POST["pridatclanok"])) {
						$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
						if($check !== false) {
							$uploadOk = 1;
						} else {
							echo "Súbor nieje podporovaný obrázok!!!";
							$uploadOk = 0;
						}
					}
				  // Check file size
					if ($_FILES["fileToUpload"]["size"] > 2000000) {
						echo "Obrázok je príliš veľký, maximálna veľkosť je 2MB.";
						$uploadOk = 0;
					}
				  // Check if $uploadOk is set to 0 by an error
					if ($uploadOk == 0) {
						echo "Ľutujeme, obrázok sa nepodarilo nahrať.";
						// if everything is ok, try to upload file
					} else {
						if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
							// kod pre databazu po nahratí (nazov obrazka . basename( $_FILES["fileToUpload"]["name"]). )
							$database->insert("content",[
								"autor" => $myname,
								"datum" => $_POST["datum"],
								"nazov" => $_POST["nadpis"],
								"intro" => $_POST["introtext"],
								"text" => $_POST["clanoktext"],
								"loc" => $myloc,
								"alarm" => "nie",
								"image" => basename( $_FILES["fileToUpload"]["name"])
							]);
							
						} else {
						}
					}
				?>
		        </form>
      </div>
    </div>
  </div>
  </div>
  <div class="divider"></div>
  <div class="divider"></div>
  <div class="divider"></div>
	  
<!-- MODAL ARCHIV -->
<div id="archiv" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Archív</h4>
      </div>
      <div class="modal-body">
        <table class="table">
  <thead class="thead-inverse">
    <tr>
      <th>ID</th>
      <th>Autor</th>
      <th>Publikované</th>
      <th>Názov</th>
      <th>Status</th>
      <th>Upraviť</th>
    </tr>
  </thead>
  <tbody>
<?php	  
	  function custom_echo($x, $length)
		{
		  if(strlen($x)<=$length)
		  {
			echo $x;
		  }
		  else
		  {
			$y=substr($x,0,$length) . '...';
			echo $y;
		  }
		}

	  
	  $datas_archiv = $database->select("content", [
		"ID",
		"autor",
		"datum",
		"nazov",
		"text",
		"status",
		"edit"
		], [
		"edit" => "hidden"
		]);

			foreach(array_reverse($datas_archiv) as $data)
		{
			echo "<tr><th scope='row'>".$data["ID"]."</th><td>".$data["autor"]."</td><td>".$data["datum"]."</td><td>".$data["nazov"]."</td><td>Archivované</td><td>
			<form method='post' action='admin.php'>
			<input type='text' name='idedit' hidden value='".$data["ID"]."'>
			<a href='./nahlad.php?ID=".$data["ID"]."' class='btn btn-block btn-success btn-sm w-100' target='_blank'>Náhlad</a>
			<input type='submit' name='zobraz' class='btn btn-success btn-sm w-100' value='Uverejniť'>
			</form></td></tr>";
			
		}
?>
  </tbody>
</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn stefe-btn" data-dismiss="modal">Zatvoriť</button>
      </div>
    </div>

  </div>
</div>
 
<!-- POPUP HEADER TEXT END -->
<div class="logout">
	<form action="admin.php" method="post">
	<?php
		echo $myname;
	 ?>
	 |
	 <button name="logout" class="stefe-btn btn">Odhlásiť sa</button></form>
</div>
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="js/module.js"></script>
	<script src="js/hotkeys.js"></script>
	<script src="js/uploader.js"></script>
	<script src="js/simditor.js"></script>
	  <script>
			var editor = new Simditor({textarea: $('#clanoktext'), 
						toolbar: [
							'title',
							'italic',
							'bold',
							'underline',
							'ol',
							'ul',
							'link',
							'image'
						],
						cleanPaste: true,
						upload: true,
			});
		  	var edit = new Simditor({textarea: $('#edit'), 
						toolbar: [
							'title',
							'italic',
							'bold',
							'underline',
							'ol',
							'ul',
							'link',
							'image'
						],
						cleanPaste: true,
						upload: true,
			});
	</script>
	  		<?php
				if (isset($_POST["editMe"])) {
					echo "<script type='text/javascript'>
							$(window).on('load',function(){
								$('#modalEdit').modal('show');
							});
						</script>";
				};
			?>
	
  </body>
</html>