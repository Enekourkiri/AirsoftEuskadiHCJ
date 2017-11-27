<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="barra.css">
<title>Tabla de Armas</title>
<meta charset="UTF-8">
  <meta name="description" content="Probando bordes">
  <meta name="keywords" content="HTML, CSS, bordes">
  <meta name="author" content="Eneko" >
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
  <html>
<body>
<div class="container">
  <a href="index.htm">Introducción</a>
	<a href="Contacto.htm">Contacto</a>
	<a href="selectXD.php">Tabla De Armas</a>
	<a href="Insertar Arma.php">Insertar Arma</a>
    <div class="dropdown">
    <button class="dropbtn">Tipos de armas</button> &nbsp
		<script>        
var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
var f=new Date();
document.write(diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
</script>
    <div class="dropdown-content">
      <a href="Pistolas.htm">Pistolas</a>
      <a href="Subfusiles.htm">Subfusiles</a>
      <a href="Fusiles de asalto.htm">Fusiles de asalto</a>
			<a href="Escopetas.htm">Escopetas</a>
			<a href="Francotiradores.htm">Francotiradores</a>
    </div>
  </div>
</div>
</head>
<?php
$username = root;
$password = root;
$servername = localhost;
$database = Airsoft;
try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password,
array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"));
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Conexión con la base de datos $database del servidor $servername reali.<br/>";
    $sql = "SELECT * FROM Armas";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result_array = $stmt->fetchAll();
    print "<table border='1px solid grey'>";
    print "<tr>";
    print "<th>";print "Nombre";print "</th>";
    print "<th>";print "Tipo";print "</th>";
    print "<th>";print "Precio";print "</th>";
    print "<th>";print "Disponible";print "</th>";
    print "<th>";print "Arma_ID";print "</th>";
    print "</tr>";
    foreach ( $result_array as $linea ) {
        print "<tr>";
        print "<td>";print $linea['Nombre'];print "</td>";
        print "<td>";print $linea['Tipo'];print "</td>";
        print "<td>";print $linea['Precio'];print "</td>";
        print "<td>";print $linea['Disponible'];print "</td>";
        print "<td>";print $linea['Arma_ID'];print "</td>";
        print "</tr>";
    }
    print "</table>";
}
catch(PDOException $e){
    echo $e->getMessage();
}
?>
</div>
</body>
</html>
