<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\Strings;

use Oru\EcmaScript\Core\Contracts\Values\NumberValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface StringIndexOf
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-stringindexof
     */
    public function __invoke(StringValue $string, StringValue $searchValue, NumberValue $fromIndex): NumberValue;
}
