<?php
session_start();
date_default_timezone_set('Asia/Jakarta');

// Definisi Base URL
// Ganti dengan URL aplikasi Anda saat di hosting (misal: https://domain.com/)
define('BASE_URL', 'http://localhost/testing/e-arsip/');

// Fungsi helper untuk URL
function base_url($path = '') {
    return BASE_URL . $path;
}
