<?php include ('header.php');
$result = post_display($conn,0,6);
?>




<!--- post display for data base end --->
<!-- Start Page Banner Area -->
<div class="page-banner-area jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="page-banner-content" data-aos="fade-right" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                    <h2>Our Blog</h2>

                    
                </div>
            </div>
        </div>
        <!-- End Page Banner Area -->
        
        <!-- Start Blog Area -->
        <div class="blog-area pt-100 pb-100">
            <div class="container">
                <div class="section-title">
                    <span>ARTICLE</span>
                    <h2>Read Our Blog To Get All Recent Tech <b>News</b> <span class="overlay"></span></h2>
                </div>
                
                <div class="row justify-content-center">



                    <?php 
                    
                while ($row = mysqli_fetch_assoc($result)) {
                    
                    ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-card">
                            <div class="blog-image">
                                <a href="/Tech_Solutions_Pro_New//single.php? <?= ($row['title']);  ?>"><img src="./admin-area/uploads/<?= $row['image'] ?>" alt="image"></a>

                                <div class="date"><?= $row['date']  ?></div>
                            </div>
                            <div class="blog-content">
                                <h3>
                                    <a href="single-blog-1.html"><?= $row['title'] ?></a>
                                </h3>
                                <p><?= $row['description'] ?></p>
                                <a href="single-blog-1.html" class="blog-btn">View More</a>
                            </div>
                        </div>
                    </div>
                    <?php }   ?>
                    <div class="col-lg-12 col-md-12">
                        <div class="pagination-area">
                            <a href="#" class="prev page-numbers"><i class="ri-arrow-left-s-line"></i></a>
                            <span class="page-numbers current" aria-current="page">1</span>
                            <a href="#" class="page-numbers">2</a>
                            <a href="#" class="page-numbers">3</a>
                            <a href="#" class="next page-numbers"><i class="ri-arrow-right-s-line"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- End Blog Area -->

<?php include ('footer.php'); ?>