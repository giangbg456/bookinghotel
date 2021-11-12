<?php
    include("admin/lib_db.php");
    include("admin/login.php");
    $data['name'] = isset($_POST['name']) ? $_POST['name'] : '';
    $data['mail'] = isset($_POST['mail']) ? $_POST['mail'] : '';
    $data['tel'] = isset($_POST['tel']) ? $_POST['tel'] : '';
    $data['mes'] = isset($_POST['mes']) ? $_POST['mes'] : '';
    $name = $data['name'];
    $mail = $data['mail'];
    $tel = $data['tel'];
    $mes = $data['mes'];
    if(isset($_POST["save"])){        
        // $query = "INSERT INTO `checked`( `name`, `contact`, `date_in`, `date_out`, `room_id`) VALUES ('$name','$contact','$date_in1','$date_out1','$roomid')";
        $query = "INSERT INTO `phanhoi`( `name`, `mail`, `tel`, `mes`) VALUES ('$name','$mail','$tel','$mes')";
        exec_update($query);
        echo '<script language="javascript">';
        echo 'alert("Phản hồi Thành Công!")';
        echo '</script>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <title>contact</title>
</head>

<body>
<header class="header">
        <a href="index.php" class="logo">
            <img src="img/logo.jpg" style="width: 100px;">
        </a>
        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="phong.php">Rooms</a>
            <a href="events.php">events</a>
            <a href="contact.php">contact</a>
        </nav>
        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>

            <div class="fas fa-user" id="login-btn"><a href="admin/login.php"></a></div>
            <a href="booking.php"><button class="booking-btn" id="booking-btn">BOOK NOW!</button></a>
        </div>

        


        <form action="" class="login-form" method="POST">
            <img src="img/user.png" alt="" style="width:50%;  margin-left:50px;";>
            <div class="form-group">
                <label for="username" class="control-label">Username</label>
                <input type="text" id="username" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password" class="control-label">Password</label>
                <input type="password" id="password" name="password" class="form-control">
            </div>
            <button class="btn-sm btn btn-block btn-wave col-md-4 btn-primary">Login</button>
        </form>

    </header>
    <section class="contact">
        <div class="bannerphong">
            <img class="bannerphong" src="img/bedroom.jpg">
        </div>
        <div class="contentct">
            <h2>Contact Us</h2>
            <p>Thank you for your interest in staying at the San Mateo Inn. We appreciate your booking directly by using the booking button below.  Feel free to give us a call if you need help.  We truly look forward to seeing you!</p>
        </div>
        <div class="containerct">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>175 Tây Sơn<br>Đống Đa, Hà Nội,<br>Việt Nam</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>(+84) 9999999999999</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>Hello@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="contactForm">
                <form action="contact.php" method = "post">
                    <h2>Send Message</h2>
                    <div class="inputBox">
                        <input type="text" name="name" required="required">
                        <span>Your Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="mail" required="required">
                        <span>Your Mail</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="tel" required="required">
                        <span>Your TelePhone</span>
                    </div>
                    <div class="inputBox">
                        <textarea required="required" name="mes"></textarea>
                        <span>Your Message</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" name="save" value="Send">
                    </div>
                </form>
            </div>
        </div>
        
    </section>

    <footer class="bg-dark" style="height: 100%;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <ul class="list-unstyled mt-5 mx-5">
                        <li>
                            <a class="nav-link text-white" href="#!">About Us</a>
                        </li>
                        <li>
                            <a class="nav-link text-white" href="#!">Terms & Condition</a>
                        </li>
                        <li>
                            <a class="nav-link text-white" href="#!">Privacy Policy</a>
                        </li>
                        <li>
                            <a class="nav-link text-white" href="#!">Rooms</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-unstyled mt-5 mx-5">
                        <li>
                            <a class="nav-link text-white" href="#!">The Rooms & Suites</a>
                        </li>
                        <li>
                            <a class="nav-link text-white" href="#!">About Us</a>
                        </li>
                        <li>
                            <a class="nav-link text-white" href="#!">Contact Us</a>
                        </li>
                        <li>
                            <a class="nav-link text-white" href="#!">Restaurant</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-unstyled mt-5 mx-5">
                        <li>
                            <p class="text-white"><i class="fas fa-map-marker-alt" style="color:blue;"></i> Address:</p>
                            <p class="text-white-50">175 Tây Sơn Đống Đa Hà Nội</p>
                        </li>
                        <li>
                            <p class="text-white"><i class="fas fa-phone" style="color: blue;"></i> Phone:</p>
                            <p class="text-white-50">(+84) 9999999999999</p>
                        </li>
                        <li>
                            <p class="text-white"><i class="fas fa-envelope" style="color: blue;"></i> Email:</p>
                            <p class="text-white-50">hello@gmail.com</p>
                        </li>
                        <li>
                            <a href=""><i class="fab fa-instagram fa-lg" style="color: blue;"></i></a>
                            <a href=""><i class="fab fa-facebook-f fa-lg" style="color: blue; margin-left: 15px;"></i></a>
                            <a href=""> </a>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="row justify-content-between mt-4">
                <div class="col-md-5 mx-5">
                    <h6 class="text-white-50">Copyright &copy; 2021 by Nhom 2</h6>
                </div>
            </div>
        </div>

    </footer>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="js/scriptt.js"></script>
</body>

</html>