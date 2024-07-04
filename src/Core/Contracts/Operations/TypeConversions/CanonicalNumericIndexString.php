<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\TypeConversions;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\NumberValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;
use Oru\EcmaScript\Core\Contracts\Values\UndefinedValue;

interface CanonicalNumericIndexString
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-canonicalnumericindexstring
     */
    public function __invoke(Agent $agent, StringValue $argument): UndefinedValue|NumberValue;
}
