<?php
declare(strict_types=1);
$isHttps = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || (($_SERVER['HTTP_X_FORWARDED_PROTO'] ?? '') === 'https');
session_name('TRINETRA_ADMIN');
session_set_cookie_params(['lifetime'=>0,'path'=>'/','secure'=>$isHttps,'httponly'=>true,'samesite'=>'Strict']);
session_start();
if (($_SERVER['REQUEST_METHOD'] ?? '') === 'POST') {
    $_SESSION = [];
    if (ini_get('session.use_cookies')) { $p=session_get_cookie_params(); setcookie(session_name(), '', time()-42000, $p['path'], $p['domain'] ?? '', $p['secure'], $p['httponly']); }
    session_destroy();
}
header('Location: admin-login.php', true, 303); exit;
