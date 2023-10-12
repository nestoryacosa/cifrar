<?php
require 'dbc.php';
//preparo una consulta SQL
$sql = "SELECT * FROM personal";
//almaceno el restulado en una variable
$resultado = $DB->query($sql);
?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>Cifrado de contraseñas</title>

<!-- Bootstrap core CSS -->
<link href="dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="dist/css//sticky-footer-navbar.css" rel="stylesheet">
</head>

<body>
<header> 
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark"> <a class="navbar-brand" href="#">Login PHP PDO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active"> <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a> </li>
        <li class="nav-item active"> <a class="nav-link" href="registro.php">Registro </a> </li>
        <li class="nav-item active"> <a class="nav-link" href="login.php">Acceso </a> </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Busqueda</button>
      </form>
    </div>
  </nav>
</header>

<!-- Begin page content -->

<div class="container">
 
  <div class="row">
    <div class="col-12 col-md-12"> 
      <!-- Contenido -->

  <h2>Lista de Empleados</h2>
  <p>Area administrativa</p>            
  <table class="table table-striped">
<thead>
 <tr>
  <th>Id</th>
  <th>Nombre</th>
  <th>Apellidos</th>
  <th>Cargo</th>
  <th>Password</th>
  <th>Genero</th>
 </tr>
</thead>
<tbody>
<?php
//recorro toda la consulta
foreach($resultado as $fila) {
 echo "<tr>";
 echo "<td>".$fila['idp']."</td>";
 echo "<td>".$fila['nombre']."</td>";
 echo "<td>".$fila['apellidos']."</td>";
 echo "<td>".$fila['cargo']."</td>";
 echo "<td>******</td>";
 echo "<td>".$fila['genero']."</td>";
 echo "</tr>";
}
?>
</tbody>
</table>
      <!-- Fin Contenido --> 
    </div>
  </div>
  <!-- Fin row --> 
  
</div>
<!-- Fin container -->
<footer class="footer">
  <div class="container"> <span class="text-muted">
    
    </span> </div>
</footer>

<!-- Bootstrap core JavaScript
    ================================================== --> 
<script src="dist/js/jquery-1.12.4-jquery.min.js"></script> 
<script src="dist/js/bootstrap.min.js"></script> 
<!-- Placed at the end of the document so the pages load faster -->

</body>
</html>