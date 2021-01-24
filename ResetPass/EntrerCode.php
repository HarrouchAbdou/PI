<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Code Verification</title>
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
            <li class="previous" ><i class="fa fa-long-arrow-left mr-1 mb-1"></i><a class="font-weight-bold" href="../index.php" title="Précédent" style="text-decoration: none; color:black;">Revenir vers Acceuil</a></li>
        </ul>
    </nav>
        <div class="container bg-white ">
            <div class="row">
                    <div class="p-3">
                        <div class="text-center">
                            <h3><i class="fa fa-key fa-4x"></i></h3>
                            <h2 class="text-center">Code Verification</h2>
                            <p>Entrer le code que vous avez recu</p>
                        </div>
                        <form action="CodeVer.php" method="post">
                        <div class="row mt-2">
                            <div class="col-md-12 mt-1"><input type="text" class="form-control" name="Code" placeholder="Code de verification" value=""></div>
                        </div>
                        <div class="mt-3 text-right" ><button class="btn btn-primary profile-button" name="validation" type="submit">Valider</button></div>
                        </form >
                        
                    </div>

            </div>
        </div>
    </body>

</html>



