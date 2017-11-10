<?php
	session_start();
	$sessionname = $_SESSION["myname"];
if (isset($_POST["logout"])) {
	session_destroy();
	header("Location: ./admin_bb.php");
	exit;
};
function refreshMe(){
    header("Location: ./admin_bb.php");
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

    <title>Stefe.sk ADMIN - Banská Bystrica</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<script src="https://use.typekit.net/udj8vhg.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>
    <!-- Custom styles for this template -->
    <link href="vendor/brickstone/brickstone_css.css" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script src="/js/smooth-scroll.js"></script>
  	<script>tinymce.init({ selector:'textarea#clanoktext',plugins: "media",menubar: "insert",
  toolbar: "media styleselect" });</script>
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
              <a class="nav-link" href="#">
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- navi end -->
    
      <div class="container first" style="padding: 0;">
      	<div class="header-admin">
      		<h3 style="color: white;">Admin - Banská Bystrica</h3>
      	</div>
      </div>
      <div class="container">


<div class="divider"></div>
        	<h1 id="clanky"><span>Články</span></h1>
        	
		<button type="button" class="btn stefe-btn btn-sm float-right" data-toggle="modal" data-target="#novyclanok" style="margin:0;font-size: 1.1rem;">+ pridať článok</button>
	  <table class="table">
  <thead class="thead-inverse">
    <tr>
      <th>ID</th>
      <th>Autor</th>
      <th>Publikované</th>
      <th>Názov</th>
      <th>Obsah</th>
      <th>Status</th>
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
					"status" => "<span style='color:var(--stefeGreen)'>publikované!</span>"
				], [
					"ID" => $editID
				]);
			header('Location: '.$_SERVER['PHP_SELF']);
			exit();
		}

		if (isset($_POST["skryt"])) {

			$editID = $_POST["idedit"];

			$database->update("content", [
					"status" => "skryté!"
				], [
					"ID" => $editID
				]);
			header('Location: '.$_SERVER['PHP_SELF']);
			exit();
		}

		if (isset($_POST["del"])) {

			$editID = $_POST["idedit"];

			$database->delete("content", [
				"AND" => [
					"ID" => $editID
				]
			]);
			header('Location: '.$_SERVER['PHP_SELF']);
			exit();
		}

	  
	  $datas_main = $database->select("content", [
		"ID",
		"autor",
		"datum",
		"nazov",
		"text",
		"status",
		"edit"
		], [
		"alarm" => "nie",
		"loc" => "bb"
		]);

			foreach($datas_main as $data)
		{
			echo "<tr><th scope='row'>".$data["ID"]."</th><td>".$data["autor"]."</td><td>".$data["datum"]."</td><td>".$data["nazov"]."</td><td>".$data["text"]."</td><td>".$data["status"]."</td></tr>";
		}
?>
  </tbody>
</table>


      	<div class="divider"></div>
        	<h1><span>Výpadky</span></h1>
        	
		<button type="button" class="btn stefe-btn btn-sm float-right" data-toggle="modal" data-target="#novyvypadok" style="margin:0;font-size: 1.1rem;">+ pridať výpadok</button>
	  <table class="table">
  <thead class="thead-inverse">
    <tr>
      <th>ID</th>
      <th>Autor</th>
      <th>Publikované</th>
      <th>Názov</th>
      <th>Obsah</th>
      <th>Status</th>
      <th>Ukončené?</th>
    </tr>
  </thead>
  <tbody>
<?php	  	  
	  $datas_vypadky = $database->select("content", [
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

			foreach($datas_vypadky as $data)
		{
			echo "<tr><th scope='row'>".$data["ID"]."</th><td>".$data["autor"]."</td><td>".$data["datum"]."</td><td>".$data["nazov"]."</td><td>".$data["text"]."</td><td>".$data["status"]."</td><td><form method='post' action='admin_bb.php'><input type='text' name='idedit' hidden value='".$data["ID"]."'><input type='submit' name='skryt' class='btn btn-warning btn-sm' value='Ukončiť!'></form></td></tr>";
		}
?>
  </tbody>
</table>

</div><!-- /container -->

<!-- POPUP HEADER TEXT -->
<div id="novyvypadok" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Pridať výpadok</h4>
      </div>
      <div class="modal-body">
       	<form action="admin_bb.php" method="post">
        	<div class="form-group">
        		<p>Názov výpadku:</p>
			    <input type="text" class="form-control" id="nadpis" aria-describedby="nadpisHelp" name="alarm">
			    <small id="nadpisHelp" class="form-text text-muted">Tento nadpis sa zobrazí v hlavičke článku.</small>
			</div>
			<div class="form-group">
			    <?php echo "<input type='text' class='form-control' id='datum' name='date' value='".date("d-m-Y")."' readonly hidden>"; ?>
			</div>
			<div class="form-group">
			    <?php echo "<input type='text' class='form-control' id='user' name='user' value='".$myname."' readonly hidden>"; ?>
			</div>
			<div class="form-group">
			    <?php echo "<input type='text' class='form-control' id='loc' name='loc' value='".$myloc."' readonly hidden>"; ?>
			</div>
			<div class="form-group">
				<p>Popis lokality a výpadku:</p>
				<textarea class="form-control" name="vypadoktext"></textarea>
     		</div>
      </div>
      <div class="modal-footer">
        <input type="submit" name="pridatvypadok" class="btn stefe-btn" value="Odoslať">
        <?php
			if(isset($_POST["pridatvypadok"])){
					$database->insert("content",[
						"autor" => $myname,
						"datum" => $_POST["date"],
						"nazov" => $_POST["alarm"],
						"text" => $_POST["vypadoktext"],
						"status" => "<span style='color:var(--stefeGreen)'>publikované!</span>",
						"loc" => "bb",
						"alarm" => "ano"
					]);
				
				}else{
				};
					
		?>
        </form>
      </div>
    </div>

  </div>
</div>
<!-- POPUP HEADER TEXT END -->

<!-- POPUP SECOND -->
<div id="novyclanok" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Pridať článok</h4>
	      </div>
    		<div class="modal-body">
		        <form action="admin_bb.php" method="post" enctype="multipart/form-data">
		        	<div class="form-group">
		        		<p>Nadpis článku:</p>
					    <input type="text" class="form-control" id="nadpis" aria-describedby="nadpisHelp" placeholder="Nadpis článku" name="nadpis">
					    <small id="nadpisHelp" class="form-text text-muted">Tento nadpis sa zobrazí v hlavičke článku.</small>
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
					<p>Prosím vyberte fotku článku:</p>
					<input type="file" name="fileToUpload" id="fileToUpload"><br><br>
					<textarea id="clanoktext" name="clanoktext"></textarea>
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
								"text" => $_POST["clanoktext"],
								"loc" => "bb",
								"alarm" => "nie",
								"image" => basename( $_FILES["fileToUpload"]["name"])
							]);
							$emailbody = 'Bol pridaný nový článok pre Stefe Banská Bystrica.<br />Článok čaká na vaše schválenie <a href="http://brickstone.design/stefe/admin.php">tu.</a>';
									
								mail('info@brickstone.design', '-> Nový článok Banská Bystrica', $emailbody ,'Content-Type: text/html; charset=UTF-8');
								refreshMe();
							
						} else {
						}
					}
				?>
		        </form>
      </div>
    </div>
  </div>
  </div>


<div class="logout">
	<form action="admin_bb.php" method="post">
	<?php
		echo $myname;
	 ?>
	 |
	 <button name="logout">Odhlásiť sa</button></form>
</div>
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>