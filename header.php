<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title class="title">LoLo - Comfort in every step</title>
    <link rel="icon" href="Images\Logo\Logonew.png" type="image/icon type">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!--header start-->
    <header>
        <div class="container">
                <button id="loginbtn" type="button" class="btn btn-md top-header" data-bs-toggle="modal" data-bs-target="#id01">
                    Login
                </button>
            <button type="button" class="btn btn-md top-header" data-bs-toggle="modal" data-bs-target="#id04">
                Contact
            </button>
            <a href="aboutus.php" class="btn">About us</a>
        </div>
        <div class="container-fluid"  style="background-color: red;">
            <div class="row align-items-center">
                <div class="col-2">
                    <img src="Images\Logo\Logo_new.png" width="60px" height="60px">
                </div>
                <div class="col-8" tabindex="-1">
                    <form class="form my-2 my-lg-0">
                        <div class="input-group">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <span class="input-group-addon my-auto bg-light"><button class="btn"><i class="fa-solid fa-magnifying-glass"></i></button></span>
                        </div>
                    </form>
                </div>
                <div class="col-2 text-end">
                <a class="btn" href="cart.php"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-secondary"></span></a>
                </div>
            </div>
        </div>
    </header>