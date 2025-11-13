<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions;

use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\HoistableDeclaration;
use Oru\EcmaScript\Core\Contracts\Values\EnvironmentRecord;
use Oru\EcmaScript\Core\Contracts\Values\NullValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface AsyncFunctionDeclaration extends HoistableDeclaration
{
    /** @see https://tc39.es/ecma262/#sec-runtime-semantics-instantiateasyncfunctionobject */
    public function instantiateAsyncFunctionObject(EnvironmentRecord $env, NullValue|EnvironmentRecord $privateEnv): ObjectValue;
}
