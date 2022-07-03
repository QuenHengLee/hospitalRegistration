<?php 
ignore_user_abort();//關閉瀏覽器仍然執行
set_time_limit(0);//讓程序一直執行下去
$interval=3;//每隔一定時間運行
do{
    $msg=date("Y-m-d H:i:s");
   // file_put_contents("log.log",$msg,FILE_APPEND);//記錄日誌
    echo $msg;
    sleep($interval);//等待時間，進行下一次操作。
}while(true);
?>