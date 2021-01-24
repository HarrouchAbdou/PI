<?php
    session_start();
    if(isset($_GET['deconnect'])){
      session_destroy();
      
      header('location: ../index.php');
    }
    
  

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="test.css">
 <link rel="icon" type="image/png" href="icon.png" />
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
}

/* The grid: Four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
  padding: 10px;
}

/* Style the images inside the grid */
.column img {
  
  cursor: pointer; 
}

.column img:hover {
 ;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}


/* The expanding image container */
.container {
  position: relative;
  display: none;
}

/* Expanding image text */
#imgtext {
  position: absolute;
  bottom: 15px;
  left: 15px;
  color: white;
  font-size: 20px;
}

/* Closable button inside the expanded image */
.closebtn {
  position: absolute;
  top: 10px;
  right: 15px;
  color: white;
  font-size: 35px;
  cursor: pointer;
}
.par{
     font-size: 18px;
     width: 150vh;
    margin: 0 auto;
    padding:5px;
    text-align: center;
    
  justify-content: center;
flex-wrap: wrap;
display: flex;

 }


</style>
</head>
<body>
      
      <!-- Navigation-->
      <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">
        <div class="container">
        <div class="navbar-header">
      <a class="navbar-brand" ><a href="../../Acceuil.php"><img src="logo.png"   style="width: 180px;"></a>
    </div>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item"><a class="nav-link" href="../../Acceuil.php">ACCEUIL</a></li>
                    <li class="nav-item"><a class="nav-link" href="../../Acceuil.php">Villes</a></li>
                    <li class="nav-item"><a class="nav-link" href="../../Categories/Categories.php">Recettes</a></li>
                    <li class="nav-item"><a class="nav-link" href="../../Contact/Contact.php">Contact</a></li>
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
  background-opacity: 0.60; height: 80px;">
            <h1 style=" margin-top: -20px;">  <center><span style="color:black; font-size: 150%;  "> L’Atelier Burger  </span></center> </h1>
          
     </div>      
     </div>

<div class="container-fluid" >
<!-- The four columns -->
<div class="row" style="margin-right: 100px">
  <div class="column">
    <img style="margin:40px; width: 20vw ; height: 50vh;" src="AB1.jpeg" alt="Nature" style="width:60%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img style=" margin:40px; width: 20vw ;height: 50vh;" src="AB2.jpeg" alt="Snow" style="width:60%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img  style=" margin:40px; width: 20vw ; height: 50vh; " src="AB3.jpeg" alt="Mountains" style="width:60%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img style="margin:40px; width: 20vw ; height: 50vh;" src="AB4.jpeg" alt="Lights" style="width:60%" onclick="myFunction(this);">
  </div>
</div>
</div>

<div style="text-align:center">
 <h1 style="font-size:  60px; margin-top: 20px">REVUE</h1>
</div>
<div class="container-fluid" >
        <div style="margin-right: : 50px;margin-left: 50px;padding: 20px">L’Atelier Burger  situé à Avenue El Araar à Hay Riad et au mall Acima ex champion.
        Plusieurs  nouveautés  présente la carte du moment à savoir les coups de cœur : le Burger  Smash, une véritable tuerie avec des onion rings et de la sauce barbecue à 💰69dhs ainsi que le Burger  à Cheval, le MAC AND CHEESE puisqu’on le retrouve presque nulle part à Rabat
        
        Our go-to choices: le burger Savoyard à 79dhs (très costaud), le burger Texan, la salade Cancun avec poulet 🐓 tomates séchées, raisins secs qui personnifie à merveilles le mélange sucré/salé 😍, le risotto poulet champignons est également à tomber et on vous le conseille vivement !!!
        
        Le point fort de ce coin cosy et chaleureux étant leur versatilité puisque vous y trouverez aussi des pâtes  délicieuses (les pâtes fruits de mer are a MUST), un saladbar et de délicieux desserts  notamment le pain perdu extra gourmand et la banoffee pie

        un menu healthy pour le déjeuner: la Salade de la Mer. Cette salade a été une agréable suprise, bien garnie en poisson (crevettes, calamar, saumon) et en tomate cerises bien fraîches, le tout assaisonné par une sauce verte légère et délicieuse. Les amoureux du healthy ceci est pour vous! Prix ? 55Dhs
</div>
</div>

<div style="text-align:center">
  <h1 style="font-size: 60px; margin-top: 20px">MENU</h1></div>

<div class="container-fluid">
  <div class="row" style="margin-left: 120px"> <img src="menuAB.jpg" alt="Nature" style="margin:20px; width:40vw ;height: 60vh;" >
    <img src="menuAB2.jpg" alt="Snow" style=" margin:20px; width: 40vw ;height: 60vh; "></div> 
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




  <center><div style="margin-top: 20px ;"><a href="ratinguser.php"><h1>Qu'en pensez-vous?</h1></a></div></center>
  

<style>
body {
  font-family: 'Varela Round', sans-serif;
}
.modal-login {
  color: #636363;
  width: 350px;
}
.modal-login .modal-content {
  padding: 20px;
  border-radius: 5px;
  border: none;
}
.modal-login .modal-header {
  border-bottom: none;
  position: relative;
  justify-content: center;
}
.modal-login h4 {
  text-align: center;
  font-size: 26px;
}
.modal-login  .form-group {
  position: relative;
}
.modal-login i {
  position: absolute;
  left: 13px;
  top: 11px;
  font-size: 18px;
}
.modal-login .form-control {
  padding-left: 40px;
}
.modal-login .form-control:focus {
  border-color: #00ce81;
}
.modal-login .form-control, .modal-login .btn {
  min-height: 40px;
  border-radius: 3px; 
}
.modal-login .hint-text {
  text-align: center;
  padding-top: 10px;
}
.modal-login .close {
  position: absolute;
  top: -5px;
  right: -5px;
}
.modal-login .btn, .modal-login .btn:active { 
  border: none;
  background: #00ce81 !important;
  line-height: normal;
}
.modal-login .btn:hover, .modal-login .btn:focus {
  background: #00bf78 !important;
}
.modal-login .modal-footer {
  background: #ecf0f1;
  border-color: #dee4e7;
  text-align: center;
  margin: 0 -20px -20px;
  border-radius: 5px;
  font-size: 13px;
  justify-content: center;
}
.modal-login .modal-footer a {
  color: #999;
}
.trigger-btn {
  display: inline-block;
  margin: 100px auto;
}
</style>

<div id="myModal" class="modal fade">
  <div class="modal-dialog modal-login">
    <div class="modal-content">
      <div class="modal-header">        
        <h4 class="modal-title"style="   font-family:BERNARD MT;" >S'AUTHENTIFIER </h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <form action="/examples/actions/confirmation.php" method="post">
               <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <i class="fa fa-paper-plane"></i>
          </span>                    
        </div>
        <input type="text" class="form-control"  placeholder="Username or email" required="required">
      </div>
        </div>
    <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <i class="fa fa-lock"></i>
          </span>                    
        </div>
        <input type="text" class="form-control" name="password" placeholder="mot de passe" required="required">
      </div>
        </div>
          <div class="form-group">
            <input type="submit" class="btn btn-primary btn-block btn-lg"value="S'AUTHENTIFIER">
          </div>
        </form>
      </div>

 <div class="d-flex justify-content-center" >
              <a href="#" style="color: black">Mot de passe oublié ?</a>
            </div>
    
            <div class="modal-footer">
              <div class="links">
              Vous n'avez pas de compte ?<a href="#">Inscrivez-vous</a>
              </div>
            </div>
    </div>
  </div>
</div>

















       <!-- 
      <div class="modal-footer">
        <a href="#">Mot de passe oublié ?</a>
       <p>Vous n’avez pas de compte  ?  </p> <a href="#">Inscrivez-vous</a>
      </div>
    </div>
  </div>
</div> -->


    <style>
body {
  font-family: 'Varela Round', sans-serif;
}

.form-control {
  font-size: 15px;
}
.form-control, .form-control:focus, .input-group-text {
  border-color: #e1e1e1;
}
.form-control, .btn {        
  border-radius: 3px;
}
.signup-form {
  width: 400px;
  margin: 0 auto;
  padding: 30px 0;    
}
.signup-form form {
  color: #999;
  border-radius: 3px;
  margin-bottom: 15px;
  background: #fff;
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  padding: 30px;
}
.signup-form h2 {
  color: #333;
  font-weight: bold;
  margin-top: 0;
}
.signup-form hr {
  margin: 0 -30px 20px;
}
.signup-form .form-group {
  margin-bottom: 20px;
}
.signup-form label {
  font-weight: normal;
  font-size: 15px;
}
.signup-form .form-control {
  min-height: 38px;
  box-shadow: none !important;
} 
.signup-form .input-group-addon {
  max-width: 42px;
  text-align: center;
} 
.signup-form .btn, .signup-form .btn:active {        
  font-size: 16px;
  font-weight: bold;
  background: #19aa8d !important;
  border: none;
  min-width: 140px;
}
.signup-form .btn:hover, .signup-form .btn:focus {
  background: #179b81 !important;
}
.signup-form a {
  color: #fff;  
  text-decoration: underline;
}
.signup-form a:hover {
  text-decoration: none;
}
.signup-form form a {
  color: #19aa8d;
  text-decoration: none;
} 
.signup-form form a:hover {
  text-decoration: underline;
}
.signup-form .fa {
  font-size: 21px;
}
.signup-form .fa-paper-plane {
  font-size: 18px;
}
.signup-form .fa-check {
  color: #fff;
  left: 17px;
  top: 18px;
  font-size: 7px;
  position: absolute;
}
.modal-footer {
  background: #ecf0f1;
  border-color: #dee4e7;
  text-align: center;
  margin: 0 -20px -20px;
  border-radius: 5px;
  font-size: 13px;
  justify-content: center;
}
.modal-footer a {
  color: #999;
}
.trigger-btn {
  display: inline-block;
  margin: 100px auto;
}

</style>


<div id="myModal2" class="modal fade">
  <div class="modal-dialog modal-signin">
    <div class="modal-content">
      <div class="modal-header">        
 <h4 class="modal-title" style="  text-align: center ; font-family:BERNARD MT; font-size: 26px;" >S'INSCRIRE </h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="signup-form">
        <form action="/examples/actions/confirmation.php" method="post">
        <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <span class="fa fa-user"></span>
          </span>                    
        </div>
        <input type="text" class="form-control" name="username" placeholder="Username" required="required">
      </div>
        </div>
         <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <i class="fa fa-paper-plane"></i>
          </span>                    
        </div>
        <input type="email" class="form-control" name="email" placeholder="Email Address" required="required">
      </div>
        </div>
    <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <i class="fa fa-lock"></i>
          </span>                    
        </div>
        <input type="text" class="form-control" name="password" placeholder="mot de passe" required="required">
      </div>
        </div>
    <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <i class="fa fa-lock"></i>
            <i class="fa fa-check"></i>
          </span>                    
        </div>
        <input type="text" class="form-control" name="confirm_password" placeholder="Confirmer mot de passe " required="required">
      </div>
        </div>
         <div class="form-group">
      <label class="form-check-label"><input type="checkbox" required="required"> J'accepte <a href="#">Les conditions d'utilisation</a></label>
    </div>
    <div class="form-group">
           <center> <button type="submit" class="btn btn-primary btn-lg">S'inscrire</button></center>
        </div>
        <div class="modal-footer">
      <div class="text-center">Vous avez déjà un compte ? <a href="#">S'authentifier </a></div>
      </div>

        </form>
      </div>
      
    </div>
  </div>
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