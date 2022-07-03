<?php  
include_once 'db.php';
$query = "SELECT department_name , COUNT(*) as number FROM `registration`inner join department ON registration.dept_id = department.department_id GROUP by dept_id"; 
$result = mysqli_query($conn, $query);  
?>  
<!DOCTYPE html>  
<html>  
    <head>  
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
        <div  style="width:900px;">  
            <h3 align="center"   >HAMI-聯合診所掛號管理系統:掛號統計</h3>  
            <div id="piechart" style="width: 900px; height: 500px;"></div>  
        </div>  
    </body>  
</html>  