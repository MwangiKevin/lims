<?php (defined('BASEPATH')) OR exit('No direct script access allowed');
class MY_Model extends CI_Model{
	protected $em;
	protected $thisyear;
	protected $thismonth;

	public function __construct(){
		parent::__construct();
		$this->em = $this->doctrine->em;
		$this->thisyear 	= (int) Date("Y");
		$this->thismonth 	= (int) Date("m");
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
	public function infant_feeding(){

		$query		=	$this	->	em 	->	createQuery("	SELECT 
																	i
																FROM 	models\Entities\InfantFeeding i
																ORDER BY i.name ASC
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

	public  function get_month_categories($from,$to){

		$datemonth = array();  

		$from_year        = (int) Date("Y",strtotime($from));
		$from_month       = (int) Date("m",strtotime($from));
		$to_year          = (int) Date("Y",strtotime($to));
		$to_month         = (int) Date("m",strtotime($to));

		for($y=$from_year; $y <= $to_year;$y++){
			for($m=$from_month;($m <= $to_month);$m++){
				$datemonth[] = $m;
			}
		}

           //print_r($datemonth);

		return $datemonth;
	}


	public function get_yearmonth_categories($from,$to){

		$datemonth = array();  

		$from_year        = (int) Date("Y",strtotime($from));
		$from_month       = (int) Date("m",strtotime($from));
		$to_year          = (int) Date("Y",strtotime($to));
		$to_month         = (int) Date("m",strtotime($to));

		for($y=$from_year; $y <= $to_year;$y++){
			for($m=1;($m <= 12);$m++){
				if( $y==$from_year ){
					if($m>=$from_month ){
						$datemonth[] = $y."-".$m;
					}
				}elseif( $y==$to_year ){
					if($m<=$to_month ){
						$datemonth[] = $y."-".$m;
					}
				}else{
					$datemonth[] = $y."-".$m;
				}
			}
		}

           // print_r($datemonth);

		return $datemonth;
	}

	
	public function get_month_name($month){
		$d= "1";	
		$y= date('Y');
		$m=$month;
		return date('M',strtotime($y.'-'.$m.'-'.$d));
	}

	public function get_yearmonth_name($yearmonth){
		$d= "1";
		$ym=$yearmonth;
		return date('Y,M',strtotime($ym.'-'.$d));
	}
}