


<?php
session_start();

    $con = mysqli_connect("localhost","root","","categories");

    if(isset($_POST['inserer'])){
        $username=$_SESSION['US'];
        $NomPlat=$_POST['name'];
        $Categ=$_POST['categ'];
        $ingredients=$_POST['ingredients'];
        $preparation=$_POST['preparation'];
        
        $image_tmp = $_FILES["image"]["tmp_name"];
        $Etat='Non Valide';
        echo count($_FILES);
        $sql="INSERT INTO `propositions`(`Username`, `NomPlat`, `Categorie`, `Ingredients`, `Preparation`, `ImagePlat`, `EtatDemande`) VALUES('$username','$NomPlat','$Categ','$ingredients','$preparation',?,'$Etat')";

        $img = file_get_contents($_FILES['image']['tmp_name']); 

        $stmt = mysqli_prepare($con,$sql);

        mysqli_stmt_bind_param($stmt,"s",$img);

        mysqli_stmt_execute($stmt); 

        if(mysqli_stmt_affected_rows($stmt)==1){
            echo '<script>alert("Image Successfullly UPloaded")</script>';
        }else{
            echo '<script>alert("Error")</script>';
        }
        
        mysqli_close($con);
        header("location: Depo.php");
    }else{
        echo "Erreur";
    }

    // if(isset($_GET["affiche"])){ // hadchi poour afficher les images from db
	// 	echo "<p>Les images existents  dans la bd :</p>";
	// 	$sql = "SELECT * FROM propositions"; 
	//     $result = mysqli_query($con, $sql);
	//     while($row = mysqli_fetch_array($result)) {
	// 		echo "<img width='400' height='200' src='data:image/jpeg;base64,".base64_encode($row['ImagePlat'])."' /><br>";
	// 	}
	// }

?>