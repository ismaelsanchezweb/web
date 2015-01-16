<!DOCTYPE html>
<html  lang="es">
<head>
	<meta charset='utf-8'>
	<title>Empresa</title>
	<meta charset="utf-8" >
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/b	/ootswatch/3.3.1/journal/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">


<h2>Empresa</h2>
<?php

$spanish =<<<SPANISH
	<h3>Me llamo ismael</h3>
	
SPANISH;

$french =<<<FRENCH
	<h3>Mon nom ismael</h3>
	
FRENCH;

$english =<<<ENGLISH
	<h3>My name ismael</h3>
	
ENGLISH;

$german =<<<GERMAN
	<h3>Mein Name ismael</h3>	
	
GERMAN;




	
$id='';
if(empty($_GET['id'])){
	echo'';
}else{
	$id=$_GET['id'];		
	if($id=='es')echo $spanish;
	if($id=='fr')echo $french;
	if($id=='en')echo $english;
	if($id=='gr')echo $german;
	
}





?>
</div>
</body>
</html>
