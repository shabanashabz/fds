<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Send Mail From Localhost | CodingNepal</title>
      <link rel="stylesheet" href="mailstyle.css">
      <!-- bootstrap cdn link -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   </head>
   <body>
      <div class="container">
         <div class="row">
            <div class="col-md-4 offset-md-4 mail-form">
               <h2 class="text-center">
                  Send Message
               </h2>
               <p class="text-center">
                  Send mail to anyone from localhost.
               </p>
               <!-- starting php code -->
               <?php
//first we leave this input field blank
$recipient = "";
//if user click the send button
if (isset($_POST['send'])) {
    //access user entered data
    $recipient = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $sender = "From:fooddonationsystems@gmail.com";
    //if user leave empty field among one of them
    include_once "mailer.php";
    $mail->setFrom(EMAIL, 'Profile Generator GEC Idukki');
    $mail->addAddress($recipient);
    $mail->addReplyTo(EMAIL);
    $mail->isHTML(true);
    $mail->Subject = 'Registration details of Profile Generator';
    $mail->Body = "<h1>Donot share your password</h1>Congratulations! You have successfully registered in Profile Generator GEC Idukki,
                 <br>Your User Id is <b></b><br>Password is:<b>
                 </b><br>Please note the login details for all further communication
                 with us.";

    if (!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }
    if (empty($recipient) || empty($subject) || empty($message)) {
        ?>
               <!-- display an alert message if one of them field is empty -->
               <div class="alert alert-danger text-center">
                  <?php echo "All inputs are required!" ?>
               </div>
               <?php
} else {
        // PHP function to send mail
        if (mail($recipient, $subject, $message, $sender)) {
            ?>
               <!-- display a success message if once mail sent sucessfully -->
               <div class="alert alert-success text-center">
                  <?php echo "Your mail successfully sent to $recipient" ?>
               </div>
               <?php
$recipient = "";
        } else {
            ?>
               <!-- display an alert message if somehow mail can't be sent -->
               <div class="alert alert-danger text-center">
                  <?php echo "Failed while sending your mail!" ?>
               </div>
               <?php
}
    }
}
?> <!-- end of php code -->
               <form action="mailing.php" method="POST">
                  <div class="form-group">
                     <input class="form-control" name="email" type="email" placeholder="Recipients" value="<?php echo $recipient ?>">
                  </div>
                  <div class="form-group">
                     <input class="form-control" name="subject" type="text" placeholder="Subject">
                  </div>
                  <div class="form-group">
                     <input class="form-control" name="message" type="text" placeholder="message">
                  </div>
                  <div class="form-group">
                     <!-- change this tag name into textarea to show textarea field. Due to more textarea I got an error, so I change the name of this field -->
                     <!-- <changeit cols="30" rows="5" class="form-control textarea" name="message" placeholder="Compose your message.."></changeit> -->
                  </div>
                  <div class="form-group">
                     <input class="form-control button btn-primary" type="submit" name="send" value="Send" placeholder="Subject">
                  </div>
               </form>
            </div>
         </div>
      </div>
   </body>
</html>