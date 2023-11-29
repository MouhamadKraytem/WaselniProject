<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Profile Page</h1>
    <p>show trip</p>
    <?php
    session_start();
    include('../connection.php');
    $id = $_SESSION['id'];
    $query = "SELECT * FROM `user` WHERE id = $id";

    $result = mysqli_query($conn, $query);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            echo $row['username']."<br>";
            echo $row['email']."<br>";
            echo $row['role']."<br>";
            echo $row['gender']."<br>"  ;
		}
    ?>
    <h1>Available trip</h1>
    <table>
        <tr>
            <th>driver name</th>
            <th>from</th>
            <th>to</th>
            <th>time</th>
            <th>available Space </th>
        </tr>
        <?php

        //  SELECT user.id, user.username, trip.tripID ,trip.fromlocationID , trip.toLocationID , trip.time ,trip.availableNB , location.locationName
        // FROM trip
        // INNER JOIN user ON user.id = trip.DriverID
		// INNER JOIN location ON location.locationID = trip.fromlocationID
        // INNER JOIN location ON location.locationID = trip.toLocationID



        $getAllTrip= " SELECT user.id, user.username, trip.tripID
        FROM trip
        INNER JOIN user ON user.id = trip.DriverID";
        $drivreName = mysqli_query($conn , $getAllTrip);

        

        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>