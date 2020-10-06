<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <title>CLF</title>
  </head>
  <body>
  <style>
body  {
  background-image: url("hunters-race-MYbhN8KaaEc-unsplash.jpg");
  background-color: #cccccc;
  opacity: 80%;
  height:100%;
  background-attachment: fixed;
  background-size: cover;
}
</style>
  <!-- Navigation bar --> 
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Cegal Law Firm</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="application.php">Application</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Check
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Hearing date</a>
          <a class="dropdown-item" href="#">Hearing time</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Status</a>
        </div>
      </li>
 
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<h1></h1>
<!--Application-->
<style>
    * {
  box-sizing: border-box;
}
.column {
  float: none;
  width: 80%;
  padding: 10 10px;
}
.row {margin: 0 -5px;}
.row:after {
  content: "";
  display: table;
  clear: both;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); /* this adds the "card" effect */
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}
</style>

<div class="row my-10 py-10 container-fluid">
  <div class="column">
    <div class="card">
        
    <!--form-->

    <div > 

        <form action="userinfo.php" method="post">
    <div class="w-50 m-auto">
    <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
  <div class="input-group-append">
    <span class="input-group-text" id="basic-addon2">@gmail.com</span>
  </div>
  </div>
 <div class="form-group">
    <input type="text" name="firstnamecl" placeholder="firstname "autocorrect="off" class="form-control">
    </div>
    <div class="form-group">
    <input type="text" name="middlenamecl" placeholder="middlename"autocorrect="off" class="form-control">
    </div>
    <div class="form-group">
    <input type="text" name="lastnamecl" placeholder="lastname"autocorrect="off" class="form-control">
    </div>
    <div class="form-group">
    <input type="text" name="mobilecl" placeholder="Mobile number "autocorrect="off" class="form-control">
    </div>
    <div class="form-group">
        Birthday
    <input type="date" id="birthdaycl" name="birthday" placeholder="birthday"></div>
    
    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Gender</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01">
    <option selected>Choose...</option>
    <option value="1">Male</option>
    <option value="2">Female</option>
    <option value="2">Prefer not to say</option>
  </select>
</div>
<label for="pwd">Password:</label>
<input type="password" id="pwd" name="pwd">


    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Case-type</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01">
    <option selected>Choose...</option>
    <option value="1">Civil</option>
    <option value="2">Criminal</option>
    <
  </select>
</div>

  
  
<div>
    <button type="submit" class="btn btn-secondary" >Submit</button></div>
  </div>
 

</form>
   </div>
</div>
</div>

<!--footer-->
<style>
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: black;
  color: white;
  text-align: center;
}
</style>
<footer class="footer">
  <a href="application.php">Contact us</a>
</footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>