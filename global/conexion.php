<?php
<<<<<<< HEAD

   try{

	   $pdo= new PDO('mysql:host=localhost;dbname=tienda', 'root', '',
                     array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
	    //echo "<script>alert('Conectado!')</script>";

    }catch(PDOException $e){
	//echo "<script>alert('Error...')</script>";
=======
$servidor="mysql:dbname=".BD.";host=".SERVIDOR; 

try{
    $pdo= new PDO($servidor,USUARIO,PASSWORD,
        array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
        echo "<script>alert('Conectado...')</script>";
}catch(PDOException $e){
    //echo "<script>alert('Hecho...')</script>";
>>>>>>> d5a5185029fe5ed2d1322c224bbb9e010780df86
}

?>