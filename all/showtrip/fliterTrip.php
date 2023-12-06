<?php

$drivername=$_POST['dname'];

$getAlltrips = "SELECT
    t.tripID,
    l1.locationName AS fromLocation,
    l2.locationName AS toLocation,
    u.username AS driverName,
    d.day,
    ti.time,
    t.availableNB
FROM
    trip t
JOIN location l1 ON t.fromlocationID = l1.locationID
JOIN location l2 ON t.toLocationID = l2.locationID
JOIN user u ON t.DriverID = u.id
JOIN days d ON t.dayID = d.dayID
JOIN time ti ON t.time = ti.timeId
WHERE
    t.availableNB > 0
    AND u.username LIKE '$drivername%'
";
$getTripResult = mysqli_query($conn , $getAlltrips);
?>