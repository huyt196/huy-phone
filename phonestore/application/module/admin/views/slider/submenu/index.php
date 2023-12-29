<?php
	$linkCategory 	= URL::createLink('admin', 'categoryphone', 'index'); 
	$linkBook 		= URL::createLink('admin', 'phone', 'index'); 
?>
<div id="submenu-box">
	<div class="m">
		<ul id="submenu">
			<li><a href="<?php echo $linkCategory;?>" >Category-Phone</a></li>
			<li><a href="#" class="active">Phone</a></li>
		</ul>
		<div class="clr"></div>
	</div>
</div>