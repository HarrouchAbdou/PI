<?php
    session_start();
    $con=mysqli_connect('localhost','root','');
    mysqli_select_db($con,'clients');
    $username=$_POST['Username'];
    $pwd=$_POST['Password'];
    $requette_selection="select * from clients where Username='$username' && Password='$pwd'" ;
    $resultat=mysqli_query($con,$requette_selection);
    $NOL=mysqli_num_rows($resultat);
    if ($NOL==1){
        while($row = mysqli_fetch_array($resultat)){
            $Fullname=$row["Prenom"].' '.$row["Nom"];
            $etat=$row["Type"];
        
        }
        $_SESSION['US']=$username;
        $_SESSION['name']=$Fullname;
        $_SESSION['mail']=$mail;
        $_SESSION['etat']=$etat;

        header('location:../Acceuil.php');
        
    }
    else{
        echo "Vous n'etes pas inscrits :|";
    }
?>
