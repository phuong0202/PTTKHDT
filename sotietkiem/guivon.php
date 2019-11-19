<?php include('config.php');?>
<?php
$conn=connect();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['maso'])) {$maso=$_POST['maso'];}
  if(isset($_POST['tenkh1'])) {$tenkhachhang=$_POST['tenkh1'];}
  if(isset($_POST['sotiengui'])) {$sotiengui=$_POST['sotiengui'];}
  if(isset($_POST['ngaygui'])) {$ngaygui=$_POST['ngaygui'];}
		$dinh_dang_moi = date("Y-m-d", strtotime($ngaygui));
  $sql4="SELECT * FROM khachhang WHERE makh= (SELECT makh FROM sotietkiem WHERE maso=$maso)";
  $result4=$conn->query($sql4);
  $row4=$result4->fetch_assoc();
if($row4["tenkh"] !== $tenkhachhang) { echo $tenkhachhang;}
  else{
   $sql6="SELECT * FROM sotietkiem WHERE maso=$maso";
  $result6=$conn->query($sql6);
  $row6=$result6->fetch_assoc();
  $sotienguibandau=$row6["sotiengui"];
  $sotienlaibandau=$row6["sotienlai"];
  $ngayguibandau=$row6["ngaygui"];
  $sql7="SELECT * FROM quatrinh WHERE maso=$maso";
  $result7=$conn->query($sql7);
  $row7=$result7->fetch_assoc();
  $laixuat=$row7["laixuat"];
  $sql5="SELECT * FROM loaitietkiem WHERE maloai= (SELECT maloai FROM sotietkiem WHERE maso=$maso)";
  $result5=$conn->query($sql5);
  $row5=$result5->fetch_assoc();
  $loaiso=$row5["maloai"];
  $sql8="SELECT * FROM loaitietkiem WHERE maloai=$loaiso";
  $result8 = $conn->query($sql8);
  $row8 = $result8->fetch_assoc();
  $laixuat1=$row8["laixuat"];
  $tienlai=$sotienlaibandau+((strtotime($ngaygui) - strtotime($ngayguibandau)) / (60 * 60 * 24))*$sotienguibandau*($laixuat/30);
    $tiengui=$sotienguibandau+$sotiengui;

    $sql="UPDATE sotietkiem SET sotiengui='$tiengui',ngaygui='$dinh_dang_moi',sotienlai='$tienlai' WHERE maso=$maso";
    $sql3="UPDATE `quatrinh` SET laixuat= '$laixuat1' WHERE maso=$maso";
  if ($conn->query($sql) && $conn->query($sql3) === TRUE) {
        echo  "Thêm dữ liệu thành công";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
//Đóng database
$connect->close();
}
 }

function tinhlai($ngaygui,$ngayguibandau,$laixuat,$sotiengui)
{
  $days = (strtotime($ngaygui) - strtotime($ngayguibandau)) / (60 * 60 * 24);
  
      $tienlai=$day*$sotiengui*($laixuat/30);
      return $tienlai;
}
?>
