function ktmoso_kh_moi()
{
	var maso=document.getElementById("maso").value;
  var tenkh=document.getElementById("tenkh").value;
    var socmnd=document.getElementById("socmnd").value;
    var diachi=document.getElementById("diachi").value;
   var dskh=document.getElementById("dskh").value;
   var sotiengui=document.getElementById("sotiengui1").value;
    var ngaygui=document.getElementById("datemoso1").value;
    var loaiso=document.getElementById("loaiso1").value;
    
   error=false;
   if (!error){
            $.ajax({
      type:'POST',
      url:'mosokhmoi.php',
      data:{
      	maso:maso,
        dskh:dskh,
        sotiengui:sotiengui,
       ngaygui:ngaygui,
       loaiso:loaiso,
       tenkh:tenkh,
       socmnd:socmnd,
       diachi:diachi
      },
      success:function(response){
        if($.trim(response)==="ok"){
          alert("Thêm sổ mới thành công.")
          window.location.href="mosoguivon.php?maso="+maso;
          alert(response);
        }else{
          alert(response);
        }
      }
    })
            



    }
}