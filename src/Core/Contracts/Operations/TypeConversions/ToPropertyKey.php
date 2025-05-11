<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\TypeConversions;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;
use Oru\EcmaScript\Core\Contracts\Values\SymbolValue;

interface ToPropertyKey
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-topropertykey
     *
     * @throws AbruptCompletion
     */
    public function __invoke(LanguageValue $argument): StringValue|SymbolValue;
}
