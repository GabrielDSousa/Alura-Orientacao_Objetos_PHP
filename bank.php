<?php
require_once 'src/Account.php';
require_once 'src/Holder.php';
require_once 'src/SSN.php';

$firstHolder = new Holder(new SSN("600-01-1590"), "Teddison");
$firstAccount = new Account($firstHolder);
$firstAccount->deposit(500);
$firstAccount->withdraw(300);
echo $firstAccount->getHolder()->getSsn()->getNumber().' - '.$firstAccount->getHolder()->getName().' your balance is: $'.$firstAccount->getBalance().PHP_EOL;

$secondHolder = new Holder(new SSN("660-01-1590"), "Walter");
$secondHolder = new Account($secondHolder);
$secondHolder->deposit(11500);
$secondHolder->withdraw(300);
echo $secondHolder->getHolder()->getSsn()->getNumber().' - '.$secondHolder->getHolder()->getName().' your balance is: $'.$secondHolder->getBalance().PHP_EOL;

$thirdHolder = new Holder(new SSN("760-05-1199"), "Wilson");
$thirdHolder = new Account($thirdHolder);
$thirdHolder->deposit(1500);
$thirdHolder->withdraw(300);
echo $thirdHolder->getHolder()->getSsn()->getNumber().' - '.$thirdHolder->getHolder()->getName().' your balance is: $'.$thirdHolder->getBalance().PHP_EOL;

echo 'Total accounts:'.Account::getAccountCount().PHP_EOL;
echo 'Wilson is no more a Holder on Simple Bank.'.PHP_EOL;
unset($thirdHolder);
echo 'Total accounts:'.Account::getAccountCount().PHP_EOL;