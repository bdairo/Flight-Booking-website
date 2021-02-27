<?php

session_start();

  /*if(!isset($_POST['submit'])){
      header('location:Register.php?error');
  }*/


//$viewflight=$_POST['viewflight'];

$username=$_SESSION['name'];
?>





<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>home</title>
        <link rel="stylesheet" type="text/css" href="homecss.css">
       <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    </head>
    <body>

    <div class="home">
                
                   <!--  <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" class="toggle-btn" "> Book Flights</button>
                    <button type="button" class="toggle-btn" onclick="register()"> View Flights</button>-->
               
            <nav class="navbar navbar-expand-lg navbar-light">
                <ul class="navbar-nav mr-auto">
                    
                    <li class="nav-item active">
                        <h3 class="text-white"> Welcome <span> <?php echo "$username" ?></span></h3>
                    </li>
                    
                </ul>
                

                <form class="form-inline my-2 my-lg-0"  method="post" action="viewflight.php">
                <button type="submit" name="viewflight" class="btn btn-outline-light ml-auto"> View Existing Flights</button>


                  <button class="btn btn-outline-light ml-auto" type="submit">Logout</button>
                 </form>
            </nav>



        <div class="booking-form-box">
                <h3 class="mx-auto"> Book a flight </h3>
                <hr class="bg-white">
            <form class="booking-form" required method="post" action="bookval.php">
                <div class="radio-btn">
               <!-- <input type="radio" class ="btn" name="roundtrip" checked="checked"> <span><strong>Roundtrip </strong></span>
                 <input type="radio" class ="btn" name="check"><span><strong> One-way </strong></span>-->
                 <input type="radio"  name="roundtrip" class="btn" value="Roundtrip">
                  <label for="Roundtrip" name="roundtrip">Roundtrip</label>
                 <input type="radio"  name="roundtrip" class="btn" value="One-way">
                 <label for="One-way">One-way</label>
                </div>

                <label> <strong>Flying From </strong></label>
                <input type="text" name ="Dairport" class="form-control" placeholder="City or Airport">

                <label> <strong>Flying To </strong></label>
                <input type="text" name="Aairport" class="form-control" placeholder="City or Airport">
        
                <div class="input-grp">
                    <label> <strong>Departure Date</strong></label>
                    <input type="date" name="Ddate"class="form-control select-date">
                </div>
        
                <div class="input-grp">
                    <label><strong>Arrival Date</strong></label>
                    <input type="date" name="Adate"class="form-control select-date">
                </div>
        
                <div class="input-grp">
                    <label><strong>Travel Class </strong></label>
                    <select name= "class" class="custom-select">
                        <option value="Economy class"> Economy Class</option>
                        <option value="Business class"> Business Class</option>
                        <option value="First class"> First Class</option>
                    </select>
                    
                </div>
                <div class="input-grp">
                    <button type="submit" name="bookflight" class="flight"> Book Flight</button>
                </div>
            </form>
            
            
            </div>
            

                 </div>
    
    </body>
</html>
