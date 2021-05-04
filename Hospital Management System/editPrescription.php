<?php
	require_once('php/session_header.php');
	require_once('php/druser.php');

    $p_id =$_GET['p_id'];
	$username=$_SESSION['username'];
    $userid=$_SESSION['userid'];
    $P_info = getByP_id($p_id);
  
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
	
	<div class="wrapper">
          <div class="complain_form">
			<table >
				<tr>
					<td>
						<h2>Edit your prescription here....</h2>
                    </td>
                </tr>
				<tr>
		     		<td><h3>Patient Id</h3></td>
				</tr>
				<tr>
					<td><input type="text" id="cmp_type" name="patient_id" value="<?=$P_info['patient_id']?>" ></td>
				</tr>
				<tr>
					<td><h3>Prescription</h3></td>
				</tr>
				<tr>
					<td><textarea type="textarea" id="cmp_des" name="p_description"  width="40x" height="50x" value="<?=$P_info['p_description']?>"></textarea></td>
				</tr>
				<tr>
					<td>
						<input type="hidden" name="doctor_id" value="<?=$userid?>">
                        <input type="hidden" name="p_id" value="<?=$p_id?>">
						<input type="submit" name="update_prescription" value="Update"> 
						<a href="digitalprescription.php">Back</a>
					</td>
				</tr>
			</table>
		</div>
	</div>
</div>
	</form>
</body>
</html>