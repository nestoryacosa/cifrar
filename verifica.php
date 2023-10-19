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
Se carga el arreglo $_SESSION[''] con 
los datos que almacenó $login, por ejemplo S_SESSION['nombre']
*/
session_start();
$_SESSION['nombre'] = $login['nombre'];
$_SESSION['cargo'] = $login['cargo'];
$contador++;
}
}


if ($contador>0) {
    /* aquí se redirige a la pantalla
     del tipo de  usuario con header(location:"pantalla.php")
     según $_SESSION['cargo'].
     También se deberá cambiar de lugar el cerrar conexión
    en el archivo destino.
    Se deberá crear un archivo cerrar sesión
    y agregar un botón que redirija en la pantalla del usuario.

    */
echo " Hola ".$_SESSION['cargo']."   ".$_SESSION['nombre'];
} else {
echo "Usuario o contraseña no válida";
}

//cierro la conexion
$conexion = null;
} catch(Exception $e) {
die($e->getMessage());
}
?>
