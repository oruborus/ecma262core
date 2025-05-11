<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\TypeConversions;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\NumberValue;

interface ToInt32
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-toint32
     *
     * @throws AbruptCompletion
     */
    public function __invoke(LanguageValue $argument): NumberValue;
}
