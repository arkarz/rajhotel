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
            <img src="img/logo.jpeg" alt="logo" width="30%">
          </a>     
            </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      
      
        
      </ul>
      
    </div>
  </div>
</nav>
<div>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php"><button class="w3-button w3-red w3-round-large">Go to Login Page</button></a></li>

      </ul>
      </div>
  <br>
  <br>
<div class="container text-center"> 
<div class="row">
  <h1>Forgot Password</h1>
  </div>  
  <hr>   
<div class="row well" style="background-color: skyblue;">

  <div class="col-sm-2"></div>
  <div class="col-sm-8">
  <form action="updatepass.php" class="was-validated" method="post">
  <label for="pwd">Username:</label><br>
  <input type="text" class="form-control" id="uname" placeholder="Enter username" name="usrn" required>
  <br><br>
  <label for="pwd">Old password:</label><br>
  <input type="password" class="form-control" id="pwd" placeholder="Enter old password" name="opwd" required>
  <br><br>
  <label for="pwd"> Set new password:</label><br>
  <input type="password" class="form-control" id="pwd" placeholder="Enter new password" name="npwd" required>
  <br><br>
 
  <button type="submit" class="w3-button w3-block w3-green w3-margin-bottom">Change Password</button>

  <form>
  </div>
  <div class="col-sm-2"></div>

  </div>  
  
 
    </div> 
</div>
  <br>
  <br>
</div>
</body>
</html>
