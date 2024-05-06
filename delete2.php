<?php
// Check if feedback ID is set and not empty
if(isset($_GET['id']) && !empty($_GET['id'])) {
    // Sanitize the ID to prevent SQL injection
    $feedback_id = $_GET['id'];
    
    // Connect to database
    $conn = mysqli_connect("localhost", "root", "", "abcresort");
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    // Construct the SQL DELETE query
    $sql = "DELETE FROM tb_feedback WHERE feedback_id = $feedback_id";
    
    // Execute the DELETE query
    if (mysqli_query($conn, $sql)) {
        header("Location: admin.php");
        exit();
    } else {
        echo "Error deleting feedback: " . mysqli_error($conn);
    }
    
    // Close the database connection
    mysqli_close($conn);
} else {
    echo "Invalid feedback ID";
}
?>
