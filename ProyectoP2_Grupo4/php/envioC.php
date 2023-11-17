<!DOCTYPE html>
<html>
<head>
  <title>Resultado del Formulario</title>
  <style>
body {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-size: cover;
}

.container {
  background-color: rgba(255, 255, 255, 0.3); /* Ajusta el color de fondo y la opacidad según tus preferencias */
  padding: 45px;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  position: relative; /* Agregar posición relativa */
}

h1 {
  text-align: center;
}

p {
  margin-bottom: 10px;
}

.logo {
  position: absolute;
  top: 50px;
  right: 320px;
  width: 100px; /* Ajusta el tamaño del logo según tus necesidades */
}

.factura-info {
  text-align: left;
  margin-top: 30px;
}

.factura-info p {
  margin-bottom: 5px;
}


  </style>
</head>
<body>
<div class="container">
  <img src="../img/logo2.png" alt="Logo" class="logo"> <br><br><br>
  <h1>Comprobante</h1>
  
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores enviados por el formulario
    $nombre = $_POST["nombre"];
    $direccion = $_POST["direccion"];
    $telefono = $_POST["telefono"];
	$cedula = $_POST["cedula"];
    $email = $_POST["email"];
    $fecha_nacimiento = $_POST["fecha_nacimiento"];
    $ciudad = $_POST["ciudad"];
    $estado_civil = $_POST["estado_civil"];
    $num_personas = $_POST["num_personas"];
    $tipo_propiedad = $_POST["tipo_propiedad"];
	$baño = isset($_POST["baño"]) ? "Sí" : "No";
    $estacionamiento = isset($_POST["estacionamiento"]) ? "Sí" : "No";
    $closets = isset($_POST["closets"]) ? "Sí" : "No";
    $guardiania = isset($_POST["guardiania"]) ? "Sí" : "No";
    $jardin = isset($_POST["jardin"]) ? "Sí" : "No";
    $tipo_habitaciones = $_POST["tipo_habitaciones"];
    
    // Mostrar los datos en la página
    echo "<div class='factura-info'>";
    echo "<p><strong>Fecha:</strong> " . date("d/m/Y") . "</p>";
    echo "<p><strong>Número de comprobante:</strong> " . uniqid() . "</p>";
    echo "</div>";

    echo "<h2>Información enviada:</h2>";
    echo "<p><strong>Nombre completo:</strong> " . $nombre . "</p>";
    echo "<p><strong>Dirección actual:</strong> " . $direccion . "</p>";
    echo "<p><strong>Número de teléfono:</strong> " . $telefono . "</p>";
	echo "<p><strong>Número de cedula:</strong> " . $cedula . "</p>";
    echo "<p><strong>Correo electrónico:</strong> " . $email . "</p>";
    echo "<p><strong>Fecha de nacimiento:</strong> " . $fecha_nacimiento . "</p>";
    echo "<p><strong>Ciudad:</strong> " . $ciudad . "</p>";
    echo "<p><strong>Estado civil:</strong> " . $estado_civil . "</p>";
    echo "<p><strong>Número de personas que ocuparán la vivienda:</strong> " . $num_personas . "</p>";
    echo "<p><strong>Tipo de propiedad:</strong> " . $tipo_propiedad . "</p>";
	echo "<strong>1 o mas baños:</strong> " . $baño . "<br>". "<br>";
	echo "<strong>1 o mas estacionamientos:</strong> " . $estacionamiento . "<br>". "<br>";
	echo "<strong>Guardiania/Seguridad privada:</strong> " . $guardiania . "<br>". "<br>";
	echo "<strong>Jardín:</strong> " . $jardin . "<br>";
    echo "<p><strong>Tipo de habitaciones:</strong> " . $tipo_habitaciones . "</p>";
  }
  ?>
</div>

</body>
</html>
