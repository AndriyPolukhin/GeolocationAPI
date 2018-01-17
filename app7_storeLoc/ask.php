<?php
	$conn = mysqli_connect("localhost", "practice", "1234", "practice_1");
    $query = mysqli_query("SELECT DISTINCT county FROM location");
    $result = mysqli_query($conn, $query);

    $county = mysqli_fetch_all($result,  MYSQLI_ASSOC);

    echo json_encode($county);
	 
 