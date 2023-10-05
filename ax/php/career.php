<?php 
 
 if(isset($_POST['submit']))
{	 
	$email = $_REQUEST['email']; // this is the sender's Email address
	
    $name = $_REQUEST['name'];
	
    $phone = $_REQUEST['phone'];
      
	$services = $_REQUEST['services'];
	
	$comment = $_REQUEST['comment'];      
 	 
	$subject1="Mail Received";
	
       $header1="Career";
$message="Thank You for the  Registration. We will get back you soon.";
$header="Careers";
$to1="senthi.ecfile@gmail.com";
$subject="Career";
  
$message1 ="Name:".$name ."\n\n" . "Email:".$email ."\n\n" . "Phone:" .$phone  .  "\n\n" ."Message:". $services."\n\n" ."\n\n" . $ $comment; 
mail($email,$phone,$email,$message,$header);
mail($to1,$subject1,$message1,$header1);
header("Location:index.html?mailsend");

$message_sent=true;
 
}
?>

