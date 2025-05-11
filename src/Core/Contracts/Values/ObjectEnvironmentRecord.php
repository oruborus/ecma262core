<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;


interface ObjectEnvironmentRecord extends EnvironmentRecord
{
    public function setBindingObject(ObjectValue $bindingObject): void;

    public function getBindingObject(): ObjectValue;

    public function setIsWithEnvironment(BooleanValue $isWithEnvironment): void;

    public function getIsWithEnvironment(): BooleanValue;
}
