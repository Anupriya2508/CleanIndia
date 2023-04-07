<?php
	// receive all input values from the form
		$latitude = mysqli_real_escape_string($db, $_POST['latitude']);
		$longitude = mysqli_real_escape_string($db, $_POST['longitude']);

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$query = "INSERT INTO location (latitude, longitude) 
					  VALUES('$latitude', '$longitude')";
			mysqli_query($db, $query);

?>