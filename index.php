<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basera</title>
    <!-- title logo -->
    <link rel="shortcut icon" type="x-icon" href="./img/logo.png" />

    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

    <!-- google fonts cdn -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />

    <!-- External css link -->
    <link rel="stylesheet" type="text/css" href="./css/style.css" />

</head>

<body>
    <!-- Nabar -->
    <nav class="navbar navbar-expand-lg navbar-light px-lg-3 py-lg-2 shadow-sm sticky-top"
        style="background-color: #ddeeff">
        <div class="container-fluid">
            <a class="navbar-brand me-5" href="index.php">
                <!-- fw-bold fs-2 h-font text-success -->
                <img src="img/logo.png" alt="" width="62px" height="50px" />
            </a>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 fw-bold">
                    <li class="nav-item">
                        <a class="nav-link active me-2" aria-current="page" href="index.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="rooms.php">ROOMS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="facilities.php">FACILITIES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CONTACT US</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <button type="button" class="btn btn-outline-dark bg-blue shadow-none me-lg-2 me-3"
                        data-bs-toggle="modal" data-bs-target="#loginModal">
                        Login
                    </button>
                    <div class="d-flex">
                        <button type="button" class="btn btn-outline-dark bg-blue shadow-none me-lg-2 me-3"
                            data-bs-toggle="modal" data-bs-target="#registerModal">
                            Register
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- LoginModel -->
    <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="">
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center"><i
                                class="bi bi-person-circle fs-3 me-2"></i>User Login</h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control shadow-none" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="email" class="form-control shadow-none" />
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <button type="submit" class="btn btn-dark shadow-none">Login</button>
                            <a href="">Forget Password</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Registraion Model -->
    <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="registrationformhandle.php" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center"><i
                                class="bi bi-person-vcard fs-3 me-2"></i>Registration Form</h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Full Name</label>
                                    <input type="text" class="form-control shadow-none" />
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control shadow-none" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Phone Number</label>
                                    <input type="number" class="form-control shadow-none" />
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Id Card</label>
                                    <input type="file" class="form-control shadow-none" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 ps-0 mb-3">
                                    <label class="form-label">Address</label>
                                    <textarea class="form-control shadow-none" name="address" rows="1"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control shadow-none" />
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Conform Password</label>
                                    <input type="password" class="form-control shadow-none" />
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-dark shadow-none" name="signup">Register</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Js link -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>