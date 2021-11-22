<?php
// including the database connection file
include("includes/session2.php");
if(isset($_POST['add'])){
 $supp_email=$_POST['email']?? "";
   $supp_name=$_POST['supp_name']?? "";
	$supp_name=$_POST['supp_comp']?? "";
	 $supp_address=$_POST['supp_address']?? "";
    $supp_contact=$_POST['supp_contact']?? "";
   
     // checking empty fields
    if(empty($supp_name) || empty($supp_comp)|| empty($supp_address) || empty($supp_contact) || empty($email)){    
            
        if(empty($supp_name)) {
            echo "<font color='red'>Supplier name field is empty!</font><br/>";
        }
		if(empty($supp_comp)) {
            echo "<font color='red'>Supplier's company field is empty!</font><br/>";
        }
        
        if(empty($supp_address)) {
            echo "<font color='red'>Address field is empty!</font><br/>";
        }

        if(empty($supp_contact)) {
            echo "<font color='red'>Contact field is empty!</font><br/>";
        }   

        if(empty($email)) {
            echo "<font color='red'>Email field is empty!</font><br/>";
        }   

    } else {    

        $query = "INSERT INTO supplier (supp_name, supp_comp, supp_address, supp_contact, email) 
        VALUES ('$supp_name','$supp_comp','$supp_address','$supp_contact','$email')";  

        $result = mysqli_query($dbconn,$query);
        
        if($result){
            //redirecting to the display page. In our case, it is index.php
        header("Location: supplier.php");
        }
        
    }
}


?>


