<?php
require_once('db_config.php'); // contains database connection details
require_once('admin_header.php'); 
// initialize variables
$ro_id = 0;
$ro_id = "";
$ro_type = "";
$ro_price = "";
$ro_img1 = "";
$ro_desc="";
$edit_mode = false;

// handle form submission
if (isset($_POST['save_room'])) {
    $ro_id = $_POST['ro_id'];
    $ro_type = $_POST['ro_type'];
    $ro_price = $_POST['ro_price'];
    $ro_desc = $_POST['ro_desc'];

    // handle image upload
    if ($_FILES['ro_img1']['error'] == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES['ro_img1']['tmp_name'];
        $extension = pathinfo($_FILES['ro_img1']['name'], PATHINFO_EXTENSION);
        $filename = uniqid() . '.' . $extension;
        move_uploaded_file($tmp_name, 'uploads/' . $filename);
        $ro_img1 = $filename;
    }

    // insert or update room data
    if ($ro_id > 0) {
        $sql = "UPDATE room SET ro_id=$ro_id, ro_price=$ro_price , ro_type='$ro_type', ro_desc='$ro_desc', ro_img1='$ro_img1'  WHERE ro_id=$ro_id";
    } else {
        $sql = "INSERT INTO room (  ro_price,ro_type, ro_desc, ro_img1) VALUES (  $ro_price, '$ro_type','$ro_desc' , '$ro_img1')";
    }

    if (mysqli_query($conn, $sql)) {
        echo '<div style="margin-top: 110px;" class="alert alert-success" role="alert">Room saved successfully</div>';
    } else {
        echo '<div style="margin-top: 110px;" class="alert alert-danger" role="alert">Error: ' . $sql . "<br>" . mysqli_error($conn) . '</div>';
    }
}

// handle room deletion
if (isset($_GET['delete_room'])) {
    $ro_id = $_GET['delete_room'];
    $sql = "SELECT ro_img1 FROM room WHERE ro_id=$ro_id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $ro_img1 = $row['ro_img1'];
    if (!empty($ro_img1)) {
        unlink('uploads/' . $ro_img1);
    }
    $sql = "DELETE FROM room WHERE ro_id=$ro_id";

    if (mysqli_query($conn, $sql)) {
        echo '<div class="alert alert-success" role="alert">Room deleted successfully</div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">Error: ' . $sql . "<br>" . mysqli_error($conn) . '</div>';
    }
}

// handle room editing
if (isset($_GET['edit_room'])) {
    $ro_id = $_GET['edit_room'];
    $edit_mode = true;
    $sql = "SELECT * FROM room WHERE ro_id=$ro_id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $ro_id = $row['ro_id'];
        $ro_type = $row['ro_type'];
        $ro_price = $row['ro_price'];
        $ro_img1 = $row['ro_img1'];
		$ro_desc = $row['ro_desc'];
    }
}

// retrieve list of room
$sql = "SELECT * FROM room";
$result = mysqli_query($conn, $sql);

// close connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Manage room</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container mt-4" >
		<h1 style="margin-top: 110px;">Manage room</h1>

		<form method="post" enctype="multipart/form-data">
			<input type="hidden" name="ro_id" value="<?php echo $ro_id; ?>">
			<div class="form-group">
				<label for="ro_type">Room Type:</label>
				<select class="form-control" id="roomType"  name="ro_type"><?php echo $ro_type; ?>
              <option  >Standard room</option>
              <option >Deluxe room</option>
              <option >Suite</option>
              <option >Executive room</option>
              <option >Family room</option>
           
              <option >Penthouse suite</option>
</select>
				<!-- <textarea name="ro_type" class="form-control"><?php echo $ro_type; ?></textarea> -->
			</div>
			<div class="form-group">
				<label for="ro_price">Price:</label>
				<input type="number" name="ro_price" class="form-control" value="<?php echo $ro_price; ?>">
			</div>
			<div class="form-group">
				<label for="ro_price">description:</label>
				<textarea class="form-control" name="ro_desc" id="" cols="30" rows="3" > <?php echo $ro_desc; ?></textarea>
				<!-- <input type="number" name="ro_desc" class="form-control" value=""> -->
			</div>
			<div class="form-group">
				<label for="ro_img1">Image:</label>
				<?php if (!empty($ro_img1)) { ?>
					<img src="uploads/<?php echo $ro_img1; ?>" width="100">
				<?php } ?>
				<input type="file" name="ro_img1" class="form-control-file">
			</div>
			<button type="submit" name="save_room" class="btn btn-primary"><?php echo $edit_mode ? 'Update' : 'Save'; ?> Room</button>
			<a href="manage_room.php" class="btn btn-secondary">Cancel</a>
		</form>

		<hr>

		<h2>Room List</h2>

		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>type</th>
					<th>Price</th>
					<th>Image</th>
					<th>Description</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php while ($row = mysqli_fetch_assoc($result)) { ?>
					<tr>
						<td><?php echo $row['ro_id']; ?></td>
						<td><?php echo $row['ro_type']; ?></td>
						<td><?php echo $row['ro_price']." $"; ?></td>
						<td><?php if (!empty($row['ro_img1'])) { ?><img src="uploads/<?php echo $row['ro_img1']; ?>" width="100"><?php } ?></td>
						<td><?php echo $row['ro_desc']; ?></td>
						<td>
							<a href="manage_room.php?edit_room=<?php echo $row['ro_id']; ?>" class="btn btn-primary">Edit</a>
							<a href="manage_room.php?delete_room=<?php echo $row['ro_id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this room?')">Delete</a>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>

	<!-- Bootstrap JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>