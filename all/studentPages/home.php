<?php

include '../connection.php';
session_start();
$user_id = $_SESSION['id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:../login/');
}

?>



<head>
   

   <!-- custom css file link  -->
   <link rel="stylesheet" href="./withprofile/css/style.css">

</head>

   
   

      <div class="profile">
         <?php
            $query =  "SELECT * FROM `user` WHERE id = '$user_id'";
            $res = mysqli_query($conn,$query);
            $userData = mysqli_fetch_array($res);
            if($userData['image'] == NULL){
               echo '<img src="images/default-avatar.png">';
            }else{
               echo '<img src="./withprofile/uploaded_img/'.$userData['image'].'">';
            }
            ?>


         <h3> Welcome back , <?php echo $userData['username']; ?></h3>
         <a href="./withprofile/profile.php" class="btn">update profile</a>
         <a href="home.php?logout=<?php //echo $user_id; ?>" class="delete-btn">logout</a>
         <!-- <p>new <a href="login.php">login</a> or <a href="register.php">register</a></p> -->
      </div>



