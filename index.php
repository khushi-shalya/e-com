<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outfit House</title>

    <!-----flaticon----->
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <!-----swiper css----->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-----css----->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <div class="header__top">
            <div class="header__container container">
                <div class="header__contact">
                    <span>+91 123456789</span>
                    <span>Our location: Sector-55, Gurugram</span>
                </div>
                <p class="header__alert-news">
                    Super Value Deals - Save more with coupons
                </p>

                <a href="http://localhost/e-com/login-register.php" class="header__top-action">
                    Login/Sign Up
                </a>
            </div>
        </div>

        <nav class="nav container">
            <a href="index.html" class="nav__logo">
                <img src="img/LOGO.png" alt="" class="nav__logo-img">
            </a>

            <div class="nav__menu" id="nav-menu">
                <div class="nav__menu-top">
                    <a href="index.html" class="nav__menu-logo">
                        <img src="img/LOGO1.png" alt="">
                    </a>
                    <div class="nav__close" id="nav-close">
                        <i class="fi fi-rs-cross-small"></i>
                    </div>
                </div>
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="index.html" class="nav__link active-link">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="shop.html" class="nav__link">Shop</a>
                    </li>
                    <li class="nav__item">
                        <a href="account.html" class="nav__link">My Account</a>
                    </li>
                    <li class="nav__item">
                        <a href="compare.html" class="nav__link">Compare</a>
                    </li>
                    <li class="nav__item">
                        <a href="blog.html" class="nav__link">Blog</a>
                    </li>
                </ul>

                <div class="header__search">
                    <input type="text" id="searchInput" placeholder="Search for items..." class="form__input">
                    <button class="search__btn" id="searchBtn">
                        <img src="img/search.png" alt="">
                    </button>
                </div>
            </div>

            <div class="header__user-actions">
                <a href="wishlist.html" class="header__action-btn">
                    <img src="img/icon-heart.svg" alt="">
                    <span class="count">0</span>
                </a>
                <a href="cart.html" class="header__action-btn">
                    <img src="img/icon-cart.svg" alt="">
                    <span class="count" id="cartCount">0</span>
                </a>
                <div class="header__action-btn nav__toggle" id="nav-toggle">
                    <img src="img/menu-burger.svg" alt="">
                </div>
            </div>
        </nav>
    </header>

    <main class="main">
        <section class="home section--lg">
            <div class="home__container container grid">
                <div class="home__content">
                    <span class="home__subtitle">Hot Promotions</span>
                    <h1 class="home__title">Fashion Trending <span>Great Collection</span></h1>
                    <p class="home__description">
                        Save more with coupons and up to 20% off
                    </p>
                    <a href="shop.html" class="btn">Shop Now</a>
                </div>

                <img src="img/home-img.png" alt="" class="home__img">
            </div>
        </section>

        <!-------Categories------>
        <section class="categories container section">
            <h3 class="section__title"><span>Popular</span> Categories</h3>
            <div class="categories__container swiper">
                <div class="swiper-wrapper">
                    <a href="shop.html" class="category__item swiper-slide">
                        <img src="img/category-1.jpg" alt="" class="category__img">
                        <h3 class="category__title">T-shirt</h3>
                    </a>
                    <a href="shop.html" class="category__item swiper-slide">
                        <img src="img/category-2.jpg" alt="" class="category__img">
                        <h3 class="category__title">Bags</h3>
                    </a>
                    <a href="shop.html" class="category__item swiper-slide">
                        <img src="img/category-3.jpg" alt="" class="category__img">
                        <h3 class="category__title">Sandals</h3>
                    </a>
                    <a href="shop.html" class="category__item swiper-slide">
                        <img src="img/category-4.jpg" alt="" class="category__img">
                        <h3 class="category__title">Scarf Cap</h3>
                    </a>
                    <a href="shop.html" class="category__item swiper-slide">
                        <img src="img/category-5.jpg" alt="" class="category__img">
                        <h3 class="category__title">Shoes</h3>
                    </a>
                    <a href="shop.html" class="category__item swiper-slide">
                        <img src="img/category-6.jpg" alt="" class="category__img">
                        <h3 class="category__title">Pillowcase</h3>
                    </a>
                    <a href="shop.html" class="category__item swiper-slide">
                        <img src="img/category-7.jpg" alt="" class="category__img">
                        <h3 class="category__title">Jumpsuits</h3>
                    </a>
                    <a href="shop.html" class="category__item swiper-slide">
                        <img src="img/category-8.jpg" alt="" class="category__img">
                        <h3 class="category__title">Hats</h3>
                    </a>
                </div>

                <div class="swiper-button-next">
                    <i class="fi fi-br-angle-right"></i>
                </div>
                <div class="swiper-button-prev">
                    <i class="fi fi-br-angle-left"></i>
                </div>
            </div>
        </section>

        <!-----Products------>
        <section class="products section container">
            <div class="tab__btns">
                <span class="tab__btn active-tab" data-target="#featured">Features</span>
                <span class="tab__btn" data-target="#popular">Popular</span>
                <span class="tab__btn" data-target="#new-added">New Arrival</span>
            </div>

            <div class="tab__items">
                <div class="tab__item active-tab" content id="featured">
                    <div class="products__container grid">
                        <div class="product__item" data-id="1" data-name="Colorful Pattern Shirts" data-price="238.85" data-image="img/product-1-1.jpg" data-avaiable="In Stock">
                            <div class="product__banner">
                                <a href="details.html" class="product__images">
                                    <img src="img/product-1-1.jpg" alt="" class="product__img deafult">
                                    <img src="img/product-1-2.jpg" alt="" class="product__img hover">
                                </a>

                                <div class="product__actions">
                                    <a href="details.html" class="action__btn" aria-label="Quick View">
                                        <i class="fi fi-rs-eye"></i>
                                    </a>
                                    <a href="wishlist.html" class="action__btn wishlist__btn" aria-label="Add to Wishlist">
                                        <i class="fi fi-rs-heart"></i>
                                    </a>
                                    <a href="compare.html" class="action__btn compare__btn" aria-label="Compare">
                                        <i class="fi fi-rs-shuffle"></i>
                                    </a>
                                </div>

                                <div class="product__badge light-pink">Hot</div>
                            </div>

                            <div class="product__content">
                                <span class="product__category">Clothing</span>
                                <a href="details.html">
                                    <h3 class="product__title">Colorful Pattern Shirts</h3>
                                </a>
                                <div class="product__rating">
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                </div>
                                <div class="product__price flex">
                                    <span class="new__price">₹238.85</span>
                                    <span class="old__price">₹245</span>
                                </div>

                                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                    <i class="fi fi-rs-shopping-bag-add"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product__item" data-id="2" data-name="Colorful Pattern Shirts" data-price="238.85" data-image="img/product-2-1.jpg" data-avaiable="In Stock">
                            <div class="product__banner">
                                <a href="details.html" class="product__images">
                                    <img src="img/product-2-1.jpg" alt="" class="product__img deafult">
                                    <img src="img/product-2-2.jpg" alt="" class="product__img hover">
                                </a>

                                <div class="product__actions">
                                    <a href="#" class="action__btn" aria-label="Quick View">
                                        <i class="fi fi-rs-eye"></i>
                                    </a>
                                    <a href="#" class="action__btn wishlist__btn" aria-label="Add to Wishlist">
                                        <i class="fi fi-rs-heart"></i>
                                    </a>
                                    <a href="#" class="action__btn compare__btn" aria-label="Compare">
                                        <i class="fi fi-rs-shuffle"></i>
                                    </a>
                                </div>

                                <div class="product__badge light-green">Hot</div>
                            </div>

                            <div class="product__content">
                                <span class="product__category">Clothing</span>
                                <a href="details.html">
                                    <h3 class="product__title">Colorful Pattern Shirts</h3>
                                </a>
                                <div class="product__rating">
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                </div>
                                <div class="product__price flex">
                                    <span class="new__price">₹238.85</span>
                                    <span class="old__price">₹245</span>
                                </div>

                                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                    <i class="fi fi-rs-shopping-bag-add"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product__item" data-id="3" data-name="Colorful Pattern Shirts" data-price="238.85" data-image="img/product-3-1.jpg" data-avaiable="In Stock">
                            <div class="product__banner">
                                <a href="details.html" class="product__images">
                                    <img src="img/product-3-1.jpg" alt="" class="product__img deafult">
                                    <img src="img/product-3-2.jpg" alt="" class="product__img hover">
                                </a>

                                <div class="product__actions">
                                    <a href="#" class="action__btn" aria-label="Quick View">
                                        <i class="fi fi-rs-eye"></i>
                                    </a>
                                    <a href="#" class="action__btn wishlist__btn" aria-label="Add to Wishlist">
                                        <i class="fi fi-rs-heart"></i>
                                    </a>
                                    <a href="#" class="action__btn compare__btn" aria-label="Compare">
                                        <i class="fi fi-rs-shuffle"></i>
                                    </a>
                                </div>

                                <div class="product__badge light-orange">Hot</div>
                            </div>

                            <div class="product__content">
                                <span class="product__category">Clothing</span>
                                <a href="details.html">
                                    <h3 class="product__title">Colorful Pattern Shirts</h3>
                                </a>
                                <div class="product__rating">
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                </div>
                                <div class="product__price flex">
                                    <span class="new__price">₹238.85</span>
                                    <span class="old__price">₹245</span>
                                </div>

                                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                    <i class="fi fi-rs-shopping-bag-add"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product__item" data-id="4" data-name="Colorful Pattern Shirts" data-price="238.85" data-image="img/product-4-1.jpg" data-avaiable="In Stock">
                            <div class="product__banner">
                                <a href="details.html" class="product__images">
                                    <img src="img/product-4-1.jpg" alt="" class="product__img deafult">
                                    <img src="img/product-4-2.jpg" alt="" class="product__img hover">
                                </a>

                                <div class="product__actions">
                                    <a href="#" class="action__btn" aria-label="Quick View">
                                        <i class="fi fi-rs-eye"></i>
                                    </a>
                                    <a href="#" class="action__btn wishlist__btn" aria-label="Add to Wishlist">
                                        <i class="fi fi-rs-heart"></i>
                                    </a>
                                    <a href="#" class="action__btn compare__btn" aria-label="Compare">
                                        <i class="fi fi-rs-shuffle"></i>
                                    </a>
                                </div>

                                <div class="product__badge light-blue">Hot</div>
                            </div>

                            <div class="product__content">
                                <span class="product__category">Clothing</span>
                                <a href="details.html">
                                    <h3 class="product__title">Colorful Pattern Shirts</h3>
                                </a>
                                <div class="product__rating">
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                </div>
                                <div class="product__price flex">
                                    <span class="new__price">₹238.85</span>
                                    <span class="old__price">₹245</span>
                                </div>

                                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                    <i class="fi fi-rs-shopping-bag-add"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product__item" data-id="5" data-name="Colorful Pattern Shirts" data-price="238.85" data-image="img/product-5-1.jpg" data-avaiable="In Stock">
                            <div class="product__banner">
                                <a href="details.html" class="product__images">
                                    <img src="img/product-5-1.jpg" alt="" class="product__img deafult">
                                    <img src="img/product-5-2.jpg" alt="" class="product__img hover">
                                </a>

                                <div class="product__actions">
                                    <a href="#" class="action__btn" aria-label="Quick View">
                                        <i class="fi fi-rs-eye"></i>
                                    </a>
                                    <a href="#" class="action__btn wishlist__btn" aria-label="Add to Wishlist">
                                        <i class="fi fi-rs-heart"></i>
                                    </a>
                                    <a href="#" class="action__btn compare__btn" aria-label="Compare">
                                        <i class="fi fi-rs-shuffle"></i>
                                    </a>
                                </div>

                                <div class="product__badge light-pink">-30% off</div>
                            </div>

                            <div class="product__content">
                                <span class="product__category">Clothing</span>
                                <a href="details.html">
                                    <h3 class="product__title">Colorful Pattern Shirts</h3>
                                </a>
                                <div class="product__rating">
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                </div>
                                <div class="product__price flex">
                                    <span class="new__price">₹238.85</span>
                                    <span class="old__price">₹245</span>
                                </div>

                                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                    <i class="fi fi-rs-shopping-bag-add"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product__item" data-id="6" data-name="Colorful Pattern Shirts" data-price="238.85" data-image="img/product-6-1.jpg" data-avaiable="In Stock">
                            <div class="product__banner">
                                <a href="details.html" class="product__images">
                                    <img src="img/product-6-1.jpg" alt="" class="product__img deafult">
                                    <img src="img/product-6-2.jpg" alt="" class="product__img hover">
                                </a>

                                <div class="product__actions">
                                    <a href="#" class="action__btn" aria-label="Quick View">
                                        <i class="fi fi-rs-eye"></i>
                                    </a>
                                    <a href="#" class="action__btn wishlist__btn" aria-label="Add to Wishlist">
                                        <i class="fi fi-rs-heart"></i>
                                    </a>
                                    <a href="#" class="action__btn compare__btn" aria-label="Compare">
                                        <i class="fi fi-rs-shuffle"></i>
                                    </a>
                                </div>

                                <div class="product__badge light-pink">-22% off</div>
                            </div>

                            <div class="product__content">
                                <span class="product__category">Clothing</span>
                                <a href="details.html">
                                    <h3 class="product__title">Colorful Pattern Shirts</h3>
                                </a>
                                <div class="product__rating">
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                </div>
                                <div class="product__price flex">
                                    <span class="new__price">₹238.85</span>
                                    <span class="old__price">₹245</span>
                                </div>

                                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                    <i class="fi fi-rs-shopping-bag-add"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product__item" data-id="7" data-name="Colorful Pattern Shirts" data-price="238.85" data-image="img/product-7-1.jpg" data-avaiable="In Stock">
                            <div class="product__banner">
                                <a href="details.html" class="product__images">
                                    <img src="img/product-7-1.jpg" alt="" class="product__img deafult">
                                    <img src="img/product-7-2.jpg" alt="" class="product__img hover">
                                </a>

                                <div class="product__actions">
                                    <a href="#" class="action__btn" aria-label="Quick View">
                                        <i class="fi fi-rs-eye"></i>
                                    </a>
                                    <a href="#" class="action__btn wishlist__btn" aria-label="Add to Wishlist">
                                        <i class="fi fi-rs-heart"></i>
                                    </a>
                                    <a href="#" class="action__btn compare__btn" aria-label="Compare">
                                        <i class="fi fi-rs-shuffle"></i>
                                    </a>
                                </div>

                                <div class="product__badge light-green">Hot</div>
                            </div>

                            <div class="product__content">
                                <span class="product__category">Clothing</span>
                                <a href="details.html">
                                    <h3 class="product__title">Colorful Pattern Shirts</h3>
                                </a>
                                <div class="product__rating">
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                </div>
                                <div class="product__price flex">
                                    <span class="new__price">₹238.85</span>
                                    <span class="old__price">₹245</span>
                                </div>

                                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                    <i class="fi fi-rs-shopping-bag-add"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product__item" data-id="8" data-name="Colorful Pattern Shirts" data-price="238.85" data-image="img/product-8-1.jpg" data-avaiable="In Stock">
                            <div class="product__banner">
                                <a href="details.html" class="product__images">
                                    <img src="img/product-8-1.jpg" alt="" class="product__img deafult">
                                    <img src="img/product-8-2.jpg" alt="" class="product__img hover">
                                </a>

                                <div class="product__actions">
                                    <a href="#" class="action__btn" aria-label="Quick View">
                                        <i class="fi fi-rs-eye"></i>
                                    </a>
                                    <a href="#" class="action__btn wishlist__btn" aria-label="Add to Wishlist">
                                        <i class="fi fi-rs-heart"></i>
                                    </a>
                                    <a href="#" class="action__btn compare__btn" aria-label="Compare">
                                        <i class="fi fi-rs-shuffle"></i>
                                    </a>
                                </div>

                            </div>

                            <div class="product__content">
                                <span class="product__category">Clothing</span>
                                <a href="details.html">
                                    <h3 class="product__title">Colorful Pattern Shirts</h3>
                                </a>
                                <div class="product__rating">
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                </div>
                                <div class="product__price flex">
                                    <span class="new__price">₹238.85</span>
                                    <span class="old__price">₹245</span>
                                </div>

                                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                    <i class="fi fi-rs-shopping-bag-add"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab__item" content id="popular">
                    <div class="products__container grid">
                        <div class="product__item" data-id="9" data-name="Colorful Pattern Shirts" data-price="238.85" data-image="img/product-9-1.jpg" data-avaiable="In Stock">
                            <div class="product__banner">
                                <a href="details.html" class="product__images">
                                    <img src="img/product-9-1.jpg" alt="" class="product__img deafult">
                                    <img src="img/product-9-2.jpg" alt="" class="product__img hover">
                                </a>

                                <div class="product__actions">
                                    <a href="#" class="action__btn" aria-label="Quick View">
                                        <i class="fi fi-rs-eye"></i>
                                    </a>
                                    <a href="#" class="action__btn wishlist__btn" aria-label="Add to Wishlist">
                                        <i class="fi fi-rs-heart"></i>
                                    </a>
                                    <a href="#" class="action__btn compare__btn" aria-label="Compare">
                                        <i class="fi fi-rs-shuffle"></i>
                                    </a>
                                </div>

                                <div class="product__badge light-pink">Hot</div>
                            </div>

                            <div class="product__content">
                                <span class="product__category">Clothing</span>
                                <a href="details.html">
                                    <h3 class="product__title">Colorful Pattern Shirts</h3>
                                </a>
                                <div class="product__rating">
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                </div>
                                <div class="product__price flex">
                                    <span class="new__price">₹238.85</span>
                                    <span class="old__price">₹245</span>
                                </div>

                                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                    <i class="fi fi-rs-shopping-bag-add"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product__item" data-id="10" data-name="Colorful Pattern Shirts" data-price="238.85" data-image="img/product-2-1.jpg" data-avaiable="In Stock">
                            <div class="product__banner">
                                <a href="details.html" class="product__images">
                                    <img src="img/product-2-1.jpg" alt="" class="product__img deafult">
                                    <img src="img/product-2-2.jpg" alt="" class="product__img hover">
                                </a>

                                <div class="product__actions">
                                    <a href="#" class="action__btn" aria-label="Quick View">
                                        <i class="fi fi-rs-eye"></i>
                                    </a>
                                    <a href="#" class="action__btn wishlist__btn" aria-label="Add to Wishlist">
                                        <i class="fi fi-rs-heart"></i>
                                    </a>
                                    <a href="#" class="action__btn compare__btn" aria-label="Compare">
                                        <i class="fi fi-rs-shuffle"></i>
                                    </a>
                                </div>

                                <div class="product__badge light-green">Hot</div>
                            </div>

                            <div class="product__content">
                                <span class="product__category">Clothing</span>
                                <a href="details.html">
                                    <h3 class="product__title">Colorful Pattern Shirts</h3>
                                </a>
                                <div class="product__rating">
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                </div>
                                <div class="product__price flex">
                                    <span class="new__price">₹238.85</span>
                                    <span class="old__price">₹245</span>
                                </div>

                                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                    <i class="fi fi-rs-shopping-bag-add"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product__item" data-id="11" data-name="Colorful Pattern Shirts" data-price="238.85" data-image="img/product-10-1.jpg" data-avaiable="In Stock">
                            <div class="product__banner">
                                <a href="details.html" class="product__images">
                                    <img src="img/product-10-1.jpg" alt="" class="product__img deafult">
                                    <img src="img/product-10-2.jpg" alt="" class="product__img hover">
                                </a>

                                <div class="product__actions">
                                    <a href="#" class="action__btn" aria-label="Quick View">
                                        <i class="fi fi-rs-eye"></i>
                                    </a>
                                    <a href="#" class="action__btn wishlist__btn" aria-label="Add to Wishlist">
                                        <i class="fi fi-rs-heart"></i>
                                    </a>
                                    <a href="#" class="action__btn compare__btn" aria-label="Compare">
                                        <i class="fi fi-rs-shuffle"></i>
                                    </a>
                                </div>

                                <div class="product__badge light-orange">Hot</div>
                            </div>

                            <div class="product__content">
                                <span class="product__category">Clothing</span>
                                <a href="details.html">
                                    <h3 class="product__title">Colorful Pattern Shirts</h3>
                                </a>
                                <div class="product__rating">
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                </div>
                                <div class="product__price flex">
                                    <span class="new__price">₹238.85</span>
                                    <span class="old__price">₹245</span>
                                </div>

                                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                    <i class="fi fi-rs-shopping-bag-add"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product__item" data-id="12" data-name="Colorful Pattern Shirts" data-price="238.85" data-image="img/product-4-1.jpg" data-avaiable="In Stock">
                            <div class="product__banner">
                                <a href="details.html" class="product__images">
                                    <img src="img/product-4-1.jpg" alt="" class="product__img deafult">
                                    <img src="img/product-4-2.jpg" alt="" class="product__img hover">
                                </a>

                                <div class="product__actions">
                                    <a href="#" class="action__btn" aria-label="Quick View">
                                        <i class="fi fi-rs-eye"></i>
                                    </a>
                                    <a href="#" class="action__btn wishlist__btn" aria-label="Add to Wishlist">
                                        <i class="fi fi-rs-heart"></i>
                                    </a>
                                    <a href="#" class="action__btn compare__btn" aria-label="Compare">
                                        <i class="fi fi-rs-shuffle"></i>
                                    </a>
                                </div>

                                <div class="product__badge light-blue">Hot</div>
                            </div>

                            <div class="product__content">
                                <span class="product__category">Clothing</span>
                                <a href="details.html">
                                    <h3 class="product__title">Colorful Pattern Shirts</h3>
                                </a>
                                <div class="product__rating">
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                </div>
                                <div class="product__price flex">
                                    <span class="new__price">₹238.85</span>
                                    <span class="old__price">₹245</span>
                                </div>

                                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                    <i class="fi fi-rs-shopping-bag-add"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product__item" data-id="13" data-name="Colorful Pattern Shirts" data-price="238.85" data-image="img/product-5-1.jpg" data-avaiable="In Stock">
                            <div class="product__banner">
                                <a href="details.html" class="product__images">
                                    <img src="img/product-5-1.jpg" alt="" class="product__img deafult">
                                    <img src="img/product-5-2.jpg" alt="" class="product__img hover">
                                </a>

                                <div class="product__actions">
                                    <a href="#" class="action__btn" aria-label="Quick View">
                                        <i class="fi fi-rs-eye"></i>
                                    </a>
                                    <a href="#" class="action__btn wishlist__btn" aria-label="Add to Wishlist">
                                        <i class="fi fi-rs-heart"></i>
                                    </a>
                                    <a href="#" class="action__btn compare__btn" aria-label="Compare">
                                        <i class="fi fi-rs-shuffle"></i>
                                    </a>
                                </div>

                                <div class="product__badge light-pink">-30% off</div>
                            </div>

                            <div class="product__content">
                                <span class="product__category">Clothing</span>
                                <a href="details.html">
                                    <h3 class="product__title">Colorful Pattern Shirts</h3>
                                </a>
                                <div class="product__rating">
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                </div>
                                <div class="product__price flex">
                                    <span class="new__price">₹238.85</span>
                                    <span class="old__price">₹245</span>
                                </div>

                                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                    <i class="fi fi-rs-shopping-bag-add"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product__item" data-id="14" data-name="Colorful Pattern Shirts" data-price="238.85" data-image="img/product-11-1.jpg" data-avaiable="In Stock">
                            <div class="product__banner">
                                <a href="details.html" class="product__images">
                                    <img src="img/product-11-1.jpg" alt="" class="product__img deafult">
                                    <img src="img/product-11-2.jpg" alt="" class="product__img hover">
                                </a>

                                <div class="product__actions">
                                    <a href="#" class="action__btn" aria-label="Quick View">
                                        <i class="fi fi-rs-eye"></i>
                                    </a>
                                    <a href="#" class="action__btn wishlist__btn" aria-label="Add to Wishlist">
                                        <i class="fi fi-rs-heart"></i>
                                    </a>
                                    <a href="#" class="action__btn compare__btn" aria-label="Compare">
                                        <i class="fi fi-rs-shuffle"></i>
                                    </a>
                                </div>

                                <div class="product__badge light-pink">-22% off</div>
                            </div>

                            <div class="product__content">
                                <span class="product__category">Clothing</span>
                                <a href="details.html">
                                    <h3 class="product__title">Colorful Pattern Shirts</h3>
                                </a>
                                <div class="product__rating">
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                </div>
                                <div class="product__price flex">
                                    <span class="new__price">₹238.85</span>
                                    <span class="old__price">₹245</span>
                                </div>

                                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                    <i class="fi fi-rs-shopping-bag-add"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product__item" data-id="15" data-name="Colorful Pattern Shirts" data-price="238.85" data-image="img/product-7-1.jpg" data-avaiable="In Stock">
                            <div class="product__banner">
                                <a href="details.html" class="product__images">
                                    <img src="img/product-7-1.jpg" alt="" class="product__img deafult">
                                    <img src="img/product-7-2.jpg" alt="" class="product__img hover">
                                </a>

                                <div class="product__actions">
                                    <a href="#" class="action__btn" aria-label="Quick View">
                                        <i class="fi fi-rs-eye"></i>
                                    </a>
                                    <a href="#" class="action__btn wishlist__btn" aria-label="Add to Wishlist">
                                        <i class="fi fi-rs-heart"></i>
                                    </a>
                                    <a href="#" class="action__btn compare__btn" aria-label="Compare">
                                        <i class="fi fi-rs-shuffle"></i>
                                    </a>
                                </div>

                                <div class="product__badge light-green">Hot</div>
                            </div>

                            <div class="product__content">
                                <span class="product__category">Clothing</span>
                                <a href="details.html">
                                    <h3 class="product__title">Colorful Pattern Shirts</h3>
                                </a>
                                <div class="product__rating">
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                </div>
                                <div class="product__price flex">
                                    <span class="new__price">₹238.85</span>
                                    <span class="old__price">₹245</span>
                                </div>

                                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                    <i class="fi fi-rs-shopping-bag-add"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product__item" data-id="16" data-name="Colorful Pattern Shirts" data-price="238.85" data-image="img/product-8-1.jpg" data-avaiable="In Stock">
                            <div class="product__banner">
                                <a href="details.html" class="product__images">
                                    <img src="img/product-8-1.jpg" alt="" class="product__img deafult">
                                    <img src="img/product-8-2.jpg" alt="" class="product__img hover">
                                </a>

                                <div class="product__actions">
                                    <a href="#" class="action__btn" aria-label="Quick View">
                                        <i class="fi fi-rs-eye"></i>
                                    </a>
                                    <a href="#" class="action__btn wishlist__btn" aria-label="Add to Wishlist">
                                        <i class="fi fi-rs-heart"></i>
                                    </a>
                                    <a href="#" class="action__btn compare__btn" aria-label="Compare">
                                        <i class="fi fi-rs-shuffle"></i>
                                    </a>
                                </div>

                            </div>

                            <div class="product__content">
                                <span class="product__category">Clothing</span>
                                <a href="details.html">
                                    <h3 class="product__title">Colorful Pattern Shirts</h3>
                                </a>
                                <div class="product__rating">
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                </div>
                                <div class="product__price flex">
                                    <span class="new__price">₹238.85</span>
                                    <span class="old__price">₹245</span>
                                </div>

                                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                    <i class="fi fi-rs-shopping-bag-add"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab__item" content id="new-added">
                    <div class="products__container grid">
                        <div class="product__item" data-id="17" data-name="Colorful Pattern Shirts" data-price="238.85" data-image="img/product-12-1.jpg" data-avaiable="In Stock">
                            <div class="product__banner">
                                <a href="details.html" class="product__images">
                                    <img src="img/product-12-1.jpg" alt="" class="product__img deafult">
                                    <img src="img/product-12-2.jpg" alt="" class="product__img hover">
                                </a>

                                <div class="product__actions">
                                    <a href="#" class="action__btn" aria-label="Quick View">
                                        <i class="fi fi-rs-eye"></i>
                                    </a>
                                    <a href="#" class="action__btn wishlist__btn" aria-label="Add to Wishlist">
                                        <i class="fi fi-rs-heart"></i>
                                    </a>
                                    <a href="#" class="action__btn compare__btn" aria-label="Compare">
                                        <i class="fi fi-rs-shuffle"></i>
                                    </a>
                                </div>

                                <div class="product__badge light-pink">Hot</div>
                            </div>

                            <div class="product__content">
                                <span class="product__category">Clothing</span>
                                <a href="details.html">
                                    <h3 class="product__title">Colorful Pattern Shirts</h3>
                                </a>
                                <div class="product__rating">
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                </div>
                                <div class="product__price flex">
                                    <span class="new__price">₹238.85</span>
                                    <span class="old__price">₹245</span>
                                </div>

                                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                    <i class="fi fi-rs-shopping-bag-add"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product__item" data-id="18" data-name="Colorful Pattern Shirts" data-price="238.85" data-image="img/product-2-1.jpg" data-avaiable="In Stock">
                            <div class="product__banner">
                                <a href="details.html" class="product__images">
                                    <img src="img/product-2-1.jpg" alt="" class="product__img deafult">
                                    <img src="img/product-2-2.jpg" alt="" class="product__img hover">
                                </a>

                                <div class="product__actions">
                                    <a href="#" class="action__btn" aria-label="Quick View">
                                        <i class="fi fi-rs-eye"></i>
                                    </a>
                                    <a href="#" class="action__btn wishlist__btn" aria-label="Add to Wishlist">
                                        <i class="fi fi-rs-heart"></i>
                                    </a>
                                    <a href="#" class="action__btn compare__btn" aria-label="Compare">
                                        <i class="fi fi-rs-shuffle"></i>
                                    </a>
                                </div>

                                <div class="product__badge light-green">Hot</div>
                            </div>

                            <div class="product__content">
                                <span class="product__category">Clothing</span>
                                <a href="details.html">
                                    <h3 class="product__title">Colorful Pattern Shirts</h3>
                                </a>
                                <div class="product__rating">
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                </div>
                                <div class="product__price flex">
                                    <span class="new__price">₹238.85</span>
                                    <span class="old__price">₹245</span>
                                </div>

                                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                    <i class="fi fi-rs-shopping-bag-add"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product__item" data-id="19" data-name="Colorful Pattern Shirts" data-price="238.85" data-image="img/product-3-1.jpg" data-avaiable="In Stock">
                            <div class="product__banner">
                                <a href="details.html" class="product__images">
                                    <img src="img/product-3-1.jpg" alt="" class="product__img deafult">
                                    <img src="img/product-3-2.jpg" alt="" class="product__img hover">
                                </a>

                                <div class="product__actions">
                                    <a href="#" class="action__btn" aria-label="Quick View">
                                        <i class="fi fi-rs-eye"></i>
                                    </a>
                                    <a href="#" class="action__btn wishlist__btn" aria-label="Add to Wishlist">
                                        <i class="fi fi-rs-heart"></i>
                                    </a>
                                    <a href="#" class="action__btn compare__btn" aria-label="Compare">
                                        <i class="fi fi-rs-shuffle"></i>
                                    </a>
                                </div>

                                <div class="product__badge light-orange">Hot</div>
                            </div>

                            <div class="product__content">
                                <span class="product__category">Clothing</span>
                                <a href="details.html">
                                    <h3 class="product__title">Colorful Pattern Shirts</h3>
                                </a>
                                <div class="product__rating">
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                </div>
                                <div class="product__price flex">
                                    <span class="new__price">₹238.85</span>
                                    <span class="old__price">₹245</span>
                                </div>

                                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                    <i class="fi fi-rs-shopping-bag-add"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product__item" data-id="20" data-name="Colorful Pattern Shirts" data-price="238.85" data-image="img/product-13-1.jpg" data-avaiable="In Stock">
                            <div class="product__banner">
                                <a href="details.html" class="product__images">
                                    <img src="img/product-13-1.jpg" alt="" class="product__img deafult">
                                    <img src="img/product-13-2.jpg" alt="" class="product__img hover">
                                </a>

                                <div class="product__actions">
                                    <a href="#" class="action__btn" aria-label="Quick View">
                                        <i class="fi fi-rs-eye"></i>
                                    </a>
                                    <a href="#" class="action__btn wishlist__btn" aria-label="Add to Wishlist">
                                        <i class="fi fi-rs-heart"></i>
                                    </a>
                                    <a href="#" class="action__btn compare__btn" aria-label="Compare">
                                        <i class="fi fi-rs-shuffle"></i>
                                    </a>
                                </div>

                                <div class="product__badge light-blue">Hot</div>
                            </div>

                            <div class="product__content">
                                <span class="product__category">Clothing</span>
                                <a href="details.html">
                                    <h3 class="product__title">Colorful Pattern Shirts</h3>
                                </a>
                                <div class="product__rating">
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                </div>
                                <div class="product__price flex">
                                    <span class="new__price">₹238.85</span>
                                    <span class="old__price">₹245</span>
                                </div>

                                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                    <i class="fi fi-rs-shopping-bag-add"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product__item" data-id="21" data-name="Colorful Pattern Shirts" data-price="238.85" data-image="img/product-10-1.jpg" data-avaiable="In Stock">
                            <div class="product__banner">
                                <a href="details.html" class="product__images">
                                    <img src="img/product-10-1.jpg" alt="" class="product__img deafult">
                                    <img src="img/product-10-2.jpg" alt="" class="product__img hover">
                                </a>

                                <div class="product__actions">
                                    <a href="#" class="action__btn" aria-label="Quick View">
                                        <i class="fi fi-rs-eye"></i>
                                    </a>
                                    <a href="#" class="action__btn wishlist__btn" aria-label="Add to Wishlist">
                                        <i class="fi fi-rs-heart"></i>
                                    </a>
                                    <a href="#" class="action__btn compare__btn" aria-label="Compare">
                                        <i class="fi fi-rs-shuffle"></i>
                                    </a>
                                </div>

                                <div class="product__badge light-pink">-30% off</div>
                            </div>

                            <div class="product__content">
                                <span class="product__category">Clothing</span>
                                <a href="details.html">
                                    <h3 class="product__title">Colorful Pattern Shirts</h3>
                                </a>
                                <div class="product__rating">
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                </div>
                                <div class="product__price flex">
                                    <span class="new__price">₹238.85</span>
                                    <span class="old__price">₹245</span>
                                </div>

                                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                    <i class="fi fi-rs-shopping-bag-add"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product__item" data-id="22" data-name="Colorful Pattern Shirts" data-price="238.85" data-image="img/product-6-1.jpg" data-avaiable="In Stock">
                            <div class="product__banner">
                                <a href="details.html" class="product__images">
                                    <img src="img/product-6-1.jpg" alt="" class="product__img deafult">
                                    <img src="img/product-6-2.jpg" alt="" class="product__img hover">
                                </a>

                                <div class="product__actions">
                                    <a href="#" class="action__btn" aria-label="Quick View">
                                        <i class="fi fi-rs-eye"></i>
                                    </a>
                                    <a href="#" class="action__btn wishlist__btn" aria-label="Add to Wishlist">
                                        <i class="fi fi-rs-heart"></i>
                                    </a>
                                    <a href="#" class="action__btn compare__btn" aria-label="Compare">
                                        <i class="fi fi-rs-shuffle"></i>
                                    </a>
                                </div>

                                <div class="product__badge light-pink">-22% off</div>
                            </div>

                            <div class="product__content">
                                <span class="product__category">Clothing</span>
                                <a href="details.html">
                                    <h3 class="product__title">Colorful Pattern Shirts</h3>
                                </a>
                                <div class="product__rating">
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                </div>
                                <div class="product__price flex">
                                    <span class="new__price">₹238.85</span>
                                    <span class="old__price">₹245</span>
                                </div>

                                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                    <i class="fi fi-rs-shopping-bag-add"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product__item" data-id="23" data-name="Colorful Pattern Shirts" data-price="238.85" data-image="img/product-9-1.jpg" data-avaiable="In Stock">
                            <div class="product__banner">
                                <a href="details.html" class="product__images">
                                    <img src="img/product-9-1.jpg" alt="" class="product__img deafult">
                                    <img src="img/product-9-2.jpg" alt="" class="product__img hover">
                                </a>

                                <div class="product__actions">
                                    <a href="#" class="action__btn" aria-label="Quick View">
                                        <i class="fi fi-rs-eye"></i>
                                    </a>
                                    <a href="#" class="action__btn wishlist__btn" aria-label="Add to Wishlist">
                                        <i class="fi fi-rs-heart"></i>
                                    </a>
                                    <a href="#" class="action__btn compare__btn" aria-label="Compare">
                                        <i class="fi fi-rs-shuffle"></i>
                                    </a>
                                </div>

                                <div class="product__badge light-green">Hot</div>
                            </div>

                            <div class="product__content">
                                <span class="product__category">Clothing</span>
                                <a href="details.html">
                                    <h3 class="product__title">Colorful Pattern Shirts</h3>
                                </a>
                                <div class="product__rating">
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                </div>
                                <div class="product__price flex">
                                    <span class="new__price">₹238.85</span>
                                    <span class="old__price">₹245</span>
                                </div>

                                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                    <i class="fi fi-rs-shopping-bag-add"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product__item" data-id="24" data-name="Colorful Pattern Shirts" data-price="238.85" data-image="img/product-8-1.jpg" data-avaiable="In Stock">
                            <div class="product__banner">
                                <a href="details.html" class="product__images">
                                    <img src="img/product-8-1.jpg" alt="" class="product__img deafult">
                                    <img src="img/product-8-2.jpg" alt="" class="product__img hover">
                                </a>

                                <div class="product__actions">
                                    <a href="#" class="action__btn" aria-label="Quick View">
                                        <i class="fi fi-rs-eye"></i>
                                    </a>
                                    <a href="#" class="action__btn wishlist__btn" aria-label="Add to Wishlist">
                                        <i class="fi fi-rs-heart"></i>
                                    </a>
                                    <a href="#" class="action__btn compare__btn" aria-label="Compare">
                                        <i class="fi fi-rs-shuffle"></i>
                                    </a>
                                </div>

                            </div>

                            <div class="product__content">
                                <span class="product__category">Clothing</span>
                                <a href="details.html">
                                    <h3 class="product__title">Colorful Pattern Shirts</h3>
                                </a>
                                <div class="product__rating">
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                </div>
                                <div class="product__price flex">
                                    <span class="new__price">₹238.85</span>
                                    <span class="old__price">₹245</span>
                                </div>

                                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                    <i class="fi fi-rs-shopping-bag-add"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-----Deals---->
        <section class="deals section">
            <div class="deals__container container grid">
                <div class="deals__item">
                    <div class="deals__group">
                        <h3 class="deals__brand">Deal of the Day</h3>
                        <span class="deals__category">Unlimited Quantities</span>
                    </div>
                    <h4 class="deals__title">Summer Collection New Morden Design</h4>

                    <div class="deals__price flex">
                        <span class="new__price">₹139.00</span>
                        <span class="old__price">₹160.99</span>
                    </div>

                    <div class="deals__group">
                        <p class="deals__countdown-text">Hurry Up! Offer End In:</p>
                        <div class="countdown">
                            <div class="countdown__amount">
                                <p class="countdown__period">02</p>
                                <span class="unit">Days</span>
                            </div>
                            <div class="countdown__amount">
                                <p class="countdown__period">22</p>
                                <span class="unit">Hours</span>
                            </div>
                            <div class="countdown__amount">
                                <p class="countdown__period">57</p>
                                <span class="unit">Mins</span>
                            </div>
                            <div class="countdown__amount">
                                <p class="countdown__period">24</p>
                                <span class="unit">sec</span>
                            </div>
                        </div>
                    </div>

                    <div class="deals__btn">
                        <a href="details.html" class="btn btn--md">Shop Now</a>
                    </div>

                </div>

                <div class="deals__item">
                    <div class="deals__group">
                        <h3 class="deals__brand">Women Clothing</h3>
                        <span class="deals__category">Shirt & Bag</span>
                    </div>
                    <h4 class="deals__title">Try Something New on Vacation</h4>

                    <div class="deals__price flex">
                        <span class="new__price">₹178.00</span>
                        <span class="old__price">₹190.00</span>
                    </div>

                    <div class="deals__group">
                        <p class="deals__countdown-text">Hurry Up! Offer End In:</p>
                        <div class="countdown">
                            <div class="countdown__amount">
                                <p class="countdown__period">02</p>
                                <span class="unit">Days</span>
                            </div>
                            <div class="countdown__amount">
                                <p class="countdown__period">22</p>
                                <span class="unit">Hours</span>
                            </div>
                            <div class="countdown__amount">
                                <p class="countdown__period">57</p>
                                <span class="unit">Mins</span>
                            </div>
                            <div class="countdown__amount">
                                <p class="countdown__period">24</p>
                                <span class="unit">sec</span>
                            </div>
                        </div>
                    </div>

                    <div class="deals__btn">
                        <a href="details.html" class="btn btn--md">Shop Now</a>
                    </div>

                </div>
            </div>
        </section>

        <!------New Arrivals---->
        <section class="new__arrivals container section">
            <h3 class="section__title"><span>New</span> Arrivals</h3>
            <div class="new__container swiper">
                <div class="swiper-wrapper">
                    <div class="product__item swiper-slide">
                        <div class="product__banner">
                            <a href="details.html" class="product__images">
                                <img src="img/product-9-1.jpg" alt="" class="product__img deafult">
                                <img src="img/product-9-2.jpg" alt="" class="product__img hover">
                            </a>

                            <div class="product__actions">
                                <a href="#" class="action__btn" aria-label="Quick View">
                                    <i class="fi fi-rs-eye"></i>
                                </a>
                                <a href="#" class="action__btn wishlist__btn" aria-label="Add to Wishlist">
                                    <i class="fi fi-rs-heart"></i>
                                </a>
                                <a href="#" class="action__btn compare__btn" aria-label="Compare">
                                    <i class="fi fi-rs-shuffle"></i>
                                </a>
                            </div>

                            <div class="product__badge light-pink">Hot</div>
                        </div>

                        <div class="product__content">
                            <span class="product__category">Clothing</span>
                            <a href="details.html">
                                <h3 class="product__title">Colorful Pattern Shirts</h3>
                            </a>
                            <div class="product__rating">
                                <i class="fi fi-rs-star"></i>
                                <i class="fi fi-rs-star"></i>
                                <i class="fi fi-rs-star"></i>
                                <i class="fi fi-rs-star"></i>
                                <i class="fi fi-rs-star"></i>
                            </div>
                            <div class="product__price flex">
                                <span class="new__price">₹238.85</span>
                                <span class="old__price">₹245</span>
                            </div>

                            <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                <i class="fi fi-rs-shopping-bag-add"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product__item swiper-slide">
                        <div class="product__banner">
                            <a href="details.html" class="product__images">
                                <img src="img/product-2-1.jpg" alt="" class="product__img deafult">
                                <img src="img/product-2-2.jpg" alt="" class="product__img hover">
                            </a>

                            <div class="product__actions">
                                <a href="#" class="action__btn" aria-label="Quick View">
                                    <i class="fi fi-rs-eye"></i>
                                </a>
                                <a href="#" class="action__btn wishlist__btn" aria-label="Add to Wishlist">
                                    <i class="fi fi-rs-heart"></i>
                                </a>
                                <a href="#" class="action__btn compare__btn" aria-label="Compare">
                                    <i class="fi fi-rs-shuffle"></i>
                                </a>
                            </div>

                            <div class="product__badge light-green">Hot</div>
                        </div>

                        <div class="product__content">
                            <span class="product__category">Clothing</span>
                            <a href="details.html">
                                <h3 class="product__title">Colorful Pattern Shirts</h3>
                            </a>
                            <div class="product__rating">
                                <i class="fi fi-rs-star"></i>
                                <i class="fi fi-rs-star"></i>
                                <i class="fi fi-rs-star"></i>
                                <i class="fi fi-rs-star"></i>
                                <i class="fi fi-rs-star"></i>
                            </div>
                            <div class="product__price flex">
                                <span class="new__price">₹238.85</span>
                                <span class="old__price">₹245</span>
                            </div>

                            <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                <i class="fi fi-rs-shopping-bag-add"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product__item swiper-slide">
                        <div class="product__banner">
                            <a href="details.html" class="product__images">
                                <img src="img/product-10-1.jpg" alt="" class="product__img deafult">
                                <img src="img/product-10-2.jpg" alt="" class="product__img hover">
                            </a>

                            <div class="product__actions">
                                <a href="#" class="action__btn" aria-label="Quick View">
                                    <i class="fi fi-rs-eye"></i>
                                </a>
                                <a href="#" class="action__btn wishlist__btn" aria-label="Add to Wishlist">
                                    <i class="fi fi-rs-heart"></i>
                                </a>
                                <a href="#" class="action__btn compare__btn" aria-label="Compare">
                                    <i class="fi fi-rs-shuffle"></i>
                                </a>
                            </div>

                            <div class="product__badge light-orange">Hot</div>
                        </div>

                        <div class="product__content">
                            <span class="product__category">Clothing</span>
                            <a href="details.html">
                                <h3 class="product__title">Colorful Pattern Shirts</h3>
                            </a>
                            <div class="product__rating">
                                <i class="fi fi-rs-star"></i>
                                <i class="fi fi-rs-star"></i>
                                <i class="fi fi-rs-star"></i>
                                <i class="fi fi-rs-star"></i>
                                <i class="fi fi-rs-star"></i>
                            </div>
                            <div class="product__price flex">
                                <span class="new__price">₹238.85</span>
                                <span class="old__price">₹245</span>
                            </div>

                            <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                <i class="fi fi-rs-shopping-bag-add"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product__item swiper-slide">
                        <div class="product__banner">
                            <a href="details.html" class="product__images">
                                <img src="img/product-4-1.jpg" alt="" class="product__img deafult">
                                <img src="img/product-4-2.jpg" alt="" class="product__img hover">
                            </a>

                            <div class="product__actions">
                                <a href="#" class="action__btn" aria-label="Quick View">
                                    <i class="fi fi-rs-eye"></i>
                                </a>
                                <a href="#" class="action__btn wishlist__btn" aria-label="Add to Wishlist">
                                    <i class="fi fi-rs-heart"></i>
                                </a>
                                <a href="#" class="action__btn compare__btn" aria-label="Compare">
                                    <i class="fi fi-rs-shuffle"></i>
                                </a>
                            </div>

                            <div class="product__badge light-blue">Hot</div>
                        </div>

                        <div class="product__content">
                            <span class="product__category">Clothing</span>
                            <a href="details.html">
                                <h3 class="product__title">Colorful Pattern Shirts</h3>
                            </a>
                            <div class="product__rating">
                                <i class="fi fi-rs-star"></i>
                                <i class="fi fi-rs-star"></i>
                                <i class="fi fi-rs-star"></i>
                                <i class="fi fi-rs-star"></i>
                                <i class="fi fi-rs-star"></i>
                            </div>
                            <div class="product__price flex">
                                <span class="new__price">₹238.85</span>
                                <span class="old__price">₹245</span>
                            </div>

                            <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                <i class="fi fi-rs-shopping-bag-add"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product__item swiper-slide">
                        <div class="product__banner">
                            <a href="details.html" class="product__images">
                                <img src="img/product-5-1.jpg" alt="" class="product__img deafult">
                                <img src="img/product-5-2.jpg" alt="" class="product__img hover">
                            </a>

                            <div class="product__actions">
                                <a href="#" class="action__btn" aria-label="Quick View">
                                    <i class="fi fi-rs-eye"></i>
                                </a>
                                <a href="#" class="action__btn wishlist__btn" aria-label="Add to Wishlist">
                                    <i class="fi fi-rs-heart"></i>
                                </a>
                                <a href="#" class="action__btn compare__btn" aria-label="Compare">
                                    <i class="fi fi-rs-shuffle"></i>
                                </a>
                            </div>

                            <div class="product__badge light-pink">-30% off</div>
                        </div>

                        <div class="product__content">
                            <span class="product__category">Clothing</span>
                            <a href="details.html">
                                <h3 class="product__title">Colorful Pattern Shirts</h3>
                            </a>
                            <div class="product__rating">
                                <i class="fi fi-rs-star"></i>
                                <i class="fi fi-rs-star"></i>
                                <i class="fi fi-rs-star"></i>
                                <i class="fi fi-rs-star"></i>
                                <i class="fi fi-rs-star"></i>
                            </div>
                            <div class="product__price flex">
                                <span class="new__price">₹238.85</span>
                                <span class="old__price">₹245</span>
                            </div>

                            <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                <i class="fi fi-rs-shopping-bag-add"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product__item swiper-slide">
                        <div class="product__banner">
                            <a href="details.html" class="product__images">
                                <img src="img/product-11-1.jpg" alt="" class="product__img deafult">
                                <img src="img/product-11-2.jpg" alt="" class="product__img hover">
                            </a>

                            <div class="product__actions">
                                <a href="#" class="action__btn" aria-label="Quick View">
                                    <i class="fi fi-rs-eye"></i>
                                </a>
                                <a href="#" class="action__btn wishlist__btn" aria-label="Add to Wishlist">
                                    <i class="fi fi-rs-heart"></i>
                                </a>
                                <a href="#" class="action__btn compare__btn" aria-label="Compare">
                                    <i class="fi fi-rs-shuffle"></i>
                                </a>
                            </div>

                            <div class="product__badge light-pink">-22% off</div>
                        </div>

                        <div class="product__content">
                            <span class="product__category">Clothing</span>
                            <a href="details.html">
                                <h3 class="product__title">Colorful Pattern Shirts</h3>
                            </a>
                            <div class="product__rating">
                                <i class="fi fi-rs-star"></i>
                                <i class="fi fi-rs-star"></i>
                                <i class="fi fi-rs-star"></i>
                                <i class="fi fi-rs-star"></i>
                                <i class="fi fi-rs-star"></i>
                            </div>
                            <div class="product__price flex">
                                <span class="new__price">₹238.85</span>
                                <span class="old__price">₹245</span>
                            </div>

                            <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                <i class="fi fi-rs-shopping-bag-add"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product__item swiper-slide">
                        <div class="product__banner">
                            <a href="details.html" class="product__images">
                                <img src="img/product-7-1.jpg" alt="" class="product__img deafult">
                                <img src="img/product-7-2.jpg" alt="" class="product__img hover">
                            </a>

                            <div class="product__actions">
                                <a href="#" class="action__btn" aria-label="Quick View">
                                    <i class="fi fi-rs-eye"></i>
                                </a>
                                <a href="#" class="action__btn wishlist__btn" aria-label="Add to Wishlist">
                                    <i class="fi fi-rs-heart"></i>
                                </a>
                                <a href="#" class="action__btn compare__btn" aria-label="Compare">
                                    <i class="fi fi-rs-shuffle"></i>
                                </a>
                            </div>

                            <div class="product__badge light-green">Hot</div>
                        </div>

                        <div class="product__content">
                            <span class="product__category">Clothing</span>
                            <a href="details.html">
                                <h3 class="product__title">Colorful Pattern Shirts</h3>
                            </a>
                            <div class="product__rating">
                                <i class="fi fi-rs-star"></i>
                                <i class="fi fi-rs-star"></i>
                                <i class="fi fi-rs-star"></i>
                                <i class="fi fi-rs-star"></i>
                                <i class="fi fi-rs-star"></i>
                            </div>
                            <div class="product__price flex">
                                <span class="new__price">₹238.85</span>
                                <span class="old__price">₹245</span>
                            </div>

                            <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                <i class="fi fi-rs-shopping-bag-add"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product__item swiper-slide">
                        <div class="product__banner">
                            <a href="details.html" class="product__images">
                                <img src="img/product-8-1.jpg" alt="" class="product__img deafult">
                                <img src="img/product-8-2.jpg" alt="" class="product__img hover">
                            </a>

                            <div class="product__actions">
                                <a href="#" class="action__btn" aria-label="Quick View">
                                    <i class="fi fi-rs-eye"></i>
                                </a>
                                <a href="#" class="action__btn wishlist__btn" aria-label="Add to Wishlist">
                                    <i class="fi fi-rs-heart"></i>
                                </a>
                                <a href="#" class="action__btn compare__btn" aria-label="Compare">
                                    <i class="fi fi-rs-shuffle"></i>
                                </a>
                            </div>

                        </div>

                        <div class="product__content">
                            <span class="product__category">Clothing</span>
                            <a href="details.html">
                                <h3 class="product__title">Colorful Pattern Shirts</h3>
                            </a>
                            <div class="product__rating">
                                <i class="fi fi-rs-star"></i>
                                <i class="fi fi-rs-star"></i>
                                <i class="fi fi-rs-star"></i>
                                <i class="fi fi-rs-star"></i>
                                <i class="fi fi-rs-star"></i>
                            </div>
                            <div class="product__price flex">
                                <span class="new__price">₹238.85</span>
                                <span class="old__price">₹245</span>
                            </div>

                            <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                <i class="fi fi-rs-shopping-bag-add"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="swiper-button-next">
                    <i class="fi fi-br-angle-right"></i>
                </div>
                <div class="swiper-button-prev">
                    <i class="fi fi-br-angle-left"></i>
                </div>
            </div>
        </section>

        <!----Showcase---->
        <section class="showcase section">
            <div class="showcase__container container grid">
                <div class="showcase__wrapper">
                    <h3 class="section__title">Hot Releases</h3>
                    <div class="showcase__item">
                        <a href="details.html" class="showcase__img-box">
                            <img src="img/showcase-img-1.jpg" alt="" class="showcase__img">
                        </a>
                        <div class="showcase__content">
                            <a href="details.html">
                                <h4 class="showcase__title">Floral Print Casual Cotton Dress</h4>
                            </a>
                            <div class="showcase__price flex">
                                <span class="new__price">₹238.85</span>
                                <span class="old__price">₹245.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="showcase__item">
                        <a href="details.html" class="showcase__img-box">
                            <img src="img/showcase-img-2.jpg" alt="" class="showcase__img">
                        </a>
                        <div class="showcase__content">
                            <a href="details.html">
                                <h4 class="showcase__title">Ruffled Solid Long Sleeve Blouse</h4>
                            </a>
                            <div class="showcase__price flex">
                                <span class="new__price">₹238.85</span>
                                <span class="old__price">₹245.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="showcase__item">
                        <a href="details.html" class="showcase__img-box">
                            <img src="img/showcase-img-3.jpg" alt="" class="showcase__img">
                        </a>
                        <div class="showcase__content">
                            <a href="details.html">
                                <h4 class="showcase__title">Multi-color Print V-neck T-shirt</h4>
                            </a>
                            <div class="showcase__price flex">
                                <span class="new__price">₹238.85</span>
                                <span class="old__price">₹245.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="showcase__wrapper">
                    <h3 class="section__title">Deals & Outlet</h3>
                    <div class="showcase__item">
                        <a href="details.html" class="showcase__img-box">
                            <img src="img/showcase-img-4.jpg" alt="" class="showcase__img">
                        </a>
                        <div class="showcase__content">
                            <a href="details.html">
                                <h4 class="showcase__title">Fish Print Patched T-shirt</h4>
                            </a>
                            <div class="showcase__price flex">
                                <span class="new__price">₹238.85</span>
                                <span class="old__price">₹245.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="showcase__item">
                        <a href="details.html" class="showcase__img-box">
                            <img src="img/showcase-img-5.jpg" alt="" class="showcase__img">
                        </a>
                        <div class="showcase__content">
                            <a href="details.html">
                                <h4 class="showcase__title">Vintage Floral Print Dress</h4>
                            </a>
                            <div class="showcase__price flex">
                                <span class="new__price">₹238.85</span>
                                <span class="old__price">₹245.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="showcase__item">
                        <a href="details.html" class="showcase__img-box">
                            <img src="img/showcase-img-6.jpg" alt="" class="showcase__img">
                        </a>
                        <div class="showcase__content">
                            <a href="details.html">
                                <h4 class="showcase__title">Multi-color Stripe Circle T-shirt</h4>
                            </a>
                            <div class="showcase__price flex">
                                <span class="new__price">₹238.85</span>
                                <span class="old__price">₹245.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="showcase__wrapper">
                    <h3 class="section__title">Top Selling</h3>
                    <div class="showcase__item">
                        <a href="details.html" class="showcase__img-box">
                            <img src="img/showcase-img-7.jpg" alt="" class="showcase__img">
                        </a>
                        <div class="showcase__content">
                            <a href="details.html">
                                <h4 class="showcase__title">Geometric Printed Long Sleeve Blouse</h4>
                            </a>
                            <div class="showcase__price flex">
                                <span class="new__price">₹238.85</span>
                                <span class="old__price">₹245.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="showcase__item">
                        <a href="details.html" class="showcase__img-box">
                            <img src="img/showcase-img-8.jpg" alt="" class="showcase__img">
                        </a>
                        <div class="showcase__content">
                            <a href="details.html">
                                <h4 class="showcase__title">Print Patchwork Maxi Dress</h4>
                            </a>
                            <div class="showcase__price flex">
                                <span class="new__price">₹238.85</span>
                                <span class="old__price">₹245.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="showcase__item">
                        <a href="details.html" class="showcase__img-box">
                            <img src="img/showcase-img-9.jpg" alt="" class="showcase__img">
                        </a>
                        <div class="showcase__content">
                            <a href="details.html">
                                <h4 class="showcase__title">Daisy Flower Print Shirt</h4>
                            </a>
                            <div class="showcase__price flex">
                                <span class="new__price">₹238.85</span>
                                <span class="old__price">₹245.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="showcase__wrapper">
                    <h3 class="section__title">Trendy</h3>
                    <div class="showcase__item">
                        <a href="details.html" class="showcase__img-box">
                            <img src="img/showcase-img-1.jpg" alt="" class="showcase__img">
                        </a>
                        <div class="showcase__content">
                            <a href="details.html">
                                <h4 class="showcase__title">Floral Print Casual Cotton Dress</h4>
                            </a>
                            <div class="showcase__price flex">
                                <span class="new__price">₹238.85</span>
                                <span class="old__price">₹245.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="showcase__item">
                        <a href="details.html" class="showcase__img-box">
                            <img src="img/showcase-img-2.jpg" alt="" class="showcase__img">
                        </a>
                        <div class="showcase__content">
                            <a href="details.html">
                                <h4 class="showcase__title">Ruffled Solid Long Sleeve Blouse</h4>
                            </a>
                            <div class="showcase__price flex">
                                <span class="new__price">₹238.85</span>
                                <span class="old__price">₹245.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="showcase__item">
                        <a href="details.html" class="showcase__img-box">
                            <img src="img/showcase-img-3.jpg" alt="" class="showcase__img">
                        </a>
                        <div class="showcase__content">
                            <a href="details.html">
                                <h4 class="showcase__title">Multi-color Print V-neck T-shirt</h4>
                            </a>
                            <div class="showcase__price flex">
                                <span class="new__price">₹238.85</span>
                                <span class="old__price">₹245.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-----Newsletter---->
        <section class="newsletter section home__newsletter">
            <div class="newsletter__container container grid">
                <h3 class="newsletter__title flex">
                    <img src="img/icon-email.svg" alt="" class="newsletter__icon">
                    Sign up to Newsletter
                </h3>
                <p class="newsletter__description">
                    ....and recieve ₹25 coupon for first shopping.
                </p>

                <form action="" class="newsletter__form">
                    <input type="text" placeholder="Enter your Email" class="newsletter__input">
                    <button type="submit" class="newsletter__btn">Subscribe</button>
                </form>
            </div>
        </section>

    </main>

    <!----footer---->
    <footer class="footer container">
        <div class="footer__container grid">
            <div class="footer__content">
                <a href="index.html" class="footer__logo">
                    <img src="img/LOGO.png" alt="" class="footer__logo-img">
                </a>
                <h4 class="footer__subtitle">Contact</h4>
                <p class="footer__description">
                    <b>Address: </b>Sushant University, Sector-55, Gurugram, Haryana
                </p>
                <p class="footer__description">
                    <b>Phone: </b>+91 123456789
                </p>
                <p class="footer__description">
                    <b>Hours: </b>10:00-18:00, Mon-Sat
                </p>

                <div class="footer__social">
                    <h4 class="footer__subtitle">Follow Us</h4>
                    <div class="footer__social-links flex">
                        <a href="https://www.facebook.com/">
                            <img src="img/icon-facebook.svg" alt="" class="footer__social-icon">
                        </a>
                        <a href="https://x.com/">
                            <img src="img/icon-twitter.svg" alt="" class="footer__social-icon">
                        </a>
                        <a href="https://www.instagram.com/">
                            <img src="img/icon-instagram.svg" alt="" class="footer__social-icon">
                        </a>
                        <a href="https://in.pinterest.com/">
                            <img src="img/icon-pinterest.svg" alt="" class="footer__social-icon">
                        </a>
                        <a href="https://www.youtube.com/">
                            <img src="img/icon-youtube.svg" alt="" class="footer__social-icon">
                        </a>
                    </div>
                </div>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Address</h3>
                <ul class="footer__links">
                    <li><a href="about.html" class="footer__link">About Us</a></li>
                    <li><a href="" class="footer__link">Delivery Information</a></li>
                    <li><a href="privacy.html" class="footer__link">Privacy Policy</a></li>
                    <li><a href="terms.html" class="footer__link">Terms and Conditions</a></li>
                    <li><a href="contact.html" class="footer__link">Contact Us</a></li>
                    <li><a href="" class="footer__link">Support Center</a></li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">My Account</h3>
                <ul class="footer__links">
                    <li><a href="login-register.html" class="footer__link">Sign In</a></li>
                    <li><a href="cart.html" class="footer__link">View Cart</a></li>
                    <li><a href="wishlist.html" class="footer__link">My Wishlist</a></li>
                    <li><a href="" class="footer__link">Track my Order</a></li>
                    <li><a href="" class="footer__link">Help</a></li>
                    <li><a href="account.html" class="footer__link">Order</a></li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Secured Payment Gateways</h3>

                <img src="img/payment-method.png" alt="" class="payment__img">
            </div>
        </div>

        <div class="footer__bottom">
            <p class="copyright">&copy; 2024 OutfitHouse. All Rights Reserved</p>
            <span class="designer">Designed by SyntaxSquad</span>
        </div>
    </footer>





    <!---swiper js link--->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="script.js"></script>
</body>
</html>