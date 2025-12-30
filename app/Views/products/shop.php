<?= $this->extend("layouts/app.php");?>
<?= $this->section("content");?>
    <div id="page-content" class="page-content">
        <div class="banner">
            <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('<?=base_url('public/assets/img/bg.jpg');?>');">
                <div class="container">
                    <h1 class="pt-5">
                        Shopping Page
                    </h1>
                    <p class="lead">
                        Fresh to your door, hassle-free.
                    </p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="shop-categories owl-carousel mt-5">
                        <?php foreach($categories as $category): ?>
                        <div class="item">
                            <a href="<?= base_url('categories/category/'.$category->id.'') ?>">
                                <div class="media d-flex align-items-center justify-content-center">
                                    <span class="d-flex mr-2"><i class="sb-bistro-<?= $category->icon;?>"></i></span>
                                    <div class="media-body">
                                        <h5><?= $category->name;?></h5>
                                        <p>Freshly Harvested Food From Local Growers</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>

        <section id="most-wanted">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title">Most Purchased</h2>
                        <div class="product-carousel owl-carousel">
                            <?php foreach($mostWantedProduct as $wantedProduct): ?>
                            <div class="item">
                                <div class="card card-product">
                                    <div class="card-ribbon">
                                        <div class="card-ribbon-container right">
                                            <span class="ribbon ribbon-primary">SPECIAL</span>
                                        </div>
                                    </div>
                                    <div class="card-badge">
                                        <div class="card-badge-container left">
                                            <span class="badge badge-default">
                                                Until <?=$wantedProduct->exp_date;?>
                                            </span>
                                            <span class="badge badge-primary">
                                                20% OFF
                                            </span>
                                        </div>
                                        <img src="<?= base_url('public/assets/img/'.$wantedProduct->image.'')?>" alt="Card image 2" class="card-img-top">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="<?= base_url('products/single-product/'.$wantedProduct->id.'')?>"><?=$wantedProduct->name;?></a>
                                        </h4>
                                        <div class="card-price">
                                            <!--<span class="discount">Rp. 300.000</span>-->
                                            <span class="reguler">Rs. <?=$wantedProduct->price;?></span>
                                        </div>
                                        <a href="<?= base_url('products/single-product/'.$wantedProduct->id.'')?>" class="btn btn-block btn-primary">
                                            Add to Cart
                                        </a>

                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="vegetables" class="gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title">Vegetables</h2>
                        <div class="product-carousel owl-carousel">
                            <?php foreach($vegProducts as $vegProduct): ?>
                                <div class="item">
                                    <div class="card card-product">
                                        <div class="card-ribbon">
                                            <div class="card-ribbon-container right">
                                                <span class="ribbon ribbon-primary">SPECIAL</span>
                                            </div>
                                        </div>
                                        <div class="card-badge">
                                            <div class="card-badge-container left">
                                                <span class="badge badge-default">
                                                    Until <?= $vegProduct->exp_date; ?>
                                                </span>
                                                <span class="badge badge-primary">
                                                    20% OFF
                                                </span>
                                            </div>
                                            <img src="<?= base_url('public/assets/img/'.$vegProduct->image.'')?>" alt="Card image 2" class="card-img-top">
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <a href="<?= base_url('products/single-product/'.$vegProduct->id.'')?>"><?= $vegProduct->name; ?></a>
                                            </h4>
                                            <div class="card-price">
                                                <!--<span class="discount">Rp. 300.000</span>-->
                                                <span class="reguler">Rs. <?= $vegProduct->price; ?></span>
                                            </div>
                                            <a href="<?= base_url('products/single-product/'.$vegProduct->id.'')?>" class="btn btn-block btn-primary">
                                                Add to Cart
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="meats">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title">Meats</h2>
                        <div class="product-carousel owl-carousel">
                            <?php foreach($meatProducts as $meatProduct): ?>
                                <div class="item">
                                    <div class="card card-product">
                                        <div class="card-ribbon">
                                            <div class="card-ribbon-container right">
                                                <span class="ribbon ribbon-primary">SPECIAL</span>
                                            </div>
                                        </div>
                                        <div class="card-badge">
                                            <div class="card-badge-container left">
                                                <span class="badge badge-default">
                                                    Until <?= $meatProduct->exp_date; ?>
                                                </span>
                                                <span class="badge badge-primary">
                                                    20% OFF
                                                </span>
                                            </div>
                                            <img src="<?= base_url('public/assets/img/'.$meatProduct->image.'')?>" alt="Card image 2" class="card-img-top">
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <a href="<?= base_url('products/single-product/'.$meatProduct->id.'')?>"><?= $meatProduct->name; ?></a>
                                            </h4>
                                            <div class="card-price">
                                                <!--<span class="discount">Rp. 300.000</span>-->
                                                <span class="reguler">Rs. <?= $meatProduct->price; ?></span>
                                            </div>
                                            <a href="<?= base_url('products/single-product/'.$meatProduct->id.'')?>" class="btn btn-block btn-primary">
                                                Add to Cart
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="fishes" class="gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title">Fishes</h2>
                        <div class="product-carousel owl-carousel">
                            <?php foreach($fishProducts as $fishProduct): ?>
                                <div class="item">
                                    <div class="card card-product">
                                        <div class="card-ribbon">
                                            <div class="card-ribbon-container right">
                                                <span class="ribbon ribbon-primary">SPECIAL</span>
                                            </div>
                                        </div>
                                        <div class="card-badge">
                                            <div class="card-badge-container left">
                                                <span class="badge badge-default">
                                                    Until <?= $fishProduct->exp_date; ?>
                                                </span>
                                                <span class="badge badge-primary">
                                                    20% OFF
                                                </span>
                                            </div>
                                            <img src="<?= base_url('public/assets/img/'.$fishProduct->image.'')?>" alt="Card image 2" class="card-img-top">
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <a href="<?= base_url('products/single-product/'.$fishProduct->id.'')?>"><?= $fishProduct->name; ?></a>
                                            </h4>
                                            <div class="card-price">
                                                <!--<span class="discount">Rp. 300.000</span>-->
                                                <span class="reguler">Rs. <?= $fishProduct->price; ?></span>
                                            </div>
                                            <a href="<?= base_url('products/single-product/'.$fishProduct->id.'')?>" class="btn btn-block btn-primary">
                                                Add to Cart
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="fruits">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title">Fruits</h2>
                        <div class="product-carousel owl-carousel">
                            <?php foreach($fruitProducts as $fruitProduct): ?>
                                <div class="item">
                                    <div class="card card-product">
                                        <div class="card-ribbon">
                                            <div class="card-ribbon-container right">
                                                <span class="ribbon ribbon-primary">SPECIAL</span>
                                            </div>
                                        </div>
                                        <div class="card-badge">
                                            <div class="card-badge-container left">
                                                <span class="badge badge-default">
                                                    Until <?= $fruitProduct->exp_date; ?>
                                                </span>
                                                <span class="badge badge-primary">
                                                    20% OFF
                                                </span>
                                            </div>
                                            <img src="<?= base_url('public/assets/img/'.$fruitProduct->image.'')?>" alt="Card image 2" class="card-img-top">
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <a href="<?= base_url('products/single-product/'.$fruitProduct->id.'')?>"><?= $fruitProduct->name; ?></a>
                                            </h4>
                                            <div class="card-price">
                                                <!--<span class="discount">Rp. 300.000</span>-->
                                                <span class="reguler">Rs. <?= $fruitProduct->price; ?></span>
                                            </div>
                                            <a href="<?= base_url('products/single-product/'.$fruitProduct->id.'')?>" class="btn btn-block btn-primary">
                                                Add to Cart
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?= $this->endSection();?>