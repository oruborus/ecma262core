<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

use Oru\EcmaScript\Core\Contracts\Agent;

interface IteratorRecord extends SpecificationValue
{
    public function setIterator(ObjectValue $value): void;

    public function getIterator(Agent $agent): ObjectValue;

    public function setNextMethod(ObjectValue $value): void;

    public function getNextMethod(Agent $agent): ObjectValue;

    public function setDone(BooleanValue $value): void;

    public function getDone(Agent $agent): BooleanValue;
}
