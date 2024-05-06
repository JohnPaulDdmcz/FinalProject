
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABC Resort</title>

    <link rel="stylesheet" href="book.css">

    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel = "stylesheet" href = "bootstrap-5.0.2-dist/css/bootstrap.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <!-- Bootstrap Link -->

    

    <!-- Font Awesome Cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- Font Awesome Cdn -->


    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <!-- Google Fonts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  // When the document is ready
  $(document).ready(function() {
    // Add change event listener to the select element
    $('#packageSelect').change(function() {
      // Get the selected value
      var selectedValue = $(this).val();
      // Update the image source based on the selected value
      if (selectedValue === 'DayTour') {
        $('#bookImage').attr('src', './images/gall21.jpg');
      } else if (selectedValue === 'Overnight') {
        $('#bookImage').attr('src', './images/gall19.jpg');
      }
    });
  });
</script>


</head>
<body>
     <!-- Navbar Start -->
     <nav class="navbar navbar-expand-lg bg-custom" id="navbar">
      <div class="container">
        <a class="navbar-brand"  id="logo">
          <img src="./images/logo.png" alt="ABC Resort Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
          <span><i class="fa-solid fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link active" href="index1.php" >Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="book.php" style="color: #BACD92;">Book</a>
            </li>
            <li class="nav-item">
              <a class="nav-link smooth-scroll" href="index1.php#packages" >Packages</a>
            </li>
            <li class="nav-item">
              <a class="nav-link smooth-scroll" href="index1.php#amenities">Amenities</a>
            </li>
            <li class="nav-item">
              <a class="nav-link smooth-scroll" href="index1.php#gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link smooth-scroll" href="index1.php#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="feedback.php">Feedback</a>
            </li>
            
          </ul>
          
        </div>
      </div>
    </nav>
  <!-- Navbar End -->
    
    
    <!-- Home Section Start -->
    <section>
    <div class="home">
        <div class="content text-center">
            <h5 id="abc">ABC Resort</h5>
            
            
            
        </div>
    </div>
    </section>
<!-- Home Section End -->

    <!-- Section Book Start -->
    <section class="book p-5" id="book1">
        <div class="container">
  
          <div class="main-text" id="book">
            <h1><span>B</span>ook</h1>
          </div>
          
          <div class="row">
  
            <div class="col-md-6 py-3 py-md-0" id="img">
              <div class="card mt-5">
                <img src="./images/gall7.png" class="img-fluid" alt="images" id="bookImage">
              </div>
  
            </div>
  
            <div class="col-md-6 py-3 py-md-0 " id="bookForm">
              <form action="connect.php" method="post" autocomplete="off">
  
                <select class="form-select" aria-label="Package" name="packages" id="packageSelect" required>
                  <option value="" disabled selected>Package</option>
                  <option value="DayTour" >Day Tour</option>
                  <option value="Overnight" >Overnight</option>
              </select>
              <br>

                <label for="Name" >Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter your Name" required ><br>

                <label for="Name" >Phone No.</label>
                <input type="text" class="form-control" name="phoneNo" id="name" placeholder="Enter your Phone No." required><br>
                
              <label for="Name" >How many Pax</label>
                <input type="text" class="form-control" name="pax" placeholder="How Many" required><br>

                <label for="arrivalDate">Arrival Date</label>
                <input type="date" id="arrivalDate" name="arrival" class="form-control" placeholder="Arrivals" required><br>

                <label for="leavingDate">Leaving Date</label>
                <input type="date" id="departureDate" name="leaving" class="form-control" placeholder="Leaving" required><br>
  
                

                <div class="d-flex justify-content-center" id="bookForm">
                  <input type="submit" value="Book Now" class="submit" required>
                  
                </div>
  

              </form>
            </div>
  
          </div>
        </div>
      </section>
      <!-- Section Book End -->

     


      <button onclick="scrollToTop()" id="scrollToTopBtn"><i class="fas fa-arrow-up"></i></button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/vanilla.js"></script>
    
    

</body>
</html>
