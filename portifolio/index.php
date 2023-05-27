<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Add your own code here to process the form data (e.g., send an email, save to a database, etc.)

  // Example: Sending a simple email
  $to = "your-email@example.com";
  $subject = "New message from your portfolio website";
  $emailBody = "Name: $name\n";
  $emailBody .= "Email: $email\n";
  $emailBody .= "Message: $message\n";

  // Uncomment the line below to send the email (make sure your server is properly configured to send emails)
  // mail($to, $subject, $emailBody);

  // Sending a success response back to the frontends
  $response = array(
    "status" => "success",
    "message" => "Message sent successfully"
  );

  echo json_encode($response);
  exit;
}
?>
