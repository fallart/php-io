<?php
/**
 * @copyright  Copyright (c) 2020 Jobplanner Ltd. (jobplanner.io)
 */
declare(strict_types=1);

namespace Input;

final class InputsCollection extends AbstractTypedCollection
{
    protected function checkType($value): bool
    {
        return $value instanceof Input;
    }
}