<?php 

	// output headers so that the file is downloaded rather than displayed
	header('Content-Type: text/csv; charset=utf-8');
	header('Content-Disposition: attachment; filename=data.csv');

	// create a file pointer connected to the output stream
	$output = fopen('php://output', 'w');

	// output the column headings
	fputcsv($output, array('Username', 'Points', 'Category', 'Datetime'));

	// fetch the data
	require('../database/db.php');
	$bd = new DataBase_MySQL ('localhost', 'gus', 'root', 'radiohead');
	$bd->connect();
	$table = $bd->getRanking();

	// loop over the rows, outputting them
	$iterator = 0;
	while($iterator<10){
		$rowData = $table[$iterator];
		fputcsv($output, $rowData);
		$iterator++;
	}

?>


