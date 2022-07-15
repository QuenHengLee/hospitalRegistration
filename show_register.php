<!DOCTYPE html>
<html>
<head>
<style>
    table,
  td {
      border: 1px solid #333;
      align="center"  width:40%"

  }

  span,nobr{
    color:rgb(230, 7, 215 ); 
    text-align: center; 
    font-size:50px;
  }

  #time{
    width:100%;
    margin: 0 auto;
  }
    img {
    width: 100%;
    height: auto;
    }
    ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    }

    li {
    float: left;
    }

    li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    }

    li a:hover:not(.active) {
    background-color: #111;
    }

    .active {
    background-color: #04AA6D;
    }
 
</style>

<!-- 連結JS檔案 -->
<script src="script.js"></script>

</head>
<body onload="startTime()">

<h1><p style="color: blue;">HAMI - 聯合診所掛號系統 - 候診看板</p></h1>
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="entry.php">病患資料</a></li>
  <li><a href="register.php">掛號登錄</a></li>
  <li><a href="update_register.php">看診完成</a></li>
  <li><a class="active" href="show_register.php">候診看板</a></li>
  <li><a href="show_chart.php">掛號統計</a></li>
</ul>
 <!-- THIS IS CLOCK -->
<div align = center>
  <span id="year">year</span><nobr>年</nobr>

  <span id="month">月</span>
  <span id="daynum">00</span><nobr>日</nobr>
  <span id="period">AM</span>

  <span id="hour">00</span><nobr>:</nobr>

  <span id="minutes">00</span><nobr>:</nobr>
  <span id="seconds">00</span>
 
</div>

<?php
$con = mysqli_connect("localhost","root","","clinic");
  // Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$sql = " SELECT * FROM registration WHERE status ='0' ";
$result = mysqli_query($con,$sql);

echo "<table border='1'  align='center' style='width:40%'>
<tr>
<th>序號</th>
<th>身分證號</th>

<th>日期</th>
<th>時段</th>
<th>科別</th>
 </tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";

echo "<td>" . $row['patient_ssid'] . "</td>";
echo "<td>" . $row['clinic_date'] . "</td>";
echo "<td>" . $row['clinic_hours'] . "</td>";
 echo "<td>" . $row['dept_id'] . "</td>";

echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>


</body>
</html>


