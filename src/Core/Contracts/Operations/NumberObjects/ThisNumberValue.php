<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\NumberObjects;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\NumberValue;

interface ThisNumberValue
{
    /**
     * @see https://262.ecma-international.org/12.0/#thisnumbervalue
     *
     * @throws AbruptCompletion
     */
    public function __invoke(LanguageValue $value): NumberValue;
}
