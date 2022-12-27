<?php
include "db.php";
if (!isset($_SESSION['id'])) {
    header("location:order.php");
}
$getid = $_SESSION['id'];
$decoded = base64_decode($getid);
$decoded_encoding = 'iso-2022-jp';
$id = iconv($decoded_encoding, 'UTF-8', $decoded);

$event_id = null;
if (isset($_GET['event_id'])) {
    $get_event_id = $_GET['event_id'];
    $event_id = intval($get_event_id);
}
?>
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Send Mail</title>
      <link rel="stylesheet" href="./static/css/mail.css">
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

                  $user1 = "SELECT * FROM `organization`  where created_by='$id'";
                  $result1 = mysqli_query($db, $user1);
                  $details1 = mysqli_fetch_array($result1);
                  
                  $user = "SELECT * FROM `events`  where events_id='$event_id'";
                  $result = mysqli_query($db, $user);
                  $details = mysqli_fetch_array($result);

                  if(isset($_POST['send'])){

                     //access user entered data
                    
                     $email_id = $details1["email_id"];
                     $subject = $_POST['subject'];
                     $email2_id = $details["events_email_id"];
                  
                     
                   
                     // $message = $_POST['message'];
                     $sender = "From: $email_id";
                     //if user leave empty field among one of them
                     if(empty($email_id) || empty($subject) || empty($message)){
                         ?>
                     <!-- display an alert message if one of them field is empty -->
                     <div class="alert alert-danger text-center">
                        <?php echo "All inputs are required!" ?>
                     </div>
                     <?php
                        }else{
                           // PHP function to send mail
                           if(mail($email_id, $subject, $message, $email2_id)){
                           ?>
                     <!-- display a success message if once mail sent sucessfully -->
                     <div class="alert alert-success text-center">
                        <?php echo "Your mail successfully sent to $email_id"?>
                     </div>
                     <?php
                        $email_id = "";
                        }else{
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
                        <form action="mail.php" method="POST">
                        <div class="form-group">


                         <input type="email" id="email" value="<?php echo $details1 != null ? $details1['email_id'] : ''; ?>" placeholder="enter email">
                        </div>
                        <div class="form-group">
                           <input class="form-control" name="subject" type="text" placeholder="Subject">
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