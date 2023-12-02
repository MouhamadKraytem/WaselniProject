<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
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

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search</button>
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
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                include("../connection.php");

                                if(isset($_POST['search'])){
                                
                                }else{
                                    include("./getAlltrip.php");
                                    while ($row = mysqli_fetch_array($getTripResult)) {
                                        echo "<tr>";
                                        echo "<td>".$row['driverUsername']."</td>";
                                        echo "<td>".$row['fromLocationName']."</td>";
                                        echo "<td>".$row['toLocationName']."</td>";
                                        echo "<td>".$row['tripDay']."</td>";
                                        echo "<td>".$row['tripTime']."</td>";
                                        echo "<td><button>request</button></td>";           
                                        echo "</tr>";
                                    }
                                }
                                
                                
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