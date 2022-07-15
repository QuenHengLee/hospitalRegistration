<!DOCTYPE html>
<html>
<head>
<style>
  table,
  td {
      border: 1px solid #333;
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
<?php 

$month = date('m');
$day = date('d');
$year = date('Y');

$today = $year . '-' . $month . '-' . $day;
?>
<h1><p style="color: blue;">HAMI - 聯合診所掛號系統 - 掛號登入</p></h1>
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="entry.php">病患資料</a></li>
  <li><a class="active" href="register.php">掛號登錄</a></li>
  <li><a href="update_register.php">看診完成</a></li>
  <li><a href="show_register.php">候診看板</a></li>
  <li><a href="show_chart.php">掛號統計</a></li>
</ul>
<p>

<?php
$displayForm = True;
if(isset($_GET['submit'])){
  $displayForm = False;
}
if($displayForm){
?>

<form action="" method="GET" name="first">
  <table  align="center" style="width:40%">
    <thead> 
        <tr> <td>欄位名稱</td> <td>資料內容</td> </tr> 
    </thead>
    <tbody>
      <tr> 
        <td>身分證號</td> 
        <td>
          <input type="text" name="ssid" value="<?php if(isset($_GET['ssid'])){echo $_GET['ssid'];} ?>">                             
           <input type="submit" name="submit" value ="GO">
        </td> 
      </tr>
      <tr> 
        <td>病患基本資料</td> 
        <td> </td> 
      </tr>
      <tr> 
        <td>手機號碼</td> 
        <td> </td> 
      </tr>

    </tbody>
  </table>
</form>
 
<?php 
}
?>
 

<?php
  $con = mysqli_connect("localhost","root","","clinic");
  
  if(isset($_GET['ssid'])){
      $ssid = $_GET['ssid'];
      $query = "SELECT * FROM patient WHERE ssid='$ssid' ";
      $query_run = mysqli_query($con, $query);

      if(mysqli_num_rows($query_run) > 0){
          foreach($query_run as $row){
            ?>
            <form action="insert_register.php" method="POST">
              <table  align="center" style="width:40%">
                <thead> 
                  <tr> <td>欄位名稱</td> <td>資料內容</td> </tr> 
                </thead>          
                <tbody> 
                  <tr>
                    <td>身分證號</td> 
                    <td> <input type="text" name="patient_ssid" value=" <?= $row['ssid']; ?>" > </td>
                  </tr>  
                  <tr>
                    <td>病患基本資料</td> 
                    <td><?= $row['name'] ,$row['gender'], $row['birthday'], $row['height'], $row['weight']; ?></td>
                  </tr>
                  <tr>
                    <td>手機號碼</td> 
                    <td><?= $row['phone']; ?></td>
                  </tr>                     
                  <tr>
                    <td>掛號科別</td> 
                    <td> 
                      <?php
                        $query9 = "SELECT * FROM department";
                        $result9 = mysqli_query($con, $query9);
                      ?>
                      <select  name="department_id" >
                      <?php while($row9 = mysqli_fetch_array($result9)):;?>
                      <option value="<?php echo $row9['department_name'];?>">
                      <?php echo $row9['department_name'];?>
                      </option>
                      <?php endwhile;?>
                      </select>

                    
                    </td>
                  </tr> 
                  <tr>
                    <td>看診日期</td> 
                    <td><input type="date"  value="<?php echo $today; ?>"  name="clinic_date"></td>
                  </tr>  
                  <tr>
                    <td>看診時段</td> 
                    <td>
                      <input type="radio" name="clinic_hours" value="上午">上午
                      <input type="radio" name="clinic_hours" value="下午">下午
                      <input type="radio" name="clinic_hours" value="晚上">晚上
                    </td>
                  </tr> 
                </tbody>
                <tfoot>
                  <tr>
                    <th colspan="2">
                      <input type="submit" name="submit" value="新增掛號">
                      <button type="reset"> 重新填寫</button>
                    </th>
                  </tr>
              </tfoot>
              </table>

            </form>

              <?php
          }
      }
      else{
          echo "No Record Found";
      }
  }
?>



 
</body>
</html>


