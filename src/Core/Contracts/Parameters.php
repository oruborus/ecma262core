<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts;

interface Parameters
{
    public function add(ParameterName ...$parameterNames): static;

    public function has(ParameterName $parameterName): bool;

    public function remove(ParameterName ...$parameterNames): static;

    public function take(ParameterName ...$parameterNames): static;
}
