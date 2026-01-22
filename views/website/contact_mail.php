<?php
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // 1. Capture and sanitize simple text inputs
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');

    // Note: 'comapny' matches the typo in your HTML input name="comapny"
    $company = htmlspecialchars($_POST['comapny'] ?? '');
    $budget = htmlspecialchars($_POST['budget'] ?? '');
    $message = htmlspecialchars($_POST['message'] ?? '');

    // 2. Handle the 'Services' checkbox array
    // Since the HTML uses name="services[]", $_POST['services'] will be an array.
    $servicesInput = $_POST['services'] ?? [];
    if (is_array($servicesInput)) {
        $services = htmlspecialchars(implode(', ', $servicesInput));
    } else {
        $services = htmlspecialchars($servicesInput);
    }

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.hostinger.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'contactus@mediaasolutions.com';
        $mail->Password = 'Jaimatadi@2026'; // Be careful exposing credentials in code
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        // Attachments / Images
        $mail->addEmbeddedImage('./public/assets/logos/company.png', 'logo_cid');

        // Recipients
        $mail->setFrom('contactus@mediaasolutions.com', 'Mediaa Solutions');
        $mail->addAddress('nikitach234@gmail.com', 'Mediaa Solutions'); // Add a recipient

        // Content
        $mail->Subject = 'New Project Inquiry: ' . $name;
        $mail->isHTML(true);

        $mail->Body = "
        <div style='max-width: 600px; margin: 0 auto; font-family: Arial, sans-serif; border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.05);'>
        
            <div style='background-color: #f2f2f2; padding: 20px; text-align: center;'>
                <img src='cid:logo_cid' alt='Logo' style='max-width: 180px; height: auto;'>
            </div>
        
            <div style='padding: 30px; background-color: #ffffff;'>
                <h2 style='margin-top: 0; color: #333;'>New Inquiry</h2>
                <p style='color: #555;'>You have received a new inquiry with the following details:</p>
        
                <table style='width: 100%; margin-top: 20px; border-collapse: collapse; font-size: 15px;'>
                    <tbody>
                        <tr>
                            <td style='padding: 10px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold; width: 30%;'>Name</td>
                            <td style='padding: 10px; border: 1px solid #ddd;'>{$name}</td>
                        </tr>
                        <tr>
                            <td style='padding: 10px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;'>Email</td>
                            <td style='padding: 10px; border: 1px solid #ddd;'>{$email}</td>
                        </tr>
                        <tr>
                            <td style='padding: 10px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;'>Company</td>
                            <td style='padding: 10px; border: 1px solid #ddd;'>{$company}</td>
                        </tr>
                        <tr>
                            <td style='padding: 10px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;'>Budget</td>
                            <td style='padding: 10px; border: 1px solid #ddd;'>{$budget}</td>
                        </tr>
                        <tr>
                            <td style='padding: 10px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;'>Services</td>
                            <td style='padding: 10px; border: 1px solid #ddd;'>{$services}</td>
                        </tr>
                        <tr>
                            <td style='padding: 10px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;'>Message</td>
                            <td style='padding: 10px; border: 1px solid #ddd;'>{$message}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        
            <div style='background-color: #f2f2f2; text-align: center; padding: 15px; font-size: 13px; color: #888;'>
                &copy; " . date('Y') . " Mediaa Solutions. All rights reserved.
            </div>
        </div>";

        $mail->send();
        echo json_encode(["success" => true]);
    } catch (Exception $e) {
        error_log("Email Error: " . $mail->ErrorInfo);
        echo json_encode(["success" => false, "error" => $e->getMessage()]);
    }
} else {
    echo json_encode(["success" => false, "message" => "Invalid Request"]);
}
