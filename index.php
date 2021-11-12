<?php
   include("admin/lib_db.php");
   include("admin/login.php")
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
    <title>home</title>
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
            <div class="fas fa-user" id="login-btn"></div>
            <a href="booking.php"><button class="booking-btn" id="booking-btn">BOOK NOW!</button></a>
        </div>

        <form action="" class="search-form">
            <input type="search" placeholder="Search here..." id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>



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
    <section class="home" id="home">
        <div class="content">
            <span>
                Welcome To 5 
                <span class="fa fa-star text-primaryy"></span> Hotel
            </span>
            <h1>A Best Place To Stay</h1>
            <a href="booking.php"><button class="booking-btn" id="booking-btn">BOOK NOW!</button></a>
        </div>
        <div class="controls">
            <span class="vid-btn active" data-src="img/video.mp4"></span>
            <span class="vid-btn" data-src="img/video1.mp4"></span>
            <span class="vid-btn" data-src="img/video2.mp4"></span>
            <span class="vid-btn" data-src="img/video3.mp4"></span>
            <span class="vid-btn" data-src="img/video5.mp4"></span>
        </div>
        <div class="video-container">
            <video src="img/video2.mp4" id="video-slider" loop autoplay muted></video>
        </div>
    </section>

    <section class="welcome" id="welcome">
        <div class="container">
            <div class="row">
                <div class="col-md-4 content-left reveal">
                    <h2>Chào Mừng!</h2>
                    <p>Chào mừng bạn đến với hệ thống Website của khách sạn chúng tôi</p>
                    <p>Tại đây bạn sẽ được trải nghiệm những dịch vụ tuyệt vời nhất</p>
                    <p>
                        <a href="#"><button class="booking-btn">Đọc Thêm</button></a>
                        <span>hoặc</span>
                        <button type="button" class="booking-btn btn-primary video-btn" data-bs-toggle="modal" data-src="https://player.vimeo.com/video/67125737?h=f26f94ab45" data-bs-target="#myModal">Xem video</button>
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: 15rem;">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></span></button>
                                        <!-- 16:9 aspect ratio -->
                                        <div class="ratio ratio-16x9">
                                            <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </p>
                </div>
                <div class="col-md-7 reveal">
                    <img src="https://preview.colorlib.com/theme/casahotel/img/xabout_feature_image.png.pagespeed.ic.cjiHIS3y1d.webp" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="offers">
        <div class="container">
            <div class="head reveal">
                <h2>Ưu Đãi Đặc Biệt</h2>
                <p>Tại đây bạn sẽ được trải nghiệm những dịch vụ tuyệt vời nhất </p>
            </div>
            <div class="row bg-clor reveal">
                <div class="img-col">
                    <img src="img/phong1.png" alt="">
                </div>
                <div class="info-col col-sm info-room">
                    <span class="text-primaryy">300.000Đ</span> /1 Đêm
                    <h2>Phòng Đơn</h2>
                    <p>Được trang trí với đồ nội thất mộc mạc, quyến rũ.Cùng với các điểm nhấn kiểu Tây Nam đầy phong cách, mỗi phòng nghỉ đều cung cấp một nơi thoải mái để làm việc hoặc nghỉ ngơi với Wi-Fi miễn phí, TV màn hình phẳng và truyền hình cáp.</p>
                    <a href="booking.php"><button class="booking-btn" id="booking-btn">BOOK NOW!</button></a>
                </div>

            </div>
            <div class="row bg-clor reveal">
                <div class="col-md-6 info-room">
                    <span class="text-primaryy">500.000Đ</span> /1 Đêm
                    <h2>Phòng Đôi</h2>
                    <p>Được trang trí với đồ nội thất mộc mạc, quyến rũ.Cùng với các điểm nhấn kiểu Tây Nam đầy phong cách, mỗi phòng nghỉ đều cung cấp một nơi thoải mái để làm việc hoặc nghỉ ngơi với Wi-Fi miễn phí, TV màn hình phẳng và truyền hình cáp.</p>
                    <a href="booking.php"><button class="booking-btn" id="booking-btn">BOOK NOW!</button></a>
                </div>
                <div class="col-md-6">
                    <img src="img/room1.jpg" alt="">
                </div>


            </div>
            <div class="row bg-clor reveal">
                <div class="img-col">
                    <img src="img/phong2.png" alt="">
                </div>
                <div class="info-col col-sm info-room">
                    <span class="text-primaryy">1.500.000Đ</span> /1 Đêm
                    <h2>Phòng Tổng Thống</h2>
                    <p>Được trang trí với đồ nội thất mộc mạc, quyến rũ.Cùng với các điểm nhấn kiểu Tây Nam đầy phong cách, mỗi phòng nghỉ đều cung cấp một nơi thoải mái để làm việc hoặc nghỉ ngơi với Wi-Fi miễn phí, TV màn hình phẳng và truyền hình cáp.</p>
                    <a href="booking.php"><button class="booking-btn" id="booking-btn">BOOK NOW!</button></a>
                </div>

            </div>
            <a href="#"><button class="booking-btn show-room reveal">Xem Tất Cả Các Phòng</button></a>
        </div>

        </div>
    </section>

    <section class="services">
        <div class="container">
            <div class="heading reveal">
                <h1>Dịch vụ và Tiện ích</h1>
                <p>Tại đây bạn sẽ được trải nghiệm những dịch vụ tuyệt vời nhất </p>
            </div>
            <div class="row content reveal">
                <div class="col-md-4 display">
                    <img src="https://sktperfectdemo.com/themepack/hotel/wp-content/uploads/2019/09/facility-icon1.png" alt="">
                    <div class="info">
                        <h2>Nhà Ăn</h2>
                        <p>Nhà ăn sang trọng và ngon miệng</p>
                    </div>
                </div>
                <div class="col-md-4 display">
                    <img src="https://sktperfectdemo.com/themepack/hotel/wp-content/uploads/2019/09/facility-icon2.png" alt="">
                    <div class="info">
                        <h2>Bản Đồ</h2>
                        <p>Dẫn du khách đến nơi cần đến</p>
                    </div>
                </div>
                <div class="col-md-4 display">
                    <img src="https://sktperfectdemo.com/themepack/hotel/wp-content/uploads/2019/09/facility-icon3.png" alt="">
                    <div class="info">
                        <h2>Hồ bơi</h2>
                        <p>Sang trọng và rỗng rãi</p>
                    </div>
                </div>
                <div class="col-md-4 display">
                    <img src="https://sktperfectdemo.com/themepack/hotel/wp-content/uploads/2019/09/facility-icon4.png" alt="">
                    <div class="info">
                        <h2>Phòng Họp</h2>
                        <p>Sang trọng và rỗng rãi</p>
                    </div>
                </div>
                <div class="col-md-4 display">
                    <img src="https://sktperfectdemo.com/themepack/hotel/wp-content/uploads/2019/09/facility-icon5.png" alt="">
                    <div class="info">
                        <h2>Khu nghỉ dưỡng</h2>
                        <p>Sang trọng và rỗng rãi</p>
                    </div>
                </div>
                <div class="col-md-4 display">
                    <img src="https://sktperfectdemo.com/themepack/hotel/wp-content/uploads/2019/09/facility-icon6.png" alt="">
                    <div class="info">
                        <h2>Điều hòa</h2>
                        <p>Hai chiều phục vũ quý khách</p>
                    </div>
                </div>
                <div class="col-md-4 display">
                    <img src="https://sktperfectdemo.com/themepack/hotel/wp-content/uploads/2019/09/facility-icon7.png" alt="">
                    <div class="info">
                        <h2>Phòng Tắm</h2>
                        <p>Hiện đại và rộng rãi</p>
                    </div>

                </div>
                <div class="col-md-4 display">
                    <img src="https://sktperfectdemo.com/themepack/hotel/wp-content/uploads/2019/09/facility-icon8.png" alt="">
                    <div class="info">
                        <h2>Tủ Dựng Đồ</h2>
                        <p>Bảo quản vật dụng quan trọng</p>
                    </div>
                </div>
                <div class="col-md-4 display">
                    <img src="https://sktperfectdemo.com/themepack/hotel/wp-content/uploads/2019/09/facility-icon9.png" alt="">
                    <div class="info">
                        <h2>Lễ Tân 24/7</h2>
                        <p>Luôn sẫn sàng phục vụ</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="review" id="review">
        <div class="heading reveal">
            <h1>Phản Hồi</h1>
        </div>
        <div class="swiper review-slider reveal">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="box">
                        <img src="img/phong1.png" alt="">

                        <h3>Hoàng Minh Giang</h3>
                        <p>Mọi thứ đều sạch sẽ và được bảo quản tốt và có mọi thứ tôi cần. Mỗi khi ở trong thị trấn, tôi đều gặp những người chủ và họ rất tốt và hữu ích. Tôi muốn giới thiệu khách sạn này cho bất kỳ ai muốn có một nơi yên tĩnh an toàn</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="img/phong2.png" alt="">

                        <h3>Phạm Anh Duy</h3>
                        <p>Mọi thứ đều sạch sẽ và được bảo quản tốt và có mọi thứ tôi cần. Mỗi khi ở trong thị trấn, tôi đều gặp những người chủ và họ rất tốt và hữu ích. Tôi muốn giới thiệu khách sạn này cho bất kỳ ai muốn có một nơi yên tĩnh an toàn</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="img/phong3.png" alt="">

                        <h3>Cao Thị Châm</h3>
                        <p>Mọi thứ đều sạch sẽ và được bảo quản tốt và có mọi thứ tôi cần. Mỗi khi ở trong thị trấn, tôi đều gặp những người chủ và họ rất tốt và hữu ích. Tôi muốn giới thiệu khách sạn này cho bất kỳ ai muốn có một nơi yên tĩnh an toàn</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="img/room1.jpg" alt="">

                        <h3>Mixi Moi</h3>
                        <p>Mọi thứ đều sạch sẽ và được bảo quản tốt và có mọi thứ tôi cần. Mỗi khi ở trong thị trấn, tôi đều gặp những người chủ và họ rất tốt và hữu ích. Tôi muốn giới thiệu khách sạn này cho bất kỳ ai muốn có một nơi yên tĩnh an toàn</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
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