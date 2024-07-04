<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\JsonObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface UnicodeEscape
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-unicodeescape
     */
    public function __invoke(Agent $agent, LanguageValue $value): StringValue;
}
