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
  if (isset($_POST['email']) && !empty($_POST['email'])){
    $phone= ($_POST['email']);
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
    <title>Register Form</title>
    <link rel="stylesheet" href="signup.css">
  </head>
  <body>
    <form class="signup-form" action="/register" method="post">

      <!-- form header -->
      <div class="form-header">
         
        <h1>Sign Up</h1>
      </div>
      <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">

      <!-- form body -->
      <div class="form-body">

        <!-- Firstname and Lastname -->
        <div class="horizontal-group">
          <div class="form-group left">
            <label class="label-title">Name </label>
            <input type="text" name="name" class="form-input" placeholder="enter your name" value="<?php echo isset($name)?$name:'';?>">
    <?php if(isset($errname)){
    echo $errname;
    }?>
          </div>
          </div>

        <!-- Email -->
        <div class="form-group">
          <label for="email" class="label-title">Email</label>
          <input type="email" id="email" class="form-input" placeholder="enter your email" required="required">
        </div>

        <!-- Password and confirm password -->
        <div class="horizontal-group">
          <div class="form-group left">
            <label for="password" class="label-title">Password </label>
            <input type="password" id="password" class="form-input" placeholder="enter your password" required="required">
          </div>
          <div class="form-group right">
            <label for="confirm-password" class="label-title">Confirm Password </label>
            <input type="password" class="form-input" id="confirm-password" placeholder="enter your password again" required="required">
          </div>
        </div>

        <!-- Gender and Hobbies -->
        <div class="horizontal-group">
          <div class="form-group left">
            <label class="label-title">Gender:</label>
            <div class="input-group">
              <label for="male"><input type="radio" name="gender" value="male" id="male"> Male</label>
              <label for="female"><input type="radio" name="gender" value="female" id="female"> Female</label>
              <input type="radio" name="gender" value="others" id="Others">Others</label>
            </div>
          </div>
          <br>
    <input type="submit" value="Register" name="Register">
 </script>

  </body>
</html>