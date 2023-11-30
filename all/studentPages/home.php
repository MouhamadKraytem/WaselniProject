<?php

// include 'config.php';
// session_start();
// $user_id = $_SESSION['user_id'];

// if(!isset($user_id)){
//    header('location:login.php');
// };

// if(isset($_GET['logout'])){
//    unset($user_id);
//    session_destroy();
//    header('location:login.php');
// }

?>

<!DOCTYPE html>

<head>
   

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./withprofile/css/style.css">

</head>

   
   

      <div class="profile">
         <?php
            // $select = mysqli_query($conn, "SELECT * FROM `user` WHERE id = '$user_id'") or die('query failed');
            // if(mysqli_num_rows($select) > 0){
            //    $fetch = mysqli_fetch_assoc($select);
            // }
            // if($fetch['image'] == ''){
            //    echo '<img src="images/default-avatar.png">';
            // }else{
            //    echo '<img src="uploaded_img/'.$fetch['image'].'">';
            // }
            ?>
            <img src="./withprofile/images/default-avatar.png" alt="">

         <h3> Student <?php //echo $fetch['name']; ?></h3>
         <a href="./withprofile/profile.php" class="btn">update profile</a>
         <a href="home.php?logout=<?php //echo $user_id; ?>" class="delete-btn">logout</a>
         <!-- <p>new <a href="login.php">login</a> or <a href="register.php">register</a></p> -->
      </div>



