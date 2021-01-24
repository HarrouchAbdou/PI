<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
    <title> Espace Administrateur</title>
    <link rel="icon" type="image/png" href="icon.png" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<nav aria-label="navigation">   
        <ul class="pager" style="list-style:none;">
            <li class="previous" ><i class="fa fa-long-arrow-left mr-1 mb-1"></i><a class="font-weight-bold" href="../Acceuil.php"  title="Précédent" style="text-decoration: none; color:black;">Revenir vers Acceuil</a></li>
        </ul>
    </nav>
    <div class="container ">
        <div class="contact-box ">
            <div class="left"></div>
            <form action="ConfirmRecette.php" method="post" enctype="multipart/form-data" class="right">
                <h2>Espace Administrateur</h2>
                 <button name="inserer" type="submit" class="btn">Confirmer les recettes</button>
            </form>
            </div>
    </div>
</body>
    </html>