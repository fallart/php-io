<?php
/**
 * @copyright  Copyright (c) 2020 Jobplanner Ltd. (jobplanner.io)
 */
declare(strict_types=1);

namespace Input;

class Input
{
    private ?string $description = null;
    private ?Type\AbstractType $value = null;
    private bool $hasValue = false;
    private PropertiesCollection $properties;
    private ?Type\AbstractType $default = null;

    /**
     * @return mixed
     */
    public function getValue()
    {
        if ($this->hasValue()) {
            return $this->value->getValue();
        }

        return $this->default->getValue();
    }

    /**
     * @param string $type
     * @param        $value
     *
     * @return $this
     * @throws Exception\TypeNotFoundException
     */
    public function setValue(string $type, $value): self
    {
        $this->value = (new TypeFactory())->get($type, $value);
        $this->hasValue = true;

        return $this;
    }

    /**
     * @return bool
     */
    public function hasValue(): bool
    {
        return $this->hasValue;
    }

    /**
     * @return PropertiesCollection
     */
    public function getProperties(): PropertiesCollection
    {
        return clone $this->properties;
    }

    /**
     * @param PropertiesCollection $properties
     *
     * @return self
     */
    public function withProperties(PropertiesCollection $properties): self
    {
        $this->properties = clone $properties;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

}