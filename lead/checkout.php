<?php 
  include'../include/header.php';
  include'../include/menu.php';
?>
    <nav aria-label="breadcrumb breadcrumb-sm">
      <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="lead/index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
      </ol>
    </nav>

    <div class="row">
      <div class="col-md-3">
        <?php include'../include/account-sidebar.php';?>
      </div>
      <div class="col-md-9">
        <h4 class="mb-3">Congratulations! Your order is accepted.</h4>
        <hr>
        <div class="">
          <p>Thank you for your order! Your order is being processed and will be completed within 3-6 hours. You will receive an email confirmation when your order is completed.</p>
          <p>Your track number is: 287-48823sw47u. <a href="">Track Order</a></p>
          <a class="btn btn-primary btn-sm" href="lead/index.php" role="button">Continue Shopping</a>
        </div>
      </div>
    </div>

      

<?php include'../include/footer.php';?>