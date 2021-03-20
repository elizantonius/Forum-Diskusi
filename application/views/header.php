<html>

<head>
    <title>Forum STIMIK 1011</title>
</head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/header.css">

<body>
    <h1 style="color:white">Selamat Datang di Forum STIMIK Sepuluh Nopember</h1>
    <div id="wrapper">
        <div id="menu">
            <a class="item" href="<?= base_url() ?>beranda">Beranda</a> -
            <a class="item" href="<?= base_url() ?>menulis">Mulai Menulis</a>
            <?php
            if (!isset($_SESSION['is_login'])) { ?>
                <div id="userbar">
                    <a href="mendaftar">Mendaftar</a> | <a href="login">Masuk</a>

                    <?php echo $this->session->userdata('is_login') ? $this->session->userdata('nama_user') : ''; ?></div>
            <?php } else { ?>
                <div id="userbar">
                    <a href="<?php echo base_url() ?>login/logout">Logout, </a>
                    <?php echo $this->session->userdata('is_login') ? $this->session->userdata('nama_user') : ''; ?></div>
            <?php } ?>
        </div>
        <div id="content">