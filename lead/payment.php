<?php 
  include'../include/header.php';
  include'../include/menu.php';
?>
    <nav aria-label="breadcrumb breadcrumb-sm">
      <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="lead/index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Payment</li>
      </ol>
    </nav>

    <div class="row">
      <div class="col-md-3 hideonmobile">
        <?php include'../include/account-sidebar.php';?>
      </div>
      <div class="col-md-6 pb-4">
        <h4 class="mb-3">BILLING ADDRESS</h4>
        <form class="needs-validation" novalidate="">

          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="firstName">First name <span class="text-danger">*</span></label>
              <input type="text" class="form-control form-control-sm" id="firstName" placeholder="" value="" required>              
              <div class="alert d-none alert-danger py-1 px-2" role="alert">Alert message here!</div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="lastName">Last name <span class="text-danger">*</span></label>
              <input type="text" class="form-control form-control-sm" id="lastName" placeholder="" value="" required>              
              <div class="alert d-none alert-danger py-1 px-2" role="alert">Alert message here!</div>
            </div>
          </div>

          <div class="mb-3">
            <label for="username">Username <span class="text-danger">*</span></label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">@</span>
              </div>
              <input type="text" class="form-control form-control-sm" id="username" placeholder="Username" required>
              <div class="alert d-none alert-danger py-1 px-2" role="alert">Alert message here!</div>
            </div>
          </div>

          <div class="mb-3">
            <label for="email">Email <span class="text-danger">*</span></label>
            <input type="email" class="form-control form-control-sm" id="email" placeholder="you@example.com">
            <div class="text-danger mb-1 display-none">Invalid email address!</div>
          </div>

          <div class="mb-3">
            <label for="address">Address <span class="text-danger">*</span></label>
            <input type="text" class="form-control form-control-sm" id="address" placeholder="1234 Main St" required>              
            <div class="alert d-none alert-danger py-1 px-2" role="alert">Alert message here!</div>
          </div>

          <div class="mb-3">
            <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
            <input type="text" class="form-control form-control-sm" id="address2" placeholder="Apartment or suite">
          </div>

          <div class="row">
            <div class="col-md-4 mb-1">
              <label for="country">Country <span class="text-danger">*</span></label>
              <select class="custom-select custom-select-sm d-block w-100" id="country" required>
                <option value="">Choose...</option>
                <option>United States</option>
              </select>              
              <div class="alert d-none alert-danger py-1 px-2" role="alert">Alert message here!</div>
            </div>
            <div class="col-md-4 mb-1">
              <label for="state">State <span class="text-danger">*</span></label>
              <select class="custom-select custom-select-sm d-block w-100" id="state" required>
                <option value="">Choose...</option>
                <option>California</option>
              </select>              
              <div class="alert d-none alert-danger py-1 px-2" role="alert">Alert message here!</div>
            </div>

            <div class="col-md-4 mb-1">
              <label for="zip">Zip <span class="text-danger">*</span></label>
              <input type="text" class="form-control form-control-sm" id="zip" placeholder="" required>              
              <div class="alert d-none alert-danger py-1 px-2" role="alert">Alert message here!</div>
            </div>
          </div>
          <hr class="mb-3">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="save-info">
            <label class="custom-control-label" for="save-info">Save this information for next time</label>
          </div>
        </form> 
        <hr class="my-3">

        <h4 class="mb-2">PAYMENT</h4>
        <hr class="my-0">

        <div class="d-block my-3">
          <div class="row">
          <div class="col-sm-3">
            <div class="custom-control custom-radio">
              <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required>
              <label class="custom-control-label" for="credit">Credit card <span class="text-danger">*</span></label>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="custom-control custom-radio">
              <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
              <label class="custom-control-label" for="debit">Debit card</label>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="custom-control custom-radio">
              <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
              <label class="custom-control-label" for="paypal">PayPal</label>
            </div>
          </div>
        </div>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="cc-name">Name on card <span class="text-danger">*</span></label>
            <input type="text" class="form-control form-control-sm" id="cc-name" placeholder="" required>
            <small class="text-muted">Full name as display-none on card</small>            
            <div class="alert d-none alert-danger py-1 px-2" role="alert">Alert message here!</div>

          </div>
          <div class="col-md-6 mb-3">
            <label for="cc-number">Credit card number <span class="text-danger">*</span></label>
            <input type="text" class="form-control form-control-sm" id="cc-number" placeholder="" required>            
            <div class="alert d-none alert-danger py-1 px-2" role="alert">Alert message here!</div>

          </div>
        </div>

        <div class="row">
          <div class="col-md-3 mb-0">
            <label for="cc-expiration">Expiration <span class="text-danger">*</span></label>
            <input type="text" class="form-control form-control-sm" id="cc-expiration" placeholder="" required>            
            <div class="alert d-none alert-danger py-1 px-2" role="alert">Alert message here!</div>

          </div>
          <div class="col-md-3 mb-0">
            <label for="cc-cvv">CVV <span class="text-danger">*</span></label>
            <input type="text" class="form-control form-control-sm" id="cc-cvv" placeholder="" required>            
            <div class="alert d-none alert-danger py-1 px-2" role="alert">Alert message here!</div>
          </div>
        </div>

        <hr class="mb-3">        
        <div class="alert d-none alert-success p-2 mb-2" role="alert">Alert message here!</div>
        <a class="btn btn-primary btn-sm btn-block" href="lead/checkout.php" role="button">Continue to checkout</a>
      </div>
      
      <div class="col-md-3">
        <?php include'../include/total-summary.php';?>
      </div>

<?php include'../include/footer.php';?>