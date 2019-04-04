<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/styles.css">

    <?php
    require('includes/config.php');
    require('models/add_products_model.php');
    ?>

	<title>CIS 282 Store | Add Products</title>
</head>

<body>
 

<form method="post">  
<?php if (isset($_SESSION['message'])): ?>
  <div class="alert alert-<?=$_SESSION['msg_type']?>">
    <?php 
      echo $_SESSION['message']; 
      unset($_SESSION['message']);
    ?>
  </div>
<?php endif ?>
  
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Product</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name='product_name' placeholder="Add Product">
      <input type="text" class="form-control" name='list_price' placeholder="List Price">
      <input type="text" class="form-control" name='date_added' placeholder="Date Added">
       
    </div>
  </div>
  
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" name="submitForm" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<a href="products.php" class="btn btn-primary">Back To Products</a>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>


</html>