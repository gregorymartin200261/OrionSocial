<?php
	if(isset($_POST['Pseudo'],$_POST['MotDePasse']))
	{
		$_SESSION['user']=ConnectUser($_SESSION['user']);
		if(isset($_SESSION['user']))
		{
			$_SESSION['connected']=true;
			header("location: /my-app/MOBILE_ORION/index.php?/pages/Messagerie.php");
		}
	}
?>
<link href= "css/login.css" rel="stylesheet">
	<div class="box-formulaire">
		<div class="gauche">
			<div class="overlay">
			<h1>ORION SOCIAL</h1>
			<p>Bienvenue ,connectez vous pour continuer !</p>
			<span>
				<div class="s">
					<p>Retrouvez nous sur Instagram</p>
					<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				</div>
			</span>
			</div>
		</div>
		<form action="" method="post">
			<div class="droite">
				<h5>Hey,</h5>
				<form action="" method="post">
				<div class="inputs">
					<input type="text" name="Pseudo" placeholder="Pseudo" value="">
					<br>
					<input type="password" name="MotDePasse" placeholder="Mot de passe" value="">
				</div>		
				<div class="enter">	
			</div>	
			<div>			
				<br>
				<button>Connection</button>
				<p>Tu n'as pas de compte? <a href="/my-app/MOBILE_ORION/index.php?/pages/CreationCompte.php">Crée le</a> ça ne prendra qu'une minute !</p>
			</div>	
		</form>
	</div>
</body>
</html>

