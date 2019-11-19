<?php
require 'config.php';
$conn=connect();
// Kiểm tra mã sổ gửi vốn
if(isset($_GET['maso'])  && isset($_GET['k']))
{
    $conn11=connect();
    $sql11="SELECT * FROM sotietkiem WHERE maso='".$_REQUEST['maso']."'";
	$result11 = $conn11->query($sql11);
	if($result11->num_rows > 0)
	{
		echo 'Mã sổ đúng';
	}
	else {
        echo 'Mã sổ sai vui lòng nhập lại';
        
	}
// 	echo "chao";
}
//Kiểm tra tên khách hàng gửi vốn
if(isset($_GET['tenkhachhang']) && isset( $_REQUEST['maso']) && isset($_GET['h']))
{
    
    $sql1="SELECT * FROM sotietkiem as so , khachhang as kh WHERE kh.makh=so.makh and so.maso=".$_REQUEST['maso']." AND kh.tenkh='".$_REQUEST['tenkhachhang']."'";
    $result1 = $conn->query($sql1);
    echo $sql1;
	if($result1->num_rows > 0)
	{
		echo 'Tên khách hàng đúng';
	}
	else {
        echo 'Tên khách hàng sai vui lòng nhập lại ';
        
	}
	//echo "chao";
}
//Kiểm tra CMND
if(isset($_REQUEST['tenkhachhang']) && isset($_REQUEST['CMND']))
{
	$conn2=connect();
	$sql2="SELECT * FROM khachhang WHERE tenkh='".$_REQUEST['tenkhachhang']."' AND socmnd=".$_REQUEST['CMND'];
	echo $sql2;
	$result2 = $conn2->query($sql2);
	if($result2->num_rows > 0)
	{
		echo 'Số CMND đã tồn tại';
	}
	else {
        echo 'Số CMND phù hợp';
        
	}
}
?>