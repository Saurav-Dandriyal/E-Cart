<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>E-Store | Settings</title>
		<link rel="stylesheet" type="text/css" href="index.css">
	</head>
	<body>
		<?php include 'logedin_header.php';?>
		<div class="container-fluid pad">
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1 col-sm-7 col-sm-offset-3 col-md-4 col-md-offset-4">
					<form>
						<h4>Change Password</h4>						
						<div class="form-group">
							<input type="password" name="password" class="form-control" placeholder="Old Password" required="true">
						</div>
						<div class="form-group">
							<input type="password" name="password" class="form-control" placeholder="New Password"required="true">
						</div>
						<div class="form-group">
							<input type="password" name="password" class="form-control" placeholder="Re-Type Password" required="true">
						</div>
						<button type="submit" class="btn btn-primary">Change</button>						
					</form>
				</div>
			</div>			
		</div>
	</body>
</html>