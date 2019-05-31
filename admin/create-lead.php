<?php 
  include'../include/header-admin.php';
  include'../include/admin-menu.php';
?>

<div class="container-fluid py-5 mt-3">

<nav aria-label="breadcrumb breadcrumb-sm">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="index.php">Admin</a></li>
    <li class="breadcrumb-item active">Create lead</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-2">
    <?php include'../include/admin-sidebar.php'; ?>
  </div>
  <div class="col-md-10"> 
      <div class="row justify-content-between">
        <div class="col-sm-3">
          <h4>CREATE LEAD</h4>
        </div>
      </div> 
      <hr class="my-2">
      <div class="d-block my-3">
        <div class="row">
          <div class="col-md-4">
            <p class="mb-2 text-primary">Gegevens aanvrager/aanvraagster</p>   
            <label class="mb-1">Lead-ID <span class="text-danger">*</span></label>                                
            <input type="text" name="" class="form-control form-control-sm mb-2" placeholder="12345">
            <div class="alert d-none alert-danger py-1 px-2" role="alert">Alert message here!</div>

            <label class="mb-1">First Name <span class="text-danger">*</span></label>
            <input type="text" name="" class="form-control form-control-sm mb-2" placeholder="Greg">
            <div class="alert d-none alert-danger py-1 px-2" role="alert">Alert message here!</div>

            <label class="mb-1">Last Name <span class="text-danger">*</span></label>
            <input type="text" name="" class="form-control form-control-sm mb-2" placeholder="Trinidad">
            <div class="alert d-none alert-danger py-1 px-2" role="alert">Alert message here!</div>

            <label class="mb-1">Street <span class="text-danger">*</span></label> 
            <input type="text" name="" class="form-control form-control-sm mb-2" placeholder="Escudo Lane">
            <div class="alert d-none alert-danger py-1 px-2" role="alert">Alert message here!</div>

            <label class="mb-1">Number <span class="text-danger">*</span></label>                            
            <input type="text" name="" class="form-control form-control-sm mb-2" placeholder="7306">
            <div class="alert d-none alert-danger py-1 px-2" role="alert">Alert message here!</div>
            
            <label class="mb-1">Post Code <span class="text-danger">*</span></label>                            
            <input type="text" name="" class="form-control form-control-sm mb-2" placeholder="2243TR">
            <div class="alert d-none alert-danger py-1 px-2" role="alert">Alert message here!</div>

            <label class="mb-1">Place <span class="text-danger">*</span></label>                            
            <input type="text" name="" class="form-control form-control-sm mb-2" placeholder="Eindoven">
            <div class="alert d-none alert-danger py-1 px-2" role="alert">Alert message here!</div>

            <label class="mb-1">Telephone <span class="text-danger">*</span></label>                            
            <input type="text" name="" class="form-control form-control-sm mb-2" placeholder="12345">
            <div class="alert d-none alert-danger py-1 px-2" role="alert">Alert message here!</div>

            <label class="mb-1">Email <span class="text-danger">*</span></label>                            
            <input type="text" name="" class="form-control form-control-sm mb-2" placeholder="account@domain.com">
            <div class="alert d-none alert-danger py-1 px-2" role="alert">Alert message here!</div>
            
          </div>
          <div class="col-md-4">
            <p class="mb-2 text-primary">Lead info</p>
            <label class="mb-1">Lead Type <span class="text-danger">*</span></label>                                
            <input type="text" name="" class="form-control form-control-sm mb-2" placeholder="Standard Lead">  
            <div class="alert d-none alert-danger py-1 px-2" role="alert">Alert message here!</div>             
        
            <label class="mb-1">Sales intent <span class="text-danger">*</span></label>                                
            <input type="text" name="" class="form-control form-control-sm mb-2" placeholder="Ja">  
            <div class="alert d-none alert-danger py-1 px-2" role="alert">Alert message here!</div>   
            
            <label class="mb-1">Reason for the sale <span class="text-danger">*</span></label> 
            <select class="form-control form-control-sm mb-2" name="reason">
              <option>Waarom wil je verkopen?</option>
              <option>Erfenis</option>
              <option>Wil kleiner gaan wonen</option>
              <option>Wil groter gaan wonen</option>
              <option>Ga naar het buitenland</option>
              <option>Nieuwe baan elders</option>
              <option>Prive</option>
            </select>                                
            <div class="alert d-none alert-danger py-1 px-2" role="alert">Alert message here!</div> 
            
            <label class="mb-1">Planned sales term <span class="text-danger">*</span></label> 
            <select class="form-control form-control-sm mb-2" name="selling_date">
              <option>Wanneer wil je de woning verkopen?</option>
              <option>Zo snel mogelijk</option>
              <option>In 2018</option>
              <option>Begin 2019</option>
              <option>Zomer 2019</option>
              <option>Eind 2019</option>
              <option>Weet het nog niet zeker</option>
            </select>
            <div class="alert d-none alert-danger py-1 px-2" role="alert">Alert message here!</div>
            
            <label class="mb-1"><!-- Type woning -->Type of house <span class="text-danger">*</span></label> 
            <select class="form-control form-control-sm mb-2" name="type">
              <option>Type woning?</option>
              <option>Vrijstaand</option>
              <option>Tussenwoning</option>
              <option>Appartement</option>
              <option>Hoekhuis</option>
              <option>2-onder-1 kap</option>
              <option>Anders</option>
            </select>
            <div class="alert d-none alert-danger py-1 px-2" role="alert">Alert message here!</div>
            
            <label class="mb-1"><!-- Bouwjaar -->Construction year <span class="text-danger">*</span></label>    
            <select class="form-control form-control-sm mb-2" name="movement_date">
              <option>Voor 1950</option>
              <option>1950 - 1970</option>
              <option>1970 - 2000</option>
              <option>After 2000</option>
              <option>Onbekend</option>
            </select>
            <div class="alert d-none alert-danger py-1 px-2" role="alert">Alert message here!</div>
            
            <label class="mb-1">Visit appointment confirmed: <span class="text-danger">*</span></label>                                
            <input type="text" name="" class="form-control form-control-sm mb-2" placeholder="Ja">
            <div class="alert d-none alert-danger py-1 px-2" role="alert">Alert message here!</div>
            
            <label class="mb-1">Contactverzoek <span class="text-danger">*</span></label>                                
            <input type="text" name="" class="form-control form-control-sm mb-2" placeholder="Ja">
            <div class="alert d-none alert-danger py-1 px-2" role="alert">Alert message here!</div>
          
          </div>

          <div class="col-md-4">
            <p class="mb-2 text-primary">Aanvullende informatie</p>
            <label class="mb-1">Price <span class="text-danger">*</span></label>                                
            <input type="text" name="" class="form-control form-control-sm mb-2" placeholder="€ 49"> 
            <div class="alert d-none alert-danger py-1 px-2" role="alert">Alert message here!</div>

            <label class="mb-1">Enter info <span class="text-danger">*</span></label>                                
            <textarea class="form-control mb-3" rows="3" placeholder="Janstraat 22"></textarea>
            <div class="alert d-none alert-danger py-1 px-2" role="alert">Alert message here!</div>

            <label class="mb-1">Google Street View <span class="text-danger">*</span></label>                                
            <input type="text" name="" class="form-control form-control-sm mb-4" placeholder="Enter link here..."> 
            <div class="alert d-none alert-danger py-1 px-2" role="alert">Alert message here!</div>

            <div class="alert d-none alert-success mb-2" role="alert">Alert message here!</div>
            <a href="admin/create-lead.php" class="btn btn-sm btn-primary btn-block">Submit</a>     
          </div>

        </div>
      </div>
  </div>

<?php include'../include/footer-admin.php';?>