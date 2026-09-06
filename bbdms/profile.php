<?php 
session_start();
error_reporting(0);
include('includes/config.php');

if (!isset($_SESSION['bbdmsdid']) || strlen($_SESSION['bbdmsdid']) == 0) {
    header('location:logout.php');
    exit();
} else {
    if (isset($_POST['update'])) {
        $uid = $_SESSION['bbdmsdid'];
        $name = $_POST['fullname'];
        $mno = $_POST['mobileno']; 
        $emailid = $_POST['emailid'];
        $age = $_POST['age']; 
        $gender = $_POST['gender'];
        $bloodgroup = $_POST['bloodgroup']; 
        $address = $_POST['address'];
        $message = $_POST['message']; 
        
        $sql = "UPDATE tblblooddonars SET FullName=:name, MobileNumber=:mno, Age=:age, Gender=:gender, BloodGroup=:bloodgroup, Address=:address, Message=:message WHERE id=:uid";
        $query = $dbh->prepare($sql);
        $query->bindParam(':name', $name, PDO::PARAM_STR);
        $query->bindParam(':mno', $mno, PDO::PARAM_STR);
        $query->bindParam(':age', $age, PDO::PARAM_STR);
        $query->bindParam(':gender', $gender, PDO::PARAM_STR);
        $query->bindParam(':bloodgroup', $bloodgroup, PDO::PARAM_STR);
        $query->bindParam(':address', $address, PDO::PARAM_STR);
        $query->bindParam(':message', $message, PDO::PARAM_STR);
        $query->bindParam(':uid', $uid, PDO::PARAM_STR);
        $query->execute();
        echo '<script>alert("Profile has been updated")</script>';
    }
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Blood Bank Donar Management System !! Donor Profile</title>
	
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>

	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/fontawesome-all.css">

	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
</head>

<body>
	<?php include('includes/header.php');?>

	<div class="inner-banner-w3ls">
		<div class="container"></div>
	</div>
	
	<div class="breadcrumb-agile">
		<div aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Donor Profile</li>
			</ol>
		</div>
	</div>

	<div class="appointment py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="w3ls-titles text-center mb-5">
				<h3 class="title">Donor Profile</h3>
				<span><i class="fas fa-user-md"></i></span>
			</div>
			
			<div class="row justify-content-center">
				<div class="col-lg-8 contact-right-w3l appoint-form">
					<h5 class="title-w3 text-center mb-5">Detail of Your profile</h5>
					
					<form action="#" method="post">
						<?php
						$uid = $_SESSION['bbdmsdid'];
						$sql = "SELECT * FROM tblblooddonars WHERE id=:uid";
						$query = $dbh->prepare($sql);
						$query->bindParam(':uid', $uid, PDO::PARAM_STR);
						$query->execute();
						$results = $query->fetchAll(PDO::FETCH_OBJ);
						if($query->rowCount() > 0) {
							foreach($results as $row) {
						?>
						
						<div class="form-group">
							<label for="fullname" class="col-form-label">Full Name</label>
							<input type="text" class="form-control" name="fullname" id="fullname" value="<?php echo $row->FullName;?>">
						</div>
						
						<div class="form-group">
							<label for="mobileno" class="col-form-label">Mobile Number</label>
							<input type="text" class="form-control" name="mobileno" id="mobileno" required="true" maxlength="10" pattern="[0-9]+" value="<?php echo $row->MobileNumber;?>">
						</div>
						
						<div class="form-group">
							<label class="col-form-label">Email Id <span style="color:red; font-size:10px;">(Can't be Changed)</span></label>
							<input type="email" name="emailid" class="form-control" value="<?php echo $row->EmailId;?>" readonly>
						</div>
						
						<div class="form-group">
							<label for="age" class="col-form-label">Age</label>
							<input type="text" class="form-control" name="age" id="age" required="" value="<?php echo $row->Age;?>">
						</div>
						
						<div class="form-group">
							<label class="col-form-label">Gender</label>
							<select required="" class="form-control" name="gender">
								<option value="<?php echo $row->Gender;?>"><?php echo $row->Gender;?></option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
						</div>
						
						<div class="form-group">
							<label class="col-form-label">Blood Group</label>
							<select name="bloodgroup" class="form-control" required>
								<option value="<?php echo $row->BloodGroup;?>"><?php echo $row->BloodGroup;?></option>
								<?php 
								$sql2 = "SELECT * FROM tblbloodgroup";
								$query2 = $dbh->prepare($sql2);
								$query2->execute();
								$results2 = $query2->fetchAll(PDO::FETCH_OBJ);
								if($query2->rowCount() > 0) {
									foreach($results2 as $result) {
								?>  
								<option value="<?php echo htmlentities($result->BloodGroup);?>"><?php echo htmlentities($result->BloodGroup);?></option>
								<?php 
									}
								} 
								?>
							</select>
						</div>
						
						<div class="form-group">
							<label for="address" class="col-form-label">Address</label>
							<input type="text" class="form-control" name="address" id="address" required="true" value="<?php echo $row->Address;?>">
						</div>
						
						<div class="form-group">
							<label class="col-form-label">Message</label>
							<textarea class="form-control" name="message" required><?php echo $row->Message;?></textarea>
						</div>
						
						<input type="submit" value="Update" name="update" class="btn_apt btn-block mt-4">
						
						<?php 
							}
						} 
						?>
					</form>
				</div>
			</div>
		</div>
	</div>

	<?php include('includes/footer.php');?>

	<script src="js/jquery-2.2.3.min.js"></script>
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<script src="js/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1").datepicker();
		});
	</script>
	<script src="js/fixed-nav.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script src="js/medic.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>
<?php } ?>