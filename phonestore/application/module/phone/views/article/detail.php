 
 <?php
	$xhtmlRelateBlog = '';

	if(!empty($this->blogRelate)){
		foreach($this->blogRelate as $key => $value){
			$name	= $value['name'];
			$blogID			= $value['id'];
            $date = strval($value['created']);
            $time = date('H:i:s');
			$catID			= $value['category_phone_id'];
            $description = $value['description'];
			$phoneNameURL	= URL::filterURL($name);
			$catNameURL		= URL::filterURL( $value['category_name']);
            $link_blog = "blog-detail/cate-$catID/$blogID.html";
			$picture 		= Helper::createImage('blog', '', $value['picture']);
			$xhtmlRelateBlog 	.= '<div class="col-md-6">
            <div class="blog_post blog_style2 box_shadow1">
                <div class="blog_img">
                    <a href="'.$link_blog .'">
                     '.$picture .'
                    </a>
                </div>
                <div class="blog_content bg-white">
                    <div class="blog_text">
                        <h5 class="blog_title"><a href="'.$link_blog .'">'.$name.'</a></h5>
                        <ul class="list_none blog_meta">
                            <li><a href="#"><i class="ti-calendar"></i> '.$date.', '.$time.'</a></li>
                            <!-- <li><a href="#"><i class="ti-comments"></i> 2 Comment</a></li> -->
                        </ul>
                        <p> '.$description.'</p>
                    </div>
                </div>
            </div>
        </div>';
		}
	}
	;
?>

 
 
 <?php 
 
	$blogInfo	= $this->blogInfo;
  
    $id = $blogInfo['id']; 
    $categoryName = $this->blogInfo['category_name'];
    $categoryID = $this->blogInfo['category_phone_id'];
	$name		= $blogInfo['name'];
	$uploadFolder ='blog';
	$sourcePicture = $blogInfo['picture'];
    $uploadFolder ='blog';
    $date = strval($blogInfo['created']);
    $time = date('H:i:s');
	$file_product = UPLOAD_URL . $uploadFolder . '/' . $sourcePicture;
    $picture_zoom = '<img id="product_img" src="' . $file_product . '" data-zoom-image="'  . $file_product . ' alt="'.$name.'"">';
	$picture 		= Helper::createImage('blog', '', $blogInfo['picture']);
    $picture1 = $blogInfo['picture'];
	$picturePath	= UPLOAD_PATH . 'blog' . DS . '' . $blogInfo['picture'];
	$pictureFull	= '';
	if(file_exists($picturePath)==true){
		$pictureFull	= UPLOAD_URL . 'blog' . DS . $blogInfo['picture'];
	}
	$description	= $blogInfo['description'];

    $linkRelatePhone	= URL::createLink('phone', 'phone', 'relate', array('blog_id' => $blogInfo['id'], 'category_phone_id' => $blogInfo['category_phone_id']));
?>
 
 
 <!-- START SECTION BLOG -->
 <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-xl-9">
                    <div class="single_post">
                        <h2 class="blog_title"><?php echo $name  ?></h2>
                        <ul class="list_none blog_meta">
                            <li><a href="#"><i class="ti-calendar"></i><?php echo $date ;echo " "; echo $time   ?></a></li>
                        </ul>
                        <div class="blog_img">
                         <?php  echo 	$picture    ?>
                        </div>
                        <div class="blog_content">
                            <div class="blog_text">
                               <p><?php echo $description ?></p>
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
                             echo $xhtmlRelateBlog;
                                ?>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 mt-4 pt-2 mt-xl-0 pt-xl-0">
                    <div class="sidebar">
                        <?php include_once TEMPLATE_PATH . 'phone/main/widgets/sidebar-search.php';?>   
                        <?php include_once TEMPLATE_PATH . 'phone/main/sidebar-recent-posts.php';?> 
                        <?php include_once TEMPLATE_PATH . 'phone/main/sidebar-banner.php';?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION BLOG -->