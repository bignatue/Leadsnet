<?php 
  include'../include/header.php';
  include'../include/menu.php';
?>

<nav aria-label="breadcrumb breadcrumb-sm">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="lead/index.php">Home</a></li>
    <li class="breadcrumb-item active">My leads</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-3">
    <?php include'../include/account-sidebar.php';?>
  </div>
  <div class="col-md-9">
    
    <div class="row justify-content-between">
      <div class="col-sm-6">
        <h5>My Leads</h5>
      </div>
      <div class="col-sm-3">
        <input type="" name="" class="form-control form-control-sm mb-2" placeholder="Search...">
      </div>
    </div>

    <table class="table table-hover table-striped table-sm">
      <caption>Total number of leads 6</caption>
      <thead>
        <tr>
          <th scope="col">Lead-ID</th>
          <th scope="col">Name</th>
          <th scope="col">Address</th>
          <th scope="col">P. Code</th>
          <th scope="col">Contact No</th>
          <th scope="col">Email Address</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>21345</td>
          <td>Greg Trinidad</td>
          <td>Janstraat  22</td>
          <td>2243TR</td>
          <td>+61 821 06 20</td>
          <td>reggtr@gmail.com</td>
          <td>
            <a href="lead/lead-details.php"><i class="fas fa-eye mx-2"></i></a>            
          </td>
        </tr>
        <tr>
          <td>21345</td>
          <td>Greg Trinidad</td>
          <td>Janstraat  22</td>
          <td>2243TR</td>
          <td>+61 821 06 20</td>
          <td>reggtr@gmail.com</td>
          <td>
            <a href="lead/lead-details.php"><i class="fas fa-eye mx-2"></i></a>            
          </td>
        </tr>
        <tr>
          <td>21345</td>
          <td>Greg Trinidad</td>
          <td>Janstraat  22</td>
          <td>2243TR</td>
          <td>+61 821 06 20</td>
          <td>reggtr@gmail.com</td>
          <td>
            <a href="lead/lead-details.php"><i class="fas fa-eye mx-2"></i></a>            
          </td>
        </tr>
        <tr>
          <td>21345</td>
          <td>Greg Trinidad</td>
          <td>Janstraat  22</td>
          <td>2243TR</td>
          <td>+61 821 06 20</td>
          <td>reggtr@gmail.com</td>
          <td>
            <a href="lead/lead-details.php"><i class="fas fa-eye mx-2"></i></a>            
          </td>
        </tr>
        <tr>
          <td>21345</td>
          <td>Greg Trinidad</td>
          <td>Janstraat  22</td>
          <td>2243TR</td>
          <td>+61 821 06 20</td>
          <td>reggtr@gmail.com</td>
          <td>
            <a href="lead/lead-details.php"><i class="fas fa-eye mx-2"></i></a>            
          </td>
        </tr>
      </tbody>
    </table>
    <hr>
  </div>
</div>

<?php include'../include/footer.php';?>