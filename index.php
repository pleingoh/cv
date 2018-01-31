<?php
include('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acceuil</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container-fluid" >
		<div class="row"><!--Menu -->
			<nav class="navbar navbar-inverse" role="navigation">
				<div class="container-fluid"><!--Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand" href="index.php">SheIstheCode CV</a>
					<ul class="nav navbar-nav">
						<li class="active"align="right">
							<a href="#">A propos</a>
						</li align="right" >
						<li>
							<a href="inscription.php">S'inscrire</a>
						</li>
						<li align="right" >
							<a href="connexion.php">Se coonnecter</a>
						</li>

					</ul>
				</div>		
			</nav>
        </div>
        <div class="container">
        
        <?php
            $req=$bdd->query("SELECT * FROM codeuses");
            while ($data=$req->fetch()) {
               

        ?>
                <div  class="panel panel-default" style="height:150px;background-color:" >
                    <div class="col-md-12">
                        <div class="col-md-4" >
                            <img class="img-circle img " src="upload/<?php echo $data['photo']; ?>"/>
                        </div>
                        <div class="col-md-4" >
                        <center> <b style="font-size:30px" ><?php echo $data['domaine']?></b><br></center>
                        <center><?php echo $data['resume']?>  </center>
                        </div>
                        <div class="col-md-4" >
                        <center><button class="btn" style="background-color:pink;margin-top:40px" ><a href="cv_codeuse.php?id=<?php echo $data['id']; ?>">Consulter cv</a></button> </center>
                        
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-4" >
                            <?php echo $data['nom']." ".$data['prenom']; ?>
                        </div>
                        
                    </div>
                </div>
                <?php
                     }
                 ?>
        </div>
        </div>
</div>     
</body>
</html>