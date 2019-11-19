function moso_kh_cu()
{ 
	 var dskh=document.getElementById("dskh").value;
	 var sotiengui=document.getElementById("sotiengui").value;
	  var ngaygui=document.getElementById("datemoso").value;
	  var loaiso=document.getElementById("loaiso").value;
	 error=false;
	 if (!error){
            $.ajax({
      type:'POST',
      url:'mosokhcu.php',
      data:{
        dskh:dskh,
        sotiengui:sotiengui,
       ngaygui:ngaygui,
       loaiso:loaiso
      },
      success:function(response){
        if($.trim(response)==="Thêm dữ liệu thành công"){
          window.location.href="mosoguivon.php";
          alert(response);
        }else{
          alert(response);
        }
      }
    })
            



    }
}


