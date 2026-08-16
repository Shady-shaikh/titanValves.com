<?php
/**
 * Standalone Zero-Database Email Form Handler
 * Titan Flow Valves
 * 
 * Flow: Visitor -> Form -> Validation -> Email -> info@titanflowvalves.com
 * NO database writes or storage exist in this script.
 */

header('Content-Type: application/json; charset=UTF-8');

// Ensure request is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(array('success' => false, 'message' => 'Method not allowed.'));
    exit;
}

// 1. Anti-spam honeypot detection
if (!empty($_POST['ak_hp_textarea'])) {
    echo json_encode(array('success' => false, 'message' => 'Spam submission detected.'));
    exit;
}

// 2. Extract and sanitize fields
function clean_input($data) {
    return htmlspecialchars(strip_tags(trim($data)), ENT_QUOTES, 'UTF-8');
}

$name        = isset($_POST['g29-name']) ? clean_input($_POST['g29-name']) : (isset($_POST['titan_name']) ? clean_input($_POST['titan_name']) : '');
$phone       = isset($_POST['g29-phone']) ? clean_input($_POST['g29-phone']) : (isset($_POST['titan_phone']) ? clean_input($_POST['titan_phone']) : '');
$email       = isset($_POST['g29-email']) ? filter_var(trim($_POST['g29-email']), FILTER_SANITIZE_EMAIL) : (isset($_POST['titan_email']) ? filter_var(trim($_POST['titan_email']), FILTER_SANITIZE_EMAIL) : '');
$brand       = isset($_POST['g29-selectbrand']) ? clean_input($_POST['g29-selectbrand']) : (isset($_POST['titan_brand']) ? clean_input($_POST['titan_brand']) : '');
$power_tool  = isset($_POST['g29-selectpowertool']) ? clean_input($_POST['g29-selectpowertool']) : (isset($_POST['titan_powertool']) ? clean_input($_POST['titan_powertool']) : '');
$product     = isset($_POST['g29-selectproduct']) ? clean_input($_POST['g29-selectproduct']) : (isset($_POST['titan_product']) ? clean_input($_POST['titan_product']) : '');
$description = isset($_POST['g29-productdescription']) ? clean_input($_POST['g29-productdescription']) : (isset($_POST['titan_message']) ? clean_input($_POST['titan_message']) : '');

// 3. Validation
if (empty($name)) {
    echo json_encode(array('success' => false, 'message' => 'Please provide your name.'));
    exit;
}
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(array('success' => false, 'message' => 'Please provide a valid business email address.'));
    exit;
}
if (empty($brand)) {
    echo json_encode(array('success' => false, 'message' => 'Please select a brand.'));
    exit;
}
if (empty($description)) {
    echo json_encode(array('success' => false, 'message' => 'Please provide your product description or requirement details.'));
    exit;
}

// 4. Construct Email
$to = 'info@titanflowvalves.com';
$subject = 'New Website Inquiry from ' . $name . ' [' . ($brand ? $brand : 'General') . ']';

$body  = "You have received a new inquiry from the Titan Flow Valves website:\n\n";
$body .= "--------------------------------------------------\n";
$body .= "Name:               " . $name . "\n";
$body .= "Email:              " . $email . "\n";
$body .= "Phone:              " . ($phone ? $phone : 'Not provided') . "\n";
$body .= "Selected Brand:     " . $brand . "\n";
$body .= "Selected Power Tool:" . ($power_tool ? $power_tool : 'N/A') . "\n";
$body .= "Selected Product:   " . ($product ? $product : 'N/A') . "\n";
$body .= "--------------------------------------------------\n\n";
$body .= "Product Requirement / Description:\n";
$body .= $description . "\n\n";
$body .= "--------------------------------------------------\n";
$body .= "Sent Date: " . date('Y-m-d H:i:s') . "\n";

$headers  = "From: Titan Flow Valves <info@titanflowvalves.com>\r\n";
$headers .= "Reply-To: " . $name . " <" . $email . ">\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// 5. Send via PHP mail
@mail($to, $subject, $body, $headers);

// NO database storage is performed.
echo json_encode(array(
    'success' => true,
    'message' => 'Thank you for contacting Titan Flow Valves! Your enquiry has been received and routed directly to info@titanflowvalves.com. Our engineering and sales team will be in touch shortly.'
));
exit;
