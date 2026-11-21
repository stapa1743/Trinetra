<?php
declare(strict_types=1);
$isHttps = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || (($_SERVER['HTTP_X_FORWARDED_PROTO'] ?? '') === 'https');
session_name('TRINETRA_ADMIN');
session_set_cookie_params(['lifetime'=>0,'path'=>'/','secure'=>$isHttps,'httponly'=>true,'samesite'=>'Strict']);
ini_set('session.use_strict_mode','1');
session_start();
if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') { header('Location: admin-login.php'); exit; }
$csrf = (string)($_POST['csrf'] ?? '');
if (empty($_SESSION['admin_login_csrf']) || !hash_equals($_SESSION['admin_login_csrf'], $csrf)) { http_response_code(419); exit('Session expired. Please go back and try again.'); }
$cfgFile = __DIR__ . '/api/config.php';
$cfg = is_file($cfgFile) ? require $cfgFile : [];
$username = trim((string)($_POST['username'] ?? ''));
$password = (string)($_POST['password'] ?? '');
$expectedUser = (string)($cfg['dashboard_admin_username'] ?? '');
$hash = (string)($cfg['dashboard_admin_password_hash'] ?? '');
$next = (string)($_POST['next'] ?? 'dashboard.php');
$allowed = ['dashboard.php','contact-enquiries.php','email-subscribers.php','registered-members.php'];
if (!in_array($next, $allowed, true)) $next = 'dashboard.php';
$validConfig = $expectedUser !== '' && $hash !== '' && $hash !== 'SET_A_PASSWORD_HASH_HERE' && password_get_info($hash)['algo'] !== null;
$valid = $validConfig && hash_equals($expectedUser, $username) && password_verify($password, $hash);
if (!$valid) {
    $_SESSION['admin_login_error'] = $validConfig ? 'Username or password is incorrect.' : 'Dashboard login is not configured. Follow ADMIN_DASHBOARD_SECURITY_SETUP.txt to set your username and password hash.';
    header('Location: admin-login.php?next=' . rawurlencode($next), true, 303); exit;
}
session_regenerate_id(true);
$_SESSION['trinetra_admin_authenticated'] = true;
$_SESSION['trinetra_admin_username'] = $expectedUser;
$_SESSION['trinetra_admin_login_time'] = time();
unset($_SESSION['admin_login_csrf'], $_SESSION['admin_login_error']);
header('Location: ' . $next, true, 303); exit;
