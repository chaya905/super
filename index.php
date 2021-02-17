
<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Ajax</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="styles.css"   >
  <script  src="getData.js"></script>‏
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
‏
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>


<nav class="navbar navbar-inverse navbar-fixed-top" class="row" id="navbar">
  <!-- title -->
  <button type="button"  class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" id="button">Add item</button>
    <h1 class="title">Supper Market🛒</h1>
  
</nav>
 

<div class="container">
<div style="display:flex;TEXT-ALINE:CENTER; margin-top:100px">

<!-- milk -->
<div class="card" >
  <img src="./css/milk.png" alt="Avatar" style="width:70%; margin-left:15%">
  <div class="container">
    <h3 class="vh3"><b>Milk</b></h3> 
	<table >
    <thead>
    </thead>
    <tbody id="milk">
    </tbody>
  </table>
  </div>
</div>

<!-- fruits & vegetables -->
<div class="card" >
  <img src="./css/fruitVeg.png" alt="Avatar" style="width:70%; margin-left:15%">
  <div class="container">
    <h3 class="vh3"><b>Fruits & Vegetables </b></h3> 
	<table  >
    <thead>
    </thead>
    <tbody id="fruitVag">
    </tbody>
  </table>
  </div>
</div>

<!-- sweets -->
<div class="card" >
  <img src="./css/sweets.png" alt="Avatar" style="width:70%; margin-left:15%">
  <div class="container">
    <h3 class="vh3"><b>Sweets </b></h3> 
	<table  >
    <thead>
    </thead>
    <tbody id="sweets">
    </tbody>
  </table>
  </div>
</div>
</div>
</div>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
           <h2 class="modal-title">Add item</h2>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
   
      </div>
      <div class="modal-body">
      <form id="fupForm" name="form1" method="post">
		<div class="form-group">
			<label class="font">Name:</label>
			<input type="text" class="form-control" id="itemName" placeholder="itemName" name="itemName">
		</div>      
<div class="form-group" >
			<label class="font" id="table1">Category</label>
            <select  id="selectCategory" class="form-control"  id="category_id" placeholder="category_id" name="category_id"></select>
		</div>
		<input  class="font" type="button" name="save" class="btn btn-primary" value="Save" id="butsave">
        <label id="success"></label>
	</form>
      <div class="modal-footer">
      </div>
    </div>


  </div>
</div>
</body>
</html>