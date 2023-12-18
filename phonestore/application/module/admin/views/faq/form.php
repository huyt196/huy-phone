<?php 
	include_once (MODULE_PATH . 'admin/views/toolbar.php');
	include_once 'submenu/index.php';
	
	// Input
	$dataForm 		= $this->arrParam['form'];
	$inputQuestion	= Helper::cmsInput('text', 'form[question]', 'question', $dataForm['question'], 'inputbox required', 40);
	$inputAnswer		= Helper::cmsInput('text', 'form[answer]', 'answer', $dataForm['answer'], 'inputbox required', 40);
	$inputOrdering	= Helper::cmsInput('text', 'form[ordering]', 'ordering', $dataForm['ordering'], 'inputbox', 40);
	$inputToken		= Helper::cmsInput('hidden', 'form[token]', 'token', time());
	$slbStatus		= Helper::cmsSelectbox('form[status]', null, array('default' => '- Select status -', 1 => 'Publish', 0 => 'Unpublish'), $dataForm['status'], 'width: 150px');

	
	$inputID		= '';
	$rowID			= '';
	if(isset($this->arrParam['id'])){
		$inputID	= Helper::cmsInput('text', 'form[id]', 'id', $dataForm['id'], 'inputbox readonly');
		$rowID		= Helper::cmsRowForm('ID', $inputID);
		
	}
	// Row
	$rowQuestion	= Helper::cmsRowForm('Question', $inputQuestion, true);
	$rowAnswer		= Helper::cmsRowForm('Answer', $inputAnswer, true);
	
	$rowOrdering	= Helper::cmsRowForm('Ordering', $inputOrdering);
	$rowStatus		= Helper::cmsRowForm('Status', $slbStatus);

	
	// MESSAGE
	$message	= Session::get('message');
	Session::delete('message');
	$strMessage = Helper::cmsMessage($message);
?>
<div id="system-message-container"><?php echo $strMessage . $this->errors;?></div>
<div id="element-box">
	<div class="m">
		<form action="#" method="post" name="adminForm" id="adminForm" class="form-validate">
			<!-- FORM LEFT -->
			<div class="width-100 fltlft">
				<fieldset class="adminform">
					<legend>Details</legend>
					<ul class="adminformlist">
						<?php echo $rowQuestion . $rowAnswer .  $rowOrdering . $rowStatus.$rowID ;?>
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
        
     