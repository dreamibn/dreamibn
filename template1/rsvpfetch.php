<?php

include 'dbconnection.php';

if($_POST["action"] == 'fetch')
	{
		$query = "
		SELECT Kehadiran, COUNT(Kehadiran) AS Total 
		FROM rsvp000 
		GROUP BY Kehadiran
		";

		$result = $connect->query($query);

		$data = array();

		foreach($result as $row)
		{
			$data[] = array(
				'Kehadiran'		=>	$row["Kehadiran"],
				'total'			=>	$row["Total"],
				'color'			=>	'#' . rand(100000, 999999) . ''
			);
		}

		echo json_encode($data);
	}
}


?>