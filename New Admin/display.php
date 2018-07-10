<?php
		
include("db-connection.php");
		
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Farm (Admin) Ahead</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- H_NAV BAR-->
    
	<header>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-black scrolling-navbar">
        <a class="navbar-brand" href="#"><img src="img/nav1.png" alt="Farmahead" height="30px;" width="155px; "></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">                
            </ul>
            <ul class="navbar-nav nav-flex-icons">
                <li class="nav-item" style="font-size:20px">
                    <a class="nav-link" href="acc-admin.php"><i class="fa fa-wrench">&nbsp;Settings</i></a>
                </li>
                <li class="nav-item" style="font-size:20px">
                    <a class="nav-link" href="signout.php"><i class="fa fa-sign-out">&nbsp;Logout</i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>
	
    <!-- /H_NAV BAR-->
	<br/><br/><br/>
	<a class="btn btn-default" href="../New Admin/"><b class="fa fa-level-up">&nbsp;&nbsp;&nbsp;Back</b></a>
	<br/><br/>
	<div class="container" style="text-align: center;">
  <ul class="nav nav-tabs" >
    <li><a data-toggle="tab" href="#menu1" class="btn btn-default"><b>Farmers</b></a></li>
    <li><a data-toggle="tab" href="#menu2" class="btn btn-default"><b>Consumers</b></a></li>
	<li><a data-toggle="tab" href="#menu3" class="btn btn-default"><b>K</b></a></li>
   <!-- <li><a data-toggle="pill" href="#menu3">Menu 3</a></li> -->
  </ul>
  
  <div class="tab-content">
    <div id="menu1" class="tab-pane fade">
	<br/>
      <h3><u>Farmer Details</u></h3>
      <div>
     <table class="table table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
				<th>Address</th>
				<th>City</th>
				<th>State</th>
				<th>Contact No</th>
                
            </tr>
        </thead>
		<?php
		   $sel = "SELECT * FROM f_signup";
		   $result=mysqli_query($conn,$sel);

			if ($result->num_rows > 0) {
   
             while($row = $result->fetch_assoc()) {
		
		?>
        <tbody>
            <tr>
                <td><?php echo $row["farmer_id"]; ?></td>
				<td><?php echo $row["first_name"]; ?></td>
				<td><?php echo $row["address"]; ?></td>
				<td><?php echo $row["city"]; ?></td>
				<td><?php echo $row["state"]; ?></td>
				<td><?php echo $row["phone"]; ?></td>	
            </tr>
        </tbody>
		<?php
		}
		}
		?>
    </table>
      </div>
    </div>
    <div id="menu2" class="tab-pane fade">
	<br/>
      <h3><u>Consumer Details</u></h3>
      <table class="table table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>User Name</th>
				<th>City</th>
				<th>Email</th>
				<th>Phone</th>
            </tr>
        </thead>
		<?php
		   $sel = "SELECT * FROM consumer_signup";
		   $result=mysqli_query($conn,$sel);

			if ($result->num_rows > 0) {
   
             while($row = $result->fetch_assoc()) {
		
		?>
        <tbody>
            <tr>
                <td><?php echo $row["cons_id"]; ?></td>
				<td><?php echo $row["username"]; ?></td>
				<td><?php echo $row["city"]; ?></td>
				<td><?php echo $row["email"]; ?></td>
				<td><?php echo $row["phone"]; ?></td>
            </tr>
        </tbody>
		<?php
		}
		}
		?>
    </table>
    </div>
  </div>
	
	 
	</div>
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>
