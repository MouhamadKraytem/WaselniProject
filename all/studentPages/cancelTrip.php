
<?php
require('../connection.php');


if (isset($_GET['tripid'])) {
    $tripID = $_GET['tripid'];
    $number = intval($_GET['tripid']);



    $updateAvailableNB = "UPDATE `trip` 
    SET`availableNB`=`availableNB` + 1 WHERE `tripID`= $number";
    $updateAvailableNBRes = mysqli_query($conn , $updateAvailableNB);
    
    $deleteTrip = "DELETE FROM `reservetrip`WHERE `tripID`= '$tripID'";

    $result = mysqli_query($conn, $deleteTrip);

    header('location:./profileStudent.php');
    exit();

} else {
    // Handle missing tripID
    header('location:./profileStudent.php');
}
?>