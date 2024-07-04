<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\SymbolObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\SymbolValue;

interface ThisSymbolValue
{
    /**
     * @see https://262.ecma-international.org/12.0/#thissymbolvalue
     *
     * @throws AbruptCompletion
     */
    public function __invoke(Agent $agent, LanguageValue $value): SymbolValue;
}
