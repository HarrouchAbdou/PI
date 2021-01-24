<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Gestion Recettes</title>
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
            <li class="previous" ><i class="fa fa-long-arrow-left mr-1 mb-1"></i><a class="font-weight-bold" href="../Acceuil.php"  title="Précédent" style="text-decoration: none; color:black;">Revenir vers Acceuil</a></li>
        </ul>
    </nav>
                <div class="container bg-white ">
                    <div class="row">
                        <div class="">
                            <div class="text-center mb-5">
                                <h2>Gérer les propositions de recettes</h2>
                            </div>
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                <tr>
                                    <th style="text-align: center; vertical-align: middle;"> Clients </th>
                                    <th style="text-align: center; vertical-align: middle;"> Categories </th>
                                    <th style="text-align: center; vertical-align: middle;"> Titre </th>
                                    <th style="text-align: center; vertical-align: middle;"> Etat de Validation</th>
                                    <th style="text-align: center; vertical-align: middle;"> Operations </th>

                                    
                                </tr>
                                </thead>
                
                            
                                <?php
                                    $con=mysqli_connect('localhost','root','');
                                    mysqli_select_db($con,'categories');
                                    mysqli_set_charset($con, 'utf8' );
                                    $sql="SELECT * FROM propositions WHERE EtatDemande='Non Valide'";
                                    $query=mysqli_query($con,$sql);
                                    if(mysqli_num_rows($query) > 0 )
                                    {
                                        while($rows=mysqli_fetch_array($query)){
                                        echo '<tbody>
                                        <tr>
                                        <td style="text-align: center; vertical-align: middle;">'.$rows['Username'].'</td>
                                        <td style="text-align: center; vertical-align: middle;">'.$rows['Categorie'].'</td>
                                        <td style="text-align: center; vertical-align: middle;">'.$rows['NomPlat'].'</td>
                                        <td style="text-align: center; vertical-align: middle;">'.$rows['EtatDemande'].'</td>
                                        <td style="text-align: center; vertical-align: middle;"><a href="Accept.php?Accept=true&id='.$rows['ID'].'&cate='.$rows['Categorie'].'"><button type="button" class="btn btn-success mr-1" ><i class="fa fa-check"></i></button></a>
                                        <a href="Accept.php?Accept=false&id='.$rows['ID'].'"><button type="button" class="btn btn-danger"><i class="fa fa-times"></i></button></a></td>
                                        </tr>
                                             </tbody>';  
                                        }
                                    }
                                    	
                                    ?>
                            
                            
                        </div>
        
                    </div>
                    
                    
                    </div>
            
            

        
    </body>

</html>



