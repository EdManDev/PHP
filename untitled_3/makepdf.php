<?php
  require_once __DIR__ . './libraries/vendor/autoload.php';
  
  // grab variable
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  // Create a new PDF instance
  $mpdf = new \Mpdf\Mpdf();

  //create our PDF
  $data ='';
  
  $data .= '<h1>Your Details</h1>';
  $data .= '<p>Your Form Sir</p>';

  // Add data
  $data .='<strong style="">First name</strong>: '. $fname .'<br />';
  $data .='<strong>Last Name</strong>: '. $lname .'<br />';
  $data .='<strong>Email</strong>: '. $email .'<br />';
  $data .='<strong>Pnone</strong>: '. $phone .'<br />';

  if ($message) {
    $data .='<strong>Message:</strong> '. $message .'<br />';
  }

  // Write PDF
  $mpdf-> WriteHTML($data);

  // Output to Browser
  $mpdf->Output('myfile.pdf','D');

?>