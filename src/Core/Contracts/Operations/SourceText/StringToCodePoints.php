<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\SourceText;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface StringToCodePoints
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-stringtocodepoints
     *
     * @return ListValue<int>
     */
    public function __invoke(Agent $agent, StringValue $string): ListValue;
}
