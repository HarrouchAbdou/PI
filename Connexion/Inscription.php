<?php
    session_start();
    $con=mysqli_connect('localhost','root','');
    mysqli_select_db($con,'clients');
    $name=$_POST['Nom'];
    $pname=$_POST['Prenom'];
    $username=$_POST['User'];
    $email=$_POST['mail'];
    $pwd=$_POST['MotDePasse'];
    $country=$_POST['Pays'];
    $city=$_POST['Ville'];
    $requette_selection="select * from clients where Username='$username'";
    $resultat=mysqli_query($con,$requette_selection);
    $NOL=mysqli_num_rows($resultat);
    if ($NOL==1){
        echo '<script>alert("Ce nom utilisateur est deja utilise")</script>';
    }
    else{
        $requette_insertion="INSERT INTO `clients`(`Nom`,`Prenom`,`Username`,`Email`,`Password`,`Pays`,`Ville`) VALUES ('$name','$pname','$username','$email','$pwd','$country','$city')";
        mysqli_query($con,$requette_insertion);
        echo '<script>alert("Vous etes Inscrit")</script>';
        
    }
    header('location:../index.php');
?>