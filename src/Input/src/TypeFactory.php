<?php
/**
 * @copyright  Copyright (c) 2020 Jobplanner Ltd. (jobplanner.io)
 */
declare(strict_types=1);

namespace Input;

use Input\Exception\TypeNotFoundException;
use Input\Type\AbstractType;
use Input\Type\BoolType;
use Input\Type\FloatType;
use Input\Type\IntType;
use Input\Type\StringType;

class TypeFactory
{
    private array $map = [
        AbstractType::TYPE_STRING => StringType::class,
        AbstractType::TYPE_INT    => IntType::class,
        AbstractType::TYPE_BOOL   => BoolType::class,
        AbstractType::TYPE_FLOAT  => FloatType::class,
    ];

    /**
     * @param string $name
     * @param        $value
     *
     * @return AbstractType
     * @throws TypeNotFoundException
     */
    public function get(string $name, $value): AbstractType
    {
        if (!isset($this->map[$name])) {
            throw new TypeNotFoundException($name);
        }
        $classname = $this->map[$name];

        return new $classname;
    }
}