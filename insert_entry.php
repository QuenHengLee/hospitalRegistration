<?php
include_once 'db.php';
if(isset($_POST['submit']))
{    
     $ssid = $_POST['ssid'];
     $name = $_POST['name'];
     $height = $_POST['height'];
     $weight = $_POST['weight'];
     $gender = $_POST['gender'];
     $birthday = $_POST['birthday'];    
     $phone = $_POST['phone'];    

     $sql = "INSERT INTO patient (ssid,name,height,weight,gender,birthday,phone)
     VALUES ('$ssid','$name','$height','$weight','$gender','$birthday','$phone')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>