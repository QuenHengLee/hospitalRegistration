<?php
include_once 'db.php';
if(isset($_POST['submit']))
{    
    $department_name = $_POST['department_id'];
    //$query = "SELECT department_id FROM department WHERE department_name='$department_name' ";
    $result = $conn->query("SELECT department_id FROM department WHERE department_name='$department_name'");
    if (!$result) {
        die($conn->error);
      }
    $row = $result->fetch_assoc();

     $patient_ssid = $_POST['patient_ssid'];
     $clinic_date = $_POST['clinic_date'];
     $clinic_hours = $_POST['clinic_hours'];
     $dept_id = $row['department_id'];
     $registration_time = date('Y-m-d H:i:s');
     $status = 0;    

     $sql = "INSERT INTO registration (patient_ssid,clinic_date,clinic_hours,dept_id,registration_time,status)
     VALUES ('$patient_ssid','$clinic_date','$clinic_hours','$dept_id','$registration_time','$status')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>