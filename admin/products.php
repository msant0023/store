<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">

    <?php
	require('includes/config.php');
    require('models/products_model.php');
    ?>

	<title>CIS 282 Store | Product List</title>
</head>

<body>

<div class="container-fluid main-title">
	<div class="row">
		<div class="col">
			<h2>Product List</h2>
			<a href="add_products.php" class="btn btn-primary">Add Product</a>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-3">Product Name </div>
		<div class="col-3">List Price </div>
		<div class="col-3">Date Added </div>
	</div>
</div>


<div class="container">
	<div class="row">
		<?php foreach($productList as $row) { ?>	
			<div class="col-3">	<?php echo $row['product_name']; ?> </div>
			<div class="col-3">	<?php echo $row['list_price']; ?> </div>
			<div class="col-3">	<?php echo $row['date_added']; ?> </div>
			<div class="col-3">	
				<a href="edit_products.php?edit=<?php echo $row['product_id']; ?>" class="btn btn-info">Edit</a>
				<a href="models/edit_products_model.php?delete=<?php echo $row['product_id']; ?>" class="btn btn-danger">Delete</a>
			</div>
			
		<?php 
   		 }
		?>
	</div>
</div>




	
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>


</html>