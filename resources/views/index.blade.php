<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PK MART</title>
    <link rel="shortcut icon" href="{{ URL::asset('Imgs/logo.png') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ URL::asset('css/home.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/form.css') }}">
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
            <!-- Button trigger modal -->
            <button type="button"
                style="
            border: none;
            background-color: white;
            font-size: 1.2vw;
            cursor: pointer;
            margin-right: 1vw;
          "
                onclick="showmodal();">
                <img src="Imgs/user.png" alt="" />

                Login|SignUp
            </button>
            <!-- Modal -->

            <!-- <a href=""><img src="Imgs/user.png" alt="" />Login|SignUp</a> -->

            <a href=""><img src="Imgs/shopping-bag.png" alt="" />My Cart</a>
        </div>
        <div class="nav2right">
            <span>LANG</span>
            <select name="" id="">
                <option value="eng">EN</option>
                <option value="ur">UR</option>
            </select>
        </div>
        <div style="margin-right: 3vw">
            <nav class="navbar bg-body-dark">
                <div class="container-fluid" style="display: flex; align-items: center">
                    <!-- <a class="navbar-brand" href="#" style="margin-left: 3vw"
              >WELCOME TO PK MART</a
            > -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation"
                        style="border: none">
                        <span class="navbar-toggler-icon" style="width: 3vw"></span>
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
                                <button class="btn btn-outline-dark" type="submit">
                                    Search
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </nav>

    <!--
      LOGIN FORM
    -->
    <div class="overlay"></div>

    
    <div class="loginform">
        {{-- <span class="closeform">&times;</span> --}}
        <br>
        {{-- <div class="imgdiv"> --}}


        <div class="contain">
          <span class="closeform">&times;</span>
            <input type="checkbox" id="check">
            <div class="login form">
                <header>Login</header>
                <form action="" method="post" onsubmit="return validateFormLogin()" id="form1">
                    @csrf
                    <span id="emailerror"></span>
                    <input type="text" name="email" id="email" placeholder="Enter your email">
                    <span id="passworderror"></span>
                    <input type="password" name="password" id="password" placeholder="Enter your password">
                    <a href="#">Forgot password?</a>
                    <input type="submit" class="button" value="Login" name="loginbtn">
                </form>
                <div class="signup">
                    <p class="signup">Don't have an account?<label for="check">Signup</label></p>
                        
                    
                </div>
            </div>
            <div class="registration form">
                <header>Signup</header>
                <form action="" method="post" onsubmit="return validateFormSignUp()">
                    @csrf
                    <span id="usernameerror" class="error-span"></span>
                    <input type="text" placeholder="Enter username" name="name" class="sign">
                    <span id="semailerror" class="error-span"></span>
                    <input type="text" placeholder="Enter your email" name="email" class="sign">
                    <span id="spassworderror" class="error-span"></span>
                    <input type="password" placeholder="Create a password" name="password" class="sign">
                    <input type="submit" class="button" value="Signup" name="signup">
                </form>
                <div class="signup">
                    <p class="signup">Already have an account?<label for="check">Login</label></p>
                        
                    
                </div>
            </div>
        </div>

        {{-- </div> --}}



    </div>

    <!--MAIN SECTION AFTER NAVS-->
    <section class="main">
        <div class="mainleft">
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="Imgs/Slide1.PNG" class="d-block w-100" alt="..." />
                        <div class="carousel-caption d-none d-md-block">
                            <h5>No.1 Online Market</h5>
                            <p>
                                Some representative placeholder content for the first slide.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="Imgs/slide5.PNG" class="d-block w-100" alt="..." />
                        <div class="carousel-caption d-none d-md-block">
                            <h5>100% Original Products</h5>
                            <p>
                                Some representative placeholder content for the second slide.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="Imgs/slide4.PNG" class="d-block w-100" alt="..." />
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Quality Gauranteed</h5>
                            <p>
                                Some representative placeholder content for the third slide.
                            </p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="mainright">
            <a href="#" class="card">
                <img src="Imgs/slide6.PNG" alt="" class="card__img" />
                <span class="card__footer">
                    <span>Hot Sale</span>
                    <span>Flat 50% Off</span>
                </span>
                <span class="card__action">
                    <button>Shop Now</button>
                </span>
            </a>
            <a href="#" class="card">
                <img src="Imgs/slide7.PNG" alt="" class="card__img" />
                <span class="card__footer">
                    <span>Hot Sale</span>
                    <span>Flat 40% Off</span>
                </span>
                <span class="card__action">
                    <button>Shop Now</button>
                </span>
            </a>
        </div>
    </section>

    <section class="features">
        <div class="featurescards">
            <img src="Imgs/check.png" alt="" />
            <span>QUALITY PRODUCTS</span>
        </div>
        <div class="featurescards">
            <img src="Imgs/fast-delivery.png" alt="" />
            <span>FREE SHIPPING</span>
        </div>
        <div class="featurescards">
            <img src="Imgs/transfer.png" alt="" />
            <span>14-DAYS RETURN</span>
        </div>
        <div class="featurescards">
            <img src="Imgs/phone.png" alt="" />
            <span>24/7 SUPPORT</span>
        </div>
    </section>

    <section class="popularitemssection" id="popularitemssection">
        <div class="productIntro">
            <h1>POPULAR ITEMS</h1>
        </div>

        <div class="popularitems slider">
            <div class="popularitemscard">
                <div class="cardImage">
                    <img src="Imgs/watch-removebg-preview.png" alt="" />
                    <h1>CASIO WATCH</h1>
                    <p>Price: $300.00</p>
                    <button>Add to Cart</button>
                </div>
            </div>
            <div class="popularitemscard">
                <div class="cardImage">
                    <img src="Imgs/hood-removebg-preview.png" alt="" />
                    <h1>HOODIE</h1>

                    <p>Price: $300.00</p>
                    <button>Add to Cart</button>
                </div>
            </div>
            <div class="popularitemscard">
                <div class="cardImage">
                    <img src="Imgs/women-1-removebg-preview.png" alt="" />
                    <h1>RUG SHIRT</h1>

                    <p>Price: $300.00</p>
                    <button>Add to Cart</button>
                </div>
            </div>
            <div class="popularitemscard">
                <div class="cardImage">
                    <img src="Imgs/bags-removebg-preview.png" alt="" />
                    <h1>LEATHER BAG</h1>

                    <p>Price: $300.00</p>
                    <button>Add to Cart</button>
                </div>
            </div>
            <div class="popularitemscard">
                <div class="cardImage">
                    <img src="Imgs/belts-removebg-preview.png" alt="" />
                    <h1>LEATHER BELT</h1>

                    <p>Price: $300.00</p>
                    <button>Add to Cart</button>
                </div>
            </div>
            <div class="popularitemscard">
                <div class="cardImage">
                    <img src="Imgs/perfume-removebg-preview.png" alt="" />
                    <h1>PERFUME</h1>

                    <p>Price: $300.00</p>
                    <button>Add to Cart</button>
                </div>
            </div>
        </div>
    </section>

    <!--HOT PRODUCTS SECTION-->
    <div class="productIntro" style="margin-top: 15vh">
        <h1>HOT ITEMS</h1>
    </div>
    <section class="hotproducts">
        <div class="hotproducts1">
            <div class="product-card">
                <div class="product-image">
                    <img src="Imgs/WATCH.png" />
                </div>
                <div class="product-details">
                    <h1>DIGITAL WATCH</h1>
                    <p>
                        Great product title for a great product and all of the extra
                        things a product might need to make it fill an entire card.
                    </p>
                    <button type="button" class="btn">SHOW MORE</button>
                </div>
            </div>

            <div class="product-card">
                <div class="product-details">
                    <h1>GOLDEN NECKLACE</h1>
                    <p>
                        Great product title for a great product and all of the extra
                        things a product might need to make it fill an entire card.
                    </p>
                    <button type="button" class="btn">SHOW MORE</button>
                </div>
                <div class="product-image">
                    <img src="Imgs/necklace-removebg-preview.png" />
                </div>
            </div>
        </div>

        <div class="hotproducts2">
            <div class="product-card">
                <div class="product-details">
                    <h1>J.P MEN PERFUME</h1>
                    <p>
                        Great product title for a great product and all of the extra
                        things a product might need to make it fill an entire card.
                    </p>
                    <button type="button" class="btn">SHOW MORE</button>
                </div>
                <div class="product-image">
                    <img src="Accessoriesimgs/men_perf2-removebg-preview.png" />
                </div>
            </div>
            <div class="product-card">
                <div class="product-details">
                    <h1>ELEGANCE PERFUME</h1>
                    <p>
                        Great product title for a great product and all of the extra
                        things a product might need to make it fill an entire card.
                    </p>
                    <button type="button" class="btn">SHOW MORE</button>
                </div>
                <div class="product-image">
                    <img src="Imgs/perfume2-removebg-preview.png" />
                </div>
            </div>
        </div>
    </section>

    <footer>
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

    <script src="https://kit.fontawesome.com/cb4d775616.js" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
        integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <script>
        $(".slider").slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true,
                    },
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                    },
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
            ],
        });
    </script>
    <script>
        function showmodal() {
            document.querySelector(".overlay").classList.add("showoverlay");
            document.querySelector(".loginform").style.top = "50%";
        }

        var close = document.querySelector(".closeform");
        close.addEventListener("click", closemodal);

        function closemodal() {
            document.querySelector(".overlay").classList.remove("showoverlay");
            document.querySelector(".loginform").style.top = "-50%";
        }
    </script>
     <script>
      function validateFormLogin() {
      var email = document.forms[0]["email"].value;
      var password = document.forms[0]["password"].value;
      if (email.trim() === "") {
        var spantag = document.getElementById("emailerror");
        spantag.style.color = 'red';
        spantag.innerHTML = "Email can't be empty";
        return false;
      }
      if (!email.endsWith('@gmail.com')) {
        var spantag = document.getElementById("emailerror");
        spantag.style.color = 'red';
        spantag.innerHTML = "Please enter a valid Gmail address.";
        return false;
      }
      if (password.trim() === "") {
        var spantag = document.getElementById("passworderror");
        spantag.style.color = 'red';
        spantag.innerHTML = "Password cannot be empty.";
        return false;
      }
      if (password.length < 8) {
        var spantag = document.getElementById("passworderror");
        spantag.style.color = 'red';
        spantag.innerHTML = "Password must be at least 8 characters long.";
        return false;
      }
    return true;
  }
 
    function validateFormSignUp() {
    var username = document.forms[1]["name"].value;
    var email = document.forms[1]["email"].value;
    var password = document.forms[1]["password"].value;
    if (username.trim() === "") {
      var spantag = document.getElementById("usernameerror");
      spantag.style.color = 'red';
      spantag.innerHTML = "Username cannot be empty.";
      return false;
    }
    if (username.length > 15) {
      var spantag = document.getElementById("usernameerror");
      spantag.style.color = 'red';
      spantag.innerHTML = "Username must not exceed 15 characters.";
      return false;
    }
    if (email.trim() === "") {
      var spantag = document.getElementById("semailerror");
      spantag.style.color = 'red';
      spantag.innerHTML = "Email cannot be empty";
      return false;
    }
    if (!email.endsWith('@gmail.com')) {
      var spantag = document.getElementById("semailerror");
      spantag.style.color = 'red';
      spantag.innerHTML = "Please enter a valid Gmail address.";
      return false;
    }
    if (password.trim() === "") {
      var spantag = document.getElementById("spassworderror");
      spantag.style.color = 'red';
      spantag.innerHTML = "Password cannot be empty.";
      return false;
    }
    if (password.length < 8) {
      var spantag = document.getElementById("spassworderror");
      spantag.style.color = 'red';
      spantag.innerHTML = "Password must be at least 8 characters long.";
      return false;
    }
    return true;
  }
   //for login
   $(document).ready(function () {
      $("#email").click(function () {
        $("#emailerror").text("");
      });
    });
    $(document).ready(function () {
      $("#password").click(function () {
        $("#passworderror").text("");
      });
    });
    //for signup form
    $(document).ready(function () {
    $(".sign").click(function () {
      $(".error-span").text("");
    });
  });
  </script>


  


</body>

</html>
