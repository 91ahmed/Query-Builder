<?php
	
	require ('connection.php');
	require ('builder.php');

	use System\DB;

	// Get data from database
	$data = DB::query('users')
			  ->select('id, username')
			  ->get();
?>