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
  </head>
  <body>

  	 <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-stefe">
      <div class="container">
       <img src="./img/logo.svg" alt="Stefe" class="logo">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav m-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">+ Nový článok
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">+ Nový výpadok</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- navi end -->
    
      <div class="container">
        	<h1><span>Články</span></h1>
        	

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
	  
	  $datas_main = $database->select("content", [
		"ID",
		"autor",
		"datum",
		"nazov",
		"text",
		"status",
		"edit"
		], [
		"alarm" => "nie"
		]);

			foreach($datas_main as $data)
		{
			echo "<tr><th scope='row'>".$data["ID"]."</th><td>".$data["autor"]."</td><td>".$data["datum"]."</td><td>".$data["nazov"]."</td><td>".$data["text"]."</td><td>".$data["status"]."</td><td><form method='post' action='admin.php'><input type='text' name='idedit' hidden value='".$data["ID"]."'><input type='submit' name='zobraz' class='btn btn-success btn-sm' value='Uverejniť'> <input type='submit' name='skryt' class='btn btn-warning btn-sm' value='Skryť'> <input type='submit' name='del' class='btn btn-danger btn-sm' value='X'></form></td></tr>";
		}

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
?>
  </tbody>
</table>

	

    </div><!-- /container -->
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>