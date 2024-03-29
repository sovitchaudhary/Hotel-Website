<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basera</title>

    <?php include './includes/links.php'; ?>

    <!-- External css link -->
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
    <style>
        .availability-form {
            margin-top: -50px;
            z-index: 2;
            position: relative;
        }

        @media screen and (max-width: 575px) {
            .availability-form {
                margin-top: 25px;
                padding: 0 35px;
            }
        }

        /* @media screen and (max-width:1200px) {
            .availability-form{
            margin-top: 25px;
            padding-right: 35px;
            }
        } */
    </style>
</head>

<body>
    <!-- Header section -->
    <?php include './includes/header.php'; ?>

    <!-- carousel -->
    <div class="container-fluid px-lg-4 mt-4">
        <div class="main">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./img/1.jpg" class="d-block w-100" alt="..." />
                    </div>
                    <div class="carousel-item">
                        <img src="./img/2.jpg" class="d-block w-100" alt="..." />
                    </div>
                    <div class="carousel-item">
                        <img src="./img/3.jpg" class="d-block w-100" alt="..." />
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Check Room availability -->
    <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Check Book Availability</h5>
                <form action="">
                    <div class="row align-items-end">
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight: 500">Check in</label>
                            <input type="date" class="form-control shadow-none" name="dob" id="" />
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight: 500">Check Out</label>
                            <input type="date" class="form-control shadow-none" name="dob" id="" />
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight: 500">Adult</label>
                            <select class="form-select">
                                <option selected>1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight: 500">Children</label>
                            <select class="form-select">
                                <option selected>0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500">Room Type</label>
                            <select class="form-select">
                                <option selected>Choose Room</option>
                                <option value="Simple">Simple Room</option>
                                <option value="Premium">Premium Room</option>
                                <option value="Family">Family Room</option>
                                <option value="Party">Party Room</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3 mt-2">
                            <button type="submit" id="custom-bg"
                                class="btn text-white fw-bold shadow-none custom-bg px-2">submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- content paragrap -->
    <div class="container text-center mt-5 mb-4">
        <div class="row">
            <h2 class="mt-5 mb-4 text-uppercase fw-bold h-font">Why Choose This Hotel</h2>
        </div>
        <div class="row">
            <p class="text-justify">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis magnam aliquid deleniti maiores amet.
                Suscipit, sunt et? Modi repellendus
                ut assumenda corrupti rerum et, at placeat laudantium cum deserunt amet ea veniam consequatur odio eius
                explicabo. Laudantium, molestias?
                Maxime, doloremque, illum quo aperiam deleniti culpa obcaecati vero amet voluptatem asperiores, nobis
                molestiae qui. Obcaecati a cupiditate
                deleniti. Amet aut, voluptatem minus commodi consequuntur quidem ducimus officiis ipsa debitis vero
                perspiciatis! Dicta, iure. Dolore itaque
                sit ad? Hic, voluptates unde quae voluptas exercitationem corrupti sed quisquam! Necessitatibus, rerum
                doloribus corrupti explicabo labore
                ipsa recusandae, rem temporibus enim, voluptas dolorum quasi velit.
            </p>
        </div>
    </div>

    <!-- Our rooms -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
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
                            <span class="badge rounded-pill bg-light text-dark text-wrap"> 1 Bathroom </span>
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
                            <span class="badge rounded-pill bg-light text-dark text-wrap"> 1 Bathroom </span>
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
                            <span class="badge rounded-pill bg-light text-dark text-wrap"> 1 Bathroom </span>
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
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
            </div>
        </div>
    </div>

    <!-- Our Facilities -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>
    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white shadow rounded py-4 my-3">
                <img src="img/wifi.svg" alt="" width="80px" />
                <h5 class="mt-3">WiFi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white shadow rounded py-4 my-3">
                <img src="img/wifi.svg" alt="" width="80px" />
                <h5 class="mt-3">WiFi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white shadow rounded py-4 my-3">
                <img src="img/wifi.svg" alt="" width="80px" />
                <h5 class="mt-3">WiFi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white shadow rounded py-4 my-3">
                <img src="img/wifi.svg" alt="" width="80px" />
                <h5 class="mt-3">WiFi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white shadow rounded py-4 my-3">
                <img src="img/wifi.svg" alt="" width="80px" />
                <h5 class="mt-3">WiFi</h5>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >>></a>
            </div>
        </div>
    </div>

    <?php include './includes/footer.php'; ?>