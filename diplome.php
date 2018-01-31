
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
    <title>Ajouter diplôme </title>
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
                            <a href="dashboard.php?id=<?php echo $_SESSION['id']; ?>">Retour</a>
                            </li>

                        </ul>
                    </div>		
                </nav>
            </div>
            <div class="container" >
                <form action="diplome.php" method="POST" enctype= "multipart/form-data">
                <legend>AJouter une experience</legend>

                    <label for="nom">Etablissement</label>
                        <input class="form-control" type="text"name="etablissement"placeholder="etablissement">
                    <label for="prenom">diplôme</label>
                        <input class="form-control" type="text"name="nom_diplome"placeholder="Diplôme">
                    <label for="resume">Date obtention</label>
                        <input class="form-control" type="text"name="date"placeholder="00/00/0000">
                    <input class="form-control btn btn-primary" type="submit"name="valider">
                </form>
                <br><br>
                <?php
            if(isset($_POST['valider'])) 
            {
                
                
            
                if(empty($_POST['etablissement'])&& empty($_POST['nom_diplome'])&&empty($_POST['date']))
                {
                    echo("Le formulaire est vide veuillez le renseigner svp");
                    
                }
                else {

                    $etablissement =$_POST['etablissement'];
                    $nom_diplome=$_POST['nom_diplome'];
                    $date=$_POST['date'];    
                    $id_codeuse=$_SESSION['id'];
                    $req=$bdd->prepare('INSERT INTO diplome (etablissement,nom_diplome,date,id_codeuse) VALUES(?,?,?,?)');
                    $req->execute(array($etablissement,$nom_diplome,$date,$id_codeuse)); 
                    echo ("Enregistrement éffectué!");  
                
                } 
            }
    ?>
                <div class="row" >
                    <div>
                        <table class="table table-hover"style="boder:1" >
                            <thead>
                                <th>N</th>
                                <th>Etablissement</th>
                                <th>Diplôme</th>
                                <th>Date obtention</th>
                            </thead>
                            <tbody>
                            <?php 
                                $n=1;
                                $req=$bdd->query('SELECT * FROM diplome');
                                while ($data = $req->fetch()) {
                                ?>
                                <tr>
                                    <td> <?php echo $n; ?></td>
                                    <td> <?php echo $data['etablissement'] ?></td>
                                    <td><?php echo $data['nom_diplome'] ?></td>
                                    <td><?php echo $data['date'] ?></td>
                                    
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