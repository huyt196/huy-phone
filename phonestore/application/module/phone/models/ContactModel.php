<?php
class ContactModel extends Model
{

	private $_columns = array(
		'id',
		'email',
		'fullname',
		'title',
		'phone',
		'content',
		'created',
		'created_by',
		'modified',
		'modified_by',
		'status',
		'ordering'
	);
	private $_userInfo;

	public function __construct()
	{
		parent::__construct();
		$this->setTable(TBL_CONTACT);

		$userObj = Session::get('user');
		$this->_userInfo = $userObj['info'];
	}



	public function saveItem($arrParam, $option = null)
	{
		$fullname = $arrParam['fullname'];
		$email = $arrParam['email'];
		$title = $arrParam['title'];
		$phone = $arrParam['phone'];
		$content = $arrParam['content'];
		$date = date('Y-m-d H:i:s', time());

		$query = "INSERT INTO `" . TBL_CONTACT . "`(`fullname`, `email`, `phone`,`title`,  `content`, `created`, `created_by`, `status`, `ordering`)
					VALUES ( '$fullname', '$email', '$phone', '$title', '$content', '$date', '$email', '0', '1')";
		$this->query($query);
	}

	private function randomString($length = 5)
	{

		$arrCharacter = array_merge(range('a', 'z'), range(0, 9), range('A', 'Z'));
		$arrCharacter = implode($arrCharacter, '');
		$arrCharacter = str_shuffle($arrCharacter);

		$result = substr($arrCharacter, 0, $length);
		return $result;
	}
}