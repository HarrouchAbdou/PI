<?php
    session_start();
    if (isset($_POST['validation'])){
        $con=mysqli_connect('localhost','root','');
        mysqli_select_db($con,'clients');
        $CodeV=$_POST['Code'];
        
        
        $requette="select * from reset_password where token='$CodeV'";
        $resul=mysqli_query($con,$requette);
        
        while($row = mysqli_fetch_array($resul)){
               if ($row['token']==$CodeV){
                header('location:EntrerPass.php'); 
               }

        else{
            echo "Erreur du code";
        }
       
    }
}
        
    
?>