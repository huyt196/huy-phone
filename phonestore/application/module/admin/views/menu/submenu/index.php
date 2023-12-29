<?php
	$linkCategory 	= URL::createLink('admin', 'categoryphone', 'index'); 
	$linkMenu 		= URL::createLink('admin', 'menu', 'index'); 
?>
<div id="submenu-box">
	<div class="m">
		<ul id="submenu">
			<li><a href="<?php echo $linkCategory?>" class="active">Category Phone</a></li>
			<li><a href="<?php echo $linkMenu?>">Menu</a></li>
		</ul>
		<div class="clr"></div>
	</div>
</div>