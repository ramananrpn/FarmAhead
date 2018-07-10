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
        <a class="navbar-brand" href=""><img src="img/nav1.png" alt="Farmahead" height="30px;" width="155px; "></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home </a>
                </li>
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
	<div class="container">
		<div class="row" style="position:relative;text-align:center;top:120px;height:450px;">
			<div class="col-sm-4 col-lg-4 col-md-4" style="background-color:#ff8000;"> 
				<br/><br/>
				<div  style="color:white;"><b style="font-size:30px;">Add and Update User Details</b></div><br/><br/>
				<!--<a class=" btn btn-warning" href="add.php">Add New</a>
				<a class=" btn btn-warning" href="delete.php">Update</a>-->
				<a class=" btn btn-warning" href="display.php">Display</a>
			</div><br/>
			<div class="col-sm-4 col-lg-4 col-md-4" style="background-color:white;"> 
				<br/><br/><br/><br/>
				<div  style="color:blue;"><b style="font-size:30px;">Requested Crops</b></div><br/>
				<div class="row">
				<div class="col-sm-12 col-lg-12 col-md-12"><a class="btn btn-default blue" href="viewreq.php">View Crops</a></div> 
				</div>
			</div><br/>
			<div class="col-sm-4 col-lg-4 col-md-4" style="background-color:green;"> 
				<br/><br/><br/><br/>
				<div  style="color:white;"><b style="font-size:30px;">Feedbacks Report</b></div><br/>
				<div class="row">
				<div class="col-sm-12 col-lg-12 col-md-12"><a class="btn btn-success green" href="viewfeeds.php">View</a></div> 
				</div>
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
