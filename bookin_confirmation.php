<?php 
require_once('db_config.php'); // contains database connection details
require_once('header.php'); // contains footer connection details

$date_dep="";
$date_arr="";
$id_room="";
// $date_dep1=$_GET['date_dep'];
if (isset($_POST['send2'])) {
  $date_arr=$_POST['date_arr'];
  $date_dep=$_POST['date_dep'];
  $id_room=$_POST['id_room'];



 
?>

      <div class="container" style="margin-top: 92px;">
        <div class="card py-4 px-4">
          <div class="h4 pb-4">Booking</div>
          <div class="row">
            <!-- <div class="col-md-7 col-sm-12 mb-3"> -->
              <div class="da-contact-message">
                <form action="insert_booking.php" method="POST">
                  <div class="row">
            <input  type="date" class="d-none" name="date_arr" value="<?php echo $date_arr;?>">
            <input  type="date" class="d-none"  name="date_dep" value="<?php echo $date_dep;?>">
           
                    <div class="col-md-6 col-sm-12 mb-3">
                      <input class="mr-3 form-control" type="text" name="f_name" placeholder="*First Name" required/>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-3">
                      <input class="form-control" type="text" name="l_name" placeholder="Last Name" required/>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col">
                      <input class="form-control" type="text" name="phone" placeholder="*Phone Number" required/>
                    </div>
                  </div>
                  <div class="row mb-3 ">
                    <div class="col">
                      <input class="form-control  d-none" type="number" name="ro_id" value="<?php echo $id_room ; ?>" />
                    </div>
                  </div>
                  
                  <div class="col-md-12 mb-3" id="payment-options">
                  <label for="ro_type"> Choose Payment Method:</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="payment-method" id="paypal" value="paypal">
              <label class="form-check-label" for="paypal">
                <i class="bi bi-paypal"></i> PayPal
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="payment-method" id="credit-card" value="credit-card">
              <label class="form-check-label" for="credit-card">
                <i class="bi bi-credit-card-fill"></i> Credit Card
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="payment-method" id="debit-card" value="debit-card">
              <label class="form-check-label" for="debit-card">
                <i class="bi bi-credit-card-2-back"></i> Debit Card
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="payment-method" id="bank-transfer" value="bank-transfer">
              <label class="form-check-label" for="bank-transfer">
                <i class="bi bi-bank"></i> Bank Transfer
              </label>
            </div>
          </div>
                  <div class="row">
                    <div class="col">
                        <div class="button">
                            <button  name="send_booking" type="submit" class="btn">send
                            </button>
                        </div>
                    </div>
                  </div>
                  
                </form>
              </div>
            </div>
         
          </div>
        <!-- </div> -->
      </div>
    </div>
   <?php } else {

    // defullt
    $id_room=$_GET['id_room'];?>

    <div class="container" style="margin-top: 92px;">
    <div class="card py-4 px-4">
      <div class="h4 pb-4">Booking</div>
      <div class="row">
        <!-- <div class="col-md-7 col-sm-12 mb-3"> -->
          <div class="da-contact-message">
            <form action="insert_booking.php" method="POST">
              <div class="row">
              
              <div class="col-md-6 col-sm-12 mb-3">
              <label for="date_arr"> Arrival Date:</label>
                  <input class="mr-3  form-control" type="date" id="date_arr"name="date_arr"  required/>
                </div>
                <div class="col-md-6 col-sm-12 mb-3">
                  <label for="date_arr"> Departure Date:</label>
                  <input class="mr-3 form-control" type="date" name="date_dep" required/>
                </div>
                
                <div class="col-md-6 col-sm-12 mb-3">
                  <input class="mr-3 form-control" type="text" name="f_name" placeholder="*First Name" required/>
                </div>
        
               
                <div class="col-md-6 col-sm-12 mb-3">
                  <input class="form-control" type="text" name="l_name" placeholder="Last Name" required/>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col">
                  <input class="form-control" type="text" name="phone" placeholder="*Phone Number" required/>
                </div>
              </div>
              <div class="row mb-3 ">
                <div class="col">
                  <input class="form-control  d-none" type="number" name="ro_id" value="<?php echo $id_room ; ?>" />
                </div>
              </div>
             
           
               
              
              <div class="col-md-12 mb-3" id="payment-options">
              <label for="ro_type"> Choose Payment Method:</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="payment-method" id="paypal" value="paypal">
          <label class="form-check-label" for="paypal">
            <i class="bi bi-paypal"></i> PayPal
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="payment-method" id="credit-card" value="credit-card">
          <label class="form-check-label" for="credit-card">
            <i class="bi bi-credit-card-fill"></i> Credit Card
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="payment-method" id="debit-card" value="debit-card">
          <label class="form-check-label" for="debit-card">
            <i class="bi bi-credit-card-2-back"></i> Debit Card
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="payment-method" id="bank-transfer" value="bank-transfer">
          <label class="form-check-label" for="bank-transfer">
            <i class="bi bi-bank"></i> Bank Transfer
          </label>
        </div>
      </div>
              <div class="row">
                <div class="col">
                    <div class="button">
                        <button  name="send_booking" type="submit" class="btn">send
                        </button>
                    </div>
                </div>
              </div>
              
            </form>
          </div>
        </div>
     
      </div>
    <!-- </div> -->
  </div>
</div>


  <?php }?>