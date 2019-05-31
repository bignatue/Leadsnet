<?php 
  include'../include/header.php';
  include'../include/menu.php';
?>

<nav aria-label="breadcrumb breadcrumb-sm">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="lead/index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="lead/index.php">Lead</a></li>
    <li class="breadcrumb-item active">Payment Confirmation</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-3">
    <?php include'../include/account-sidebar.php';?>
  </div>
  <div class="col-md-6">
    <h5>Payment Confirmation</h5>
    <hr>
    <p class="mb-1 text-primary">Confirmation Number:</p>
    <h3 class="text-danger">MPI9ETP5A1</h3>
    <table class="table table-sm">
      <tr>
        <td>Amount</td>
        <td>: € 194.50</td>
      </tr>
      <tr>
        <td>Number of Leads</td>
        <td>: 3</td>
      </tr>
      <tr>
        <td>Date and Time</td>
        <td>: November 16, 2018 11:37:03 AM (GMT +8)</td>
      </tr>
    </table>
    <p>You can pay this reference number to Account #: 1234 1234 1234 RABO Bank.</p>

    <hr>
    <div class="text-right">
      <a class="btn btn-primary btn-sm" href="lead/index.php" role="button">OK ››</a>
    </div>
  </div>
  <div class="col-md-3 pt-2 hideonmobile">
    <?php include'../include/total-summary.php';?>
  </div>
</div>

<?php include'../include/footer.php';?>