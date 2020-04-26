<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>show statistics</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/showstat.css">
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
            <a class="navbar-brand glyphicon glyphicon-pencil" href="#">Library</a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="adminhome.blade.php">Admin Home</a></li>
              <li><a href="showcategory.blade.php">Show Category</a></li>
              <li><a href="addtocard.blade.php">Show Category</a></li>
              


            </ul>
      
          <!-- Collect the nav links, forms, and other content for toggling -->
          
           
          
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
     



      <div class="container mb-4" >
        <div class="row">
            <div class="col-12">
                <div class="table-responsive" style="align-items: center;">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No </th>
                                <th scope="col">Product</th>
                                <th scope="col">Name</th>
                                <th scope="col" class="text-right">State</th>
                                <th scope="col" class="text-right">Seller</th>
                                <th scope="col" class="text-center">Quantity</th>
                                <th scope="col" class="text-center">Price</th>
                                <th scope="col" class="text-right">Action</th>


                                <th> </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><img src="images/x5.jpg" style="height: 100px;"> </td>
                                <td>Network fundamentals</td>
                                <td>Yes</td>
                                <td>Best Seller</td>
                                <td>3</td>
                                <td class="text-right">$596.00</td>
                                <td class="text-right"><button class="btn btn-sm btn-danger glyphicon glyphicon-trash " ><i class="fa fa-trash"></i> </button> </td>
                                <td class="text-right"><button class="btn btn-sm btn-danger glyphicon glyphicon-new-window "><i class="fa fa-trash"></i> </button> </td>

                            </tr>
                            <tr>
                                <td>2</td>

                                <td><img src="images/c++.jpg" style="height: 100px;"> </td>
                                <td>C++</td>
                                <td>No</td>
                                <td>Product Concluded</td>
                                <td>0</td>
                                <td class="text-right">$200.66</td>
                                <td class="text-right"><button class="btn btn-sm btn-danger glyphicon glyphicon-trash "><i class="fa fa-trash"></i> </button> </td>
                                <td class="text-right"><button class="btn btn-sm btn-danger glyphicon glyphicon-new-window "><i class="fa fa-trash"></i> </button> </td>

                            </tr>
                            <tr>
                                <td>3</td>
                                <td><img src="images/z2.jpg" style="height: 100px;"> </td>
                                <td>Artificial Intelligence</td>
                                <td>yes</td>
                                <td>Worse Seller</td>
                                <td>13</td>
                                <td class="text-right">$20,00 </td>
                                <td class="text-right"><button class="btn btn-sm btn-danger glyphicon glyphicon-trash "><i class="fa fa-trash"></i> </button> </td>
                                <td class="text-right"><button class="btn btn-sm btn-danger glyphicon glyphicon-new-window "><i class="fa fa-trash"></i> </button> </td>

                            </tr>
                            <tr>
                                <td>4</td>
                                <td><img src="images/cc.png" style="height: 100px;"> </td>
                                <td>c#</td>
                                <td>Yes</td>
                                <td>Best Seller</td>
                                <td>4</td>
                                <td class="text-right">$400.56 </td>
                                <td class="text-right"><button class="btn btn-sm btn-danger glyphicon glyphicon-trash "><i class="fa fa-trash"></i> </button> </td>
                                <td class="text-right"><button class="btn btn-sm btn-danger glyphicon glyphicon-new-window "><i class="fa fa-trash"></i> </button> </td>

                            </tr>
                            <tr>
                                <td>5</td>
                                <td><img src="images/Q.jpg" style="height: 100px;"> </td>
                                <td>Q#</td>
                                <td>No</td>
                                <td>Product Concluded</td>
                                <td>0</td>
                                <td class="text-right">$120.98 </td>
                                <td class="text-right"><button class="btn btn-sm btn-danger glyphicon glyphicon-trash "><i class="fa fa-trash"></i> </button> </td>
                                <td class="text-right"><button class="btn btn-sm btn-danger glyphicon glyphicon-new-window "><i class="fa fa-trash"></i> </button> </td>

                            </tr>
                            <tr>
                                <td>6</td>

                                <td><img src="images/2.jpg" style="height: 100px;"> </td>
                                <td>Harry Potter</td>
                                <td>Yes</td>
                                <td>Best Seller</td>
                                <td>2</td>
                                <td class="text-right">$600.996</td>
                                <td class="text-right"><button class="btn btn-sm btn-danger glyphicon glyphicon-trash "><i class="fa fa-trash"></i> </button> </td>
                                <td class="text-right"><button class="btn btn-sm btn-danger glyphicon glyphicon-new-window "><i class="fa fa-trash"></i> </button> </td>

                            </tr>
                         
                           
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col mb-2">
                <div class="row">
                    <div class="col-sm-12  col-md-6">
                        <button class="btn btn-block btn-light"><a href="showcategory.html" style="text-decoration: none;">Continue</a></button>
                    </div>
                    <div class="col-sm-12 col-md-6 text-right">
                        <button class="btn btn-lg btn-block btn-success text-uppercase" style="background-color: firebrick;">Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>




       



    <script src="js/jquery3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    



  





</body>
</html>
 

ا