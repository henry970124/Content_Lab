<?php
define('JWT_SECRET_KEY', 'Id0ntTh1nks0m3OneC4nF1NdM3');
define('JWT_ALGORITHM', 'HS256');

function base64UrlEncode($data) {
    return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
}

function base64UrlDecode($data) {
    return base64_decode(strtr($data, '-_', '+/'));
}

function generateJWT($username, $expiresIn = 3600) {
    $header = json_encode([
        'typ' => 'JWT',
        'alg' => JWT_ALGORITHM
    ]);
    
    $payload = json_encode([
        'username' => $username,
        'iat' => time(),
        'exp' => time() + $expiresIn
    ]);
    
    $base64UrlHeader = base64UrlEncode($header);
    $base64UrlPayload = base64UrlEncode($payload);
    
    $signature = hash_hmac(
        'sha256',
        $base64UrlHeader . "." . $base64UrlPayload,
        JWT_SECRET_KEY,
        true
    );
    $base64UrlSignature = base64UrlEncode($signature);
    
    return $base64UrlHeader . "." . $base64UrlPayload . "." . $base64UrlSignature;
}

function verifyJWT($jwt) {
    $parts = explode('.', $jwt);
    if (count($parts) !== 3) {
        return false;
    }
    
    list($base64UrlHeader, $base64UrlPayload, $base64UrlSignature) = $parts;
    
    $signature = base64UrlDecode($base64UrlSignature);
    $expectedSignature = hash_hmac(
        'sha256',
        $base64UrlHeader . "." . $base64UrlPayload,
        JWT_SECRET_KEY,
        true
    );
    
    if (!hash_equals($signature, $expectedSignature)) {
        return false;
    }
    
    $payload = json_decode(base64UrlDecode($base64UrlPayload), true);
    
    if (isset($payload['exp']) && $payload['exp'] < time()) {
        return false;
    }
    
    return $payload;
}

function getJWTFromCookie() {
    if (!isset($_COOKIE['jwt_token'])) {
        return null;
    }
    
    $payload = verifyJWT($_COOKIE['jwt_token']);
    return $payload;
}