<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Parametre du compte</title>
        <link rel="icon" type="image/png" href="icon.png" />
        <link  href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' rel="stylesheet">
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel="stylesheet" >
        <link rel="stylesheet" href="style_profile.css">
        <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    </head>

    <body>
        <div class="container rounded bg-white mt-5 ">
            <div class="row">
                <div class="col-md-4 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" src="avatar7.png" width="100"><span class="font-weight-bold"><?php echo $_SESSION['nom'].' '.$_SESSION['prenom']; ?></span><span>@<?php echo $_SESSION['user']; ?></span><span class="text-black-50"><?php echo $_SESSION['mail']; ?></span></div>
                </div>
                <div class="col-md-8">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
                                <a href="../Acceuil.php" style="text-decoration: none; color:black;"><h6>Retourner a l'acceuil</h6></a>
                            </div>
                            <h6 class="text-right">Modification du profile</h6>
                        </div>
                        <form action="edit_Profile.php" method="post">
                        <div class="row mt-2">
                            <div class="col-md-6 mt-1"><input type="text" class="form-control" name="Nom" placeholder="Nom" value="<?php echo $_SESSION['nom']; ?>"></div>
                            <div class="col-md-6 mt-1"><input type="text" class="form-control" name="Prenom" value="<?php echo $_SESSION['prenom']; ?>" placeholder="Prenom"></div>
                            <div class="col-md-6 mt-1"><input type="text" class="form-control" name="User" value="<?php echo $_SESSION['user']; ?>" placeholder="Nom de l'utilisateur" ></div>
                            <div class="col-md-6 mt-1"><input type="email" class="form-control" name="mail" placeholder="Email" value="<?php echo $_SESSION['mail']; ?>"></div>

                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6 mt-1"><input type="password" class="form-control" name="MotDePasse" placeholder="Mot de pass" value="########"></div>
                            <div class="col-md-6 mt-1"><input type="password" class="form-control" value="#######" name="RepeatMotDePasse" placeholder="Confirmer le mot de pass"></div>
                        </div>
                    
                        <div class="row mt-3">
                            <div class="col-md-4 mt-1"><input type="text" class="form-control" name="Pays" value="<?php echo $_SESSION['pays']; ?>" placeholder="Pays"></div>
                            <div class="col-md-4 mt-1"><input type="text" class="form-control" name="Ville" placeholder="Ville" value="<?php echo $_SESSION['ville']; ?>"></div>
                        </div>
                        <div class="mt-5 text-right" ><button class="btn btn-primary profile-button" type="submit">Enregistrer les modifications</button></div>
                        </form >
                        
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>



