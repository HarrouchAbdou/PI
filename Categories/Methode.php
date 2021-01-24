<!Doctype html>
<html>
    <head>
        <title><?php echo $_GET['methode'];?></title>
        <link rel="stylesheet" type="text/css" href="">

      <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="test.css">
        <link rel="icon" type="image/png" href="icon.png" />
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
<style type="text/css">#tst1{

 font-family:BERNARD MT;
    font-weight: bold;
     text-align: center;
    font-size: 30px;
    }</style>
    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">
        <div class="container">
        <div class="navbar-header">
      <a class="navbar-brand" ><a href="Acceuil.php"><img src="logo.png"   style="width: 180px;"></a>
    </div>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item"><a class="nav-link" href="Acceuil.php">ACCEUIL</a></li>
                    <li class="nav-item"><a class="nav-link" href="../Acceuil.php">Villes</a></li>
                    <li class="nav-item"><a class="nav-link" href="../Categories/Categories.php">Recettes</a></li>
                    <li class="nav-item"><a class="nav-link" href="../Contact/Contact.php">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">A propos</a></li>
                </ul> 
                <ul class="navbar-nav text-uppercase ml-auto">
                      <div class="dropdown show">
                      <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><i class="fas lo fa-user-alt" style="cursor: pointer;"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <p class="dropdown-item" style="cursor: pointer;"><?php echo $_SESSION['name'] ; ?></p>
                          <?php
                          if($_SESSION['etat']=="admin"){
                            echo '<a class="dropdown-item" href="./Administation/Administrateur.php" style="cursor: pointer;">Espace Administrateur</a>';
                          }
                      ?>
                          <a class="dropdown-item" href="./Profil/Connection.php" style="cursor: pointer;">Parametres du compte</a>
                          <a class="dropdown-item" href="?deconnect=off" style="cursor: pointer;">Se deconnecter</a>
                        </div>
                      </div>
                
                </ul>
                
            </div>
        </div>
    </nav>

  <div id=tst1>
     <div class="jumbotron" style="margin-top: 60px ;  background:url(gg.jpg);
  background-opacity: 0.60; height: 150px;">
            <h1 style=" margin-top: -20px;">  <span style="color:black; font-size: 150%;  "><center>  <h1 class="display-4" style="color: black;"><?php echo $_GET['methode'];?></h1></center>
</span> </h1>
          
     </div>      
     </div>


<div class="container-fluid">

  
<p style="float: right;   ">
<?php
        $con=mysqli_connect('localhost','root','');
        mysqli_select_db($con,'categories');
        mysqli_set_charset($con, 'utf8' );
        $sql="SELECT * FROM recettes where Titre= '".$_GET['methode']."'";
        $query=mysqli_query($con,$sql);
        if(mysqli_num_rows($query) > 0 )
        {
            while($rows=mysqli_fetch_array($query)){
              echo '<img  style="width:80vh;height:80vh;border-radius: 50%;" src="data:image/jpeg;base64,'.base64_encode($rows['image']).'" />';  
              }
        }
        else
        {				
            echo '<p>Erreur<\p>';
        }	
        ?>
</p>
</div>
  <div class="ml-3">
  <h2>Ingrédients </h2>
  <?php
        $con=mysqli_connect('localhost','root','');
        mysqli_select_db($con,'categories');
        mysqli_set_charset($con, 'utf8' );
        
        $sql="SELECT * FROM recettes where Titre= '".$_GET['methode']."'";
        $query=mysqli_query($con,$sql);
        if(mysqli_num_rows($query) > 0 )
        {
            while($rows=mysqli_fetch_array($query)){
              echo '<p class="lead" >'.nl2br($rows['Ingredients']).'</p>';  
              }
        }
        else
        {				
            echo '<p>Erreur<\p>';
        }	
        ?>
  
  <hr class="my-4">
   <h2>Préparation  </h2>
   <?php
        $con=mysqli_connect('localhost','root','');
        mysqli_select_db($con,'categories');
        mysqli_set_charset($con, 'utf8' );
        $sql="SELECT * FROM recettes where Titre= '".$_GET['methode']."'";
        $query=mysqli_query($con,$sql);
        if(mysqli_num_rows($query) > 0 )
        {
            while($rows=mysqli_fetch_array($query)){
              echo '<p class="lead" >'.nl2br($rows['Preparation']).'</p>';  
              }
        }
        else
        {				
            echo '<p>Erreur<\p>';
        }	
        ?>
 
  </div>
  


   <style type="text/css">
    
    
    a[href*="intent"] {
      display:inline-block;
      margin-top: 0.4em;
      padding-left: 25px;
      background: url(full-css-microsoft-logo/bird.png) 0 4px no-repeat;
    }
    /*  
     * Rating styles
     */
    .rating {
      width: 226px;
      margin: 0 auto 1em;
      font-size: 45px;
      overflow:hidden;
    }
    .rating a {
      float:right;
      color: #aaa;
      text-decoration: none;
      -webkit-transition: color .4s;
      -moz-transition: color .4s;
      -o-transition: color .4s;
      transition: color .4s;
    }
    .rating a:hover,
    .rating a:hover ~ a,
    .rating a:focus,
    .rating a:focus ~ a   {
      color: orange;
      cursor: pointer;
    }
    .rating2 {
      direction: rtl;
    }
    .rating2 a {
      float:none
    }
    
  </style>




<center><div style="margin-top: 20px ;"><a href="ratinguser.html"><h1>Qu'en pensez-vous?</h1></a></div></center>



        </div>
       
        <footer class="site-footer mt-5" id="about">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>OBJECTIFS</h6>
            <p class="text-justify">
              Notre projet <span style="font-weight: bold; color: #FCCD45;">TastyMakla </span>est un site qui a comme mission principale :
              Dénicher les bons coins où sortir et principalement où manger, 
              et ce, adapté à tous les budgets et tous les goûts. 
              A travers des photos, des revues objectives, nous aiderons nos visiteurs 
              à choisir LE restaurant.
              Ainsi qu'un espace sera dedié aux recettes fait maison.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Liens</h6>
            <ul class="footer-links">
              <li><a href="../Acceuil.php">ACCEUILS</a></li>
              <li><a href="../Acceuil.php">VILLES</a></li>
              <li><a href="../Categories/Categories.php">RECETTES</a></li>
              <li><a href="../Contact/Contact.php">CONTACT</a></li>
              <li><a href="#about">A PROPOS</a></li>
            </ul>
          </div>
          
          <div class="col-xs-6 col-md-3">
            <h6>CONTACTS</h6>
            <ul class="footer-links">
              <li> <span><i class="fas fa-phone"></i> &nbsp; 0678367437</span></li>
              <li> <span><i class="fas fa-envelope"></i> &nbsp; tastymakla@gmail.com</span></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by 
         <a href="#">TastyMakla</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a class="instagram" href="#"><i class="fab fa-instagram"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
              <li><a class="github" href="#"><i class="fab fa-github"></i></a></li> 
            </ul>
          </div>
        </div>
      </div>
</footer>
</body>
</html>

