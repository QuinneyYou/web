<?php
    $connect = mysqli_connect('localhost','root','user','bandienthoai');
    if($connect->errno !== 0)
    {
        echo "Kết nối bị lỗi" .$connect->error;
    }
    $connect->set_charset('utf8');

?>
