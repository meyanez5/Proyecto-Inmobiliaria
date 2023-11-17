<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Documento sin título</title>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      /* Reemplaza "ruta-de-la-imagen-de-fondo.jpg" por la ruta de tu imagen de fondo */
      background-size: cover;
    }

    .container {
      background-color: rgba(255, 255, 255, 0.3); /* Ajusta el color de fondo y la opacidad según tus preferencias */
      padding: 20px;
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
      top: 20px;
      right: 250px;
      width: 100px; /* Ajusta el tamaño del logo según tus necesidades */
    }

    .factura-info {
      text-align: left;
      margin-top: 15px;
    }

    .factura-info p {
      margin-bottom: 5px;
	  
    }
  </style>
</head>
<body>
  <div class="container">
    <img src="../img/logo2.png" alt="Logo" class="logo"> <br><br><br><br>
    <h1>Comprobante</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $titulo = $_POST["titulo"];
      $ubicacion = $_POST["ubicacion"];
      $tipo_propiedad = $_POST["tipo_propiedad"];
      $descripcion = $_POST["descripcion"];
      $habitaciones = $_POST["habitaciones"];
      $banos = $_POST["banos"];
      $area = $_POST["area"];
      $parqueadero = isset($_POST["parqueadero"]) ? "Sí" : "No";
      $amoblado = isset($_POST["amoblado"]) ? "Sí" : "No";
      $piscina = isset($_POST["piscina"]) ? "Sí" : "No";
      $cocina = isset($_POST["cocina"]) ? "Sí" : "No";
      $lavadora = isset($_POST["lavadora"]) ? "Sí" : "No";
      $jardin = isset($_POST["jardin"]) ? "Sí" : "No";
      $microondas = isset($_POST["microondas"]) ? "Sí" : "No";
      $tv = isset($_POST["tv"]) ? "Sí" : "No";
      $aireacondicionado = isset($_POST["aireacondicionado"]) ? "Sí" : "No";
      $calefaccion = isset($_POST["calefaccion"]) ? "Sí" : "No";
      $chimenea = isset($_POST["chimenea"]) ? "Sí" : "No";
      $nombre = $_POST["nombre"];
      $telefono = $_POST["telefono"];
      $correo = $_POST["correo"];

     
          }
        
     

      // Procesar los datos o almacenarlos en una base de datos
      // ...

      // Mostrar el mensaje de éxito y los detalles de la propiedad
      echo "<div class='factura-info'>";
      echo "<p><strong>Fecha:</strong> " . date("d/m/Y") . "</p>";
      echo "<p><strong>Número de comprobante:</strong> " . uniqid() . "</p>";
      echo "</div>";

      echo "<b><h3>Detalles de la propiedad:</h3></b>";
      echo "<strong>Título:</strong> " . $titulo . "<br>";
      echo "<strong>Ubicación:</strong> " . $ubicacion . "<br>";
      echo "<strong>Tipo de propiedad:</strong> " . $tipo_propiedad . "<br>";
      echo "<strong>Descripción:</strong> " . $descripcion . "<br>";
	  echo "<b><h3>Caracteristicas:</h3></b>";
      echo "<strong>Habitaciones:</strong> " . $habitaciones . "<br>";
      echo "<strong>Baños:</strong> " . $banos . "<br>";
      echo "<strong>Área:</strong> " . $area . " m²<br>";
      echo "<strong>Parqueadero:</strong> " . $parqueadero . "<br>";
      echo "<strong>Amoblado:</strong> " . $amoblado . "<br>";
      echo "<strong>Piscina:</strong> " . $piscina . "<br>";
      echo "<strong>Cocina Equipada:</strong> " . $cocina . "<br>";
      echo "<strong>Lavadora:</strong> " . $lavadora . "<br>";
      echo "<strong>Jardín:</strong> " . $jardin . "<br>";
      echo "<strong>Microondas:</strong> " . $microondas . "<br>";
      echo "<strong>Televisión:</strong> " . $tv . "<br>";
      echo "<strong>Aire Acondicionado:</strong> " . $aireacondicionado . "<br>";
      echo "<strong>Calefacción:</strong> " . $calefaccion . "<br>";
      echo "<strong>Chimenea:</strong> " . $chimenea ;
      echo "<br>";
      echo "<b><h3>Información de contactos:</h3></b>";
      echo "<strong>Nombre:</strong> " . $nombre . "<br>";
      echo "<strong>Teléfono:</strong> " . $telefono . "<br>";
      echo "<strong>Correo electrónico:</strong> " . $correo ;
      echo "<br>";
      
      
    
    ?>

  </div>
</body>
</html>
