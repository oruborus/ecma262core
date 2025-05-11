<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\TypeConversions;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\BigIntValue;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;

interface ToBigInt
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-tobigint
     *
     * @throws AbruptCompletion
     */
    public function __invoke(LanguageValue $argument): BigIntValue;
}
