<?php include('config.php');?>
<?php
$conn=connect();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(isset($_POST['dskh'])) {$dskh=$_POST['dskh'];}
    if(isset($_POST['sotiengui'])) {$sotiengui=$_POST['sotiengui'];}
  if(isset($_POST['ngaygui'])) {$ngaygui=$_POST['ngaygui'];}
  if(isset($_POST['loaiso'])) {$loaiso=$_POST['loaiso'];}  
		$dinh_dang_moi = date("Y-m-d", strtotime($ngaygui));
	$sql="INSERT INTO `sotietkiem`( `makh`, `maloai`, `sotiengui`, `ngaygui`) VALUES ('$dskh','$loaiso','$sotiengui','$dinh_dang_moi')";
  $sql0="INSERT INTO `phieuguitien`(`maso`, `makh`, `sotiengui`, `ngaygui`) VALUES ($maso,$dskh,$sotiengui,'$dinh_dang_moi')";
	if ($conn->query($sql) && $conn->query($sql0) === TRUE) {
        echo  "Thêm dữ liệu thành công";
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
//Đóng database
$connect->close();
}
?>
