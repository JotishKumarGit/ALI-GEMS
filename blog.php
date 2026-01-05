<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALI GEMS - Premium Gems & Jewellery</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">

</head>

<body>


    <!-- header -->
    <?php include('header.php') ?>

    <!-- Breadcrumb Section -->
    <section class="breadcrumb">
        <div class="breadcrumb-content">
            <h1>Blog</h1>
            <nav>
                <a href="#">Pages</a> <span>/</span> <span>Blog</span>
            </nav>
        </div>
    </section>

    <!-- Blog Section -->
    <section id="blog" class="blog-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Latest News & Updates</h2>
                <p class="lead text-muted">Stay Updated with Gemstone Industry Trends</p>
            </div>
            <div class="row g-4">

                <div class="col-lg-4 col-md-6">
                    <div class="blog-card">
                        <div class="blog-image">
                            <img src="assets/img/blog_1.webp" height="250px" width="100%" alt="">
                        </div>
                        <div class="blog-content">
                            <div class="blog-date"><i class="far fa-calendar"></i> December 15, 2024</div>
                            <h4 class="blog-title">The Art of Gemstone Selection</h4>
                            <p class="text-muted">Learn how to choose the perfect gemstone for your needs with our
                                expert guide.</p>
                            <a href="#" class="btn-view">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="blog-card">
                        <div class="blog-image">
                            <img src="assets/img/blog_2.png" height="250px" width="100%" alt="">
                        </div>
                        <div class="blog-content">
                            <div class="blog-date"><i class="far fa-calendar"></i> December 10, 2024</div>
                            <h4 class="blog-title">Global Gemstone Market Trends</h4>
                            <p class="text-muted">Discover the latest trends shaping the international gemstone
                                industry.</p>
                            <a href="#" class="btn-view">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="blog-card">
                        <div class="blog-image">
                            <img src="assets/img/Tanzanite_(polki).jpeg" height="250px" width="100%" alt="">
                        </div>
                        <div class="blog-content">
                            <div class="blog-date"><i class="far fa-calendar"></i> December 5, 2024</div>
                            <h4 class="blog-title">Understanding Gemstone Certification</h4>
                            <p class="text-muted">Everything you need to know about gemstone authenticity and
                                certification.</p>
                            <a href="#" class="btn-view">Read More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Footer -->
    <?php include('footer.php') ?>