<?php

require_once 'autoload.php';

use GabsDSousa\Bank\Model\Employee\Director;
use GabsDSousa\Bank\Model\Employee\Manager;
use GabsDSousa\Bank\Model\Services\Authenticator;
use GabsDSousa\Bank\Model\SSN;
use GabsDSousa\Bank\Model\Services\BonusController;

$ssn1 = new SSN("359-12-3330");
$ssn2 = new SSN("182-46-4462");

$auth = new Authenticator();

$employeeController = new BonusController();

$manager = new Manager("Markus",$ssn1,3000);
$director = new Director("David",$ssn2,6000);

echo 'Manager Salary: $'.$manager->getSalary().PHP_EOL;
$auth->login($manager,"4321");
$auth->login($director,"1234");
$employeeController->addBonus($manager);
$employeeController->addBonus($manager);
echo 'Markus got two bonus, now the salary is: $'.($employeeController->getTotalBonus()+$manager->getSalary()).PHP_EOL;
