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

<h1><p style="color: blue;">HAMI - 聯合診所掛號系統 - 病患資料登入</p></h1>
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a class="active" href="entry.php">病患資料</a></li>
  <li><a href="register.php">掛號登錄</a></li>
  <li><a href="update_register.php">看診完成</a></li>
  <li><a href="show_register.php">候診看板</a></li>
  <li><a href="show_chart.php">掛號統計</a></li>
</ul>
<p>
<form action="insert_entry.php" method="post">
  <table  align="center" style="width:40%">
    <thead> 
        <tr> <td>欄位名稱</td> <td>資料內容</td> </tr> 
    </thead>
    <tbody>

        <tr> <td>身分證號</td> <td><input type="text" name="ssid" ></td> </tr>
        <tr> <td>姓名</td> <td><input type="text" name="name" ></td> </tr>
        <tr> <td>身高</td> <td><input type="text" name="height" >(cm)</td> </tr>
        <tr> <td>體重</td> <td><input type="text" name="weight" >(kg)</td> </tr>
        <tr> <td>生理性別</td> <td><input type="radio" name="gender" value="M">男<input type="radio" name="gender" value="F">女</td> </tr>
        <tr> <td>生日</td> <td><input type="date" name="birthday"></td> </tr>
        <tr> <td>手機號碼</td> <td><input type="text" name="phone" ></td> </tr>

    </tbody>
    <tfoot>
        <tr>
            <th colspan="2">
            <input type="submit" name="submit" value="新增資料">
            <button type="reset"> 重新填寫</button>
        </th>
        </tr>
    </tfoot>
  </table>



</form>





</body>
</html>


