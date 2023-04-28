<!DOCTYPE html>
<html>
<style>
body {
  font-family: Arial;
}

input[type=text],[type=email], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 40%;
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div.container {
    width: 50%;
  border-radius: 5px;
  background-image: linear-gradient(to right, red , purple);
  padding: 20px;
  margin-left:20%;
}

.text-danger{
  color: #fff;
}

h3{
        text-align:center;
      }
      .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 10px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  float:left;
}
      .button2 {
        background-color: #008CBA;
      } /* Blue */
</style>
<body>
<div class="container">
<a class="button button2" href="<?php echo e(url()->previous()); ?>"><button> Back</button> </a><br>
<h3 class="text-center">Add Employee Form</h3>





  <form action="<?php echo e(route('emp_data.store')); ?>" method="post" >
    <?php echo csrf_field(); ?>
    <div class="form-group">
    <label for="fname"><b>User Name</b></label>
    <input type="text" id="fname" name="username" value="<?php echo e(old('username')); ?>" placeholder="Enter Your name..">
    <?php if($errors->has('username')): ?> <span class="text-danger"><?php echo e($errors->first('username')); ?></span> <?php endif; ?>
    </div>
   
    <div class="form-group">
    <label for="email"><b>Email</b></label>
    <input type="email" id="lname" name="email" value="<?php echo e(old('email')); ?>" placeholder="Enter Your Email..">
    <?php if($errors->has('email')): ?> <span class="text-danger"><?php echo e($errors->first('email')); ?></span> <?php endif; ?>
   </div>

   <div class="form-group">
    <label for="phone"><b>Phone No</b></label>
    <input type="text" id="lname" name="phone" value="<?php echo e(old('phone')); ?>" placeholder="Enter Your Phone No..">
    <?php if($errors->has('phone')): ?> <span class="text-danger"><?php echo e($errors->first('phone')); ?></span> <?php endif; ?>
</div>

   <div class="form-group">
    <label for="country"><b>Gender</b></label>
    <select id="country" name="gender">
      <option value="">Select Gender</option>
      <option value="male">Male</option>
      <option value="female">Female</option>
     </select>
     <?php if($errors->has('gender')): ?> <span class="text-danger"><?php echo e($errors->first('gender')); ?></span> <?php endif; ?>
</div>
    <input type="submit" value="Submit">
  </form>
</div>


</body>
</html>
<?php /**PATH C:\Laravel Code\Employee_Data\resources\views/employee_data/create.blade.php ENDPATH**/ ?>