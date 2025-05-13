// Connect to the database
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if an image file was uploaded
if (isset($_FILES['image'])) {
    $image_name = $_FILES['image']['name'];
    $image_size = $_FILES['image']['size'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $image_type = $_FILES['image']['type'];

    // Check if the file is an image and within the size limit
    if (($image_type == "image/jpeg" || $image_type == "image/png") && $image_size <= 5000000) {
        // Generate a unique file name using the current timestamp
        $image_newname = time() . "_" . $image_name;

        // Move the file to the uploads directory
        $image_path = "uploads/" . $image_newname;
        move_uploaded_file($image_tmp, $image_path);

        // Insert the file path into the database
        $sql = "INSERT INTO images (path) VALUES (?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $image_path);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        echo "File uploaded successfully.";
    } else {
        echo "Invalid file type or size.";
    }
}

// Close the connection
mysqli_close($conn);