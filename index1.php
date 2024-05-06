<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABC Resort</title>

    <link rel="stylesheet" href="styles.css">
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel = "stylesheet" href = "bootstrap-5.0.2-dist/css/bootstrap.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

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

    



</head>

<body>
    





    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-custom" id="navbar">
      <div class="container">
          <a class="navbar-brand" href="login.php" id="logo">
              <img src="./images/logo.png" alt="ABC Resort Logo">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
              <span><i class="fa-solid fa-bars"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                      <a class="nav-link active" href="index1.php" style="color: #BACD92;">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="book.php">Book</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#packages">Packages</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#amenities">Amenities</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#gallery">Gallery</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#about">About</a>
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
    <div class="home">
        <div class="content">
            <h5 class="wtar">Welcome to ABC Resort</h5>
            <h1>
              <span class="static-text" id="ej">Enjoy the</span> 
               <span class="changecontent"></span>
              </h1>
            <p class="DPAAR">Discover Paradise at ABC Resort: Where Every Moment is Unforgettable</p>
            <a href="book.php">Book Now</a>
        </div>
    </div>
    <!-- Home Section End -->




    <!-- Section Packages Start -->
    <section class="packages p-5" id="packages">
      <div class="container">

        <div class="main-txt p-2 text-center">
          <h1><span>P</span>ackages</h1>
        </div>
    
        <div class="row justify-content-center mt-4">
    
          <div class="col-md-7">
            <div class="card h-100 d-flex flex-column justify-content-between" id="card1">
              <img src="./images/gall21.jpg" class="card-img-top" alt="daytour">
              <div class="card-body text-center">
                <h3 class="card-title">Day Tour</h3>
                <p class="card-text">Included in this package, you will have the opportunity to fully immerse yourself in the splendor of our day tour. Our comprehensive amenities cater to your every need, ensuring a memorable and comfortable stay at our private resort. From the inviting rooms to the dynamic gaming area, and a plethora of additional offerings, including access to our refreshing pool and the option to showcase your vocal talents with our karaoke facilities, your experience with us promises to be nothing short of extraordinary.</p>
                <div class="star">
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </div>
                <h6>Price: <strong> ₱6,999</strong></h6>
                <a href="book.php#book1" class="btn btn-primary custom-btn-width smooth-scroll" onclick="changeImage()" >Book Now</a>
              </div>
            </div>
          </div>
    
          <div class="col-md-7 mt-4 mt-md-5">
            <div class="card h-100 d-flex flex-column justify-content-between" id="card2">
              <img src="./images/gall19.jpg" class="card-img-top" alt="overnight">
              <div class="card-body text-center">
                <h3 class="card-title">Overnight</h3>
                <p class="card-text">For our overnight package, you will continue to experience the enchantment of our resort, even as the day transitions into night. Our strategically placed lighting accentuates the beauty of our surroundings, creating a mesmerizing ambiance for our guests. As you explore the resort, you'll find that every corner is adorned with care, ensuring a visually stunning experience that delights the senses and enhances your stay with us.</p>
                <div class="star">
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star"></i>
                </div>
                <h6>Price: <strong> ₱12,999</strong></h6>
                <a href="book.php#book1"  class="btn btn-primary custom-btn-width" onclick="changeImage()" id="bookButton">Book Now</a>
              </div>
            </div>
          </div>
    
        </div>
      </div>
    </section>

   
    <!-- Section Packages End -->

    





    <!-- Section Amenities Start -->
    <section class="amenities p-5" id="amenities" >
      <div class="container">
    
        <div class="main-txt p-2 text-center">
          <h1><span>A</span>menities</h1>
        </div>
    
        <div class="row justify-content-center mt-4">
    
          <div class="col-md-4 mt-4" id="amenities1">
            <div class="card h-100 text-center">
              <i class="fa-solid fa-wifi"></i>
              <div class="card-body">
                <h3>Wifi Connectivity</h3>
                <p>Stay connected with complimentary high-speed Wi-Fi throughout the resort. Whether you're lounging by the pool, relaxing in your room, or enjoying a meal at our restaurant, you can easily access the internet to stay in touch with loved ones or catch up on work.</p>
              </div>
            </div>
          </div>
    
          <div class="col-md-4 mt-4" id="amenities2">
            <div class="card h-100 text-center">
              <i class="fa-solid fa-toilet-portable"></i>
              <div class="card-body">
                <h3>Culinary Delights</h3>
                <p>Indulge your taste buds with a culinary journey at our exquisite dining venues. From sumptuous buffets to gourmet à la carte options, our talented chefs curate mouthwatering dishes using fresh, local ingredients. Experience culinary excellence with every bite.</p>
              </div>
            </div>
          </div>
    
          <div class="col-md-4 mt-4" id="amenities3">
            <div class="card h-100 text-center">
              <i class="fa-regular fa-circle"></i>
              <div class="card-body">
                <h3>Billiard and Games</h3>
                <p>Challenge friends and family to a friendly game of billiards or explore our game room featuring various entertainment options. Unwind and enjoy leisurely moments with loved ones amidst a backdrop of fun and excitement.</p>
              </div>
            </div>
          </div>
    
        </div>
    
        <div class="row justify-content-center mt-5">
    
          <div class="col-md-4 mt-4" id="amenities4">
            <div class="card h-100 text-center">
              <i class="fa-solid fa-tv"></i>
              <div class="card-body">
                <h3>Entertainment Galore</h3>
                <p>Our resort comes alive with entertainment options for guests of all ages. From live music performances and cultural shows to exciting themed events, there's always something happening to keep you entertained and engaged.</p>
              </div>
            </div>
          </div>
    
          <div class="col-md-4 mt-4" id="amenities5">
            <div class="card h-100 text-center">
              <i class="fa-solid fa-water-ladder"></i>
              <div class="card-body">
                <h3>Serene Pools</h3>
                <p>Dive into relaxation at our sparkling pools. Whether you prefer a refreshing swim or simply lounging poolside with a tropical drink, our inviting pool areas offer the perfect oasis to unwind and soak up the sun.</p>
              </div>
            </div>
          </div>
    
          <div class="col-md-4 mt-4" id="amenities6">
            <div class="card h-100 text-center">
              <i class="fa-solid fa-smoking"></i>
              <div class="card-body">
                <h3>Designated Smoking Areas</h3>
                <p>For our guests who smoke, we provide designated outdoor smoking areas where you can enjoy your preferred tobacco products while respecting the comfort of others.</p>
              </div>
            </div>
          </div>
    
        </div>
    
      </div>
    </section>
    
    <!-- Section Amenities End -->




    <!-- Section Gallery Start -->
    <section class="gallery p-5"id="gallery">
      <div class="container ">
        <div class="main-txt p-2">
          <h1><span>G</span>allery</h1>
        </div>
        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
          </div>
      
          <div class="carousel-inner">
            <div class="carousel-item active c-item">
              <img src="./images/gall1.png" class="d-block w-100 c-img" alt="Slide 1">
              <div class="carousel-caption bottom-0">
                <p class="display-5 fw-bolder text-capitalize">First Pool Area</p>
                
                
              </div>
            </div>
            <div class="carousel-item c-item">
              <img src="./images/gall2.png" class="d-block w-100 c-img" alt="Slide 2">
              <div class="carousel-caption bottom-0">
                <p class="display-5 fw-bolder text-capitalize">Second Pool Area</p>
                
              </div>
            </div>
            <div class="carousel-item c-item">
              <img src="./images/gall12.png" class="d-block w-100 c-img" alt="Slide 3">
              <div class="carousel-caption bottom-0">
                <p class="display-5 fw-bolder text-capitalize">Third Pool Area</p>
                
              </div>
            </div>
            <div class="carousel-item c-item">
              <img src="./images/gall14.png" class="d-block w-100 c-img" alt="Slide 4">
              <div class="carousel-caption bottom-0">
                <p class="display-5 fw-bolder text-capitalize">Billiard Area</p>
                
              </div>
            </div>
            <div class="carousel-item c-item">
              <img src="./images/gall9.png" class="d-block w-100 c-img" alt="Slide 5">
              <div class="carousel-caption bottom-0">
                <p class="display-5 fw-bolder text-capitalize">Reception Area</p>
                
              </div>
            </div>
            <div class="carousel-item c-item">
              <img src="./images/img2.jpg" class="d-block w-100 c-img" alt="Slide 6">
              <div class="carousel-caption bottom-0">
                <p class="display-5 fw-bolder text-capitalize"> Top View Bahay Kubo</p>
                
              </div>
            </div>
            
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
          
        </div>
    </div>
    </section>
    <!-- Section Gallery End -->








    <!-- About Start -->
    <section class="about p-5" id="about">
      <div class="container">
    
        <div class="main-txt text-center mb-5">
          <h1>About <span>Us</span></h1>
        </div>
    
        <div class="row justify-content-center align-items-center">
          
          <div class="col-md-6 py-3 py-md-0 text-center" id="about_image">
            <div class="card">
              <img src="./images/img14.jpg" class="img-fluid" alt="About Image">
            </div>
          </div>
    
          <div class="col-md-6 py-3 py-md-0 text-center custom-justified-text">
            <h2 class="p-1" id="about_welcome">Welcome to ABC Resort</h2>
            <p class="text-justify" id="about_nestled">
            Nestled amidst the breathtaking landscapes of San Antonio, For the past four years, we have dedicated ourselves to curating unforgettable experiences. Our resort is a haven where unparalleled natural beauty meets exceptional hospitality, offering guests an unforgettable escape from the ordinary.
            </p>
            <p class="text-justify" id="about_ourstory">
            At ABC Resort, we hold firm to the belief in the profound impact of experiences. Situated amidst serene surroundings, our resort offers a harmonious blend of luxury relaxation, and adventure, reflected in our meticulously appointed accommodations and world-class amenities. Our esteemed team is committed to surpassing your expectations, ensuring that each moment spent with us is nothing short of exceptional, characterized by personalized service and genuine hospitality.
            </p>
          </div>
    
        </div>
    
      </div>
    </section>
    
    <!-- About End -->








    <!-- Footer Start -->
    <footer class="footer p-3" id="footer" >
      <h1><span>ABC </span>RESORT</h1>
      <p class="ti-4">ABS Resort is your ultimate destination for relaxation and adventure. Nestled in a pristine natural setting, our resort offers luxurious accommodations, world-class amenities, and breathtaking views. Whether you seek a tranquil escape by the poolside, thrilling outdoor activities, or indulgent spa treatments, ABS Resort promises an unforgettable experience. Join us and discover paradise at its finest.</p>
      <div class="social-links">
        
        <a href="https://www.facebook.com/abcgardenresort" target="_blank" rel="noopener noreferrer">
          <i class="fab fa-facebook"></i>
        </a>
        
      </div>
      <div class="credit">
        <p>Designed By <a href="#">GROUP 6</a></p>
      </div>
      
    </footer>
    <!-- Footer End -->



    <button onclick="scrollToTop()" id="scrollToTopBtn"><i class="fas fa-arrow-up"></i></button>



    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/vanilla.js"></script>
</body>
</html>