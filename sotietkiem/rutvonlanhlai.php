<?php
require 'config.php';
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
                <li class="active">
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
                    
                    <div class="navbar-brand" href="#">Rút vốn và Lãnh lãi</div>
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
        
                    <button onclick="openNav()">Rút vốn </button>
                    <div id="mySidenav" class="sidenav">
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                            <div class="form-style-5">
                                    <form action="xulyrutvonlanhlai.php"  method="get">
                                    <fieldset>
                                    <legend><span class="number">1</span> Thông tin rút vốn</legend>
                                    
                                    <label >Mã sổ tiết kiệm:</label>
                                    <input type="number" name="maso" id="maso" placeholder="" required="" autofocus="" pattern="[0-9]{1,15}" title="Mã sổ chứa ký tự lạ hoặc hơn 15 ký tự" onkeyup="ktmaso(this.value)"  >
                                    <div id="kqkt"></div>
				                    <br>
                                    <label >Tên khách hàng:</label>
                                    <input type="text" name="tenkh" id="tenkh" placeholder="" required="" autofocus="" onkeyup="kttenkhachhang(this.value)">
                                    <div id="kqkt1"></div>
                                    <label >Số tiền rút:</label>
                                    <input type="number" name="sotienrut" placeholder="" required="" autofocus="" pattern="[0-9]{5,}" title="Số tiền rút phải > 50.000đ" onkeyup="kttienrut(this.value)">
                                    <div id="kqkt2"></div>
                                    <label >Ngày rút:</label>
                                    <input type="text" name="ngay" placeholder="" id="daterutvon"   readonly>
                                   </fieldset>
                                   <input type="submit" value="Rút vốn" />
                                    </form>
                                    </div>
                          </div>
                          
                          <!-- Use any element to open the sidenav -->
                          
                          
                          <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
                          <div id="main">
                            ...
                            <?php
                            if(isset($_REQUEST['tienconlai']))
                            {
                                echo '<script language="javascript">';
	echo 'alert("Rút vốn thành công !! Số tiền rút : '.$_REQUEST["sotienrut"].'  Số tiền còn lại :'.$_REQUEST['tienconlai'].'")';  //not showing an alert box.
    echo '</script>';
                            }
                            else{
                                echo '<script language="javascript">';
	echo 'alert("Rút lãi thành công !! Số tiền lãi rút : '.$_REQUEST["sotienrut"].'  Số tiền lãi còn lại :'.$_REQUEST['tienlaiconlai'].'")';  //not showing an alert box.
    echo '</script>';
                            }
                            
    ?>
                          </div>
                          <button onclick="openlanhlai()">Lãnh lãi </button>
                    <div id="lanhlai" class="sidenav">
                            <a href="javascript:void(0)" class="closebtn" onclick="closelanhlai()">&times;</a>
                            <div class="form-style-5">
                                    <form action="xulyrutvonlanhlai.php"  method="get">
                                    <fieldset>
                                    <legend><span class="number">2</span> Thông tin lãnh lãi</legend>
                                    <label >Chọn hình thức rút vốn:</label>
                                    <select name="hinhthuc">
                                        <option value="truoc">Rút lãi trước kỳ hạn</option>
                                        <option value="dung">Rút lãi đúng hạn</option>
                                    </select>
                                    <label >Mã sổ tiết kiệm:</label>
                                    <input type="number" name="masolanh" id="masolanh" placeholder="" required="" autofocus="" pattern="[0-9]{1,15}" title="Mã sổ chứa ký tự lạ hoặc hơn 15 ký tự" onkeyup="ktmasolanh(this.value)"  >
                                    <div id="lanh1"></div>
				                    
                                    <label >Tên khách hàng:</label>
                                    <input type="text" name="tenkhlanh" id="tenkhlanh" placeholder="" required="" autofocus="" onkeyup="kttenkhachhanglanh(this.value)">
                                    <div id="lanh2"></div>
                                    <label >Số tiền rút:</label>
                                    <input type="number" name="sotienlanh" placeholder="" required="" autofocus="" pattern="[0-9]{5,}" title="Số tiền rút phải > 50.000đ" onkeyup="kttienlanh(this.value)">
                                    <div id="lanh3" ></div>
                                    <label >Ngày rút:</label>
                                    <input type="text" name="ngaylanh" placeholder="" id="datelanhlai"  readonly>
                                   </fieldset>
                                   <input type="submit" value="Lãnh lãi" />
                                    </form>
                                    </div>
                          </div>
                          </div>
                          
                          <!-- Use any element to open the sidenav -->
          
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            
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
<style type="text/css">
 /* The side navigation menu */
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
<script>
        function openNav() {
          document.getElementById("mySidenav").style.width = "100%";
        }
        
        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
        }
        function openlanhlai() {
          document.getElementById("lanhlai").style.width = "100%";
        }
        
        function closelanhlai() {
          document.getElementById("lanhlai").style.width = "0";
        }
function daterutvon()
{
	var d = new Date();
	var thang=d.getMonth()+1;
	document.getElementById("daterutvon").value=d.getDate()+"/"+thang+"/"+d.getFullYear();
}
function datelanhlai()
{
	var d = new Date();
	var thang=d.getMonth()+1;
	document.getElementById("datelanhlai").value=d.getDate()+"/"+thang+"/"+d.getFullYear();
}
window.onload= function(){
	daterutvon();
    datelanhlai();
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
        /* font-family: Georgia, "Times New Roman", Times, serif; */
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
    .form-style-5 textarea
    {
        font-family: Georgia, "Times New Roman", Times, serif;
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
        margin-bottom: 30px;
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
        height:35px;
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
    .form-style-5 input[type="button"]
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
    </style>