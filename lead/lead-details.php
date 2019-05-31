<?php 
  include'../include/header.php';
  include'../include/menu.php';
?>
    <nav aria-label="breadcrumb breadcrumb-sm">
      <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="lead/index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Lead Details</li>
      </ol>
    </nav>

    <div class="row">
      <div class="col-md-3 hideonmobile">
        <?php include'../include/account-sidebar.php';?>
      </div>
      <div class="col-md-9"> 
        <div class="row justify-content-between">
          <div class="col-sm-12">
            <h4>LEAD DETAILS</h4>
          </div>
        </div> 
        <div class="row">
          <div class="col-sm-8">
            <hr class="mt-0 mb-2">
            <div class="d-block"> 
              <p class="mb-2 text-primary">GEGEVENS AANVRAGER/AANVRAAGSTER</p>
              <table class="table table-sm">
                <tr>
                  <th class="pl-0 w-50">CTP-ID:</th>
                  <td class="text-danger">22633</td> 
                </tr>
                <tr>
                  <th class="pl-0">First Name:</th>
                  <td class="text-danger">Cassandra</td> 
                </tr>
                <tr>
                  <th class="pl-0">Last Name:</th>
                  <td class="text-danger">Lisfrock</td> 
                </tr>
                <tr>
                  <th class="pl-0">Street:</th>
                  <td class="text-danger">Generaal Coenderslaan</td> 
                </tr>
                <tr>
                  <th class="pl-0">Number:</th>
                  <td class="text-danger">10</td> 
                </tr>
                <tr>
                  <th class="pl-0">Post Code:</th>
                  <td class="text-danger">5623LW</td> 
                </tr>
                <tr>
                  <th class="pl-0">Place:</th>
                  <td class="text-danger">Eindhoven</td> 
                </tr>
                <tr>
                  <th class="pl-0">Telephone:</th>
                  <td class="text-danger">0642526052</td> 
                </tr>
                <tr>
                  <th class="pl-0">Email:</th>
                  <td class="text-danger">xandra_lijfrock@hotmail.com</td> 
                </tr>
              </table>
              <p class="mb-2 text-primary">LEAD INFO</p>
              <table class="table table-sm">
                <tr>
                  <th class="pl-0 w-50">Lead Type:</th>
                  <td class="text-danger">Standard Lead</td> 
                </tr>
                <tr>
                  <th class="pl-0">Sale Intention:</th>
                  <td class="text-danger">Ja</td> 
                </tr>
                <tr>
                  <th class="pl-0">Reason for the sale:</th>
                  <td class="text-danger">Unknown</td> 
                </tr>
                <tr>
                  <th class="pl-0">Scheduled Sales Term:</th>
                  <td class="text-danger">2018</td> 
                </tr>
                <tr>
                  <th class="pl-0">Type Of House:</th>
                  <td class="text-danger">Between Home</td> 
                </tr>
                <tr>
                  <th class="pl-0">Year:</th>
                  <td class="text-danger">1978</td> 
                </tr>
                <tr>
                  <th class="pl-0">Visitor Confirmed:</th>
                  <td class="text-danger">Ja</td> 
                </tr>
                <tr>
                  <th class="pl-0">For Contact:</th>
                  <td class="text-danger">Ja</td> 
                </tr>
              </table>    
              <p class="mb-2 text-primary">PRICE</p>
              <table class="table table-sm mb-1">
                <tr>
                  <th class="pl-0 w-50">Price P/Lead:</th>
                  <td class="text-danger pb-3">€ 49</td> 
                </tr>
                <tr>
                  <td colspan="2">
                    <p class="font-weight-bold mb-1">Additional information:</p>
                    <p class="mb-3 text-danger">Hoewel wij onze uiterste best doen om ‘nepleads’ uit te sluiten, is dit niet altijd mogelijk.</p>
                  </td> 
                </tr>
                <tr>
                  <th class="pl-0">Google Street View:</th>
                  <td class="text-danger"><a class="btn btn-linnk btn-sm text-danger" href="">Click here</a></td> 
                </tr>
              </table>
            </div>
          </div>

           <div class="col-md-4 hideonmobile">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Live leads</h5>
                    <ul class="list-group list-group-flush mb-3">
                      <li class="list-group-item d-flex justify-content-between align-items-center pl-0">
                        R*** uit 's-Gravenhage Woningwaarde  Ik ben nieuwsgierig
                        <span class="badge">€ 748.546</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center pl-0">
                        M*** uit Heemstede Woningwaarde Ik wil Verkopen
                        <span class="badge">€ 547.116</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center pl-0">
                        M*** uit Haarlem Woningwaarde Ik ben nieuwsgierig
                        <span class="badge">€ 359.701</span>
                      </li>
                    </ul>
                    <a href="lead/index.php" class="btn btn-primary btn-sm btn-block">View</a>
                  </div>
                </div>             
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>

    

<?php include'../include/footer.php';?>