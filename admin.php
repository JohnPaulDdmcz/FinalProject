<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Caudex:ital,wght@0,400;0,700;1,400;1,700&family=Ms+Madi&family=Sedan:ital@0;1&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- custom css -->
    <link rel="stylesheet" href="css/main.css">
    
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

        body {
            background-color: #f2f2f2;
            background:linear-gradient(to right,#e2e2e2,#BACD92); /* Container background color */
        }
        
        .container {
            margin-top: 50px;
            background-color: #f2f2f2;
            background:linear-gradient(to right,#e2e2e2,#BACD92); /* Container background color */
            padding: 20px;
            border-radius: 10px; /* Rounded corners for container */
        }
        
        .btn-logout {
            background-color: #DC3545; /* Logout button background color */
        }
        
        .btn-logout:hover {
            background-color: #C82333; /* Hover state for logout button */
        }
        
        .table th,
        .table td {
            border-color: #f2f2f2; /* Table border color */
        }
        
        .table thead th {
            background-color:  #f2f2f2; /* Table header background color */
            color: black; /* Table header text color */
        }
        
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, 0.05); /* Alternating row background color */
        }
        
    </style>
</head>
<body>
    <div class="col text-right mt-4  text-white">
    <a href="index1.php" class="btn btn-danger">
    <i class="fas fa-sign-out-alt"></i> 
    </a>

    </div>
<div class="container">
    <h2>Admin Panel</h2>

    
    <table class="table table-striped"> 
        <thead>
            <tr>
                <th>Booking No</th>
                <th>Packages</th>
                <th>Name</th>
                <th>Phone No</th>
                <th>Pax</th>
                <th>Arrival</th>
                <th>Leaving</th>
                <th>Actions</th>
            </tr>
        </thead>
        
        <tbody>
        
            <?php
            // Connect to database
            $conn = mysqli_connect("localhost", "root", "", "abcresort");
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            
            // Fetch data from database
            $sql = "SELECT * FROM tb_booking";
            $result = mysqli_query($conn, $sql);
            
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$row['booking_no']."</td>";
                    echo "<td>".$row['packages']."</td>";
                    echo "<td>".$row['name']."</td>";
                    echo "<td>".$row['phoneNo']."</td>";
                    echo "<td>".$row['pax']."</td>";
                    echo "<td>".$row['arrival']."</td>";
                    echo "<td>".$row['leaving']."</td>";
                    echo "<td><a href='edit.php?id=".$row['booking_no']."' class='btn btn-primary' style='width:70px'>Edit
                    </a> | <a href='delete.php?id=".$row['booking_no']."' class='btn btn-danger' style='width:70px' 
                    onclick='return confirm(\"Are you sure you want to delete this booking?\")'>Delete</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='8'>No bookings found</td></tr>";
            }
            mysqli_close($conn);
            ?>
        </tbody>
    </table>
</div>

<div class="container">
    <h2>Feedback Panel</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Feedback ID</th>
                <th>Packages</th>
                <th>Amenities Feedback</th>
                <th>Overall Feedback</th>
                <th>Rating</th>
                <th>Submission Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Connect to database
            $conn = mysqli_connect("localhost", "root", "", "abcresort");
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            
            // Fetch data from database
            $sql = "SELECT * FROM tb_feedback";
            $result = mysqli_query($conn, $sql);
            
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$row['feedback_id']."</td>";
                    echo "<td>".$row['packages']."</td>";
                    echo "<td>".$row['amenitiesFeed']."</td>";
                    echo "<td>".$row['overallFeed']."</td>";
                    echo "<td>".$row['rating']."</td>";
                    echo "<td>".$row['submissionDate']."</td>";
                    echo "<td></a><a href='delete2.php?id=".$row['feedback_id']."' class='btn btn-danger' style='width:70px' onclick='return confirm(\"Are you sure you want to delete this booking?\")'>Delete</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No feedback found</td></tr>";
            }
            mysqli_close($conn);
            ?>
        </tbody>
    </table>
</div>

</body>
</html>
