<?php
require 'common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>👤Users Form</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="login-box">
  <h1>User Form</h1>
  <form action="user.php" method="POST" enctype="multipart/form-data">
  <div class="textbox">
    <input type="text" placeholder="Name" name="name" required="" value="">
  </div>

 <div class="textbox">
    <input type="text" placeholder="Email" name="email" required="" value="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
  </div>
  <div class="textbox">
    <input type="text" placeholder="Enter Number" name="contact" required="" value="">
  </div>
  <div class="textbox">
<!--      <input type="text" name="dob" placeholder="Enter DOB: YYYY-MM-DD" required value=""
pattern="(?:19|20)\[0-9\]{2}-(?:(?:0\[1-9\]|1\[0-2\])-(?:0\[1-9\]|1\[0-9\]|2\[0-9\])|(?:(?!02)(?:0\[1-9\]|1\[0-2\])-(?:30))|(?:(?:0\[13578\]|1\[02\])-31))"/>
  -->
  <input type="text" name="dob" placeholder="Enter DOB" onfocus="(this.type='date')" required="" value="">
  </div>
  <div class="textbox">
    <input type="text" placeholder="PIN Code" name="pin" required="" value="">
  </div>

      <input type="submit" class="btn" value="Submit">
</div>
        </form>
    </body>
</html>
