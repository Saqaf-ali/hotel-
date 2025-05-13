<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>hotel</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" /> -->
   
    <!-- ========================= CSS here ========================= -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/animate.css" />
    
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    /> -->
    <link rel="stylesheet" href="secand.css" />
</head>

<body>
  

    <!-- Preloader -->

    <!-- /End Preloader -->

    <!-- Start Header Area -->
    <header class="header navbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="nav-inner">
                        <!-- Start Navbar -->
                        <nav class="navbar navbar-expand-lg ">
                            <a class="navbar-brand" href="index.php">
                                <img src="assets/images/logo/white-logo.svg" alt="Logo">
                            </a>
                           
                            <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a href="index.php" class="active" aria-label="Toggle navigation">hotel</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="b.php" aria-label="Toggle navigation">rooms</a>
                                    </li>
                                    
                                   
                                   
                                    <li class="nav-item">
                                        <a href="contact.html" aria-label="Toggle navigation">dining</a>
                                    </li>
                                  
                                    <li class="nav-item">
                                        <a href="contact.html" aria-label="Toggle navigation">photos + reviews</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="login.php" aria-label="Toggle navigation">offers</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                            <span class="button">
                                <a class="btn  " data-bs-toggle="collapse" href="#book-now" role="button" aria-expanded="false" aria-controls="book-now">
                                    book now
                                </a>
                                
                            </span>
                              <div class="collapse body-book-now card body-card" id="book-now">
                                <form action="b.php" method="POST">
                                    <div class="row">
                                      <div class="col-md-6 col-sm-12 mb-3">
                                        <label for="date_arr">Date of Arrival</label>
                                        <input class="mr-3 form-control" type="date" name="date_arr"  required="required"/>
                                      </div>
                                      <div class="col-md-6 col-sm-12 mb-3">
                                        <label for="date_dep">Date of Departure</label>
                                        <input class="form-control" type="date" name="date_dep" />
                                      </div>
                                    </div>
                                    <div class="row mb-3">
                                      <div class="col">
                                        <div class="form-group">
                                            <label for="ro_type">Room Type</label>
                                            <select class="form-control" id="ro_type" name="ro_type" required>
                                             
                                            <option  >Standard room</option>
                                            <option >Deluxe room</option>
                                            <option >Suite</option>
                                            <option >Executive room</option>
                                            <option >Family room</option>
                                            <option >Penthouse suite</option>
                                            </select>
                                         </div>                                      </div>
                                    </div>
                                    
                                    
                                    <div class="row ">
                                      <div class="col">
                                          <div class="button button2  ">
                                              <button name="search" type="submit" class="btn botton-book">search
                                              </button>
                                          </div>
                                      </div>
                                    </div>
                                  </form>
                              </div>
                            <!-- <div class="button">
                                <a href="signup.html" class="btn">book now</a>
                            </div> -->
                        </nav>
                        <!-- End Navbar -->
                    </div>
                </div>
            </div> <!-- row -->
            
        </div> <!-- container -->
        
    </header>

    <!-- Start php -->

