<?php
$file = __DIR__ . '/download/Ray_Enriquez_Resume.pdf';
if (file_exists($file)) {
  header('Content-Description: File Transfer');
  header('Content-Type: application/pdf');
  header('Content-Disposition: attachment; filename="' . basename($file) . '"');
  header('Expires: 0');
  header('Cache-Control: must-revalidate');
  header('Pragma: public');
  header('Content-Length: ' . filesize($file));
  flush();
  readfile($file);
  exit;
} else {
  echo "The file does not exist.";
}
