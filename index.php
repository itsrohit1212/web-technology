<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion store</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <!--Nav bar-->
    <section class="head-section">
        <header class="container">
            <nav class="navbar navbar-expand-lg navbar-light penguin-nabbar">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="Images/logo.png" alt="" class="penguin-logo img-fluid">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active " aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#products">Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about-us">About us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="signup.php" target="_blank">Register</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php" target="_blank">login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    </section>

    <main>
        <!--Banner section-->
        <section class="head-section">
            <div class="pt-2 pb-5 container">
                <div class="row d-flex align-items-center">
                    <div class="col-md-6 px-3">
                        <h1 id="text-style">Be the Penguins</h1>
                        <h1 class="text-style2">of Winter</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <button type="button" class="btn penguin-btn"><i class="fa fa-shopping-cart"></i> BUY NOW</button>
                    </div>
                    <div class="col-md-6 how-img px-5">
                        <img src="Images/bannar-profile.png" class="img-fluid" alt="" />
                    </div>
                </div>
            </div>
        </section>

        <!--Woman collection section-->
        <section id="products" class="container mt-5">
            <h1>Woman Jacket</h1>
            <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
                <div class="col">
                    <div class="card h-100 penguin-card-border shadow rounded">
                        <img src="Images/woman/woman-jak1.png" class="card-img-top penguin-card-img w-75" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Yellow Coat Jacket</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, neque.</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center penguin-card-footer">
                            <div>
                                <h3 class="price-text-style">$234</h3>
                            </div>
                            <div>
                                <button type="button" class="btn penguin-btn"><i class="fa fa-shopping-cart"></i> BUY NOW</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 penguin-card-border shadow rounded">
                        <img src="Images/woman/woman-jak2.png" class="card-img-top penguin-card-img w-75" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Ladies Jacket</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, minus!</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center penguin-card-footer">
                            <div>
                                <h3 class="price-text-style">$234</h3>
                            </div>
                            <div>
                                <button type="button" class="btn penguin-btn"><i class="fa fa-shopping-cart"></i> BUY NOW</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 penguin-card-border shadow rounded">
                        <img src="Images/woman/woman-jak3.png" class="card-img-top penguin-card-img w-75" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Woman Leather Jacket</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, excepturi.</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center penguin-card-footer">
                            <div>
                                <h3 class="price-text-style">$234</h3>
                            </div>
                            <div>
                                <button type="button" class="btn penguin-btn"><i class="fa fa-shopping-cart"></i> BUY NOW</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Men collection section-->
        <section class="container mt-5">
            <h1 class="penguin-catagory">Woman Jacket</h1>
            <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
                <div class="col">
                    <div class="card h-100 penguin-card-border shadow rounded">
                        <img src="Images/man/man-jak1.png" class="card-img-top penguin-card-img w-75" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Snowboard Jacket Mens</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, neque.</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center penguin-card-footer">
                            <div>
                                <h3 class="price-text-style">$234</h3>
                            </div>
                            <div>
                                <button type="button" class="btn penguin-btn"><i class="fa fa-shopping-cart"></i> BUY NOW</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 penguin-card-border shadow rounded">
                        <img src="Images/man/man-jak3.png" class="card-img-top penguin-card-img w-75" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Man Leather Jackets</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, minus!</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center penguin-card-footer">
                            <div>
                                <h3 class="price-text-style">$234</h3>
                            </div>
                            <div>
                                <button type="button" class="btn penguin-btn"><i class="fa fa-shopping-cart"></i> BUY NOW</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 penguin-card-border shadow rounded">
                        <img src="Images/man/man-jak2.png" class="card-img-top penguin-card-img w-75" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Man Casual Jackets</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, excepturi.</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center penguin-card-footer">
                            <div>
                                <h3 class="price-text-style">$234</h3>
                            </div>
                            <div>
                                <button type="button" class="btn penguin-btn"><i class="fa fa-shopping-cart"></i> BUY NOW</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Some information section-->
        <section class="container mt-5 pt-5">
            <div class="pt-2 pb-5 container">
                <div class="row d-flex align-items-center flex-column-reverse flex-lg-row">
                    <div class="col-md-6 px-3">
                        <div class="card mb-3 penguin-card-border shadow" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-3">
                                    <img src="icon/image 12.png" class="w-50 penguin-info" alt="...">
                                </div>
                                <div class="col-md-9">
                                    <div class="card-body">
                                        <h5 class="card-title">Find the Perfect Fit</h5>
                                        <p class="card-text">Everybody is different, which is why we offer styles for every body.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3 penguin-card-border shadow" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-3">
                                    <img src="icon/image 13.png" class="w-50 penguin-info" alt="...">
                                </div>
                                <div class="col-md-9">
                                    <div class="card-body">
                                        <h5 class="card-title">Free Exchanges</h5>
                                        <p class="card-text">One of the many reasons you can shop with peace of mind.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3 penguin-card-border shadow" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-3">
                                    <img src="icon/image 14.png" class="w-50 penguin-info" alt="...">
                                </div>
                                <div class="col-md-9">
                                    <div class="card-body">
                                        <h5 class="card-title">Contact Our Seller</h5>
                                        <p class="card-text">They are here to help you. That's quite literally what we pay them for.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 how-img px-5">
                        <img src="icon/XMLID 1.png" class="img-fluid" alt="" />
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!--Footer section-->
    <section class="footer-section">
        <div class="container pb-5">
            <div class="row">
                <div id="about-us" class="col-sm pe-5 pt-3">
                    <img src="Images/logo.png" alt="" class="penguin-logo img-fluid">
                    <hr>
                    <p>Changing the way you dress will change the way you feel. When you are well dressed and look good you will automatically feel better. When you feel good about yourself, you are more likely to feel good inside, treat others better, and
                        have more energy.</p>
                </div>
                <div id="contact-us" class="col-sm pe-5 pt-3">
                    <h5>Contact us</h5>
                    <hr>
                    <p><i class="fa fa-map-marker fa-1x"> </i> karnavati university</p>
                    <p><i class="fa fa-envelope-open"></i> support@store.com</p>
                    <p><i class="fa fa-phone"></i> +9184018956</p>
                </div>
                <div class="col-sm pe-5 pt-3">
                    <div>
                        <h5>Get in Touch</h5>
                        <hr>
                        <i class="fa fa-facebook-square fa-2x pe-3"> </i>
                        <i class="fa fa-twitter-square fa-2x pe-3"></i>
                        <i class="fa fa-linkedin fa-2x pe-3"></i>
                    </div>
                    <div class="pt-5">
                        <h5>Pay with </h5>
                        <hr>
                        <img src="icon/pay.png" class="w-75" alt="">
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <hr>
            <p class="text-center">© Fashion store 2024, all rights reserved</p>
        </footer>
    </section>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>