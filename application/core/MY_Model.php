<?php (defined('BASEPATH')) OR exit('No direct script access allowed');
class MY_Model extends CI_Model{
	protected $em;

	public function __construct(){
		parent::__construct();
		$this->em = $this->doctrine->em;
	}



	public function prophilaxes(){

		$query		=	$this	->	em 	->	createQuery("	SELECT 
																	p
																FROM 	models\Entities\Prophilaxis p
																"
														);

		return $prophilaxis = $query	->	getArrayResult();
	}
	
	public function facilities(){

		$query		=	$this	->	em 	->	createQuery("	SELECT 
																	f
																FROM 	models\Entities\Facility f
																ORDER BY f.name ASC
														"
														);

		return $prophilaxis = $query	->	getArrayResult();
	}

	public function test_reasons(){

		$query		=	$this	->	em 	->	createQuery("	SELECT 
																	t
																FROM 	models\Entities\TestRequisitionReason t
																ORDER BY t.desc ASC
														"
														);

		return $reasons = $query	->	getArrayResult();
	}

}