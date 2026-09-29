<?php
require_once 'config.php';
header('Location: '.(is_login() ? 'dashboard.php' : 'login.php'));
exit;
