function guivon() {
	
	var maso=document.getElementById("maso1").value;
	 var tenkh1=document.getElementById("tenkh1").value;
	  var sotiengui=document.getElementById("sotiengui2").value;
	  var ngaygui=document.getElementById("datemoso2").value;
	  alert(tenkh1);
	 error=false;
	 if (!error){
            $.ajax({
      type:'POST',
      url:'guivon.php',
      data:{
        maso:maso,
        tenkh1:tenkh1,
        sotiengui:sotiengui,
        ngaygui:ngaygui
      },
      success:function(response){
        if($.trim(response)=="ok"){
          alert("Gửi vốn thành công.Tên khách hàng là : "+tenkh1+"số tiền gửi thêm là :"+sotiengui)
          window.location.href="mosoguivon.php";
        }else{
          alert(response);
        }
      }
    })
            



    }
}