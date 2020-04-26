<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
 <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
 <![endif]--></head>
<body>
  

    <nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand glyphicon glyphicon-pencil" href="#" >Library</a>
          </div>
      
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">SignIn</a></li>
              <li><a href="register.html">Resister</a></li>
            </ul>
           
          
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>


      <div class="login-form">

 
        <form action="/examples/actions/confirmation.php" method="post">
            <h2 class="text-center">Sign in</h2>   
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon glyphicon glyphicon-user"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" name="username" placeholder="Username" required="required">				
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon glyphicon glyphicon-lock"><i class="fa fa-lock"></i></span>
                    <input type="password" class="form-control" name="password" placeholder="Password" required="required">				
                </div>
            </div>        
            <div class="form-group">
                <button type="submit" class="btn btn-primary login-btn btn-block">Sign in</button>
            </div>
            <div class="clearfix">
                <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
                <a href="#" class="pull-right">Forgot Password?</a>
            </div>
            <div class="or-seperator"><i>or</i></div>
            <p class="text-center">Login with your social media account</p>
            <div class="text-center social-btn">
                <a href="#" class="btn btn-primary"><i class="fa fa-facebook"></i>&nbsp; Facebook</a>
                <a href="#" class="btn btn-info"><i class="fa fa-twitter"></i>&nbsp; Twitter</a>
                <a href="#" class="btn btn-danger"><i class="fa fa-google"></i>&nbsp; Google</a>
            </div>
        </form>
    
        <p class="text-center text-muted small">Don't have an account? <a href="#">Sign up here!</a></p>
    </div>

    <script src="js/jquery3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
</body>
</html>