
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
    <title>Document</title>
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
                                <a href="dashboard.php?id=<?php echo $_SESSION['id']; ?>">Retour</a>
                            </li>

                        </ul>
                    </div>		
                </nav>
            </div>
            <div class="container" >
                <form action="centre.php" method="POST" enctype= "multipart/form-data">
                <legend>AJouter un centre d'interêt</legend>

                    <label for="nom">Centre d'interêt</label>
                        <input class="form-control" type="text"name="centre_i" value="" placeholder="Centre d'interêt">
                    <label for="prenom">Description</label>
                        <input class="form-control" type="text"name="description" value=""  placeholder="description">
                    <br>
                    <input class="form-control btn btn-primary" type="submit"name="valider">
                </form>
                <br><br>
                <?php
            if(isset($_POST['valider'])) 
            {
                
                
            
                if(empty($_POST['centre_i'])&& empty($_POST['description']))
                {
                    echo("Le formulaire est vide veuillez le renseigner svp");
                    
                }
                else {

                    $centre_i=$_POST['centre_i'];
                    $description=$_POST['description'];
                    $id_codeuse=$_SESSION['id'];
                    $req=$bdd->prepare('INSERT INTO centre (centre_i,description,id_codeuse) VALUES(?,?,?)');
                    $req->execute(array($centre_i,$description,$id_codeuse)); 
                    echo ("Enregistrement éffectué!");  
                
                } 
            }
    ?>
                <div class="row" >
                    <div>
                        <form action="centre.php" method="POST">
                            <table class="table table-hover"style="boder:1" >
                                <thead>
                                    <th>N</th>
                                    <th>Centre d'interêt</th>
                                    <th>Description</th>
                                </thead>
                                <tbody>
                                <?php 
                                    $n=1;
                                    $req=$bdd->query('SELECT * FROM centre');
                                    while ($data = $req->fetch()) {
                                    ?>
                                    <tr>
                                        <td> <?php echo $n; ?></td>
                                        <td> <?php echo $data['centre_i'] ?></td>
                                        <td><?php echo $data['description'] ?></td>
                                    </tr>
                                    <?php $n++; } ?>
                                </tbody>
                            </table>
                        </form> 
                    </div>
                </div>
            </div> 
</div>
</body>
</html>