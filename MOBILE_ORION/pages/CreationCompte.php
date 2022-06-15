<?php
	if(isset($_POST['Pseudo'],$_POST['MotDePasse']))
	{
		$_SESSION['user']=CreateUser($_SESSION['user']);
		if(isset($_SESSION['user']))
		{
			header("location: /my-app/MOBILE_ORION/index.php?/Messagerie.php");
		}		
	}
?>
<link href= "css/CreationCompte.css" rel="stylesheet">
	<div class="box-formulaire">
		<div class="gauche">
			<div class="overlay">
			<h1>ORION</h1>
			</div>
		</div>
		<form action="" method="post">
			<div class="droite">
				<h1>CREATION DE TON COMPTE !</h1>
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
				<button>CREER MON COMPTE</button>
				<p>Tu as un compte? <a href="/my-app/MOBILE_ORION/index.php?/login/login.php">Connect-toi</a> sa ne prends qu'une minute !</p>
			</div>	
		</form>
	</div>
	<div class="gauche">
		<div class="overlay">
		<h1>SOCIAL</h1>
		</div>
	</div>
</body>
</html>

