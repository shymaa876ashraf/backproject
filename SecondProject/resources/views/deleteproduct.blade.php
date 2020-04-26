<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/deletepro.css">
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
              <li><a href="shoescience.blade.php">Sciencs Product</a></li>
              <li><a href="showanimie.blade.php">Animation Product</a></li>
              <li><a href="showartificial.blade.php">Artificial Product</a></li>
              <li><a href="showpcomputer.blade.php">Computer Product</a></li>
              <li><a href="showproductmath.blade.php">Math Product</a></li>
              <li><a href="shownet.blade.php">Networking Product</a></li>
              <li><a href="adminhome.blade.php">Admin Home</a></li>
              <li><a href="show.blade.php">Show</a></li>





            </ul>
           
          
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>


      <div class="login-form">

 
        <form  method="post"  action="showcategory.blade.php">
        {{csrf_field()}}

            <h2 class="text-center">Delete Product</h2>   
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon glyphicon glyphicon-log-out"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" name="id" placeholder="ُEnter Id" required="required">				
                </div>
            </div>
                   $foreach($Product as $Product)
            <div class="form-group">
              <a href="/deleteproduct/{{$Product->id}}" class="btn btn-danger btn-block mb-2">Delete  Product
              </a>
                
            </div>
                  $endforeach
           
        </form>
    
    </div>
    <div class="login-form">

 
       


    <script src="js/jquery3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
</body>
</html>