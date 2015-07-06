<?php
session_start();
include("../Conexion.php");
if($_GET["fun"]=="cerrar"){
	unset($_SESSION["$nusuario"]);
}
if($_POST["Entrar"]){	
	$password = md5($_POST["password_txt"]);
	$listado = "select * from 	usuario where usuario = '$_POST[nusuario_txt]' and password  = '$password'  ";
	$sentencia = mysql_query($listado,$conn);
	if($rs=mysql_fetch_array($sentencia,$mibase)){
		$_SESSION["$nusuario"] = $rs["usuario"];
	} else {
		echo "Usuario o password no corresponde";
	}
} 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Administrador</title>

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="../admin/css/admin.css" >
</head>

<body>
<p align="center">&nbsp;</p>
<div align="center">
  
  <p>
    <span class="titulo">
    <?php if ($_SESSION["$nusuario"] == "") { ?>
  <strong>Inicie sesion para modificar el contenido</strong></span></p>
  <p>&nbsp;</p>
</div>
<form id="form1" name="form1" method="post" action="sesion.php">
  <div align="center">
    <table width="200" border="0" cellspacing="0" cellpadding="0">
      <tr class="subtitulo">
        <td width="80" class="texto" >Usuario </td>
        <td width="120"><label>
          <input name="nusuario_txt" type="text" class="textobox"  id="nusuario_txt" size="15" />
        </label></td>
      </tr>
      <tr>
        <td height="12" colspan="2" ></td>
      </tr>
      <tr class="subtitulo">
        <td class="texto" >Password </td>
        <td><input name="password_txt" type="password" class="textobox"  id="password_txt" size="15" /></td>
      </tr>
      <tr>
        <td height="15" colspan="2"></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <label>
            <input name="Entrar" type="submit" class="grabar" id="Entrar" value="Entrar" />
            </label>
        </div></td>
      </tr>
    </table>
  </div>
</form>
<div align="center">
  <p>
    <?php } else  { ?>
  </p>
  <p class="titulo"><strong>Usuario</strong>: <?php echo $_SESSION["$nusuario"]; ?></p><br></br>
  <table width="200" border="1" cellspacing="1" cellpadding="0">
    <tr>
      <td><table width="250" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="30"><div align="center" class="titulo"><strong>MENU PRINCIPAL</strong></div></td>
        </tr>
        
        <tr>
          <td height="5"></td>
        </tr>
        <tr>
          <td height="26" align="center" valign="middle" bgcolor="#FFFFFF"  class="admin"><span class="texto">&nbsp;<a href="inicio.php" class="titulos">Inicio</a></span></td>
        </tr>
        <tr>
          <td height="25" align="center" valign="middle" bgcolor="#FFFFFF"  class="admin"><span class="texto">&nbsp;<a href="distribuidora.php" class="titulos">Distribuidora</a></span></td>
        </tr>
        <tr>
          <td height="27" align="center" valign="middle" bgcolor="#FFFFFF"  class="post-text"><span class="texto"><span class="admin">&nbsp;<a href="noticias.php" class="titulos">Noticias</a></span></span></td>
        </tr>
        <tr>
          <td height="28" align="center" valign="middle" bgcolor="#FFFFFF"  class="post-text"><span class="texto"><span class="admin">&nbsp;<a href="contacto.php" class="titulos">Contacto</a></span></span></td>
        </tr>
        <tr>
          <td height="7" align="left" bgcolor="#FFFFFF" class="post-text">&nbsp;</td>
        </tr>
        <tr>
          <td height="44" align="center"><a href="cambiopassword.php" class="grabar" >Cambio de password</a></td>
        </tr>
        <tr>
          <td height="43" align="center" bgcolor="#FFFFFF" ><a class="volver" href="sesion.php?fun=cerrar">Cerrar sesion</span></a></td>
        </tr>
        
      </table></td>
    </tr>
  </table>
</div>
<?php } ?>
</body>
</html>
