<?php 
  include'../include/header.php';
  include'../include/menu.php';
?>

<nav aria-label="breadcrumb breadcrumb-sm">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active">Home</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-3">
    <?php include'../include/account-sidebar.php';?>
  </div>
  <div class="col-md-9">
    <label>Find your new customer</label>
    <input type="text" class="form-control form-control-sm mb-3" placeholder="Enter your postal code to find your leads">
    <div class="row justify-content-end">
      <div class="col-sm-9">
        <h6>Your search result</h6>
      </div>
      <div class="col-sm-3 text-right">
        <h5><a href="" class="text-secondary"><i class="fas fa-sync-alt"></i></a></h5>
      </div>
    </div>

    <!-- search result start -->
    <table class="table table-hover table-striped table-sm">
      <caption>Total number of leads 6</caption>
      <thead>
        <tr>
          <th>Select</th>
          <th>Lead ID</th>
          <th>Date posted</th>
          <th>P. Code</th>
          <th>Lead Type</th>
          <th>Price</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">
            <div class="form-check">
              <input class="form-check-input" type="checkbox">
            </div>
          </th>
          <td>12345</td>
          <td>14-09-2018</td>
          <td>2243TR</td>
          <td>Valuation request</td>
          <td>€ 39.99</td>
          <td><a href="" class="btn btn-link btn-sm py-0" data-toggle="modal" data-target="#leaddetails"><i class="fas fa-eye mr-2"></i></a></td>
        </tr>
        <tr>
          <th scope="row">
            <div class="form-check">
              <input class="form-check-input" type="checkbox">
            </div>
          </th>
          <td>12345</td>
          <td>14-09-2018</td>
          <td>2243TR</td>
          <td>Valuation request</td>
          <td>€ 39.99</td>
          <td><a href="" class="btn btn-link btn-sm py-0" data-toggle="modal" data-target="#leaddetails"><i class="fas fa-eye mr-2"></i></a></td>
        </tr>
        <tr>
          <th scope="row">
            <div class="form-check">
              <input class="form-check-input" type="checkbox">
            </div>
          </th>
          <td>12345</td>
          <td>14-09-2018</td>
          <td>2243TR</td>
          <td>Valuation request</td>
          <td>€ 39.99</td>
          <td><a href="" class="btn btn-link btn-sm py-0" data-toggle="modal" data-target="#leaddetails"><i class="fas fa-eye mr-2"></i></a></td>
        </tr>
        <tr>
          <th scope="row">
            <div class="form-check">
              <input class="form-check-input" type="checkbox">
            </div>
          </th>
          <td>12345</td>
          <td>14-09-2018</td>
          <td>2243TR</td>
          <td>Valuation request</td>
          <td>€ 39.99</td>
          <td><a href="" class="btn btn-link btn-sm py-0" data-toggle="modal" data-target="#leaddetails"><i class="fas fa-eye mr-2"></i></a></td>
        </tr>
        <tr>
          <th scope="row">
            <div class="form-check">
              <input class="form-check-input" type="checkbox">
            </div>
          </th>
          <td>12345</td>
          <td>14-09-2018</td>
          <td>2243TR</td>
          <td>Valuation request</td>
          <td>€ 39.99</td>
          <td><a href="" class="btn btn-link btn-sm py-0" data-toggle="modal" data-target="#leaddetails"><i class="fas fa-eye mr-2"></i></a></td>
        </tr>
        <tr>
          <th scope="row">
            <div class="form-check">
              <input class="form-check-input" type="checkbox">
            </div>
          </th>
          <td>12345</td>
          <td>14-09-2018</td>
          <td>2243TR</td>
          <td>Valuation request</td>
          <td>€ 39.99</td>
          <td><a href="" class="btn btn-link btn-sm py-0" data-toggle="modal" data-target="#leaddetails"><i class="fas fa-eye mr-2"></i></a></td>
        </tr>
      </tbody>
    </table>

    <!-- Modal -->
    <div class="modal fade" id="leaddetails" tabindex="-1" role="dialog" aria-labelledby="leaddetailsLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-primary" id="leaddetailsLabel">LEAD INFO</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table table-sm">
              <tr>
                <th width="50%" class="border-0">Lead type:</th>
                <td class="border-0">Standard Lead</td>
              </tr>
              <tr>
                <th>Applicant wants to sell property:</th>
                <td>Ja</td>
              </tr>
              <tr>
                <th>Reason for the sale:</th>
                <td>Unknown</td>
              </tr>
              <tr>
                <th>Scheduled sales term:</th>
                <td>2018</td>
              </tr>
              <tr>
                <th>Type of house:</th>
                <td>Between home</td>
              </tr>
              <tr>
                <th>Year:</th>
                <td>1978</td>
              </tr>
              <tr>
                <th>Visitor confirmation confirmed:</th>
                <td>Ja</td>
              </tr>
              <tr>
                <th>For Contact:</th>
                <td>Ja</td>
              </tr>
              <tr>
                <th>Additional information:</th>
                <td>Hoewel wij onze uiterste best doen om ‘nepleads’ uit te sluiten, is dit niet altijd mogelijk.</td>
              </tr>
            </table>
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary btn-sm rounded-0" data-dismiss=""><i class="fas fa-cart-plus mr-2"></i> Add to cart</button>
            <button type="button" class="btn btn-primary btn-sm rounded-0" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->

    <hr class="mt-0">
    <div class="text-right">
      <a class="btn btn-primary btn-sm" href="lead/my-order.php" role="button">Add to cart</a>
    </div>
  </div>
</div>

<?php include'../include/footer.php';?>