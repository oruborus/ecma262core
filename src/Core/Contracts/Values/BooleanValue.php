<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

interface BooleanValue extends LanguageValue
{
    public function getValue(): bool;
}
