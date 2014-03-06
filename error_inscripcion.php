<html>
<head>
	<meta charset="utf-8" />
<title>- ooops! -</title>
<link rel="stylesheet" href="stylesheets/nodatos.css" type="text/css" media="all" />
</head>
<body >
<?php
if($_GET['err']=='liada'){
	echo '<span class="neg">DATOS REPETIDOS</span>
	<p>
	Parece que hay datos repetidos, tu nick o tu correo ya está registrado en la base de datos.<br />
	Si quieres modificar tus datos por favor envíanos un correo a aseii.contacto@gmail.com<br />
	Por favor, vuelve a la página anterior y vuelve a intentarlo.	
	</p>';
}else{
	echo '<span class="neg">FALTAN DATOS</span>
	<p>
	Parece que nos faltan datos, o puede que algunos estén mal.<br />
	Por favor, vuelve a la página anterior y vuelve a intentarlo.	
	</p>';
}?>
<p>
* Para solucionar el error vuelva a intentar el registro<br />

* Pulsa CTRL+ALT+DEL sólo si te apetece. No va a repercutir<br />
 de ningún modo al funcionamiento de la web. Pero allá tu, a ver que haces..
</p>
Presiona el link para continuar <blink>_</blink>
<div class="menu">
<a href="javascript:history.back()">índice</a> 
</div>

</body>
</html>