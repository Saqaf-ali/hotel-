<?php

require_once('db_config.php'); // contains database connection details
require_once('admin_header.php'); 

// initialize variables
$user_id = 0;
$user_id = "";
$user_name = "";
$user_pass = "";
$user_img = "";
$edit_mode = false;

// handle form submission
if (isset($_POST['save_user'])) {
    $user_id = $_POST['user_id'];
    $user_name = $_POST['user_name'];
    $user_pass = $_POST['user_pass'];

    // handle image upload
    if ($_FILES['user_img']['error'] == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES['user_img']['tmp_name'];
        $extension = pathinfo($_FILES['user_img']['name'], PATHINFO_EXTENSION);
        $filename = uniqid() . '.' . $extension;
        move_uploaded_file($tmp_name, 'uploads/' . $filename);
        $user_img = $filename;
    }

    // insert or update user data
    if ($user_id > 0) {
        $sql = "UPDATE user SET user_id=$user_id, user_pass='$user_pass' , user_name='$user_name', user_img='$user_img' WHERE user_id=$user_id";
    } else {
        $sql = "INSERT INTO user (  user_pass,user_name, user_img) VALUES (  '$user_pass', '$user_name', '$user_img')";
    }

    if (mysqli_query($conn, $sql)) {
        echo '<div style="margin-top: 110px;" class="alert alert-success" role="alert">user saved successfully</div>';
    } else {
        echo '<div style="margin-top: 110px;" class="alert alert-danger" role="alert">Error: ' . $sql . "<br>" . mysqli_error($conn) . '</div>';
    }
}

// handle user deletion
if (isset($_GET['delete_user'])) {
    $user_id = $_GET['delete_user'];
    // $sql = "SELECT user_img FROM user WHERE user_id=$user_id";
    // $result = mysqli_query($conn, $sql);
    // $row = mysqli_fetch_assoc($result);
    // $user_img = $row['user_img'];
    // if (!empty($user_img)) {
    //     unlink('uploads/' . $user_img);
    // }
    $sql = "DELETE FROM user WHERE user_id=$user_id";

    if (mysqli_query($conn, $sql)) {
        echo '<div class="alert alert-success" role="alert">user deleted successfully</div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">Error: ' . $sql . "<br>" . mysqli_error($conn) . '</div>';
    }
}

// handle user editing
if (isset($_GET['edit_user'])) {
    $user_id = $_GET['edit_user'];
    $edit_mode = true;
    $sql = "SELECT * FROM user WHERE user_id=$user_id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $user_id = $row['user_id'];
        $user_name = $row['user_name'];
        $user_pass = $row['user_pass'];
        $user_img = $row['user_img'];
    }
}

// retrieve list of user
$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);

// close connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
	
	<title>Manage users</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">


</head>

<body>
	<div class="container mt-4" >
		<h1 style="margin-top: 110px;" >Manage users</h1>

		<form method="post" enctype="multipart/form-data">
			<input type="hidden" name="user_id" value="<?php echo $user_id; ?>">

			<div class="form-group">
				<label for="user_name">User name</label>
				<input class="form-control" id="user_name" type="text" name="user_name" value="<?php echo $user_name; ?>">

			</div>
			<div class="form-group">
				<label for="user_pass">password:</label>
				<input type="password" name="user_pass" class="form-control" value="<?php echo $user_pass; ?>">
			</div>
			<div class="form-group">
				<label for="user_img">Image:</label>
				<?php if (!empty($user_img)) { ?>
					<img src="uploads/<?php echo $user_img; ?>" width="100"  >
				<?php } ?>
				<input type="file" name="user_img" class="form-control-file" value="uploads/<?php echo $user_img; ?>">
			</div>
			<button type="submit" name="save_user" class="btn   btn-primary"><?php echo $edit_mode ? 'Update' : 'Save'; ?> User</button>
			<a href="manage_users.php" class="btn btn-secondary">Cancel</a>
		</form>

		<hr>

		<h2>user List</h2>

		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Password</th>
					<th>Image</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php while ($row = mysqli_fetch_assoc($result)) { ?>
					<tr>
						<td><?php echo $row['user_id']; ?></td>
						<td><?php echo $row['user_name']; ?></td>
						<td><?php echo $row['user_pass']; ?></td>
						<td><?php if (!empty($row['user_img'])) { ?><img src="uploads/<?php echo $row['user_img']; ?>"width="100 "><?php } ?></td>
						<td>
							<a href="manage_users.php?edit_user=<?php echo $row['user_id']; ?>" class="btn btn-primary">Edit</a>
							<a href="manage_users.php?delete_user=<?php echo $row['user_id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>

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