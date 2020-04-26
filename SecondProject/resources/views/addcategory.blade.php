
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/addcat.css">
   
 <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
 <![endif]-->
 </head>
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
              <li><a href="showcategory.blade.php">Show Category</a></li>
              <li><a href="adminhome.blade.php">Admin Home</a></li>
              <li><a href="show.blade.php">Show</a></li>


            </ul>
           
          
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

      <div class="container" >
  <form action="/addcategory" method="POST" >
    {{csrf_field()}}
  <div class="form-group" style="margin-top:100px;">
    <div class="form-group">
      <input type="number" class="form-control" id="id" placeholder="Enter id" name="id">
     </div>
    <div class="form-group">
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <input type="text" class="form-control"  id="img" placeholder="Enter link of Image " name="image" >
    </div>
    <button type="submit" class="btn btn-success">Add Category</button>
    </div>
    </form>
    <form action="/showcat" method="get" >
    {{csrf_field()}}

    <button type="submit" class="btn btn-success">show</button>
    <button type="submit" class="btn btn-success">deleteCat</button>

    </form>
</div>
   

 
       


    <script src="js/jquery3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
</body>
</html>
