<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Create Trip | NEW</title>
    <meta name="viewport" content="width=device-width,
      initial-scale=1.0"/>
    <link rel="stylesheet" href="form.css" />
    <link rel= " stylesheet "href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
  </head>
  <body>
        <!--navbarrrrrrrrrrrrrrrrrrr-->
        <nav class="navbar">
            <h1 class="logo">W'aselni</h1>
            <ul class="nav-links">
                <li class="active"><i href ="#" class ="fa fa-home"></i><a href="#"> Home</a></i></li>
                <li><i class="fa-solid fa-taxi"></i><a href="#"> Services</a></li>
                <li><i href ="#" class ="fa fa-times-circle"></i><a href="#"> ABOUT</a></i></li>
                <li class=""><i href ="#" class ="fa fa-id-card"><a href="#"> Contact-US</a></i></li>
                
            </ul>
             
        </nav>
    <div class="container">
      <h1 class="form-title">Create Trip | NEW</h1>
      <form action="#">
        <div class="main-user-info">
        <div class="user-input-box">
            <label for="email">From</label>
            <input type="email"
                    id="email"
                    name="email"
                    placeholder="Enter the area"/>
          </div>
          <div class="user-input-box">
            <label for="phoneNumber">To</label>
            <input type="text"
                    id="phoneNumber"
                    name="phoneNumber"
                    placeholder="Enter the area"/>
          </div>
          <div class="user-input-box">
            <label for="time">Time</label>
            <input type="time"
                    id="time"
                    name="time"
                    placeholder="Enter the time"/>
          </div>
          <div class="user-input-box">
            <label for="phoneNumber">Days</label>
            <input type="text"
                    id="Day"
                    name="Day"
                    placeholder="Enter the Day"/>
          </div>
          <div class="user-input-box">
            <label for="Available">Available Place</label>
            <input type="Available" id="Available" name="Available" placeholder=" "/>
          </div>
           
        <!-- <div class="gender-details-box">
          <span class="gender-title">Gender</span>
          <div class="gender-category">
            <input type="radio" name="gender" id="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" id="female">
            <label for="female">Female</label>
             
          </div> -->
        </div>
        <div class="form-submit-btn">
          <input type="submit" value="Register">
          <input type="submit" value="Return">
        </div>
      </form>
    </div>
  </body>
</html>