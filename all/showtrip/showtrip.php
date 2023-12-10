
<?php
require("../connection.php");
$query = "SELECT * FROM reservetrip WHERE 1";
$res= mysqli_query($conn , $query);
while ($row = mysqli_fetch_array($res)) {
    if (isset($_POST[$row['reservationID']])) {
        unset($_POST);
        header('../index.html');

    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- small css file -->
    <link rel="stylesheet" href="./showTripStyle.css">
    <title>Show trip for students :</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4> </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="post">
                                    <div class="input-group mb-3">
                                        <input type="text" name="dname"  class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary" name=search>Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Driver Name</th>
                                    <th>From</th>
                                    <th>To</th>
                                    <th>Day</th>
                                    <th>Time</th>
                                    <th>available Place</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                
                                if(isset($_POST['search'])){
                                require("./fliterTrip.php");
                                }else{
                                    require("./getAlltrip.php");
                                }
                                    while ($row = mysqli_fetch_array($getTripResult)) {
                                        echo "<tr>";
                                        echo "<td>".$row['driverName']."</td>";
                                        echo "<td>".$row['fromLocation']."</td>";
                                        echo "<td>".$row['toLocation']."</td>";
                                        echo "<td>".$row['day']."</td>";
                                        echo "<td>".$row['time']."</td>";
                                        echo "<td>".$row['availableNB']."</td>";
                                        echo "<td class = link><a href='sendRequest.php?tripID=".$row['tripID']."'><button class=but>send request</button></a></td>";

                                        if (isset($_GET['err'])) {
                                            if ($_GET['err'] == $row['tripID'] ) {
                                                # code...
                                                echo "<td class = dynamic>request already sended</td>";
                                            }else {
                                                # code...
                                                echo "<td class = dynamic></td>";
                                            }
                                        }
                                        if (isset($_GET['req'])) {
                                            if ($_GET['req'] == $row['tripID'] ) {
                                                # code...
                                                echo "<td class = dynamic>request sent</td>";
                                            }else {
                                                # code...
                                                echo "<td class = dynamic></td>";
                                            }
                                        }
                                        if (isset($_GET['full'])) {
                                            if ($_GET['full'] == $row['full'] ) {
                                                # code...
                                                echo "<td class = dynamic>this trip are full</td>";
                                            }else {
                                                # code...
                                                echo "<td class = dynamic></td>";
                                            }
                                        }
                                        echo "</tr>";
                                    }
                                    unset($_POST);
                                    
                                
                                
                                
                                ?>
                                
                                <?php ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <a href="../studentPages/profileStudent.php"><button class="btn btn-primary">Return</button></a> 
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<style>
a{
    color:white;
    text-decoration:none;
}
    </style>