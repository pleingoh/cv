<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajouter experience</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div   class="container-fluid" >
    <div class="row"><!--Menu -->
                <nav class="navbar navbar-inverse" role="navigation">
                    <div class="container-fluid"><!--Brand and toggle get grouped for better mobile display -->
                        <a class="navbar-brand" href="index.php">SheIstheCode CV</a>
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <a href="#">A propos</a>
                            </li>
                            <li>
                            <a href="dashboard.php?id=<?php echo $_SESSION['id']; ?>>">Retour</a>
                            </li>

                        </ul>
                    </div>		
                </nav>
            </div>
            <div class="container" >
                <form action="experience.php" method="POST" enctype= "multipart/form-data">
                <legend>AJouter une experience</legend>

                    <label for="nom">Organisation</label>
                        <input class="form-control" type="text"name="organisation"placeholder="organisation">
                    <label for="prenom">poste</label>
                        <input class="form-control" type="text"name="poste"placeholder="Poste occupé">
                    <label for="resume">Description</label>
                    <div></div>
                    <textarea class="form-control" name="description"  cols="160" rows="1"></textarea> 
                    <div></div>
                    <label for="email">Date debut</label>
                        <input class="form-control" type="text"name="dateDebut"placeholder="00/00/0000">
                    <label for="email">Date fin</label>
                        <input class="form-control" type="text"name="dateFin"placeholder="00/00/0000">
                    <div></div>
                    <input class="form-control btn btn-primary" type="submit"name="valider">
                </form>
                <br><br>
                
            <?php
            if(isset($_POST['valider'])) 
            {
                
                
            
                if(empty($_POST['organisation'])&& empty($_POST['poste'])&&empty($_POST['description'])&&empty($_POST['dateDebut'])&& empty($_POST['dateFin']))
                {
                    echo("Le formulaire est vide veuillez le renseigner svp");
                    
                }
                
                else {
                
                    $organisation =$_POST['organisation'];
                    $poste=$_POST['poste'];
                    $description=$_POST['description'];    
                    $dateDebut=$_POST['dateDebut'];
                    $dateFin=$_POST['dateFin'];
                    $id_codeuse=$_SESSION['id'];
                    $req=$bdd->prepare('INSERT INTO experience (organisation,poste,description,dateDebut,dateFin,id_codeuse)VALUES(?,?,?,?,?,?)');
                    $req->execute(array($organisation,$poste,$description,$dateDebut,$dateFin,$id_codeuse)); 
                    echo ("Enregistrement éffectué!");  
                
                } 
            }
    ?>

                <div class="row" >
                    <div>
                        <table class="table table-hover"style="boder:1" >
                            <thead>
                                <th>N</th>
                                <th>Organisation</th>
                                <th>Poste</th>
                                <th>Description</th>
                                <th>Date debut</th>
                                <th>Date fin</th>
                            </thead>
                            <tbody>
                            <?php 
                                $n=1;
                                $req=$bdd->query('SELECT * FROM experience');
                                while ($data = $req->fetch()) {
                                ?>
                                <tr>
                                    <td> <?php echo $n; ?></td>
                                    <td> <?php echo $data['organisation'] ?></td>
                                    <td><?php echo $data['poste'] ?></td>
                                    <td><?php echo $data['description'] ?></td>
                                    <td><?php echo $data['dateDebut'] ?></td>
                                    <td><?php echo $data['dateFin'] ?></td>
                                </tr>
                                <?php $n++; } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
</div>
</body>
</html>