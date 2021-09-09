<?php
$conetcta = mysqli_connect('192.168.25.30', 'root', '123456') or die(mysql_error());
mysqli_select_db($conetcta,'dbaccess') or die('Não foi possível conectar: '.mysql_error());
?>