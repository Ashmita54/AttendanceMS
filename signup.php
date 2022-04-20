<?php
if (isset($_POST['Register'])){
	if (isset($_POST['name']) && !empty($_POST['name']) &&trim($_POST['name'])){
		$name= trim($_POST['name']);
		if (strlen($name) < 8) {
			$errname='Enter atleast 8 character';
		}
	}else{
		$errname='Enter name';
 	if (isset($_POST['address']) && !empty($_POST['address'])){
		$address=$_POST['address'];
	}else{
		$erraddress='Enter address';
	}
	if (isset($_POST['phone']) && !empty($_POST['phone'])){
		$phone= ($_POST['phone']);
		if (strlen($phone) !=10){
			$errphone = 'number must be 10 digit';
		}
	}else{
		$errphone='Enter number';
	}
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Attendance Management System</title>
 	<style>
 		body{
 			 background:linear-gradient(to right, #78a7ba 0%, #385D6C 50%, #78a7ba 99%);
			}
		h1 {
			font-family: "Roborto" sans-serif;
  font-size: 20px;
  text-align:center;
  color:#000;
  padding:20px 0;
  border-bottom:1px solid #cccccc;

 
}
.form-header  {
  background-color: #EFF0F1;
  border-top-left-radius: 1px;
  border-top-right-radius: 10px;
}
.form-body {
  padding:1px 1px;
  color:#000;
}

.form-group{
  margin-bottom:20px;
}

.form-body .label-title {
  color:#1BBA93;
  font-size: 17px;
  font-weight: bold;
}

.form-body .form-input {
    font-size: 17px;
    box-sizing: border-box;
    width: 100%;
    height: 1px;
    padding-left: 10px;
    padding-right: 10px;
    color: #333333;
    text-align: left;
    border: 1px solid #d6d6d6;
    border-radius: 4px;
    background: white;
    outline: none;
}



 	</style>
 	
</head>
<body>
	<header>
	<div class="form-header">
		<h1>Sign up</h1>
	</div>
		 <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
		 <div class="form-body">
		 <div class="horizontal-group">
          <div class="form-group left">

		<label>Name</label>
		<input type="text" name="name" value="<?php echo isset($name)?$name:'';?>">
		<?php if(isset($errname)){
 		echo $errname;
 		}?>
 	</div>
 	</div>
	</div>
		<br>
		 <div class="form-group">
		<label>Address</label>
		<input type="text" name="address" value="<?php echo isset($address)?$address:'';?>">
		<?php if (isset($erraddress)) {
		echo $erraddress;
		} ?>
	</div>
	<div class="form-group right">
		<br>
		<label>Phone</label>
		<input type="number" name="phone" value="<?php echo isset($phone)?$phone:'';?>">
		<?php if(isset($errphone)){
			echo $errphone;
		} ?>
		<br>
		<label>Date of Birth</label>
		<input type="date" name="DOB">
		<br>
		<label>Email</label>
		<input type="email" name="email">
		<br>
		<label>Gender</label>
		<input type="radio" name="gender" value="Male">Male
		<input type="radio" name="gender" value="Female">Female
		<input type="radio" name="gender" value="Others">Others
		<br>
		<label></label>
		<input type="radio" name="Signup" value="Admin">Admin
		<input type="radio" name="Signup" value="Teacher">Teacher
		<input type="radio" name="Signup" value="Student">Student
		<br>
	</div>
 		<input type="submit" value="Register" name="Register">

	</form>
</body>
</html>