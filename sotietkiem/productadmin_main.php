
<script type="text/javascript" src="productxoa.js"></script>
 <script type="text/javascript" src="https://code.jquery.com/jquery-latest.pack.js"></script>
<div class="row">
	<!-- product -->
	<?php


	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	//$id=$_GET["id"];

	if(!isset($_GET["page"])){
		$page=0;
	}else{
		$page=($_GET["page"]-1)*20;

	}
	$sql = "SELECT * from product limit $page,20";
	$result = $conn->query($sql);
	$id="";
	$catalog_id="";
	$name="";
	$price="";
	$content="";
	$discount="";
	$image_link="";
	$created="";
	$xoa="";
	$sua="";
	$table="";
	if(isset($result)){
	if ($result->num_rows > 0) {
	    // output data of each row

		while($row = $result->fetch_assoc()) {
			$s="";
		$s=$s.'<td><div class="rowtb2">'.$row['catalog_id'].'</div></td>';
		$s=$s.'<td><div class="rowtb2">'.$row['name'].'</div></td>';
		$s=$s.'<td><div class="rowtb2">'.$row['price'].'</div></td>';
		$s=$s.'<td><div class="rowtb2"> <textarea>'.$row['content'].'</textarea></div></td>';
		$s=$s.'<td><div class="rowtb2">'.$row['discount'].'</div></td>';
		$s=$s.'<td><div class="rowtb2"><img src="../images_product/'.$row["image_link"].'" alt="" class="imgadm"></div></td>';
		$s=$s.'<td><div class="rowtb2">'.$row['qty'].'</div></td>';
		$s=$s.'<td><div class="rowtb2"><form method="post" onsubmit="return kt('.$row["id"].')" name="form" ><input type="submit" id="xoa" name="xoa" value="Xóa" class="prod"/><input type="hidden" id="id" name="id" value="'.$row['id'].'"/>'.'</form></div></td>';
		$s=$s.'<td><div class="rowtb2"><form method="post" action="quanly.php?sua=true""><input type="submit" id="sua" name="sua" value="Sửa" class="prod"/><input type="hidden" id="id" name="id" value="'.$row['id'].'"/>'.'</form></div></td>';
		$table=$table.'<tr>'.$s.'</tr>';
		}
		$tr='<tr><td>Phân loại</td><td>Tên sản phẩm </td><td>Giá</td><td>Nội dung</td><td>Giảm giá</td><td>Ảnh</td><td>Số lượng</td><td>Sửa</td><td>Xóa</td></tr>';
	echo '<table class="table">'.$tr.$table.'</table>';

	} else {
		echo "0 results";
	}	

}
?>
</div>
