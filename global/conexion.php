<?php

   try{

	   $pdo= new PDO('mysql:host=localhost;dbname=tienda', 'root', '',
                     array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
	    //echo "<script>alert('Conectado!')</script>";

    }catch(PDOException $e){
	//echo "<script>alert('Error...')</script>";
}

?>