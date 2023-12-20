<?php
	$model 	= new Model();
	$query[]	= "SELECT `b`.`id`, `b`.`name`, `b`.`picture`, `b`.`description`,`b`.`price`, `b`.`category_phone_id`, `c`.`name` AS `category_name`";
    $query[]	= "FROM `".TBL_PHONE."` AS `b`, `".TBL_CATEGORYPHONE."` AS `c`";
    $query[]	= "WHERE `b`.`status`  = 1 AND `b`.`special` = 1 AND `c`.`id` = `b`.`category_phone_id`";
    $query[]	= "ORDER BY `b`.`ordering` ASC";
    $query[]	= "LIMIT 0, 6";

    $query		= implode(" ", $query);
    $data		= $model->fetchAll($query);
    echo '<pre style="color:red">';
    print_r( $data);
    echo '</pre>';
    die();
    $xhtml_hot_product = '';
    if(!empty($data)){
		foreach($data as $key => $value){

			$name	= $value['name'];
            $xhtml_hot_product .='    <li>
            <div class="custome-checkbox">
                <input class="form-check-input" type="checkbox" name="checkbox" id="Arrivals" value="">
                <label class="form-check-label" for="Arrivals"><span>'.$name.'</span></label>
            </div>
        </li>';

        }
    }


    


?>
<div class="widget">
    <h5 class="widget_title">Danh mục sản phẩm</h5>
    <ul class="list_brand">
      <?php
echo $xhtml_hot_product;

?>
        
    </ul>
</div>