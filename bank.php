<?php
require_once 'autoload.php';

use GabsDSousa\Bank\Model\Account\Account;
use GabsDSousa\Bank\Model\Account\Current;
use GabsDSousa\Bank\Model\Account\Holder;
use GabsDSousa\Bank\Model\Services\Authenticator;
use GabsDSousa\Bank\Model\Account\Savings;
use GabsDSousa\Bank\Model\Address;
use GabsDSousa\Bank\Model\SSN;

$auth = new Authenticator();
$address1 = new Address('New York', '7th', '89','3215432' );
$address2 = new Address('Vancouver', '7th', '75','6574803' );

echo $address1;
echo $address2->city;
echo PHP_EOL;

$firstHolder = new Holder(new SSN("600-01-1590"), "Teddison", $address1);
$firstAccount = new Current($firstHolder);
$firstAccount->deposit(500);
$firstAccount->withdraw(300);
echo $firstAccount->getHolder()->getSsn().' - '.$firstAccount->getHolder()->getName().' your balance is: $'.$firstAccount->getBalance().PHP_EOL;

$secondHolder = new Holder(new SSN("660-01-1590"), "Walter", $address2);
$secondHolder = new Savings($secondHolder);
$secondHolder->deposit(11500);
$secondHolder->withdraw(300);
echo $secondHolder->getHolder()->getSsn().' - '.$secondHolder->getHolder()->getName().' your balance is: $'.$secondHolder->getBalance().PHP_EOL;

$thirdHolder = new Holder(new SSN("760-05-1199"), "Wilson", $address1);
$thirdHolder = new Current($thirdHolder);
$thirdHolder->deposit(1500);
$thirdHolder->withdraw(300);
echo $thirdHolder->getHolder()->getSsn().' - '.$thirdHolder->getHolder()->getName().' your balance is: $'.$thirdHolder->getBalance().PHP_EOL;
echo 'Total accounts:'.Account::getAccountCount().PHP_EOL;

$thirdHolder->transfer(1128, $firstAccount);

echo 'Wilson is\'nt Holder on Simple Bank anymore and transfer everything to Teddison.'.PHP_EOL;
$auth->login($firstHolder,"qwert");
echo $firstAccount->getHolder()->getSsn().' - '.$firstAccount->getHolder()->getName().' your balance is: $'.$firstAccount->getBalance().PHP_EOL;
unset($thirdHolder);
echo 'Total accounts:'.Account::getAccountCount().PHP_EOL;