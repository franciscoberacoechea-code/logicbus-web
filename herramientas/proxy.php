<?php
// ============================================================
// PROXY SEGURO — API GEMINI (Google)
// Logicbus México — Herramientas Internas
// ============================================================
// Configura GEMINI_API_KEY en el entorno del proceso PHP.
$API_KEY = getenv('GEMINI_API_KEY');
// ============================================================

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Content-Type');
header('Access-Control-Allow-Methods: POST, OPTIONS');

$method = strtoupper(trim($_SERVER['REQUEST_METHOD']));

if ($method === 'OPTIONS') {
    http_response_code(200);
    exit;
}

if ($method !== 'POST') {
    http_response_code(405);
    echo json_encode([
        'error' => 'Method not allowed',
        'details' => 'El script esperaba POST, pero recibió: ' . $method
    ]);
    exit;
}

if ($API_KEY === false || $API_KEY === '') {
    http_response_code(503);
    echo json_encode(['error' => 'Service is not configured']);
    exit;
}

$body = file_get_contents('php://input');
if (!$body) {
    http_response_code(400);
    echo json_encode(['error' => 'Empty body']);
    exit;
}

// Endpoint sintonizado con el modelo Gemini 3.5 Flash
$url = 'https://generativelanguage.googleapis.com/v1beta/models/gemini-3.1-flash-lite:generateContent?key=' . $API_KEY;

$ch = curl_init($url);
curl_setopt_array($ch, [
    CURLOPT_POST           => true,
    CURLOPT_POSTFIELDS     => $body,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER     => [
        'Content-Type: application/json'
    ],
    CURLOPT_TIMEOUT        => 120,
]);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$error    = curl_error($ch);
curl_close($ch);

if ($error) {
    http_response_code(500);
    echo json_encode(['error' => 'cURL error: ' . $error]);
    exit;
}

http_response_code($httpCode);
echo $response;
?>