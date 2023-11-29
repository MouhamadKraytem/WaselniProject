<?php 
include "db_conn.php";

if(isset($_POST["submit"])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $Day=$_POST['Day'];
    $gender=$_POST['gender'];
    $time=$_POST['time'];
    $from=$_POST['from'];
    $to=$_POST['to'];


   
    $sql = "INSERT INTO `stud`(`id`,`firstname`,`lastname`,`Day`,`gender`,`time`,`from`,`to`)VALUES(NULL,'$firstname','$lastname','$Day','$gender','$time','$from','$to')";
    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location: index.php?msg=New record created successfully");
    } else {
    echo "Failed: " . mysqli_error($conn);
     }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
   NEW STUDENTS IN CAR
   </nav>
    <div class="container">
    <div class="text-center mb-4">
         <h3>Add New Students</h3>
         <p class="text-muted">Complete the form below to add a new Students</p>
      </div>
      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">First Name:</label>
                  <input type="text" class="form-control" name="firstname" placeholder="Doummar">
               </div>

               <div class="col">
                  <label class="form-label">Last Name:</label>
                  <input type="text" class="form-control" name="lastname" placeholder="alzahabi">
               </div>
            </div>

            <div class="mb-3">
               <label class="form-label">Day</label>
               <input type="text" class="form-control" name="Day" placeholder="MtWth">
            </div>

            <div class="form-group mb-3">
               <label>Gender:</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="gender" id="male" value="male">
               <label for="male" class="form-input-label">Male</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="gender" id="female" value="female">
               <label for="female" class="form-input-label">Female</label>
            </div>
            <div class="mb-3">
               <label class="form-label">time</label>
               <input type="text" class="form-control" name="time" placeholder="12345">
            </div>
            <div class="mb-3">
               <label class="form-label">from</label>
               <input type="text" class="form-control" name="from" placeholder="MtWth">
            </div>
            <div class="mb-3">
               <label class="form-label">to</label>
               <input type="text" class="form-control" name="to" placeholder="MtWth">
            </div>

            <div>
               <button type="submit" class="btn btn-success" name="submit">Save</button>
               <a href="index.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
      </div>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>