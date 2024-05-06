<?php
// Check if form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are filled
    if(isset($_POST['booking_no']) && isset($_POST['packages']) && isset($_POST['name']) && isset($_POST['phoneNo']) && isset($_POST['pax']) && isset($_POST['arrival']) && isset($_POST['leaving'])) {
        
        // Retrieve data from the form
        $booking_no = $_POST['booking_no'];
        $packages = $_POST['packages'];
        $name = $_POST['name'];
        $phoneNo = $_POST['phoneNo'];
        $pax = $_POST['pax'];
        $arrival = $_POST['arrival'];
        $leaving = $_POST['leaving'];
        
        // Connect to database
        $conn = mysqli_connect("localhost", "root", "", "abcresort");
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Prepare SQL statement to update booking details
        $sql = "UPDATE tb_booking SET packages='$packages', name='$name', phoneNo='$phoneNo', pax='$pax', arrival='$arrival', leaving='$leaving' WHERE booking_no='$booking_no'";
        
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Booking updated successfully.'); window.location.href = 'admin.php';</script>";
        } else {
            echo "Error updating booking: " . mysqli_error($conn);
        }

        mysqli_close($conn);
    } else {
        echo "All fields are required.";
    }
} else {
    echo "Invalid request.";
}
?>
