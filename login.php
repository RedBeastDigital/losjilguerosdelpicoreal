<!DOCTYPE html>
<html >
    <head>
        <link rel="stylesheet" href="vent.css" type="text/css"/> 
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
<body>
 <header>
     <h1 align="center">
                <a href="index.php" class="btn btn-info" role="button">Home</a>
                <a href="login.php" class="btn btn-info" role="button">Login</a>
                <a href="login.php" class="btn btn-info" role="button">Sing in</a>
                <a href="Aboutofus.php" class="btn btn-info" role="button">About of us</a>
                <a href="Contact.php" class="btn btn-info" role="button">Contact</a>
             </h1>
                </header>
<div class="container bg-success">
    <h2 class="colortext ">Iniciar seción</h2>
  <form class="form-horizontal" action="/action_page.php">
    <div class="form-group col-lg-5">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
    <div class="form-group col-lg-5" >
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>