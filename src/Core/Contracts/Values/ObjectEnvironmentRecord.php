<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

use Oru\EcmaScript\Core\Contracts\Agent;

interface ObjectEnvironmentRecord extends EnvironmentRecord
{
    public function setBindingObject(ObjectValue $bindingObject): void;

    public function getBindingObject(Agent $agent): ObjectValue;

    public function setIsWithEnvironment(BooleanValue $isWithEnvironment): void;

    public function getIsWithEnvironment(Agent $agent): BooleanValue;
}
