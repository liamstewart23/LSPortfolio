<?php
	function getAll($tbl,$id){
		require_once("config.php");
		$queryAll = "SELECT * FROM {$tbl} ORDER BY {$id} DESC";
		//echo $queryAll;
		$runAll = mysqli_query($link, $queryAll);
		if($runAll) {
			return $runAll;
		} else {
			$error = "There was an error accessing this information. Shoot me an email at me@lstew.com";
			return $error;
		}

		mysqli_close($link);
	}
	function getSingle($id,$tbl,$col) {
		require_once("config.php");
		$querySingle = "SELECT * FROM {$tbl} WHERE {$col} = {$id}";
		//echo $querySingle;
		$runSingle = mysqli_query($link, $querySingle);
			if ($runSingle) {
				return $runSingle;
			} else {
				$error = "Please pick a blog post!";
				return $error;
			}

		mysqli_close($link);
	}
?>