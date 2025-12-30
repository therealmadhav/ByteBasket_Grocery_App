<?= $this->extend("layouts/app.php");?>
<?= $this->section("content");?>
    <div id="page-content" class="page-content">
        <div class="banner">
            <div class="jumbotron jumbotron-video text-center bg-dark mb-0 rounded-0">
                <video width="100%" preload="auto" loop autoplay muted>
                    <source src='<?= base_url("public/assets/media/imsi.mp4");?>' type='video/mp4' />
                </video>
                <div class="container">
                    <h1 class="pt-5" style="color:rgb(255, 255, 255); text-shadow: 2px 2px 4px rgba(0,0,0,0.7);">
                        Skip the Store,<br>
                         We’ll Bring It to Your Door.
                    </h1>
                    <p class="lead" style="color:rgb(255, 255, 255); text-shadow: 1px 1px 3px rgba(0,0,0,0.7);">
                        Daily Freshness Delivered
                    </p>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card border-0 text-center">
                                <div class="card-icon">
                                    <div class="card-icon-i">
                                        <i class="fa fa-shopping-basket"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title" style="color:rgb(255, 255, 255);text-shadow: 2px 2px 4px rgba(0,0,0,0.7);">
                                        Buy
                                    </h4>
                                    <p class="card-text" style="color:rgb(255, 255, 255);text-shadow: 1px 1px 3px rgba(0,0,0,0.7);">
                                        Pick your favorites, place your order, and relax.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0 text-center">
                                <div class="card-icon">
                                    <div class="card-icon-i">
                                        <i class="fas fa-leaf"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title" style="color:rgb(255, 255, 255); text-shadow: 2px 2px 4px rgba(0,0,0,0.7);">
                                        Harvest
                                    </h4>
                                    <p class="card-text" style="color:rgb(255, 255, 255);text-shadow: 1px 1px 3px rgba(0,0,0,0.7);">
                                        We handpick only the best produce and deliver it to your door within 24 hours of harvest.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0 text-center">
                                <div class="card-icon">
                                    <div class="card-icon-i">
                                        <i class="fa fa-truck"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title" style="color:rgb(255, 255, 255);text-shadow: 2px 2px 4px rgba(0,0,0,0.7);">
                                        Delivery
                                    </h4>
                                    <p class="card-text" style="color:rgb(255, 255, 255);text-shadow: 1px 1px 3px rgba(0,0,0,0.7);">
                                       Your order reaches farmers two days early, allowing for a made-to-order harvest with no excess.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section id="why">
            <h2 class="title">Why ByteBasket</h2>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card border-0 text-center gray-bg">
                            <div class="card-icon">
                                <div class="card-icon-i text-success">
                                    <i class="fas fa-leaf"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    Straight from the Farm
                                </h4>
                                <p class="card-text">
                                    Our farm-to-table concept brings fresh produce directly from local farms to your table within a day, ensuring you receive it straight from the harvest.
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 text-center gray-bg">
                            <div class="card-icon">
                                <div class="card-icon-i text-success">
                                    <i class="fa fa-question"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    Know Your Farmers
                                </h4>
                                <p class="card-text">
                                    We want you to know who grows your food, with farmer profiles on each item and a dedicated farmers page. You’re even welcome to visit the farms and see the care behind every crop.
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 text-center gray-bg">
                            <div class="card-icon">
                                <div class="card-icon-i text-success">
                                    <i class="fas fa-smile"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    Improving Farmer's Livelihood
                                </h4>
                                <p class="card-text">
                                    Slowly but surely, by simplifying the complex supply chain, we aim to improve farmer's welfare by giving them the fair returns they truly deserve for their hard work.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mt-5 text-center">
                        <a href="shop.html" class="btn btn-primary btn-lg">BUY NOW</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="categories" class="pb-0 gray-bg">
            <h2 class="title">Categories</h2>
            <div class="landing-categories owl-carousel">
                <?php foreach($allCategories as $category) : ?>
                    <div class="item">
                        <div class="card rounded-0 border-0 text-center">
                            <img src="<?= base_url("public/assets/img/".$category['image']."");?>">
                            <div class="card-img-overlay d-flex align-items-center justify-content-center">
                                <!-- <h4 class="card-title">Fruits</h4> -->
                                <a href="<?= base_url('categories/category/'.$category['id']) ?>" class="btn btn-primary btn-lg"><?= $category['name']; ?></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </div>
<?= $this->endSection();?>