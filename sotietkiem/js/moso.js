function moso_kh_cu()
{ 
    var maso=document.getElementById("maso").value;
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
       loaiso:loaiso,
       maso:maso
      },
      success:function(response){
        console.log(response);
        if($.trim(response) == "ok"){
          alert("Thêm dữ liệu thành công.");
          window.location.href="mosoguivon.php?maso="+maso;
          
        }else{
          alert(response);
        }
      }
    })
           




    }
}


