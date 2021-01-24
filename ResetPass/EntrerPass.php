<?php
	session_start();
	if (isset($_POST['CM'])){
		if($_POST['Pass']==$_POST['ConfirPass']){
			$con=mysqli_connect('localhost','root','');
			mysqli_select_db($con,'clients');
			$mot=$_POST['Pass'];
			$m=$_SESSION['Mail'];
			echo $m;
			$requette_modification="UPDATE `clients` SET `Password`='$mot' WHERE Email='$m'";
			mysqli_query($con,$requette_modification);
				echo "Modification effectuee";
			}
		else{
				echo "Rectifier le mot de passe";
			}
			header('location:../index.php');
		
        }?>
        
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Mot de passe</title>
        <link rel="icon" type="image/png" href="icon.png" />
        <link  href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' rel="stylesheet">
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel="stylesheet" >
        <link rel="stylesheet" href="style_profile.css">
        <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    </head>

    <body>
    <nav aria-label="navigation">   
        <ul class="pager" style="list-style:none;">
            <li class="previous" ><i class="fa fa-long-arrow-left mr-1 mb-1"></i><a class="font-weight-bold" href="../index.php"  title="Précédent" style="text-decoration: none; color:black;">Revenir vers Acceuil</a></li>
        </ul>
    </nav>
        <div class="container bg-white ">
            <div class="row">
                <div class="">
                    <div class="text-center">
                        <h3><i class="fa fa-lock fa-4x"></i></h3>
                        <h2 class="text-center">Mot de passe</h2>
                        <p>Entrer votre nouveau mot de passe</p>
                    </div>
                    <form action="" method="post">
                    <div class="row mt-2">
                        <div class="col-md-12 mt-1"><input type="password" class="form-control" name="Pass" placeholder="Nouveau mot de passe" value=""></div>
                        <div class="col-md-12 mt-1"><input type="password" class="form-control" name="ConfirPass" placeholder="Confirmer votre nouveau mot de passe" value=""></div>
                    </div>
                    
                    <div class="mt-3 text-right" ><button class="btn btn-primary profile-button" name="CM" type="submit">Confirmer la modification</button></div>
                    </form >
                    
                </div>

            </div>
        </div>
    </body>

</html>



