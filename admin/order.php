<?php 
  include'../include/header-admin.php';
  include'../include/admin-menu.php';
?>

<div class="container-fluid py-5 mt-3">

<nav aria-label="breadcrumb breadcrumb-sm">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin/index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="admin/index.php">Admin</a></li>
    <li class="breadcrumb-item active">Order</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-2">
    <?php include'../include/admin-sidebar.php'; ?>
  </div>
  <div class="col-md-10"> 
    <div class="row justify-content-between">
      <div class="col-sm-6">
        <h5>Order</h5>
      </div>
      <div class="col-sm-2">
        <input type="" name="" class="form-control form-control-sm mb-2" placeholder="Search...">
      </div>
      <div class="col-sm-2">
        <select class="form-control form-control-sm mb-2">
          <option value="0">Status</option>
          <option value="1">Complete</option>
          <option value="2">Viod</option>
          <option value="3">Pending</option>
          <option value="4">On hold</option>
        </select>
      </div>
      <div class="col-sm-2">
        <select class="form-control form-control-sm mb-2">
          <option value="0">Type of Application</option>
          <option>Standard Lead</option>
        </select>
      </div>
    </div>
    <table class="table table-hover table-striped table-sm table-bordered">
      <caption>Total number of leads 4</caption>
      <thead>
        <tr>
          <th>Lead-ID</th>
          <th>Date purchased</th>
          <th>Buyers Name</th>
          <th>Type of application</th>
          <th>Price</th>
          <th>Processor</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>12345</td>
          <td>14-09-2018</td>
          <td>Brian Bantigue</td>
          <td>Valuation request</td>
          <td>€39.99</td>
          <td>Stripe</td>
          <td><span class="text-primary">Complete</span></td>
          <td>
            <a href="admin/view-lead.php"><i class="fas fa-eye mr-2"></i></a>
          </td>
        </tr>
        <tr>
          <td>12345</td>
          <td>14-09-2018</td>
          <td>Brian Bantigue</td>
          <td>Valuation request</td>
          <td>€39.99</td>
          <td>Stripe</td>
          <td><span class="text-danger">Viod</span></td>
          <td>
            <a href="admin/view-lead.php"><i class="fas fa-eye mr-2"></i></a>
          </td>
        </tr>
        <tr>
          <td>12345</td>
          <td>14-09-2018</td>
          <td>Brian Bantigue</td>
          <td>Valuation request</td>
          <td>€39.99</td>
          <td>Stripe</td>
          <td><span class="text-muted">Pending</span></td>
          <td>
            <a href="admin/view-lead.php"><i class="fas fa-eye mr-2"></i></a>
          </td>
        </tr>
        <tr>
          <td>12345</td>
          <td>14-09-2018</td>
          <td>Brian Bantigue</td>
          <td>Valuation request</td>
          <td>€39.99</td>
          <td>Stripe</td>
          <td><span class="text-muted">On Hold</span></td>
          <td>
            <a href="admin/view-lead.php"><i class="fas fa-eye mr-2"></i></a>
          </td>
        </tr>
      </tbody>
    </table> 

    <hr>
  </div>
</div>

<?php include'../include/footer-admin.php';?>