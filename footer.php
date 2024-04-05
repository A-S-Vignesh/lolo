<br><footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4 footer-det">
                    <h2 class="title">LoLo</h2>
                    <p>Here all footwear are available</p>
                    <p>© 2023 LoLo footwear, All rights reserved</p>
                </div>
                <div class="col-sm-4 footer-nav-list">
                    <h2>Menu</h2>
                    <div class="row">
                        <div class="col-6">
                            <ul class="footer-nav">
                                <li><a class="footer-btn" href="index.php">Home</a></li>
                                <li><a class="footer-btn" href="men.php">Mens</a></li>
                                <li><a class="footer-btn" href="women.php">Womens</a></li>
                                <li><a class="footer-btn" href="kids.php">Kids</a></li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="footer-list">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contacts</a></li>
                                <li><a href="#">Terms & Condition</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 footer-social">
                    <h4>Follow Us</h4>
                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">Skype</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Login --------------------------------------------------------------------->

    <div id="id01" class="modal fade">
		<div class="modal-dialog modal-dialog-centered animate">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                <form method="POST" style="background-color: white;">
                    <div class="container">
                        <div class="justify-content-center" style="display:flex;">
                            <img class="my-auto" src="Images\Logo\Logo_new.png" alt="Avatar" class="avatar">
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <label><b>Username</b></label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" placeholder="Enter Username" name="uname" required>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-4">
                                <label><b>Password</b></label>
                            </div>
                            <div class="col-md-8">
                                <input id="passwod" class="form-control" type="password" placeholder="Enter Password" name="psw" required>
                                <input type="checkbox" onclick="pass()">Show Password
                            </div>
                            <div class="col-md-12 mb-4 text-center">
                                <a href="#"><h6>Forget password?</h6></a>
                            </div>
                        </div>
                    </div>
                    <div id="login-button" class="modal-footer">
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#id02">
                            Create an account
                        </button>
                        <button name="login" class="btn btn-primary" type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
	</div>

    <!-- Create an account --------------------------------------------------------------------->

    <div id="id02" class="modal fade">
		<div class="modal-dialog modal-dialog-centered animate">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create an account</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                <form method="POST" style="background-color: white;">
                    <div class="container">
                        <div class="justify-content-center" style="display:flex;">
                            <img class="my-auto" src="Images\Logo\Logo_new.png" alt="Avatar" class="avatar">
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <label><b>Username</b></label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" placeholder="Username" name="uname" required>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-4">
                                <label><b>Password</b></label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" type="password" placeholder="Password" name="psw" required>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-4">
                                <label><b>Confirm Password</b></label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" type="password" placeholder="Password" name="psw" required>
                            </div>
                        </div><br>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" name="create" type="submit">Create</button>
                    </div>
                </form>
            </div>
        </div>
	</div>

    <!----------- contact us --------------------------------------------------------------------->

    <div id="id04" class="modal fade">
        <div class="modal-dialog modal-dialog-centered animate">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Contact us</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                <form method="POST" style="background-color: white;">
                    <div class="container">
                        <div class="justify-content-center" style="display:flex;">
                            <img class="my-auto" src="Images\Logo\Logo_new.png" alt="Avatar" class="avatar">
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <label><b>Username</b></label>
                            </div>
                            <div class="col-md-8 mb-4">
                                <input class="form-control" type="text" placeholder="Enter Username" name="uname" required>
                            </div>
                            <div class="col-md-4">
                                <label><b>Gmail</b></label>
                            </div>
                            <div class="col-md-8 mb-4">
                                <input class="form-control" type="email" placeholder="Enter Password" name="psw" required>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label"><b>Subject</b></label>
                            </div>
                            <div class="col-md-8 mb-4">
                                <textarea class="form-control" rows="1" name="subject"></textarea>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label"><b>Feedback</b></label>
                            </div>
                            <div class="col-md-8 mb-4">
                                <textarea class="form-control" name="feedback" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" name="contactus" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<!----------------------------Cart --------------------------------------------------------------------->
<div id="cart" class="modal fade modal-xl">
        <div class="modal-dialog modal-dialog-centered animate">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Cart</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                <form action="/action_page.php" style="background-color: white;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md12 border">
                                <div class="container">
                                    <div id="addingcart" class="row">
                                        <div class="col-sm-2">
                                            <img src="walkaroo 1.jpg" width="150px" height="150px">
                                        </div>
                                        <div class="col-sm-5 text-center my-auto">
                                            <h5>Walkaroo</h5>
                                        </div>
                                        <div class="col-sm-2 text-center my-auto">
                                            <h5>Quantity: <input type="number" maxlength="2" required class="form-control"> </h5>
                                        </div>
                                        <div class="col-md-3 text-center my-auto">
                                            <button class="btn btn-success">Buy</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Cart next page --------------------------------------------------------------------->
    <div id="cart_next_page" class="modal fade">
		<div class="modal-dialog modal-dialog-centered animate">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create an account</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                <form action="index n.php" method="POST" style="background-color: white;">
                    <div class="container">
                        <div class="justify-content-center" style="display:flex;">
                            <img class="my-auto" src="Logo_new.png" alt="Avatar" class="avatar">
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <label><b>Username</b></label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" placeholder="Username" name="uname" required>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-4">
                                <label><b>Password</b></label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" type="password" placeholder="Password" name="psw" required>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-12">
                                <label><b>Address 1</b></label>
                            </div>
                            <div class="col-md-12 mb-4">
                                <input class="form-control" type="text" placeholder="1234 Main St" name="Address1" required>
                            </div>
                            <div class="col-md-12">
                                <label><b>Address 2</b></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input class="form-control" type="text" placeholder="Apartment, studio, or floor" name="Address2" required>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-4">
                              <label for="inputCity">City</label>
                              <input type="text" class="form-control" id="inputCity" placeholder="City">
                            </div>
                            <div class="col-md-4">
                              <label for="inputState">State</label>
                              <input type="text" id="inputState" class="form-control" placeholder="State">
                            </div>
                            <div class="col-md-4">
                              <label for="inputZip">Pincode</label>
                              <input type="text" class="form-control" id="inputZip" placeholder="Pincode">
                            </div>
                          </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" name="create" type="submit">Create</button>
                    </div>
                </form>
            </div>
        </div>
	</div>
    <script>
        $(document).ready(function() {
            // Send product details in the server
            $(".addItemBtn").click(function(e) {
            e.preventDefault();
            var $form = $(this).closest(".form-submit");
            var pid = $form.find(".pid").val();
            var pname = $form.find(".pname").val();
            var pprice = $form.find(".pprice").val();
            var pimage = $form.find(".pimage").val();
            var pcode = $form.find(".pcode").val();
            var pqty = $form.find(".pqty").val();

            $.ajax({
                url: 'action.php',
                method: 'post',
                data: {
                pid: pid,
                pname: pname,
                pprice: pprice,
                pqty: pqty,
                pimage: pimage,
                pcode: pcode
                },
                success: function(response) {
                $("#message").html(response);
                window.scrollTo(0, 0);
                load_cart_item_number();
                }
            });
            });

            // Load total no.of items added in the cart and display in the navbar
            load_cart_item_number();

            function load_cart_item_number() {
            $.ajax({
                url: 'action.php',
                method: 'get',
                data: {
                cartItem: "cart_item"
                },
                success: function(response) {
                $("#cart-item").html(response);
                }
            });
            }
            });
        function pass() {
            var x = document.getElementById("passwod");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }      
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
        function addcart(image,name,price){
            document.getElementById("addingcart").innerHTML+="<div class='col-sm-2'><img src='"+image+"' width='100px' height='100px'></div><div class='col-sm-5'><h5>"+name+"</h5></div><div class='col-sm-2'><h5>Quantity: <input type='number' class='form-control'> </h5></div><div class='col-md-3'><button class='btn btn-success'>Buy</button></div>";
        }
        function setActiveLink() {
            // remove "active" class from all links
            var links = document.querySelectorAll('a');
            for (var i = 0; i < links.length; i++) {
                links[i].classList.remove('active');
            }
            // add "active" class to the clicked link
            this.classList.add('active');
        }
        
    </script>
</body>
</html>

<?php
include "login_acc.php";
include "create_acc.php";
?>