<?php
if (isset($_POST['veg_quantity']) || isset($_POST['non_veg_quantity'])) {
    echo 'ajax';
    $response = array(
        'status' => 0,
        'message' => 'Form submission failed, please try again.',
    );
    echo json_encode($response);

    $org_id = $details1["org_id"];
    $email_id = $details1["email_id"];
    $prg_id = $details["events_id"];
    $event_email_id = $details["email_id"];
    $veg_quantity = $_POST["veg_quantity"];
    $non_veg_quantity = $_POST["non_veg_quantity"];

    $vegdiff = $_POST["veg_quantity"];
    $non_vegdiff = $_POST["non_veg_quantity"];

    if ($veg_quantity <= $details["veg_quantity"] && $non_veg_quantity <= $details["non_veg_quantity"]) {
        $sql = "INSERT INTO quantityy (created_by,org_id,email_id,prg_id,event_email_id,veg_quantity,non_veg_quantity)VALUES($id,$org_id,'$email_id',$prg_id,' $event_email_id',$veg_quantity,$non_veg_quantity)";
        $result = $db->query($sql);

        $vegdiff = $details["veg_quantity"] - $veg_quantity;
        $non_vegdiff = $details["non_veg_quantity"] - $non_veg_quantity;

        $sql = "update events set veg_quantity=' $vegdiff',non_veg_quantity='$non_vegdiff' where events_id='$event_id'";
        $result = $db->query($sql);

    } else {
        echo "Sorry your oder is beyond limit..........!!!!!!!";
    }

    // $to = 'shabanakmmuttil@gmail.com';
    // $subject = 'Fake sendmail test';
    // $message = 'If we can read this, it means that our fake Sendmail setup works!';
    // $headers = 'From: myemail@egmail.com' . "\r\n" .
    // 'Reply-To: myemail@gmail.com' . "\r\n" .
    // 'X-Mailer: PHP/' . phpversion();
    // mail($to, $subject, $message, $headers);
    // if(mail($to, $subject, $message, $headers)) {
    //     echo 'Email sent successfully!';
    // } else {
    //     die('Failure: Email was not sent!');
    // }
}
