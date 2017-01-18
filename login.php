<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>OOP | Home</title>
    <!-- Latest compiled and minified CSS -->
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- <link href="css/custom.css" rel="stylesheet"> -->
	  <link href="css/style.css" rel="stylesheet">
	</head>
  <body>
    <div class="container" style="margin-top: 100px;">
      <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
        <div class="panel panel-info" >
          <div class="panel-heading">
            <div class="panel-title">Sign In</div>
            <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
          </div>     

          <div style="padding-top:30px" class="panel-body" >
            <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
            <form id="loginform" method="post" class="form-horizontal" role="form" action="includes/session.php">
              <div style="margin-bottom: 25px" class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email">                                        
              </div>
              <div style="margin-bottom: 25px" class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
              </div>
              <div class="input-group">
                <div class="checkbox">
                  <label>
                    <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                  </label>
                </div>
              </div>
              <div style="margin-top:10px" class="form-group">
              <!-- Button -->
                <div class="col-sm-12 controls" align="center">
                  <button type="submit" id="btn-login" href="#" class="btn btn-primary"><i class="fa fa-sign-in" aria-hidden="true"></i> Log In</button>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12 control">
              </div>    
            </form>     
          </div>                     
        </div>  
      </div>
    </div>

    <!-- jQuery library -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap library -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
