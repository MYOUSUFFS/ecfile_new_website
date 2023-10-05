<?php


$EmailTo = "senthil.ecfile@gmail.com";
$Subject = "New Message Received";

$success = false;
$errorMSG = array();
$fname = $lname = $email = $phone = $subject = $message = null;
$fields = array(
    'fname' => "Name is required ",
    'lname' => "Name is required ",
    'email' => "Email is required ",
    'phone' => "Phone is required ",
    'subject' => "Subject is required ",
    'message' => "Message is required "
);

foreach($fields as $key => $e_message){
    if (empty($_POST[$key])) {
        $errorMSG[] = $e_message;
    } else {
        $$key = $_POST[$key];
    }
}

// prepare email body text
$Body = null;
$Body .= "<p><b>First Name:</b> {$fname}</p>";
$Body .= "<p><b>Last Name:</b> {$lname}</p>";
$Body .= "<p><b>Email:</b> {$email}</p>";
$Body .= "<p><b>Phone:</b> {$phone}</p>";
$Body .= "<p><b>Subject:</b> {$subject}</p>";
$Body .= "<p><b>Message:</b> </p><p>{$message}</p>";

// send email

$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";



$headers .= 'From:  ' . $first_name . ' <' . $email .'>' . " \r\n" .
            'Reply-To: '.  $email . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

if($fname && $lname && $email && $phone && $subject && $message){
    $success = mail($EmailTo, $Subject, $Body, $headers );
}

if(empty($errorMSG)){
    $errorMSG[] = "Something went wrong :(";
}

echo json_encode(array(
    'success' => $success,
    'message' => $errorMSG
));

die();

<section class="call-back-wrap">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-5 col-md-12">
                        <div class="call-back-box1">
                            <h3 class="section-title">Request a Call Back</h3>
                            <form class="message-box">
                                <div class="row">
                                    <div class="form-group col-lg-12">
                                        <input type="text" class="form-control" id="inputAddress1" placeholder="Name">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <input type="text" class="form-control" id="inputAddress2" placeholder="Email">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <input type="text" class="form-control" id="inputAddress3" placeholder="Phone">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <textarea name="comment" id="message" class="form-control" placeholder="Message" cols="30" rows="4"></textarea>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <a href="about.html" class="item-btn">Submit Now</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div class="call-back-box2">
                            <div class="item-img">
                                <img src="img/blog/blog4.jpg" alt="blog" width="690" height="582">
                                <div class="call-img">
                                    <img src="img/figure/figure11.png" alt="figure" width="145" height="295">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>    
      
