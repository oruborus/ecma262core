<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\TestingAndComparison;

use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface IsStringWellFormedUnicode
{
    /** @see https://tc39.es/ecma262/#sec-isstringwellformedunicode */
    public function __invoke(StringValue $string): BooleanValue;
}
