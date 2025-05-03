<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\Objects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;
use Oru\EcmaScript\Core\Contracts\Values\SymbolValue;

interface Invoke
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-invoke
     *
     * @param ?ListValue<LanguageValue> $argumentsList
     * @throws AbruptCompletion
     */
    public function __invoke(Agent $agent, LanguageValue $v, StringValue|SymbolValue $p, ?ListValue $argumentsList = null): LanguageValue;
}
