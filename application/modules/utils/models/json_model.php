<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class json_model extends MY_Model {
	
	public function write_emails()
	{
		$sql = "SELECT
						`id`,
						`name`,
						`email`
					FROM user";

		return $emails = R::getAll($sql);
	}
}