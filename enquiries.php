<?php
//Hostinger Database Connection
$host = "localhost";
$user = "u765020287_Allwin";
$password = "AllWIN@ALL01";
$database = "u765020287_Allwin_db";
$conn = mysqli_connect($host, $user, $password, $database);
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
//Get Form Data
$name   = $_POST['name'];
$phone  = $_POST['phone'];
$email  = $_POST['email'];
$course = $_POST['course'];
//Insert into Database
$sql = "INSERT INTO enquiries (name, phone, email, course)
        VALUES ('$name', '$phone', '$email', '$course')";

if (mysqli_query($conn, $sql)) {
    echo "
        <script>
            alert('Enquiry Submitted Successfully!');
            window.location.href = 'index.html';
        </script>";
} else {
     echo "
        <script>
            alert('Error submitting enquiry. Please try again.');
            window.location.href = 'index.html';
        </script>";
}

mysqli_close($conn);
?>
