<?php 
	include_once (MODULE_PATH . 'admin/views/toolbar.php');
	include_once 'submenu/index.php';
	
	// Input
	$dataForm 			= $this->arrParam['form'];
	$inputName			= Helper::cmsInput('text', 'form[name]', 'name', $dataForm['name'], 'inputbox required', 40);
	$inputDescription	= '<textarea name="form[description]">'.$dataForm['description'].'</textarea>';

	$inputOrdering		= Helper::cmsInput('text', 'form[ordering]', 'ordering', $dataForm['ordering'], 'inputbox', 40);
	$inputToken			= Helper::cmsInput('hidden', 'form[token]', 'token', time());
	$slbStatus			= Helper::cmsSelectbox('form[status]', null, array('default' => '- Select status -', 1 => 'Publish', 0 => 'Unpublish'), $dataForm['status'], 'width: 180px');
	
	$inputPicture		= Helper::cmsInput('file', 'picture', 'picture', $dataForm['picture'], 'inputbox', 40);
	
	$inputID		= '';
	$rowID			= '';
	$picture		= '';
	if(isset($this->arrParam['id']) || $dataForm['id']){
		$inputID		= Helper::cmsInput('text', 'form[id]', 'id', $dataForm['id'], 'inputbox readonly');
		$inputUserName	= Helper::cmsInput('text', 'form[username]', 'username', $dataForm['username'], 'inputbox readonly', 40);
		$rowID			= Helper::cmsRowForm('ID', $inputID);
		$picture		= '<img src="'.UPLOAD_URL . 'blog' . DS . '' . $dataForm['picture'].'">';
		$inputPictureHidden	= Helper::cmsInput('hidden', 'form[picture_hidden]', 'picture_hidden', $dataForm['picture'], 'inputbox', 40);
	}
	
	// Row
	$rowName		= Helper::cmsRowForm('Name', $inputName, true);
	$rowPicture		= Helper::cmsRowForm('Picture', $inputPicture . $picture . $inputPictureHidden);
	$rowDescription	= Helper::cmsRowForm('Description', $inputDescription);
	
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
						<?php echo $rowName . $rowPicture . $rowStatus . $rowOrdering . $rowDescription . $rowID;?>
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
        
     