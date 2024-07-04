<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\Objects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;

interface Call
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-call
     *
     * @param ?ListValue<int, LanguageValue> $argumentsList
     * @throws AbruptCompletion
     */
    public function __invoke(Agent $agent, LanguageValue $function, LanguageValue $value, ?ListValue $argumentsList = null): LanguageValue;
}
