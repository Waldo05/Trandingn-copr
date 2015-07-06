<?php
		$conn=mysql_connect("mysql.simplexingenieria.cl","simplex","uu.vEVwyd.13"); // ESTABLECER CONEXION
		//$conn=mysql_connect("localhost","root","root"); // ESTABLECER CONEXION
		if(!$conn){
			die("error al conectarse al motor");
		}
		$mibase = mysql_select_db("simplexingenieriacl",$conn); //SELECCION BD
		if(!$mibase){
			die("error al selecionar la base de datos");
		}