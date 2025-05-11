<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;


interface IteratorRecord extends SpecificationValue
{
    public function setIterator(ObjectValue $value): void;

    public function getIterator(): ObjectValue;

    public function setNextMethod(ObjectValue $value): void;

    public function getNextMethod(): ObjectValue;

    public function setDone(BooleanValue $value): void;

    public function getDone(): BooleanValue;
}
