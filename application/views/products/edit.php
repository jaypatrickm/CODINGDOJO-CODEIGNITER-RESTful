<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit product | Semi Restful Route Demo</title>
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
				<h3>Edit Product <?= $id ?></h3>
				<form action="/products/update/<?= $id ?>" method="post">
					
					<div class="form-group">
						<label for="productName">Product Name</label>
						<input type="text" class="form-control" id="productName" name="productName" placeholder="Enter product name" value="<?= $name ?>">
					</div>
					<div class="form-group">
						<label for="productDescription">Description</label>
						<input type="text" class="form-control" id="productDescription" name="productDescription" placeholder="Enter product description" value="<?= $description ?>">
					</div>
					<div class="form-group">
						<label for="productPrice">Price</label>
						<input type="text" class="form-control" id="productPrice" name="productPrice" placeholder="Enter product price" value="<?= $price ?>">
					</div>
					<input type="hidden" name="productCreatedAt" value="<?= $created_at ?>" />
					<button type="submit" class="btn btn-default">Update</button>
				</form>
				<a class="btn btn-link" href="/products/edit/<?= $id ?>" role="button">Show</a> | <a class="btn btn-link" href="/products" role="button">Back</a>
			</div>
		</div>
	</div>
</body>
</html>