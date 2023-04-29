
<?php
require_once __DIR__.'/../boot/boot.php';

$refunds = new Refunds;

$refunds ->delete_refund();
