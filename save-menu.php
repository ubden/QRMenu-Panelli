<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
    exit;
}

$input = json_decode(file_get_contents('php://input'), true);
if (!$input || !isset($input['user']) || !isset($input['data'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Missing user or data']);
    exit;
}

$user = basename($input['user']);
$data = $input['data'];
$path = __DIR__ . '/nook/' . $user . '.json';

if (file_put_contents($path, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)) !== false) {
    echo json_encode(['status' => 'ok']);
} else {
    http_response_code(500);
    echo json_encode(['error' => 'Failed to save']);
}
?>
