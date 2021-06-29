<!DOCTYPE html>
<html lang="en">
<head>
  <title>DIAMOND HOTEL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <style>

    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    .row.content {height: 450px}
    
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand navbar-logo">
            <img src="img/logo.jpeg" alt="logo" width="40%">
          </a>
            </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      
        <li><a href="room_cat.php">Room catalogue</a></li>
        <li><a href="status.php">Room Status</a></li>
        <li><a href="book.php">Booking</a></li>
        <li><a href="history.php">History</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="setting.php"><button class="w3-button w3-red w3-round-large">Forgot Password</button></a></li>

      <li><a href="index.php"><button class="w3-button w3-blue w3-round-large">Log out</button></a></li>
    </div>
    </ul>
  </div>
</nav>
  
<div class="container text-center">  

  <div class="row">
  <h2 style="text-align:center">Room Catalogue</h2>
  </div>  
  <hr>
  <div class="row content">
  
  <div class="w3-row-padding w3-padding-16">
    
      <img src="images/room_single.jpg" alt="Norway" style="width:100%">
      <div class="w3-container w3-white">
        <h1>Single Room</h1>
        <h3>Price per Room</h3>
        <h4 class="w3-opacity">1000 Rs </h4>
        <h5>A Single bed  15m<sup>2</sup>,attached bathroom, a small dressing table and a small writing table ,chairs,fan etc</h5>
        <a href="status.php"><button class="w3-button w3-block w3-black w3-margin-bottom">Check Availibility</button></a>
      
    </div>
    <div class="w3-row-padding w3-padding-16">
      <img src="images/double_room.jpg" alt="Norway" style="width:100%">
      <div class="w3-container w3-white">
        <h1>Double Room</h1>
        <h3>Price per Room</h3>
        <h4 class="w3-opacity">2000 Rs</h4>
        <h5>Queen-size bed 25m<sup>2</sup>,attached bathroom,dressing table,a writing table,a TV, a fridge</h5>
        <a href="status.php"><button class="w3-button w3-block w3-black w3-margin-bottom">Check Availibility</button></a>
      </div>
    </div>
    <div class="w3-row-padding w3-padding-16">
      <img src="images/room_deluxe.jpg" alt="Norway" style="width:100%">
      <div class="w3-container w3-white">
        <h1>De luxe Room</h1>
        <h3>Price per Room</h3>
        <h4 class="w3-opacity">3000 Rs</h4>
        <h5>King-size bed 40m<sup>2</sup>,bathroom, kitchen corner, dining area,fan/air conditioner, dressing table,a writing table, a TV, a fridge,wifi availibility</h5>
        <a href="status.php"><button class="w3-button w3-block w3-black w3-margin-bottom">Check Availibility</button></a>
      </div>
    </div>
  </div>
  </div>

  
</div>

</body>
</html>
