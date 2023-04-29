<?php
require_once __DIR__.'/../boot/boot.php';

$refunds = new Refunds;

$refunds ->new_refund();


header('Location: /homesweethome/refunds.php');