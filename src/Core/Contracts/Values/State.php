<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

interface State extends SpecificationValue
{
    public function setEndIndex(int $endIndex): void;

    public function getEndIndex(): int;

    /**
     * @param (ListValue<int, int>|UndefinedValue)[] $captures
     */
    public function setCaptures(array $captures): void;

    /**
     * @return (ListValue<int, int>|UndefinedValue)[]
     */
    public function getCaptures(): array;
}
