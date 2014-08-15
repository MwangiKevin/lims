<?php 
$this->load->library('mpdf');
$this->mpdf = new mPDF();
	
	//print_r($samples);
	if(empty($samples)){
		echo "no data";
		exit;
	}
	foreach ($samples as $key => $value) {
		$i++;
		$sample_id = $value['sample_id'];
		$region_name = $value['region_name'];
		$district_name = $value['district_name'];
		$facility_name = $value['facility_name'];
		$gender = $value['gender'];
		$dob = $value['dob'];
		$propholaxis = $value['propholaxis'];
		$date_collected = $value['date_collected'];
		$dbs_spots = $value['dbs_spots'];
		$acceptance_status = $value['acceptance_status'];
		$age = date("Y") - $dob; 
		$dispatch = $value['dispatch'];
		$date_tested = $value['date_tested'];
		$results = $value['test_results'];
		
		$content_2 .= "<tr>
						<td> ".$i." </td>
						<td> ".$sample_id." </td>
						<td> something </td>
						<td> ".$region_name." </td>
						<td> ".$district_name." </td>
						<td> ".$facility_name." </td>
						<td> ".$gender." </td>
						<td> ".$dob." </td>
						<td> ".$age." </td>
						<td> ".$propholaxis." </td>
						<td> ".$date_collected." </td>
						<td> ".$dbs_spots." </td>
						<td> something </td>
						<td> something </td>
						<td> something </td>
						<td> something </td>
						<td> something </td>
						<td> something </td>
						<td> something </td>
						<td> ".$date_tested." </td>
						<td> ".$dispatch." </td>
						<td> ".$results." </td>
					</tr>";	
	}

	$content_1 ="
	<img src=".base_url('img/tz.png')."  height='140' width='100%' alt='NACP'>
	<h2> ".$area. " Summary</h2>
	<h1 style='position: absolute; right:45%; top:15%;'> ".$location."</h1>
	<h4 style='position: absolute; right:10%; top:19%;'> Start Date: ".$start_date."  End Date: ".$end_date." </h4>
	<hr/>
		<table border='1' align='center'>
			<tbody>
				<tr style='font-weight:bold; font-size:20pt; background-color:#FFBBFF;'>
					<td>  </td>
					<td> Sample ID </td>
					<td> Testing Lab </td>
					<td> Region </td>
					<td> District </td>
					<td> Facility </td>
					<td> Sex </td>
					<td> DOB </td>
					<td> Age </td>
					<td> Infant Propholaxyis </td>
					<td> Date Collected </td>
					<td> Spots </td>
					<td> Received Status </td>
					<td> Reject Reason /Repeat Reason</td>
					<td> HIV Status of Mother</td>
					<td> PMTCT Intervention </td>
					<td> Breast Feeding </td>
					<td> Entry Point </td>
					<td> Date of Receving </td>
					<td> Date of Testing </td>
					<td> Date of Dispatch </td>
					<td> Test Results </td>
				</tr>";
				
				
		$content_3 =
		"
		</table>
		<hr/>
		<h6 style='float:right;'>End-of-document</h6>
		";
		
		$final_content = $content_1.$content_2.$content_3;
		$this->mpdf->WriteHTML($final_content);
		$title = "doc1";
		$file_name = $this->config->item('server_root').'downloads/'.$title.'.pdf';
		$this->mpdf->Output($file_name,I);//F to save to the above location
		exit;	
?>








