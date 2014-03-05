<?php

function connect(){
	$enlace =  mysql_connect('localhost', 'techniumUser', 'infratechnium');
	if (!$enlace) {
    	die('No pudo conectarse: ' . mysql_error());
    	
	}
	$db = mysql_select_db("technium") or die(mysql_error());
}

function registrar(){
 
	if (isset($_POST['dni']) && isset($_POST['nombre']) && isset($_POST['nick']) && isset($_POST['potencia'])&& isset($_POST['telefono'])&& isset($_POST['correo'])) {
	 	if (!empty($_POST['dni']) && !empty($_POST['nombre']) && !empty($_POST['nick']) && !empty($_POST['potencia'])&& !empty($_POST['telefono'])&& !empty($_POST['correo']) && is_numeric($_POST['telefono']) && strlen($_POST['telefono']) == 9 && strlen($_POST['dni']) == 9) {
		    
		    $nombre = $_POST['nombre'];
		    $nick = $_POST['nick'];
		    $equipo = $_POST['potencia'];
		 	$telefono = $_POST['telefono'];
		 	$correo = $_POST['correo'];
		    $dni = $_POST['dni'];

		    connect();

		    $fecha = time();
		    $result = mysql_query("INSERT INTO registros(nombre, nick, correo, equipo, telefono, fecha, dni) VALUES('$nombre', '$nick', '$correo', '$equipo', '$telefono',FROM_UNIXTIME($fecha) , '$dni')");
		 
		    // check if row inserted or not
		    if ($result) {
		        echo "guarda correcta";
				header("location:../inscrito.html");
		    } else {
		    	header("location:../error_inscripcion.php?err=liada");
		    }
		} else {
	    header("location:../error_inscripcion.php");
	}
	} else {
	   header("location:../error_inscripcion.php");
} 
}
function mostrar(){
	connect();
	echo '<head><meta charset="utf-8" /></head>';
	$result = mysql_query("SELECT * FROM registros WHERE borrado=0");
	$num = mysql_num_rows($result);
	$i = 0;
	if($result){
		echo '<form method="post" action="login_success.php">';

		echo '<table style="width:1000px">';
		echo '<tr>';
  		echo '<th>ID</th>';
  		echo '<th>Nombre</th>'; 
  		echo '<th>Nick</th>';
  		echo '<th>Dni</th>';
  		echo '<th>Correo</th>';
  		echo '<th>Potencia de equipo</th>';
  		echo '<th>Telefono</th>';
  		echo '<th>Fecha de inscripcion</th>';
  		echo '<th>Admitido</th>';
  		echo '<th>Pagado</th>';
  		echo '<th>Borrar</th>';
		echo '</tr>';
		while ($row = mysql_fetch_array($result)) {
			echo"<tr>";
	        echo "<td>".$row["id"]."</td>";
	        echo "<td>".$row["nombre"]."</td>";
	        echo "<td>".$row["nick"]."</td>";
	        echo "<td>".$row["dni"]."</td>";
	        echo "<td>".$row["correo"]."</td>";
	        echo "<td>".$row["equipo"]."</td>";
	        echo "<td>".$row["telefono"]."</td>";
	        echo "<td>".$row["fecha"]."</td>";
	        if($row["admitido"]){
	        	echo '<input type="hidden" name="desadmitido'.$i.'" value='.$row["id"].'>';
	        	echo "<td>".'<input type="checkbox" name="admitido'.$i.'" value='.$row["id"].' checked>';
	        }else{
	        	echo "<td>".'<input type="checkbox" name="admitido'.$i.'" value='.$row["id"].'>';
	        }
	        if($row["pagado"]){
	        	echo '<input type="hidden" name="despagado'.$i.'" value='.$row["id"].'>';
	        	echo "<td>".'<input type="checkbox" name="pagado'.$i.'" value='.$row["id"].' checked>';
	        }else{
	        	echo "<td>".'<input type="checkbox" name="pagado'.$i.'" value='.$row["id"].'>';
	        }
	        echo "<td>".'<input type="checkbox" name="borrado'.$i.'" value='.$row["id"].'>';
    		echo "</tr>";
    		$i++;
    	}
    	echo '</table>';
    	echo '<input type="hidden" name="tipo" value="accion" >';
    	echo '<input type="hidden" name="numero" value="'.$num.'" >';
 		echo '<input type="submit" value="Accion">';
    	echo '</form>';
	}else{
		echo "liada al mostrar";
	}
}

function admitir(){
	connect();
	for ($a = 0; $a < $_POST['numero']; $a++){
		if(isset($_POST['admitido'.$a])){
			if(!isset($_POST['desadmitido'.$a])){
				$result = mysql_query("UPDATE registros SET admitido = 1 WHERE id=".$_POST['admitido'.$a]);
		    }
		}else{
			if(isset($_POST['desadmitido'.$a])){
				$result = mysql_query("UPDATE registros SET admitido = 0 WHERE id=".$_POST['desadmitido'.$a]);
			}
		   
		}
	}
}
function pagar(){
	connect();
	connect();
	for ($a = 0; $a < $_POST['numero']; $a++){
		if(isset($_POST['pagado'.$a])){
			if(!isset($_POST['despagado'.$a])){
				$result = mysql_query("UPDATE registros SET pagado = 1 WHERE id=".$_POST['pagado'.$a]);
		    }
		}else{
			if(isset($_POST['despagado'.$a])){
				$result = mysql_query("UPDATE registros SET pagado = 0 WHERE id=".$_POST['despagado'.$a]);
			}
		   
		}
	}
}
function borrar(){
	connect();
	for ($a = 0; $a < $_POST['numero']; $a++){
		if(isset($_POST['borrado'.$a])){
			$result = mysql_query("DELETE FROM registros WHERE id=".$_POST['borrado'.$a]);
		}
	}
}


if( $_POST['tipo']=="registrar"){
	registrar();
}
if( $_POST['tipo']=="accion"){
	admitir();
	pagar();
	borrar();
}
?>