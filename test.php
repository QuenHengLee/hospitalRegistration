<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <h4>How to Fetch Data by ID in Textbox using PHP MySQL</h4>
    <form action="" method="GET">
        <input type="text" name="ssid" value="<?php if(isset($_GET['ssid'])){echo $_GET['ssid'];} ?>">                             
        <button type="submit">Search</button>
    </form>                           
    <hr>
    <?php 
        $con = mysqli_connect("localhost","root","","clinic");
        if(isset($_GET['ssid'])){
            $ssid = $_GET['ssid'];

            $query = "SELECT * FROM patient WHERE ssid='$ssid' ";
            $query_run = mysqli_query($con, $query);

            if(mysqli_num_rows($query_run) > 0){
                foreach($query_run as $row){
                    ?>
                        Name <input type="text" value="<?= $row['name']; ?>">
                        Height <input type="text" value="<?= $row['height']; ?>">
                        Phone No <input type="text" value="<?= $row['phone']; ?>">
                    <?php
                }
            }
            else{
                echo "No Record Found";
            }
        }                                 
    ?>


<?php
        //搜尋等級列表(add_role) 中的所有會員等級
		$query9 = "SELECT * FROM department";
		$result9 = mysqli_query($con, $query9);
	?>

	<label>修改會員等級 : </label>
	<select  name="S_ROLE" >

        <?php while($row9 = mysqli_fetch_array($result9)):;?>
        	<!--下面 $row9['(資料表(add_role) 的欄位(STAFF_ROLE) )']; ---------->
            <option value="<?php echo $row9['department_name'];?>">
            	<?php echo $row9['department_name'];?>
            </option>
        <?php endwhile;?>

	</select>


</body>
</html>