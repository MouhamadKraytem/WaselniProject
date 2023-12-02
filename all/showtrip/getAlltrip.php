<?php
include('../connection.php');

$getAlltrips = "SELECT
    rt.reservationID,
    u.username AS driverUsername,
    locFrom.locationName AS fromLocationName,
    locTo.locationName AS toLocationName,
    ti.time AS tripTime,
    d.day AS tripDay,
    t.availableNB
FROM
    reservetrip rt
JOIN
    trip t ON rt.tripID = t.tripId
JOIN
    user u ON t.DriverID = u.id
JOIN
    location locFrom ON t.fromLocationID = locFrom.locationID
JOIN
    location locTo ON t.toLocationID = locTo.locationID
JOIN
    time ti ON t.time = ti.timeId  
JOIN
    days d ON t.dayID = d.dayID";

$getTripResult = mysqli_query($conn , $getAlltrips);
?>