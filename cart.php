<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>E-Store | Cart</title>
		<link rel="stylesheet" type="text/css" href="index.css">
	</head>
	<body>
		<?php include 'logedin_header.php';?>
		
		<div class="container pad">
			<div class="row">
				<div class="col-xs-7 col-xs-offset-2">
					<table class="table table-striped">
						<tbody>
							<tr>
								<th>Item Number</th>
								<th>Item Name</th>
								<th>Price</th>
								<th></th>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td>Total</td>
								<td>Rs 0/-</td>
								<td><a href="success.php" class="btn btn-primary">Confirm Order</a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>