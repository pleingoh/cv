<?php 
session_start();
include('connect.php');

if (isset($_GET['id']) AND $_GET['id']>0) 
{
	$getid=intval($_GET['id']);
	$requser=$bdd->prepare('SELECT * FROM codeuses WHERE id=?');
	$requser->execute(array($getid));
    $userinfo=$requser->fetch();
    
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>dashboard</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div  class="container-fluid"  >
    <div class="row"><!--Menu -->
                <nav class="navbar navbar-inverse" role="navigation">
                    <div class="container-fluid"><!--Brand and toggle get grouped for better mobile display -->
                        <a class="navbar-brand" href="index.php">SheIstheCode CV</a>
                        <ul class="nav navbar-nav">
                            <li class="active" align="right">
                                <a href="#">A propos</a>
                            </li>
                            <li align="right">
                                <a href="deconnexion.php">déconnexion</a>
                            </li>
                            
                        </ul>
                    </div>		
                </nav>
            </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-3">
                        <a href="">Modifier profil</a><br><br>
                        <a href="cv.php">Creer CV</a><br><br>
                        <a href="">Afficher votre CV</a><br><br>
                        <a href="experience.php">Ajouter une experience</a><br><br>
                        <a href="diplome.php">Ajouter diplôme</a><br><br>
                        <a href="centre.php">Ajouter centre d'interêt</a><br><br>
                    </div>
                    <div class="col-md-3">
                        <b ><?php echo " ".$userinfo['nom']." ".$userinfo['prenom']; ?></b> <br><br>
                        <b>Née le <?php echo " ".$userinfo['dateNaiss']; ?></b> <br><br>
                        <b>Tel:<?php echo " ".$userinfo['telephone']; ?></b><br><br>
                        <b><?php echo $userinfo['email']; ?></b><br><br>
                        <?php } ?>
                    </div>
                    <div class="col-md-3">
                    <b >Resumé de la codeuses</b> <br><br>
                    <p><?php echo " ".$userinfo['resume']; ?> <br><br></p>
                    </div>
                    <div class="col-md-3" align="center">
                        <img class="img-circle img " src="upload/<?php echo $userinfo['photo']; ?>"/>
                        <p class="text-center"> <b> <?php echo $userinfo['domaine']; ?></b></p>
                        <i class="glyphicon glyphicon-facebook" ></i>

                    </div>
                </div>
            </div>
            <div class="row" >
                <div class="col-md-12" >
               
                    <center> <b>Mes expériences</b> </center >
                    <?php
                    $req=$bdd->query("SELECT * FROM experience,codeuses WHERE codeuses.id=experience.id_codeuse");
                    while ($data=$req->fetch()) {
                       // var_dump($data);
                    ?>
                
                    <div class="col-md-3">
                    
                    </div>
                    <div class="col-md-2">
                    <?php echo  $data['dateDebut']." - ".$data['dateFin']."<br>"; ?>
                    
                    </div>
                    <div class="col-md-2">
                    <?php echo  $data['poste']."<br>" ;  ?>
                    </div>
                    <div class="col-md-3">
                    <?php echo  $data['description']."<br>" ;?>
                    </div>
                    <div class="col-md-2">
                    <?php echo  $data['organisation']."<br>" ;?>
                    </div>
                </div>
                <?php
                 }
                ?>
                <div class="col-md-12" >
                    <center> <b>Mes diplomes</b> </center >
                    <?php
                    $req=$bdd->query("SELECT * FROM diplome,codeuses WHERE codeuses.id=diplome.id_codeuse");
                    while ($data=$req->fetch()) {
                       // var_dump($data);
                    ?>
                
                    <div class="col-md-3">
                    
                    </div>
                    <div class="col-md-2">
                    <?php echo  $data['date']."<br>"; ?> 
                    </div>
                    <div class="col-md-2">
                    <?php echo  $data['etablissement']."<br>" ;  ?>
                    </div>
                    <div class="col-md-3">
                    <?php echo  $data['nom_diplome']."<br>" ;?>
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