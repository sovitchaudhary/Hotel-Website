<?php
  include "./db/connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Basera|rooms</title>

    <?php include './includes/links.php'; ?>

    <!-- External css link -->
    <link rel="stylesheet" type="text/css" href="./css/style.css" />

    </style>
</head>

<body>
    <?php include './includes/header.php'; ?>

    <div class="container-fluid">
        <!-- left side -->
        <div class="row mx-lg-3 mt-lg-5">
            <div class="col-lg-3 px-lg-0 px-md-0 bg-dark text-center text-white px-5">
                aside1
            </div>

            <!-- Our rooms -->
            <div class="col-lg-9 px-5">
                <h2 class=" pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 my-3">
                            <div class="card border-0 shadow" style="max-width: 350px; margin: auto">
                                <img src="https://media.istockphoto.com/id/1044040182/photo/bedroom-interior.webp?b=1&s=170667a&w=0&k=20&c=8car4dKmpbjBUIL5Oe4so4GQaVqCl54fcbcVtOGAj_g="
                                    alt="" class="card-img-top" />
                                <div class="card-body">
                                    <h5>Simple Room</h5>
                                    <h6 class="mb-4">Rs.800 per night</h6>
                                    <div class="features mb-4">
                                        <h6 class="mb-1">Features</h6>
                                        <span class="badge rounded-pill bg-light text-dark text-wrap"> 1 Bed </span>
                                        <span class="badge rounded-pill bg-light text-dark text-wrap"> 1 Bathroom
                                        </span>
                                        <span class="badge rounded-pill bg-light text-dark text-wrap"> 1 Balcony </span>
                                    </div>
                                    <div class="facilities mb-4">
                                        <h6 class="mb-1">Facilities</h6>
                                        <span class="badge rounded-pill bg-light text-dark text-wrap"> WiFi </span>
                                        <span class="badge rounded-pill bg-light text-dark text-wrap"> TV </span>
                                        <span class="badge rounded-pill bg-light text-dark text-wrap"> AC </span>
                                    </div>
                                    <div class="rating mb-4">
                                        <h6 class="mb-1">Rating</h6>
                                        <span class="badge rounded-pill bg-light">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                        </span>
                                    </div>
                                    <div class="d-flex justify-content-evenly">
                                        <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                                        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 my-3">
                            <div class="card border-0 shadow" style="max-width: 350px; margin: auto">
                                <img src="https://media.istockphoto.com/id/1044040182/photo/bedroom-interior.webp?b=1&s=170667a&w=0&k=20&c=8car4dKmpbjBUIL5Oe4so4GQaVqCl54fcbcVtOGAj_g="
                                    alt="" class="card-img-top" />
                                <div class="card-body">
                                    <h5>Simple Room</h5>
                                    <h6 class="mb-4">Rs.800 per night</h6>
                                    <div class="features mb-4">
                                        <h6 class="mb-1">Features</h6>
                                        <span class="badge rounded-pill bg-light text-dark text-wrap"> 1 Bed </span>
                                        <span class="badge rounded-pill bg-light text-dark text-wrap"> 1 Bathroom
                                        </span>
                                        <span class="badge rounded-pill bg-light text-dark text-wrap"> 1 Balcony </span>
                                    </div>
                                    <div class="facilities mb-4">
                                        <h6 class="mb-1">Facilities</h6>
                                        <span class="badge rounded-pill bg-light text-dark text-wrap"> WiFi </span>
                                        <span class="badge rounded-pill bg-light text-dark text-wrap"> TV </span>
                                        <span class="badge rounded-pill bg-light text-dark text-wrap"> AC </span>
                                    </div>
                                    <div class="rating mb-4">
                                        <h6 class="mb-1">Rating</h6>
                                        <span class="badge rounded-pill bg-light">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                        </span>
                                    </div>
                                    <div class="d-flex justify-content-evenly">
                                        <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                                        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 my-3">
                            <div class="card border-0 shadow" style="max-width: 350px; margin: auto">
                                <img src="https://media.istockphoto.com/id/1044040182/photo/bedroom-interior.webp?b=1&s=170667a&w=0&k=20&c=8car4dKmpbjBUIL5Oe4so4GQaVqCl54fcbcVtOGAj_g="
                                    alt="" class="card-img-top" />
                                <div class="card-body">
                                    <h5>Simple Room</h5>
                                    <h6 class="mb-4">Rs.800 per night</h6>
                                    <div class="features mb-4">
                                        <h6 class="mb-1">Features</h6>
                                        <span class="badge rounded-pill bg-light text-dark text-wrap"> 1 Bed </span>
                                        <span class="badge rounded-pill bg-light text-dark text-wrap"> 1 Bathroom
                                        </span>
                                        <span class="badge rounded-pill bg-light text-dark text-wrap"> 1 Balcony </span>
                                    </div>
                                    <div class="facilities mb-4">
                                        <h6 class="mb-1">Facilities</h6>
                                        <span class="badge rounded-pill bg-light text-dark text-wrap"> WiFi </span>
                                        <span class="badge rounded-pill bg-light text-dark text-wrap"> TV </span>
                                        <span class="badge rounded-pill bg-light text-dark text-wrap"> AC </span>
                                    </div>
                                    <div class="rating mb-4">
                                        <h6 class="mb-1">Rating</h6>
                                        <span class="badge rounded-pill bg-light">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                        </span>
                                    </div>
                                    <div class="d-flex justify-content-evenly">
                                        <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                                        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 text-center mt-5">
                            <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms
                                >>></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include './includes/footer.php'; ?>
