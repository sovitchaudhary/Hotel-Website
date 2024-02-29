<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
        integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous" />
</head>

<body>
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="heading mb-3">
                    <h2 class="fw-bold">Check Inquiry</h2>
                </div>
                <div class="border border-dark p-2 rounded">
                    <form action="" class="">
                        <div class="mt-4">
                            <label for="check in">Check in</label>
                            <input type="datetime-local" class="form-control" name="checkin" required />
                        </div>
                        <div class="mt-4">
                            <label for="check out">Check out</label>
                            <input type="datetime-local" class="form-control" name="checkout" required />
                        </div>
                        <div class="row">
                            <div class="col-lg-6 mt-4">
                                <label for="adults">Adult</label>
                                <input type="number" class="form-control" name="adults" min="0" placeholder="0"
                                    required />
                            </div>
                            <div class="col-lg-6 mt-4">
                                <label for="child">Child</label>
                                <input type="number" class="form-control" name="child" min="0" placeholder="0"
                                    required />
                            </div>
                        </div>
                        <div class="mt-4">
                            <label class="form-label">Room Type</label>
                            <select class="form-select col-lg-12">
                                <option selected>Choose Room</option>
                                <option value="Simple">Simple Room</option>
                                <option value="Premium">Premium Room</option>
                                <option value="Family">Family Room</option>
                                <option value="Party">Party Room</option>
                            </select>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary hbtn">check availability</button>
                            <button type="submit" class="btn btn-primary hbtn">cancel</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 mt-4">
                <div class="heading mb-3 mt-0">
                    <h2 class="fw-bold">Location</h2>
                </div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3499.562253165047!2d80.58817297366895!3d28.70273848089244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39a1ed06ff78aa6f%3A0xa8910e5f826722c5!2sHotel%20Basera!5e0!3m2!1sen!2sin!4v1709053045199!5m2!1sen!2sin"
                    width="100%" height="350px" style="border: 0" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 col-md-4 mt-4">
                <div class="heading mb-3">
                    <h2 class="fw-bold">Feedback Form</h2>
                </div>
                <div class="border border-dark p-2 rounded">
                    <form action="">
                        <div class="mt-4">
                            <input type="text" class="form-control" name="name" placeholder="Full Name" required />
                        </div>
                        <div class="mt-4">
                            <input type="tel" class="form-control" name="tel" placeholder="Phone" required />
                        </div>
                        <div class="mt-4">
                            <input type="email" class="form-control" name="email" placeholder="Email" required />
                        </div>
                        <div class="mt-4">
                            <textarea name="message" class="form-control" id="message" cols="23" rows="2"
                                placeholder="message" required></textarea>
                        </div>
                        <button class="btn btn-primary mt-4">send message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous">
    </script>
</body>

</html>