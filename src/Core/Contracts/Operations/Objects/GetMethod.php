<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\Objects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;
use Oru\EcmaScript\Core\Contracts\Values\SymbolValue;
use Oru\EcmaScript\Core\Contracts\Values\UndefinedValue;

interface GetMethod
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-getmethod
     *
     * @throws AbruptCompletion
     */
    public function __invoke(Agent $agent, LanguageValue $value, StringValue|SymbolValue $propertyKey): UndefinedValue|ObjectValue;
}
