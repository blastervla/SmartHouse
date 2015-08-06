<?php

	$host = "localhost";
    $user = "root";
    $pass = "root";
    $db = "dbsmarthouse";
    $port = 3306;

    $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());

    $mail = $_POST['mail'];
    $pass = $_POST['pass'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];

    $queryResult = mysqli_query($connection, "SELECT * FROM usuarios WHERE mail='".$mail."'");

    if(!$queryResult->num_rows)
   	{
		echo "NO EXISTE WASHO";
    }
    else
    {
    	mysqli_query($connection, "INSERT INTO usuarios (mail, clave, nombre, apellido) VALUES ('".$mail."','".$pass."','".$name."','".$surname."')");
    }
?>