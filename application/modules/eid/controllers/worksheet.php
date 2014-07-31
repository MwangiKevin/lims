<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class worksheet extends MY_Controller {

	public function __construct(){

		parent::__construct();
		$this->login_reroute(array(2));

		$this->view_data['sidebar'] 		= "eid_sidebar";
		$this->view_data['filter']			=	false;
		$this->view_data['content_view'] 	= 	"eid/cobas_view";
		$this->view_data['sidebar'] 		= 	"eid_sidebar";
		$this->view_data['title'] 			= 	"EID";
		
		$this->view_data['b_color']			=	"no-skin";
		$this->view_data['topleft_title']	=	"EID";
		$this->load->model("worksheets_model");
		
		$this->view_data 					=	array_merge($this->view_data,$this->load_libraries(array("style-date-time")));		
		$this->view_data['menu_select']		= 	array(2,0);
		$this->view_data['breadcrumbs'] 	=	array(
														0 	=>	array(
																	"title" 	=>	"Home",
																	"link"		=>	base_url()."eid/",
																	"class"		=>	""
																	),
														1 	=>	array(
																	"title" 	=>	"Worksheet",
																	"link"		=>	base_url()."eid/worksheet/",
																	"class"		=>	"active"
																	),
														2 	=>	array(
																	"title" 	=>	"COBAS Worksheet",
																	"link"		=>	base_url()."eid/worksheet/cobas",
																	"class"		=>	"active"
																	)
												);
		
	}

	public function index(){
		$this->cobas();
	}

	public function cobas(){
		$this->view_data['content_view'] 	= "eid/cobas_view";		
		$this->view_data['title'] 			= "EID | Worksheet | COBAS";
		$this->view_data['menu_select']		= 	array(2,0);
		$this->view_data['result'] = $this->worksheets_model->cobas_samples(1);
		//$res = $this->worksheets_model->cobas_samples(1);
		//$this->view_data['save_and_print_cobas'] = base_url()."eid/worksheet/cobas_print_worksheet";
		$this->view_data['worksheet_id'] = $this->worksheets_model->last();				
		$this->view_data['breadcrumbs'][2]		=	array(
											"title" 	=>	"COBAS Worksheet",
											"link"		=>	base_url()."eid/worksheet/cobas",
											"class"		=>	"active"
											);
		// foreach($result	 as $res1){
			// $DBSNo = $res1['dbsNo'];
			// echo('No of blood spots '.$DBSNo);
		// }
		
		$this -> template($this->view_data);
	}
	
	public function abbott(){
		$this->view_data['content_view'] 		= "eid/abbott_view";
		$this->view_data['title'] 				= "EID | Worksheet | ABBOT";		
		$this->view_data['menu_select']			= 	array(2,1);
		$this->view_data['result'] = $this->worksheets_model->abbott_samples(1);
		//$this->view_data['save_and_print_abbott'] = base_url()."eid/worksheet/abbott_print_worksheet";
		$this->view_data['worksheet_id'] = $this->worksheets_model->last();	
		// $result = $this->worksheets_model->abbott_samples(1);
		// print_r("Result = " .$result);
		// die;
		
		$this->view_data['breadcrumbs'][2]		=	array(
													"title" 	=>	"ABOTT Worksheet",
													"link"		=>	base_url()."eid/worksheet/abbott",
													"class"		=>	"active"
													);
		$this->template($this->view_data);
	}
	
	public function history(){	
		$this->view_data['content_view'] 		= "eid/worksheet_history_view";
		$this->view_data['title'] 				= "EID | Worksheet";		
		$this->view_data['menu_select']			= 	array(2,2);
		$this->view_data['breadcrumbs'][2]		=	array(
													"title" 	=>	"Worksheet History",
													"link"		=>	base_url()."eid/worksheet/history",
													"class"		=>	"active"
													);
		$this->view_data['history'] = $this->worksheets_model->history();
		// $result = $this->worksheets_model->history();
		// print_r("Result ".$result);
		// die;										
		$this->template($this->view_data);
	}
	
	public function cobas_print_worksheet(){
		$worksheet_and_samples['worksheet_id']  = $_POST['worksheet_no'];
		$worksheet_id = $_POST['worksheet_no'];
		
		$post_data['cdc_worksheet_no'] = $_POST['template_no'];
		$post_data['lot_no'] = $_POST['lot_no'];
		$post_data['HIQCAPNo'] = $_POST['hiqcap'];
		$post_data['rack_no'] = $_POST['rack_no'];
		$post_data['Spek_kit_no'] = $_POST['spek_kit_no'];
		$post_data['kit_expiry_date'] = date('Y-m-d',strtotime($_POST['kit_expiry']));
		$post_data['sample_prep_lot_no'] = $_POST['sample_prep_no'];
		$post_data['sample_prep_expiry-date'] = date('Y-m-d',strtotime($_POST['sample_prep_expiry_date']));
		$post_data['worksheet_id'] = $_POST['worksheet_no'];
		
		$post_datas['cdc_worksheet_no'] = $_POST['template_no'];
		$post_datas['date_created'] = date('Y-m-d',strtotime($_POST['date_created']));
		$post_datas['status'] = 'r';				
		$post_datas['date_cut'] = date('Y-m-d',strtotime($_POST['date_cut']));
		$post_datas['updated_by'] = $_POST['updated_by'];
		$post_datas['reviewed_by'] =  $_POST['reviewed_by']; 
		$post_datas['created_by'] =  $_POST['created_by'];
		$post_datas['flag'] = 0;
		$post_datas['date_run'] = date('Y-m-d',strtotime($_POST['date_run']));
		$post_datas['date_reviewed'] = date('Y-m_d',strtotime($_POST['date_reviewed']));
		
		//insert into tables via active record
		$this->db->insert('cobas_worksheet',$post_data);
		$this->db->insert('worksheet',$post_datas);
		
		//get all the sample ids that are in this worksheet
		$samples = $this->worksheets_model->cobas_samples(1);
		if($samples == NULL){
		//	echo "No samples available";
		}else{			
			foreach ($samples as $sam) {
				$id = $sam['id'];
				$dbs = $sam['no_of_dbs_spots'];//gets the no. of dbs of each sample
				$worksheet_and_samples['sample_id']=$sam['id'];
	
				//TABLE: WORKSHEETS_AND_SAMPLES
				$sql1 = "SELECT * FROM worksheets_and_sample WHERE sample_id = ".$id." ";
				$query1 = R::getAll($sql1);
				if($query1 == NULL){					
					$this->db->insert('worksheets_and_samples',$worksheet_and_samples);//insert new row
				}else{
					$sql = "UPDATE worksheets_and_samples SET worksheet_id = ".$worksheet_id." WHERE sample_id=".$id." ";
					$this->db->query($sql);
				}

				//TABLE: SAMPLES
				if($dbs >= 2){
					$ndbs = $dbs - 2;//subrtacts two which have been used for this test
					$post_ndata['no_of_dbs_spots'] = $ndbs;
					$this->db->where('id',$id);
					$this->db->update('sample',$post_ndata);//updates new value where ID matches ID
				}else{//if less than 2 new value is zero
					$post_ndata['no_of_dbs_spots'] = 0;
					$this->db->where('id',$id);
					$this->db->update('sample',$post_ndata);//updates new value
				}
	
				//TABLE:SAMPLE_TEST_RUN
				$sql = "SELECT test_run_no FROM sample_test_run WHERE sample_id = ".$id." ";
				$qry = $this->db->query($sql);
				//echo $id."\n";
				// print_r($qry);
				// die;
				if($qry->num_rows()==0){//if no match found, this is a new sample thus we need to add it
				//echo "null";
					$sample_test_run['sample_id'] = $id;//get the current ID
					$sample_test_run['test_run_no'] = 1;//this is the first test
					$sample_test_run['result'] = "";
					$sample_test_run['date_released'] = "";
					$this->db->insert('sample_test_run',$sample_test_run);//insert the values
				}else{//if a match is found
				//echo "content";					
					$result=$qry->result_array();
					$test_run_no = 0;
					if($result){
					   $test_run_no=$result[0]['test_run_no'];
					}
		
					$test_run_no = $test_run_no + 1;//incremeant test_run_no
					$sql = "UPDATE sample_test_run SET test_run_no = ".$test_run_no." WHERE sample_id = ".$id." ";
					$this->db->query($sql);//update new value where sample id matches id
				}		
			}
		}	
			
		//the barcodes
		$this->view_data['result'] = $this->worksheets_model->ready_samples(1);
		//the worksheet details
		$this->view_data['worksheet_details'] = $this->worksheets_model->cobas_rack($_POST['worksheet_no']);
		//load rack view
		$this->load->view("cobas_rack_view",$this->view_data);
	}

	public function abbott_print_worksheet(){
		$worksheet_id = $_POST['worksheet_no'];
		 	
		//abbott_worksheet
		$post_data['cdc_worksheet_no'] = $_POST['cdc_worksheet_no'];
		$post_data['control'] = $_POST['control'];
		$post_data['calibrator'] = $_POST['calibrator'];
		$post_data['amplification_kit_lot_no'] = $_POST['amplification_kit_no'];
		$post_data['amplification_expiry_date'] = date('Y-m-d', strtotime($_POST['amplification_expiry_date']));
		$post_data['calibrator_expiry_date'] = date('Y-m-d',strtotime($_POST['calibrator_expiry_date']));
		$post_data['control_expiry_date'] = date('Y-m-d',strtotime($_POST['control_expiry_date']));		
		$post_data['calibrator_lot_no'] = $_POST['calibrator_lot_no'];
		$post_data['control_lot_no'] = $_POST['control_lot_no'];
		$post_data['bulk_lysis_lot_no'] = $_POST['bulk_lysis_lot_no'];
		$post_data['bulk_lysis_expiry_date'] = date('Y-m-d', strtotime($_POST['bulk_lysis_expiry']));
		$post_data['sample_prep_expiry_date'] = date('Y-m-d',strtotime($_POST['sample_prep_expiry']));
		$post_data['sample_prep_lot_no'] = $_POST['sample_prep_lot_no'];
		$post_data['worksheet_id'] = $_POST['worksheet_no'];
		//worksheet
		$post_datas['status'] = 'r';
		$post_datas['flag'] = 1;// 1 for abbot 0 for cobas
		$post_datas['date_cut'] = date('Y-m-d',strtotime($_POST['date_cut']));
		$post_datas['cdc_worksheet_no'] = $_POST['cdc_worksheet_no'];
		$post_datas['date_created'] = date('Y-m-d',strtotime($_POST['date_created']));
		$post_datas['reviewed_by'] = $_POST['reviewed_by'];
		$post_datas['created_by'] = $_POST['created_by'];
		$post_datas['date_run'] = date('Y-m-d',strtotime($_POST['date_run']));
		$post_datas['date_reviewed'] = date('Y-m-d',strtotime($_POST['date_reviewed']));
		
		//inserting
		$this->db->insert('abbot_worksheet',$post_data);
		$this->db->insert('worksheet',$post_datas);
		
		//getting the number of samples that will be tested
		$samples = $this->worksheets_model->abbott_samples(1);
		foreach($samples as $sam){
			$id = $sam['id'];
			$dbs = $sam['no_of_dbs_spots'];//number of spots that this ID,sample has
			$worksheet_and_samples["sample_id"] = $id;
			
			//TABLE:WORKSHEETS_AND_SAMPLES
			$sql1 = "SELECT * FROM worksheets_and_samples WHERE sample_id = ".$id." ";
			$query = R::getAll($sql1);
			if($query==NULL){
			//echo"empty result";
				$sql = "INSERT INTO worksheets_and_samples (worksheet_id,sample_id) VALUES(".$worksheet_id.", ".$id.")";					
				$this->db->query($sql);
			}else{
			//echo"content result";
				$sql = "UPDATE worksheets_and_samples SET worksheet_id = ".$worksheet_id." WHERE sample_id = ".$id." ";
				$this->db->query($sql);//updates the worksheet_id
			}
			
			//TABLE: SAMPLE
			if($dbs >= 2){
				$no_of_dbs_spots = $dbs - 2;	//less 2 spots that have been used in this test
				$sql = "UPDATE sample SET no_of_dbs_spots = ".$no_of_dbs_spots." WHERE id = ".$id." ";
				$this->db->query($sql);//update sample table
			}else{
				$no_of_dbs_spots = 0;//use the one spot and change value to 0
				$sql = "UPDATE sample SET no_of_dbs_spots = ".$no_of_dbs_spots." WHERE id = ".$id." ";
				$this->db->query($sql);
			}
			//TABLE: SAMPLE_TEST_RUN
			$sql2 = "SELECT test_run_no FROM sample_test_run WHERE sample_id = ".$id." ";//get samples where id matches
			$query = $this->db->query($sql2);
			if($query->num_rows()==0){//if no match found, this is a new sample thus we need to add it
			//echo "null";
				$sample_test_run['sample_id'] = $id;//get the current ID
				$sample_test_run['test_run_no'] = 1;//this is the first test
				$sample_test_run['result'] = "";
				$sample_test_run['date_released'] = "";
				$this->db->insert('sample_test_run',$sample_test_run);//insert the values
			}else{//if a match is found
			//echo "content";
				$this->db->select('SELECT test_run_no FROM sample_test_run WHERE sample_id = '.$id.' ',FALSE);
				$test_run_no = $this->db->get('sample_test_run');//SELECT test_run_no FROM sample_test_run WHERE sample_id = $id
				$sample_test_run['test_run_no'] = $test_run_no + 1;//incremeant test_run_no
				$this->db->where('sample_id',$id);
				$this->db->update('sample_test_run',$sample_test_run);//update new value where sample id matches id
			}
		}

		
		//getting the samples
		$this->view_data['result'] = $this->worksheets_model->ready_samples(1);
		// $val = $this->worksheets_model->ready_samples(1);
		// print_r($val);
		// die;
		$this->view_data['worksheet_details'] = $this->worksheets_model->abbott_rack($_POST['worksheet_no']);
		
		$this->load->view("abbott_rack_view",$this->view_data);
	}

	public function edit_worksheet(){
		$worksheet_id = $_POST['worksheet_id_zoome'];
		$this->worksheets_model->edit_worksheet($worksheet_id);
	}
	
	public function delete_worksheet(){
		echo($_POST['worksheet_id_zoomd']);
		die;
		$worksheet_id = $_POST['worksheet_id_zoomd'];
		$this->worksheets_model->delete_worksheet($worksheet_id);
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}