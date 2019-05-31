<?php 
  include'../include/header-admin.php';
  include'../include/admin-menu.php';
?>

<div class="container-fluid py-5 mt-3">

<nav aria-label="breadcrumb breadcrumb-sm">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin/index.php">Home</a></li>
    <li class="breadcrumb-item active">Admin</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-2">
    <?php include'../include/admin-sidebar.php'; ?>
  </div>
  <div class="col-md-10"> 
    <div class="row justify-content-between">
      <div class="col-sm-6">
        <h5>Open leads</h5>
      </div>
      <div class="col-sm-3">
        <input type="" name="" class="form-control form-control-sm mb-2" placeholder="Search...">
      </div>
      <div class="col-sm-3">
        <select class="form-control form-control-sm mb-2">
          <option value="0">Type of Application</option>
          <option>Standard Lead</option>
        </select>
      </div>
    </div>
    <table class="table table-hover table-striped table-sm table-bordered">
      <caption>Total number of leads 1</caption>
      <thead>
        <tr>
          <th>Lead-ID</th>
          <th>Date received</th>
          <th>Name</th>
          <th>P. Code</th>
          <th>Telephone</th>
          <th>Email Address</th>
          <th>Type of application</th>
          <th>Price</th>
          <th>Action</th>
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
          <td>Valuation request</td>
          <td>€39.99</td>
          <td>
            <a href="admin/view-lead.php"><i class="fas fa-eye mr-2"></i></a>
            <a href="admin/edit-lead.php"><i class="fas fa-file text-muted mr-2"></i></a>
            <a href=""><i class="fas fa-trash text-danger"></i></a>
          </td>
        </tr>
      </tbody>
    </table> 

    <hr>
  </div>
</div>

<?php include'../include/footer-admin.php';?>