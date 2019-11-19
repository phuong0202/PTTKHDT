<?php include('config.php');?>
<?php
$conn=connect();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $sql4 = "SELECT Max(makh) as tam FROM khachhang ";
          $result1 = $conn->query($sql4);
            $row1 = $result1->fetch_assoc();
            $dskh=$row1["tam"]+1;
    if(isset($_POST['sotiengui'])) {$sotiengui=$_POST['sotiengui'];}
  if(isset($_POST['ngaygui'])) {$ngaygui=$_POST['ngaygui'];}
  if(isset($_POST['loaiso'])) {$loaiso=$_POST['loaiso'];}
  if(isset($_POST['tenkh'])) {$tenkh=$_POST['tenkh'];}
  if(isset($_POST['socmnd'])) {$socmnd=$_POST['socmnd'];}
  if(isset($_POST['diachi'])) {$diachi=$_POST['diachi'];}  
  if(isset($_POST['maso'])) {$maso=$_POST['maso'];}  
		$dinh_dang_moi = date("Y-m-d", strtotime($ngaygui));

	$sql="INSERT INTO `sotietkiem`( `makh`, `maloai`, `sotiengui`, `ngaygui`) VALUES ('$dskh','$loaiso','$sotiengui','$dinh_dang_moi')";
  $sql1="INSERT INTO `khachhang`(`tenkh`, `diachi`, `socmnd`) VALUES ('$tenkh','$diachi','$socmnd')";
	$sql2="SELECT * FROM loaitietkiem WHERE maloai=$loaiso";
  $result = $conn->query($sql2);
  $row = $result->fetch_assoc();
  $laixuat=$row["laixuat"];
  $sql3="INSERT INTO `quatrinh`(`maso`, `laixuat`) VALUES ($maso,$laixuat)";
  if ($conn->query($sql) && $conn->query($sql1) && $conn->query($sql3) === TRUE) {
        echo  "Thêm dữ liệu thành công";
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
//Đóng database
$connect->close();
}
?>
