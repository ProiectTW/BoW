<?php

	header('Content-type: text/xml');

	require('../database/db.php');
	$bd = new DataBase_MySQL ('localhost', 'gus', 'root', 'radiohead');
	$bd->connect();
	$table = $bd->getRanking();

	$feed = '<?xml version="1.0" encoding = "utf-8"?>';
	$feed .= '<table>';
	
	$feed .= '<caption>Top 10 Ranking</caption>';
	$feed .= '<thead>';
	$feed .= '<tr>';		
	$feed .= '<th>Username</th>';						
	$feed .= '<th>Category</th>';						
	$feed .= '<th>Points</th>';						
	$feed .= '<th>DateTime</th>';											
	$feed .= '</tr>';					
	$feed .= '</thead>';

	$feed .= '<tbody>';

	$iterator = 0;
	while($iterator<10){
		$rowData = $table[$iterator];
		$feed .= '<tr>';
		$feed .= '<td>'.$rowData['username'].'</td>';
		$feed .= '<td>'.ucfirst($rowData['category']).'</td>';
		$feed .= '<td>'.$rowData['points'].'</td>';
		$feed .= '<td>'.$rowData['date'].'</td>';
		$feed .= '</tr>';
		$iterator++;
	}
	$feed .= '</tbody>';
	$feed .= '</table>';

	echo $feed;

?>