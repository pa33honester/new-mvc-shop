<?php

$user = $_SESSION['user'];
global $userNav;

require_once('admin/controllers/shared/statistics.php');

$title = 'System Administration - Nails By Leslie';
$homeNav = 'class="active open"';

require('admin/views/home/index.php');
