<?php 

	require_once 'config.php';

	$con = mysqli_connect(
		$config['db']['server'],
		$config['db']['user'],
		$config['db']['password'],
		$config['db']['name']
	);

	if ( $con == false ) 
	{
		echo 'Не удалось соединиться с базы данных';
		echo mysqli_connect_error();
		exit();
	}

?>