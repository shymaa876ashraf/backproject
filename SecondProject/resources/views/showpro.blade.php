<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
   
 <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
 <![endif]-->
 </head>
<body >
  

<table class="table table-striped">
  <thead >
    <tr class="table-info">
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">image</th>
      <th scope="col">price</th>
      <th scope="col">Description</th>



    </tr>
  </thead>
  <tbody>
    
  @foreach($Product as $myProduct)
	<tr class="table-info">
		<td>&nbsp {{$myProduct->id}}</td>
		<td>&nbsp {{$myProduct->name}}</td>
        <td>&nbsp {{$myProduct->numberofcopies}}</td>

		<td><img src="{{$myProduct->image}}" width="200"  height="200"> </td>
        <td>&nbsp {{$myProduct->price}}</td>
        <td>&nbsp {{$myProduct->description}}</td>
	</tr>
@endforeach
    
  </tbody>
</table>
<br>
<form action="/addproduct" method="get" >
    {{csrf_field()}}
    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
   <button type="submit" class="btn btn-success" style='background-color:green;color:white;'>add product  </button>
    </form>

    <script src="js/jquery3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
</body>
</html>
