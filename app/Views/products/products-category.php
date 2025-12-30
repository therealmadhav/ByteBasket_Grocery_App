<?= $this->extend("layouts/app.php");?>
<?= $this->section("content");?>
    <div id="page-content" class="page-content">
        <div class="banner">
            <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('<?= base_url("public/assets/img/bg.jpg")?>');">
                <div class="container">
                    <h1 class="pt-5"style="color:rgb(255, 255, 255);">
                        Shopping Page
                    </h1>
                    <p class="lead" style="color:rgb(255, 255, 255);">
                        Fresh to your door, hassle-free.
                    </p>
                </div>
            </div>
        </div>
        <section id="most-wanted">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title" style="color:rgb(255, 9, 9); text-shadow: 2px 2px 4px rgba(0,0,0,0.2); font-weight: 700; letter-spacing: 1px;">
    Best-Selling
</h2>
                        <?php if(count($products)>0):?>
                            <div class="product-carousel owl-carousel">
                            <?php foreach ($products as $product): ?>
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
                                                    Until <?= $product->exp_date;?>
                                                </span>
                                                <span class="badge badge-primary">
                                                    20% OFF
                                                </span>
                                            </div>
                                            <img src="<?= base_url('public/assets/img/'.$product->image.'')?>" alt="Card image 2" class="card-img-top">
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <a href="<?= base_url('products/single-product/'.$product->id.'')?>"><?= $product->name; ?></a>
                                            </h4>
                                            <div class="card-price">
                                                <!-- <span class="discount">Rs. 300.000</span> -->
                                                <span class="reguler">Rs. <?= $product->price; ?></span>
                                            </div>
                                            <a href="<?= base_url('products/single-product/'.$product->id.'')?>" class="btn btn-block btn-primary">
                                                Add to Cart
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            <?php endforeach;?>
                            </div>
                        <?php else : ?>
                            <p class ="alert alert-warning"> There are no products in this category just yet </p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
<?= $this->endSection();?>