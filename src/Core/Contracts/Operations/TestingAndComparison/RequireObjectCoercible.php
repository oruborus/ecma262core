<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\TestingAndComparison;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\BigIntValue;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\NumberValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;
use Oru\EcmaScript\Core\Contracts\Values\SymbolValue;

interface RequireObjectCoercible
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-requireobjectcoercible
     * @see https://262.ecma-international.org/12.0/#table-requireobjectcoercible-results
     *
     * @throws AbruptCompletion
     */
    public function __invoke(LanguageValue $argument): BooleanValue|NumberValue|BigIntValue|StringValue|SymbolValue|ObjectValue;
}
