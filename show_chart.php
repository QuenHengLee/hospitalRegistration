<?php  
include_once 'db.php';
$query = "SELECT department_name , COUNT(*) as number FROM `registration`inner join department ON registration.dept_id = department.department_id GROUP by dept_id"; 
$result = mysqli_query($conn, $query);  
?> 
<!DOCTYPE html>
<html>
<head>
<style>
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
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
        <script type="text/javascript">  
        google.charts.load('current', {'packages':['corechart']});  
        google.charts.setOnLoadCallback(drawChart);  
        function drawChart()  
        {  
            var data = google.visualization.arrayToDataTable([  
                        ['department_name', 'Number'],  
                        <?php  
                        while($row = mysqli_fetch_array($result))  
                        {  
                            echo "['".$row["department_name"]."', ".$row["number"]."],";  
                        }  
                        ?>  
                    ]);  
            var options = {  
                    title: '2021 各科門診掛號人數統計圖',  
                    //is3D:true,  
                    pieHole: 0.4  
                    };  
            var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
            chart.draw(data, options);  
        }  
        </script> 
</head>
<body>

<h1><p style="color: blue;">HAMI - 聯合診所掛號系統 - 掛號統計</p></h1>
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="entry.php">病患資料</a></li>
  <li><a href="register.php">掛號登錄</a></li>
  <li><a href="update_register.php">看診完成</a></li>
  <li><a href="show_register.php">候診看板</a></li>
  <li><a class="active" href="show_chart.php">掛號統計</a></li>
</ul>
<div  style="width:900px;">  
            <h3 align="center"   >HAMI-聯合診所掛號管理系統:掛號統計</h3>  
            <div id="piechart" style="width: 900px; height: 500px;"></div>  
        </div> 
</body>
</html>


