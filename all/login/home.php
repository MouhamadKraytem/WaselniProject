<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['username']; ?></h1>
     <?php
     if ($_SESSION['role'] == "driver") {
          header("location:../driverPage/index.php");
     }else {
          header("location:../studentPages/profile/profileStudent.php");
     }
     ?>
     <a href="logout.php">Logout</a>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
?>