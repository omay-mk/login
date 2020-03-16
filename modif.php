<?php
require_once("fonctions.php");

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href=" style.css"> 
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Hello, world!</title>
  </head>
  <body>
  <nav class="navbar  navbar-expand-lg navbar-light bg-light mb-1">
  <a class="navbar-brand mb-5" href="#"><img src="img/logo.png" alt="" height="42" width="42" ></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse mt-4" id="navbarNav">
    <ul class="nav navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <ul class="nav navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">About<span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <ul class="nav navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#"> Contact <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
<div class="container">
        <div class="row centered-form marpad">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title"> Change password </h3>
			 			</div>
			 			<div class="panel-body">
			    		<form role="form" action="" method="post" >
			    			<div class="form-group">
                            <input type="password" name="pw" id="password" class="form-control input-sm" placeholder="New password">
			    			</div>
			    			<div class="form-group">
                            <input type="password" name="pw-repeat" id="password" class="form-control input-sm" placeholder=" Repeat password">
			    			</div>
			    			<input type="submit" value="Submit" name="pwchange" class="btn btn-info btn-block">
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <?php
if(isset($_POST['pwchange']))
{
    $pw = $_POST['pw'];
    $pwrepeat = $_POST['pw-repeat'];
    if ($pw == $pwrepeat) 
    { 
    passwchange ($con,$pw,$pwrepeat);
     header ("Location: home.php");
    }
     else {
        
        echo " <div class='row'>
                 <div class='alert alert-danger col-2 offset-5' role='alert'>
                 password incorrect!
                 </div>
               </div>
      ";

     
    }
}
?>
  </body>
</html>