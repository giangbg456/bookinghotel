<?php
   include("admin/lib_db.php");
//    include("admin/login.php");

    $date_in = isset($_POST['date_in']) ? $_POST['date_in'] : date('Y-m-d');
    $date_out = isset($_POST['date_out']) ? $_POST['date_out'] : date('Y-m-d',strtotime(date('Y-m-d').' + 1 days'));
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bookingg.css">
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
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-user" id="login-btn"><a href="admin/login.php"></a></div>
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


    <section class="main" style="background-color: #343a40; height:100%; margin-top:50px ">
        <div class="container">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h1>Đặt Phòng</h1>
                        </form>
                    </div>
                </div>
                <?php
                    $sql = "select * from room_category ";
                    $datas = select_list($sql);
                    foreach($datas as $data){
                ?>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="img/<?php echo $data["img"] ?>" alt="">
                            </div>
                            <div class="col-md-6">
                                <h1><?php echo $data["name"] ?></h2>
                                    <h2><?php echo $data['price'].".000 Đ"?><span>/ đêm</span></h2>
                                        <div>
                                            <button class="btn btn-primary book_now" type="button" data-toggle="modal"
                                                data-target="#modal" data-id="<?php echo $data['id'] ?>">Book
                                                now</button>
                                        </div>
                            </div>

                        </div>
                    </div>
                </div>

                <?php }; ?>
            </div>


            <!-- Modal -->
            <?php include("admin/modal.php"); ?>
        </div>
    </section>

    <script src="js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <script>
    $(function() {
        $("#checkin").datepicker();
        $("#checkout").datepicker();
    });

    $(document).on("click", ".book_now", function() {
        var id = $(this).data('id');
        $("#roomID").val(id);

    });
    </script>

</body>

</html>