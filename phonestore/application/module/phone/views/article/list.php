<?php


$xhtml = '';
foreach (   $this->Items as $key => $value) {
    $query = "SELECT `name` FROM `" . TBL_CATEGORYPHONE . "` WHERE `id` = '" . $value['category_phone_id'] . "'";
    $data	= $model->fetchAll($query);
    $namelink = implode("", $data['0']);

    $name = $value['name'];
    $description = $value['description'];
    $picture = Helper::createImage('blog', '', $value['picture']);
    $date = strval($value['created']);
    $time = date('H:i:s');
    $blogID = $value['id'];
    $catID = $value['category_phone_id'];
    $catNameURL = URL::filterURL($namelink);
    $blogNameURL = URL::filterURL($name); 
    $link_blog = "blog-detail/cate-$catID/$blogID.html";
    $xhtml .= '
    <div class="col-xl-6 col-md-6">
        <div class="blog_post blog_style2 box_shadow1">
            <div class="blog_img">
                <a href="detail-article.php">
              '.$picture.'
                </a>
            </div>
            <div class="blog_content bg-white">
                <div class="blog_text">
                    <h6 class="blog_title"><a href="'.$link_blog.'">'.$name.'</a></h6>
                    <ul class="list_none blog_meta">
                        <li><a href="#"><i class="ti-calendar"></i>'.$date.' '.$time.'</a></li>
                        <!-- <li><a href="#"><i class="ti-comments"></i> 10</a></li> -->
                    </ul>
                    <p>'.$description.'</p>
                </div>
            </div>
        </div>
    </div>';
}


?>






<!-- START SECTION BLOG -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <?php
	echo $xhtml;
        ?>
                    </div>
                    <!-- START PANIGATION  -->
                    <?php include_once TEMPLATE_PATH . 'phone/main/widgets/panigation.php';?>
                    <!-- END PANIGATION -->
                </div>
                <div class="col-lg-3 mt-4 pt-2 mt-lg-0 pt-lg-0">
                    <div class="sidebar">
                        <?php include_once TEMPLATE_PATH . 'phone/main/widgets/sidebar-search.php';?>
                        <?php include_once TEMPLATE_PATH . 'phone/main/widgets/sidebar-recent-posts.php';?>
                        <?php include_once TEMPLATE_PATH . 'phone/main/widgets/sidebar-banner.php';?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION BLOG -->