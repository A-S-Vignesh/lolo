<?php
    include_once "header.php";
    $id=$_GET['id'];
    include "connection.php";
    $sql = "SELECT * FROM prod_det WHERE prodid=$id";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        $prodid=$row["prodid"];
        $prodname=$row["prodname"];
        $price= $row["prodprice"];
    }
 ?>
<!--Navigation bar started-->
<nav class="navbar navbar-expand-sm sticky-top border-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="Images\Logo\Logo_new.png" width="30px" height="30px"></a>
        <a class="navbar-brand title" href="index.php">LoLo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
            <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="Men.php">Mens</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="Women.php">Womens</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="Kids.php">Kids</a>
        </li>
        </ul>
    </div>
</nav>
<div class="container">
    <br>
        <div class="row">
            <div class="col-sm-5">
                <div class="img-thumbnail">
                    <img src="Images/Productimg/<?php echo $prodname?>.jpg" width="100%" height="100%">
                </div>
            </div>
            <div class="col-sm-7">
                <div class="container">
                    <div class="margin-bottom">
                        <br>
                        <h2> <?php echo $prodname?></h2>
                        <div>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div><br>
                        <h3>MRP (inclusive of all taxes)</h3><br>
                        <h4 class="text-danger">Rs <?php echo $price?></h4><br>
                    </div>
                    <div id="myDIV" class="margin-bottom py-2">
                        <h2>Size</h2>
                        <button class="btn btn-primary">6</button>
                        <button class="btn btn-primary">7</button>
                        <button class="btn btn-primary">8</button>
                        <button class="btn btn-primary">9</button>
                        <button class="btn btn-primary">10</button>
                        <button class="btn btn-primary">11</button><br><br>
                    </div>
                    <div class="margin-bottom py-2">
                        <a href="cart.php" class="btn btn-danger mx-3">Add to cart</a>
                        <button class="btn btn-danger mx-3">Buy</button>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
    </div>
    <script>
        // Add active class to the current button (highlight it)
        var header = document.getElementById("myDIV");
        var btns = header.getElementsByClassName("btn");
        for (var i = 0; i < btns.length; i++) {
          btns[i].addEventListener("click", function() {
          var current = document.getElementsByClassName("active");
          current[0].className = current[0].className.replace(" active", "");
          this.className += " active";
          });
        }
    </script>
    <?php
        include "footer.php";
    ?>