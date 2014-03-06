<?php

function connect(){
	$enlace =  mysql_connect('localhost', 'techniumUser', 'infratechnium');
	if (!$enlace) {
		die('No pudo conectarse: ' . mysql_error());

	}
	$db = mysql_select_db("technium") or die(mysql_error());
}

?>






<html>
<head>
	<meta charset="utf-8" />
	<!-- Cambia el viewport dependiendo del dispositivo que se esté usando -->
	<meta name="viewport" content="width=device-width" />

	<title>10 a 13 de Abril - Technium 2014</title>

	<!-- CSS incluídos (Comprimido) -->
	<link rel="stylesheet" href="stylesheets/foundation.css">
	<link rel="stylesheet" href="stylesheets/design.css">
	<link rel="icon" type="image/png" href="/favico.ico">

</head>

<body style="background: #474441; width:60%; text-align:center; margin:auto auto auto auto;">
	<img src="images/logotech1.png"  alt="Technium" />
	<h3>
		<?php
		if(isset($_POST['checkdni']) && strlen($_POST['checkdni']) == 9){
			$dni = $_POST['checkdni'];
			connect();
			mysql_select_db(technium);
			$resultado = mysql_query("SELECT * FROM registros WHERE dni='$dni'");
			$mostrar = mysql_fetch_array($resultado);
			if($mostrar["nombre"] != ""){
				echo "Hola, ".$mostrar["nombre"].", ";
				if($mostrar["admitido"] == 0){
					echo "estás pendiente de revisión. En breve te enviaremos un correo. Disculpa las molestias.";
				}else{
					if($mostrar["admitido"] == 1 && $mostrar["pagado"] == 0) echo "estás admitido!. Aún no hemos procesado tu pago. Si no lo has hecho, ¡hazlo cuanto antes!";
					if($mostrar["admitido"] == 1 && $mostrar["pagado"] == 1) echo "todo está correcto, estás admitido y pagado. Nos vemos en la Party!";
				}
			}else{
				echo "No estás registrado en la party (Si estás seguro de que te habías registrado, por favor envíanos un correo).";
			}
		}else{
			echo "Por favor, introduce un DNI correcto";
		}

		?>


	</h3>
</body>


</html>
