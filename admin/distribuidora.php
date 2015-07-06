<?php
session_start();
include("Conexion.php");  

if ($_SESSION["$nusuario"] == "") { 
	header("location: sesion.php","_self");
} else {

	if ($_POST["Grabar"]){
		$editar="update distribuidora set 
		titulo_sup  = '$_POST[titulo_sup]',
		subtitulo_sup = '$_POST[subtitulo_sup]',
		texto_sup  = '$_POST[texto_sup]',
		titulo_nosotros  = '$_POST[titulo_nosotros]',
		texto_nosotros  = '$_POST[texto_nosotros]',
		titulo_mision  = '$_POST[titulo_mision]',
		texto_mision  = '$_POST[texto_mision]'";
		$sentencia = mysql_query($editar,$conn)or die("Error al grabar: ".mysql_error);
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script type="text/javascript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>

<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image: url();
}
-->
</style>
<link href="Span/Letras.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body,td,th {
	color: #000000;
}
-->
</style>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="../admin/css/admin.css" >
<title>Admin</title>

</head>

<body>
  <?php

	$listado = "select * from distribuidora";
	$sentencia = mysql_query($listado,$conn);
	if($rs=mysql_fetch_array($sentencia,$mibase)){
		$titulo_sup = $rs["titulo_sup"];
		$subtitulo_sup = $rs["subtitulo_sup"];
		$texto_sup = $rs["texto_sup"];
		$titulo_nosotros = $rs["titulo_nosotros"];
		$texto_nosotros = $rs["texto_nosotros"];
		$titulo_mision = $rs["titulo_mision"];
		$texto_mision = $rs["texto_mision"];	
  }
	?>
  <form action="distribuidora.php" method="post" name="form1" id="form1">
    
    <table width="900px" border="0" align="center" cellpadding="0" cellspacing="0">
     
      <tr>
        <td height="34" colspan="5" align="center" valign="middle" class="titulo">distribuidora</td>
      </tr>
      <tr>
        <td height="17" colspan="5"></td>
      </tr>
      <tr>
        <td width="223" height="54" valign="top"><p class="subtitulo">Título Superior:&nbsp;</p></td>
        <td colspan="3" valign="top"><input name="titulo_sup" type="text" id="titulo_sup" value="<?php echo $titulo_sup; ?> " size="70"></td>
      </tr>
      <tr>
        <td width="223" height="54" valign="top"><p class="subtitulo">Subtítulo Superior:&nbsp;</p></td>
        <td colspan="3" valign="top"><input name="subtitulo_sup" type="text" id="subtitulo_sup" value="<?php echo $subtitulo_sup; ?> " size="70"></td>
      </tr>
      <tr>
              <td height="113" valign="top" ><p class="subtitulo">Texto Superior:&nbsp;</p></td>
        <td colspan="3" valign="top"><textarea name="texto_sup" id="texto_sup" cols="70" rows="6   "><?php echo $texto_sup; ?> </textarea></td>
      </tr>
      <tr>
        <td height="29" colspan="5"></td>
      </tr>
            <tr>
              <td height="55" valign="top"><p class="subtitulo">Título Nosotros:&nbsp;</p></td>
              <td colspan="3" valign="top"><input name="titulo_nosotros" type="text" id="titulo_nosotros" value="<?php echo $titulo_nosotros; ?> " size="70"></td>
      </tr>
      <tr>
        <td height="113" valign="top"><p class="subtitulo">Texto Nosotros:&nbsp;</p></td>
        <td colspan="3" valign="top"><textarea name="texto_nosotros" id="texto_nosotros" cols="70" rows="6   "><?php echo $texto_nosotros; ?> </textarea></td>
      </tr>
      <tr>
        <td height="94" align="right" valign="top" class="texto"><a href="../imagenes/nosotros/Upload_foto.php?id=1" class="boton-cambiar"><img src="../admin/foto.png"> cambiar imagen</a>
          <p class="texto-info">( imagen máximo 600px)</p></td>
        <td colspan="3" valign="top"><img src="../imagenes/nosotros/1.jpg" alt="" width="400"></td>
      </tr>
      <tr>
        <td height="34" colspan="5"></td>
      </tr>
            <tr>
              <td height="54" valign="top"><p class="subtitulo">Título Misión:&nbsp;</p></td>
              <td colspan="3" valign="top"><input name="titulo_mision" type="text" id="titulo_mision" value="<?php echo $titulo_mision; ?> " size="70"></td>
      </tr>
      <tr>
        <td height="110" valign="top"><p class="subtitulo">Texto Misión:&nbsp;</p></td>
        <td colspan="3" valign="top"><textarea name="texto_mision" id="texto_mision" cols="70" rows="6   "><?php echo $texto_mision; ?> </textarea></td>
      </tr>
      <tr>
        <td height="94" align="right" valign="top" class="texto"><a href="../imagenes/nosotros/Upload_foto.php?id=2" class="boton-cambiar"><img src="../admin/foto.png"> cambiar imagen</a>
          <p class="texto-info">( imagen máximo 600px)</p></td>
        <td colspan="3" valign="top"><img src="../imagenes/nosotros/2.jpg" alt="" width="400"></td>
        <br><br>
        
      </tr>
      
      <tr>
        <td height="91" colspan="5"><div align="center">
          <label>
          <input name="Grabar" type="submit" class="grabar" id="Grabar" value="Grabar" />
          </label>
        </div></td>
      </tr>
    </table>
    <p align="center"><a href="sesion.php" class="volver"><img src="../admin/volver.png"> volver</a></p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
</form>
</body>
</html>
<?php } ?>