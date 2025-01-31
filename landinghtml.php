<!DOCTYPE html>
<html lang="en">
<head>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landingpage Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="landing.css" rel="stylesheet">
    
<body>
    <!--This is header section-->
    <header>
        <!--navbar-->
         <nav class="navbar navbar-expand-lg">
            <div class="container">
                    <a class="text-light text-decoration-none " href="#"><h1>PARTHIBAN S</h1></a>
                    <!--Navbar icon in this field is modified to button-->
                    <button class="navbar-toggler text-light" type="button "  data-bs-toggle="collapse" data-bs-target="#navbarNav"><span class="navbar-toggler-icon "></span></button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ms-auto" >
                    <li ><a  href="#hero" class="active nav-link text-light">Home</a></li>
                    <li ><a  class="nav-link text-light" href="#about">About</a></li>
                    <li class="nav-item"><a  class="nav-link text-light" href="#services">Services</a></li>
                    <li class="nav-item "><a  class="nav-link text-light" href="#team" >Team</a></li>   
                      <div class="dropdown">
                        <button class="btn  dropdown-toggle text-light " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                          Dropdown 
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item" href="#">Dropdown</a></li>
                          <div class="btn-group dropstart">
                            <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                              Dropstart
                            </button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Dropdown 1</a></li>
                          <li><a class="dropdown-item" href="#">Dropdown 2</a></li>
                          <li><a class="dropdown-item" href="#">Dropdown 3</a></li>
                          <li><a class="dropdown-item" href="#">Dropdown 4</a></li>
                            </ul>
                          </div>
                          
                          <li><a class="dropdown-item" href="#">Dropdown 1</a></li>
                          <li><a class="dropdown-item" href="#">Dropdown 2</a></li>
                          <li><a class="dropdown-item" href="#">Dropdown 3</a></li>
                          <li><a class="dropdown-item" href="#">Dropdown 4</a></li>
                        </ul>
                      </div>
                    
                    <li class="nav-item"><a  class="nav-link text-light" href="#contact" >Contact</a></li>
                    
                   </ul>
                </div> 
            </div>
         </nav>
    </header>
  <main>
    <!--This is home section-->
    <section id="hero" class="hero section ">
        <div class="container">
            <div class="row ">
              <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center ">
                <h1 class="text-light  mt-4 pt-4">Better Solutions For Your Business</h1>
                <p class=" text-light text-capitalize fs-5 mt-4 pt-4">We are team of talented designers making websites with Bootstrap</p>
                <div class="d-flex ">
                  <a href="#about" class="btn-get-started mt-5 py-2">Get Started</a>
                 
                </a>
                  <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video mt-5  d-flex align-items-center">
                    <!-- Font Awesome video icon -->
                    <i class="fas fa-play-circle me-2"></i> 
                    <span>Watch Video</span>
                  </a>
                  
                </div>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 hero-img.png my-4 pb-5 pt-4" >
                <!--first img-->
                <img src="Landingpageassets/hero-img.png" class="card-img-top" alt="...">
              </div>
            </div>
          </div>
    </section>
   
    <section id="about" class="about section m-5">

      <!-- Section Title -->
      <div class="container section-title d-flex justify-content-center">
        <h1 class="fs-2 fw-bold text-secondary fst-italic custom-title">ABOUT US</h1>
      </div><!-- End Section Title -->
    
      <div class="container">
        <div class="row gy-4 mt-5">
          <div class="col-lg-6 content">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul class="list-inline">
              <li><i class="bi bi-check2-circle text-primary fs-4"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
              <li><i class="bi bi-check2-circle text-primary fs-4"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
              <li><i class="bi bi-check2-circle text-primary fs-4"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo</span></li>
            </ul>
          </div>
          <div class="col-lg-6">
            <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a href="#" class="read-more fs-5"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
    
    </section>
    
    <section id="why-us" class="section why-us light-background" data-builder="section">

      <div class="container-fluid">

        <div class="row gy-4">

          <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">

            <div class="content px-xl-5 ">
              <h3><span class="text-primary fw-italic fs-3 fst-italic ">Eum ipsam laborum deleniti </span><strong class="text-primary fw-italic fs-2 fst-italic">velit pariatur architecto aut nihil</strong></h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p>
            </div>
            <div class="accordion container-fluid px-xl-5" id="accordionExample">
              <div class="accordion-item" >
                <h4 class="accordion-header" id="headingOne">
                  <button class="accordion-button  collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    <span class="text-primary me-2">01</span><h6 class="about-arrow"> Non consectetur a erat nam at lectus urna duis?</h6>
                  </button>
                </h4>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item mt-2 container-fluid px-xl-1">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                   <span class="text-primary me-2">02</span> <h6 class="about-arrow"> Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</h6>
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item mt-2 container-fluid px-xl-1">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                   <span class="text-primary me-2">03</span> <h6 class="about-arrow">  Dolor sit amet consectetur adipiscing elit pellentesque?</h6>
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse mb-5" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
                  </div>
                </div>
              </div>
          </div>
         
        </div>

          <div class="col-lg-5 order-1 order-lg-2 why-us-img ">
            <img src="Landingpageassets/why-us.png" class="img-fluid my-5" alt=" " >
          </div>
        </div>
      </div>
    </section>
    <section id="skills" class="skills section py-5">
      <div class="container py-5">
        <div class="row align-items-center gy-4">
          <!-- Left Column: Image -->
          <div class="col-lg-6 mb-4 mb-lg-0 d-flex justify-content-center">
            <img src="Landingpageassets/skills.png" class="img-fluid" alt="Illustration showcasing skills">
          </div>
          <!-- Right Column: Skills Content -->
          <div class="col-lg-6">
            <h3 class="fw-bold fst-italic text-primary mb-3">
              Voluptatem dignissimos provident quasi corporis voluptas
            </h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <!-- Skills Progress Bars -->
            <div class="skills-content">
              <!-- HTML Progress -->
              <div class="mb-4">
                <div class="d-flex justify-content-between">
                  <strong class="text-primary">HTML</strong>
                  <i class="val text-primary">100%</i>
                </div>
                <div class="progress">
                  <div class="progress-bar bg-light-blue" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <!-- CSS Progress -->
              <div class="mb-4">
                <div class="d-flex justify-content-between">
                  <strong class="text-primary">CSS</strong>
                  <i class="val text-primary">90%</i>
                </div>
                <div class="progress">
                  <div class="progress-bar bg-light-blue" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <!-- JavaScript Progress -->
              <div class="mb-4">
                <div class="d-flex justify-content-between">
                  <strong class="text-primary">JavaScript</strong>
                  <i class="val text-primary">75%</i>
                </div>
                <div class="progress">
                  <div class="progress-bar bg-light-blue" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <!-- Photoshop Progress -->
              <div class="mb-4">
                <div class="d-flex justify-content-between">
                  <strong class="text-primary">Photoshop</strong>
                  <i class="val text-primary">55%</i>
                </div>
                <div class="progress">
                  <div class="progress-bar bg-light-blue" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
                                <!--Services section-->
    
    <section id="services" class="services section light-background pt-5">

      <!-- Section Title -->
      <div class="container section-title">
        <h1 class="d-flex justify-content-center my-5 fs-2 fw-bold text-secondary fst-italic">SERVICES</h1>
        <p class="d-flex justify-content-center pb-5">Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->
    
      <div class="container">
        <div class="row gy-4">
    
          <!-- Service Item 1 -->
          <div class="col-lg-3 col-md-6 col-12 d-flex">
            <div class="card w-100">
              <div class="card-body service-item position-relative text-center">
                <div class="icon text-primary fs-3 mb-3"><i class="bi bi-activity"></i></div>
                <h4><a href="#" class="stretched-link text-decoration-none">Lorem Ipsum</a></h4>
                <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
              </div>
            </div>
          </div><!-- End Service Item -->
    
          <!-- Service Item 2 -->
          <div class="col-lg-3 col-md-6 col-12 d-flex">
            <div class="card w-100">
              <div class="card-body service-item position-relative text-center">
                <div class="icon text-primary fs-3 mb-3"><i class="bi bi-bounding-box-circles"></i></div>
                <h4><a href="#" class="stretched-link text-decoration-none">Sed ut perspici</a></h4>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
              </div>
            </div>
          </div><!-- End Service Item -->
    
          <!-- Service Item 3 -->
          <div class="col-lg-3 col-md-6 col-12 d-flex">
            <div class="card w-100">
              <div class="card-body service-item position-relative text-center">
                <div class="icon text-primary fs-3 mb-3"><i class="bi bi-calendar4-week"></i></div>
                <h4><a href="#" class="stretched-link text-decoration-none">Magni Dolores</a></h4>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
              </div>
            </div>
          </div><!-- End Service Item -->
    
          <!-- Service Item 4 -->
          <div class="col-lg-3 col-md-6 col-12 d-flex">
            <div class="card w-100">
              <div class="card-body service-item position-relative text-center">
                <div class="icon text-primary fs-3 mb-3"><i class="bi bi-broadcast"></i></div>
                <h4><a href="#" class="stretched-link text-decoration-none">Nemo Enim</a></h4>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
              </div>
            </div>
          </div><!-- End Service Item -->
    
        </div>
      </div>
                    <!--Call-To-action Section-->
      <section id="call-to-action" class="call-to-action section dark-background mt-5">
        <div class="container">
          <div class="row align-items-center">
            <!-- Text Content -->
            <div class="col-12 col-xl-9 text-center text-xl-start">
              <h1 class="mt-5 text-light fst-italic">Call To Action</h1>
              <p class="pt-4 mt-3 fs-4 text-light fst-italic">
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
            <!-- Button -->
            <div class="col-12 col-xl-3 text-center text-xl-end mt-3 mt-xl-0">
              <a href="#" id="call" class="btn text-light fst-italic fs-5 p-1 px-4">
                Call Action
              </a>
            </div>
          </div>
        </div>
      </section>
                  <!--Team Section-->
      <section id="team" class="team section">
        <!-- Section Title -->
        <div class="container section-title">
          <h1 class="d-flex justify-content-center my-5 fs-2 fw-bold text-secondary fst-italic">TEAM</h1>
          <p class="text-center mb-4">Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->
      
        <div class="container">
          <div class="row gy-4">
            <!-- Team Member 1 -->
            <div class="col-sm-12 col-md-6 col-lg-6">
              <div class="card" id="Team-member">
                <div class="card-body d-flex flex-column flex-md-row align-items-center">
                  <!-- Image -->
                  <img src="Landingpageassets/team-1.jpg" 
                       class="img-fluid rounded-circle my-3 my-md-0 mx-auto mx-md-0 d-block" 
                       alt="Walter White" 
                       style="width: 150px; height: 150px; object-fit: cover;">
                  <!-- Member Info -->
                  <div class="member-info ms-md-3 text-center text-md-start">
                    <h4>Walter White</h4>
                    <span>Chief Executive Officer</span>
                    <p class="pb-3">Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                    <div class="social">
                      <a href="#"><i class="bi bi-twitter px-2 fs-3"></i></a>
                      <a href="#"><i class="bi bi-facebook px-2 fs-3"></i></a>
                      <a href="#"><i class="bi bi-instagram px-2 fs-3"></i></a>
                      <a href="#"><i class="bi bi-linkedin px-2 fs-3"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Team Member -->
      
            <!-- Repeat the same structure for other team members -->
      
            <!-- Team Member 2 -->
            <div class="col-sm-12 col-md-6 col-lg-6">
              <div class="card" id="Team-member">
                <div class="card-body d-flex flex-column flex-md-row align-items-center">
                  <img src="Landingpageassets/team-2.jpg" 
                       class="img-fluid rounded-circle my-3 my-md-0 mx-auto mx-md-0 d-block" 
                       alt="Sarah Johnson" 
                       style="width: 150px; height: 150px; object-fit: cover;">
                  <div class="member-info ms-md-3 text-center text-md-start">
                    <h4>Sarah Jhonson</h4>
                    <span>Product Manager</span>
                    <p class="pb-3">Aut maiores voluptates amet et quis praesentium qui senda para</p>
                    <div class="social">
                      <a href="#"><i class="bi bi-twitter px-2 fs-3"></i></a>
                      <a href="#"><i class="bi bi-facebook px-2 fs-3"></i></a>
                      <a href="#"><i class="bi bi-instagram px-2 fs-3"></i></a>
                      <a href="#"><i class="bi bi-linkedin px-2 fs-3"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Team Member -->
      
            <div class="col-sm-12 col-md-6 col-lg-6">
              <div class="card" id="Team-member">
                <div class="card-body d-flex flex-column flex-md-row align-items-center">
                  <img src="Landingpageassets/team-3.jpg" 
                       class="img-fluid rounded-circle my-3 my-md-0 mx-auto mx-md-0 d-block" 
                       alt="William Anderson" 
                       style="width: 150px; height: 150px; object-fit: cover;">
                  <div class="member-info ms-md-3 text-center text-md-start">
                    <h4>William Anderson</h4>
                    <span>CTO</span>
                    <p class="pb-3">Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                    <div class="social">
                      <a href="#"><i class="bi bi-twitter px-2 fs-3"></i></a>
                      <a href="#"><i class="bi bi-facebook px-2 fs-3"></i></a>
                      <a href="#"><i class="bi bi-instagram px-2 fs-3"></i></a>
                      <a href="#"><i class="bi bi-linkedin px-2 fs-3"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Team Member -->
                    <!-- Team Member 4 -->
            <div class="col-sm-12 col-md-6 col-lg-6">
              <div class="card" id="Team-member">
                <div class="card-body d-flex flex-column flex-md-row align-items-center">
                  <img src="Landingpageassets/team-4.jpg" 
                       class="img-fluid rounded-circle my-3 my-md-0 mx-auto mx-md-0 d-block" 
                       alt="Amanda Jepson" 
                       style="width: 150px; height: 150px; object-fit: cover;">
                  <div class="member-info ms-md-3 text-center text-md-start">
                    <h4>Amanda Jepson</h4>
                    <span>Accountant</span>
                    <p class="pb-3">Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                    <div class="social">
                      <a href="#"><i class="bi bi-twitter px-2 fs-3"></i></a>
                      <a href="#"><i class="bi bi-facebook px-2 fs-3"></i></a>
                      <a href="#"><i class="bi bi-instagram px-2 fs-3"></i></a>
                      <a href="#"><i class="bi bi-linkedin px-2 fs-3"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Team Member -->
            
          </div>
        </div>
        <!-- Team Member 3 -->

      </section>

      <section id="faq-2" class="faq-2 section bg-white ">
        
        <!-- Section Title -->
        <div class="container section-title">
          <h2 class="fs-1 text-secondary my-5 pt-3 d-flex justify-content-center">Frequently Asked Questions</h2>
          <p class="text-align-center">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div><!-- End Section Title -->
          <!--In this part-->
          <div class="container accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                  <i style="color:#47B2E4" class="faq-icon bi bi-question-circle fs-4 me-3"></i><h5 style="color:#47B2E4" class="fst-italic">Non consectetur a erat nam at lectus urna duis?</h5>
                </button>
              </h2>
              <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body">
                  <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                  <i style="color:#47B2E4" class="faq-icon bi bi-question-circle fs-4 me-3"></i><h5 style="color:#47B2E4" class="fst-italic">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</h5>
                </button>
              </h2>
              <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                <div class="accordion-body">
                  <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                  <i style="color:#47B2E4" class="faq-icon bi bi-question-circle fs-4 me-3"></i><h5 style="color:#47B2E4" class="fst-italic">Dolor sit amet consectetur adipiscing elit pellentesque?</h5>
                </button>
              </h2>
              <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                <div class="accordion-body">
                  <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                  <i style="color:#47B2E4" class="faq-icon bi bi-question-circle fs-4 me-3"></i><h5 style="color:#47B2E4" class="fst-italic">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h5>
                </button>
              </h2>
              <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
                <div class="accordion-body">
                  <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
                  <i style="color:#47B2E4" class="faq-icon bi bi-question-circle fs-4 me-3 "></i><h5 style="color:#47B2E4" class="fst-italic">Tempus quam pellentesque nec nam aliquam sem et tortor consequat?</h5>
              </h2>
              <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFive">
                <div class="accordion-body">
                  <p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section id="contact" class="contact section">
          <!-- Section Title -->
          <div class="container section-title">
            <h2 class="d-flex justify-content-center text-secondary fst-italic my-5">Contact</h2>
            <p class="d-flex justify-content-center fst-italic">Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
          </div>
          <!-- End Section Title -->
        
          <div class="container">
            <div class="row gy-4 justify-content-between">
              <!-- Left Side Section -->
              <div style="border-top: 5px #47B2E4 solid;border-bottom: 5px #47B2E4 solid;" class="card col-lg-5">
                <div class="info-wrap card-body">
                  <div class="info-item d-flex">
                    <i class="text-primary fs-4 p-1 bi bi-geo-alt flex-shrink-0"></i>
                    <div>
                      <h3>Address</h3>
                      <p>Airavad Web Solutions
                        First floor, South Facing, Sarveswaran Towers, Door No. 7, 18, Sahadevepuram road, Rajaram Nagar, Salem, Tamil Nadu 636007</p>
                    </div>
                  </div>
                  <!-- End Info Item -->
                  <div class="info-item d-flex aos-init" data-aos="fade-up" data-aos-delay="300">
                    <i class="text-primary fs-4 p-1 bi bi-telephone flex-shrink-0"></i>
                    <div>
                      <h3>Call Us</h3>
                     <a class="text-decoration-none" href="tel:+919345909655" target="_blank">+91 9345909655</a>
                    </div>
                  </div>
                  <!-- End Info Item -->
                  <div class="info-item d-flex aos-init" data-aos="fade-up" data-aos-delay="400">
                    <i class="text-primary fs-4 p-1 bi bi-envelope flex-shrink-0"></i>
                    <div>
                     <h3>Email :</h3> 
                     <a class="text-decoration-none" href="mailto:contact@airavadweb.solutions" target="_blank">
                        contact@airavadweb.solution</a></label>
                    </div>
                  </div>
                  <!-- End Info Item -->
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3485.40484781671!2d78.15417001153384!3d11.662349978488933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3babf1504b8d492f%3A0x386a9c3d41ce9247!2sAiravad%20Web%20Solutions!5e0!3m2!1sta!2sin!4v1736862213360!5m2!1sta!2sin" frameborder="0" style="border:0; width: 100%; height: 300px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
        
              <!-- Right Side Section -->
              <div class="card col-lg-6" style="border-top: 5px solid #47B2E4;border-bottom: 5px #47B2E4 solid;; padding: 20px;">
                <form action="submitform.php" method="post" id="form">
                  <div class="row gy-4">
                    <div class="col-md-6">
                      <label for="name-field" class="pb-2 mt-3">Your Name</label>
                      <input type="text" name="name" id="name-field" class="form-control" >
                      <div class="error"></div>
                    </div>
        
                    <div class="col-md-6">
                      <label for="email-field" class="pb-2 mt-3">Your Email</label>
                      <input type="email" class="form-control" name="email" id="email-field" >
                      <div class="error"></div>
                    </div>
        
                    <div class="col-md-12">
                      <label for="subject-field" class="pb-2">Subject</label>
                      <input type="text" class="form-control" name="subject" id="subject-field" >
                      <div class="error"></div>
                    </div>
        
                    <div class="col-md-12">
                      <label for="message-field" class="pb-2">Message</label>
                      <textarea class="form-control" name="message" rows="10" id="message-field" ></textarea>
                      <div class="error"></div>
                    </div>
        
                    <div class="col-md-12 text-center">
                      <button style="background-color: #47B2E4;" class="service-button border-0 rounded-pill p-2" type="submit">Send Message</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- End Contact Form -->
            </div>
          </div>
              <!--using Jqery in contact section-->
          <script src="jquery-validation-1.19.5/jquery.js"></script>
          <script src="jquery-validation-1.19.5/jquery.validate.js"></script>
          <script>
            $(document).ready(function () {
              $.validator.setDefaults({
                submitHandler: function () {
                  alert("submitted!");
                }
              });
        
              $("#form").validate({
                rules: {
                  name: "required",
                  email: {
                    required: true,
                    email: true
                  },
                  subject:"required",
                  message:"required"
                },
                messages: {
                  name: "Please Enter Your name",
                  email: {
                    required: "Please Enter Your email ID",
                    email: "Please Enter Your valid email ID"
                  },
                  subject:"Please Enter your subject",
                  message:"Please Enter your message"
                }
              });
            });
          </script>
        </section>
        

  </main>
  <footer id="footer" class="footer">
    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-6">
            <h3 class="text-secondary py-4 fst-italic">Join Our Newsletter</h3>
            <p class=" py-4 fst-italic text-primary">Subscribe to our newsletter and receive the latest news about our products and services!</p>
            <form action=" " method="post">
              <div class="newsletter-form pb-1 "><input type="email" name="email"><button style="background-color: #47B2E4;" class="rounded-pill px-3 py-2 border-0 text-white" type="submit"> Subscribe</button>
              
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  
   
     <div class="container footer-top p-5">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about ">
          <a href="index.html" class="d-flex align-items-center text-secondary text-decoration-none ">
            <span class="sitename"><h3>PARTHIBAN S</h3></span>
          </a>
          <div class="footer-contact pt-3">
            <h3>Address</h3>
                      <p>Airavad Web Solutions
                        First floor, South Facing, Sarveswaran Towers, Door No. 7, 18, Sahadevepuram road, Rajaram Nagar, Salem, Tamil Nadu 636007</p>
            <p class="mt-3"><strong>Phone :</strong><a class="text-decoration-none" href="tel:+919345909655" target="_blank">+91 9345909655</a><br>
              <p class="mt-3"><strong>Email :</strong> <a class="text-decoration-none" href="mailto:contact@airavadweb.solutions" target="_blank">
                contact@airavadweb.solution</a></label>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4 class="fs-5 text-secondary fw-bold pt-2">Useful Links</h4>
          <ul class="list-inline">
            <li><i class="text-primary bi bi-chevron-right"></i> <a href="#" class="text-decoration-none text-dark ">Home</a></li>
            <li><i class="text-primary bi bi-chevron-right"></i> <a href="#" class="text-decoration-none text-dark ">About us</a></li>
            <li><i class="text-primary bi bi-chevron-right"></i> <a href="#" class="text-decoration-none text-dark ">Services</a></li>
            <li><i class="text-primary bi bi-chevron-right"></i> <a href="#" class="text-decoration-none text-dark ">Terms of service</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h5 class="text-secondary fw-bold mt-2">Our Services</h5>
          <ul class="list-inline">
            <li><i class="text-primary bi bi-chevron-right"></i> <a href="#" class="text-decoration-none text-dark ">Web Design</a></li>
            <li><i class="text-primary bi bi-chevron-right"></i> <a href="#" class="text-decoration-none text-dark ">Web Development</a></li>
            <li><i class="text-primary bi bi-chevron-right"></i> <a href="#" class="text-decoration-none text-dark ">Product Management</a></li>
            <li><i class="text-primary bi bi-chevron-right"></i> <a href="#" class="text-decoration-none text-dark ">Marketing</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12">
          <h4 class="fs-5 text-secondary fw-bold mt-2">Follow Us</h4>
          <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
          <div class="social-links d-flex">
            <a class="fs-4 p-2" href="https://x.com/account/access"  target="_blank"><i class="bi bi-twitter-x"></i></a>
            <a class="facebook fs-4 p-2" href="https://www.facebook.com/airavadwebsolutions?mibextid=ZbWKwL" target="_blank"><i class="bi bi-facebook"></i></a>
            <a class="fs-4 p-2 icon-circle" href="https://www.instagram.com/airavadwebsolutions?igsh=NjRnd2JucGY5NGMz" target="_blank"
            ><i class="bi bi-instagram"></i></a>
            <a class="fs-4 p-2 icon-circle"href="https://www.linkedin.com/company/airavad-web-solutions/" target="_blank"><i class="bi bi-linkedin "></i></a>
          </div>
        </div>

      </div>
    </div>
    <hr>
    <div class="container copyright text-center mt-4 ">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">PARTHIBAN S</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        Designed by <a class="text-decoration-none"  href="https://airavadweb.solutions/">airavad web solutions</a>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </footer>
</body>
</html>

