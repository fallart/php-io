<?php
/**
 * @copyright  Copyright (c) 2020 Jobplanner Ltd. (jobplanner.io)
 */
declare(strict_types=1);

namespace Input\Exception;

use Exception;

class TypeNotFoundException extends Exception
{
    public function __construct(string $type)
    {
        parent::__construct(sprintf(
            'Type \'%s\' not found in types factory!',
            $type,
        ));
    }

}