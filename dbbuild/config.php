<?php
session_start();
$host='localhost'; $db='sistem_pendataan_rt'; $user='root'; $pass='';
try {
 $pdo=new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4",$user,$pass,[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC]);
} catch(PDOException $e){ die('Koneksi database gagal: '.$e->getMessage()); }
function is_login(){return isset($_SESSION['login']);}
function is_admin(){return is_login() && $_SESSION['login']['role']==='Admin';}
function require_login(){if(!is_login()){header('Location: login.php');exit;}}
function require_admin(){require_login();if(!is_admin()){header('Location: dashboard.php');exit;}}
function e($v){return htmlspecialchars($v??'',ENT_QUOTES,'UTF-8');}
function flash($type,$msg){$_SESSION['flash']=['type'=>$type,'msg'=>$msg];}
function show_flash(){if(isset($_SESSION['flash'])){$f=$_SESSION['flash'];echo '<div class="alert '.e($f['type']).'">'.e($f['msg']).'</div>';unset($_SESSION['flash']);}}
