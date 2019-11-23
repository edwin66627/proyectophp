<?php

if(!empty($_POST)){
	if(isset($_POST["username"]) &&isset($_POST["password"])){
		if($_POST["username"]!=""&&$_POST["password"]!=""){
			include "conexion.php";
			
			$user_id=null;
			$sql1= "select * from users where (username=\"$_POST[username]\" or email=\"$_POST[username]\") and contrasena=\"$_POST[password]\" ";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$user_id=$r["fullname"];
				break;
			}
			
		}
	}
}



?>