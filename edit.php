<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Booking</title>
    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- custom css -->
    <link rel="stylesheet" href=".css">
    <style>
        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        text-decoration: none;
        list-style: none;
        scroll-behavior: smooth;
        font-family: 'Times New Roman', Times, serif;

        }
        .container {
            margin-top: 50px;
        }
        .form-group {
      border-radius: 20px; /* Adjust this value as needed */
        }
        body {
            background-color: #f2f2f2;
            background:linear-gradient(to right,#e2e2e2,#BACD92); /* Container background color */
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Edit Booking</h2>
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
        
        // Fetch data from database for the selected booking
        $sql = "SELECT * FROM tb_booking WHERE booking_no = '$id'";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
    ?>
    <form action="update.php" method="post">
        <input type="hidden" name="booking_no" value="<?php echo $row['booking_no']; ?>">
        <div class="form-group">
            <label for="packages">Packages:</label>
            <select class="form-control" id="packages" name="packages">
                <option value="Daytour" <?php if($row['packages'] === 'Daytour') echo 'selected'; ?>>Daytour</option>
                <option value="Overnight" <?php if($row['packages'] === 'Overnight') echo 'selected'; ?>>Overnight</option>
            </select>
        </div>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name']; ?>">
        </div>
        <div class="form-group">
            <label for="phoneNo">Phone No:</label>
            <input type="text" class="form-control" id="phoneNo" name="phoneNo" value="<?php echo $row['phoneNo']; ?>">
        </div>
        <div class="form-group">
            <label for="pax">Pax:</label>
            <input type="text" class="form-control" id="pax" name="pax" value="<?php echo $row['pax']; ?>">
        </div>
        <div class="form-group">
            <label for="arrival">Arrival:</label>
            <input type="text" class="form-control" id="arrival" name="arrival" value="<?php echo $row['arrival']; ?>">
        </div>
        <div class="form-group">
            <label for="leaving">Leaving:</label>
            <input type="text" class="form-control" id="leaving" name="leaving" value="<?php echo $row['leaving']; ?>">
        </div>
        <div class="d-flex justify-content-end">
    <button type="submit" class="btn btn-primary mr-2" style="width: 160px";>Update</button>
    <button type="button" class="btn btn-danger" style="width: 160px"; onclick="window.location.href = 'admin.php';">Cancel</button>
</div>

    </form>
    <?php
        } else {
            echo "Booking not found.";
        }
        mysqli_close($conn);
    } else {
        echo "Booking ID not specified.";
    }
    ?>
</div>

</body>
</html>
