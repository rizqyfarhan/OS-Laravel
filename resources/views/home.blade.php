<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>123Shop</title>
    <!-- Link To CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Box Icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <!-- Header -->
    <header>

        <!-- Nav -->
        <div class="nav container search-container">
            <div>
                <i class='bx bxl-shopify' id="main-icon"></i>
            </div>
            <div class="icon-container">
                <div>
                    <i class='bx bx-search' id="search-icon" onclick="openSearch"></i>
                </div>
                <div>
                    <a href="login"><i class='bx bx-user' id="user-icon"></i></a>
                </div>
                <div>
                    <!-- Cart Icon -->
                    <i class='bx bx-cart' id="cart-icon"></i>
                    <!-- Cart -->
                    <div class="cart">
                        <h2 class="cart-title">Your Cart</h2>
                        <!-- Content -->
                        <div class="cart-content">

                        </div>
                        <!-- Total -->
                        <div class="total">
                            <div class="total-title">Total</div>
                            <div class="total-price">$0</div>
                        </div>
                        <!-- Buy Button -->
                        <button type="button" class="btn-buy">Buy Now</button>
                        <!-- Cart Close -->
                        <i class="bx bx-x" id="close-cart"></i>
                    </div>
                </div>
            </div>
        </div>
        
    </header>
    <!-- Shop -->
    <section class="shop container">
        <h2 class="section-title">Shop Products</h2>
        <!-- Content -->
        <div class="shop-content">
            <!-- Box 1 -->
            <div class="product-box">
                <img src="{{ asset('img/product1.jpg') }}" alt="" class="product-img">
                <h2 class="product-title">AEROREADY SHIRT</h2>
                <span class="price">$25</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <!-- Box 2 -->
            <div class="product-box">
                <img src="{{ asset('img/product2.jpg') }}" alt="" class="product-img">
                <h2 class="product-title">WIRELESS EARBUDS</h2>
                <span class="price">$100</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <!-- Box 3 -->
            <div class="product-box">
                <img src="{{ asset('img/product3.jpg') }}" alt="" class="product-img">
                <h2 class="product-title">HOODED PARKA</h2>
                <span class="price">$45</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <!-- Box 4 -->
            <div class="product-box">
                <img src="{{ asset('img/product4.jpg') }}" alt="" class="product-img">
                <h2 class="product-title">STRAW METAL BOTTLE</h2>
                <span class="price">$24.04</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <!-- Box 5 -->
            <div class="product-box">
                <img src="{{ asset('img/product5.jpg') }}" alt="" class="product-img">
                <h2 class="product-title">SILVER METAL SUNGLASSES</h2>
                <span class="price">$50</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <!-- Box 6 -->
            <div class="product-box">
                <img src="{{ asset('img/product6.jpg') }}" alt="" class="product-img">
                <h2 class="product-title">BACK HAT</h2>
                <span class="price">$50</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <!-- Box 7 -->
            <div class="product-box">
                <img src="{{ asset('img/product7.jpg') }}" alt="" class="product-img">
                <h2 class="product-title">BACKPACK</h2>
                <span class="price">$70</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <!-- Box 8 -->
            <div class="product-box">
                <img src="{{ asset('img/product8.jpg') }}" alt="" class="product-img">
                <h2 class="product-title">ULTRABOOST 22</h2>
                <span class="price">$45</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
        </div>
    </section>
    <!-- Link To JS -->
    <script src="{{  asset('js/main.js') }}"></script>

</body>

</html>