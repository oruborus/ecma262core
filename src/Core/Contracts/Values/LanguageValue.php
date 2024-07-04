<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

interface LanguageValue extends Value
{
    public function getValue(): mixed;
}
