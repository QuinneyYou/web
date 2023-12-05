
<?php
include("../../config/connect.php");
 $tensp = $_POST['tensp'];
 $masp = $_POST['masp'];
 $gia = $_POST['gia'];
 $giadagiam = $_POST['discount'];
 $mota = $_POST['mota'];
 $soluong = $_POST['soluong'];
 $tintrang = $_POST['tinhtrang'];

 $hinhanh = $_FILE['hinhanh']['name'];
 $hinhanh = $_FILE['hinhanh']['temp_name'];
 if(isset($_POST['themsp'])){
    $query="INSERT into sanpham VALUE('$tensp','$masp','$gia','$giadagiam','$mota','$hinhanh','$soluong','$tintrang')";
    if(mysqli_query($connect,$query)){
       
    }
 }
?>