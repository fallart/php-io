<?php
/**
 * @copyright  Copyright (c) 2020 Jobplanner Ltd. (jobplanner.io)
 */
declare(strict_types=1);

namespace Input\Type;

class StringType extends AbstractType
{
    protected function filter($value)
    {
        return (string)$value;
    }
}