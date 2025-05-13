<?php 
require_once('db_config.php'); // contains database connection details
require_once('admin_header.php'); 

$sql=mysqli_query($conn,"select * from room");
$sql_booking=mysqli_query($conn,"select * from booking");

?>


<table class="table " style="margin-top: 92px;">
			<thead>
				<tr>
					<th>Room Id</th>
					<th>type</th>
					<th>Price</th>
					<th>Image</th>
					<th>Customer Id</th>
					<th>Name</th>
					<th>Phone</th>
					<th>Departure Date</th>
				</tr>
			</thead>
			<tbody>
            <?php while ($row_booking = mysqli_fetch_assoc($sql_booking)) { 
                $id="";
                $id=$row_booking['ro_id'];
                $date_dep=$row_booking['date_dep'];
                $date_arr=$row_booking['date_arr'];
			
                $sql=mysqli_query($conn,"select * from room where ro_id=$id");

                ?>
				<?php while ($row = mysqli_fetch_assoc($sql)) { ?>
					<tr>
						<td><?php echo $row['ro_id']; ?></td>
						<td><?php echo $row['ro_type']; ?></td>
						<td><?php echo $row['ro_price']." $"; ?></td>
						<td><?php if (!empty($row['ro_img1'])) { ?><img src="uploads/<?php echo $row['ro_img1']; ?>" width="100"><?php } ?></td>
						
						
                      

                            <td><?php echo $row_booking['book_id']; ?></td>
                            <td><?php echo $row_booking['f_name']." ".$row_booking['l_name']  ; ?></td>
                            <td><?php echo $row_booking['phone']; ?></td>
                            <td><?php echo $row_booking['date_dep']; ?></td>
                            
					</tr>
				<?php } ?>
                <?php } ?>
			</tbody>
		</table>