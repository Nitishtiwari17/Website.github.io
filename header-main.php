 
<section class="section-intro padding-y-sm">
    <div class="container">
<div class="intro-banner-wrap">    
     <img src=".\images\download.png" class="img-fluid rounded" width="600px">
        </div>
    </div> <!-- container //  -->
</section>
<header class="section-header">
    <nav class="navbar p-md-0 navbar-expand-sm navbar-light border-bottom">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTop4"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
             <!-- navbar-collapse .// -->
        </div> <!-- container //  -->
    </nav>

    <section class="header-main border-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-3 col-6">
                    <a href="./" class="brand-wrap">
                        <img src="">
                    </a> <!-- brand-wrap.// -->
                </div>
                <div class="col-lg col-sm col-md col-6 flex-grow-0">
                    <div class="category-wrap dropdown d-inline-block float-right">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bars"></i> All category
                        </button>         
                        <div class="dropdown-menu">
                            <?php
                        $r = select("select * from category");
                        while ($row = mysqli_fetch_array($r)) { 
                        ?>
                        <a class="dropdown-item"
                            href="category.php?category=<?php echo $row['category_slug']; ?>"><?php echo $row['category_name'];?>
                        </a>
                        <?php } ?>
                    </div>

                </div> <!-- category-wrap.// -->
            </div> <!-- col.// -->
            <a href="store.php" class="btn btn-outline-primary">Store</a>
            <div class="col-lg  col-md-6 col-sm-12 col">
                <form action="search-result.php" class="search">
                    <div class="input-group w-100">
                        <input type="text" name="search" class="form-control" style="width:60%;" placeholder="Search">

                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form> <!-- search-wrap .end// -->
            </div> <!-- col.// -->
            <div class="col-lg-3 col-sm-6 col-8 order-2 order-lg-3">
                <div class="d-flex justify-content-end mb-3 mb-lg-0">
                    <?php if (isset($_SESSION['userlogin'])) { ?>
                    <div class="widget-header">
                        <small class="title text-muted">Welcome <?php echo ucwords($_SESSION['username']); ?> </small>
                        <div>
                        <a href="dashboard.php">Dashboard</a> <span class="dark-transp"> | <a href="logout.php">Logout</a> <span class="dark-transp"><span class="dark-transp">
                        </div>
                    </div>

                    <?php }else{ ?>

                    <div class="widget-header">
                        <small class="title text-muted">Welcome guest!</small>
                        <div>
                            <a href="signin.php">Sign in</a> <span class="dark-transp"> | </span>
                            <a href="register.php"> Register</a>
                        </div>
                    </div>

                    <?php } ?>


                    <a href="cart.php" class="widget-header pl-3 ml-3">
                        <div class="icon icon-sm rounded-circle border"><i class="fa fa-shopping-cart"></i></div>
                        <span class="badge badge-pill badge-danger notify"></span>
                    </a>
                </div> <!-- widgets-wrap.// -->
            </div> <!-- col.// -->
        </div> <!-- row.// -->
        </div> <!-- container.// -->
    </section> <!-- header-main .// -->
</header> <!-- section-header.// -->