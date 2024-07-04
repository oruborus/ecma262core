<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

interface ReturnCompletion extends AbruptCompletion
{
    /**
     * @psalm-mutation-free
     */
    public function getValue(): LanguageValue;
}
