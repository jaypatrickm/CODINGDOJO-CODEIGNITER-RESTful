<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Products | Semi Restful Route Demo</title>
	<link rel="stylesheet" href="/assets/js/jquery-2.1.3.min.js">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>Products</h3>
				<table class="table table-hover table-bordered">
					<tr>
						<th>Name</th>
						<th>Description</th>
						<th>Price</th>
						<th>Actions</th>
					</tr>
					<?php foreach($result as $row) { ?>
					<tr>
						<td><?= $row['name'] ?></td>
						<td><?= $row['description'] ?></td>
						<td><?= $row['price'] ?></td>
						<td>
							<form action="/products/destroy/<?= $row['id'] ?>" method="post">
								<a class="btn btn-link" href="/products/show/<?= $row['id'] ?>">Show</a> | 
								<a class="btn btn-link" href="/products/edit/<?= $row['id'] ?>">Edit</a> | 
								<button type="submit" class="btn btn-danger">Remove</button>
							</form>
						</td>
					</tr>
					<?php } ?>
				</table>
				<a class="btn btn-link" href="/products/new" role="button">Add a new product</a>
			</div>
		</div>
	</div>
</body>
</html>