<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\TypeConversions;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\BigIntValue;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;

interface StringToBigInt
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-stringtobigint
     *
     * @throws AbruptCompletion
     */
    public function __invoke(LanguageValue $argument): BigIntValue;
}
