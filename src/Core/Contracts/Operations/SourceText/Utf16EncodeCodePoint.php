<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\SourceText;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\NumberValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface Utf16EncodeCodePoint
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-utf16encodecodepoint
     */
    public function __invoke(Agent $agent, NumberValue $cp): StringValue;
}
