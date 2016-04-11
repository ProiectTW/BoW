<?php

	header('Content-type: text/xml');

	require('../database/db.php');
	$bd = new DataBase_MySQL ('localhost', 'gus', 'root', 'radiohead');
	$bd->connect();
	$table = $bd->getRanking();

	$feed = '<?xml version="1.0" encoding = "utf-8"?>';
	$feed .= '<feed xmlns="http://www.w3.org/2005/Atom">';
	$feed .= '<title> Top 10 Ranking </title>';
	$feed .= '<link href="http://localhost/php/gus/account.php" />';
	$feed .= '<author><name>Anghelache Oana</name></author>';
	
	//$table is the top 10 ranking infos
	$iterator = 0;
	while($iterator<10){
		$rowData = $table[$iterator];
		$feed .= '<entry>';
		$feed .= '<username>'.$rowData['username'].'</username>';
		$feed .= '<category>'.ucfirst($rowData['category']).'</category>';
		$feed .= '<points>'.$rowData['points'].'</points>';
		$feed .= '<datetime>'.$rowData['date'].'</datetime>';
		$feed .= '</entry>';
		
		$iterator++;
	}
	$feed .= '</feed>';

	echo $feed;

?>