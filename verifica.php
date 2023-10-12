<?php
require 'dbc.php';

try {
//verifico los datos del login
$nombre=htmlentities(addslashes($_POST['nombre']));
$password=htmlentities(addslashes($_POST['password']));

//variable auxiliar para comprobar que el usuario existe o no
$contador = 0;

//almaceno la consulta SQL en una variable
$sql = "SELECT * FROM personal WHERE nombre = :nombre";

//preparo la consulta SQL
$resultado=$DB->prepare($sql);

//ejecucion de la consulta
$resultado->execute(array(":nombre"=>$nombre));

//resultado en un array asociativo tipo while
while($login=$resultado->fetch(PDO::FETCH_ASSOC)) {

if(password_verify($password, $login['password'])) {
/*
aqui se podra crear sesiones
*/
$contador++;
}
}


if ($contador>0) {
echo "el usuario existe";
} else {
echo "el usuario no existe";
}

//cierro la conexion
$conexion = null;
} catch(Exception $e) {
die($e->getMessage());
}
?>