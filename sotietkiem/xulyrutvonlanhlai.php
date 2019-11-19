<?php
require 'config.php';
$conn=connect();
	if(isset($_REQUEST['maso']))
	{
		$sql="SELECT * FROM sotietkiem WHERE maso='".$_REQUEST['maso']."'";
		$result = $conn->query($sql);
	}
    
// Thao tác xử lý rút vốn
if(isset($_GET['maso']) && isset($_GET['k']))
{
    $conn11=connect();
    $sql11="SELECT * FROM sotietkiem WHERE maso='".$_REQUEST['maso']."'";
	$result11 = $conn->query($sql11);
	if($result11->num_rows > 0)
	{
		echo 'Mã sổ đúng';
	}
	else {
        echo 'Mã sổ sai vui lòng nhập lại';
        
	}
	//echo "chao";
}
if(isset($_GET['tenkhachhang']) && isset( $_REQUEST['maso']) && isset($_GET['h']))
{
    $conn1=connect();
    $sql1="SELECT * FROM sotietkiem as so , khachhang as kh WHERE kh.makh=so.makh and so.maso=".$_REQUEST['maso']." AND kh.tenkh='".$_REQUEST['tenkhachhang']."'";
    $result1 = $conn1->query($sql1);
    echo $sql1;
	if($result1->num_rows > 0)
	{
		echo 'Tên khách hàng đúng';
	}
	else {
        echo 'Tên khách hàng sai vui lòng nhập lại';
        
	}
	//echo "chao";
}
if(isset($_GET['tenkhachhang']) && isset( $_REQUEST['maso']) && isset($_REQUEST['sotienrut']))
{
    $conn3=connect();
    $sql3="SELECT * FROM sotietkiem WHERE maso=".$_REQUEST['maso']."  AND sotiengui>='".$_REQUEST['sotienrut']."'";
    $result3 = $conn3->query($sql3);
    echo $sql3;
	if($result3->num_rows > 0)
	{
		echo 'Số dư thích hợp';
	}
	else {
        echo 'Số dư không đủ vui lòng nhập số khác';
        
	}
	//echo "chao";
}
//Gửi rút vốn
if(isset($_GET['tenkh']) && isset( $_REQUEST['maso'])  && isset($_REQUEST['sotienrut']) )
{
	if($result->num_rows > 0)
	{
		$row=$result->fetch_assoc();
		$sotiengui=$row['sotiengui'];
		$tienvonconlai=$row['sotiengui']-$_REQUEST['sotienrut'];
	}
	//echo"dungs";
	//echo $tienvonconlai;
    $conn2=connect();
    $sql2="INSERT INTO `phieuruttien`( `maso`, `makh`, `sotienrut`, `ngayrut`) VALUES (".$_REQUEST['maso'].",'".$_REQUEST['tenkh']."',".$_REQUEST['sotienrut'].",'".$_REQUEST['ngay']."')";
    //echo $sql2;
	$result2 = $conn2->query($sql2);
	//Tính lãi 
	$sql12="SELECT * FROM quatrinh WHERE maso=".$_REQUEST['maso'];
	$result12 = $conn2->query($sql12);
	if($result12->num_rows > 0)
	{
		$row12=$result12->fetch_assoc();
		$laixuat=$row12['laixuat'];
	}
	$sql14="SELECT * FROM sotietkiem WHERE maso=".$_REQUEST['maso'];
	$result14 = $conn2->query($sql14);
	if($result14->num_rows > 0)
	{
		$row14=$result14->fetch_assoc();
		$sotienlai=$row12['sotienlai'];
	}
	
	$sql13="UPDATE sotietkiem SET `sotienlai`=".$sotienlai+$sotiengui*$laixuat." WHERE  maso=".$_REQUEST['maso'];
	$result13 = $conn2->query($sql13);
	//echo $sql13;
	//hiển thị thông tin sổ sau khi rút vốn
	$sql9="UPDATE sotietkiem SET `sotiengui`=".$tienvonconlai." WHERE  maso=".$_REQUEST['maso'];
	$result9 = $conn2->query($sql9);
	//echo $sql9;
	//$sql8="SELECT * FROM  sotietkiem WHERE maso=".$_REQUEST['maso'];
	
    header("Location:rutvonlanhlai.php?maso=".$_REQUEST['maso']."&sotienrut=".$_REQUEST['sotienrut']."&tienconlai=".$tienvonconlai);
}
//Thao tác xử lý lãnh lãi
if(isset($_GET['masolanh']) && isset($_GET['k']))
{
    $conn4=connect();
    $sql4="SELECT * FROM sotietkiem WHERE maso='".$_REQUEST['masolanh']."'";
	$result4 = $conn4->query($sql4);
	if($result4->num_rows > 0)
	{
		echo 'Mã sổ đúng';
	}
	else {
        echo 'Mã sổ sai vui lòng nhập lại';
        
	}
	//echo "chao";
}
if(isset($_GET['tenkhachhanglanh']) && isset( $_REQUEST['masolanh']) && isset($_GET['h']))
{
    $conn5=connect();
    $sql5="SELECT * FROM sotietkiem WHERE maso=".$_REQUEST['masolanh']." AND tenkh='".$_REQUEST['tenkhachhanglanh']."'";
    $result5 = $conn5->query($sql5);
    //echo $sql1;
	if($result5->num_rows > 0)
	{
		echo 'Tên khách hàng đúng';
	}
	else {
        echo 'Tên khách hàng sai vui lòng nhập lại';
        
	}
	//echo "chao";
}
if(isset($_GET['tenkhachhanglanh']) && isset( $_REQUEST['masolanh']) && isset($_REQUEST['sotienlanh']))
{
    $conn6=connect();
    $sql6="SELECT * FROM sotietkiem WHERE maso=".$_REQUEST['masolanh']." AND tenkh='".$_REQUEST['tenkhachhanglanh']."' AND sotienlai>='".$_REQUEST['sotienlanh']."'";
    $result6 = $conn6->query($sql6);
    //echo $sql3;
	if($result6->num_rows > 0)
	{
		echo 'Số dư thích hợp';
	}
	else {
        echo 'Số dư không đủ vui lòng nhập số khác';
        
	}
	//echo "chao";
}
//Gửi lãnh lãi
if(isset($_GET['tenkhlanh']) && isset( $_REQUEST['masolanh'])  && isset($_REQUEST['sotienlanh']) )
{
	//echo"dungs";
	if($result->num_rows > 0)
	{
		$row=$result->fetch_assoc();
		$tienlaiconlai=$row['sotienlai']-$_REQUEST['sotienlanh'];
	}
    $conn7=connect();
    $sql7="INSERT INTO `phieuruttien`( `maso`, `makh`, `sotienrut`, `ngayrut`) VALUES (".$_REQUEST['masolanh'].",'".$_REQUEST['tenkhlanh']."',".$_REQUEST['sotienlanh'].",'".$_REQUEST['ngaylanh']."')";
	echo $sql7;
	$sql10="UPDATE sotietkiem SET `sotienlai`=".$tienlaiconlai." WHERE  maso=".$_REQUEST['maso'];
	$result10 = $conn7->query($sql10);
	//echo $sql9;
	//$sql8="SELECT * FROM  sotietkiem WHERE maso=".$_REQUEST['maso'];
	
    header("Location:rutvonlanhlai.php?maso=".$_REQUEST['maso']."&sotienrut=".$_REQUEST['sotienlanh']."&tienlaiconlai=".$tienlaiconlai);
    //$result7 = $conn7->query($sql7);
   // header('Location:rutvonlanhlai.php');
}
?>