<?php 
  include'../include/header.php'; 
?>
<div class="container mt-5 pt-5">  
	<div class="row justify-content-center">
		<div class="col-sm-4">
			<h5 class="text-center">Sign In</h5>
 			<div class="form-group">
 				<label>Username <span class="text-danger">*</span></label>
				<input type="text" class="form-control" placeholder="admin">
				<div class="alert d-none alert-danger py-1 px-2" role="alert">Invalid username!</div>

 			</div>
			<div class="form-group">
				<label>Password <span class="text-danger">*</span></label>
				<input type="password" class="form-control mb-3" placeholder="*****" required>
				<div class="alert d-none alert-danger py-1 px-2" role="alert">Invalid Password!</div>

				<div class="form-group form-check">
					<input type="checkbox" class="form-check-input" required>
					<label class="form-check-label" for="exampleCheck1">Remember password</label>
				</div>
			</div>
			

			<a href="" class="btn btn-primary btn-block btn-sm mb-3">Login</a>
			<p>New to Leadsapp? <a href="register.php">Create an account</a></p>
			<p>Click to access demo <a href="lead/">client</a> or <a href="admin/">admin</a>.</p>
		</div> 
	</div>
</div>
 