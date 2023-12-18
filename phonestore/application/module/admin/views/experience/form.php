<?php 
	include_once (MODULE_PATH . 'admin/views/toolbar.php');
	include_once 'submenu/index.php';
	
	// Input
	$dataForm 			= $this->arrParam['form'];
	$inputName			= Helper::cmsInput('text', 'form[name]', 'name', $dataForm['name'], 'inputbox required', 40);
	$inputContent	    = '<textarea name="form[content]">'.$dataForm['content'].'</textarea>';
    $inputWork			= Helper::cmsInput('text', 'form[work]', 'work', $dataForm['work'], 'inputbox required', 40);
	$inputStar		    = Helper::cmsInput('number', 'form[star]', 'star', $dataForm['star'], 'inputbox required', 40);
	$inputOrdering		= Helper::cmsInput('text', 'form[ordering]', 'ordering', $dataForm['ordering'], 'inputbox', 40);
	$inputToken			= Helper::cmsInput('hidden', 'form[token]', 'token', time());
	$slbStatus			= Helper::cmsSelectbox('form[status]', null, array('default' => '- Select status -', 1 => 'Publish', 0 => 'Unpublish'), $dataForm['status'], 'width: 180px');

	$inputAvatar		= Helper::cmsInput('file', 'avatar', 'avatar', $dataForm['avatar'], 'inputbox', 40);
	
	$inputID		= '';
	$rowID			= '';
	$avatar		= '';
	if(isset($this->arrParam['id']) || $dataForm['id']){
		$inputID		= Helper::cmsInput('text', 'form[id]', 'id', $dataForm['id'], 'inputbox readonly');
        $inputName	    = Helper::cmsInput('text', 'form[name]', 'name', $dataForm['name'], 'inputbox', 40);
		$rowID			= Helper::cmsRowForm('ID', $inputID);
        $avatar		    = '<img src="'.UPLOAD_URL . 'experience' . DS . '' . $dataForm['avatar'].'">';
		$inputPictureHidden	= Helper::cmsInput('hidden', 'form[picture_hidden]', 'picture_hidden', $dataForm['picture'], 'inputbox', 40);
	}
	
	// Row
	$rowName		= Helper::cmsRowForm('Name', $inputName, true);
	$rowAvatar		= Helper::cmsRowForm('Avatar', $inputAvatar . $avatar . $inputPictureHidden);
	$rowContent 	= Helper::cmsRowForm('Content', $inputContent);
	$rowWork		= Helper::cmsRowForm('Work', $inputWork, true);
	$rowStar		= Helper::cmsRowForm('Star', $inputStar, true);
	$rowOrdering	= Helper::cmsRowForm('Ordering', $inputOrdering, true);
	$rowStatus		= Helper::cmsRowForm('Status', $slbStatus);

	// MESSAGE
	$message	= Session::get('message');
	Session::delete('message');
	$strMessage = Helper::cmsMessage($message);
?>
<div id="system-message-container"><?php echo $strMessage . $this->errors;?></div>
<div id="element-box">
	<div class="m">
		<form action="#" method="post" name="adminForm" id="adminForm" class="form-validate" enctype="multipart/form-data">
			<!-- FORM LEFT -->
			<div class="width-100 fltlft">
				<fieldset class="adminform">
					<legend>Details</legend>
					<ul class="adminformlist">
						<?php echo $rowName . $rowAvatar .$rowWork . $rowContent . $rowStar. $rowStatus . $rowOrdering  . $rowID;?>
					</ul>
					<div class="clr"></div>
					<div>
						<?php echo $inputToken;?>
					</div>
				</fieldset>
			</div>
			<div class="clr"></div>
			<div>
			</div>
		</form>
		<div class="clr"></div>
	</div>
</div>
        
     