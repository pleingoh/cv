<?php 
session_start();
include('connect.php');


if (isset($_POST['connexion'])) {
	
	$email=$_POST['email'];
	$password=$_POST['password'];

	if (!empty($email) AND !empty($password)) 
	{
		$reqUser= $bdd->prepare("SELECT * FROM codeuses WHERE email =? AND password=?");
		$reqUser->execute(array($email, $password));
        $userExist=$reqUser->rowCount();
        if ($userExist == 1) 
		{
            
			$userinfo=$reqUser->fetch();
			$_SESSION['id']= $userinfo['id'];
            $_SESSION['nom']=$userinfo['nom'];
            $_SESSION['prenom']=$userinfo['prenom'];
            $_SESSION['dateNaiss']=$userinfo['dateNaiss'];
            $_SESSION['photo']=$userinfo['photo'];
            $_SESSION['email']=$userinfo['email'];
            $_SESSION['telephone']=$userinfo['telephone'];
            $_SESSION['password']=$userinfo['password'];
			$_SESSION['resume']=$userinfo['resume'];
			$_SESSION['domaine']=$userinfo['domaine'];
			header("Location:dashboard.php?id=".$_SESSION['id']);

		}
		else{
			echo"Erreur de l'email ou du mot de passe!";
		}
	}
	else{
		echo"Veuillez remplir tous les champs!";
	}


}
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>connexion</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="container-fluid" >
<div class="row"><!--Menu -->
			<nav class="navbar navbar-inverse" role="navigation">
				<div class="container-fluid"><!--Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand" href="index.php">SheIstheCode CV</a>
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="#">A propos</a>
						</li>
						<li>
							<a href="inscription.php">S'inscrire</a>
						</li>
						<li>
							<a href="connexion.php">Se coonnecter</a>
						</li>

					</ul>
				</div>		
			</nav>
		</div>
        <div class="container" style="width:500px" >
            <form method="POST">
                <legend>Connexion</legend>
                <label for="email">Email</label>
                    <input class="form-control" type="text"name="email">
                <label for="password">Mot de passe</label>
                    <input class="form-control" type="password"name="password">
                    <br>
                <input class="btn btn-primary" type="submit"name="connexion" value="connexion">
            </form>
        </div>	
</div>
</body>
</html>