<?php include('header.php'); ?>
<section id="hero" class="login">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
				<div id="login">
					<div class="text-center"><h4>Register Now</h4></div>
					<hr>
					<form>
						<div class="form-group">
							<label>Name</label>
							<input type="text" class=" form-control"  placeholder="Name">
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" class=" form-control" placeholder="Email">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class=" form-control" id="password1" placeholder="Password">
						</div>
						<div class="form-group">
							<label>Confirm password</label>
							<input type="password" class=" form-control" id="password2" placeholder="Confirm password">
						</div>
						<div id="pass-info" class="clearfix"></div>
						<button class="btn_full">Create an account</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include('footer.php'); ?>