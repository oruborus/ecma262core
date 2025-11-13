<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions;

use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\HoistableDeclaration;
use Oru\EcmaScript\Core\Contracts\Values\EnvironmentRecord;
use Oru\EcmaScript\Core\Contracts\Values\NullValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface GeneratorDeclaration extends HoistableDeclaration
{
    /** @see https://tc39.es/ecma262/#sec-runtime-semantics-instantiategeneratorfunctionobject */
    public function instantiateGeneratorFunctionObject(EnvironmentRecord $env, NullValue|EnvironmentRecord $privateEnv): ObjectValue;
}
