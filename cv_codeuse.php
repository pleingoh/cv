<?php
include('connect.php');
        session_start();

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
    <title>CV</title>
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
                    <li class="active" align="right">
                        <a href="#">A propos</a>
                    </li>
                    <li align="right">
                        <a href="inscription.php">S'inscrire</a>
                    </li>
                    <li align="right">
                        <a href="connexion.php">Se connecter</a>
                    </li>
                    
                </ul>
            </div>		
        </nav>
    </div>
   
    <div class="row" >   
        <div  class="col-md-12"  >
            <div  class="col-md-4"  >
                <b style="font-size:18px" ><?php echo " ".$userinfo['nom']." ".$userinfo['prenom']; ?></b> <br><br>
                <b  style="font-size:18px">Née le <?php echo " ".$userinfo['dateNaiss']; ?></b> <br><br>
                <b  style="font-size:18px">Tel:<?php echo " ".$userinfo['telephone']; ?></b><br><br>
                <b  style="font-size:18px" ><?php echo $userinfo['email']; ?></b><br><br>
            </div>
            <div  class="col-md-4"  >
            <center><b style="font-size:25px" >Resumé de la codeuses</b></center><br>
            <center > <b style="font-size:15px" ><?php echo $userinfo['resume']?></b> </center>

            </div>
            <div  class="col-md-4"  >
               <center><img class="img-circle img " src="upload/<?php echo $userinfo['photo']; ?>"/></center> <br>
               <center><b style="font-size:25px" ><?php echo $userinfo['domaine'] ?></b></center>
            </div>
            
        </div>
        <?php
       }
    ?>

       <center> <div class="col-md-12" ><b style="font-size:25px" >Mes experiences</b> </div></center>
       <?php
                    $req=$bdd->query("SELECT * FROM experience,codeuses WHERE codeuses.id=experience.id_codeuse");
                    while ($data=$req->fetch()) {
                       // var_dump($data);
                    ?> 
                    <div class="col-md-3">
                    <?php echo  $data['dateDebut']." - ".$data['dateFin']."<br>"; ?>
                    
                    </div>
                    <div class="col-md-3">
                    <?php echo  $data['poste']."<br>" ;  ?>
                    </div>
                    <div class="col-md-3">
                    <?php echo  $data['description']."<br>" ;?>
                    </div>
                    <div class="col-md-3">
                    <?php echo  $data['organisation']."<br>" ;?>
                    </div>
                </div>
                <?php } ?>
       <center> <div class="col-md-12" ><b style="font-size:25px" >Mes diplômes</b> </div></center>
       <?php
                    $req=$bdd->query("SELECT * FROM diplome,codeuses WHERE codeuses.id=diplome.id_codeuse");
                    while ($data=$req->fetch()) {
                       // var_dump($data);
                    ?>
                    <div class="col-md-3">
                    <?php echo  $data['date']."<br>"; ?> 
                    </div>
                    <div class="col-md-3">
                    <?php echo  $data['etablissement']."<br>" ;  ?>
                    </div>
                    <div class="col-md-6">
                    <?php echo  $data['nom_diplome']."<br>" ;?>
                    </div>
                   
                    
                <?php
                 }
                ?>
            </div>
</div>
</body>
</html>