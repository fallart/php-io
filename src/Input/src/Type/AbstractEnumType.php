<?php
/**
 * @copyright  Copyright (c) 2020 Jobplanner Ltd. (jobplanner.io)
 */
declare(strict_types=1);

namespace Input\Type;

abstract class AbstractEnumType extends AbstractType
{
    protected function filter($value)
    {
        if (in_array($value, $this->getAllowedValues(), true)) {
            return $value;
        }

        return null;
    }

    abstract public function getAllowedValues(): array;
}