<?php
	function getAll($tbl){
		require_once("config.php");
		$queryAll = "SELECT * FROM {$tbl}";
		//echo $queryAll;
		$runAll = mysqli_query($link, $queryAll);
		if($runAll) {
			return $runAll;
		} else {
			$error = "There was an error accessing this information. Shoot me an email at me@lstew.com";
			return $error;
		}

		mysqli_close($link); //want to make sure that it is terminated, do not want anything accessible
} 
	// function filterType($tbl,$tbl1,$tbl2,$col,$col1,$col2,$filter) {
	// 	require_once("config.php");
	// 	$queryFilter =	"SELECT * FROM {$tbl}, {$tbl1}, {$tbl2} WHERE {$tbl}.{$col}=
	// 	{$tbl2}.{$col} AND {$tbl1}.{$col1} = {$tbl2}.{$col1} AND {$tbl1}.{$col2}= '{$filter}'";
	// 	$runFilter = mysqli_query($link, $queryFilter);
	// 	if($runFilter){
	// 		return $runFilter;
	// 	} else {
	// 		$error = "error";
	// 		return $error; 
	// 	}
	// 	mysqli_close($link);
	// }

	function getPost($id, $tbl, $col) {
		require_once("config.php");
		$querySingle = "SELECT * FROM {$tbl} WHERE {$col}={$id}";
		//echo $querySingle;
		$runSingle = mysqli_query($link, $querySingle);
		if($runSingle) {
			return $runSingle;
		}
		else {
			$error = "This is not the movie you are looking for...";
			return $error;
		}
		mysqli_close($link);
	}
?>