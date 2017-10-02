<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>E-Store | Contact Us</title>
		<link rel="stylesheet" type="text/css" href="index.css">
		<style>
			.padd{padding-top:80px;}
		</style>
	</head>
	<body>
		<?php include 'logedout_header.php';?>
		
		<div class="container padd">
			<div class="row">
				<div class="col-xs-10">
					<h2>LIVE SUPPORT</h2>
					<h4>24 Hours | 7 Days A Week | 365 DAys A Year Live Technical Support</h4>
					<p>It is a long established fact hat a reader will be distracted by the readable concept of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believale. If you are going to use a passage of Lorem Ipsum, you need to be sure their isn't anything embarrasing hidden in middle of text.</p>
				</div>
				<div class="col-xs-2">
				<img src="img/1.jpg" class="img-responsive">
				</div>
			</div>
			<div class="row">
				<div class="col-xs-8">
					<h2>CONTACT US</h2>
					<form>
						<div class="form-group">
							<label for="name">Name:</label>
							<input type="text" class="form-control" name="name" required="true">
						</div>
						<div class="form-group">
							<label for="e-mail">Email:</label>
							<input type="email" class="form-control" name="e-mail" required="true">
						</div>
						<div class="form-group">
							<label for="message">Message:</label>
							<textarea class="form-control" name="message" required="true" rows="5"></textarea>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</form>
				</div>
				<div class="col-xs-4">
					<h2> Company Information:</h2>
					<p style="line-height:2.2;">500 Lorem Ipsum Dolor Slit,</br>22-56-2-9 Sit Amet,Lorem,</br>USA</br>Phone:(00)222 666 444</br>Fax:(000)000 00 00 2</br>Emial:info@mycompany.com</br>Follow on: Facebook,Twitter</p>
				</div>
			</div>
		</div>
		<?php include 'logedout_footer.php';?>
		</footer>
	</body>
</html>