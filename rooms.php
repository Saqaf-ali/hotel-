<?php 

session_start();

require_once('db_config.php'); // contains database connection details
require_once('header.php'); // contains footer connection details

$date_arr = "";
$date_dep = "";
$ro_type = "";

$edit_mode = false;

// handle form search
// if (isset($_POST['search'])) {
 $date_arr = $_POST['date_arr'];
 $date_dep = $_POST['date_dep'];
 $ro_type = $_POST['ro_type'];

 
?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    
    <!-- End Header Area -->

    <!-- Start Hero Area -->
    <section class="">
        <div class="hero-image mt-md-0  ">
            <div class="button d-md-none d-sm-block  position-absolute " >
                <a href="#book-now" role="button" aria-expanded="false" aria-controls="book-now" class="btn w-100 btn-book "data-bs-toggle="collapse">book now</a>
            </div></div></section>

            <!-- rooms -->
           
                    <section class="about section">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-12">
                                    
                                    <div class=" mainslider services single-service ">
                                        <div  id="slidmaid1" class="carousel slide mainslider" data-bs-touch="false">
                                          <div class="carousel-inner">
                                            <div class="carousel-item active carousel-item-rooms">
                                              <img src="assets/images/about/room1.jpg" class="d-block  w-100" alt="...">
                                            </div>
                                            <div class="carousel-item carousel-item-rooms">
                                              <img src="images/section main.jpg" class="d-block w-100 " alt="...">
                                            </div>
                                            <div class="carousel-item ">
                                              <img src="..." class="d-block  w-100" alt="...">
                                            </div>
                                          </div>
                                          <button class="carousel-control-prev" type="button" data-bs-target="#slidmaid" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                          </button>
                                          <button class="carousel-control-next" type="button" data-bs-target="#slidmaid" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                          </button>
                                        </div>
                                        <div class="sss">
                                        
                                                <div class="content wow fadeInRight" data-wow-delay=".4s">
                                                    
                                                   
                                                    <h3 class="tittel-rooms">2 Twin Beds Deluxe</h3>
                                                    <p>
                                                      
                                        Relax and unwind in this 45-50 sq m modern room, featuring two twin beds, a modern bathroom, floor-to-ceiling windows and a modern workspace.
                                    
                                                  </p>
                                                  <div class="">
                                                    <button class="  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                      Dropdown button
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                     
                                                      <li class="dropdown-item">Hyatt Grand Bed™</li>
                                                      <li class="dropdown-item">Welcome amenities</li>
                                                      <li class="dropdown-item">Pillow menu</li>
                                                      <li class="dropdown-item">55” flat-screen UHD TV</li>
                                                      <li class="dropdown-item">Media hub and iHome docking station</li>
                                                      <li class="dropdown-item">Touch panel-controlled room temperature and lighting</li>
                                                      <li class="dropdown-item">Coffee and tea makers</li>
                                                      <li class="dropdown-item">Hair dryer</li>
                                                      <li class="dropdown-item">Rollaway upon request</li>
                                                      <li class="dropdown-item">Crib upon request</li>
                                                      <li class="dropdown-item">Complimentary access to Sokoun Spa and 24/7 Access to Sokoun Fitness Center</li>
                                                    </ul>
                                                  </div>
                                                  <div class="row">
                                                    <div class="col">
                                                        <div class="button w-100 button-roms-card">
                                                            <a href="#" class="btn ">Book Now
                                                            </a>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>
                                          
                                        </div>
                                      </div>
                                    <!--  -->
                                </div>
                                <div class="col-lg-6 col-12">
                                    
                                    <div class=" mainslider services single-service ">
                                        <div  id="slidmaid1" class="carousel slide mainslider" data-bs-touch="false">
                                          <div class="carousel-inner">
                                            <div class="carousel-item active carousel-item-rooms">
                                              <img src="assets/images/about/room2.jpg" class="d-block  w-100" alt="...">
                                            </div>
                                            <div class="carousel-item carousel-item-rooms">
                                              <img src="images/section main.jpg" class="d-block w-100 " alt="...">
                                            </div>
                                            <div class="carousel-item ">
                                              <img src="..." class="d-block  w-100" alt="...">
                                            </div>
                                          </div>
                                          <button class="carousel-control-prev" type="button" data-bs-target="#slidmaid" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                          </button>
                                          <button class="carousel-control-next" type="button" data-bs-target="#slidmaid" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                          </button>
                                        </div>
                                        <div class="sss">
                                        
                                                <div class="content wow fadeInRight" data-wow-delay=".4s">
                                                    
                                                   
                                                    <h3 class="tittel-rooms">2 Twin Beds Deluxe</h3>
                                                    <p>
                                                      
                                        Relax and unwind in this 45-50 sq m modern room, featuring two twin beds, a modern bathroom, floor-to-ceiling windows and a modern workspace.
                                    
                                                  </p>
                                                  <div class="">
                                                    <button class="  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                      Dropdown button
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                     
                                                      <li class="dropdown-item">Hyatt Grand Bed™</li>
                                                      <li class="dropdown-item">Welcome amenities</li>
                                                      <li class="dropdown-item">Pillow menu</li>
                                                      <li class="dropdown-item">55” flat-screen UHD TV</li>
                                                      <li class="dropdown-item">Media hub and iHome docking station</li>
                                                      <li class="dropdown-item">Touch panel-controlled room temperature and lighting</li>
                                                      <li class="dropdown-item">Coffee and tea makers</li>
                                                      <li class="dropdown-item">Hair dryer</li>
                                                      <li class="dropdown-item">Rollaway upon request</li>
                                                      <li class="dropdown-item">Crib upon request</li>
                                                      <li class="dropdown-item">Complimentary access to Sokoun Spa and 24/7 Access to Sokoun Fitness Center</li>
                                                    </ul>
                                                  </div>
                                                  <div class="row">
                                                    <div class="col">
                                                        <div class="button button-roms-card">
                                                            <a href="#" class="btn">Book Now
                                                            </a>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>
                                          
                                        </div>
                                      </div>
                                    <!--  -->
                                </div>
                                <div class="col-lg-6 col-12">
                                    
                                    <div class=" mainslider services single-service ">
                                        <div  id="slidmaid1" class="carousel slide mainslider" data-bs-touch="false">
                                          <div class="carousel-inner">
                                            <div class="carousel-item active carousel-item-rooms">
                                              <img src="assets/images/about/room3.jpg" class="d-block  w-100" alt="...">
                                            </div>
                                            <div class="carousel-item carousel-item-rooms">
                                              <img src="images/section main.jpg" class="d-block w-100 " alt="...">
                                            </div>
                                            <div class="carousel-item ">
                                              <img src="..." class="d-block  w-100" alt="...">
                                            </div>
                                          </div>
                                          <button class="carousel-control-prev" type="button" data-bs-target="#slidmaid" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                          </button>
                                          <button class="carousel-control-next" type="button" data-bs-target="#slidmaid" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                          </button>
                                        </div>
                                        <div class="sss">
                                        
                                                <div class="content wow fadeInRight" data-wow-delay=".4s">
                                                    
                                                   
                                                    <h3 class="tittel-rooms">2 Twin Beds Deluxe</h3>
                                                    <p>
                                                      
                                        Relax and unwind in this 45-50 sq m modern room, featuring two twin beds, a modern bathroom, floor-to-ceiling windows and a modern workspace.
                                    
                                                  </p>
                                                  <div class="">
                                                    <button class="  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                      Dropdown button
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                     
                                                      <li class="dropdown-item">Hyatt Grand Bed™</li>
                                                      <li class="dropdown-item">Welcome amenities</li>
                                                      <li class="dropdown-item">Pillow menu</li>
                                                      <li class="dropdown-item">55” flat-screen UHD TV</li>
                                                      <li class="dropdown-item">Media hub and iHome docking station</li>
                                                      <li class="dropdown-item">Touch panel-controlled room temperature and lighting</li>
                                                      <li class="dropdown-item">Coffee and tea makers</li>
                                                      <li class="dropdown-item">Hair dryer</li>
                                                      <li class="dropdown-item">Rollaway upon request</li>
                                                      <li class="dropdown-item">Crib upon request</li>
                                                      <li class="dropdown-item">Complimentary access to Sokoun Spa and 24/7 Access to Sokoun Fitness Center</li>
                                                    </ul>
                                                  </div>
                                                  <div class="row">
                                                    <div class="col">
                                                        <div class="button button-roms-card">
                                                            <a href="#" class="btn">Book Now
                                                            </a>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>
                                          
                                        </div>
                                      </div>
                                    <!--  -->
                                </div>
                                <div class="col-lg-6 col-12">
                                    
                                    <div class=" mainslider services single-service ">
                                        <div  id="slidmaid4" class="carousel slide mainslider" data-bs-touch="false">
                                          <div class="carousel-inner">
                                            <div class="carousel-item active carousel-item-rooms">
                                              <img src="assets/images/about/room7.jpg" class="d-block  w-100" alt="...">
                                            </div>
                                            <div class="carousel-item carousel-item-rooms">
                                              <img src="images/section main.jpg" class="d-block w-100 " alt="...">
                                            </div>
                                            <div class="carousel-item ">
                                              <img src="..." class="d-block  w-100" alt="...">
                                            </div>
                                          </div>
                                          <button class="carousel-control-prev" type="button" data-bs-target="#slidmaid" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                          </button>
                                          <button class="carousel-control-next" type="button" data-bs-target="#slidmaid" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                          </button>
                                        </div>
                                        <div class="sss">
                                        
                                                <div class="content wow fadeInRight" data-wow-delay=".4s">
                                                    
                                                   
                                                    <h3 class="tittel-rooms">2 Twin Beds Deluxe</h3>
                                                    <p>
                                                      
                                        Relax and unwind in this 45-50 sq m modern room, featuring two twin beds, a modern bathroom, floor-to-ceiling windows and a modern workspace.
                                    
                                                  </p>
                                                  <div class="">
                                                    <button class="  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                      Dropdown button
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                     
                                                      <li class="dropdown-item">Hyatt Grand Bed™</li>
                                                      <li class="dropdown-item">Welcome amenities</li>
                                                      <li class="dropdown-item">Pillow menu</li>
                                                      <li class="dropdown-item">55” flat-screen UHD TV</li>
                                                      <li class="dropdown-item">Media hub and iHome docking station</li>
                                                      <li class="dropdown-item">Touch panel-controlled room temperature and lighting</li>
                                                      <li class="dropdown-item">Coffee and tea makers</li>
                                                      <li class="dropdown-item">Hair dryer</li>
                                                      <li class="dropdown-item">Rollaway upon request</li>
                                                      <li class="dropdown-item">Crib upon request</li>
                                                      <li class="dropdown-item">Complimentary access to Sokoun Spa and 24/7 Access to Sokoun Fitness Center</li>
                                                    </ul>
                                                  </div>
                                                  <div class="row">
                                                    <div class="col">
                                                        <div class="button button-roms-card">
                                                            <a href="#" class="btn">Book NOw
                                                            </a>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>
                                          
                                        </div>
                                      </div>
                                    <!--  -->
                                </div>
                               </div></div></section>
            <!-- end roms -->

         

            <!-- script -->
           <!-- <script src="assets/js/main.js"></script> -->



</body>
</html>

<!-- footer -->
<?php require_once('footer.php'); // contains footer connection details 
// }
?>