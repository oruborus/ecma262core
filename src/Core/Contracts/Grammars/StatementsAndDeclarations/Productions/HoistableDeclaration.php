<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions;

use Oru\EcmaScript\Core\Contracts\Values\EnvironmentRecord;
use Oru\EcmaScript\Core\Contracts\Values\NullValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface HoistableDeclaration extends Declaration
{
    /** @see https://tc39.es/ecma262/#sec-runtime-semantics-instantiatefunctionobject */
    public function instantiateFunctionObject(EnvironmentRecord $env, NullValue|EnvironmentRecord $privateEnv): ObjectValue;
}
