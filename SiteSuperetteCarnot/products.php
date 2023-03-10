<?php $page_title = "products" ?>
<?php $page = "products" ?>
<?php include('./includes/header.php') ?>
<?php include('./includes/navbar.php') ?>



<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

            <?php foreach ($products as $key => $product) { ?>

                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="images/<?= $product['image'] ?>" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder"><?php echo $product['title'] ?></h5>
                                <!-- Product price-->
                                <?php echo $product['price'] ?>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="details.php?id=<?= $key ?>">Voir les details</a></div>
                        </div>
                    </div>
                </div>

            <?php
            }
            ?>



        </div>
    </div>
</section>
<?php include('./includes/footer.php') ?>