<?php

require_once('start.php');

include('templates/header.php');

//include pages in here
$page_status = 'current';
include('pages/home.php');

$page_status = 'next';
include('pages/forms.php');

$page_status = 'next';
include('pages/grid.php');

$page_status = 'next';
include('pages/tip.php');

$page_status = 'next';
include('pages/bill.php');
?>

<?php

include('templates/footer.php');