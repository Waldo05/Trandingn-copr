<?php
session_start();
include("Conexion.php");  

if ($_SESSION["$nusuario"] == "") { 
	header("location: sesion.php","_self");
} else {

	if ($_POST["Grabar"]){
		$editar="update inicio set 
		titulo_slide1  = '$_POST[titulo_slide1]',
		titulo_slide2 = '$_POST[titulo_slide2]',
		titulo_slide3  = '$_POST[titulo_slide3]',
		texto_slide1  = '$_POST[texto_slide1]',
		texto_slide2  = '$_POST[texto_slide2]',
		texto_slide3  = '$_POST[texto_slide3]',
		titulo_inicio  = '$_POST[titulo_inicio]',
		texto_inicio1  = '$_POST[texto_inicio1]',
		texto_inicio2  = '$_POST[texto_inicio2]',
    	btn_empresa1  = '$_POST[btn_empresa1]',
    	btn_empresa2  = '$_POST[btn_empresa2]',
    	btn_empresa3  = '$_POST[btn_empresa3]',
    	btn_empresa4  = '$_POST[btn_empresa4]',
    	btn_empresa5  = '$_POST[btn_empresa5]'";
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

	$listado = "select * from inicio";
	$sentencia = mysql_query($listado,$conn);
	if($rs=mysql_fetch_array($sentencia,$mibase)){
		$titulo_slide1 = $rs["titulo_slide1"];
		$titulo_slide2 = $rs["titulo_slide2"];
		$titulo_slide3 = $rs["titulo_slide3"];
		$texto_slide1 = $rs["texto_slide1"];
		$texto_slide2 = $rs["texto_slide2"];
		$texto_slide3 = $rs["texto_slide3"];
		$titulo_inicio = $rs["titulo_inicio"];
		$texto_inicio1 = $rs["texto_inicio1"];
		$texto_inicio2 = $rs["texto_inicio2"];
		$btn_empresa1 = $rs["btn_empresa1"];
		$btn_empresa2 = $rs["btn_empresa2"];
		$btn_empresa3 = $rs["btn_empresa3"];
		$btn_empresa4 = $rs["btn_empresa4"];
		$btn_empresa5 = $rs["btn_empresa5"];	
  }
	?>
  <form action="inicio.php" method="post" name="form1" id="form1">
    
    <table width="900px" border="0" align="center" cellpadding="0" cellspacing="0">
     
      <tr>
        <td height="34" colspan="5" align="center" valign="middle" class="titulo">Slide</td>
      </tr>
      <tr>
        <td height="17" colspan="5"></td>
      </tr>
      <tr>
        <td width="223" height="54" valign="top"><p class="subtitulo">Título Slide 1:&nbsp;</p></td>
        <td colspan="3" valign="top"><input name="titulo_slide1" type="text" id="titulo_slide1" value="<?php echo $titulo_slide1; ?> " size="70"></td>
      </tr>
      <tr>
              <td height="113" valign="top" ><p class="subtitulo">Texto Slide 1:&nbsp;</p></td>
        <td colspan="3" valign="top"><textarea name="texto_slide1" id="texto_slide1" cols="70" rows="6   "><?php echo $texto_slide1; ?> </textarea></td>
      </tr>
      <tr>
        <td height="94" align="right" valign="top" class="texto"><a href="../imagenes/slide/Upload_foto.php?id=1" class="boton-cambiar"><img src="../admin/foto.png"> cambiar imagen</a>
          <p class="texto-info">( imagen de 1400px x 435px )</p></td>
        <td colspan="3" valign="top"><img src="../imagenes/slide/1.jpg" width="500" height="150"></td>
      </tr>
      <tr>
        <td height="54" colspan="5"></td>
      </tr>
            <tr>
              <td height="55" valign="top"><p class="subtitulo">Título Slide 2:&nbsp;</p></td>
              <td colspan="3" valign="top"><input name="titulo_slide2" type="text" id="titulo_slide2" value="<?php echo $titulo_slide2; ?> " size="70"></td>
      </tr>
      <tr>
        <td height="113" valign="top"><p class="subtitulo">Texto Slide 2:&nbsp;</p></td>
        <td colspan="3" valign="top"><textarea name="texto_slide2" id="texto_slide2" cols="70" rows="6   "><?php echo $texto_slide2; ?> </textarea></td>
      </tr>
      <tr>
        <td height="94" align="right" valign="top" class="texto"><a href="../imagenes/slide/Upload_foto.php?id=2" class="boton-cambiar"><img src="../admin/foto.png"> cambiar imagen</a>
          <p class="texto-info">( imagen de 1400px x 435px )</p></td>
        <td colspan="3" valign="top"><img src="../imagenes/slide/2.jpg" alt="" width="500" height="150"></td>
      </tr>
      <tr>
        <td height="48" colspan="5"></td>
      </tr>
            <tr>
              <td height="54" valign="top"><p class="subtitulo">Título Slide 3:&nbsp;</p></td>
              <td colspan="3" valign="top"><input name="titulo_slide3" type="text" id="titulo_slide3" value="<?php echo $titulo_slide3; ?> " size="70"></td>
      </tr>
      <tr>
        <td height="110" valign="top"><p class="subtitulo">Texto Slide 3:&nbsp;</p></td>
        <td colspan="3" valign="top"><textarea name="texto_slide3" id="texto_slide3" cols="70" rows="6   "><?php echo $texto_slide3; ?> </textarea></td>
      </tr>
      <tr>
        <td height="94" align="right" valign="top" class="texto"><a href="../imagenes/slide/Upload_foto.php?id=3" class="boton-cambiar"><img src="../admin/foto.png"> cambiar imagen</a>
          <p class="texto-info">( imagen de 1400px x 435px )</p></td>
        <td colspan="3" valign="top"><img src="../imagenes/slide/3.jpg" alt="" width="500" height="150"></td>
        <br><br>
        
      </tr>
      <tr>
        <td height="24" colspan="5" align="center" valign="middle"></td>
      </tr>
      <tr>
        <td height="34" colspan="5" align="center" valign="middle" class="titulo">INICIO</td>
      </tr>
      <tr>
        <td height="27" colspan="5"></td>
      </tr>
      <tr>
        <td height="54" valign="top"><p class="subtitulo">Título:&nbsp;</p></td>
        <td colspan="3" valign="top"><input name="titulo_inicio" type="text" id="titulo_inicio" value="<?php echo $titulo_inicio; ?> " size="70"></td>
      </tr>
      <tr>
              <td height="113" valign="top" ><p class="subtitulo">Texto 1:&nbsp;</p></td>
        <td colspan="3" valign="top"><textarea name="texto_inicio1" id="texto_inicio1" cols="70" rows="6   "><?php echo $texto_inicio1; ?> </textarea></td>
      </tr>
      <tr>
              <td height="113" valign="top" ><p class="subtitulo">Texto 2:&nbsp;</p></td>
        <td colspan="3" valign="top"><textarea name="texto_inicio2" id="texto_inicio2" cols="70" rows="6   "><?php echo $texto_inicio2; ?> </textarea></td>
      </tr>
      <tr>
        <td height="34" colspan="5" align="center" valign="middle" class="titulo">EXPORTADORES</td>
      </tr>
      <tr>
        <td height="27" colspan="5"></td>
      </tr>
      <tr>
        <td height="54" valign="top"><p class="subtitulo">Dirección URL:&nbsp;</p></td>
        <td width="272" valign="top"><input name="btn_empresa1" type="text" id="btn_empresa1" value="<?php echo $btn_empresa1; ?> " size="35"></td>
        <td width="191" height="94" align="right" valign="top" class="texto"><a href="../imagenes/logoos/Upload_foto.php?id=1" class="boton-cambiar"><img src="../admin/foto.png"> cambiar logo</a>
          <p class="texto-info">( imagen de 130px x 75px )</p></td>
        <td width="214" colspan="3" valign="top"><img src="../imagenes/logos/1.jpg" alt="" width="130" height="75"></td>
      </tr>
      <tr>
        <td height="54" valign="top"><p class="subtitulo">Dirección URL:&nbsp;</p></td>
        <td width="272" valign="top"><input name="btn_empresa2" type="text" id="btn_empresa2" value="<?php echo $btn_empresa2; ?> " size="35"></td>
        <td width="191" height="94" align="right" valign="top" class="texto"><a href="../imagenes/logos/Upload_foto.php?id=2" class="boton-cambiar"><img src="../admin/foto.png"> cambiar logo</a>
          <p class="texto-info">( imagen de 130px x 75px )</p></td>
        <td width="214" colspan="3" valign="top"><img src="../imagenes/logos/2.jpg" alt="" width="130" height="75"></td>
      </tr>
      <tr>
        <td height="54" valign="top"><p class="subtitulo">Dirección URL:&nbsp;</p></td>
        <td width="272" valign="top"><input name="btn_empresa3" type="text" id="btn_empresa3" value="<?php echo $btn_empresa3; ?> " size="35"></td>
        <td width="191" height="94" align="right" valign="top" class="texto"><a href="../imagenes/logos/Upload_foto.php?id=3" class="boton-cambiar"><img src="../admin/foto.png"> cambiar logo</a>
          <p class="texto-info">( imagen de 130px x 75px )</p></td>
        <td width="214" colspan="3" valign="top"><img src="../imagenes/logos/3.jpg" alt="" width="130" height="75"></td>
      </tr>
      <tr>
        <td height="54" valign="top"><p class="subtitulo">Dirección URL:&nbsp;</p></td>
        <td width="272" valign="top"><input name="btn_empresa4" type="text" id="btn_empresa4" value="<?php echo $btn_empresa4; ?> " size="35"></td>
        <td width="191" height="94" align="right" valign="top" class="texto"><a href="../imagenes/logos/Upload_foto.php?id=4" class="boton-cambiar"><img src="../admin/foto.png"> cambiar logo</a>
          <p class="texto-info">( imagen de 130px x 75px )</p></td>
        <td width="214" colspan="3" valign="top"><img src="../imagenes/logos/4.jpg" alt="" width="130" height="75"></td>
      </tr>
      <tr>
        <td height="54" valign="top"><p class="subtitulo">Dirección URL:&nbsp;</p></td>
        <td width="272" valign="top"><input name="btn_empresa5" type="text" id="btn_empresa5" value="<?php echo $btn_empresa5; ?> " size="35"></td>
        <td width="191" height="94" align="right" valign="top" class="texto"><a href="../imagenes/logos/Upload_foto.php?id=5" class="boton-cambiar"><img src="../admin/foto.png"> cambiar logo</a>
          <p class="texto-info">( imagen de 130px x 75px )</p></td>
        <td width="214" colspan="3" valign="top"><img src="../imagenes/logos/5.jpg" alt="" width="130" height="75"></td>
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