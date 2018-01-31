<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
   
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
 <div class="container">
        <form action="inscription.php" method="POST" enctype= "multipart/form-data">
        <legend>Inscription</legend>

            <label for="nom">Nom</label>
                <input class="form-control" type="text"name="nom"placeholder="nom">
            <label for="prenom">Prenoms</label>
                <input class="form-control" type="text"name="prenom"placeholder="prenom">
            <label for="dateNaiss">Date de naissance</label>
                <input class="form-control" type="text"name="dateNaiss"placeholder="00/00/0000">
            <label for="prenom">Domaine</label>
                <input class="form-control" type="text"name="domaine"placeholder="votre domaine">
            <label for="resume">Votre resumé</label>
            <div></div>
            <textarea class="form-control" name="resume" id="" cols="160" rows="1"></textarea>    
            <div></div>
            <label for="email">Email</label>
                <input class="form-control" type="text"name="email"placeholder="xxxxxx@sheisthecode.com">
            <label for="email">telephone</label>
                <input class="form-control" type="text"name="telephone"placeholder="00000000">
            <label for="password">Mot de passe</label>
                <input class="form-control" type="password"name="password"placeholder="Mot de passe">
            <label for="photo">Photo</label>
                <input class="form-control" type="file"name="photo">
            <div></div>
            <input class="form-control btn btn-primary" type="submit"name="valider"value="Enregistrer">
        </form>
    </div>
   <?php

    include("connect.php");
    if(isset($_POST['valider'])) 
        {
            
            
        if (move_uploaded_file($_FILES['photo']['tmp_name'], 'upload/'.$_FILES['photo']['name']))
        {
            
            if(empty($_POST['nom'])&& empty($_POST['prenom'])&&empty($_POST['dateNaiss'])&&empty($_POST['resume'])&& empty($_POST['email'])&& empty($_POST['telephone'])&& empty($_POST['password'])&& empty($_POST['photo'])&& empty($_POST['damaine']))
                {
                echo("Le formulaire est vide veuillez le renseigner svp");
                
            }else{
                $nom =$_POST['nom'];
                $prenom=$_POST['prenom'];
                $dateNaiss=$_POST['dateNaiss'];    
                $resume=$_POST['resume'];
                $email=$_POST['email'];
                $telephone=$_POST['telephone'];
                $password=$_POST['password'];
                $photo=$_FILES["photo"]["name"];
                $resume=$_POST['domaine'];
                
                $req=$bdd->prepare('INSERT INTO codeuses (nom,prenom,dateNaiss,resume,email,telephone,password,photo,domaine) VALUES(?,?,?,?,?,?,?,?,?)');
                $req->execute(array($nom,$prenom,$dateNaiss,$resume,$email,$telephone,$password,$photo,$domaine));  
                echo ("Enregistrement éffectué!");  
            }
        }else{
           echo "non enregistré!";
        

          
    }
}
?>

</body>
</html>