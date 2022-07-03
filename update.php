<?php
include_once 'db.php';
// echo $_POST['regis_id'];
if(isset($_POST['regis_id']))
{    
     $regis_id = $_POST['regis_id']; 

     $sql = " UPDATE `registration` SET `status`='1' WHERE id = '$regis_id'; ";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>