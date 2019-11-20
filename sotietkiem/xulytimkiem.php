<?php
require 'config.php';
$conn=connect();
// Kiểm tra mã sổ gửi vốn
if(isset($_GET['loaitimkiem'])  && isset($_GET['data']))
{
	if($_REQUEST['loaitimkiem']=='maso')
	{
		$sql11="SELECT stk.maso,stk.sotiengui,stk.ngaygui,kh.tenkh,kh.diachi,kh.socmnd,ltk.tenloai,stk.sotienlai FROM sotietkiem as stk , khachhang as kh , loaitietkiem as ltk WHERE stk.makh=kh.makh AND stk.maloai=ltk.maloai and stk.maso=".$_REQUEST['data'];
	}
	else
	{
		if ($_REQUEST['loaitimkiem']=='tenkh') {
			$datatimkiem=$_REQUEST['data'];
			$sql11="SELECT stk.maso,stk.sotiengui,stk.ngaygui,kh.tenkh,kh.diachi,kh.socmnd,ltk.tenloai,stk.sotienlai FROM sotietkiem as stk , khachhang as kh , loaitietkiem as ltk WHERE stk.makh=kh.makh AND stk.maloai=ltk.maloai and kh.tenkh="."'$datatimkiem'";
		}
		else
	{
		if ($_REQUEST['loaitimkiem']=='cmnd') {
			$sql11="SELECT stk.maso,stk.sotiengui,stk.ngaygui,kh.tenkh,kh.diachi,kh.socmnd,ltk.tenloai,stk.sotienlai FROM sotietkiem as stk , khachhang as kh , loaitietkiem as ltk WHERE stk.makh=kh.makh AND stk.maloai=ltk.maloai and kh.socmnd=".$_REQUEST['data'];
		}
	}
	}
	$s="";
    $conn11=connect();
	$result11 = $conn11->query($sql11);
	if($result11->num_rows > 0)
	{
		while($row=$result11->fetch_assoc())
		{$dinh_dang_moi = date("d-m-Y", strtotime($row["ngaygui"]));
			$s=$s.'<tr>
                                                <td>'.$row["maso"].'</td>
                                                <td>'.$row["tenkh"].'</td>
                                                <td>'.$row["socmnd"].'</td>
                                                <td>'.$row["diachi"].'</td>
                                                <td>'.$dinh_dang_moi.'</td>
                                                <td>'.$row["sotiengui"].'</td>
                                                <td>'.$row["tenloai"].'</td>
                                                <td>'.$row["sotienlai"].'</td>
                                                <td>
                                                        <button  class="btn btn-info">Sửa</button>
                                                        <button  class="btn btn-danger">Xóa</button>
                                                </td>   
                                            </tr>';
		}
		$s='<table class="table table-hover table-striped"><thead>
                                        <th>Mã sổ tiết kiệm</th>
                                        <th>Tên khách hàng</th>                                  
                                        <th>Số CMND</th>
                                        <th>Địa chỉ</th>
                                        <th>Ngày mở sổ</th>
                                        <th>Số tiền gửi ban đầu</th>
                                        <th>Loại tiết kiệm</th>
                                        <th>Số tiền lãi</th>
                                        <th>Thao tác</th>    
                                    </thead>
                                    <tbody>'.$s.' </tbody>
                                </table>';

echo $s;		
}
	else {
        echo 'Không tìm thấy thông tin sổ.';
        
	}
// 	echo "chao";
}
?>