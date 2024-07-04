<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

interface UnusedValue extends LanguageValue
{
    public function getValue(): never;
}
