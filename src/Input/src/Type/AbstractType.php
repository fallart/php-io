<?php
/**
 * @copyright  Copyright (c) 2020 Jobplanner Ltd. (jobplanner.io)
 */
declare(strict_types=1);

namespace Input\Type;

abstract class AbstractType
{
    public const TYPE_STRING = 'string';
    public const TYPE_INT    = 'int';
    public const TYPE_BOOL   = 'bool';
    public const TYPE_FLOAT  = 'float';

    private $value;

    /**
     * AbstractType constructor.
     *
     * @param $value
     */
    public function __construct($value)
    {
        $this->value = $this->filter($value);
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    abstract protected function filter($value);
}