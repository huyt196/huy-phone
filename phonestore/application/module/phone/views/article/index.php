<!-- START SECTION BLOG -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <?php
for ($i = 0; $i < 10; $i++) {
	include TEMPLATE_PATH . 'phone/main/element/item-list-article.php';
}
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