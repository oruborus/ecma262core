<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\RegExpObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface EscapeRegExpPattern
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-escaperegexppattern
     */
    public function __invoke(Agent $agent, StringValue $p, LanguageValue $f): StringValue;
}
