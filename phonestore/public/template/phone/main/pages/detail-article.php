<?php 
    $name_page="Sợi Bamboo là gì?";
    $breadcrumb = ' <li class="breadcrumb-item"><a href="list-article.php">Blog</a></li>
                    <li class="breadcrumb-item"><a href="#">'.$name_page.'</a></li>';
    $menu_active="detail-article";
?>
<!-- START HEADER -->
<?php include_once '../html/layout_header.php';?>
<!-- END HEADER-->
<!-- START SECTION BREADCRUMB -->
<?php include_once '../widgets/breadcrumb.php';?>
<!-- END SECTION BREADCRUMB -->
<!-- START MAIN CONTENT -->
<div class="main_content">
    <!-- START SECTION BLOG -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-xl-9">
                    <div class="single_post">
                        <h2 class="blog_title">Sợi Bamboo là gì? Tại sao Áo Sơ Mi sợi Bamboo lại được ưa chuộng như vậy</h2>
                        <ul class="list_none blog_meta">
                            <li><a href="#"><i class="ti-calendar"></i>16-06-2020, 12:26 pm</a></li>
                        </ul>
                        <div class="blog_img">
                            <img src="../assets/images/article.gif" alt="blog_img1">
                        </div>
                        <div class="blog_content">
                            <div class="blog_text">
                                <p>Sợi bamboo hay còn gọi là sợi tre,có thành phần chủ yếu từ cây tre, tre được biết đến là loại cây dễ trồng, sinh trưởng nhanh, đặc biệt không cần phun thuốc hoá học khi trồng nên khi được sử dụng làm sợi thì loại sợi này được coi là sợi tương đối an toàn!</p>
                                <p>Ưu điểm của sợi tre :</P>
                                <p>-Sợi bamboo mềm, kháng khuẩn tốt, độ hút ẩm cao, có cảm giác mịn và mát -Loại sợi này khi được sử dụng trong sản xuất quần áo và sản xuất tất thì có độ bền màu cao, mềm mại, bề mặt luôn bóng mịn, không bị nhăn,& bền màu khi giặt .</p>
                                <p>Nhược điểm của sợi tre:</p>
                                <p>-Vì loại sợi này có chất lương cao , có nhiều ưu điểm nên giá thành của loại sợi này vẫn rất cao</p>
                                <p>-Hút nước tốt là ưu điểm và cũng là nhược điểm của loại sợi này, sản phẩm được làm từ loại sợi này sẽ khó khô hơn một chút so với các loại sợi khác vào mùa đông</p>
                                <p>Ứng dụng của sợi bamboo: :</P>
                                <p>-Được ứng dụng trong ngành sản xuất quần áo ngành may mặc, và sản xuất khăn mặt, bít tất, vớ…</p>
                                <div class="blog_post_footer">
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-md-8 mb-3 mb-md-0">
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="social_icons text-md-right">
                                                <li><a href="#" class="sc_facebook"><i class="ion-social-facebook"></i></a></li>
                                                <li><a href="#" class="sc_twitter"><i class="ion-social-twitter"></i></a></li>
                                                <li><a href="#" class="sc_google"><i class="ion-social-googleplus"></i></a></li>
                                                <li><a href="#" class="sc_youtube"><i class="ion-social-youtube-outline"></i></a></li>
                                                <li><a href="#" class="sc_instagram"><i class="ion-social-instagram-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="related_post">
                        <div class="content_title">
                            <h5>Tin tức liên quan</h5>
                        </div>
                        <div class="row">
                            <?php
                                for($i=0;$i<2;$i++){
                                    include '../element/item-releted-posts.php';
                                }
                                ?>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 mt-4 pt-2 mt-xl-0 pt-xl-0">
                    <div class="sidebar">
                        <?php include_once '../widgets/sidebar-search.php';?>   
                        <?php include_once '../widgets/sidebar-recent-posts.php';?> 
                        <?php include_once '../widgets/sidebar-banner.php';?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION BLOG -->
    <!-- START SECTION SUBSCRIBE NEWSLETTER -->
    <?php include_once '../widgets/subscribe.php';?>
    <!-- START SECTION SUBSCRIBE NEWSLETTER -->
</div>
<!-- END MAIN CONTENT -->
<!-- START FOOTER-->
<?php include_once '../html/layout_footer.php';?>
<!-- END FOOTER-->