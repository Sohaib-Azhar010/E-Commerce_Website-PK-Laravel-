<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PK MART</title>
    <link rel="shortcut icon" href="Imgs/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="CSS/home.css" />
    <link rel="stylesheet" href="CSS/checkout.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="shortcut icon"
        href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTDAagSRaCeXRvPTaqxkZXJrROs5BzCJPPSR30q6ZFMJKFS_--yd-oHmkO98leci2jNoN8&usqp=CAU"
        type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav class="nav1">
        <div class="nav1left">
            <a href=""><img src="Imgs/email.png" alt="" />info@pkmart.com</a>
            <a href=""><img src="Imgs/telephone-call.png" alt="" />+92-300-0000000</a>
        </div>
        <div class="nav1right">
            <a href=""><img src="Imgs/facebook-app-symbol.png" alt="" /></a>
            <a href=""><img src="Imgs/instagram.png" alt="" /></a>
            <a href=""><img src="Imgs/twitter.png" alt="" /></a>
            <a href=""><img src="Imgs/whatsapp.png" alt="" /></a>
        </div>
    </nav>

    <nav class="nav2">
        <div class="nav2left">
            <img src="Imgs/LOGO21.PNG" alt="" />
        </div>
        <div class="nav2mid">
            <a href=""><img src="Imgs/user.png" alt="" />User Profile</a>
            <a href=""><img src="Imgs/shopping-bag.png" alt="" />My Cart</a>
        </div>
        <div class="nav2right">
            <span>LANG</span>
            <select name="" id="">
                <option value="eng">EN</option>
                <option value="ur">UR</option>
            </select>
        </div>
        <div style="margin-right: 3vw;">
            <nav class="navbar bg-body-dark">
                <div class="container-fluid" style="display: flex; align-items: center">

                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation"
                        style="border: none;">
                        <span class="navbar-toggler-icon" style="width: 3vw;"></span>
                    </button>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                        aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">MENU</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">HOME</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">POPULAR ITEMS</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        CLOTHING
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">MEN</a></li>
                                        <li><a class="dropdown-item" href="#">WOMEN</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        ACCESSORIES
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">MEN</a></li>
                                        <li><a class="dropdown-item" href="#">WOMEN</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">FOLLOW US</a>
                                </li>
                            </ul>
                            <form class="d-flex mt-3" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search"
                                    aria-label="Search" />
                                <button class="btn btn-outline-dark" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </nav>



    <!--MAIN SECTION AFTER NAVS-->
    <form action="{{ route('stripe.session') }}" method='post' on>
        @csrf
        <center>
            <section class="checkout">
                <section class="billing">
                    <div class="heading">BILLING ADDRESS</div>
                    <section class="billingform">
                        <div class="left">
                            <label for="fname">First Name</label>
                            <input type="text" name="fname" id="" placeholder="Firstname here"
                                required><br>
                            <label for="billingemail">E-Mail</label><br>
                            <input type="email" name="billingemail" id=""
                                placeholder="username@gmail.com" required><br>
                            <label for="address1">Billing Address</label>
                            <input type="text" name="address1" id="" placeholder="Address Here"
                                required><br>
                            <label for="country">Select Country</label>
                            <select name="country" id="" required>
                                <option value="pakistan">Pakistan</option>
                                <option value="india">India</option>
                                <option value="china">China</option>
                            </select><br>
                            <label for="province">Province</label><br>
                            <input type="text" name="province" id="" placeholder="Province Name"
                                required>
                        </div>
                        <div class="right">
                            <label for="lname">Last Name</label>
                            <input type="text" name="lname" id="" placeholder="Lastname here"
                                required><br>
                            <label for="cellno">Phone No.</label>
                            <input type="text" name="cellno" id="" placeholder="+92-300-0000000"
                                pattern="(\+\[0-9]{2}-\[0-9]{3}-\[0-9]{7})" required maxlength="15"><br>
                            <label for="address2">Shipping Address</label>
                            <input type="text" name="address2" id="" placeholder="Second Address"><br>
                            <label for="city">City Name</label>
                            <input type="text" name="city" id="" placeholder="City Name"
                                required><br>
                            <label for="zipcode">ZIP Code</label>
                            <input type="text" name="zipcode" id="" placeholder="123456" maxlength="6">
                        </div>

                    </section>
                </section>

                <section class="payment">


                    <div class="p_left">
                        <div class="p_leftheading">
                            <h1>Total Bill</h1>
                        </div>
                        <div class="p_leftdiv">
                            <div>
                                <div class="subtotal">
                                    <p>Sub Total</p>
                                    {{-- <p>Rs{{ $subtotal }}</p> --}}
                                    <p>Rs<input type="text" name="subtotal" id="subtotal" value="{{ $subtotal }}" readonly style="border: none;outline:none;width:30%;"></p>
                                    <!-- Make sure to use the correct variable name here -->
                                </div>
                                <div class="shipping">
                                    <p>Shipping</p>
                                    {{-- <p>Rs {{ $shipping }} </p> --}}
                                    <p>Rs<input type="text" name="shipping" id="shipping" value="{{ $shipping }}" readonly style="border: none;outline:none;width:30%;"></p>
                                    <!-- Make sure to use the correct variable name here -->
                                </div>
                                <div class="total">
                                    <p>Total Bill</p>
                                    {{-- <p>Rs {{ $total }} </p> --}}
                                    <p>Rs<input type="text" name="total" id="total" value="{{ $total }}" readonly style="border: none;outline:none;width:30%;"></p>
                                    <!-- Make sure to use the correct variable name here -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p_right">
                        <div class="p_rightheading">
                            <h1>Payment Method</h1>
                        </div>
                        <div class="p_rightdiv">

                            <input type="radio" name="paymentmethod" id="bankTransfer" value="bank">
                            <label for="bankTransfer">Bank Transfer</label><br>

                            <input type="radio" name="paymentmethod" id="" value="cod">
                            <label for="">Cash on Delivery</label><br>
                            <hr>
                            <button type="submit" name='billing'>Place Order</button>
                            <hr>
                        </div>

                    </div>
                </section>



            </section>

        </center>
    </form>
    <center>

    </center>


    <footer style="margin-top: 10%">
        <div class="footerdiv">
            <h3 class="footerheading">PK MART</h3>
            <p class="footerdiscription">
                "Discover a world of seamless shopping at "PK MART". Immerse yourself
                in a diverse range of high-quality products, unparalleled customer
                service, and effortless navigation, making every purchase a delightful
                experience. Elevate your online shopping journey with us."
            </p>
            <h2>FOLLOW US</h2>
            <section class="social">
                <div>
                    <a href=""><img src="Imgs/facebook.png" alt="" /></a>
                </div>
                <div>
                    <a href=""><img src="Imgs/instagram (2).png" alt="" /></a>
                </div>
                <div>
                    <a href=""><img src="Imgs/social.png" alt="" /></a>
                </div>
                <div>
                    <a href=""><img src="Imgs/twitter (2).png" alt="" /></a>
                </div>
            </section>
        </div>
        <p class="footerend">
            @2023 | All rights reserved | Made by Sohaib Azhar
        </p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
        integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
      
</body>

</html>
