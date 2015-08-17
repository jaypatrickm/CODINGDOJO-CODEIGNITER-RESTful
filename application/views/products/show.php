<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Show product | Semi Restful Route Demo</title>
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
				<h3>Product <?= $id ?></h3>
				<div class="form-group">
					<label for="productName"><h4>Product Name</h4></label>
					<h5><?= $name ?></h5>
				</div>
				<div class="form-group">
					<label for="productDescription"><h4>Description</h4></label>
					<h5><?= $description ?></h5>
				</div>
				<div class="form-group">
					<label for="productPrice"><h4>Price</h4></label>
					<h5><?= $price ?></h5>
				</div>
				<a class="btn btn-link" href="/products/edit/<?= $id ?>" role="button">Edit</a> | <a class="btn btn-link" href="/products" role="button">Back</a>
			</div>
		</div>
	</div>
</body>
</html>