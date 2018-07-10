<?php
  
  session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Administrator</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="bootstrap.min.js"></script>
<style type="text/css">
	
.algn{
	
	color:blue;	
	
};

</style>

</head>
<body>
<div class="container" style="border-radius: 179px; width: 1200px; background-color: grey; margin-top: 200px; margin-left:100px; margin-right: 100px; ">
  <h2><center><u>Adminstrator</u></center></h2>
  <br>
  <form class="form-horizontal" role="form" style="margin-right: 350px; margin-left: 350px;" method="POST" action="tag_admin.php">
    <div class="form-group">
      <label class="control-label col-sm-2">UID :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="uid" placeholder="Enter Admin ID" maxlength="10" required="">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" name="pwd" placeholder="Enter Password" maxlength="10" required="">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox" style="padding-left: 200px;">
          <label><input type="checkbox"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10" style="padding-left: 150px">
        <button type="submit" class="btn btn-default" style="background-color:green"><b>Login</b></button>
      </div>
    </div>
  </form>
</div>

</body>
</html>