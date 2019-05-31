<?php 
  include'../include/header-admin.php';
  include'../include/admin-menu.php';
?>

<div class="container-fluid py-5 mt-3">

<nav aria-label="breadcrumb breadcrumb-sm">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin/index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="admin/index.php">Admin</a></li>
    <li class="breadcrumb-item active">Account</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-2">
    <?php include'../include/admin-sidebar.php'; ?>
  </div>
  <div class="col-md-10"> 
    <div class="row justify-content-between">
      <div class="col-sm-4">
        <h5>All accounts</h5>
      </div>
      <div class="col-sm-3">
        <input type="" name="" class="form-control form-control-sm mb-2" placeholder="Search...">
      </div>
    </div>
    <table class="table table-hover table-striped table-sm table-bordered">
      <caption>Total number of leads 6</caption>
      <thead>
        <tr>
          <th>ID</th>
          <th>Date created</th>
          <th>Name</th>
          <th>Address</th>
          <th>P. Code</th>
          <th>Telephone</th>
          <th>Email Address</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>12345</td>
          <td>14-09-2018</td>
          <td>Jan Smit</td>
          <td>Frans Halskade 77, Rijswijk</td>
          <td>2243TR</td>
          <td>020 456 3768</td>
          <td>jansmit@gmail.com</td>
          <td>Active</td>
          <td>
            <a href="account/account-details.php"><i class="fas fa-eye mr-2"></i></a>
            <a href=""><i class="fas fa-trash text-danger"></i></a>
          </td>
        </tr>
      </tbody>
    </table> 

    <hr>
  </div>
</div>

<?php include'../include/footer-admin.php';?>