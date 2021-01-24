<?php 
 if(isset($_GET['Accept'])){
     if($_GET['Accept']=='true'){
        $con=mysqli_connect('localhost','root','');
        mysqli_select_db($con,'categories');
        mysqli_set_charset($con, 'utf8' );
        
        $sql="insert into ".$_GET['cate']." (select NomPlat,ImagePlat from propositions where ID=".$_GET['id'].")"; 
        $query=mysqli_query($con,$sql);
        $sql="INSERT INTO `recettes`(`Titre`, `Categorie`, `Ingredients`, `Preparation`, `image`) VALUES ((select NomPlat from propositions where ID=".$_GET['id']."),(select Categorie from propositions where ID=".$_GET['id']."),(select Ingredients from propositions where ID=".$_GET['id']."),(select Preparation from propositions where ID=".$_GET['id']."),(select ImagePlat from propositions where ID=".$_GET['id']."))";
        $query=mysqli_query($con,$sql);
        $sql="UPDATE propositions SET EtatDemande='Valide' WHERE ID=".$_GET['id']; 
        $query=mysqli_query($con,$sql);
        


        header('location:ConfirmRecette.php');

 }
 else{
    $sql="UPDATE propositions SET EtatDemande='Refuse' WHERE ID=".$_GET['id']; 
    $query=mysqli_query($con,$sql);
    header('location:ConfirmRecette.php');
 }
}

?>