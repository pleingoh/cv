
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
    <title>cv codeuse</title>
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
	<form action="cv.php" method="POST" enctype= "multipart/form-data">

                    <label for="nom">Facebook</label>
                        <input class="form-control" type="text"name="facebook" value="" placeholder="lien facebook">
                    <label for="prenom">Tweeter</label>
                        <input class="form-control" type="text"name="twitter" value=""  placeholder="lien twitter ">
					<label for="prenom">Google+</label>
                        <input class="form-control" type="text"name="google" value=""  placeholder="lien google+">
                    <br>
                    <input class="form-control btn btn-primary" type="submit"name="valider">
                </form>
				<?php
            if(isset($_POST['valider'])) 
            {
                
                
            
                if(empty($_POST['facebook'])&& empty($_POST['twitter'])&& empty($_POST['google']))
                {
                    echo("Le formulaire est vide veuillez le renseigner svp");
                    
                }
                else {

                    $facebook=$_POST['facebook'];
					$twitter=$_POST['twitter'];
					$google=$_POST['google'];
                    $id_codeuse=$_SESSION['id'];
                    $req=$bdd->prepare('INSERT INTO cv (facebook,twitter,google,id_codeuse) VALUES(?,?,?,?)');
                    $req->execute(array($facebook,$twitter,$google,$id_codeuse)); 
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
                                    <th>Facebook</th>
                                    <th>Twitter</th>
									<th>Google+</th>
                                </thead>
                                <tbody>
                                <?php 
                                    $n=1;
                                    $req=$bdd->query('SELECT * FROM cv');
                                    while ($data = $req->fetch()) {
                                    ?>
                                    <tr>
                                        <td> <?php echo $n; ?></td>
                                        <td> <?php echo $data['facebook'] ?></td>
                                        <td><?php echo $data['twitter'] ?></td>
										<td><?php echo $data['google'] ?></td>
                                    </tr>
                                    <?php $n++; } ?>
                                </tbody>
                            </table>
                        </form> 
                    </div>
	</div>
	</div>
</body>
</html>