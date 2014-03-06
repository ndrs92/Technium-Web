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
			$result = mysql_query("SELECT * FROM registros WHERE (CURRENT_DATE()-fecadmision < 10 and pagado = 0 and admitido=1 and espera = 0) or (admitido=0 and pagado= 0 and espera = 0) or (admitido=1 and pagado=1 and espera = 0)");
			$num = mysql_num_rows($result);
			if($num>=250){
				$result = mysql_query("INSERT INTO registros(nombre, nick, correo, equipo, telefono, fecha, dni , espera) VALUES('$nombre', '$nick', '$correo', '$equipo', '$telefono',CURRENT_DATE() , '$dni' , 1)");
				if ($result) {
					echo "guarda correcta";
			        //PAGINA INDICANDO Q ESTAS EN ESPERAAA!!!!

					header("location:../check.php?checkdni=".$dni);
				} else {
					header("location:../error_inscripcion.php?err=liada");
				}
			}else{

				$result = mysql_query("INSERT INTO registros(nombre, nick, correo, equipo, telefono, fecha, dni) VALUES('$nombre', '$nick', '$correo', '$equipo', '$telefono',CURRENT_DATE() , '$dni')");

			    // check if row inserted or not
				if ($result) {
					echo "guarda correcta";
					header("location:../inscrito.html");
				} else {
					header("location:../error_inscripcion.php?err=liada");
				}
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
	$result = mysql_query("SELECT * FROM registros WHERE CURRENT_DATE()-fecadmision>10 and espera = 0");
	if(!$result){
		echo "Liada al actualizar listas";
	}
	echo '<head><meta charset="utf-8" /></head>';

	$result3= mysql_query("SELECT * FROM registros WHERE borrado=0");
	$num = mysql_num_rows($result3);
	while ($row = mysql_fetch_array($result)) {

		$nombre = $row["nombre"];
		$nick = $row["nick"];
		$equipo = $row["equipo"];
		$telefono = $row["telefono"];
		$correo = $row["correo"];
		$dni = $row["dni"];
		$fecha = $row["fecha"];
		mysql_query("DELETE FROM registros WHERE id=".$row["id"]);
		if($num>=250){
			mysql_query("INSERT INTO registros(nombre, nick, correo, equipo, telefono, fecha, dni,espera) VALUES('$nombre', '$nick', '$correo', '$equipo', '$telefono','$fecha' , '$dni',1)");
		}else{
			mysql_query("INSERT INTO registros(nombre, nick, correo, equipo, telefono, fecha, dni,espera,admitido) VALUES('$nombre', '$nick', '$correo', '$equipo', '$telefono','$fecha' , '$dni',0,1)");
		}
		$result2 =mysql_query("SELECT * FROM registros WHERE espera = 1");
		$row2 = mysql_fetch_array($result2);
		mysql_query("UPDATE registros SET espera = 0 WHERE id=".$row2["id"]);
	}
	echo 'Registrados '.$num.' participantes en total.<br/><br/>';
	$i = 0;
	if($result3){
		echo '<form method="post" action="login_success.php">';
		echo '<table style="width:1500px;" border="1">';
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
		while ($row = mysql_fetch_array($result3)) {
			if($row["espera"]==1){
				echo"<tr style='background-color:grey;'>";
			}else{
				echo"<tr>";
			}
			echo "<td>".$row["id"]."</td>";
			echo "<td>".$row["nombre"]."</td>";
			echo "<td>".$row["nick"]."</td>";
			echo "<td>".$row["dni"]."</td>";
			echo "<td>".$row["correo"]."</td>";
			echo "<td style='width:600px;'' >".$row["equipo"]."</td>";
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
				$result = mysql_query("UPDATE registros SET admitido = 1 , fecadmision = CURRENT_DATE() WHERE id=".$_POST['admitido'.$a]);
			}
		}else{
			if(isset($_POST['desadmitido'.$a])){
				$result = mysql_query("UPDATE registros SET admitido = 0 , fecadmision= null WHERE id=".$_POST['desadmitido'.$a]);
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
	$result3= mysql_query("SELECT * FROM registros WHERE borrado=0");
	$num = mysql_num_rows($result3);
	if($num<=250){
		$result4 =mysql_query("SELECT * FROM registros WHERE espera = 1");
		$row4 = mysql_fetch_array($result4);
		mysql_query("UPDATE registros SET espera = 0 WHERE id=".$row4["id"]);
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