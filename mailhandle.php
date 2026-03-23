<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require 'PHPMailer/src/Exception.php';
// require 'PHPMailer/src/PHPMailer.php';
// require 'PHPMailer/src/SMTP.php';

// if ($_SERVER["REQUEST_METHOD"] == "POST") {

//     $fname   = trim($_POST['first_name']);
//     $lname   = trim($_POST['last_name']);
//     $email   = trim($_POST['email']);
//     $message = trim($_POST['message']);

//     $mail = new PHPMailer(true);

//     try {

//         $mail->isSMTP();
//         $mail->Host       = 'smtp.gmail.com';
//         $mail->SMTPAuth   = true;
//         $mail->Username   = 'shivasammax@gmail.com';         // Your Gmail
//         $mail->Password   = 'xzmg flvn qpby bbhr';           // Gmail App Password
//         $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
//         $mail->Port       = 465;

//         $mail->setFrom('shivasammax@gmail.com', 'Website Contact Form');

//         $mail->addReplyTo($email, "$fname $lname");

//         $mail->addAddress('shivasammax@gmail.com'); // Your inbox

//         $mail->isHTML(false);
//         $mail->Subject = "Contact Form Submission from $fname $lname";
//         $mail->Body    = "Name: $fname $lname\nEmail: $email\n\nMessage:\n$message";

//         $mail->send();
//         echo "Mail Sent. Thank you $fname, we will contact you shortly.";

//     } catch (Exception $e) {
//         echo "Mail Error: {$mail->ErrorInfo}";
//     }
// }
?>

<!-- mail send with Excel file -->

 <?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require 'PHPMailer/src/Exception.php';
// require 'PHPMailer/src/PHPMailer.php';
// require 'PHPMailer/src/SMTP.php';

// require 'vendor/autoload.php'; // PhpSpreadsheet

// use PhpOffice\PhpSpreadsheet\Spreadsheet;
// use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// if ($_SERVER["REQUEST_METHOD"] == "POST") {

//     $fname   = trim($_POST['first_name']);
//     $lname   = trim($_POST['last_name']);
//     $email   = trim($_POST['email']);
//     $message = trim($_POST['message']);

//     // -----------------------------
//     // 1. CREATE EXCEL FILE
//     // -----------------------------
//     $spreadsheet = new Spreadsheet();
//     $sheet = $spreadsheet->getActiveSheet();

//     $sheet->setCellValue('A1', 'First Name');
//     $sheet->setCellValue('B1', 'Last Name');
//     $sheet->setCellValue('C1', 'Email');
//     $sheet->setCellValue('D1', 'Message');

//     $sheet->setCellValue('A2', $fname);
//     $sheet->setCellValue('B2', $lname);
//     $sheet->setCellValue('C2', $email);
//     $sheet->setCellValue('D2', $message);

//     $filePath = __DIR__ . "/submissions.xlsx";  // Full correct path

//     $writer = new Xlsx($spreadsheet);
//     $writer->save($filePath);

//     // -----------------------------
//     // 2. SEND EMAIL WITH ATTACHMENT
//     // -----------------------------
//     $mail = new PHPMailer(true);

//     try {

//         $mail->isSMTP();
//         $mail->Host       = 'smtp.gmail.com';
//         $mail->SMTPAuth   = true;
//         $mail->Username   = 'shivasammax@gmail.com';
//         $mail->Password   = 'xzmg flvn qpby bbhr'; // App Password
//         $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
//         $mail->Port       = 465;

//         $mail->setFrom('shivasammax@gmail.com', 'Website Contact Form');
//         $mail->addAddress('shivasammax@gmail.com');

//         // Add user email for reply
//         $mail->addReplyTo($email, "$fname $lname");

//         // Attach Excel file
//         $mail->addAttachment($filePath);

//         $mail->isHTML(false);
//         $mail->Subject = "Contact Form Submission from $fname $lname";
//         $mail->Body    = "Name: $fname $lname\nEmail: $email\n\nMessage:\n$message";

//         $mail->send();

//         echo "Mail Sent + Excel Attached Successfully.";

//     } catch (Exception $e) {
//         echo "Mail Error: {$mail->ErrorInfo}";
//     }
// }
 ?>


  <?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

require 'vendor/autoload.php'; // PhpSpreadsheet

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fname   = trim($_POST['full-name']);
    $email   = trim($_POST['email']);
    $phno   = trim($_POST['phone-number']);
    $subject   = trim($_POST['subject']);
    $budget   = trim($_POST['budget']);
    $message = trim($_POST['message']);

    // -----------------------------
    // 1. CREATE EXCEL FILE
    // -----------------------------
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    $sheet->setCellValue('A1', 'Full Name');
    $sheet->setCellValue('B1', 'Email');
    $sheet->setCellValue('C1', 'Phone Number');
    $sheet->setCellValue('D1', 'Subject');
    $sheet->setCellValue('E1', 'Budget');
    $sheet->setCellValue('F1', 'Message');

    $sheet->setCellValue('A2', $fname);
    $sheet->setCellValue('B2', $email);
    $sheet->setCellValue('C2', $phno);
    $sheet->setCellValue('D2', $subject);
    $sheet->setCellValue('E2', $budget);
    $sheet->setCellValue('F2', $message);

    $filePath = __DIR__ . "/submissions.xlsx";  // Full correct path

    $writer = new Xlsx($spreadsheet);
    $writer->save($filePath);

    // -----------------------------
    // 2. SEND EMAIL WITH ATTACHMENT
    // -----------------------------
    $mail = new PHPMailer(true);

    try {

        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'shivasammax@gmail.com';
        $mail->Password   = 'xzmg flvn qpby bbhr'; // App Password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

        $mail->setFrom('shivasammax@gmail.com', 'Website Contact Form');
        $mail->addAddress('shivasammax@gmail.com');

        // Add user email for reply
        $mail->addReplyTo($email, "$fname");

        // Attach Excel file
        $mail->addAttachment($filePath);

        $mail->isHTML(false);
        $mail->Subject = "Contact Form Submission from $fname";
        $mail->Body    = "Name: $fname \nEmail: $email\n\nMessage:\n$message";

        $mail->send();

        echo "Mail Sent + Excel Attached Successfully.";

    } catch (Exception $e) {
        echo "Mail Error: {$mail->ErrorInfo}";
    }
}
 ?>