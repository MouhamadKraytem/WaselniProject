<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel= " stylesheet "href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="./profilee.css">
    <title>triprequest</title>
</head>
<body>
<nav class="navbar">
            <h1 class="logo"> W'aselni</h1>
            <ul class="nav-links">
                <li class="active"></i><a href="#"></a></i>Home</li>
                <li class="active"></i><a href="#"></a>Services</li>
                <li class="active"></i><a href="#"></a></i>ABOUT</li>
                <li class="active"><a href="#"></a></i>Contact-US</li>
            </ul>
        </nav>

 <h3>Trip Request </h3>
 <div class="batikh">
<div class="table">
    <main class="table">
        <!-- <section class="table__header"> -->
<section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Student Name</th>
                        <th> From </th>
                        <th> To </th>
                        <th> Schedule </th>
                        <th> available space </th>
                        <th></th>
                        <th></th>
                        <!-- <th> Amount <span class="icon-arrow">&UpArrow;</span></th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    include('../../connection.php');
                    session_start();
                   $id = $_SESSION['id'];


$query = "SELECT
            r.requestID,
            r.tripID,
            t.fromlocationID,
            l1.locationName AS fromLocation,
            t.toLocationID,
            l2.locationName AS toLocation,
            t.time,
            d.day,
            t.availableNB,
            u.username AS driverName,
            r.studentID,
            u2.username AS studentName,
            r.answer
          FROM
            request r
          JOIN trip t ON r.tripID = t.tripID
          JOIN location l1 ON t.fromlocationID = l1.locationID
          JOIN location l2 ON t.toLocationID = l2.locationID
          JOIN days d ON t.dayID = d.dayID
          JOIN user u ON t.DriverID = u.id
          JOIN user u2 ON r.studentID = u2.id
          WHERE u.id = $id";

                        $res = mysqli_query($conn, $query);
                            while ($row = mysqli_fetch_array($res)) {
                                echo "<tr>";
                                echo "<td>".$row['studentName']."</td>";    
                                echo "<td>".$row['fromLocation']."</td>";    
                                echo "<td>".$row['toLocation']."</td>";    
                                echo "<td>".$row['day']." ".$row['time']."</td>";    
                                echo "<td>".$row['availableNB']."</td>";    
                                echo "<td><a href='answer.php?ans=true'><button class=acc>accept request</button></a></td>";
                                echo "<td><a href='answer.php?ans=false'><button class=dec>decline request</button></a></td>";

                                echo "</tr>";
                            }
                    
                    ?>
                </tbody>
            </table>
        </div>
        <a href="../profileDriver.php" class = return>Return</a>
    </div>
</div>
</body>
 
</html>
