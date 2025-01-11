<?php include_once "header.php" ?>

<!-- page-banner -->
<section class="breadcrumb-image">
    <div class="container">
        <h1>BLOGS</h1>
        <div class="breadcrumbs">
            <ol>
                <li><a href="index.php">HOME</a></li>
                <li class="current">BLOGS</li>
            </ol>
        </div>
    </div>
</section>
<!-- ====== -->
<style>
    .blogs {
        margin: 20px 0px;
    }

    .blogs .blog {
        border-radius: 1rem;
        background: #eee;
    }

    .blog .blog-img {
        height: 250px;
        width: 100%;
    }

    .blog .blog-img img {
        height: 100%;
        width: 100%;
        border-radius: 1rem 1rem 0 0;

    }

    .blog .blog-content {
        padding: 13px;
    }
</style>
<section class="blogs">
    <div class="container">
        <div class="row ">
            <div class="col-lg-4">
                <div class="blog">
                    <div class="blog-img">
                        <img src="assets/img/hospital-medical-furniture.jpg" alt="">
                    </div>
                    <div class="blog-content">
                        <a href="blog-details.php" class="link">Lorem ipsum dolor sit.</a>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero ipsa voluptas blanditiis sit
                            deleniti ut fugiat debitis ex quae nobis.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog">
                    <div class="blog-img">
                        <img src="assets/img/general-instruments.jpg" alt="">
                    </div>
                    <div class="blog-content">
                        <a href="blog-details.php" class="link">Lorem ipsum dolor sit.</a>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est laboriosam sed maiores cumque
                            tenetur voluptas.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog">
                    <div class="blog-img">
                        <img src="assets/img/infant-baby-care-equipments.jpg" alt="">
                    </div>
                    <div class="blog-content">
                        <a href="blog-details.php" class="link">Lorem ipsum dolor sit.</a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa sint voluptates quo impedit
                            rerum
                            adipisci assumenda.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once "footer.php" ?>