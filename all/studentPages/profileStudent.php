<?php 
?>


<!DOCTYPE html>
<html lang="en" title="Coding design">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Table</title>
    <link rel="stylesheet" href="./profile.css">
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
                <?php
                
                ?>
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
                        <th> Id <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Driver <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Location <span class="icon-arrow">&UpArrow;</span></th>
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
                        // $query = "SELECT user.id, user.username, trip.tripID ,trip.fromlocationID , trip.toLocationID , trip.time ,trip.availableNB , location.locationName
                        // FROM trip
                        // INNER JOIN user ON user.id = trip.DriverID
                        // INNER JOIN location ON location.locationID = trip.fromlocationID
                        // INNER JOIN location ON location.locationID = trip.toLocationID";
                        $query = "SELECT * FROM trip";
                        $res = mysqli_query($conn , $query);

                        while ($row = mysqli_fetch_array($res)) {
                            echo "<tr>";
                            echo "<td>".$row['tripID']."</td>";
                            echo "<td>".$row['DriverID']."</td>";
                            echo "<td>".$row['fromlocationID']."</td>";
                            echo "<td>".$row['toLocationID']."</td>";  
                            if ($row['availableNB'] > 0) {
                                echo "<td><p class='status delivered'>Available</p></td>";
                            }else{
                                echo "<td><p class='status cancelled'>Available</p></td>";
                            }
                            echo " <td><p class='status delivered'> request </p></td>" ;
                            echo "</tr>";
                        }
                        ?>
                        <td> 52231326 </td>
                        <td> Doummar alzahabi</td>
                        <td> Sehet Lnour</td>
                        <td> MW 8:00 9:30 </td>
                        <td>
                            <p class="status delivered">Available</p>
                        </td>
                        <td><p class="status delivered"> request </p></td>
                        <!-- <td> <strong> $128.90 </strong></td> -->
                    </tr>
                    <tr>
                        <td> 52231327 </td>
                        <td>MD Kraytem </td>
                        <td> Baddawi </td>
                        <td> TTh 11:00 2:30 </td>
                        <td>
                            <p class="status cancelled">Cancelled</p>
                        </td>
                        <td><p class="status cancelled"> request </p></td>
                        <!-- <td> <strong>$5350.50</strong> </td> -->
                    </tr>
                    <tr>
                        <td> 52231328</td>
                        <td>  Walid kammoun</td>
                        <td> Sehet lnour </td>
                        <td> MW 9:30 10:30 </td>
                        <td>
                            <p class="status shipped">Bussy</p>
                        </td>
                        <td><p class="status shipped"> request </p></td>
                        
                        <!-- <td> <strong>$210.40</strong> </td> -->
                    </tr>
                    <tr>
                        <td> 52231329</td>
                        <td> Rachid othman </td>
                        <td> Ebbe </td>
                        <td> TT 11:00 12:15</td>
                        
                        <td>
                            <p class="status delivered">Available</p>
                        </td>
                        <td><p class="status delivered">request</p></td>
                        
                        <!-- <td> <strong>$149.70</strong> </td> -->
                    </tr>
                    <tr>
                        <td> 52231330</td>
                        <td>  Abdullah Karhani</td>
                        <td> Azmi </td>
                        <td> MW 9:30 11:00 </td>
                        <td>
                            <p class="status pending">Pending</p>
                        </td>
                        <td><p class="status pending">request</p></td>
                        <!-- <td> <strong>$399.99</strong> </td> -->
                    </tr>
                     
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
    </div>
    </div>
</body>

</html>


