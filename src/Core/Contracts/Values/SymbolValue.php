<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

interface SymbolValue extends LanguageValue
{
    public function getValue(): string;

    public function getDescription(): StringValue|UndefinedValue;

    public function __toString(): string;
}
