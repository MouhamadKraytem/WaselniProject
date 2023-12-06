<?php
require('../connection.php');
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
    t.availableNB > 0";

// $getAlltrips = "SELECT
//     rt.reservationID,
//     u.username AS driverUsername,
//     locFrom.locationName AS fromLocationName,
//     locTo.locationName AS toLocationName,
//     ti.time AS tripTime,
//     d.day AS tripDay,
//     t.availableNB
// FROM
//     reservetrip rt
// JOIN
//     trip t ON rt.tripID = t.tripId
// JOIN
//     user u ON t.DriverID = u.id
// JOIN
//     location locFrom ON t.fromLocationID = locFrom.locationID
// JOIN
//     location locTo ON t.toLocationID = locTo.locationID
// JOIN
//     time ti ON t.time = ti.timeId  
// JOIN
//     days d ON t.dayID = d.dayID";

$getTripResult = mysqli_query($conn , $getAlltrips);
?>