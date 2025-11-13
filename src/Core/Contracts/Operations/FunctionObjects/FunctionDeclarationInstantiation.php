<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\FunctionObjects;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\UnusedValue;

interface FunctionDeclarationInstantiation
{
    /**
     * @see https://tc39.es/ecma262/#sec-functiondeclarationinstantiation
     *
     * @param ListValue<LanguageValue> $argumentsList
     * @throws AbruptCompletion
     */
    public function __invoke(ObjectValue $func, ListValue $argumentsList): UnusedValue;
}
