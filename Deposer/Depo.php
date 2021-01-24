<?php
    session_start();
?>
<!DOCTYPE html>
<html><head>
    <title> Envoyez votre recette</title>
    
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
<link rel="icon" type="image/png" href="icon.png" />
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <nav aria-label="navigation">   
        <ul class="pager" style="list-style:none;">
            <li class="previous" ><i class="fa fa-long-arrow-left mr-1 mb-1"></i><a class="font-weight-bold" href="../Acceuil.php"  title="Précédent" style="text-decoration: none; color:black;">Revenir vers Acceuil</a></li>
        </ul>
    </nav>
    <div class="container">
        <div class="contact-box">
            <div class="left"></div>
            <form action="inserer.php" method="post" enctype="multipart/form-data" class="right">
                <h2> Partagez votre Recette</h2>
                <input type="text" class="field" name="name" placeholder="Le Nom du plat">
                
                <div class="col-md-4">
                    <select id="inputState" name="categ" class="field" >
                        <option disabled selected>Categories</option>
                        <option value="Salade">Salade</option>
                        <option value="Dessert">Dessert</option>
                        <option value="Smoothie">Smoothie</option>
                        <option value="Plat">Plat</option>
                    </select>
                  </div>
                  <input type="hidden" name="MAX_FILE_SIZE" value="300000" />
                  <input type="file" name="image" class="field"  size="12" accept=".jpg,.png,.svg">
                <textarea name="ingredients" class="field area" placeholder="Les ingredients"></textarea>
                <textarea name="preparation" class="field area" placeholder="La preparation"></textarea>
                 <button name="inserer" class="btn">Envoyer</button>
            </form>
        </div>
    </div>
</body>
    </html>