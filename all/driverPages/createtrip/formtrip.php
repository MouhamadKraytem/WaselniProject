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
            <!-- <input type="email" id="email" name="email" placeholder="Enter the area"/> -->
            <select name="from" id="">
              <option value="liu">liu</option>
              <option value="liu">koura</option>
              <option value="liu">baddawi</option>
            </select>
          </div>
          <div class="user-input-box">
            <label for="phoneNumber">To</label>
            <select name="to" id="">
              <option value="liu">liu</option>
              <option value="liu">koura</option>
              <option value="liu">baddawi</option>
            </select>
          </div>
          <div class="user-input-box">
            <label for="time">Time</label>
            <select name="from" id="">
              <option value="liu">8:00:00</option>
              <option value="liu">8:30:00</option>
              <option value="liu">9:00:00</option>
            </select>
          </div>
          <div class="user-input-box">
            <label for="phoneNumber">Days</label>
            <select name="from" id="">
              <option value="liu">Monday</option>
              <option value="liu">Tuesday</option>
              <option value="liu">Wednesday</option>
              <option value="liu">Thursday</option>
            </select>
          </div>
          <div class="user-input-box">
            <label for="Available">Available Place</label>
            <select name="from" id="">
              <option value="liu">1</option>
              <option value="liu">2</option>
              <option value="liu">3</option>
              <option value="liu">4</option>
            </select>
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