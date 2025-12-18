<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\FunctionObjects;

use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\ConciseBody;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\FunctionBody;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\PropertySetParameterList;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\UniqueFormalParameters;
use Oru\EcmaScript\Core\Contracts\Values\EnvironmentRecord;
use Oru\EcmaScript\Core\Contracts\Values\NullValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\PrivateEnvironmentRecord;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;
use Oru\EcmaScript\Core\Contracts\Values\ThisMode;

interface OrdinaryFunctionCreate
{
    /**
     * @see https://tc39.es/ecma262/#sec-ordinaryfunctioncreate
     * @see https://tc39.es/ecma262/#table-internal-slots-of-ecmascript-function-objects
     *
     * @param ThisMode::LEXICAL_THIS|ThisMode::NON_LEXICAL_THIS $thisMode
     */
    public function __invoke(
        ObjectValue $functionPrototype,
        SourceText $sourceText,
        UniqueFormalParameters|PropertySetParameterList $parameterList,
        ConciseBody|FunctionBody $body,
        ThisMode $thisMode,
        EnvironmentRecord $env,
        NullValue|PrivateEnvironmentRecord $privateEnv,
    ): ObjectValue;
}
