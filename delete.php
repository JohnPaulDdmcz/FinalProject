<?php
// Check if ID parameter is set
if(isset($_GET['id'])) {
    // Connect to database
    $conn = mysqli_connect("localhost", "root", "", "abcresort");
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $id = $_GET['id'];
    
    // Prepare SQL statement to delete booking
    $sql = "DELETE FROM tb_booking WHERE booking_no = '$id'";
    
    if (mysqli_query($conn, $sql)) {
        // Redirect to admin.php after successful deletion
        header("Location: admin.php");
        exit();
    } else {
        echo "Error deleting booking: " . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    echo "Booking ID not specified.";
}
?>

