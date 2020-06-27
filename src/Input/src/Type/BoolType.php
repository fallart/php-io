<?php
/**
 * @copyright  Copyright (c) 2020 Jobplanner Ltd. (jobplanner.io)
 */
declare(strict_types=1);

namespace Input\Type;

class BoolType extends AbstractType
{
    protected function filter($value)
    {
        return filter_var(
            $value,
            FILTER_VALIDATE_BOOLEAN,
            ['options' => ['default' => null]]
        );
    }
}