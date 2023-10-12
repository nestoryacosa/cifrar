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
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark"> <a class="navbar-brand" href="#">PHP PDO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active"> <a class="nav-link" href="index.php">Inicio </a> </li>
        <li class="nav-item active"> <a class="nav-link" href="registro.php">Registro <span class="sr-only">(current)</span></a> </li>
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
    <div class="col-12 col-md-6"> 
      <!-- Contenido -->
<h3>Registrar personal</h3>    
<form action="guarda_registro.php" method="post">
<div class="form-group">
<label for="email">Nombre:</label>
<input name="nombre" required type="text" class="form-control" placeholder="Nombre">
</div>
<div class="form-group">
<label for="apellidos">Apellidos:</label>
<input name="apellidos" required type="text" class="form-control" placeholder="Apellidos">
</div>  
<div class="form-group">
<label for="email">Cargo:</label>
<select required name="cargo" class="form-control">
<option value=""><< Seleccioe >></option>
<option value="Administrador">Administrador</option>
<option value="Contador">Contador</option>
<option value="Secretaria">Secretaria</option>
<option value="Gerente">Gerente</option>
<option value="Sistemas">Sistemas</option>
</select>
</div>
<div class="form-group">
<label for="email">Contraseña:</label>
<input name="password" required type="password" class="form-control" placeholder="Password">
</div>
<div class="form-group">
<label for="email">Genero:</label>
<select required name="genero" class="form-control">
<option value=""><< Seleccione >></option>
<option value="M">Masculino</option>
<option value="F">Femenino</option>
</select>
</div>


<button class="btn btn-primary">Registrar personal</button>

</form>

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