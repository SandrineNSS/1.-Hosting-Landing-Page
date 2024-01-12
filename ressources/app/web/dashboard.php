<?php
require_once '../lib/bib_connect.php';
require_once '../lib/bib_application.php';

if (!isset($_SESSION['user_id']) || !empty($_SESSION['is_admin'])) {
    header('Location: login.php');
    exit;
}
?>