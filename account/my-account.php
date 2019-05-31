<?php 
  include'../include/header.php';
  include'../include/menu.php';
?>

<nav aria-label="breadcrumb breadcrumb-sm">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="lead/index.php">Home</a></li>
    <li class="breadcrumb-item active">My Account</li>
  </ol>
</nav>

<div class="row pb-5">
  <div class="col-3">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-personal-tab" data-toggle="pill" href="#v-personal" role="tab" aria-controls="v-personal" aria-selected="true">Personal</a>
      <a class="nav-link" id="v-billing-tab" data-toggle="pill" href="#v-billing" role="tab" aria-controls="v-billing" aria-selected="false">Billing</a>
      <a class="nav-link" id="v-payment-tab" data-toggle="pill" href="#v-payment" role="tab" aria-controls="v-payment" aria-selected="false">Payment</a>
      <a class="nav-link" id="v-password-tab" data-toggle="pill" href="#v-password" role="tab" aria-controls="v-password" aria-selected="false">Password</a>
      <a class="nav-link" id="v-company-tab" data-toggle="pill" href="#v-company" role="tab" aria-controls="v-company" aria-selected="false">Company</a>
    </div>
  </div>
  <div class="col-9">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-personal" role="tabpanel" aria-labelledby="v-personal-tab">
        <ul class="list-group mb-3">
          <li class="list-group-item active py-2">
            <span class="row justify-content-between">
              <span class="col-4">PERSONAL DETAILS</span>
              <span class="col-2 pull-right text-right"><a class="text-white" href="">Edit</a></span>
            </span>
          </li>
          <li class="list-group-item pb-3">
            <h5 class="card-title mb-1">Jan Smit</h5>
            <p class="card-text mb-1">jansmit@gmail.com</p>  
            <p class="card-text mb-1">020 456 3768</p>  
            <p class="card-text mb-3">Frans Halskade 77, Rijswijk</p> 

            <!-- for edit --
            <div class="row">     
              <div class="col-sm-6">
                <label>Name:</label>
                <input type="text" name="" class="form-control form-control-sm mb-3" value="Jan Smit"> 
                <label>Email:</label>
                <input type="text" name="" class="form-control form-control-sm mb-3" value="jansmit@gmail.com"> 
                <label>Mobile:</label>
                <input type="text" name="" class="form-control form-control-sm mb-3" value="020 456 3768"> 
                <label>Address:</label>
                <input type="text" name="" class="form-control form-control-sm mb-3" value="Frans Halskade 77, Rijswijk"> 
                <label>Company:</label>
                <input type="text" name="" class="form-control form-control-sm mb-3" value="RE/MAX Probonet"> 
                <label>Contact Number:</label>
                <input type="text" name="" class="form-control form-control-sm" value="070 345 6574"> 
              </div>
            </div>
            -- end for edit -->

          </li>
        </ul>    
      </div>
      <div class="tab-pane fade" id="v-billing" role="tabpanel" aria-labelledby="v-billing-tab">
        <ul class="list-group mb-3">
          <li class="list-group-item active py-2">
            <span class="row justify-content-between">
              <span class="col-4">BILLING ADDRESS</span>
              <span class="col-2 pull-right text-right"><a class="text-white" href="">Edit</a></span>
            </span>
          </li>
          <li class="list-group-item"> 
            <form class="needs-validation" novalidate="">
              <p class="card-title mb-1">123 Main Street</p>
              <p class="card-text mb-1">Amsterdam</p>  
              <p class="card-text mb-1">Netherlands</p>  
              <p class="card-text mb-3">ABC123</p>

              <!-- for billing address for edit
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
              <hr class="my-3">
              <div class="row justify-content-end mb-5">
                <div class="col-md-4">
                  <div class="alert d-none alert-success p-2 mb-2" role="alert">Alert message here!</div>
                  <a class="btn btn-primary btn-sm btn-block" href="" role="button">Save</a>  
                </div>
              </div>--> 

            </form>       
          </li>
        </ul>    
      </div>

      <div class="tab-pane fade" id="v-payment" role="tabpanel" aria-labelledby="v-payment-tab">
        <ul class="list-group mb-3">
          <li class="list-group-item active py-2">
            <span class="row justify-content-between">
              <span class="col-4">PAYMENT</span>
              <span class="col-2 pull-right text-right"><a class="text-white" href="">Edit</a></span>
            </span>
          </li>
          <li class="list-group-item">
            <div class="row pb-3">
              <div class="col-md-6">
                <p class="card-text font-weight-bold mb-0"><i class="fas fa-check mr-1"></i>Credit Card</p>
                <hr class="my-2">
                <h6 class="card-title mb-1">Micheal Reyes</h6>
                <p class="card-text mb-1">1234 1234 1234 1234</p>  
                <p class="card-text mb-1">Nov 2020</p>  
                <p class="card-text mb-0">33A</p>
              </div>
            </div>
            
            <!--
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
                <div class="col-md-6">
                  <label for="cc-name">Name on card <span class="text-danger">*</span></label>
                  <input type="text" class="form-control form-control-sm" id="cc-name" placeholder="" required>
                  <small class="text-muted">Full name as display-none on card</small>            
                  <div class="alert d-none alert-danger py-1 px-2" role="alert">Alert message here!</div>
                </div>
                <div class="col-md-6">
                  <label for="cc-number">Credit card number <span class="text-danger">*</span></label>
                  <input type="text" class="form-control form-control-sm" id="cc-number" placeholder="" required>            
                  <div class="alert d-none alert-danger py-1 px-2" role="alert">Alert message here!</div>
                </div>
              </div>
              <div class="row mb-5">
                <div class="col-md-3">
                  <label for="cc-expiration">Expiration <span class="text-danger">*</span></label>
                  <input type="text" class="form-control form-control-sm" id="cc-expiration" placeholder="" required>            
                  <div class="alert d-none alert-danger py-1 px-2" role="alert">Alert message here!</div>

                </div>
                <div class="col-md-3">
                  <label for="cc-cvv">CVV <span class="text-danger">*</span></label>
                  <input type="text" class="form-control form-control-sm" id="cc-cvv" placeholder="" required>            
                  <div class="alert d-none alert-danger py-1 px-2" role="alert">Alert message here!</div>
                </div>
                <div class="col-md-6">
                  <label></label>
                  <div class="alert d-none alert-success p-2 mb-2" role="alert">Alert message here!</div>
                  <a class="btn btn-primary btn-sm btn-block mt-2" href="" role="button">Save</a>  
                </div>
              </div>-->      
            </li>
          </ul>    
        </div> 

        <div class="tab-pane fade" id="v-password" role="tabpanel" aria-labelledby="v-password-tab">
          <ul class="list-group mb-3">
            <li class="list-group-item active py-2">
              <span class="row">
                <span class="col-4">PASSWORD</span> 
              </span>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-md-6">
                  <label for="cc-name">Current password <span class="text-danger">*</span></label>
                  <input type="text" class="form-control form-control-sm mb-2" id="cc-name" placeholder="*************" required>      
                  <div class="alert d-none alert-danger py-1 px-2" role="alert">Alert message here!</div>

                  <label for="cc-name">New password <span class="text-danger">*</span></label>
                  <input type="text" class="form-control form-control-sm mb-2" id="cc-number" placeholder="*************" required>   
                  <div class="alert d-none alert-danger py-1 px-2" role="alert">Alert message here!</div>

                  <label for="cc-name">Confirm password <span class="text-danger">*</span></label>
                  <input type="text" class="form-control form-control-sm mb-3" id="cc-number" placeholder="*************" required>   
                  <div class="alert d-none alert-danger py-1 px-2" role="alert">Alert message here!</div> 

                  <div class="alert d-none alert-danger py-1 px-2" role="alert">Alert message here!</div>
                  <div class="alert d-none alert-success p-2 mb-2" role="alert">Alert message here!</div>
                  <a class="btn btn-primary btn-sm btn-block mt-2 mb-3" href="" role="button">Save</a>  
                </div>
              </div>
            </li>
          </ul>
        </div>

        <div class="tab-pane fade" id="v-company" role="tabpanel" aria-labelledby="v-company-tab">
          <ul class="list-group mb-3">
            <li class="list-group-item active py-2">
              <span class="row justify-content-between">
                <span class="col-4">COMPANY</span> 
                <span class="col-2 pull-right text-right"><a class="text-white" href="">Edit</a></span>
              </span>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-md-6">
                  <p class="font-weight-bold mb-1">RE/MAX Probonet</p>
                  <p class="card-text mb-1">070 345 6574</p> 
                  <p class="card-text mb-3">Frans Halskade 77, Rijswijk</p> 

                <!-- for edit --
                <div class="row">     
                  <div class="col-sm-6">
                    <label>Company:</label>
                    <input type="text" name="" class="form-control form-control-sm mb-3" value="RE/MAX Probonet">
                    <label>Company:</label>
                    <input type="text" name="" class="form-control form-control-sm" value="070 345 6574"> 
                    <label>Company:</label>
                    <input type="text" name="" class="form-control form-control-sm mb-3" value="Frans Halskade 77, Rijswijk"> 
                  </div>
                </div>
                -- end for edit -->

                </div>
              </div>
            </li>
          </ul>
        </div>

    </div>
  </div>
</div>



<?php include'../include/footer.php';?>