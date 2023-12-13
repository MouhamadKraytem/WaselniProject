<?php
include('../connection.php');

if (isset($_GET['userid'])) {
    $userId = $_GET["userid"];
    $getUserInfo = "SELECT * FROM user WHERE id = $userId ";
    $getUserInfoRes= mysqli_query($conn , $getUserInfo);

    $row = mysqli_fetch_array($getUserInfoRes);

}else {
    header('location:../index.html');
}

?>




<!DOCTYPE HTML>
<html>
    <head>
    
        <link rel="stylesheet" href=" style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <title><?php echo "".$row['username']." profile"; ?></title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    </head>
    
    
    <body>
        <div class="center">
            <div class="bio_card">
                <div class="left">
                    <div class="btn">
                       <i class="fas fa-plus"></i>
                    </div>
                    
                        <img class="cover" src="Aixen.jpg ">
                            <div class="box">
                            <img class="profile" src="./doummar.jpg">
                            </div>
                        <h1><?php echo "".$row['username']." "; ?></h1>
                        <div class="info">
                            <div class="col">
                            <i class="fab fa-twitter"></i>
                            </div>
                            <div class="col">
                            <i class="fab fa-facebook"></i>
                            </div>
                            <div class="col">
                            <i class="fas fa-heart"></i>
                            </div>
                            
                        </div>
                    </div>
                <div class="right">
                    <div class="text">
                        <h1>PRofile-page</h1>
                    <h2> <?php echo "".$row['role']." "; ?></h2>
                    <h3>BIO:</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fermentum pellentesque scelerisque. Proin iaculis ante velit, sit amet mollis lacus blandit non. Aenean sed dolor sed nibh feugiat dapibus a id mauris. Proin in neque eget metus dapibus tempor ac eu leo. Nunc vestibulum ut felis ac blandit. Pellentesque faucibus quam quis orci tincidunt tempor. In hac habitasse platea dictumst. Aenean arcu sem, feugiat sed nisl in, tempus rutrum mi. Phasellus porta pulvinar ante, nec volutpat est egestas id. Sed interdum urna a enim sodales, in ornare urna pellentesque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas feugiat mauris tristique eros finibus congue.
                    </p>
                    <h3>Location : </h3>
                    <p>Lebanon/Minieh-danieh </p>
                    
                    <button><i class="far fa-envelope"></i> send a message</button>
                    </div>
                  
                </div>
            </div>
            <a href="">Return</a>
        </div>
        
    <script>
        
        $(document).ready(function(){
            
            $(".btn").on("click",function(){
               //$(".right").toggle("slide"); 
                
                if($(".right").css("width") == "0px"){
                    $(".right").animate({  width: "500px" },400);
                $(".btn i").removeClass();
                $(".btn i").addClass("fas fa-minus");
                }else{
                    $(".right").animate({  width: "0px" },400);
                $(".btn i").removeClass();
                $(".btn i").addClass("fas fa-plus");
                }
                
               // $(".right").hide("slide", { direction: "left" }, 1000);
                //$(".right").show("slide", { direction: "left" }, 400);
              // $(".btn").css({ 'transform' : 'rotate(180deg)' });
            });
        });
        
        
    </script>
    </body>
</html>