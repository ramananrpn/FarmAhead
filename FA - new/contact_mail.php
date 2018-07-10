<script type="text/javascript" src="js/sweetalert.js"></script>
<?php

	if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"]))
	{
		include("db-connection.php");
		$sql="SELECT * from feedback";
		$result=mysqli_query($conn,$sql);
		$rows=mysqli_num_rows($result);
		$d=000;
		$id=$d+$rows;
		$feedid="FEED-".++$id;  
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["ph"];
        $message = $_POST["comments"];
		echo $feedid . "\n" . $name ."\n" . $email ."\n" .$phone;
		$query="INSERT INTO `feedback`(`feed_id`, `feed_name`, `feed_phone`, `feed_email`, `message`) VALUES ('".$feedid."','".$name."','".$phone."','".$email."','".$message."')";
		if(mysqli_query($conn,$query))
		{
			echo '<script>
    setTimeout(function() {
        swal({
            position: "center",
  type: "wrong",
  title: "Thank You!",
  showConfirmButton: false,
  timer: 1500
        });
    });
</script>';
		}
		
	}	 
 /*		 $from = 'From: website contact form'; 
         $to = 'farmahead@gmail.com'; // send to this address
         $subject = 'Contact Form'; //subject line in email
         $headers =  'MIME-Version: 1.0' . "\r\n"; 
          $headers .= 'ramanan' . "\r\n";
         
         $body = "From: $name\n
                  Email: $email\n 
                  Phone: $phone\n 
                 
                  Message:\n $message";

           if (mail($to, $subject, $body, $headers)):
  
       echo "Mail Sent Success";  
    else:
       echo "Error";
    endif; // mail form data
*/
         ?>