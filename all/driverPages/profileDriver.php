<?php 
include('../connection.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Table</title>
    <link rel="stylesheet" href="./profile.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel= " stylesheet "href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
</head>

<body>
        <nav class="navbar">
            <h1 class="logo"> W'aselni</h1>
            <ul class="nav-links">
                <li class="active"><i href ="#" class ="fa fa-home"></i><a href="#"></a></i>Home</li>
                <li class="active"><i class="fa-solid fa-taxi"></i><a href="#"></a>Services</li>
                <li class="active"><i href ="#" class ="fa fa-times-circle"></i><a href="#"></a></i>ABOUT</li>
                <li class="active"><i href ="#" class ="fa fa-id-card"><a href="#"></a></i>Contact-US</li>
            </ul>
        </nav>
        <!-- <P class="img"><img src="dada.jpg"></p> -->
        <div class="container">
              <?php
                include("./home.php");
            ?>
            <div class="table">
    <main class="table">
        <section class="table__header">
            <!-- <h1>Your Trips</h1> -->
            <a href="./createtrip/formtrip.php" class='newtrip'>create a trip</a>
            <a href="#"  class="trip">Your Trips</a>
            <!-- <div class="input-group">
                <input type="search" placeholder="Search Data...">
            </div> -->
        </section>

        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> From </th>
                        <th> To </th>
                        <th> Schedule </th>
                        <th> available space </th>
                        <th> Show Students</th>
                        <th> Edit</th>
                        <th> Delete</th>
                        <!-- <th> Amount <span class="icon-arrow">&UpArrow;</span></th> -->
                    </tr>
                </thead>
                <tbody>
                    <!-- Available // Full -->
                    <tr>
                        <?php
                        include('../connection.php');
                        $query = "SELECT 
                                user.id AS userID,
                                user.username,
                                trip.tripID,
                                trip.fromlocationID,
                                from_location.locationName AS fromLocationName,
                                trip.toLocationID,
                                to_location.locationName AS toLocationName,
                                time.time As time,  
                                trip.availableNB
                                FROM trip
                                INNER JOIN user ON user.id = trip.DriverID
                                INNER JOIN location AS from_location ON from_location.locationID = trip.fromlocationID
                                INNER JOIN location AS to_location ON to_location.locationID = trip.toLocationID
                                INNER JOIN time ON time.timeID = trip.time";
                        
                        $res = mysqli_query($conn , $query);

                        while ($row = mysqli_fetch_array($res)) {
                            echo "<tr>";
                            echo "<td>".$row['fromLocationName']."</td>";
                            echo "<td>".$row['toLocationName']."</td>";  
                            echo "<td>".$row['time']."</td>";  
                            echo "<td>".$row['availableNB'] ."</td>";
                            echo "<td><a href='#'><i class='fa fa-users' aria-hidden='true'></a></td>";
                            echo "<td><a href='#'><i class='fa fa-pencil-square-o' aria-hidden='true'></a></td>";
                            echo "<td><a href='deleteTrip.php?tripID=".$row['tripID']."'><i class='fa fa-trash-o' aria-hidden='true'></i></a></td>";
                            echo "</tr>";
                        }
                        ?>
                        
                        
                </tbody>
        </table>
    </section>
   
</main>
 
<!-- <h3>trip request</h3> -->
<section class="table__body">
 
            <!-- <table>
            <h3>trip request</h3> -->
<thead> 
<a href="./triprequest/triprequest.php "  >Trip Request</a>
                    <!-- <tr>
                    
                        <th> From </th>
                        <th> To </th>
                        <th> Schedule </th>
                        <th> available space </th>
                        <th> Show Students</th>
                        <th> Edit</th>
                        <th> Delete</th>
                        <th> Amount <span class="icon-arrow">&UpArrow;</span></th> -->
                    <!-- </tr>
                </thead>
                    </table> --> 
    </div>  


</div>
    </body>
    

</html>


