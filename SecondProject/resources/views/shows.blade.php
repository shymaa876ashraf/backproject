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
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
    
  @foreach($Category as $myCategory)
	<tr class="table-info">
		<td>&nbsp {{$myCategory->id}}</td>
		<td>&nbsp {{$myCategory->name}}</td>
		<td><img src="{{$myCategory->image}}" width="200"  height="200"> </td>
	</tr>
@endforeach
    
  </tbody>
</table>
<br>
<form action="/addproduct" method="get" >
    {{csrf_field()}}
    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
   <button type="submit" class="btn btn-success" style='background-color:green;color:white;'>Add Category </button>
    </form>

    <script src="js/jquery3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
</body>
</html>
