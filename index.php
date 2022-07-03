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
</head>
<body>

<h1><p style="color: blue;">HAMI - 聯合診所掛號系統 - 2021</p></h1>
<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="entry.php">病患資料</a></li>
  <li><a href="register.php">掛號登錄</a></li>
  <li><a href="update_register.php">看診完成</a></li>
  <li><a href="show_register.php">候診看板</a></li>
  <li><a href="show_chart.php">掛號統計</a></li>
</ul>
<img src="image/hospital.jpg"   alt="hospital">


</body>
</html>


