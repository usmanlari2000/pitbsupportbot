<?php
$allowedOrigin = 'YOUR_ALLOWED_ORIGIN_HERE';

if (isset($_SERVER['HTTP_ORIGIN']) && $_SERVER['HTTP_ORIGIN'] === $allowedOrigin) {
    header("Access-Control-Allow-Origin: $allowedOrigin");
} else {
    http_response_code(403);
    echo json_encode(['error' => 'CORS policy: origin not allowed']);
    exit;
}

header("Access-Control-Allow-Headers: Content-Type");
header("Access-Control-Allow-Methods: POST, OPTIONS");

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method Not Allowed']);
    exit;
}

$raw = file_get_contents('php://input');
$data = json_decode($raw, true);

if (!$data || !isset($data['messages']) || !is_array($data['messages'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Bad Request: messages array required']);
    exit;
}

$systemPrompt = "You are an assistant responsible for answering employee queries at the Punjab Information Technology Board (PITB). Only answer queries that fall within your defined responsibilities. Use only the provided context to answer. Keep your response concise.";

$context = [
    "Provident Fund (PF) Enrollment
Topic: PF Enrollment Process 
• When activated: Your PF status is activated in HRIS.
• Next steps (automated email): You will receive an email from HRIS (check your inbox and spam folder).
• Action required by employee: Complete the form, upload the affidavit, and fill the survey by the specified deadline in the email.
• Benefit: Ensures your PF contributions are processed smoothly.",
    "Health Insurance Claims (Non-Panel Hospitals)
Topic: Health Insurance Claims for Non-Panel Hospitals 
Provider: EFU Insurance Company.
• Policy: PITB's corporate health insurance (Master Policy ID: EM/001055-00).
• Scenario: For visits to hospitals NOT on EFU's approved panel list.
• How to submit: Claims must be submitted along with all original supporting receipts and the duly attested doctor's form.
• Required documents:
  o Completed EFU Health Insurance Claim Form.
  o Original Medical Bills/Invoices.
  o Original Prescriptions.
  o Diagnostic Reports (if applicable).
  o Discharge Summary (for hospitalization).
  o Copy of Employee's CNIC.
  o Copy of Patient's CNIC/B-Form (if dependent).
  o Doctor's Recommendation/Prescription.",
    "HR Service Delivery Overview
Topic: HR Services Overview / How HR Can Help You 
Self-Service Portal: Access personal information, leave requests, payslips, benefits, and company policies."
];

$messages = [
    [
        "role" => "system",
        "content" => $systemPrompt . "\n\nContext:\n" . implode("\n---\n", $context),
    ],
];

foreach ($data['messages'] as $msg) {
    $messages[] = $msg;
}

$apiKey = "YOUR_OPENAI_API_KEY_HERE";

$postData = [
    "model" => "gpt-5-mini",
    "messages" => $messages,
];

$ch = curl_init('https://api.openai.com/v1/chat/completions');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Authorization: Bearer ' . $apiKey,
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($httpCode !== 200) {
    http_response_code($httpCode);
    echo $response;
    exit;
}

$result = json_decode($response, true);

$output = $result['choices'][0]['message']['content'] ?? null;

if (!$output) {
    http_response_code(500);
    echo json_encode(['error' => 'No output from OpenAI']);
    exit;
}

echo json_encode(['output' => $output]);
