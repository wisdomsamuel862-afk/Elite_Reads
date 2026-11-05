<?php
require_once "classes/Database.php";
require_once "classes/Dashboard.php";
session_start();
if(!isset($_SESSION['member_id'])){
    header("Location: login.php");
    exit;
}
