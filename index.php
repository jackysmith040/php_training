<?php

require_once 'vendor/autoload.php';
use App\Account;

$myAccount = new Account();
$myAccount->owner = "Director";
$myAccount->deposit(100);

echo "Account Owner: " . $myAccount->owner . "\n";
echo "Your balance is: " . $myAccount->balance . "\n";