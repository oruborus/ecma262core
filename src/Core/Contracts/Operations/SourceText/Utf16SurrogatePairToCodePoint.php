<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\SourceText;

use Oru\EcmaScript\Core\Contracts\Values\NumberValue;

interface Utf16SurrogatePairToCodePoint
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-utf16decodesurrogatepair
     */
    public function __invoke(NumberValue $lead, NumberValue $trail): NumberValue;
}
