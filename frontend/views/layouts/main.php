<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<!--<header>-->
<!--    --><?php
//    NavBar::begin([
//        'brandLabel' => Yii::$app->name,
//        'brandUrl' => Yii::$app->homeUrl,
//        'options' => [
//            'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
//        ],
//    ]);
//    $menuItems = [
//        ['label' => 'Home', 'url' => ['/site/index']],
//        ['label' => 'About', 'url' => ['/site/about']],
//        ['label' => 'Contact', 'url' => ['/site/contact']],
//    ];
//    if (Yii::$app->user->isGuest) {
//        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
//    }
//
//    echo Nav::widget([
//        'options' => ['class' => 'navbar-nav me-auto mb-2 mb-md-0'],
//        'items' => $menuItems,
//    ]);
//    if (Yii::$app->user->isGuest) {
//        echo Html::tag('div',Html::a('Login',['/site/login'],['class' => ['btn btn-link login text-decoration-none']]),['class' => ['d-flex']]);
//    } else {
//        echo Html::beginForm(['/site/logout'], 'post', ['class' => 'd-flex'])
//            . Html::submitButton(
//                'Logout (' . Yii::$app->user->identity->username . ')',
//                ['class' => 'btn btn-link logout text-decoration-none']
//            )
//            . Html::endForm();
//    }
//    NavBar::end();
//    ?>
<!--</header>-->
<header>
    <!-- Header Top Start -->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <!-- Header Top left Start -->
                <div class="col-lg-4 col-md-12 d-center">
                    <div class="header-top-left">
                        <img src="img/icon/call.png" alt="">Call Us : +11 222 3333
                    </div>
                </div>
                <!-- Header Top left End -->
                <!-- Search Box Start -->
                <div class="col-lg-4 col-md-6 ml-auto mr-auto">
                    <div class="search-box-view">
                        <form action="#">
                            <input type="text" class="email" placeholder="Search Your Product" name="product">
                            <button type="submit" class="submit"></button>
                        </form>
                    </div>
                </div>
                <!-- Search Box End -->
                <!-- Header Top Right Start -->
                <div class="col-lg-4 col-md-12">
                    <div class="header-top-right">
                        <ul class="header-list-menu f-right">
                            <!-- Language Start -->
                            <li><a href="#">Language: English <i class="fa fa-angle-down"></i></a>
                                <ul class="ht-dropdown">
                                    <li><a href="#">Spanish</a></li>
                                    <li><a href="#">Bengali</a></li>
                                    <li><a href="#">Russian</a></li>
                                </ul>
                            </li>
                            <!-- Language End -->
                            <!-- Currency Start -->
                            <li><a href="#">Currency:  USD <i class="fa fa-angle-down"></i></a>
                                <ul class="ht-dropdown">
                                    <li><a href="#">USD</a></li>
                                    <li><a href="#">GBP</a></li>
                                    <li><a href="#">EUR</a></li>
                                </ul>
                            </li>
                            <!-- Currency End -->
                        </ul>
                        <!-- Header-list-menu End -->
                    </div>
                </div>
                <!-- Header Top Right End -->
            </div>
        </div>
        <!-- Container End -->
    </div>
    <!-- Header Top End -->
    <!-- Header Bottom Start -->
    <div class="header-bottom header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-2 col-sm-5 col-5">
                    <div class="logo">
                        <a href="index.html"><img src="img/logo/logo.png" alt="logo-image"></a>
                    </div>
                </div>
                <!-- Primary Vertical-Menu End -->
                <!-- Search Box Start -->
                <div class="col-xl-6 col-lg-7 d-none d-lg-block wrapper-menu-list">
                    <div class="middle-menu pull-right">
                        <nav>
                            <ul class="middle-menu-list">
                                <li><?=Html::tag('a',Html::a('home',['/'], ['class' => 'btn-a']))?></li>
                                <li><?=Html::tag('a',Html::a('about us',['/site/about'], ['class' => 'btn-a']))?></li>
                                <li><?=Html::tag('a',Html::a('shop',['/site/shop'], ['class' => 'btn-a']))?></li>
                                <li><?=Html::tag('a',Html::a('contact us',['/site/contact'], ['class' => 'btn-a']))?></li>
                                <li>
                                    <?php
                                    if (Yii::$app->user->isGuest) {
                                        echo Html::tag('a',Html::a('Login',['/site/login'],['class' => ['btn-a']]));
                                    } else {
                                        echo Html::beginForm(['/site/logout'], 'post', ['class' => 'd-flex'])
                                            . Html::submitButton(
                                                'Logout (' . Yii::$app->user->identity->username . ')',
                                                ['class' => 'btn-a']
                                            )
                                            . Html::endForm();
                                    }
                                    ?>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- Search Box End -->
                <!-- Cartt Box Start -->
                <div class="col-lg-3 col-sm-7 col-7">
                    <div class="cart-box text-right">
                        <ul>
                            <li><a href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-basket"></i><span class="cart-counter">2</span></a>
                                <ul class="ht-dropdown main-cart-box">
                                    <li>
                                        <!-- Cart Box Start -->
                                        <div class="single-cart-box">
                                            <div class="cart-img">
                                                <a href="#"><img src="img/menu/1.jpg" alt="cart-image"></a>
                                            </div>
                                            <div class="cart-content">
                                                <h6><a href="product.html">Products Name</a></h6>
                                                <span>1 × $399.00</span>
                                            </div>
                                            <a class="del-icone" href="#"><i class="fa fa-window-close-o"></i></a>
                                        </div>
                                        <!-- Cart Box End -->
                                        <!-- Cart Box Start -->
                                        <div class="single-cart-box">
                                            <div class="cart-img">
                                                <a href="#"><img src="img/menu/2.jpg" alt="cart-image"></a>
                                            </div>
                                            <div class="cart-content">
                                                <h6><a href="product.html">Products Name</a></h6>
                                                <span>2 × $299.00</span>
                                            </div>
                                            <a class="del-icone" href="#"><i class="fa fa-window-close-o"></i></a>
                                        </div>
                                        <!-- Cart Box End -->
                                        <!-- Cart Footer Inner Start -->
                                        <div class="cart-footer fix">
                                            <h5>total :<span class="f-right">$698.00</span></h5>
                                            <div class="cart-actions">
                                                <a class="checkout" href="checkout.html">Checkout</a>
                                            </div>
                                        </div>
                                        <!-- Cart Footer Inner End -->
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Cartt Box End -->
                <div class="col-sm-12 d-lg-none">
                    <div class="mobile-menu">
                        <nav>
                            <ul>
                                <li><a href="index.html">home</a>
                                    <!-- Home Version Dropdown Start -->
                                    <ul>
                                        <li><a href="index.html">Home Version One</a></li>
                                        <li><a href="index-2.html">Home Version Two</a></li>
                                        <li><a href="index-3.html">Home Box Layout</a></li>
                                    </ul>
                                    <!-- Home Version Dropdown End -->
                                </li>
                                <li><a href="shop.html">shop</a>
                                    <!-- Mobile Menu Dropdown Start -->
                                    <ul>
                                        <li><a href="product.html">Shop</a>
                                            <ul>
                                                <li><a href="shop.html">Product Category Name</a>
                                                    <!-- Start Three Step -->
                                                    <ul>
                                                        <li><a href="shop.html">Product Category Name</a></li>
                                                        <li><a href="shop.html">Product Category Name</a></li>
                                                        <li><a href="shop.html">Product Category Name</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="shop.html">Product Category Name</a></li>
                                                <li><a href="shop.html">Product Category Name</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="product.html">product details Page</a></li>
                                        <li><a href="compare.html">Compare Page</a></li>
                                        <li><a href="cart.html">Cart Page</a></li>
                                        <li><a href="checkout.html">Checkout Page</a></li>
                                        <li><a href="wishlist.html">Wishlist Page</a></li>
                                    </ul>
                                    <!-- Mobile Menu Dropdown End -->
                                </li>
                                <li><a href="blog.html">Blog</a>
                                    <!-- Mobile Menu Dropdown Start -->
                                    <ul>
                                        <li><a href="blog-details.html">Blog Details Page</a></li>
                                    </ul>
                                    <!-- Mobile Menu Dropdown End -->
                                </li>
                                <li><a href="#">pages</a>
                                    <!-- Mobile Menu Dropdown Start -->
                                    <ul>
                                        <li><a href="login.html">login Page</a></li>
                                        <li><a href="register.html">Register Page</a></li>
                                        <li><a href="404.html">404 Page</a></li>
                                    </ul>
                                    <!-- Mobile Menu Dropdown End -->
                                </li>
                                <li><a href="about.html">about us</a></li>
                                <li><a href="contact.html">contact us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- Mobile Menu  End -->
            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
    </div>
    <!-- Header Bottom End -->
</header>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer class="off-white-bg">
    <!-- Footer Top Start -->
    <div class="footer-top pt-50 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mr-auto ml-auto">
                    <div class="newsletter text-center">
                        <div class="main-news-desc">
                            <div class="news-desc">
                                <h3>Sign Up For Newsletters</h3>
                                <p>Get e-mail updates about our latest shop and special offers.</p>
                            </div>
                        </div>
                        <div class="newsletter-box">
                            <form action="#">
                                <input class="subscribe" placeholder="Enter your email address" name="email" id="subscribe" type="text">
                                <button type="submit" class="submit">subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Single Footer Start -->
                <div class="col-lg-4  col-md-7 col-sm-6">
                    <div class="single-footer">
                        <h3>Contact us</h3>
                        <div class="footer-content">
                            <div class="loc-address">
                                <span><i class="fa fa-map-marker"></i>184 Main Rd E, St Albans VIC 3021, Australia.</span>
                                <span><i class="fa fa-envelope-o"></i>Mail Us : yourinfo@example.com</span>
                                <span><i class="fa fa-phone"></i>Phone: + 00 254 254565 54</span>
                            </div>
                            <div class="payment-mth"><a href="#"><img class="img" src="img/footer/1.png" alt="payment-image"></a></div>
                        </div>
                    </div>
                </div>
                <!-- Single Footer Start -->
                <!-- Single Footer Start -->
                <div class="col-lg-2  col-md-5 col-sm-6 footer-full">
                    <div class="single-footer">
                        <h3 class="footer-title">Information</h3>
                        <div class="footer-content">
                            <ul class="footer-list">
                                <li><a href="#">Site Map</a></li>
                                <li><a href="#">Specials</a></li>
                                <li><a href="#">Jobs</a></li>
                                <li><a href="#">Delivery Information</a></li>
                                <li><a href="#">Order History</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Footer Start -->
                <!-- Single Footer Start -->
                <div class="col-lg-2  col-md-4 col-md-4 col-sm-6 footer-full">
                    <div class="single-footer">
                        <h3 class="footer-title">My Account</h3>
                        <div class="footer-content">
                            <ul class="footer-list">
                                <li><a href="account.html">My account</a></li>
                                <li><a href="#">Checkout</a></li>
                                <li><a href="#">Login</a></li>
                                <li><a href="#">address</a></li>
                                <li><a href="#">Order status</a></li>
                                <li><a href="#">Site Map</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Footer Start -->
                <!-- Single Footer Start -->
                <div class="col-lg-2 col-md-4 col-sm-6 footer-full">
                    <div class="single-footer">
                        <h3 class="footer-title">customer service</h3>
                        <div class="footer-content">
                            <ul class="footer-list">
                                <li><a href="account.html">My account</a></li>
                                <li><a href="#">New</a></li>
                                <li><a href="#">Gift Cards</a></li>
                                <li><a href="#">Return Policy</a></li>
                                <li><a href="#">Your Orders</a></li>
                                <li><a href="#">Subway</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Footer Start -->
                <!-- Single Footer Start -->
                <div class="col-lg-2 col-md-4 col-sm-6 footer-full">
                    <div class="single-footer">
                        <h3 class="footer-title">Let Us Help You</h3>
                        <div class="footer-content">
                            <ul class="footer-list">
                                <li><a href="#">Your Account</a></li>
                                <li><a href="#">Your Orders</a></li>
                                <li><a href="#">Shipping</a></li>
                                <li><a href="#">Amazon Prime</a></li>
                                <li><a href="#">Replacements</a></li>
                                <li><a href="#">Manage </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Footer Start -->
            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
    </div>
    <!-- Footer Top End -->
    <!-- Footer Bottom Start -->
    <div class="footer-bottom off-white-bg2">
        <div class="container">
            <div class="footer-bottom-content">
                <p class="copy-right-text">Copyright © <a  href="#">Jantrik</a> All Rights Reserved.</p>
                <div class="footer-social-content">
                    <ul class="social-content-list">
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-wifi"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Container End -->
    </div>
    <!-- Footer Bottom End -->
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
