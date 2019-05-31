<?php 
  include'../include/header-admin.php';
  include'../include/admin-menu.php';
?>

<div class="container-fluid py-5 mt-3">

<nav aria-label="breadcrumb breadcrumb-sm">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin/index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="admin/index.php">Admin</a></li>
    <li class="breadcrumb-item active">Lead details</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-2">
    <?php include'../include/admin-sidebar.php'; ?>
  </div>
  <div class="col-md-10"> 
      <div class="row justify-content-between">
        <div class="col-sm-3">
          <h4>LEAD DETAILS</h4>
        </div>
        <div class="col-md-2 text-right">
          <a href="admin/index.php" class="btn btn-primary btn-sm">Back</a>
          <a href="admin/edit-lead.php" class="btn btn-primary btn-sm px-2">Edit</a>
        </div>
      </div> 
      <hr class="my-2">
      <div class="d-block my-3">        
        <div class="row">
          <div class="col-sm-6">
            <p class="mb-2 text-primary">GEGEVENS AANVRAGER/AANVRAAGSTER</p>
            <table class="table table-sm">
              <tr>
                <th class="w-50">CTP-ID:</th>
                <td>22633</td> 
              </tr>
              <tr>
                <th>First Name:</th>
                <td>Cassandra</td> 
              </tr>
              <tr>
                <th>Last Name:</th>
                <td>Lisfrock</td> 
              </tr>
              <tr>
                <th>Street:</th>
                <td>Generaal Coenderslaan</td> 
              </tr>
              <tr>
                <th>Number:</th>
                <td>10</td> 
              </tr>
              <tr>
                <th>Post Code:</th>
                <td>5623LW</td> 
              </tr>
              <tr>
                <th>Place:</th>
                <td>Eindhoven</td> 
              </tr>
              <tr>
                <th>Telephone:</th>
                <td>0642526052</td> 
              </tr>
              <tr>
                <th>Email:</th>
                <td>xandra_lijfrock@hotmail.com</td> 
              </tr>
            </table>
            <p class="mb-2 text-primary">LEAD INFO</p>
            <table class="table table-sm">
              <tr>
                <th class="w-50">Lead Type:</th>
                <td>Standard Lead</td> 
              </tr>
              <tr>
                <th>Sale Intention:</th>
                <td>Ja</td> 
              </tr>
              <tr>
                <th>Reason for the sale:</th>
                <td>Unknown</td> 
              </tr>
              <tr>
                <th>Scheduled Sales Term:</th>
                <td>2018</td> 
              </tr>
              <tr>
                <th>Type Of House:</th>
                <td>Between Home</td> 
              </tr>
              <tr>
                <th>Year:</th>
                <td>1978</td> 
              </tr>
              <tr>
                <th>Visitor Confirmed:</th>
                <td>Ja</td> 
              </tr>
              <tr>
                <th>For Contact:</th>
                <td>Ja</td> 
              </tr>
            </table>
          </div>
          <div class="col-sm-6">
            <p class="mb-2 text-primary">PRICE</p>
            <table class="table table-sm">
              <tr>
                <th class="w-50">Price P/Lead:</th>
                <td>€ 49</td> 
              </tr>
              <tr>
                <th>Google Street View:</th>
                <td><a href="">View here</a></td> 
              </tr>
              <tr>
                <td colspan="2">
                  <p class="font-weight-bold my-2">Additional information:</p>
                  <p>Hoewel wij onze uiterste best doen om ‘nepleads’ uit te sluiten, is dit niet altijd mogelijk.</p>
                </td> 
              </tr>
            </table>
          </div>
        </div>
            
      </div>
    </div>
 
</div>

<?php include'../include/footer-admin.php';?>