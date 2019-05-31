<?php 
  include'../include/header.php';  
?>
<div class="container pt-5">  
	<div class="row justify-content-center">
		<div class="col-sm-6">
			<h5 class="text-center">Create New Account</h5>
			<div class="row">
				<div class="col-sm-6 mb-3">
					<label>First Name <span class="text-danger">*</span></label>
					<input type="text" class="form-control form-control-sm" placeholder="Jan" required>
					<div class="alert d-none alert-danger py-1 px-2" role="alert">Alert message here!</div>

				</div>
				<div class="col-sm-6 mb-3">
					<label>Last Name <span class="text-danger">*</span></label>
					<input type="text" class="form-control form-control-sm" placeholder="Smith" required>
					<div class="alert d-none alert-danger py-1 px-2" role="alert">Alert message here!</div>

				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 mb-3">
					<label>Email <span class="text-danger">*</span></label>
					<input type="text" class="form-control form-control-sm" placeholder="jansmit@gmail.com">
					<div class="text-danger mb-1 display-none">Invalid format!</div>
				</div>
				<div class="col-sm-6 mb-3">
					<label>Telephone <span class="text-danger">*</span></label>
					<input type="text" class="form-control form-control-sm" placeholder="070 345 6574" required>
					<div class="alert d-none alert-danger py-1 px-2" role="alert">Alert message here!</div>

				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 mb-3">
					<label>Postcode Place<span class="text-danger">*</span></label>
					<input type="text" class="form-control form-control-sm" placeholder="abc123">
					<div class="text-danger mb-1 display-none">ABC123</div>
				</div>
				<div class="col-sm-6 mb-3">
					<label>Postal Code <span class="text-danger">*</span></label>
					<input type="text" class="form-control form-control-sm" placeholder="abc123" required>
					<div class="text-danger mb-1 display-none">ABC123</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 mb-3">
					<label>Address <span class="text-danger">*</span></label>
					<textarea class="form-control form-control-sm" placeholder="Frans Halskade 77, Rijswijk" required></textarea>
					<div class="alert d-none alert-danger py-1 px-2" role="alert">Alert message here!</div>

				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 mb-4">
					<label>Password <span class="text-danger">*</span></label>
					<input type="text" class="form-control form-control-sm" placeholder="*****" required>
					<div class="alert d-none alert-danger py-1 px-2" role="alert">Alert message here!</div>

				</div>
				<div class="col-sm-6 mb-4">
					<label>Re-enter password <span class="text-danger">*</span></label>
					<input type="password" class="form-control form-control-sm" placeholder="*****" required>
					<div class="text-danger mb-1 display-none">Password did not match!</div>
				</div>
			</div>
				
			<!-- button -->
            <div class="alert d-none alert-success mb-2" role="alert">Account successfully!</div>
			<a href="verify.php" class="btn btn-primary btn-block btn-sm mb-3">Create an account</a>
			<p>Already have an account? <a href="../account/login.php">Sign In</a></p>

		</div> 
	</div>
</div>
 