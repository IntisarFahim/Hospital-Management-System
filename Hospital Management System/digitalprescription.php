<?php
	require_once('php/session_header.php');
	require_once('php/druser.php');
	$username=$_SESSION['username'];
    $userid=$_SESSION['userid'];
   
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width-device-width, initial-scale=1.0">
<link rel="stylesheet" href="CSS/prescription.css">
	<title>Digital Prescription</title>
</head>
<body>

	<form action="php/prescriptionInfo.php" method="post">
	<h2 align="center">My Prescription List</h2>
	<div class="wrapper">
          <div class="complain_form">
			<table >
				<tr>
					<td>
						<h2>Add your prescription here....</h2>
                    </td>
                </tr>
				<tr>
		     		<td><h3>Patient Id</h3></td>
				</tr>
				<tr>
					<td><input type="text" id="cmp_type" name="patient_id" ></td>
				</tr>
				<tr>
					<td><h3>Prescription</h3></td>
				</tr>
				<tr>
					<td><textarea type="textarea" id="cmp_des" name="p_description" width="40x" height="50x"></textarea></td>
				</tr>
				<tr>
					<td>
						<input type="hidden" name="doctor_id" value="<?=$userid?>">
						<input type="submit" name="submit_prescription" value="Submit"> 
						<a href="profiledetails.php">Back</a>
					</td>
				</tr>
			</table>
		</div>

		
	<div class="product_details">
	    <div class="row">
	          <div class="view_complain">Patient Id</div>
              
              <div class="view_complain">Prescription</div>
              
              <div class="view_complain">Action</div>
			  
              
		</div>
		<?php  
			$view_prescription = getPrescription($userid);
			for ($i=0; $i != count($view_prescription); $i++) {  ?>
		    <div class="database_row">
	          <div class="view_complain"><?=$view_prescription[$i]['patient_id']?>
              </div>
              <div class="view_complain"><?=$view_prescription[$i]['p_description']?>
              </div>
              <div class="view_complain"><a href="php/prescriptionInfo.php?p_id=<?=$view_prescription[$i]['p_id']?>"><input type="button" value="Delete"  onclick="alert('Are you want to delete<?=$view_prescription[$i]['p_id'];?>')"></a> <a href="editPrescription.php?p_id=<?=$view_prescription[$i]['p_id']?>"><input type="button" value="Edit"></a>
              </div>
			  
		    </div>
		<?php }?>
	</div>
</div>
	</form>
</body>
</html>