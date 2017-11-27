
<html>
<head>
  <title>ASIR</title>
  <meta charset="UTF-8">
  <meta name="description" content="Probando bordes">
  <meta name="keywords" content="HTML, CSS, bordes">
  <meta name="author" content="root" >
   <link rel="stylesheet" href="barra.css">

<body>
<div class="container">
  <a href="index.htm">Introducción</a>
	<a href="Contacto.htm">Contacto</a>
	<a href="selectXD.php">Tabla de armas</a>
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
	<h3>Nueva Arma</h3>


<?php
if ( !isset($_POST['Nombre']) ) {
?>
        
    <form action="<?php $_SERVER['PHP_SELF'] ?>"  method="post">
        Nombre: <input type="text" name="Nombre" size="8" /><br/>
        Tipo: <input type="text" name="Tipo" size="10" /><br/>
        Precio: <input type="text" name="Precio" size="10" /><br/>
        Disponible: <input type="text" name="Disponible" size="10" /><br/>
        Arma_ID: <input type="text" name="Arma_ID" size="10" /><br/>
        <input type="submit" name="env" value="ENVIAR"/>
    </form>	  
    
<?php    
}
else {
    $username = root;
    $password = root;
    $servername = localhost;
    $database = Airsoft;
    $table = Armas; 
try {
    //Conexión con una base de datos del servidor
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Conexión con la base de datos '".$database."' del servidor '".$servername."' realizada.<br/>";
    
    echo "Nombre: ".$_POST['Nombre']."<br/>";
    echo "Tipo: ".$_POST['Tipo']."<br/>";
    echo "Precio: ".$_POST['Precio']."<br/>"; 
    echo "Disponible: ".$_POST['Disponible']."<br/>";   
    echo "Arma_ID: ".$_POST['Arma_ID']."<br/>";  
    
    $sql = "INSERT INTO ".$table." (Nombre, Tipo, Precio, Disponible, Arma_ID) VALUES ('".$_POST['Nombre']."','".$_POST['Tipo']."','".$_POST['Precio']."','".$_POST['Disponible']."','".$_POST['Arma_ID']."')";
    $stmt = $conn->prepare($sql);
    // echo $sql;
    $stmt->execute();
    echo " Arma añadida correctamente.<br/>";
    }
catch(PDOException $e) {
    if ($e->getCode() == "23000")
        echo "No ha sido posible insertar el registro."."<br/>";
    else
        echo $e->getMessage();
}
}    
 //print "<br/><br/><br/>sql: ".$sql;
?>



</body>
</html>
