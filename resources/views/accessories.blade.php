<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PK MART</title>
    <link rel="shortcut icon" href="Imgs/logo.png" type="image/x-icon" />
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
       

<style>
  

    .custom-product-card {
        margin-bottom: 20px;
        transition: transform 0.3s;
        cursor: pointer;
    }

    .custom-product-card img {
        width: 100%;
        height: 200px;
        object-fit: fill;
    }

  
    .card-body {
        text-align: center;
    }

    .card-title {
        font-size: 1.2rem;
        margin-bottom: 0.5rem;
    }

    .card-price {
        font-size: 1rem;
        color: #6c757d;
        margin-bottom: 1rem;
    }

    .btn {
        width: 100%;
        font-size: 1rem;
    }

    .btn {
        width: 100%;
    }

    
    #loadMoreBtn {
            margin-top: 20px;
            display: none;
            font-size: 1rem;
            width: 20%;
        }
</style>


  
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
            <a href=""><img src="Imgs/user.png" alt="" />
                @if ($userData)
                    {{ $userData->name }}
                @endif
            </a>
            <a href="/cart"><img src="Imgs/shopping-bag.png" alt="" />My Cart</a>
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


    <!--ACCESSORIES SECTION -->
    <center>
        <h1 style="margin-top: 10vw; font-size: 3.5vw">ACCESSORIES</h1>
    </center>


    <div class="container mt-5">
        <div class="row row-cols-2 row-cols-md-4 row-cols-lg-5 g-4">
            @foreach($products as $product)
                <div class="col">
                    <div class="custom-product-card ">
                        <img src="{{ asset($product->picture) }}" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title ">{{ $product->name }}</h5>
                            <p class="card-price ">Price: {{ $product->price }}</p>
                            <button type="button" class="btn btn-dark btn-md" onclick="showProduct(this)">Add to Cart</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="text-center">
        <button type="button" class="btn btn-outline-dark btn-sm" id="loadMoreBtn">Load More</button>
    </div>
   


    




    <!--FOOTER-->

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



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
        integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

 

    <script>
        function showProduct(button) {
            var productCard = button.closest('.custom-product-card');
            var imgElement = productCard.querySelector('.card-img-top');
            var title = productCard.querySelector('.card-title').innerText;
            var price = productCard.querySelector('.card-price').innerText;
    
            var cartItem = {
                img: imgElement ? imgElement.src : null,
                title: title,
                price: price,
                quantity: 1,
            };
    
            // Redirect to the product page with the product details
            window.location.href =
                `productpage?img=${encodeURIComponent(cartItem.img)}&title=${encodeURIComponent(title)}&price=${encodeURIComponent(price)}`;
        }
    </script>
    


<script>
    $(document).ready(function () {
        var productsPerPage = 5;
        var totalProducts = {{ count($products) }};
        var currentCount = productsPerPage;

        // Hide products beyond the first set
        $('.custom-product-card:gt(' + (productsPerPage - 1) + ')').addClass('d-none');

        // Show the "Load More" button if there are more products
        if (totalProducts > productsPerPage) {
            $('#loadMoreBtn').show();
        }

        // Load more products when the button is clicked
        $('#loadMoreBtn').on('click', function () {
            $('.custom-product-card').slice(currentCount, currentCount + productsPerPage).removeClass('d-none');
            currentCount += productsPerPage;

            // Hide the "Load More" button if no more products to load
            if (currentCount >= totalProducts) {
                $('#loadMoreBtn').hide();
            }
        });
    });
</script>












    
   
</body>

</html>
