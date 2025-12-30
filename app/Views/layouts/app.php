<!DOCTYPE html>
<html>
<head>
    <title>ByteBasket | Your Trusted Online Organic Grocery Store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="<?= base_url("public/assets/fonts/sb-bistro/sb-bistro.css");?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url("public/assets/fonts/font-awesome/font-awesome.css");?>" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" media="all" href="<?= base_url("public/assets/packages/bootstrap/bootstrap.css");?>">
    <link rel="stylesheet" type="text/css" media="all" href="<?= base_url("public/assets/packages/o2system-ui/o2system-ui.css");?>">
    <link rel="stylesheet" type="text/css" media="all" href="<?= base_url("public/assets/packages/owl-carousel/owl-carousel.css");?>">
    <link rel="stylesheet" type="text/css" media="all" href="<?= base_url("public/assets/packages/cloudzoom/cloudzoom.css");?>">
    <link rel="stylesheet" type="text/css" media="all" href="<?= base_url("public/assets/packages/thumbelina/thumbelina.css");?>">
    <link rel="stylesheet" type="text/css" media="all" href="<?= base_url("public/assets/packages/bootstrap-touchspin/bootstrap-touchspin.css");?>">
    <link rel="stylesheet" type="text/css" media="all" href="<?= base_url("public/assets/css/theme.css");?>">

</head>
<body>
    <div class="page-header">
        <!--=============== Navbar ===============-->
        <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-transparent" id="page-navigation">
            <div class="container">
                <!-- Navbar Brand -->
                <a href="index.html" class="navbar-brand">
                    <img src="assets/img/logo/logo.png" alt="">
                </a>

                <!-- Toggle Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarcollapse">
                    <!-- Navbar Menu -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="<?= base_url('products/shop');?>" class="nav-link">Shop</a>
                        </li>
                        <?php if(isset(auth()->user()->username)) :?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="avatar-header"><img src="assets/img/logo/avatar.jpg"></div> <?=auth()->user()->username;?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="transaction.html">Transactions History</a>
                                <a class="dropdown-item" href="setting.html">Settings</a>
                                <a class="dropdown-item" href="<?= base_url("logout");?>">Logout</a>
                            </div>
                          </li>
                        <?php else : ?>
                            <li class="nav-item">
                                <a href="<?= base_url("register");?>" class="nav-link">Register</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url("login");?>" class="nav-link">Login</a>
                            </li>
                        <?php endif; ?>
                        <li class="nav-item">
                            <a href="<?= url_to('cart'); ?>" class="nav-link" data-toggle="" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-shopping-basket"></i> <span class="badge badge-primary">5</span>
                            </a>
                          
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
    </div>
    <div class="app">
        <?= $this->renderSection("content"); ?>
    </div>
   <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h5>About</h5>
                    <p>We deliver fresh produce from local farms to your doorstep within 24 hours of harvest. Farmers receive your orders in advance to harvest only what you need, reducing waste. Each item shows the farmer’s profile so you know who grows your food. We simplify the supply chain to ensure farmers earn fair returns for their hard work.</p>
                </div>
                <div class="col-md-3">
                    <h5>Links</h5>
                    <ul>
                        <li>
                            <a href="about.html">About</a>
                        </li>
                        <li>
                            <a href="contact.html">Contact Us</a>
                        </li>
                        <li>
                            <a href="faq.html">FAQ</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">How it Works</a>
                        </li>
                        <li>
                            <a href="terms.html">Terms</a>
                        </li>
                        <li>
                            <a href="privacy.html">Privacy Policy</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                     <h5>Contact</h5>
                     <ul>
                         <li>
                            <a href="tel:+918129059648"><i class="fa fa-phone"></i> +918129059648</a>
                        </li>
                        <li>
                            <a href="mailto:themadhav222@gmail.com"><i class="fa fa-envelope"></i> themadhav222@gmail.com</a>
                         </li>
                     </ul>

                     <h5>Follow Us</h5>
                     <ul class="social">
                         <li>
                            <a href="javascript:void(0)" target="_blank"><i class="fab fa-facebook-f"></i></a>
                         </li>
                         <li>
                            <a href="javascript:void(0)" target="_blank"><i class="fab fa-instagram"></i></a>
                         </li>
                         <li>
                            <a href="javascript:void(0)" target="_blank"><i class="fab fa-youtube"></i></a>
                         </li>
                     </ul>
                </div>
                <div class="col-md-3">
                     <h5>Get Our App</h5>
                     <ul class="mb-0">
                         <li class="download-app">
                             <a href="#"><img src="assets/img/playstore.png"></a>
                         </li>
                         <li style="height: 200px">
                             <div class="mockup">
                                 <img src="assets/img/mockup.png">
                             </div>
                         </li>
                     </ul>
                </div>
            </div>
        </div>
        <p class="copyright">&copy; 2025 ByteBasket: Your Trusted Online Organic Grocery Store | MR Group. All rights reserved.</p>
    </footer>

    <script type="text/javascript" src="<?= base_url("public/assets/js/jquery.js");?>"></script>
    <script type="text/javascript" src="<?= base_url("public/assets/js/jquery-migrate.js");?>"></script>
    <script type="text/javascript" src="<?= base_url("public/assets/packages/bootstrap/libraries/popper.js");?>"></script>
    <script type="text/javascript" src="<?= base_url("public/assets/packages/bootstrap/bootstrap.js");?>"></script>
    <script type="text/javascript" src="<?= base_url("public/assets/packages/o2system-ui/o2system-ui.js");?>"></script>
    <script type="text/javascript" src="<?= base_url("public/assets/packages/owl-carousel/owl-carousel.js");?>"></script>
    <script type="text/javascript" src="<?= base_url("public/assets/packages/cloudzoom/cloudzoom.js");?>"></script>
    <script type="text/javascript" src="<?= base_url("public/assets/packages/thumbelina/thumbelina.js");?>"></script>
    <script type="text/javascript" src="<?= base_url("public/assets/packages/bootstrap-touchspin/bootstrap-touchspin.js");?>"></script>
    <script type="text/javascript" src="<?= base_url("public/assets/js/theme.js");?>"></script>
</body>
</html>