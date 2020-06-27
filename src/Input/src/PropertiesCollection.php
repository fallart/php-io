<?php
/**
 * @copyright  Copyright (c) 2020 Jobplanner Ltd. (jobplanner.io)
 */
declare(strict_types=1);

namespace Input;

use Input\Property\AbstractProperty;

final class PropertiesCollection extends AbstractTypedCollection
{
    protected function checkType($value): bool
    {
        return $value instanceof AbstractProperty;
    }
}