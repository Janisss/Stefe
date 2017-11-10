<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prihlásenie - Admin STEFE</title>
    <!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>


	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
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
	 $datas = $database->select("tabulka", ["meno","heslo"]);
	  foreach ($datas as $data){
		  $meno = $data["meno"];
		  $heslo = $data["heslo"];
	  }

	  
	  if (isset($_POST["login"])) {
		  $postmeno = $_POST["meno"];
		  $postheslo = md5($_POST["heslo"]);

		  $checkpass = $database->get("tabulka", "heslo", [
				"meno" => $postmeno
			]);
	  	  		
		  		if ($checkpass == $postheslo) {
					$_SESSION["myname"] = $postmeno;
		  			header("Location: ./admin.php");
					exit;
		  		}
		  		else{
		  			echo "Zlé meno alebo heslo";
		  		}

	  }
	  else
	  { 

	  }

	  ?>
     <style>
		 body{
			 background: #6eb92b;
		 }
		 .card-container.card {
			max-width: 350px;
			padding: 40px 40px;
		}

		.btn {
			font-weight: 700;
			height: 36px;
			-moz-user-select: none;
			-webkit-user-select: none;
			user-select: none;
			cursor: default;
		}

		/*
		 * Card component
		 */
		.card {
			background-color: #F7F7F7;
			/* just in case there no content*/
			padding: 20px 25px 30px;
			margin: 0 auto 25px;
			margin-top: 50px;
			/* shadows and rounded borders */
			-moz-border-radius: 2px;
			-webkit-border-radius: 2px;
			border-radius: 2px;
			-moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
			-webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
			box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
		}

		.profile-img-card {
			width: 96px;
			height: 96px;
			margin: 0 auto 10px;
			display: block;
			-moz-border-radius: 50%;
			-webkit-border-radius: 50%;
			border-radius: 50%;
		}

		/*
		 * Form styles
		 */
		.profile-name-card {
			font-size: 16px;
			font-weight: bold;
			text-align: center;
			margin: 10px 0 0;
			min-height: 1em;
		}

		.reauth-email {
			display: block;
			color: #404040;
			line-height: 2;
			margin-bottom: 10px;
			font-size: 14px;
			text-align: center;
			overflow: hidden;
			text-overflow: ellipsis;
			white-space: nowrap;
			-moz-box-sizing: border-box;
			-webkit-box-sizing: border-box;
			box-sizing: border-box;
		}

		.form-signin #inputEmail,
		.form-signin #inputPassword {
			direction: ltr;
			height: 44px;
			font-size: 16px;
		}

		.form-signin input[type=email],
		.form-signin input[type=password],
		.form-signin input[type=text],
		.form-signin button {
			width: 100%;
			display: block;
			margin-bottom: 10px;
			z-index: 1;
			position: relative;
			-moz-box-sizing: border-box;
			-webkit-box-sizing: border-box;
			box-sizing: border-box;
		}

		.form-signin .form-control:focus {
			border-color: rgb(104, 145, 162);
			outline: 0;
			-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
			box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
		}

		.btn.btn-signin {
			/*background-color: #4d90fe; */
			background-color: rgb(104, 145, 162);
			/* background-color: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));*/
			padding: 0px;
			font-weight: 700;
			font-size: 14px;
			height: 36px;
			-moz-border-radius: 3px;
			-webkit-border-radius: 3px;
			border-radius: 3px;
			border: none;
			-o-transition: all 0.218s;
			-moz-transition: all 0.218s;
			-webkit-transition: all 0.218s;
			transition: all 0.218s;
		}

		.btn.btn-signin:hover,
		.btn.btn-signin:active,
		.btn.btn-signin:focus {
			background-color: rgb(12, 97, 33);
		}

		.forgot-password {
			color: rgb(104, 145, 162);
		}

		.forgot-password:hover,
		.forgot-password:active,
		.forgot-password:focus{
			color: rgb(12, 97, 33);
		}
	 </style>
      <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card">STEFE ADMIN</p>
            <form class="form-signin" method="post" action="login.php">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" id="inputEmail" class="form-control" placeholder="Email" autofocus name="meno">
                <input type="password" id="inputPassword" class="form-control" placeholder="Heslo" required name="heslo">
                <div id="remember" class="checkbox">
				<br>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="login">Prihlásiť sa</button>
                <a href="./register.php" class="btn btn-lg btn-primary btn-block" style="font-size: 12px;">Registrovať sa</a>
            </form><!-- /form -->

        </div><!-- /card-container -->
    </div><!-- /container -->
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script type="text/javascript">

	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>