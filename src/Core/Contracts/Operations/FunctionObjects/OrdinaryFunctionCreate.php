<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\FunctionObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\ConciseBody;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\PropertySetParameterList;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\UniqueFormalParameters;
use Oru\EcmaScript\Core\Contracts\Values\EnvironmentRecord;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\ThisMode;

interface OrdinaryFunctionCreate
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-ordinaryfunctioncreate
     *
     * @param ListValue<int> $sourceText
     * @param ThisMode::LEXICAL_THIS|ThisMode::NON_LEXICAL_THIS $thisMode
     */
    public function __invoke(Agent $agent, ObjectValue $functionPrototype, ListValue $sourceText, UniqueFormalParameters|PropertySetParameterList $parameterList, ConciseBody $body, ThisMode $thisMode, EnvironmentRecord $scope): ObjectValue;
}
