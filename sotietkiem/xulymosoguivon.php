<?php
require 'config.php';
// Kiểm tra mã sổ gửi vốn
if(isset($_GET['maso']) )
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
?>