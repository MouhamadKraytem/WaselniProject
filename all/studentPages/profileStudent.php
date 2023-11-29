<?php 
?>


<!DOCTYPE html>
<html lang="en" title="Coding design">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Table</title>
    <link rel="stylesheet" href="./profilee.css">
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
            <div class="prof">
                <!-- <h2>Hello Student</h2> -->
                <!-- <a href="./withprofile/home.php">update</a> -->
                
            </div>
            <div class="table">
    <main class="table">
        <section class="table__header">
            <h1>Customer's - W'aselni</h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
            </div>
            
        </section>

        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Driver <span class="icon-arrow">&UpArrow;</span></th>
                        <th> From <span class="icon-arrow">&UpArrow;</span></th>
                        <th> To <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Schedule <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Status <span class="icon-arrow">&UpArrow;</span></th>
                        <th> .. <span class="icon-arrow">&UpArrow;</span></th>
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
                                    time.time As time,  -- Assuming you want to select the time column from the time table
                                    trip.availableNB
                                FROM trip
                                INNER JOIN user ON user.id = trip.DriverID
                                INNER JOIN location AS from_location ON from_location.locationID = trip.fromlocationID
                                INNER JOIN location AS to_location ON to_location.locationID = trip.toLocationID
                                INNER JOIN time ON time.timeID = trip.time";
                        
                        $res = mysqli_query($conn , $query);

                        while ($row = mysqli_fetch_array($res)) {
                            echo "<tr>";
                            echo "<td>".$row['username']."</td>";
                            echo "<td>".$row['fromLocationName']."</td>";
                            echo "<td>".$row['toLocationName']."</td>";  
                            echo "<td>".$row['time']."</td>";  
                            if ($row['availableNB'] > 0) {
                                echo "<td><p class='status delivered'>Available</p></td>";
                                echo " <td><p class='status delivered'> request </p></td>" ;
                            }else{
                                echo "<td><p class='status cancelled'>Unavailable</p></td>";
                                echo " <td><p class='status cancelled'> request </p></td>" ;
                            }
                            echo "</tr>";
                        }
                        ?>
                        
                </tbody>
            </table>
            
        </section>
    </main>
    </div>
    
    </body>
    

</html>


