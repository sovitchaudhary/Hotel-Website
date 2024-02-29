<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>footer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    footer {
        border: 1px solid black;
        background-color: #984a45;
        margin-top: 40px;
    }

    .footer {
        padding: 20px 0px;
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        font-size:14px;
    }

    .left {
        height: 250px;
        width: 250px;
    }

    .center {
        height: 250px;
        width: 280px;
    }

    .right {
        height: 250px;
        width: 250px;
    }

    .heading {
        padding: 10px 0px;
        text-align: center;
    }

    .map {
        padding: 0px 25px;
    }

    .contact {
        padding: 0px 25px;
    }

    .link {
        text-align: center;
    }

    .link a {
        text-decoration: none;
        font-size: xx-large;
        padding: 0px 10px;
        color: #ffff;
    }

    .copy {
        background-color: #a54f49;
        padding: 10px 0px;
        text-align: center;
        font-weight: bolder;
    }

    a .fb {
        color: blue;
    }

    a .tw {
        color: rgb(35, 35, 57);
    }

    .link a:hover {
        background-color: #ffff;
        border-radius: 12px;
        color: black
    }

    .contact p:hover {
        color: aliceblue;
    }

    @media (max-width: 767px) {
        .footer {
            display: flex;
            flex-wrap: nowrap;
            flex-direction: column;
        }

        .contact {
            font-size: 10px;
            padding: 0px 50px;
        }
    }
    </style>
</head>

<body>
    <footer>
        <div class="footer">
            <div class="left">
                <h2 class="heading">Map Location</h2>
                <div class="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55996.91159824536!2d80.564846165621!3d28.69542016117189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39a1ed0ffb42cc37%3A0x7fe89470a724b11c!2sDhangadhi%2C%20Nepal!5e0!3m2!1sen!2sin!4v1709010623146!5m2!1sen!2sin"
                        width="200" height="150" style="border: 0" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="center">
                <h2 class="heading">Contact Us</h2>
                <div class="contact">
                    <p>Email: Basera123@gmail.com</p>
                    <p>Phone: +9779864753648</p>
                    <p>Whatsno: +9776474656897</p>
                    <p>Address: Dhangadhi, Nainadevi road</p>
                </div>
            </div>
            <div class="right">
                <h2 class="heading">Social links</h2>
                <div class="link">
                    <a href="#"><i class="fa-brands fa-square-facebook fb"></i></a>
                    <a href="#"><i class="fa-brands fa-square-instagram ins"></i></a>
                    <a href="#"><i class="fa-brands fa-square-x-twitter tw"></i></a>
                </div>
            </div>
        </div>
        <div class="copy">&copy;Hotel Basera | All reserveed</div>
    </footer>

    <!-- Js link -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>