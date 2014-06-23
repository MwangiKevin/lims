<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
* @author Maestro
*/
class db_view extends MY_Controller {

	/**
	* @job =  Constructor
	*/
	function __construct() {
		parent::__construct();
	}

	/**
	* @job =  takes written select sql statements from views_sql and creates views
	*/
	public function update_all(){

      	$this->config->load('views_sql');

		$views_sql = $this->config->item("views_sql");

		foreach ($views_sql as $key => $value) {
			$sql = "CREATE OR REPLACE VIEW 
							`$key` AS 
							$value
					";
			$this->db->query($sql);
		}
		echo "Views Updated";
     }

}