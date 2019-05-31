<?php 
  include'../include/header-admin.php';
  include'../include/admin-menu.php';
?>

<div class="container-fluid py-5 mt-3">

<nav aria-label="breadcrumb breadcrumb-sm">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin/index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="admin/admin.php">Admin</a></li>
    <li class="breadcrumb-item active">Account details</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-2">
    <?php include'../include/admin-sidebar.php'; ?>
  </div>
  <div class="col-md-10"> 
      <div class="row justify-content-between">
        <div class="col-sm-3">
          <h4>BROKER DETAILS</h4>
        </div>
        <div class="col-md-1">
          <a href="account/account.php" class="btn btn-primary btn-sm btn-block">Back</a>
        </div>
      </div> 
      <hr class="my-2">

      <h5 class="mb-1 text-primary">Jan Smit</h5>
      <div class="row">
        <div class="col-sm-4">
          <p class="mb-1">jansmit@gmail.com</p>
          <p class="mb-1">020 456 3768</p>
          <p class="mb-3">Frans Halskade 77, Rijswijk</p>
        </div>
        <div class="col-sm-4">
          <p class="font-weight-bold mb-1">RE/MAX Probonet</p>
          <p class="card-text mb-1">070 345 6574</p>
        </div>
      </div>

      <div class="row justify-content-between">
        <div class="col-sm-4">
          <h5 class="mb-0">Lead transaction</h5>
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
            <th>Date Purchase</th>
            <th>Name</th>
            <th>P. Code</th>
            <th>Telephone</th>
            <th>Email Address</th>
            <th>Price</th> 
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>12345</td>
            <td>14-09-2018</td>
            <td>Brian Bantigue</td>
            <td>2243TR</td>
            <td>+61 821 06 20</td>
            <td>reggtr@gmail.com</td>
            <td>€39.99</td> 
          </tr>
        </tbody>
      </table> 
      <hr> 

    </div>
  </div>
</div>

<?php include'../include/footer-admin.php';?>