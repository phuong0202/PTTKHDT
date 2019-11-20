<script>
    //kiểm tra mã sổ rút vốn có hợp lệ ko
    function ktmaso(str) {
							var xmlhttp = new XMLHttpRequest();
							xmlhttp.onreadystatechange = function() {
								(this.readyState == 4 && this.status == 200) 
								document.getElementById("kqkt").innerHTML = this.responseText;}
								xmlhttp.open("GET", "xulyrutvonlanhlai.php?maso="+str+"&k=1", true);
								xmlhttp.send();
							}
    //kiểm tra tên khách hàng với mã sổ rút vốn đã nhập
    function kttenkhachhangrutvon(str){
        var maso=document.getElementById("maso").value;
        var xmlhttp = new XMLHttpRequest();
							xmlhttp.onreadystatechange = function() {
								(this.readyState == 4 && this.status == 200) 
								document.getElementById("kqkt1").innerHTML = this.responseText;}
								xmlhttp.open("GET", "xulyrutvonlanhlai.php?maso="+maso+"&tenkhachhang="+str+"&j=1", true);
								xmlhttp.send();
    }
    //kiểm tra số tiền rút trong rút vốn
    function kttienrut(str){
        var maso=document.getElementById("maso").value;
        var tenkh=document.getElementById("tenkh").value;
        var xmlhttp = new XMLHttpRequest();
							xmlhttp.onreadystatechange = function() {
								(this.readyState == 4 && this.status == 200) 
								document.getElementById("kqkt2").innerHTML = this.responseText;}
								xmlhttp.open("GET", "xulyrutvonlanhlai.php?maso="+maso+"&tenkhachhang="+tenkh+"&sotienrut="+str, true);
								xmlhttp.send();
    }
    //kiểm tra mã sổ lanh lãi có hợp lệ ko
    function ktmasolanh(str) {
							var xmlhttp = new XMLHttpRequest();
							xmlhttp.onreadystatechange = function() {
								(this.readyState == 4 && this.status == 200) 
								document.getElementById("lanh1").innerHTML = this.responseText;}
								xmlhttp.open("GET", "xulyrutvonlanhlai.php?masolanh="+str+"&k=1", true);
								xmlhttp.send();
							}
    //kiểm tra tên khách hàng với mã sổ lãnh lãi đã nhập
    function kttenkhachhanglanh(str){
        var maso=document.getElementById("masolanh").value;
        var xmlhttp = new XMLHttpRequest();
							xmlhttp.onreadystatechange = function() {
								(this.readyState == 4 && this.status == 200) 
								document.getElementById("lanh2").innerHTML = this.responseText;}
								xmlhttp.open("GET", "xulyrutvonlanhlai.php?masolanh="+maso+"&tenkhachhanglanh="+str+"&h=1", true);
								xmlhttp.send();
    }
    //kiểm tra số tiền rút trong lãnh lãi
    function kttienlanh(str){
        var maso=document.getElementById("masolanh").value;
        var tenkh=document.getElementById("tenkhlanh").value;
        var xmlhttp = new XMLHttpRequest();
							xmlhttp.onreadystatechange = function() {
								(this.readyState == 4 && this.status == 200) 
								document.getElementById("lanh3").innerHTML = this.responseText;}
								xmlhttp.open("GET", "xulyrutvonlanhlai.php?masolanh="+maso+"&tenkhachhanglanh="+tenkh+"&sotienlanh="+str, true);
								xmlhttp.send();
    }
	//kiểm tra mã sổ gửi vốn
    function ktmasoguivon(str){
        
        var xmlhttp = new XMLHttpRequest();
							xmlhttp.onreadystatechange = function() {
								(this.readyState == 4 && this.status == 200) 
								document.getElementById("kq").innerHTML = this.responseText;}
								xmlhttp.open("GET", "xulymosoguivon.php?maso="+str+"&k=1", true);
								xmlhttp.send();
    }
	//kiểm tra tên khách hàng gửi vốn
	function kttenkhachhangguivon(str){
        var maso=document.getElementById("maso1").value;
        var xmlhttp = new XMLHttpRequest();
							xmlhttp.onreadystatechange = function() {
								(this.readyState == 4 && this.status == 200) 
								document.getElementById("kqtenkh").innerHTML = this.responseText;}
								xmlhttp.open("GET", "xulymosoguivon.php?maso="+maso+"&tenkhachhang="+str+"&h=1", true);
								xmlhttp.send();
    
    }
	//kiểm tra số CMND gửi tiền cho khách hàng mới
	function ktCMND(str)
	{
		var xmlhttp = new XMLHttpRequest();
		var tenkh=document.getElementById("tenkh").value;
		
							xmlhttp.onreadystatechange = function() {
								(this.readyState == 4 && this.status == 200) 
								document.getElementById("ktcmnd").innerHTML = this.responseText;}
								xmlhttp.open("GET", "xulymosoguivon.php?tenkhachhang="+tenkh+"&CMND="+str, true);
								xmlhttp.send();
	}
</script>