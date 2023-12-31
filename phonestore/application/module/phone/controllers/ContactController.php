<?php
class ContactController extends Controller
{

	public function __construct($arrParams)
	{
		parent::__construct($arrParams);
		$this->_templateObj->setFolderTemplate('phone/main/');
		$this->_templateObj->setFileTemplate('index.php');
		$this->_templateObj->setFileConfig('template.ini');
		$this->_templateObj->load();
	}

	public function indexAction()
	{

		if (!empty($this->_arrParam['form'])) {
			$source = $this->_arrParam['form'];
			$validate = new Validate($source);

			///Rule
			$validate->addRule('fullname', 'string', array('min' => 1, 'max' => 255))
				->addRule('email', 'email')
				->addRule('title', 'string', array('min' => 1, 'max' => 2550))
				->addRule('phone', 'phone')
				->addRule('content', 'string', array('min' => 1, 'max' => 25500));

			// Run
			$validate->run();
			$this->_arrParam['form'] = $validate->getResult();
			$this->_view->error = $validate->showErrors();
			$this->_view->result = $this->_arrParam['form'];

			if (empty($validate->showErrors())) {
				$this->_model->saveItem($this->_arrParam['form']);
				$configEmail = file_get_contents(UPLOAD_PATH .'data/configEmail.json');
	
				$configEmail = json_decode($configEmail, true);
				
				$mail = new Mail($configEmail);
				$mail->sendMail($this->_arrParam['form'], ['task' => 'send-mail-to-user']);
				$sendMail = $mail->sendMail($this->_arrParam['form'], ['task' => 'send-mail-to-admin']);
				$this->_view->messageSendMail = $sendMail;
			}
		}
		
		$this->_view->_title = 'My Contact';
		$this->_view->name_page = "Liên hệ";
		$this->_view->menu_active = "about";
		$this->_view->render('contact/index', true, ['slider' => false, 'banner' => false, 'info' => false, 'breadcum' => true]);
	}
}

