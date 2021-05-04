<?php
require_once('session_header.php');
require_once('druser.php');
if(isset($_GET['p_id']))
{
	$pp_id= $_GET['p_id'];
	
	$ppp = prescriptionDelete($pp_id);
	if($ppp==true)
	{
	   
	header("location:../digitalprescription.php?Message:DeleteSuccessFul");
	}
	else
	{
		//echo "Delete Failed!";
		header("location::../digitalprescription.php?Message:DeleteFailed");
	}

}

	if(isset($_POST['submit_prescription'])){

		$patient_id	= $_POST['patient_id'];
		$p_description	= $_POST['p_description'];
		$doctor_id		= $_POST['doctor_id'];
		

		if(empty($patient_id) || empty($p_description ) || empty($doctor_id)){
			header('location: ../digitalprescription.php?error=Null submission');
		}else{

			$prescription = [
				'doctor_id'=> $doctor_id,
				'patient_id'=> $patient_id,
				'p_description' => $p_description
			];

			$status = prescription_insert($prescription);

			if($status){
				header('location: ../digitalprescription.php?success=done');
			}else{
				header('location: ../digitalprescription.php??id={$id}');
			}
		}
	}



	if(isset($_POST['update_prescription'])){

		$patient_id	= $_POST['patient_id'];
		$p_description	= $_POST['p_description'];
		$doctor_id		= $_POST['doctor_id'];
		$p_id = $_POST['p_id'];
		

		if(empty($patient_id) || empty($p_description ) || empty($doctor_id) || empty($p_id)){
			header('location: ../digitalprescription.php?error=Null submission');
		}else{

			$prescription = [
				'doctor_id'=> $doctor_id,
				'patient_id'=> $patient_id,
				'p_description' => $p_description,
				'p_id' => $p_id
			];

			$status = prescription_update($prescription);

			if($status){
				header('location: ../digitalprescription.php?success=Edit done');
			}else{
				header('location: ../digitalprescription.php??id={$id}');
			}
		}
	}
    ?>