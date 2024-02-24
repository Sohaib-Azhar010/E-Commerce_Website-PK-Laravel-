<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PK MART</title>
    <link rel="shortcut icon" href="{{ URL::asset('Imgs/logo.png') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ URL::asset('CSS/home.css') }}" />

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
        .quantity-controls {
            display: flex;
            align-items: center;
            border: 1px solid #ccc;
            border-radius: 5px;
            overflow: hidden;
            width: fit-content;
        }

        .quantity-controls button {
            background-color: #000000;
            color: #fff;
            border: none;
            padding: 8px 12px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .quantity-controls button:hover {
            background-color: #2d2d2d;
        }

        .quantity-input {
            width: 100px;
            text-align: center;
            border: none;
            font-size: 16px;

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
            <a href=""><img src="Imgs/user.png" alt="" />User Profile</a>
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

    <!--SUCCESS BAR-->
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 5">
        <div id="cartAlert" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto">MESSAGE:</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                <strong>{{ $title }}</strong> has been added to your cart!
            </div>
        </div>
    </div>



    <!--MAIN SECTION AFTER NAVS-->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <!-- Product Image -->
                <div class="d-flex justify-content-center align-items-center">
                    <img id="productImage" src="{{ $img }}" alt="Product Image" class="img-fluid mb-3"
                        style="max-height: 400px;min-height:400px">
                </div>

            </div>
            <div class="col-md-6">
                <!-- Product Details Form -->
                <form id="productForm">
                    <!-- Product Name -->
                    <h2 class="mb-3" id="productName">{{ $title }}</h2>
                    {{-- <p class="" id="productPrice" style="text-decoration-line: underline;font-weight:bold;">Price: {{ $price }}</p> --}}

                    <!-- Product Price -->
                    <p class="" id="productPrice" style="text-decoration-line: underline;font-weight:bold;">
                        Price: {{ $price }}</p>

                    <!-- Product Size -->
                    <div class="mb-3">
                        <label for="productSize" class="form-label">Select Size</label>
                        <select class="form-select" id="productSize" required>
                            <option value="small">Small</option>
                            <option value="medium">Medium</option>
                            <option value="large">Large</option>
                            <!-- Add more size options as needed -->
                        </select>
                    </div>

                    <!-- Product Quantity -->
                    <div class="mb-3">
                        <label for="productQuantity" class="form-label">Select Quantity</label>
                        <div class="quantity-controls">
                            <button type="button" onclick="decrementQuantity()">-</button>
                            <input type="number" class="form-control quantity-input" id="productQuantity"
                                min="1" value="1" required>
                            <button type="button" onclick="incrementQuantity()">+</button>
                        </div>
                    </div>

                    <!-- Add to Cart Button -->
                    <button type="button" class="btn btn-dark" onclick="addToCart()">Add to Cart</button>
                </form>
            </div>
        </div>
    </div>

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
    <script>
        function incrementQuantity() {
            var quantityInput = document.getElementById('productQuantity');
            quantityInput.value = parseInt(quantityInput.value) + 1;
        }

        function decrementQuantity() {
            var quantityInput = document.getElementById('productQuantity');
            if (parseInt(quantityInput.value) > 1) {
                quantityInput.value = parseInt(quantityInput.value) - 1;
            }
        }
    </script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Parse query parameters from the URL
            const urlParams = new URLSearchParams(window.location.search);
            const img = urlParams.get('img');
            const title = urlParams.get('title');
            const price = urlParams.get('price');

            // Set the product details on the Product page
            if (img && title && price) {
                document.getElementById('productImage').src = img;
                document.getElementById('productName').innerText = title;
                document.getElementById('productPrice').innerText = price;
            }
        });
    </script>



    <script>
        // Function to handle 'Add to Cart' functionality
        function addToCart() {
            // Get product details from the form
            var img = document.getElementById('productImage').getAttribute('src');
            var title = document.getElementById('productName').innerText;
            var priceElement = document.getElementById('productPrice');
            var quantity = document.getElementById('productQuantity').value;
            var size = document.getElementById('productSize').value;

            // Check if the price element exists
            if (priceElement) {
                var price = priceElement.innerText;

                // Create a cart item object
                var cartItem = {
                    img: img,
                    title: title,
                    price: price,
                    quantity: quantity,
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
                    // If the item already exists, update the quantity
                    existingItem.quantity = parseInt(existingItem.quantity) + parseInt(quantity);
                    showToast('Item quantity updated in the cart!');
                } else {
                    // Add the new item to the cart
                    cartData.push(cartItem);
                    showToast('Item added to cart!');
                }

                // Save the updated cart data to localStorage
                localStorage.setItem('cart', JSON.stringify(cartData));
            } else {
                console.error('Product price element not found.');
            }
        }

        // Function to show Bootstrap toast
        function showToast(message) {
            var toastElement = new bootstrap.Toast(document.getElementById('cartAlert'));
            var toastBody = document.querySelector('#cartAlert .toast-body');
            toastBody.innerHTML = message;
            toastElement.show();
        }


        document.addEventListener('DOMContentLoaded', function() {
            // Parse query parameters from the URL
            const urlParams = new URLSearchParams(window.location.search);
            const img = urlParams.get('img');
            const title = urlParams.get('title');
            const price = urlParams.get('price');

            // Set the product details on the Product page
            if (img && title && price) {
                document.getElementById('productImage').src = img;
                document.getElementById('productName').innerText = title;
                document.getElementById('productPrice').innerText = price;

                // Disable size selection for certain products
                const disableSizeForKeywords = ['perfume', 'bag', 'watch', 'digital', 'earings', 'purse', 'wallet',
                    'clutch'
                ];
                const productSizeSelect = document.getElementById('productSize');

                // Check if any keyword related to size is present in the title
                const hasSizeKeyword = disableSizeForKeywords.some(keyword => title.toLowerCase().includes(
                keyword));

                if (hasSizeKeyword) {
                    // Product contains a size-related keyword, so disable size selection
                    productSizeSelect.disabled = true;
                }
            }
        });
    </script>

</body>

</html>
