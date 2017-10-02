<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynav" >
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">E-Store</a>
		</div>
		<div class="collapse navbar-collapse" id="mynav">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
				<li><a href="" data-toggle="modal" data-target="#mymodal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				<li><a href="aboutus.php"><span class="glyphicon glyphicon-tasks"></span> About Us</a></li>
				<li><a href="contactus.php"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li>
			</ul>
		</div>
	</div>
</nav>
<div><?php include 'modal.php'?></div>