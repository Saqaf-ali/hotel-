<?php 
require_once('db_config.php'); // contains database connection details
require_once('header.php'); // contains footer connection details
$ro_type="";
$date_dep="";
$date_arr="";
if (isset($_POST['search'])) {

  $ro_type=$_POST['ro_type'];
  $date_arr=$_POST['date_arr'];
  $date_dep=$_POST['date_dep'];

  $sql1=mysqli_query($conn,"SELECT * from room where ro_type='$ro_type'");
  ?>

  <header class="bg-light py-5" style="margin-top: 92px;">
  <div class="container">
    <h1 class="text-center mb-5">Our Rooms</h1>
    <div class="row g-4">
    <?php while ($row=mysqli_fetch_assoc($sql1)) {?>
      <div class="col-md-6 collg-4">
        <div class="card border-0 shadow-sm">
          <img src="uploads/<?php echo $row['ro_img1'];?>" class="card-img-top" alt="Room image">
          <div class="card-body hcard-body">
            <h5 class="card-title mb-3"><?php echo $row['ro_type'];?></h5>
            <p class="card-text mb-3"><?php echo $row['ro_desc'];?></p>
            <p class="card-text mb-3"><strong>Price:</strong> $  <?php echo $row['ro_price'];?>  /night</p>
           
            <form action="bookin_confirmation.php" method="post">
            <input class="d-none" type="number" name="id_room"  value="<?php echo $row['ro_id'];?>">
            <input class="d-none" type="date" name="date_arr" value="<?php echo $date_arr;?>">
            <input  class="d-none"  type="date"  name="date_dep" value="<?php echo $date_dep;?>">
            <button type="submit" class="btn rrom " title="Click My" name="send2">Book Now</button>
          </form>

          </div>
        </div>
      </div>
  <?php }?>
    </div>
  </div>
</header>
<?php } else {?>

<!-- defullt -->

<?php 



// -------------------------------------------
$sql=mysqli_query($conn,"select * from room");

?>

  <header class="bg-light py-5" style="margin-top: 92px;">
    <div class="container">
      <h1 class="text-center mb-5">Our Rooms</h1>
      <div class="row g-4">
      <?php while ($row=mysqli_fetch_assoc($sql)) {?>
        <div class="col-md-6 collg-4">
          <div class="card border-0 shadow-sm">
            <img src="uploads/<?php echo $row['ro_img1'];?>" class="card-img-top" alt="Room image">
            <div class="card-body">
              <h5 class="card-title mb-3"><?php echo $row['ro_type'];?></h5>
              <p class="card-text mb-3"><?php echo $row['ro_desc'];?></p>
              <p class="card-text mb-3"><strong>Price:</strong> $  <?php echo $row['ro_price'];?>  /night</p>
              <a href="bookin_confirmation.php? id_room=<?php echo $row['ro_id'];?>"  class="btn rrom " title="Click My" >Book Now</a>
            </div>
          </div>
        </div>
    <?php }?>
      </div>
    </div>
  </header>

  <?php 
}
require_once('footer.php'); // contains footer connection details
?>

