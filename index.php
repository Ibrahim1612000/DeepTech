<?php 
    include("DB/connect_db.php");
    $query= mysqli_query($conn,"SELECT * FROM news ORDER BY news_date DESC LIMIT 6") ;
?>

<!doctype html>

<html>

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="/deeptech/images/logo-white.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="DeepTech is a technology website where you can exploreand compare devices also offering technology blogs and most importent is latest news of all technology">
    <meta name="keywords" content="technology, news, exploring">
    <meta property="og:title" content="DeepTech" />
    <meta property="og:type" content="image" />
    <meta property="og:image" content="http://deeptech.rf.gd/images/logo-white.png" />
    <title>DeepTech - Explore all kind of technologies with DeepTech</title>

    <!-- CSS -->
    <?php include('include/allcss.php'); ?>

    <!-- Google Fonts -->  <!--font awesome 4.7-->  <!-- Bootstrap -->
    <?php include("include/Gfont_bootstrap_FA.php"); ?>


</head>

<body id="home">
    <!-- Header -->
    <?php include('include/navbar.php'); ?>
    <!-- End Header -->

    <!-- Parallax Section -->
    <div class="parallax-section parallax1">
        <div class="grid grid-pad">
            <div class="col-1-1">
                <div class="content content-header">
                    <h2>Technology</h2>
                    <p>Explore all kind of technologies with DeepTech</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Parallax Section -->

            
    <!-- Services Section -->
    <div class="wrap services-wrap " id="services">
        <section class="grid grid-pad services">
            <h2>Why DeepTech ?</h2>
            <div class="col-1-4 service-box service-1">
                <div class="content">
                    <div class="service-icon">
                        <i class="circle-icon fa fa-newspaper-o fa-2x" aria-hidden="true"></i>
                    </div>
                    <div class="service-entry">
                        <h3>Latest News</h3>
                        <p>You will find the latest technology news</p>
                        <a class="btn read-more" href="about.php">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-1-4 service-box service-2">
                <div class="content">
                    <div class="service-icon">
                        <i class="circle-icon fa fa-globe fa-2x"></i>
                    </div>
                    <div class="service-entry">
                        <h3>All type of technologies</h3>
                        <p>You will find all type of technologies</p>
                        <a class="btn read-more" href="about.php">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-1-4 service-box service-3">
                <div class="content">
                    <div class="service-icon">
                    <i class="circle-icon  fa fa-desktop fa-2x" aria-hidden="true"></i>
                    </div>
                    <div class="service-entry">
                        <h3>Comparing System</h3>
                        <p>You can compare Laptops, Desktop parts, Smartphones, Smart Watches, softwares, etc.</p>
                        <a class="btn read-more" href="about.php">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-1-4 service-box service-4">
                <div class="content">
                    <div class="service-icon">
                        <i class="circle-icon fa fa-binoculars fa-2x"></i>
                    </div>
                    <div class="service-entry">
                        <h3>Easy to explore</h3>
                        <p>You can easily explore all technologies</p>
                        <a class="btn read-more" href="about.php">Read More</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- End Services Section -->


    <!-- Quotes Section -->
    <div class="wrap services-wrap quotes-div grey">
        <section class="grid grid-pad">
            <div class="col-1-1 service-box cl-client-carousel-container">
                <div class="content">
                    <div class="cl-client-carousel">

                        <div class="item client-carousel-item">
                            <!-- Start of item -->
                            <div class="quotes-icon">
                                <i class="icon-quotes-left"></i>
                            </div>
                            <p>DeepTech is an extraordinary, awesome Website, I would recommend this website to anyone if s/he likes to find the newest technologies</p>
                            <h4>-David Bell</h4>
                        </div>
                        <!-- End of item -->

                        <div class="item client-carousel-item">
                            <!-- Start of item -->
                            <div class="quotes-icon">
                                <i class="icon-quotes-left"></i>
                            </div>
                            <p>The good times are for those who take action. DeepTech is a simple and easy to explore for latest tech.</p>
                            <h4>-Eve Stinger</h4>
                        </div>
                        <!-- End of item -->
                        <div class="item client-carousel-item">
                            <!-- Start of item -->
                            <div class="quotes-icon">
                                <i class="icon-quotes-left"></i>
                            </div>
                            <p>It just awesome website! The simplest technology website. basically you can compare, search , explore all kind of technology devices very quickly.
                                ad?
                            </p>
                            <h4>-Will Peters</h4>
                        </div>
                        <!-- End of item -->

                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- End Quotes Section -->

    <!-- CurveDown -->
    <svg class="curveDownColor" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
                <path d="M0 0 C 50 100 80 100 100 0 Z"></path>
            </svg>

    <!-- News Section -->
    <h2 class="latest-news-header">Latest Tech News</h2>
    <div class="content-wrapper">
        <?php foreach($query as $row) :?>
        <div class="news-card">
            <a target="_blank" href=<?php echo $row['news_link'] ?> class="news-card__card-link"></a>
            <img src=<?php echo $row['news_img'] ?> alt="" class="news-card__image">
            <div class="news-card__text-wrapper">
                <h2 class="news-card__title"><?php echo $row['news_title'] ?></h2>
                <div class="news-card__post-date"><?php echo $row['news_date']; ?></div>
                <div class="news-card__details-wrapper">
                    <p class="news-card__excerpt"><?php echo $row['news_details']; ?>&hellip;</p>
                    <a target="_blank" href=<?php echo $row['news_link'] ?> class="news-card__read-more">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="view-all-btn">
        <a  href="/deeptech/news/news.php">View All</a>
    </div>
    <!-- End News Section -->



   

    <!-- CurveUp -->
    <svg class="curveUpColor" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <path d="M0 100 C 20 0 50 0 100 100 Z"></path>
                </svg>

    <!-- Clients Logos Section -->
    <div class="wrap">
        <div class="grid grid-pad">
            <div class="col-1-1">
                <div class="content">
                    <!-- Start of Carousel Container -->
                    <div class="cl-logo-carousel col-sm-12">

                        <div class="item">
                            <!-- Start of item -->
                            
                                <figure>
                                    <img src="images/clients/1.png" alt="" />
                                </figure>
                            
                        </div>
                        <!-- End of item -->

                        <div class="item">
                            <!-- Start of item -->
                            
                                <figure>
                                    <img src="images/clients/2.png" alt="" />
                                </figure>
                            
                        </div>
                        <!-- End of item -->

                        <div class="item">
                            <!-- Start of item -->
                            
                                <figure>
                                    <img src="images/clients/3.png" alt="" />
                                </figure>
                            
                        </div>
                        <!-- End of item -->

                        <div class="item">
                            <!-- Start of item -->
                            
                                <figure>
                                    <img src="images/clients/4.png" alt="" />
                                </figure>
                            
                        </div>
                        <!-- End of item -->

                        <div class="item">
                            <!-- Start of item -->
                            
                                <figure>
                                    <img src="images/clients/5.png" alt="" />
                                </figure>
                          
                        </div>
                        <!-- End of item -->

                        <div class="item">
                            <!-- Start of item -->
                            
                                <figure>
                                    <img src="images/clients/1.png" alt="" />
                                </figure>
                           
                        </div>
                        <!-- End of item -->

                        <div class="item">
                            <!-- Start of item -->
                            
                                <figure>
                                    <img src="images/clients/2.png" alt="" />
                                </figure>
                            
                        </div>
                        <!-- End of item -->

                        <div class="item">
                            <!-- Start of item -->
                            
                                <figure>
                                    <img src="images/clients/3.png" alt="" />
                                </figure>
                           
                        </div>
                        <!-- End of item -->

                    </div>
                    <!-- End of Carousel Container -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Clients Logos Section -->

    <!-- CurveDown -->
    <svg class="curveDownColor curveMapUp" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <path d="M0 0 C 50 100 80 100 100 0 Z"></path>
                </svg>



    <!-- Contact Section -->
    <div class="wrap contact grey" id="contact">
        <div class="grid grid-pad">
            <h2>Contact</h2>
            <div class="col-1-2">
                <div class="content address">
                    <h3>Talk to us</h3>
                    <p>Please contact us if you got an idea that will improve our website, or if something is wrong or false.</p>
                    <address>
                                    <div>
                                        <div class="box-icon">
                                            <i class="icon-location"></i>
                                        </div>
                                        <span>Address:</span>
                                        <p>Duhok, Iraq</p>
                                    </div>
                                    
                                    <div>
                                        <div class="box-icon">
                                            <i class="icon-clock"></i>
                                        </div>
                                        <span>Work Time:</span>
                                        <p>Sunday - Thursday from 9am to 5pm</p>
                                    </div>
                                    
                                    <div>
                                        <div class="box-icon">
                                            <i class="icon-phone"></i>
                                        </div>
                                        <span>Phone:</span>
                           
                                        <p>+964 7504321025</p>
                                        <p style="margin-left:59px">+964 7507512053</p>
                                        <p style="margin-left:59px">+964 7502158504</p>
                                    </div>                                  
                                </address>
                </div>
            </div>
            <div class="col-1-2 pleft-25">
                <div class="content contact-form">
                    <form class="form">
                        <input type="text" class="comment-name" placeholder="Name*" required>
                        <input type="email" class="comment-email" placeholder="Email*" required>
                        <input type="text" class="comment-subject" placeholder="Subject">
                        <textarea class="required comment-text" placeholder="Message..." required></textarea>
                        <input type="submit" value="Send Message" class="btn submit comment-submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Section -->


    <!-- Footer -->
    <?php include('include/footer.php'); ?>
    <!-- End Footer -->

    <div class="loader-overlay">
        <div class="loader">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
    </div>

    <!-- JS -->
    <?php include('include/alljs.php'); ?>
</body>

</html>