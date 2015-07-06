<?php
	$mysqli = new mysqli("localhost", "root", "root", "base-de-datos");
	$result = $mysqli->query("select * from noticias order by id desc");
	$row = $result->fetch_assoc();
	$urlnoticias = htmlentities($row['url']);
	
	