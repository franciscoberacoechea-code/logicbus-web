<?php
// ============================================================
// PROXY SEGURO — API Anthropic
// Logicbus México — Herramientas Internas
// ============================================================
// Configura ANTHROPIC_API_KEY en el entorno del proceso PHP.
$API_KEY = getenv('ANTHROPIC_API_KEY');
// ============================================================

// Solo permitir desde el mismo dominio
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Content-Type');
header('Access-Control-Allow-Methods: POST, OPTIONS');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
    exit;
}

if ($API_KEY === false || $API_KEY === '') {
    http_response_code(503);
    echo json_encode(['error' => 'Service is not configured']);
    exit;
}

// Leer el body que viene del HTML
$body = file_get_contents('php://input');
if (!$body) {
    http_response_code(400);
    echo json_encode(['error' => 'Empty body']);
    exit;
}

// Reenviar a la API de Anthropic
$ch = curl_init('https://api.anthropic.com/v1/messages');
curl_setopt_array($ch, [
    CURLOPT_POST           => true,
    CURLOPT_POSTFIELDS     => $body,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER     => [
        'Content-Type: application/json',
        'x-api-key: ' . $API_KEY,
        'anthropic-version: 2023-06-01',
        'anthropic-beta: interleaved-thinking-2025-05-14'
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
