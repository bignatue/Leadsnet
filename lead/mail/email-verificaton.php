<?php 
  include'../../include/header.php';
?>

    
    <div class="row py-4 px-1">
      <div class="col-md-6 ">
        <h4 class="mb-3">Your Account Has Been Created!</h4>
        <p class="bg-primary px-3 mb-5">
          <a class="navbar-brand" href=""><i class="fas fa-check text-white"></i> <span class="text-black font-weight-bold">LEADS<span class="font-weight-normal">APP</span></span></a>
        </p>
        <div class="">
          <p>Hi {full_name},</p>

          <p class="mb-4">Your <span class="font-weight-bold text-primary">Leadsapp</span> account has been successfully created.</p>

          <p class="mb-1 font-weight-bold">Your login details</p>
          <p class="mb-1">Username: {username}</p>
          <p class="mb-4">Username: {password}</p>

          <p class="mb-4">Please click button below to login your account.</p>
          <p class="mb-5"><a class="btn btn-primary btn-sm" href="account/login.php" role="button">Login to your account</a></p>

          <div class="mb-4">
            <p class="mb-1 font-weight-bold">We are here for you if need support:</p>
            <p class="mb-1"><i class="fas fa-mobile"></i> Call: <a href="tel:085 234 5454">085 234 5454</a></p>
            <p class="mb-1"><i class="fas fa-envelope"></i> Email: <a href="mailto:info@leadsapp.nl">info@leadsapp.nl</a></p>
          </div>
          
          <footer class="d-flex justify-content-center bg-blue text-white pb-4">
            <div class="row pt-4">
                <div class="col-lg-12 ml-auto text-center">
                  <h3 class="font-weight-bold"><i class="fas fa-check text-white"></i> <span class="text-black">LEADSAPP</span></h3>
                  <img class="my-3" src="img/footerhr.png">
                  <h5 class="mb-0 h5">Converdix B.V.</h5>
                  <p class="mb-0">A Multi Media Target Marketing Company</p>
                  <p>Alle rechten voorbehouden</p>
                  <div class="py-2">
                    <p>
                      <a class="text-white" href="">ZO WERKT HET</a>
                      <span class="mx-2">|</span>
                      <a class="text-white js-scroll-trigger" href="">ONZE LEADS</a>
                      <span class="mx-2">|</span>
                      <a class="text-white js-scroll-trigger" href="" data-toggle="modal" data-target="">PRIJZEN</a>
                      <span class="mx-2">|</span>
                      <a class="text-white" target="_blank" href="https://financieel-slim.nl/gratis-waardebepaling-aanvragen-6/">KLANTEN</a>
                    </p>
                  </div>
                  <p class="mb-0">Burgemeester Elsenlaan 321, 2282 MZ Rijswijk <a class="text-white" href="mailto:info@makelnet.nl">info@makelnet.nl</a></p>
                  <h6 class="h6">@Makelnet powered by Triban Media Group</h6>

                </div>
              </div>
          </footer>

        </div>
      </div>
    </div>

<?php include'../../include/footer.php';?>