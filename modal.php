
<div id="mymodal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">LOGIN</h4>
			</div>
			<div class="modal-body">
				<form method="POST"">
					<p class="text-warming form-group">Don't have an Account? <a href="signup.php" style="color:blue;">Register</a></p>
					<div class="form-group">
						<label for="e-mail">Email:</label>
						<input type="email" class="form-control" name="e-mail" required="true" pattern="">
					</div>
					<div class="form-group">
						<label for="password">Password:</label>
						<input type="password" name="password" class="form-control" required="true" >
					</div>
					<button type="submit" class="btn btn-primary">Login</button>
				</form>
			</div>
			<div class="modal-footer">
				<a href="signup.php" style="color:blue; float:left;">Forgot Password?</a>
			</div>
		</div>
	</div>
</div>