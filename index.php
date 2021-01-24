

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tasty Makla</title>
        <link rel="icon" type="image/png" href="icon.png" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="test.css">
        <link rel="stylesheet" type="text/css" href="test.css">
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />


    <style type="text/css">    






div.gallery {
  border: 3px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 25%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

.modal-content{
background-color:white; } 

</style>
      </head>  



    <body >
 <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" ><a href="index.php"><img src="logo.png"   style="width: 180px;"></a>
    </div>
 <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarResponsive">
                <ul class="navbar-nav mr-auto text-uppercase ">
                    <li class="nav-item"><a class="nav-link" href="#">ACCEUIL</a></li>
                    <li class="nav-item"><a   class="nav-link" href="#villes">Villes</a></li>
                    <li class="nav-item"><a  class="nav-link" href="./Categories/Categories.php">Recettes</a></li>
                    <li class="nav-item"><a class="nav-link" href="./Contact/Contact.php">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">A propos</a></li>
                </ul>
              
                   <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item "><a  class="nav-link User"   href="#myModal" class="trigger-btn" data-toggle="modal">S'AUTHENTIFIER</a> </li>
                    <li class="nav-item "><a class="nav-link User1"  href="#myModal2" class="trigger-btn" data-toggle="modal"> <!--data-toggle="modal" data-target="#modalinscription"-->S'INSCRIRE</a></li>
                </ul>
              
                
            </div>
        </div>
    </nav>



     <!-- Masthead-->
     <header class="masthead">
      <div class="container">
          <div class="masthead-heading text-uppercase">
            <p class="Txt-Cont" style="text-align: left">
              VENEZ <span style="color:#FCCD45">DECOUVRIR</span> <br>LES <span style="color:#FCCD45">MEILLEURS</span> RESTAURANTS
            </p>
          <div class="form-control w-100 ">
            <input class=" recherche w-50" type="search" placeholder="EX : VILLES,RESTAURANTS..." aria-label="Search" style="padding-left: 5px;">
            <button class="btn  btn-primary " type="submit" style="margin-left: 1%;">Rechercher</button>
          </div>
          
      </div>
  </header>


  <!-- Villes-->
 <div id="villes" class="mt-3">
     <h1 class='sel'>Notre selection de villes</h1>
  <div class="padding m-3" style="width: 100%;height: 100%;">
          <div class="container">
            <div class="row w-100 h-50">
              <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                  <a href="./Ville/Ville.php?ville=rabat"><img src="RABAT.png" class="w-100 h-100"></a>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 w-100">
              <a href="./Ville/Ville.php?ville=marrakech"><img src="KECH.png" class="w-100 h-50 mb-1"></a>
              <a href="./Ville/Ville.php?ville=casablanca"><img src="CASA.png" class="w-100 h-50 mt-1"></a>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 w-25">
              <a href="./Ville/Ville.php?ville=fes"><img src="FES.png" class="w-100 h-100"></a>
              </div>
            </div>
  
          </div>
        </div>
        </div>
  

  <div class="mt-5" id="recettes">
    <p  id='tit2'>
      OSEZ LE FAIT-MAISON <br> ECHANGEZ <span style="color:#FCCD45">LES RECETTES</span> FACILES <br>  ET <span style="color:#FCCD45">LES CONSEILS </span> CUISINE 
    </p>
     <div class="container">
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="#">
      <img src="framboise.jpg"  width="300" height="300">
    </a>
    <div class="desc">Smoothie framboise myrtille</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="#">
      <img src="dess2.jpeg"  width="300" height="300">
    </a>
    <div class="desc">CUPCAKES CARAMEL</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="#">
      <img src="salade1.jpg"  width="300" height="300">
    </a>
    <div class="desc">Salade cesar</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="#">
      <img src="lasagne.jpg"  width="300" height="300">
    </a>
    <div class="desc">Lasagne</div>
  </div>
</div>
</div>
</div>
</div>

<div class="clearfix"></div>


  <center style="margin-top: 40px"><button class="btn  btn-primary " ><a href="./Categories/Categories.php" style="text-decoration: none;color:white;">Voir plus</a></button> </center>




   <!-- Team-->
   <section class="page-section bg-light mt-5" id="team">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase"  style="color :#FCCD45">Notre equipe</h2>
            <h4 class="section-subheading text-muted">DES ELEVES INGENIEURS EN GINIE INFORMATIQUE A L'ECOLE MOHAMMEDIA D'INGENIEURS</h4>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="./Team/hind.jpeg" alt="" />
                    <h5>HIND BELHARMA</h5>
                    <ul class="social-icons">
                      <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a class="linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
                      <li><a class="github" href="#"><i class="fab fa-github"></i></a></li> 
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
              <div class="team-member">
                  <img class="mx-auto rounded-circle" src="./Team/kenza.jpg" alt="" />
                  <h5>KENZA EL KHATTAR</h5>
                  <ul class="social-icons" >
                    <li><a class="facebook" href="#" ><i class="fab fa-facebook-f"></i></a></li>
                    <li><a class="linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
                    <li><a class="github" href="#"><i class="fab fa-github"></i></a></li> 
                  </ul>
              </div>
          </div>
      </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="team-member">
                <img class="mx-auto rounded-circle" src="./Team/ghita.jpg" alt="" />
                <h5>GHITA DOUAZI</h5>
                <ul class="social-icons">
                  <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a class="linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
                  <li><a class="github" href="#"><i class="fab fa-github"></i></a></li> 
                </ul>
            </div>
        </div>
        <div class="col-lg-6">
          <div class="team-member">
              <img class="mx-auto rounded-circle" src="./Team/abd.jpg" alt="" />
              <h5>ABDERRAHMANE EL HARCHI</h5>
              <ul class="social-icons">
                <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a class="linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
                <li><a class="github" href="#"><i class="fab fa-github"></i></a></li> 
              </ul>
          </div>
        </div>
    </div>
  </div>
</section>




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
  <div class="modal-dialog modal-dialog-centered modal-login">
    <div class="modal-content">
      <div class="modal-header">        
        <h4 class="modal-title"style="   font-family:BERNARD MT;" >S'AUTHENTIFIER </h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <form action="./Connexion/Connection.php" method="post">
               <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <i class="fa fa-paper-plane"></i>
          </span>                    
        </div>
        <input type="text" class="form-control"  name="Username" placeholder="Nom de l'utilisateur" required="required">
      </div>
        </div>
    <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <i class="fa fa-lock"></i>
          </span>                    
        </div>
        <input type="password" class="form-control" name="Password" placeholder="mot de passe" required="required">
      </div>
        </div>
          <div class="form-group">
            <input type="submit" class="btn btn-primary btn-block btn-lg"value="S'AUTHENTIFIER">
          </div>
        </form>
      </div>

 <div class="d-flex justify-content-center" >
              <a href="./ResetPass/EntrerMail.php" style="color: black">Mot de passe oublié ?</a>
            </div>
    
            <div class="modal-footer">
              <div class="links">
              Vous n'avez pas de compte ?<a href="#">Inscrivez-vous</a>
              </div>
            </div>
    </div>
  </div>
</div>





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
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">        
 <h4 class="modal-title" style ="text-align: center ; font-family:BERNARD MT; font-size: 26px;" >S'INSCRIRE </h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="signup-form">
        <form action="./Connexion/Inscription.php" method="post">
        <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <span class="fa fa-user"></span>
                </span>                    
              </div>
              <input type="text" class="form-control" name="Nom" placeholder="Nom" required="required">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <span class="fa fa-user"></span>
                </span>                    
              </div>
              <input type="text" class="form-control" name="Prenom" placeholder="Prenom" required="required">
            </div>
        </div>

        <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <span class="fa fa-user"></span>
          </span>                    
        </div>
        <input type="text" class="form-control" name="User" placeholder="Username" required="required">
      </div>
        </div>
         <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <i class="fa fa-paper-plane"></i>
          </span>                    
        </div>
        <input type="email" class="form-control" name="mail" placeholder="Email Address" required="required">
      </div>
        </div>
    <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <i class="fa fa-lock"></i>
          </span>                    
        </div>
        <input type="password" class="form-control" name="MotDePasse" placeholder="mot de passe" required="required">
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
        <input type="password" class="form-control" name="confirm_password" placeholder="Confirmer mot de passe " required="required">
      </div>
        </div>
        <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <span class="fa fa-flag"></span>
          </span>                    
        </div>
        <input type="text" class="form-control" name="Pays" placeholder="Pays" required="required">
      </div>
        </div>
        <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <span class="fa fa-city"></span>
          </span>                    
        </div>
        <input type="text" class="form-control" name="Ville" placeholder="Ville" required="required">
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

 
     <!--footer section -->
    <footer class="site-footer" id="about">
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
              <li><a href="#">ACCEUILS</a></li>
              <li><a href="#villes">VILLES</a></li>
              <li><a href="./Recette/recette.php">RECETTES</a></li>
              <li><a href="./Contact/Contact.php">CONTACT</a></li>
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