<?php
	// conectar
	$mongo= new MongoClient();
	//seleccionar base de datos
	$db= $mongo->tierra_media;
	//seleciionar una base de datos
	$coleccion=$db->hobbits;
	//añadir registros
	$hobit = array('name'=>'bilbo');
	$coleccion->insert($hobit);
	$hobit = array('name'=>'frodo');
	$coleccion->insert($hobit);
	$hobit = array('name'=>'Wendy');
	$coleccion->insert($hobit);

	$coleccion->save($hobit);
	$documentos = $coleccion->findOne(array('name' => 'Wendy'));

	echo "Datos de la Consulta: <br><br>";
	echo "<b>Llave primaria de Mongo:</b> {$documentos['_id']}<br>";
	echo "<b>Nombre del Autor:</b> {$documentos['name']}";

?>