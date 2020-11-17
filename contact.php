<html lang="en">
 
    <head>
 
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contact Us</title>
 
        <!-- CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
 
        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
 
    </head>
    <body>
 
    <!-- Top content -->
        <div class="top-content">
             
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <div class="description">
                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                            <div class="form-top">
                                <h3>Contact us</h3>
                                <p>Fill in the form below to send us a message:</p>
                            </div>
                            <div class="form-bottom contact-form">
                                <form role="form" action="" method="post">
                                    <div class="form-group">
                                        <label class="sr-only" for="contact-email">Email</label>
                                        <input type="text" name="email" placeholder="Email..." class="contact-email form-control" id="contact-email">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="contact-subject">Subject</label>
                                        <input type="text" name="subject" placeholder="Subject..." class="contact-subject form-control" id="contact-subject">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="contact-message">Message</label>
                                        <textarea name="message" placeholder="Message..." class="contact-message form-control" id="contact-message"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="contact-antispam">Antispam question: 7 + 5 = ?</label>
                                        <input type="text" name="antispam" placeholder="Your answer..." class="contact-antispam form-control" id="contact-antispam">
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Send message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             
        </div>





<?php 

if(isset($_POST['submit'])){

$to = ""; #Your Email
$subject = $_POST['subject'];
$msg = $_POST['message'];
$header = "Message From".$_POST['email'];
$anti_spam = $_POST['antispam'];

if($anti_spam != 12 || $anti_spam = NULL){
 echo "Sorry your answer was wrong or you did not enter anything in, Please try again";
}else{

	echo "<p class = 'bg-success'>Your message has been sent</p>";
	
}


mail($to, $subject, $msg,$header);




}
















?>
