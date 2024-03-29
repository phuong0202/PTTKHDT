<?php 
require 'config.php';
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
</head>
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
                <li >
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
                <li>
                    <a href="mosoguivon.php">
                        <i class="pe-7s-piggy"></i>
                        <p>Mở sổ/gửi vốn</p>
                    </a>
                </li>
                <li >
                    <a href="phieuruttien.php">
                        <i class="pe-7s-browser"></i>
                        <p>Phiếu rút tiền</p>
                    </a>
                </li>
                <li class="active">
                    <a href="phieuguitien.php">
                        <i class="pe-7s-diskette"></i>
                        <p>Phiếu gửi tiền</p>
                    </a>
                </li>
                
                <li>
                    <a href="phuhoi.php">
                        <i class="pe-7s-refresh-2"></i>
                        <p>Phụ hồi</p>
                    </a>
                </li>
				<li class="active-pro">
                    <a href="upgrade.html">
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
                    
                            <a class="navbar-brand" href="#">Phiếu rút tiền</a>
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
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                   
                        <form class="form-inline my-2 my-lg-0"  >
                    <div class="col-md-4">
                        <div>Chọn loại tìm kiếm</div>
                            <select name="cars">
                                    
                                    <option value="saab">Mã tài khoản</option>
                                    <option value="fiat">Tên tài khoản</option>
                                    <option value="audi">CMND</option>
                                  </select>
                    </div>
                        <div class="col-md-4">
                                <div>Nhập thông tin tìm kiếm</div>
                                    <input class="form-control mr-sm-2" type="text" size="30" start="31" placeholder="Tìm kiếm"   onkeyup="showsreachadmin(this.value)" >
                                
                            </div>
                        </form>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Thông tin phiếu gửi tiền</h4>
                                <!-- <p class="category">Here is a subtitle for this table</p> -->
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>Mã phiếu</th>
                                        <th>Mã sổ</th>                                  
                                        <th>Mã khách hàng</th>
                                        <th>Số tiền gửi</th>
                                        <th>Mã loại tiết kiệm</th>
                                        <th>Lãi xuất</th>
                                        <th>Ngày gửi</th>
                                        <th>Thao tác</th>
                                    </thead>
                                    <tbody>
                                        <br>
                                        <?php
                                        $conn=connect();
                                        $sql="SELECT * FROM phieuguitien";
                                        $result=$conn->query($sql);
                                        if($result->num_rows > 0)
                                        {
                                            while($row=$result->fetch_assoc())
                                            {
                                                echo '<tr>
                                                <td>'.$row["maphieu"].'</td>
                                                <td>'.$row["maso"].'</td>
                                                <td>'.$row["makh"].'</td>
                                                <td>'.$row["sotiengui"].'</td>
                                                <td>'.$row["maloaitietkiem"].'</td>
                                                <td>'.$row["laixuat"].'</td>
                                                <td>'.$row["ngaygui"].'</td>
                                                
                                                <td>
                                                        <button  class="btn btn-info">Sửa</button>
                                                        <button  class="btn btn-danger">Xóa</button>
                                                </td>   
                                            </tr>';
                                            }
                                        } 
                                         ?>
                                        
                                        
                                        
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


                    


                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>

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

</html>
