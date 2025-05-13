

<?php

session_start();

require_once('db_config.php'); // contains database connection details

if(isset($_POST['user_name']) && isset($_POST['user_pass'])) {
  $user_name = $_POST['user_name'];
  $user_pass = $_POST['user_pass'];
  
  // SQL query to validate login credentials
  $sql = "SELECT * FROM user WHERE user_name='$user_name' AND user_pass='$user_pass'";
  $result = mysqli_query($conn, $sql);
  
  if(mysqli_num_rows($result) == 1) { // if user exists in database
    $_SESSION['user_name'] = $user_name; // store user_name in session
    header('Location: control_banal.php'); // redirect user to home page
    exit();
  } else {
    echo '<div style="margin-top: 91px;" class="alert alert-success" role="alert">Invalid username or password</div>';
    
  }
}
require_once('admin_header.php'); // contains database connection details


?>




<div class="container mt-6">
   <form method="post" action="login.php " style="margin-top: 110px;">
                                    <div class="row">
                                      <div class="col-md-12 col-sm-12 mb-3">
                                      <label for="user_name">user_name:</label>
                                        <input class="mr-3 form-control" type="text"  id="user_name" name="user_name" required="required"/>
                                      </div>
                                      <div class="col-md-12 col-sm-12 mb-3">
                                      <label for="user_pass">user_pass:</label>
                                        <input class="form-control" type="password" id="user_pass" name="user_pass" required="required" />
                                      </div>
                                    </div>
                                    
                                    
                                    
                                    <div class="row ">
                                      <div class="col">
                                          <div class="button button2  ">
                                              <button type="submit"  class="btn botton-book">Log In
                                              </button>
                                          </div>
                                      </div>
                                    </div>
                                  </form>
                              </div>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script> -->
<!--  -->
</body>
</div>
</html>