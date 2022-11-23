<?php require_once "dbconfig.php"; ?>
<?php include 'header.php'; ?>
<?php include 'header-main.php'; ?>
<!-- ========================= SECTION MAIN ========================= -->

<!-- ========================= SECTION MAIN END// ========================= -->

<!-- ========================= SECTION  ========================= -->
<section class="section-name padding-y-sm">
    <div class="container">

        <header class="section-heading">
            <a href="store.php" class="btn btn-outline-primary float-right">See all</a>
            <h3 class="section-title">Popular products</h3>
        </header><!-- sect-heading -->
        <div class="row">
            <?php
			$product_query = "SELECT * FROM `products` ";
			$product_result = mysqli_query($cid, $product_query) or die("Product Query Failed.");

			if (mysqli_num_rows($product_result) > 0) {
				while ($row = mysqli_fetch_assoc($product_result)) {
			?>
            <div class="col-md-3">
                <form action="cart.php?action=add&id=<?php echo $row["id"]; ?>" method="POST">
                    <div class="card card-product-grid">
                        <a href="product-detail.php?id=<?php echo $row['id']; ?>" class="img-wrap"> <img
                                src="images/items/<?php echo $row['img'];?>"> </a>
                        <figcaption class="info-wrap">
                            <a href="product-detail.php?id=<?php echo $row['id']; ?>"
                                class="title"><?php echo $row['product_name']; ?></a>
                            <div class="price mt-1">₹<?php echo $row['price']; ?></div> <!-- price-wrap.// -->
                        </figcaption>
                    </div>
                </form>
            </div> <!-- row.// -->

            <?php  }
			} ?>

        </div><!-- container // -->
</section>
<!-- ========================= SECTION  END// ========================= -->
<!-- ========================= FOOTER ========================= -->
<footer class="section-footer border-top">
    <div class="container">
        <section class="footer-bottom border-top row">
            <div class="col-md-2">
                <img src=".\images\MicrosoftTeams-image-1-44.png" width="1200px;" height="170px">
            </div>
            <div class="col-md-8 text-md-center">
            <h1><p class="text-muted">APKI APNI DUKAN </p></h1>

                <span class="px-2">nitishtiwari1710@gmail.com</span>
                <br>
                <span class="px-2">+910-000-0000</span>
                <br>
                <br>
                <span class="px-2">CODE NEVER LIES</span>

            </div>
            <div class="col-md-2 text-md-right text-muted">
                <i class="fab fa-lg fa-cc-visa"></i>
                <i class="fab fa-lg fa-cc-paypal"></i>
                <i class="fab fa-lg fa-cc-mastercard"></i>
            </div>
        </section>
    </div><!-- //container -->
</footer>
<!-- ========================= FOOTER END // ========================= -->
</body>
</html>