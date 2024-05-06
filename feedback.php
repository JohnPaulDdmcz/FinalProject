<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABC Resort</title>

    <link rel="stylesheet" href="feedback.css">


    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel = "stylesheet" href = "bootstrap-5.0.2-dist/css/bootstrap.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <!-- Bootstrap Link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    

    <!-- Font Awesome Cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- Font Awesome Cdn -->


    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <!-- Google Fonts -->
    <script>
  // When the document is ready
  $(document).ready(function() {
    // Add change event listener to the select element
    $('#packageSelect').change(function() {
      // Get the selected value
      var selectedValue = $(this).val();
      // Update the image source based on the selected value
      if (selectedValue === 'dayTour') {
        $('#bookImage').attr('src', './images/gall21.jpg');
      } else if (selectedValue === 'overnight') {
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
            <a class="nav-link" href="book.php">Book</a>
          </li>
          <li class="nav-item">
            <a class="nav-link smooth-scroll" href="index1.php#packages">Packages</a>
          </li>
          <li class="nav-item">
            <a class="nav-link smooth-scroll" href="index1.php#amenities">Amenities</a>
          </li>
          <li class="nav-item">
            <a class="nav-link smooth-scroll" href="index1.php#gallery">Gallery</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link smooth-scroll" href="index1.php#about">About</a>
          </li>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="feedback.php" style="color: #BACD92;">Feedback</a>
          </li>
          
        </ul>
        
      </div>
    </div>
  </nav>
<!-- Navbar End -->
  
  
  <!-- Home Section Start -->
  <div class="home">
      <div class="content text-center">
          <h5 id="abc">ABC Resort</h5>
          
          
          
      </div>
  </div>
<!-- Home Section End -->

<!-- Feedback Form Start-->
<section class="feedback" id="feedback">
<div class="container p-3 rounded ">
  <div class="main-txt p-2" id="form">
    <h1><span>F</span>eedback Form</h1>
  </div>
  <form action="connect2.php" method="post" autocomplete="off" id="feedbackForm">
    <!-- Type Of Rooms -->
    <div class="form-group text-center mt-3 mb-3" id="select">
    <label class="" style="font-size: 20px;">Select Your Package</label>
    <br>
    <select class="" name="packages" id="packageSelect" required>
        <option value="" disabled selected>Package</option>
        <option value="dayTour">Day Tour</option>
        <option value="overnight">Overnight</option>
    </select>
</div>

<div class="row justify-content-center align-items-center" id="form">
    <div class="col-md-6 py-3 py-md-0" id="img">
        <div class="card">
            <img src="./images/gall22.jpg" alt="images" id="bookImage">
        </div>
    </div>
   
        <!-- Amenities Feedback -->
        <div class="form-group">
            <label for="amenitiesFeedback" id="form">Amenities Feedback:</label>
            <textarea class="form-control" id="amenitiesFeedback" rows="3" name="amenitiesFeed" required></textarea><br>
        </div>
        <!-- Overall Feedback -->
        <div class="form-group">
            <label for="overallFeedback" id="form">Overall Impression of the Resort:</label>
            <textarea class="form-control" id="overallFeedback" rows="3" name="overallFeed" required></textarea><br>
        </div>

        <!-- Stars Rating -->
        <div class="feedback-form mt-4" id="form">
            <h1>Star Scale</h1>
            <div class="rating">
                <span class="star" data-value="1" name="rating">&#9733;</span>
                <span class="star" data-value="2" name="rating">&#9733;</span>
                <span class="star" data-value="3" name="rating">&#9733;</span>
                <span class="star" data-value="4" name="rating">&#9733;</span>
                <span class="star" data-value="5" name="rating">&#9733;</span>
            </div>
            <input type="hidden" name="rating" id="rating" value="0"> <!-- Initialize with 0 -->
            <!-- Submit Button -->
            <div class="d-flex justify-content-center mt-4" id="bookForm">
                <input type="submit" value="SUBMIT" class="submit" required>
            </div>
        </div>
    </div>
</form>
</div>
</section>
<!-- Feedback Form End-->
    

      


<button onclick="scrollToTop()" id="scrollToTopBtn"><i class="fas fa-arrow-up"></i></button>



    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
    <script src="js/feedback.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/vanilla.js"></script>
</body>
</html>