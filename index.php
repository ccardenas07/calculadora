<?php //require_once('Connections/ConnBD.php'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MYBIKE</title>

<style type="text/css">
body{
	background-image:url(bono50.jpg);
	background-position: top left;
	background-repeat:no-repeat;
	color:#ffffff;}
.contenedor{
	width:530px;
	height:380px;
	position:absolute;
	margin-top:560px;
	margin-left:135px;
	background-color:;
	z-index:999;
		font-family:"Century Gothic";

	
	}

.formulario{
	width:390px;
	height:280px;
	margin-right:5px;
	margin-left:90px;
	font-family:"Century Gothic";
	/*-webkit-transform: rotate(2deg);
-moz-transform: rotate(2deg);
-o-transform: rotate(2deg);
-ms-transform: rotate(2deg);*/
	}

.txtNormal {
	font-family:"Century Gothic";
	font-size: 12px;
	color: #555555;
	text-align: justify;
}

#enviar{
	background:#df040a;
display: inline;
list-style: none;
margin-right: 4px;
color: white;
border: none;
padding: 3px 10px;
cursor: pointer;
border-radius: 3px;
-webkit-border-radius: 3px;
-moz-border-radius: 3px;
font-weight: normal;
font-size:12px;}
#registro{
	
margin-right: 15px;
color: white;
	font-family:"Century Gothic";
font-weight: normal;}
#numerito{
	margin-right:20px;
	color:#FFF;
	font-family:"Century Gothic";
	font-weight:normal;
	font-size:12px;}
	.num{
		
margin-right: 60px;
color: white;
font-family: helvetica neue;
font-size: 18px;}
.aplica{
	font-family:"Century Gothic";
	font-size:9px;
	color:#CCC;
	margin-left:-50px;}
</style>

<script type="text/javascript" src="js/script.js"></script>
 
</head>

<body>
<div class="contenedor">
<p><br/><br/><br/></p>
<div class="formulario">

<div style="text-align:right; font-family:'Century Gothic'; margin-top:75px; margin-right:70px;">

<form id="form1" name="form1" method="post" action="enviar.php" onsubmit="return validateForm()">
<input type="hidden" name="fecha" id="fecha" value="<?php echo date("Y-m-d")?>"/>
<label title="Nombre">Nombre: </label> <input type="text" name="nombre" id="nombre" /><br/><br/>
<label title="Nombre">Apellido: </label> <input type="text" name="apellido" id="apellido" /><br/><br/>
<label title="Nombre"># Cédula: </label><input id="ci" name="ci" type="text" /><br/><br/>
<label title="Nombre">Teléfono: </label><input id="telefono" name="telefono" type="text" /><br/><br/>
<label title="Nombre">E-mail: </label><input id="mail" name="mail" type="text" /><br/>
<p class="aplica">*Aplica en todas las bicicletas de adultos, marcas y formas de pago</p>
<center><input id="enviar" name="enviar" type="submit" value="Enviar"/></center>

</form>
</div>

</div>
</div>

</body>
</html>