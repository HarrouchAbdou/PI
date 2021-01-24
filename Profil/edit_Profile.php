<?php
    session_start();
    $con=mysqli_connect('localhost','root','');
    mysqli_select_db($con,'clients');
    $name=$_POST['Nom'];
    $pname=$_POST['Prenom'];
    $username=$_POST['User'];
    $email=$_POST['mail'];
    $pwd=$_POST['MotDePasse'];
    $Rpwd=$_POST['RepeatMotDePasse'];
    $country=$_POST['Pays'];
    $city=$_POST['Ville'];
    $requette_selection="select * from clients where Username='$username'";
    $resultat=mysqli_query($con,$requette_selection);
    $NOL=mysqli_num_rows($resultat);
    if($pwd==$Rpwd){
            $requette_modification="UPDATE clients SET Nom='$name',Prenom='$pname',Email='$email', Password='$pwd',Pays='$country',Ville='$city' WHERE Username='$username' ";
            mysqli_query($con,$requette_modification);
            $_SESSION['name']=$pname.' '.$name;
            header('location:../Acceuil.php');
        }
    else{
            echo "Rectifier le mot de passe";
        }
        
    
?>