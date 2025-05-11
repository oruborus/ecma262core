<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions;

use Oru\EcmaScript\Core\Contracts\Values\BigIntValue;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\NullValue;
use Oru\EcmaScript\Core\Contracts\Values\NumberValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface Literal extends PrimaryExpression
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-literals-runtime-semantics-evaluation
     */
    public function evaluate(): NumberValue|BigIntValue|StringValue|NullValue|BooleanValue;

    public function isUseStrictDirective(): bool;
}
