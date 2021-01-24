<?php
    session_start();
    $con=mysqli_connect('localhost','root','');
    mysqli_select_db($con,'clients');
    $username=$_SESSION['US'];
    $requette_selection="select * from clients where Username='$username'" ;
    $resultat=mysqli_query($con,$requette_selection);
    $NOL=mysqli_num_rows($resultat);
    if ($NOL==1){
        while($row = mysqli_fetch_array($resultat)){
            $User=$row["Username"];
            $name=$row["Nom"];
            $Pname=$row["Prenom"];
            $mail=$row["Email"];
            $country=$row["Pays"];
            $city=$row["Ville"];
            $Gender=$row["Sexe"];  
        }
        $_SESSION['user']=$User;
        $_SESSION['nom']=$name;
        $_SESSION['prenom']=$Pname;
        $_SESSION['mail']=$mail;
        $_SESSION['pays']=$country;
        $_SESSION['ville']=$city;
        $_SESSION['sexe']=$Gender;

        header('location:profile.php');    
    }
    else{
        echo "Vous n'etes pas inscrits :|";
    }
?>
