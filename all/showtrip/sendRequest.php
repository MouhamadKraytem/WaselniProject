<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Hello</h2>
    <?php 
    require('../connection.php');
    if (isset($_GET['tripID'])) {
        # code...
        session_start();
        $tripId = $_GET['tripID'];
        $userId = $_SESSION['id'];

        $getAllRequest = "SELECT * FROM `request` WHERE 1";
        $result = mysqli_query($conn , $getAllRequest);

        while ($row = mysqli_fetch_array($result)) {
            if ($row['tripID']== $tripId && $row['studentID'] == $userId) {
                header("location:./showtrip.php?err=".$tripId."");
            }
        }
        $newReq = "INSERT INTO `request`( `tripID`, `studentID`)
        VALUES ('$tripId','$userId')";
        $res = mysqli_query($conn, $newReq);
        header('location:./showtrip.php?req='.$tripId.'');
        
    }else {
        header("location:./showtrip.php");
    }


    ?>
</body>
</html>