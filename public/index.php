<?php
/**
 * @copyright  Copyright (c) 2020 Jobplanner Ltd. (jobplanner.io)
 */
declare(strict_types=1);

chdir(dirname(__DIR__));
require 'vendor/autoload.php';

$avail = new \Request\UserRequest();


foreach ($avail->getBody() as $item) {
    var_dump($item);
}


$a = new \Laminas\InputFilter\Input();