<?php include('config.php');
require 'functionajax.php';
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Light Bootstrap Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <script type="text/javascript" src="./js/guivon.js"></script>
</head>
<?php
$conn=connect();
					$sql = "SELECT * FROM user";
					$result = $conn->query($sql);
					
if ($result->num_rows > 0) {
	    // output data of each row

		while($row = $result->fetch_assoc()) {
			echo $row["name"];
	}
}
	?>
	
}
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Creative Tim
                </a>
            </div>

            <ul class="nav">
                <li >
                    <a href="thongke.php">
                        <i class="pe-7s-graph"></i>
                        <p>Thống kê</p>
                    </a>
                </li>
                <li>
                    <a href="taikhoan.php">
                        <i class="pe-7s-user"></i>
                        <p>Tài khoản</p>
                    </a>
                </li>
                <li>
                    <a href="sotietkiem.php">
                        <i class="pe-7s-note2"></i>
                        <p>Sổ tiết kiệm</p>
                    </a>
                </li>
                <li>
                    <a href="rutvonlanhlai.php">
                        <i class="pe-7s-cash"></i>
                        <p>Rút vốn/Lãnh lãi</p>
                    </a>
                </li>
                <li class="active">
                    <a href="mosorutvon.php">
                        <i class="pe-7s-piggy"></i>
                        <p>Mở sổ/gửi vốn</p>
                    </a>
                </li>
                <li>
                    <a href="phuhoi.php">
                        <i class="pe-7s-refresh-2"></i>
                        <p>Phụ hồi</p>
                    </a>
                </li>
				<li class="active-pro">
                    <a href="upgrade.php">
                        <i class="pe-7s-rocket"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
                <div class="container-fluid">
                        <div class="navbar-header">
                           
                            <a class="navbar-brand" href="#">Mở sổ và gửi vốn</a>
                        </div>
                        <div class="collapse navbar-collapse">
                            
        
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                   <a href="">
                                       <p>Tài khoản</p>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="#">
                                        <p>Đăng xuất</p>
                                    </a>
                                </li>
                                <li class="separator hidden-lg"></li>
                            </ul>
                        </div>
                    </div>
        </nav>
        <script type="text/javascript" src="./js/moso.js"></script>

       <input type="button" value="Mở sổ" onclick="openNav1()">
       <div id="mySidenav1" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav1()">&times;</a>
  <button onclick="openNav2()">Khách hàng cũ</button>
  <div id="mySidenav2" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav2()">&times;</a>
<div class="form-style-5">
		<form action="" onsubmit=" moso_kh_cu()" method="POST">
		<fieldset>
		<legend><span class="number">2</span> <p>Phiếu gửi tiền</p></legend>
		<label for="job">Mã sổ tiết kiệm:</label>
		<?php
$conn1=connect();
					$sql1 = "SELECT Max(maso) as tam FROM sotietkiem ";
					$result1 = $conn1->query($sql1);
					
if ($result1->num_rows > 0) {
	    // output data of each row

		while($row1 = $result1->fetch_assoc()) {
			$tam=$row1["tam"]+1;
			echo '<input type="text" name="maso" id="maso" placeholder="" value="'.$tam.'" disabled>';
	}
}
else 
{
	echo "khong có dữ liệu";
}
	?>
		<label for="job">Mã khách hàng:</label>
		
		<input type="text" name="dskh" id="dskh">
			</optgroup>
		</select>
		<label for="job">Số tiền gửi:</label>
		<input type="text" name="sotiengui" id="sotiengui" placeholder="" pattern="[0-9]{7,}" title="Số tiền gửi phải lớn hơn 1 tr">
		<label for="job">Ngày gửi:</label>
		<input type="text" name="ngaygui" id="datemoso" placeholder="">
		<label for="job">Loại sổ tiết kiệm</label>
		<select  name="loaiso" id="loaiso">
		<optgroup label="loại sổ">
		  <?php
$conn1=connect();
					$sql1 = "SELECT *  FROM loaitietkiem ";
					$result1 = $conn1->query($sql1);
					
if ($result1->num_rows > 0) {
	    // output data of each row

		while($row1 = $result1->fetch_assoc()) {
			echo '<option value="'.$row1["maloai"].'">'.$row1["tenloai"].'</option>';
	}
}
else 
{
	echo "khong có dữ liệu";
}
	?>
		</optgroup>
		</select> 
		      
		</fieldset>
		
		<input type="submit" value="Thêm" />
		</form>
		<button onclick="openNav4()" class="chonkh">chọn khách hàng</button>
		<div id="mySidenav4" class="sidenav">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav4()">&times;</a>
			<div>
			<?php
			listkh();
			?>
		</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="js/moso_moi.js"></script>
  <button onclick="openNav3()">Khách hàng mới</button>
  <div id="mySidenav3" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav3()">&times;</a>
<div class="form-style-5">
		<form method="POST" onsubmit="return ktmoso_kh_moi() ">
		<fieldset>
		<legend><span class="number">2</span> <p>Phiếu gửi tiền</p></legend>
		<label for="job">Mã sổ tiết kiệm:</label>
		<?php
$conn1=connect();
					$sql1 = "SELECT Max(maso) as tam FROM sotietkiem ";
					$result1 = $conn1->query($sql1);
					
if ($result1->num_rows > 0) {
	    // output data of each row

		while($row1 = $result1->fetch_assoc()) {
			$tam=$row1["tam"]+1;
			echo '<input type="text" name="maso" id="maso" placeholder="" value="'.$tam.'" disabled>';
	}
}
else 
{
	echo "khong có dữ liệu";
}
	?>
		
		<label for="job">Tên khách hàng:</label>
		<input type="text" name="tenkh" id="tenkh" placeholder="" required="" autofocus="" pattern="[a-zA-Z]" title="Tên khách hàng chứa ký tự lạ">
		<label for="job">Số chứng minh nhân dân:</label>
		<input type="text" name="socmnd" id="socmnd" placeholder="" required="" autofocus="" pattern="[0-9]{9}|[0-9]{11}" title="Số CMND không hợp lệ">
		<label for="job">Địa chỉ:</label>
		<input type="text" name="diachi" id="diachi" placeholder="" required="" autofocus="">
		<label for="job">Số tiền gửi:</label>
		<input type="text" name="sotiengui" id="sotiengui1" placeholder="" required="" autofocus="" pattern="[0-9]{7,}" title="Số tiền gửi phải lớn hơn 1 tr">
		<label for="job">Ngày gửi:</label>
		<input type="text" name="ngaygui" id="datemoso1" placeholder="" required="" autofocus="">
		<label for="job">Loại sổ tiết kiệm</label>
		<select for="job" name="loaiso" id="loaiso1">
		<optgroup label="loại sổ">
		  <?php
$conn1=connect();
					$sql1 = "SELECT *  FROM loaitietkiem ";
					$result1 = $conn1->query($sql1);
					
if ($result1->num_rows > 0) {
	    // output data of each row

		while($row1 = $result1->fetch_assoc()) {
			echo '<option value="'.$row1["maloai"].'">'.$row1["tenloai"].'</option>';
	}
}
else 
{
	echo "khong có dữ liệu";
}
	?>
		</optgroup>
		</select> 
		      
		</fieldset>
		
		<input type="submit" value="Thêm" />
		</form>
</div>
</div>
</div>
       <input type="button" value="Gửi vốn"onclick="openNav()">
         <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<div class="form-style-5">
		<form onsubmit="return guivon()" method="POST">
		<fieldset>
		<legend><span class="number">2</span> <p>Phiếu gửi tiền</p></legend>
		<label for="job" >Mã sổ tiết kiệm:</label>
		<input type="text" name="maso" id="maso1" placeholder="" onkeyup="ktmasoguivon(this.value)">
		<div id="kq"></div>
		<label for="job">Tên khách hàng:</label>
		<input type="text" name="tenkh" id="tenkh1" placeholder="" required="" autofocus="" pattern="[a-zA-Z]" title="Tên khách hàng chứa ký tự lạ" >
		<label for="job">Số tiền gửi:</label>
		<input type="text" name="sotiengui2" id="sotiengui2" placeholder="">
		<label for="job">Ngày gửi:</label>
		<input type="text" name="datemoso" id="datemoso2" placeholder="">
		      
		</fieldset>
		
		<input type="submit" value="Gửi vốn" />
		</form>
</div>
</div>
</div>
    </div>
</div>

</body>

        <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

    

    <style type="text/css">
	.chonkh{
		position: absolute;
		top: 45%;
		right: 33%;
	}
	.sidenav {
  height: 100%; /* 100% Full-height */
  width: 0; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 1; /* Stay on top */
  top: 0; /* Stay at the top */
  left: 0;
  background-color: #111; /* Black*/
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 60px; /* Place content 60px from the top */
  transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
}

/* The navigation menu links */
.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
  color: #f1f1f1;
}

/* Position and style the close button (top right corner) */
.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
#main {
  transition: margin-left .5s;
  padding: 20px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
<script type="text/javascript">
	function openNav() {
  document.getElementById("mySidenav").style.width = "100%";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
function openNav1() {
  document.getElementById("mySidenav1").style.width = "100%";
}

/* Set the width of the side navigation to 0 */
function closeNav1() {
  document.getElementById("mySidenav1").style.width = "0";
}
function openNav2() {
  document.getElementById("mySidenav2").style.width = "100%";
}

/* Set the width of the side navigation to 0 */
function closeNav2() {
  document.getElementById("mySidenav2").style.width = "0";
}
function openNav3() {
  document.getElementById("mySidenav3").style.width = "100%";
}

/* Set the width of the side navigation to 0 */
function closeNav3() {
  document.getElementById("mySidenav3").style.width = "0";
}
function openNav4() {
  document.getElementById("mySidenav4").style.width = "100%";
}

/* Set the width of the side navigation to 0 */
function closeNav4() {
  document.getElementById("mySidenav4").style.width = "0";
}
function datemmoso()
{
	var d = new Date();
	var thang=d.getMonth()+1;
	document.getElementById("datemoso").value=d.getDate()+"-"+thang+"-"+d.getFullYear();
	document.getElementById("datemoso1").value=d.getDate()+"-"+thang+"-"+d.getFullYear();
	document.getElementById("datemoso2").value=d.getDate()+"-"+thang+"-"+d.getFullYear();
}
window.onload= function(){
	datemmoso();
}
</script>
<style type="text/css">
.form-style-5{
	max-width: 500px;
	padding: 10px 20px;
	background: #f4f7f8;
	margin: 10px auto;
	padding: 20px;
	background: #f4f7f8;
	border-radius: 8px;
}
.form-style-5 fieldset{
	border: none;
}
.form-style-5 legend {
	font-size: 1.4em;
	margin-bottom: 10px;
}
.form-style-5 label {
	display: block;
	margin-bottom: 8px;
}
.form-style-5 input[type="text"],
.form-style-5 input[type="date"],
.form-style-5 input[type="datetime"],
.form-style-5 input[type="email"],
.form-style-5 input[type="number"],
.form-style-5 input[type="search"],
.form-style-5 input[type="time"],
.form-style-5 input[type="url"],
.form-style-5 textarea,
.form-style-5 select {
	background: rgba(255,255,255,.1);
	border: none;
	border-radius: 4px;
	font-size: 15px;
	margin: 0;
	outline: 0;
	padding: 10px;
	width: 100%;
	box-sizing: border-box; 
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box; 
	background-color: #e8eeef;
	color:#8a97a0;
	-webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
	box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
	margin-bottom: 10px;
}
.form-style-5 input[type="text"]:focus,
.form-style-5 input[type="date"]:focus,
.form-style-5 input[type="datetime"]:focus,
.form-style-5 input[type="email"]:focus,
.form-style-5 input[type="number"]:focus,
.form-style-5 input[type="search"]:focus,
.form-style-5 input[type="time"]:focus,
.form-style-5 input[type="url"]:focus,
.form-style-5 textarea:focus,
.form-style-5 select:focus{
	background: #d2d9dd;
}
.form-style-5 select{
	-webkit-appearance: menulist-button;
	height:40px;
}
.form-style-5 .number {
	background: #1abc9c;
	color: #fff;
	height: 30px;
	width: 30px;
	display: inline-block;
	font-size: 0.8em;
	margin-right: 4px;
	line-height: 30px;
	text-align: center;
	text-shadow: 0 1px 0 rgba(255,255,255,0.2);
	border-radius: 15px 15px 15px 0px;
}

.form-style-5 input[type="submit"],
.form-style-5 input[type=""]
{
	position: relative;
	display: block;
	padding: 19px 39px 18px 39px;
	color: #FFF;
	margin: 0 auto;
	background: #1abc9c;
	font-size: 18px;
	text-align: center;
	font-style: normal;
	width: 100%;
	border: 1px solid #16a085;
	border-width: 1px 1px 3px;
	margin-bottom: 10px;
}
.form-style-5 input[type="submit"]:hover,
.form-style-5 input[type="button"]:hover
{
	background: #109177;
}
.table {
	border: solid 1px white;
	color: white;

}
.table input[type="button"] {
	color: black;
}
</style>
</html>
<?php
	function listkh()
	{
		$conn1=connect();
					$sql1 = "SELECT *  FROM khachhang ";
					$result1 = $conn1->query($sql1);
$table="";					
if ($result1->num_rows > 0) {
	    // output data of each row

		while($row1 = $result1->fetch_assoc()) {
			$s="";
			$s=$s.'<td>'.$row1["makh"].'</td>';
			$s=$s.'<td>'.$row1["tenkh"].'</td>';
			$s=$s.'<td>'.$row1["diachi"].'</td>';
			$s=$s.'<td>'.$row1["socmnd"].'</td>';
			$s=$s.'<td><input type="button" onclick=" chonkh('.$row1["makh"].')" value="chọn"></td>';
			$table=$table.'<tr>'.$s.'</tr>';
	}
	$tr='<tr><td>Mã khách hàng</td><td>Tên Khách hàng</td><td>Địa chỉ </td><td>Số chứng minh nhân dân</td><td>Chọn</td></tr>';
	echo '<table class="table"><tr>'.$tr.$table.'</table>';
}
else 
{
	echo "khong có dữ liệu";
}
	}
?>
<script type="text/javascript">
	function chonkh(makh)
	{
		document.getElementById("dskh").value=makh;
		closeNav4();
	}
</script>
