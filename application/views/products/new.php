<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create a new product | Semi Restful Route Demo</title>
	<link rel="stylesheet" href="/assets/js/jquery-2.1.3.min.js">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>Add a new product</h3>
				<?php if($this->session->flashdata('error_price')) { echo $this->session->flashdata('error_price'); } ?>
				<form action="/products/create" method="post">
					<div class="form-group">
						<label for="productName">Product Name</label>
						<input type="text" class="form-control" id="productName" name="productName" placeholder="Enter product name">
					</div>
					<div class="form-group">
						<label for="productDescription">Description</label>
						<input type="text" class="form-control" id="productDescription" name="productDescription" placeholder="Enter product description">
					</div>
					<div class="form-group">
						<label for="productPrice">Price</label>
						<input type="text" class="form-control" id="productPrice" name="productPrice" placeholder="Enter product price">
					</div>
					<button type="submit" class="btn btn-default">Create</button>
				</form>
				<a class="btn btn-link" href="/products" role="button">Go Back</a>
			</div>
		</div>
	</div>
</body>
</html>