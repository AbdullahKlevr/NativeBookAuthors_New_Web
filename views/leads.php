<?php
require '../PHPMailer-master/src/Exception.php';
require '../PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer-master/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? 'Unknown';
    $email = $_POST['email'] ?? 'Unknown';
    $number = $_POST['phone'] ?? 'Unknown';
    $msg = $_POST['brief'] ?? 'No message provided';
    
    
    
    // Get the user's IP address
    $ip = $_SERVER['REMOTE_ADDR'];

    // Initialize location variables
    $country = $state = $city = $code = $longitude = $latitude = "Unknown";

    // Get location data from IP
    $locationData = json_decode(file_get_contents("http://ip-api.com/json/{$ip}"));

    // Log the response for debugging
    error_log(print_r($locationData, true));

    if ($locationData && $locationData->status === 'success') {
        $country = ucfirst(strtolower($locationData->country));
        $state = ucfirst(strtolower($locationData->regionName));
        $city = ucfirst(strtolower($locationData->city));
        $code = $locationData->countryCode;
        $longitude = $locationData->lon; // Longitude
        $latitude = $locationData->lat; // Latitude
    }

    // Capture additional fields
    $lb_source = $_POST['lb_source'] ?? 'Organic';

    // Get the referring page URL
    $referring_url = $_SERVER['HTTP_REFERER'] ?? 'Direct Access';

    $mail = new PHPMailer(true);

    try {
        // SMTP settings
        $mail->isSMTP();
        $mail->Host       = 'premium280.web-hosting.com';  // Your SMTP server address
        $mail->SMTPAuth   = true;
        $mail->Username   = 'info@nativebookauthors.com'; // Your SMTP username
        $mail->Password   = 'KlevrM@321@123'; // Your SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Use SSL/TLS
        $mail->Port       = 465; // SMTP port

        // Recipients
        $mail->setFrom('info@nativebookauthors.com', 'Book Publisher House');
        $mail->addAddress('info@nativebookauthors.com'); // Recipient email address

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Lead';
        $mail->Body    = "<h1>New Form Submission</h1>
                          <p><strong>Name:</strong> $name</p>
                          <p><strong>Email:</strong> $email</p>
                          <p><strong>Phone:</strong> $number</p>
                          <p><strong>Message:</strong><br> $msg</p>
                        
                          <p><strong>Lead Source:</strong> $lb_source</p>
                          <p><strong>Country Code:</strong> $code</p>
                          <p><strong>Country:</strong> $country</p>
                          <p><strong>State:</strong> $state</p>
                          <p><strong>City:</strong> $city</p>
                          <p><strong>Longitude:</strong> $longitude</p>
                          <p><strong>Latitude:</strong> $latitude</p>
                          <p><strong>Referring URL:</strong> $referring_url</p>";

        // Send the email
        $mail->send();
        // Redirect to thank you page
        header('Location: /thankyou');
        exit();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
