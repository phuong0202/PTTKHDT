<?php
require 'config.php';
$conn=connect();
// Kiểm tra mã sổ gửi vốn
if(isset($_GET['loaitimkiem'])  && isset($_GET['data']))
{
	
	
		if ($_REQUEST['loaitimkiem']=='tenkh') {
			$datatimkiem=$_REQUEST['data'];
			$sql11="SELECT * FROM khachhang WHERE tenkh like "."'%$datatimkiem%'";
		}
		else
	{
		if ($_REQUEST['loaitimkiem']=='cmnd') {
			$sql11="SELECT * FROM khachhang Where socmnd=".$_REQUEST['data'];
		}
	}
	$s="";$str="";$table="";
    $conn11=connect();
	$result11 = $conn11->query($sql11);
	if($result11->num_rows > 0)
	{
		while($row1=$result11->fetch_assoc())
		 {
			$s="";
			$s=$s.'<td>'.$row1["makh"].'</td>';
			$s=$s.'<td>'.$row1["tenkh"].'</td>';
			$s=$s.'<td>'.$row1["diachi"].'</td>';
			$s=$s.'<td>'.$row1["socmnd"].'</td>';
			$s=$s.'<td><input type="button" onclick=" chonkh('.$row1["makh"].')" value="chọn"></td>';
			$table=$table.'<tr>'.$s.'</tr>';
	}
	$tr='<tr><td>Mã khách hàng</td><td>Tên Khách hàng</td><td>Địa chỉ </td><td>Số chứng minh nhân dân</td><td>Chọn</td></tr>';

	echo '<div id="outtimkiemkh"><table class="table"><tr>'.$tr.$table.'</table></div>';
}
else 
{
	echo "khong có dữ liệu";
}
	}
?>