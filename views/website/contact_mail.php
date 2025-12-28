<?php
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $phone = htmlspecialchars($_POST['phone'] ?? '');
    $services = htmlspecialchars($_POST['services'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $message = htmlspecialchars($_POST['message'] ?? '');

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'rudratech.karthik1@gmail.com';
        $mail->Password = 'wcco uwbe zrtp eszg';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        $mail->addEmbeddedImage('./public/assets/images/logo2.jpg', 'logo_cid');

        $mail->setFrom('rudratech.karthik1@gmail.com', 'Animocare PVT LTD');
        $mail->addAddress('info@animocare.com', 'Animocare PVT LTD');
        $mail->Subject = 'Inquiry';
        $mail->isHTML(true);
        $mail->Body = "
        <div style='max-width: 600px; margin: 0 auto; font-family: Arial, sans-serif; border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.05);'>
        
            <!-- Header with Logo -->
            <div style='background-color: #f2f2f2; padding: 20px; text-align: center;'>
                <img src='cid:logo_cid' alt='Aartha Logo' style='max-width: 150px; height: auto;'>
            </div>
        
            <!-- Content -->
            <div style='padding: 30px; background-color: #ffffff;'>
                <h2 style='margin-top: 0; color: #333;'>New Inquiry</h2>
                <p style='color: #555;'>You have received a new inquiry with the following details:</p>
        
                <table style='width: 100%; margin-top: 20px; border-collapse: collapse; font-size: 15px;'>
                    <tbody>
                        <tr>
                            <td style='padding: 10px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;'>Name</td>
                            <td style='padding: 10px; border: 1px solid #ddd;'>{$name}</td>
                        </tr>
                        <tr>
                            <td style='padding: 10px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;'>Phone</td>
                            <td style='padding: 10px; border: 1px solid #ddd;'>{$phone}</td>
                        </tr>
                        <tr>
                            <td style='padding: 10px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;'>Email</td>
                            <td style='padding: 10px; border: 1px solid #ddd;'>{$email}</td>
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
        
            <!-- Footer -->
            <div style='background-color: #f2f2f2; text-align: center; padding: 15px; font-size: 13px; color: #888;'>
                &copy; " . date('Y') . "Animocare Private Limited. All rights reserved.
            </div>
        </div>";


        $mail->send();
        echo json_encode(["success" => true]);
    } catch (Exception $e) {
        error_log("Email Error: " . $mail->ErrorInfo);
        echo json_encode(["success" => false, "error" => $e->getMessage()]);
    }
} else {
    echo json_encode(["success" => false]);
}
