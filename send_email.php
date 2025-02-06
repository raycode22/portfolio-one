
<?php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);
// Load PHPMailer
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
require 'phpmailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Rate limiting
$ip = $_SERVER['REMOTE_ADDR'];
$key = "form_submission_$ip";
if (apcu_exists($key)) {
  http_response_code(429);
  die('Too many requests. Please try again later.');
}
apcu_add($key, 1, 60); // 1 request per minute

// Verify CSRF Token
if (!isset($_POST['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
  http_response_code(403);
  die('Invalid CSRF token');
}

// Verify reCAPTCHA
$recaptchaSecret = $_ENV['RECAPTCHA_SECRET'];
$recaptchaResponse = $_POST['recaptcha_response'];
$recaptchaUrl = "https://www.google.com/recaptcha/api/siteverify?secret=$recaptchaSecret&response=$recaptchaResponse";
$recaptchaData = json_decode(file_get_contents($recaptchaUrl));

// if (!$recaptchaData->success || $recaptchaData->score < 0.5) {
//   http_response_code(400);
//   die('reCAPTCHA verification failed');
// }

// Sanitize inputs
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

// Validate inputs
if (empty($name) || empty($email) || empty($message)) {
  http_response_code(400);
  die('All fields are required');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  http_response_code(400);
  die('Invalid email format');
}

// Configure PHPMailer
$mail = new PHPMailer(true);

try {
  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = SMTP_USER; // From config.php
  $mail->Password = SMTP_PASS; // From config.php
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
  $mail->Port = 465;
  $mail->SMTPKeepAlive = true;
  $mail->Timeout = 15;

  // Use your Gmail address or verified alias
  $mail->setFrom(SMTP_USER, 'Website Contact Form');
  $mail->addAddress('your-real@email.com', 'Your Name');
  $mail->addReplyTo($email, $name);

  // Validate inputs
  $name = substr(trim($name), 0, 100);
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    throw new Exception('Invalid email address');
  }

  $mail->isHTML(false);
  $mail->Subject = "New message from: " . $name;
  $mail->Body = "Sender: $name\nEmail: $email\n\nMessage:\n$message";

  $mail->send();
  echo 'Message sent successfully!';
} catch (Exception $e) {
  error_log('Mail Error [' . date('Y-m-d H:i:s') . ']: ' . $e->getMessage());
  http_response_code(500);
  echo 'Error: ' . htmlspecialchars($e->getMessage());
}
