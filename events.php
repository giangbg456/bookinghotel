<?php
   include("admin/lib_db.php");
    include("admin/login.php");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />

    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="stylesheet" href="css/style.css" />

    <style>
      
.content .list-item {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.content .list-item .item {
  box-shadow: 0 0 10px 1px #ccc;
}

.content .item {
  width: 370px;
  margin-bottom: 50px;
}

.content .item .item__image img {
  width: 370px;
}

.content .item .item__description {
  padding: 30px;
}

.content .item .item__description .date {
  font-size: 16px;
  color: #adb5bd;
  letter-spacing: 4px;
}

.content .item .item__description h2 {
  line-height: 30px;
}

.content .item .item__description h2:hover {
  color: #ffba5b;
  cursor: pointer;
}

.content .item .item__description .detail {
  color: #6c757d;
  padding-top: 10px;
  font-size: 15px;
  line-height: 30px;
}

    </style>
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
    <section class="home" id="home">
      <div class="content">
        <span>
          Welcome To 5
          <span class="fa fa-star text-primaryy"></span> Hotel
        </span>
        <h1>A Best Place To Stay</h1>
        <a href="#"
          ><button class="booking-btn" id="booking-btn">BOOK NOW!</button></a
        >
      </div>
      <div class="controls">
        <span class="vid-btn active" data-src="img/video.mp4"></span>
        <span class="vid-btn" data-src="img/video1.mp4"></span>
        <span class="vid-btn" data-src="img/video2.mp4"></span>
        <span class="vid-btn" data-src="img/video3.mp4"></span>
        <span class="vid-btn" data-src="img/video5.mp4"></span>
      </div>
      <div class="video-container">
        <video
          src="img/video2.mp4"
          id="video-slider"
          loop
          autoplay
          muted
        ></video>
      </div>
    </section>
    <section class="content">
      <div class="list-item">
        <div class="item">
          <div class="item__image">
            <img
              src="https://preview.colorlib.com/theme/sogo/images/ximg_1.jpg.pagespeed.ic.sI14MfHd8f.webp"
              alt=""
            />
          </div>

          <div class="item__description">
            <p class="date">FEBRUARY 26, 2018</p>
            <h2>Travel Hacks to Make Your Flight More Comfortable</h2>
            <p class="detail">
              Far far away, behind the word mountains, far from the countries
              Vokalia and Consonantia, there live the blind texts.
            </p>
          </div>
        </div>
        <div class="item">
          <div class="item__image">
            <img
              src="https://preview.colorlib.com/theme/sogo/images/ximg_2.jpg.pagespeed.ic.Y_xvNxfEhu.webp"
              alt=""
            />
          </div>

          <div class="item__description">
            <p class="date">FEBRUARY 26, 2018</p>
            <h2>5 Job Types That Aallow You To Earn As You Travel The World</h2>
            <p class="detail">
              Separated they live in Bookmarksgrove right at the coast of the
              Semantics, a large language ocean.
            </p>
          </div>
        </div>
        <div class="item">
          <div class="item__image">
            <img
              src="https://preview.colorlib.com/theme/sogo/images/ximg_3.jpg.pagespeed.ic.mYPnC0rXDl.webp"
              alt=""
            />
          </div>

          <div class="item__description">
            <p class="date">FEBRUARY 26, 2018</p>
            <h2>30 Great Ideas On Gifts For Travelers</h2>
            <p class="detail">
              A small river named Duden flows by their place and supplies it
              with the necessary regelialia. t is a paradisematic country, in
              which roasted parts of sentences.
            </p>
          </div>
        </div>
        <div class="item">
          <div class="item__image">
            <img
              src="https://preview.colorlib.com/theme/sogo/images/img_4.jpg"
              alt=""
            />
          </div>

          <div class="item__description">
            <p class="date">FEBRUARY 26, 2018</p>
            <h2>Travel Hacks to Make Your Flight More Comfortable</h2>
            <p class="detail">
              Far far away, behind the word mountains, far from the countries
              Vokalia and Consonantia, there live the blind texts.
            </p>
          </div>
        </div>
        <div class="item">
          <div class="item__image">
            <img
              src="https://preview.colorlib.com/theme/sogo/images/ximg_1.jpg.pagespeed.ic.sI14MfHd8f.webp"
              alt=""
            />
          </div>

          <div class="item__description">
            <p class="date">FEBRUARY 26, 2018</p>
            <h2>5 Job Types That Aallow You To Earn As You Travel The World</h2>
            <p class="detail">
              Separated they live in Bookmarksgrove right at the coast of the
              Semantics, a large language ocean.
            </p>
          </div>
        </div>
        <div class="item">
          <div class="item__image">
            <img
              src="https://preview.colorlib.com/theme/sogo/images/ximg_2.jpg.pagespeed.ic.Y_xvNxfEhu.webp"
              alt=""
            />
          </div>

          <div class="item__description">
            <p class="date">FEBRUARY 26, 2018</p>
            <h2>30 Great Ideas On Gifts For Travelers</h2>
            <p class="detail">
              A small river named Duden flows by their place and supplies it
              with the necessary regelialia. t is a paradisematic country, in
              which roasted parts of sentences.
            </p>
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
              <img src="img/justin-docanto-1NEVlrYE-uU-unsplash.jpg" alt="" />

              <h3>Hoàng Minh Giang</h3>
              <p>
                Mọi thứ đều sạch sẽ và được bảo quản tốt và có mọi thứ tôi cần.
                Mỗi khi ở trong thị trấn, tôi đều gặp những người chủ và họ rất
                tốt và hữu ích. Tôi muốn giới thiệu khách sạn này cho bất kỳ ai
                muốn có một nơi yên tĩnh an toàn
              </p>
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
              <img src="img//li-yang-a8iCZvtrHpQ-unsplash.jpg" alt="" />

              <h3>Phạm Anh Duy</h3>
              <p>
                Mọi thứ đều sạch sẽ và được bảo quản tốt và có mọi thứ tôi cần.
                Mỗi khi ở trong thị trấn, tôi đều gặp những người chủ và họ rất
                tốt và hữu ích. Tôi muốn giới thiệu khách sạn này cho bất kỳ ai
                muốn có một nơi yên tĩnh an toàn
              </p>
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
              <img src="img/nik-lanus-YMOHw3F1Hdk-unsplash.jpg" alt="" />

              <h3>Cao Thị Châm</h3>
              <p>
                Mọi thứ đều sạch sẽ và được bảo quản tốt và có mọi thứ tôi cần.
                Mỗi khi ở trong thị trấn, tôi đều gặp những người chủ và họ rất
                tốt và hữu ích. Tôi muốn giới thiệu khách sạn này cho bất kỳ ai
                muốn có một nơi yên tĩnh an toàn
              </p>
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
              <img src="img/sasha-stories-qzt0DKKG8Pc-unsplash.jpg" alt="" />

              <h3>Mixi Moi</h3>
              <p>
                Mọi thứ đều sạch sẽ và được bảo quản tốt và có mọi thứ tôi cần.
                Mỗi khi ở trong thị trấn, tôi đều gặp những người chủ và họ rất
                tốt và hữu ích. Tôi muốn giới thiệu khách sạn này cho bất kỳ ai
                muốn có một nơi yên tĩnh an toàn
              </p>
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
    <footer class="bg-dark" style="height: 100%">
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
                <p class="text-white">
                  <i class="fas fa-map-marker-alt" style="color: blue"></i>
                  Address:
                </p>
                <p class="text-white-50">175 Tây Sơn Đống Đa Hà Nội</p>
              </li>
              <li>
                <p class="text-white">
                  <i class="fas fa-phone" style="color: blue"></i> Phone:
                </p>
                <p class="text-white-50">(+84) 9999999999999</p>
              </li>
              <li>
                <p class="text-white">
                  <i class="fas fa-envelope" style="color: blue"></i> Email:
                </p>
                <p class="text-white-50">hello@gmail.com</p>
              </li>
              <li>
                <a href=""
                  ><i class="fab fa-instagram fa-lg" style="color: blue"></i
                ></a>
                <a href=""
                  ><i
                    class="fab fa-facebook-f fa-lg"
                    style="color: blue; margin-left: 15px"
                  ></i
                ></a>
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
