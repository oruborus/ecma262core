<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

interface CompletionValue extends SpecificationValue
{
    /**
     * @psalm-mutation-free
     */
    public function getValue(): LanguageValue;
}
