<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\SourceText;

use Oru\EcmaScript\Core\Contracts\Values\CodePointRecord;
use Oru\EcmaScript\Core\Contracts\Values\NumberValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface CodePointAt
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-codepointat
     */
    public function __invoke(StringValue $string, NumberValue $position): CodePointRecord;
}
