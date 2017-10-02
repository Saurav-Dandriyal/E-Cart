<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>E-Store | SignUp</title>
		<link rel="stylesheet" type="text/css" href="index.css">
	</head>
	<body>
		<?php include 'logedout_header.php';?>
		<div class="container pad">
			<div class="row">
				<div class="col-xs-8">
					<img src="img\1.jpg" class="img-responsive form-group"/>
				</div>
				<div class="col-xs-4">
					<h2 class="form-group">SIGN UP</h2>
					<form>
						<div class="form-group">
							<input type="text" class="form-control" name="name" placeholder="Name" required="true">	
						</div>
						
						<div class="form-group">
							<input type="email" class="form-control" name="e-mail" placeholder="Email" required="true">	
						</div>
						
						<div class="form-group">
							<input type="password" class="form-control" name="passwrd" placeholder="Password" required="true" placeholder="Atleast 8 digits" pattern=".{8,}">	
						</div>
						
						<div class="form-group">
							<input type="text" size="10" class="form-control" name="cont" placeholder="Contact No." required="true" pattern=".{10,}" >	
						</div>
						
						<div class="form-group">
							<input type="text" class="form-control" name="city" placeholder="City" required="true">	
						</div>
						
						<div class="form-group">
							<Textarea class=" form-control" name="address" placeholder="Address" required="true"></Textarea>
						</div>
						<div class="form-group">
						<button type="submit" class="btn btn-primary" style="float:right">Submit</button></div>
					</form>
				</div>
			</div>
		</div>
		<?php include 'logedout_footer.php';?>
	</body>
</html>