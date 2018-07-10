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
	<br/><br/><br/><br/>
	<a class="btn btn-default" href="../New Admin/"><i class="fa fa-level-up">&nbsp;&nbsp;&nbsp;Back</i></a>
	<div class="container">
	<div style="font-size:40px;text-align:center;">Requested Crops</div>
	<br/><br/>
	 <table class="table table-hover" >
        <thead>
            <tr align="center">
                <th>Category Id</th>
                <th>Category</th>
				<th style="width:500px;">Requested Crop</th>
				<th>Actions</th>
            </tr>
        </thead>
		<?php
		   $sel = "SELECT * FROM requestcrop ORDER BY req_id ASC";
		   $result=mysqli_query($conn,$sel);

			if ($result->num_rows > 0) {
   
             while($row = $result->fetch_assoc()) {
		
		?>
        <tbody>
            <tr align="center">
                <td><?php echo $row["ctg_id"]; ?></td>
				<td><?php echo $row["category"]; ?></td>
				<td><?php echo $row["req_crop"]; ?></td>
				<td><?php echo '<center>
				<a href="#?req_id='.$row["req_id"].'" class="btn btn-default">Add</a>
				&nbsp;&nbsp;
				<a href="#?req_id='.$row["req_id"].'" class="btn btn-default">Remove</a> 
				</center>
				'?></td>
            </tr>
        </tbody>
		<?php
		}
		}
		?>
    </table>
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
