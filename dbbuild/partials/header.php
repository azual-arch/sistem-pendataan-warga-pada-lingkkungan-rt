<?php require_once __DIR__.'/../config.php'; require_login(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1.0">
<title><?=e($page_title ?? 'Sistem Pendataan RT')?></title>
<link rel="stylesheet" href="assets/style.css">
</head>
<body>
<div class="app">
<aside class="sidebar">
    <div class="brand"><span>RT</span><div><b>SIWARGA</b><small>Pendataan RT</small></div></div>
    <div class="user-mini">
        <div class="avatar"><?=strtoupper(substr($_SESSION['login']['nama'],0,1))?></div>
        <div><b><?=e($_SESSION['login']['nama'])?></b><small><?=e($_SESSION['login']['role'])?></small></div>
    </div>
    <nav>
        <a class="<?=($active??'')==='dashboard'?'active':''?>" href="dashboard.php">🏠 <span>Dashboard</span></a>
        <a class="<?=($active??'')==='warga'?'active':''?>" href="warga.php">👥 <span>Data Warga</span></a>
        <a class="<?=($active??'')==='kk'?'active':''?>" href="kk.php">🏠 <span>Data Kartu Keluarga</span></a>
        <a class="<?=($active??'')==='mutasi'?'active':''?>" href="mutasi.php">🔄 <span>Mutasi Warga</span></a>
        <a class="<?=($active??'')==='surat'?'active':''?>" href="surat.php">📄 <span>Surat Pengantar</span></a>
        <a class="<?=($active??'')==='laporan'?'active':''?>" href="laporan.php">📊 <span>Laporan</span></a>
        <?php if(is_admin()): ?><a class="<?=($active??'')==='users'?'active':''?>" href="users.php">⚙️ <span>Kelola Pengguna</span></a><?php endif; ?>
    </nav>
    <a class="logout" href="logout.php">↪ Keluar</a>
</aside>
<main class="main">
<header class="topbar">
    <div><h2><?=e($page_title ?? '')?></h2><p><?=e($page_desc ?? '')?></p></div>
    <div class="top-user">👤 <?=e($_SESSION['login']['nama'])?></div>
</header>
<div class="content">
<?php show_flash(); ?>
