<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\ArgumentsObjects;

use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\UniqueFormalParameters;
use Oru\EcmaScript\Core\Contracts\Values\EnvironmentRecord;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface CreateMappedArgumentsObject
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-createmappedargumentsobject
     *
     * @param ListValue<LanguageValue> $argumentsList
     */
    public function __invoke(ObjectValue $func, UniqueFormalParameters $formals, ListValue $argumentsList, EnvironmentRecord $env): ObjectValue;
}
