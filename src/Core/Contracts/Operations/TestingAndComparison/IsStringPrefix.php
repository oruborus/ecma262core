<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\TestingAndComparison;

use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface IsStringPrefix
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-isstringprefix
     */
    public function __invoke(StringValue $p, StringValue $q): BooleanValue;
}
