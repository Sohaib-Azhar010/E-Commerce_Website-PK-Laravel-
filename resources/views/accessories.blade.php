<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PK MART</title>
    <link rel="shortcut icon" href="Imgs/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="CSS/home.css" />
    <link rel="stylesheet" href="CSS/accessories.css" />
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
                    <!-- <a class="navbar-brand" href="#" style="margin-left: 3vw"
              >PK MART -> ACCESSORIES</a
            > -->
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
    <center>
        <section class="banner">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="Accessoriesimgs/watch.webp" class="d-block w-100" alt="..." />
                    </div>
                    <div class="carousel-item">
                        <img src="Accessoriesimgs/perfumebannerwoman.webp" class="d-block w-100" alt="..." />
                    </div>
                    <div class="carousel-item">
                        <img src="Accessoriesimgs/perfume banner 4.jpg" class="d-block w-100" alt="..." />
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="sidetext">
                <p>
                    Accessories are the punctuation marks of personal style, adding
                    flair and individuality to our attire. From statement jewelry that
                    speaks volumes to the subtle elegance of a well-chosen watch, these
                    accents transform outfits into expressions of identity.
                </p>
            </div>
        </section>
    </center>

    <center>
        <section class="clothingselection">
            <section class="clothingselectionleft">
                <button type="button" id="">For Him</button>
            </section>
            <section class="clothingselectionright">
                <button type="button" id="">For Her</button>
            </section>
        </section>
    </center>
    <center>
        <h1 style="margin-top: 10vw; font-size: 3.5vw">MEN ACCESSORIES</h1>
        <section class="menaccesoriessection">
            <div class="menitems slider">
                <div class="clothcard">
                    <img class="item-img" src="Accessoriesimgs/WATCH.png" alt="" />
                    <h1 class="item-title">DIGITAL WATCH</h1>
                    <p class="item-price">Rs 100</p>
                    <p><button onclick="addToCart(this)">Add to Cart</button></p>



                </div>
                <div class="clothcard">
                    <img class="item-img" src="Accessoriesimgs/men_perf-removebg-preview.png" alt="" />
                    <h1 class="item-title">PERFUME</h1>
                    <p class="item-price">Rs 100</p>
                    <p><button onclick="addToCart(this)">Add to Cart</button></p>

                </div>
                <div class="clothcard">
                    <img class="item-img" src="Accessoriesimgs/belt2-removebg-preview.png" alt="" />
                    <h1 class="item-title">BELT</h1>
                    <p class="item-price">Rs 100</p>
                    <p><button onclick="addToCart(this)">Add to Cart</button></p>

                </div>
                <div class="clothcard">
                    <img src="Accessoriesimgs/ma1-removebg-preview.png" alt="" />
                    <h1>BAG</h1>
                    <p class="price">$19.99</p>
                    <p><button>Add to Cart</button></p>
                </div>
                <div class="clothcard">
                    <img src="Accessoriesimgs/watch-removebg-preview.png" alt="" />
                    <h1>CASIO WATCH</h1>
                    <p class="price">$19.99</p>
                    <p><button>Add to Cart</button></p>
                </div>
                <div class="clothcard">
                    <img src="Accessoriesimgs/men_perf2-removebg-preview.png" alt="" />
                    <h1>PERFUME</h1>
                    <p class="price">$19.99</p>
                    <p><button>Add to Cart</button></p>
                </div>
            </div>
        </section>
    </center>
    <center>
        <h1 style="margin-top: 10vw; font-size: 3.5vw">WOMEN ACCESSORIES</h1>
        <section class="menaccesoriessection">
            <div class="menitems slider">
                <div class="clothcard">
                    <img src="Accessoriesimgs/wmbracelet-removebg-preview.png" alt="" />
                    <h1>BRACELET</h1>
                    <p class="price">$19.99</p>
                    <p><button>Add to Cart</button></p>
                </div>
                <div class="clothcard">
                    <img src="Accessoriesimgs/earings1-removebg-preview.png" alt="" />
                    <h1>EARINGS</h1>
                    <p class="price">$19.99</p>
                    <p><button>Add to Cart</button></p>
                </div>
                <div class="clothcard">
                    <img src="Accessoriesimgs/wa1-removebg-preview.png" alt="" />
                    <h1>CLUTCH</h1>
                    <p class="price">$19.99</p>
                    <p><button>Add to Cart</button></p>
                </div>
                <div class="clothcard">
                    <img src="Accessoriesimgs/perfume2-removebg-preview.png" alt="" />
                    <h1>PERFUME</h1>
                    <p class="price">$19.99</p>
                    <p><button>Add to Cart</button></p>
                </div>
                <div class="clothcard">
                    <img src="Accessoriesimgs/bags-removebg-preview.png" alt="" />
                    <h1>BAGS SET</h1>
                    <p class="price">$19.99</p>
                    <p><button>Add to Cart</button></p>
                </div>
                <div class="clothcard">
                    <img src="Accessoriesimgs/perfume-removebg-preview.png" alt="" />
                    <h1>PERFUME</h1>
                    <p class="price">$19.99</p>
                    <p><button>Add to Cart</button></p>
                </div>
            </div>
        </section>
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
    <!-- Add this script to handle the 'Add to Cart' functionality -->


    <script>
        // Function to handle 'Add to Cart' functionality
        function addToCart(button) {
            var clothCard = button.parentNode.parentNode;
            console.log('clothCard:', clothCard);

            var imgElement = clothCard.querySelector('.item-img');
            console.log('imgElement:', imgElement);

            var img = imgElement ? imgElement.getAttribute('src') : null;
            var title = clothCard.querySelector('.item-title').innerText;
            var price = clothCard.querySelector('.item-price').innerText;

            var cartItem = {
                img: img,
                title: title,
                price: price,
                quantity: 1,
            };

            // Check if cart data exists in localStorage
            var cartData = localStorage.getItem('cart');
            if (!cartData) {
                // If cart data doesn't exist, create an empty array
                cartData = [];
            } else {
                // If cart data exists, parse it to an array
                cartData = JSON.parse(cartData);
            }

            // Check if the item already exists in the cart
            var existingItem = cartData.find(item => item.title === title);

            if (existingItem) {
                // If the item already exists, show an alert and don't add it again
                alert('Item already exists in the cart!');
            } else {
                // Add the new item to the cart
                cartData.push(cartItem);

                // Save the updated cart data to localStorage
                localStorage.setItem('cart', JSON.stringify(cartData));

                // Show a success alert
                alert('Item added to cart!');
            }
        }
    </script>



    <script>
        $(".slider").slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 5,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 5,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true,
                    },
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 5,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 5,
                        slidesToScroll: 1,
                    },
                },
            ],
        });
    </script>
</body>

</html>
